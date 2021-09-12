<?php


namespace app\models;


use atrade\base\Model;

class AppModel extends Model {

    //перенести данный метод в модель заказа советника
    public static function saveOrder ($data) {
        // сохраняем заказ в таблицу
        $order = \R::dispense('order');
        // заполняем таблицу данными
        $order->email = $data['email'];
        $order->name = $data['name'];
        $order->advisor = $data['advisor'];
        $order->price = $data['price'];

        // сохраняем
        return \R::store($order);
        
    }
    
    
    public function setTotalVisit ($idTotal) {
        // получаем все посещения
        $totalVisit = $this->getAllTotalVisit();
        
        // если посещения еще не было, то записываем его
        if (!$totalVisit) {
            setcookie('totalVisit', $idTotal, time() + 3600*24*7*36, '/');
            // увеличиваем счетчик просмотров на 1
            $visitTotalCount = \R::load('visit_statistics', $idTotal);
            $visitTotalCount->views ++;
            \R::store($visitTotalCount);
        } else {
            // иначе разбиваем все id по .
            $totalVisit = explode('.', $totalVisit);
            
            // проверяем, есть ли текущего id в списке нет
            if (!in_array($idTotal, $totalVisit)) {
                // то дописываем его
                $totalVisit[] = $idTotal;
                
                // соединяем все id
                $totalVisit = implode('.', $totalVisit);
                
                // записываем полученное в куки
                setcookie('totalVisit', $totalVisit, time() + 3600*24*7*36, '/');
                // увеличиваем счетчик просмотров на 1
                $visitTotalCount = \R::load('visit_statistics', $idTotal);
                $visitTotalCount->views ++;
                \R::store($visitTotalCount);
                
            } else {
                // иначе если он существует, то присваиваем его в конец списка
                $totalVisit[]  = $idTotal;
                
                // переворачиваем массив
                $totalVisit = array_reverse ( $totalVisit, TRUE );
                
                // удаляем повторяющиеся значения
                $totalVisit = array_unique($totalVisit);
                
                // переворачиваем массив в исходное состоятние
                $totalVisit = array_reverse ( $totalVisit, TRUE );
                
                // соединяем все id
                $totalVisit = implode('.', $totalVisit);
                
                // записываем полученное в куки
                setcookie('totalVisit', $totalVisit, time() + 3600*24*7*36, '/');
                
            }
        }
    }
    
    public function getTotalVisit () {
        // если  куки не пуст
        if(!empty($_COOKIE['totalVisit'])) {
            // берем эту куки
            $totalVisit = $_COOKIE['totalVisit'];
            // разбиваем данные массива по .
            $totalVisit = explode('.', $totalVisit);
            // возвращаем последние 3 статьи
            return array_slice($totalVisit, -2);
            
        }
        // иначе false
        return false;
        
        
    }
    
    public function getAllTotalVisit () {
        // если куки не пуста
        if(!empty($_COOKIE['totalVisit'])) {
            // то возвращаем ее
            return $_COOKIE['totalVisit'];
            
        }
        // иначе false
        return false;
        
    }
    
    
    public function setDayVisit ($idDay) {
        // получаем все посещения
        $dayVisit = $this->getAllDayVisit();
        
        // если посещения еще не было, то записываем его
        if (!$dayVisit) {
            setcookie('dayVisit', $idDay, time() + 3600*12, '/');
            // увеличиваем счетчик просмотров на 1
            $visitDayCount = \R::load('visit_statistics', $idDay);
            $visitDayCount->views ++;
            \R::store($visitDayCount);
        } else {
            // иначе разбиваем все id по .
            $dayVisit = explode('.', $dayVisit);
            
            // проверяем, есть ли текущего id в списке нет
            if (!in_array($idDay, $dayVisit)) {
                // то дописываем его
                $dayVisit[] = $idDay;
                
                // соединяем все id
                $dayVisit = implode('.', $dayVisit);
                
                // записываем полученное в куки
                setcookie('dayVisit', $dayVisit, time() + 3600*12, '/');
                // увеличиваем счетчик просмотров на 1
                $visitDayCount = \R::load('visit_statistics', $idDay);
                $visitDayCount->views ++;
                \R::store($visitDayCount);
                
            } else {
                // иначе если он существует, то присваиваем его в конец списка
                $dayVisit[]  = $idDay;
                
                // переворачиваем массив
                $dayVisit = array_reverse ( $dayVisit, TRUE );
                
                // удаляем повторяющиеся значения
                $dayVisit = array_unique($dayVisit);
                
                // переворачиваем массив в исходное состоятние
                $dayVisit = array_reverse ( $dayVisit, TRUE );
                
                // соединяем все id
                $dayVisit = implode('.', $dayVisit);
                
                // записываем полученное в куки
                setcookie('dayVisit', $dayVisit, time() + 3600*12, '/');
                
            }
            
        }
    }
    
    public function getDayVisit () {
        // если  куки не пуст
        if(!empty($_COOKIE['dayVisit'])) {
            // берем эту куки
            $dayVisit = $_COOKIE['dayVisit'];
            // разбиваем данные массива по .
            $dayVisit = explode('.', $dayVisit);
            // возвращаем последние 3 статьи
            return array_slice($dayVisit, -2);
            
        }
        // иначе false
        return false;
        
        
    }
    
    public function getAllDayVisit () {
        // если куки не пуста
        if(!empty($_COOKIE['dayVisit'])) {
            // то возвращаем ее
            return $_COOKIE['dayVisit'];
            
        }
        // иначе false
        return false;
        
    }

}