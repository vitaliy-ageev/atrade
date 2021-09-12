<?php
    
    
    namespace app\controllers;
    
    
    use app\models\Ideas;
    use atrade\App;
    use atrade\libs\MobilePagination;
    use atrade\libs\Pagination;
    
    
    class IdeasController extends AppController {
        
        public function indexAction()  {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // получаем статьи из БД
            $articlesDesktop = \R::find('articles', 'ORDER BY order_id DESC LIMIT 10');
            $articlesMobile = \R::find('articles', 'ORDER BY order_id DESC  LIMIT 5');
    
            // получаем активные сигналы из БД
            //        $signalsActive = \R::find('signals', 'active_status = 1 AND close_status = 0');
            $signals = \R::find('signals', 'ORDER BY id DESC LIMIT 10');
            $signals_mobile = \R::find('signals', 'ORDER BY id DESC LIMIT 5');
            // получаем последние 10 закрытых сигналов из БД
            $signalsHistory = \R::find('signals', 'active_status = 0 AND in_work_status = 0 ORDER BY id DESC LIMIT 10');
            // получаем все открытые позиции
            $signalActive = \R::find('signals', ' active_status = 1 OR in_work_status = 1 ORDER BY id DESC');
            // получаем все валюты из БД
            $signalsCurrencies = \R::find('currencies');
            // получаем направления сигнала
            $signalsType = \R::find('signals_type');
    
            // создаем объект модели
            $receivingSignals = new Ideas();
            // получаем все просмотренные сигналы
            $signalsViewed = $receivingSignals->getReceivingSignals();
    
            // получим данные документа "Как торговать по сигналам"
            $documentSignals = \R::find('documents', "id = ?", ['1']);
    
    
            // заполняем мета данные
            $this->setMeta('Торговые идеи', 'Описание...', 'Ключевые слова...');
    
            // отправляем данные из БД в вид
            $this->set(compact('articlesDesktop', 'articlesMobile', 'signals', 'signals_mobile', 'signalsCurrencies', 'signalsType', 'signalsHistory', 'signalActive', 'signalsViewed', 'documentSignals'));
            
        }
        
        public function historyAction()  {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // создаем объект модели сигналов
            $alias_save = new Ideas();
            // получаем сохраненные алиасы
            $alias_saved = $alias_save->getHistoryView();
            
            // если указан алиас
            if(!empty($this->route['alias'])) {
                // то проверяем не равняются ли он table или  grid
                if($this->route['alias'] == 'table' || $this->route['alias'] == 'grid') {
                    // если алиас равняется одному из них, то получаем его
                    $alias = $this->route['alias'];
                    // записываем текущий алиас в куки
                    $alias_save->setHistoryView($alias);
                } else {
                    // иначе устанавливаем стандартный алиас
                    $alias = 'table';
                    // формируем путь
                    $http  = '/ideas/history/' . $alias;
                    // отправляем по указанному  пути
                    redirect($http);
                }
                
            } else {
                // иначе проверяем, есть ли сохраненные алиасы в куки
                if($alias_saved) {
                    // если есть, то берем последний
                    $alias = end($alias_saved);
                    // формируем путь
                    $http = '/ideas/history/' . $alias;
                    // отправляем по указанному  пути
                    redirect($http);
                } else {
                    // иначе устанавливаем стандартный алиас
                    $alias = 'table';
                    // формируем путь
                    $http  = '/ideas/history/' . $alias;
                    // отправляем по указанному  пути
                    redirect($http);
                }
            }
            
            // пагинация
            // номер текущей страницы
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            // ограничение статей на странице табличного вида
            $perpage_table = App::$app->getProperty('history_pagination');
            // ограничение статей на странице сеточного вида
            $perpage_item = App::$app->getProperty('history_pagination_item');
            // ограничение статей на странице мобильного сеточного вида
            $perpage_item_mobile = App::$app->getProperty('history_pagination_item_mobile');
            //формируем общее количество страниц
            $total = \R::count('signals');
            // вызываем объект класса пагинации табличного вида и передаем данные
            $pagination_table = new Pagination($page, $perpage_table, $total);
            // вызываем объект класса пагинации сеточного вида и передаем данные
            $pagination_item = new Pagination($page, $perpage_item, $total);
            // вызываем объект класса мобильной пагинации табличного вида и передаем данные
            $mobile_pagination_table = new MobilePagination($page, $perpage_table, $total);
            // вызываем объект класса мобильной пагинации сеточного вида и передаем данные
            $mobile_pagination_item = new MobilePagination($page, $perpage_item_mobile, $total);
            // формируем с какой записи показывать пагинацию для табличного вида
            $start_table = $pagination_table->getStart();
            // формируем с какой записи показывать пагинацию для сеточного вида
            $start_item = $pagination_item->getStart();
            // формируем с какой записи показывать пагинацию для мобильного сеточного вида
            $start_item_mobile = $mobile_pagination_item->getStart();
            
            
            // получаем историю закрытых сигналов для табличного вида
            $signalsHistory = \R::find('signals', "active_status = 0 AND in_work_status = 0 ORDER BY id DESC LIMIT $start_table, $perpage_table");
            // получаем историю закрытых сигналов для сеточного вида
            $signalsHistoryItem = \R::find('signals', "active_status = 0 AND in_work_status = 0 ORDER BY id DESC LIMIT $start_item, $perpage_item");
            // получаем историю закрытых сигналов для мобильного сеточного вида
            $signalsHistoryItemMobile = \R::find('signals', "active_status = 0 AND in_work_status = 0 ORDER BY id DESC LIMIT $start_item_mobile, $perpage_item_mobile");
            
            
            // получаем все валюты из БД
            $signalsCurrencies = \R::find('currencies');
            // получаем направления сигнала
            $signalsType = \R::find('signals_type');
            
            // создаем объект модели
            $receivingSignals = new Ideas();
            // получаем все просмотренные сигналы
            $signalsViewed = $receivingSignals->getReceivingSignals();
            
            // заполняем мета данные
            $this->setMeta('История идей', 'Описание...', 'Ключевые слова...');
            
            // отправляем данные из БД в вид
            $this->set(compact('alias', 'signalsHistory', 'signalsCurrencies', 'signalsType', 'pagination_table', 'mobile_pagination_table', 'signalsHistoryItem', 'pagination_item', 'mobile_pagination_item', 'signalsHistoryItemMobile', 'signalsViewed'));
            
        }
    
        public function viewAction() {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // получаем id сигнала из массива get
            $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        
            // если id не пуст
            if($id) {
                // то мы получаем данные о сигнале по id
                $signal = \R::findOne('signals', 'id = ?', [$id]);
                // если данные пусты
                if(!$signal) {
                    // возворащаем false
                    return false;
                }
            
                //создаем объект модели
                $signalsViewed = new Ideas();
                // записываем текущий сигнал в куки
                $signalsViewed->setReceivingSignals($id);
            
            
            
                // получаем текущую валюту
                $signalCurrency = \R::findOne('currencies', 'id = ?', [$signal->curr_id]);
                // получаем направления сигнала
                $signalType = \R::findOne('signals_type', 'id = ?', [$signal->type_id]);
            
                // получим данные документа "Уведомления о рисках"
                $documentSignal = \R::find('documents', "id = ?", ['3']);
            }
        
        
            // если запрос пришел ассинхронно
            if($this->isAjax()) {
                // тогда загружаем шаблон модального окна
                $this->loadView( 'modal_ideas', compact('signal', 'signalCurrency', 'signalType', 'documentSignal'));
            }
        
            
        }
        
    }