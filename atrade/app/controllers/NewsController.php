<?php
    
    
    namespace app\controllers;
    
    use app\models\Article;
    use atrade\App;
    use atrade\Cache;
    use atrade\libs\MobilePagination;
    use atrade\libs\Pagination;
    
    
    class NewsController extends AppController {
        
        // основной экшен контроллера
        public function indexAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // номер текущей страницы
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            // ограничение статей на странице
            $perpage = App::$app->getProperty('pagination');
            //формируем общее количество страниц
            $total = \R::count('articles');
            // вызываем объект класса пагинации и передаем данные
            $pagination = new Pagination($page, $perpage, $total);
            // вызываем объект класса мобильной пагинации и передаем данные
            $mobile_pagination = new MobilePagination($page, $perpage, $total);
            // формируем с какой записи показывать пагинацию
            $start = $pagination->getStart();
            $start_m = $mobile_pagination->getStart();
            
            
            // получаем статьи из БД
            $articlesDesktop = \R::find('articles', "ORDER BY order_id DESC LIMIT $start, $perpage");
            $articlesMobile = \R::find('articles', "ORDER BY order_id DESC LIMIT $start_m, $perpage");
            // получаем все статьи и сортируем их по просмотрам от большего к меньшему
            $inTrend = \R::findAll('articles',  'ORDER BY views DESC');
            // берем последние 5 статей
            $articlesInTrend = array_slice($inTrend, 0, 5);
            
            
            // создаем объект модели
            $p_modal = new Article();
            // формируем путь текущего маршрута
            $route =  $this->route['action'];
            // если есть какие-то гет-параметры
            if( isset($_GET['page'])) {
                // то берем их
                $route = 'articles?page=' . $_GET['page'];
            }
            // дописываем пустой масссив
            $route .= '.' . '';
            
            // сохраняем текущий маршрут в куки
            $p_modal->setBackUrl($route);
            // загружаем все маршруты
            $r_back = $p_modal->getBackUrl();
            // присваиваем дефолтное значение ссылки назад
            $goBack = null;
            
            // получаем список всех категорий
            $cats = \R::findAll('categories');
            
            // заполняем мета данные
            $this->setMeta('Новости', 'Описание...', 'Ключевые слова...');
            
            // отправляем данные из БД в вид
            $this->set(compact('articlesDesktop', 'articlesMobile', 'articlesInTrend', 'cats', 'pagination', 'mobile_pagination'));
            
        }
        
        
        // метод экшена для просмотра конкретной новости
        public function viewAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // берем текущий alias из масссива маршрутов
            $alias = $this->route['alias'];
            // получаем информацию о запрошенной статье
            $article = \R::findOne('articles', 'alias = ?', [$alias]);
            
            // если такой статьи нет, выбрасываем исключение
            if(!$article) {
                throw new \Exception("Страница не найдена", 404);
            }
            
            // получаем список категорий
            $categories = \R::find('categories');
            // получаем текущий id категории
            $category = $categories[$article->category_id]['id'];
            // получаем все статьи текущей категории
            $categoryArticles = \R::find('articles', "category_id = ? LIMIT 5", [$category]);
            
            
            // записываем в куки запрошенную статью
            $p_modal = new Article();
            $p_modal->setRecentlyViewed($article->id);
            
            // получаем просмотренные статьи
            $r_viewed = $p_modal->getRecentlyViewed();
            $recentlyViewed = null;
            
            // если есть просмотренные статьи
            if($r_viewed) {
                // то достаем последние 3 из таблицы
                $recentlyViewed = \R::find('articles', 'id IN ('. \R::genSlots($r_viewed)  . ') ', $r_viewed);
                
            }
            
            // получаем текущий маршрут страницы
            $route = 'news/'  . $this->route['alias'];
            // добавляем пустой массив
            $route .= '.' . '';
            
            // сохраняем текущий маршрут в куки
            $p_modal->setBackUrl($route);
            // получаем все сохранянные маршруты из куки
            $r_back = $p_modal->getBackUrl();
            // присваиваем дефолтное значение ссылки назад
            $goBack = null;
            
            // заполняем мета данные страницы
            $this->setMeta($article->title, $article->description, $article->keywords);
            
            // отправляем данные полученные из БД в вид
            $this->set(compact('article', 'categories', 'categoryArticles', 'recentlyViewed', 'r_back'));
            
        }
        
        //  метод экшена для просмотра категорий
        public function categoryAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            // получаем алиас из категории
            $alias = $this->route['alias'];
            
            //получаем данные о текущей категории
            $category = \R::findOne('categories', 'alias = ?', [$alias]);
            
            // если мы не достали категорию
            if(!$category) {
                // выдаем исключение
                throw new \Exception("Страница не найдена", 404);
            }
            
            // получаем список всех категорий
            $cats = \R::findAll('categories');
            
            // номер текущей страницы
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            // ограничение статей на странице
            $perpage = App::$app->getProperty('pagination');
            //формируем общее количество страниц
            $total = \R::count('articles', "category_id = ?", [$category->id]);
            // вызываем объект класса пагинации и передаем данные
            $pagination = new Pagination($page, $perpage, $total);
            // вызываем объект класса мобильной пагинации и передаем данные
            $mobile_pagination = new MobilePagination($page, $perpage, $total);
            // формируем с какой записи показывать пагинацию
            $start = $pagination->getStart();
            $start_m = $mobile_pagination->getStart();
            
            
            
            // создаем объект модели
            $p_modal = new Article();
            // получаем текущий маршрут страницы
            $route = 'news/' . $this->route['action'];
            $route .= '/' . $this->route['alias'];
            // если есть гет-параметры
            if( isset($_GET['page'])) {
                // берем их
                $route = 'articles/'. $this->route['action'] . '/' . $this->route['alias'] . '?page=' . $_GET['page'];
            }
            // добавляем пустой массив
            $route .= '.' . '';
            
            // сохраняем текущий маршрут
            $p_modal->setBackUrl($route);
            // получаем вссе сохраненные маршруты
            $r_back = $p_modal->getBackUrl();
            // присваиваем дефолтное значение ссылки назад
            $goBack = null;
            
            
            // получаем все статьи этой категории
            $articles = \R::find('articles', "category_id = ? ORDER BY order_id DESC LIMIT $start, $perpage", [$category->id]);
            // получаем все статьи этой категории для мобильных статей
            $articlesMobile = \R::find('articles', "category_id = ? ORDER BY order_id DESC LIMIT $start_m, $perpage", [$category->id]);
            
            
            // получаем все статьи и отсортировать по просмотрам сверху вниз
            $articlesInTrend = \R::find('articles', "category_id = ?", [$category->id], "ORDER BY views DESC LIMIT 5");
            // берем последние 5 статей
            
            
            
            // заполняем мета данные страницы
            $this->setMeta($category->title, $category->description, $category->keywords);
            
            // отправляем данные полученные из БД в вид
            $this->set(compact('category', 'articles', 'articlesMobile', 'cats', 'articlesInTrend', 'pagination', 'mobile_pagination'));
            
        }
        
    }