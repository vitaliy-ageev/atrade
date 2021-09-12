<?php
    
    
    namespace app\controllers;
    
    use app\models\Main;
    use atrade\Cache;
    
    
    class MainController extends AppController {
        
        public function indexAction() {
            // формируем ссылку редиректа
            $http = '/ideas';
            // отправляем на страницу редиректа
            redirect($http);
            
        }
        
        public function viewAction() {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            //  подключаем новый шаблон
            $this->layout  = 'document';
            
            // берем текущий alias из масссива маршрутов
            $alias = $this->route['alias'];
            
            // получаем информацию о запрошенном документе
            $document = \R::findOne('documents', 'alias = ?', [$alias]);
            
            // если такой статьи нет, выбрасываем исключение
            if(!$document) {
                throw new \Exception("Страница не найдена", 404);
            }
            
            // записываем в куки запрошенный документ
            $rv_document = new Main();
            $rv_document->setRecentlyViewed($document->id);
            
            
            // получим данные документа "Как торговать по сигналам"
            $documentSignals = \R::find('documents', "id = ?", ['1']);
            // получим данные документа "Cookies"
            $documentCookie = \R::find('documents', "id = ?", ['2']);
            // получим данные документа "Уведомление о рисках"
            $documentRisk = \R::find('documents', "id = ?", ['3']);
            // получим данные документа "Политика конфиденциальоности"
            $documentPolitic = \R::find('documents', "id = ?", ['4']);
            // получим данные документа "О торговых советниках"
            $documentAboutAdvisors = \R::find('documents', "id = ?", ['5']);
            // получим данные документа "Советник под заказ"
            $documentAdvisorsOrder = \R::find('documents', "id = ?", ['6']);
            
            
            
            
            // формируем мета данные
            $title = $document['title'];
            $description = $document['description'];
            $keywords = $document['keywords'];
            
            // заполняем мета данные
            $this->setMeta($title, $description, $keywords);
            
            // отправляем данные из БД в вид
            $this->set(compact('document', 'documentSignals', 'documentCookie', 'documentRisk', 'documentPolitic', 'documentAboutAdvisors', 'documentAdvisorsOrder'));
            
        }
        
    }