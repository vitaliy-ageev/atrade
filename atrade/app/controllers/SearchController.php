<?php


namespace app\controllers;


use atrade\App;
use atrade\libs\MobilePagination;
use atrade\libs\Pagination;

class SearchController extends AppController {

    public function typeaheadAction () {
       // проверяем, ассинхронно ли поступают данные
        if($this->isAjax()) {
            // тогда мы кладем в переменную наш запрос и берем его иначе null
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            // если поисковый запрос не пуст
            if($query) {
                // ищем в БД похожие данные полученные из запроса
                $products = \R::find('SELECT id, title FROM articles WHERE title LIKE ? LIMIT 10', ["%{$query}%"]);
                echo json_encode($products);
            }
        }
        die;
    }

    public function indexAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
        // проверяем есть ли данные в гет
        if(isset($_GET['s'])) {
            // кладем в переменную наш запрос и берем его иначе null
            $query = trim($_GET['s']);
        } else {
            $query = null;
        }
        
        // если поисковый запрос не пуст
        if ($query) {
    
    
            // пагинация
            // номер текущей страницы
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            // ограничение статей на странице табличного вида
            $perpage = App::$app->getProperty('history_pagination');
            //формируем общее количество страниц
            $total_page = \R::count('help_faq', "question LIKE ?", ["%{$query}%"]);
            // вызываем объект класса пагинации для пк
            $pagination = new Pagination($page, $perpage, $total_page);
            // вызываем объект класса мобильной пагинации
            $mobile_pagination = new MobilePagination($page, $perpage, $total_page);
            // формируем с какой записи показывать пагинацию табличного вида для советника Smart Advisor
            $start = $pagination->getStart();
    
            $questions = \R::find('help_faq', "question LIKE ? LIMIT $start, $perpage", ["%{$query}%"]);
            
        } else {
            $questions = '';
            $pagination = '';
            $mobile_pagination = '';
        }
        
        // получаем информацию о всех раздела
         $sections = \R::find('help_sections');
    
    
        
        
        
        $this->setMeta('Поиск по запросу: ' . h($query));
        $this->set(compact('questions', 'query', 'sections', 'pagination', 'mobile_pagination'));

    }

}