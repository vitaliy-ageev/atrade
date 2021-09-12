<?php


namespace app\models;


class Article extends AppModel {

    public function setRecentlyViewed ($id) {
        // получаем все просмотренные статьи
        $recentlyViewed = $this->getAllRecentlyViewed();

        // если статья в куки пуста, то записываем ее
        if (!$recentlyViewed) {
            setcookie('recentlyViewed', $id, time() + 3600*24*7, '/');
            // увеличиваем счетчик просмотров на 1
            $article_info = \R::load('articles', $id );
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
                setcookie('recentlyViewed', $recentlyViewed, time() + 3600*24*7, '/');
                // увеличиваем счетчик просмотров на 1
                $article_info = \R::load('articles', $id );
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
                setcookie('recentlyViewed', $recentlyViewed, time() + 3600*24*7, '/');

            }


            

        }
    }

    public function getRecentlyViewed () {
        // если  куки не пуст
        if(!empty($_COOKIE['recentlyViewed'])) {
            // берем эту куки
            $recentlyViewed = $_COOKIE['recentlyViewed'];
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
        if(!empty($_COOKIE['recentlyViewed'])) {
            // то возвращаем ее
            return $_COOKIE['recentlyViewed'];

        }
        // иначе false
        return false;

    }

    public function setBackUrl($route) {
        // получаем путь откуда пришли
        $goBack = $this->getAllBackUrl();

        // если куки пуста, то создаем ее
        if(!$goBack) {
            setcookie('goBack', $route, time() + 3600*24*7, '/');
        } else {
            // иначе разбиваем все id по .
            $goBack = explode('.', $goBack);

            // проверяем, есть ли текущего id в списке нет
            if (!in_array($route, $goBack)) {
                // то дописываем его
                $goBack[] = $route;

                // соединяем все id
                $goBack = implode('.', $goBack);

                // записываем полученное в куки
                setcookie('goBack', $goBack, time() + 3600*24*7, '/');
        }   else {

                // иначе если он существует, то присваиваем его в конец списка
                $goBack[]  = $route;

                // переворачиваем массив
                $goBack = array_reverse ( $goBack, TRUE );

                // удаляем повторяющиеся значения
                $goBack = array_unique($goBack);

                // переворачиваем массив в исходное состоятние
                $goBack = array_reverse ( $goBack, TRUE );

                // соединяем все id
                $goBack = implode('.', $goBack);

                // записываем полученное в куки
                setcookie('goBack', $goBack, time() + 3600*24*7, '/');}
        }



    }

    public function getBackUrl () {
        // если  куки не пуст
        if(!empty($_COOKIE['goBack'])) {
            // берем эту куки
            $goBack = $_COOKIE['goBack'];
            // разбиваем данные массива по .
            $goBack = explode('.', $goBack);
            // возвращаем последние 3 статьи
            return array_slice($goBack, -2);

        }
        // иначе false
        return false;


    }

    public function getAllBackUrl() {
        // если куки не пуста
        if(!empty($_COOKIE['goBack'])) {
            // то возвращаем ее
            return $_COOKIE['goBack'];
        }
        return false;
    }


}