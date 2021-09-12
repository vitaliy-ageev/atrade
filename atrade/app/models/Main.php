<?php


namespace app\models;


class Main extends AppModel {
    
    public function setRecentlyViewed ($id) {
        // получаем все просмотренные статьи
        $recentlyViewed = $this->getAllRecentlyViewed();
        
        // если статья в куки пуста, то записываем ее
        if (!$recentlyViewed) {
            setcookie('recentlyViewedDocument', $id, time() + 3600*24*7, '/');
            // увеличиваем счетчик просмотров на 1
            $article_info = \R::load('documents', $id );
            $article_info->views ++;
            \R::store($article_info);
        } else {
            // иначе разбиваем все id по .
            $recentlyViewed = explode('.', $recentlyViewed);
            
            // проверяем, есть ли текущего id в списке нет
            if (!in_array($id, $recentlyViewed)) {
                // то дописываем его
                $recentlyViewed[] = $id;
                
                // соединяем все id
                $recentlyViewed = implode('.', $recentlyViewed);
                
                // записываем полученное в куки
                setcookie('recentlyViewedDocument', $recentlyViewed, time() + 3600*24*7, '/');
                // увеличиваем счетчик просмотров на 1
                $article_info = \R::load('documents', $id );
                $article_info->views ++;
                \R::store($article_info);
                
            } else {
                // иначе если он существует, то присваиваем его в конец списка
                $recentlyViewed[]  = $id;
                
                // переворачиваем массив
                $recentlyViewed = array_reverse ( $recentlyViewed, TRUE );
                
                // удаляем повторяющиеся значения
                $recentlyViewed = array_unique($recentlyViewed);
                
                // переворачиваем массив в исходное состоятние
                $recentlyViewed = array_reverse ( $recentlyViewed, TRUE );
                
                // соединяем все id
                $recentlyViewed = implode('.', $recentlyViewed);
                
                // записываем полученное в куки
                setcookie('recentlyViewedDocument', $recentlyViewed, time() + 3600*24*7, '/');
                
            }
            
        }
    }
    
    public function getRecentlyViewed () {
        // если  куки не пуст
        if(!empty($_COOKIE['recentlyViewedDocument'])) {
            // берем эту куки
            $recentlyViewed = $_COOKIE['recentlyViewedDocument'];
            // разбиваем данные массива по .
            $recentlyViewed = explode('.', $recentlyViewed);
            // возвращаем последние 3 статьи
            return array_slice($recentlyViewed, -3);
            
        }
        // иначе false
        return false;
        
        
    }
    
    public function getAllRecentlyViewed () {
        // если куки не пуста
        if(!empty($_COOKIE['recentlyViewedDocument'])) {
            // то возвращаем ее
            return $_COOKIE['recentlyViewedDocument'];
            
        }
        // иначе false
        return false;
        
    }

}