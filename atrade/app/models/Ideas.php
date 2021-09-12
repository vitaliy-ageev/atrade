<?php
    
    
    namespace app\models;
    
    
    class Ideas extends AppModel {
    
        public function setReceivingSignals($id) {
            // получаем все просмотренные статьи
            $receivingSignals = $this->getAllReceivingSignals();
        
            // если сигнала в куки нет, то записываем его
            if (!$receivingSignals) {
                setcookie('receivingSignals', $id, time() + 3600*24*7, '/');
            } else {
                // иначе разбиваем все id по .
                $receivingSignals = explode('.', $receivingSignals);
            
                // проверяем, есть ли текущего id в списке нет
                if (!in_array($id, $receivingSignals)) {
                    // то дописываем его
                    $receivingSignals[] = $id;
                
                    // соединяем все id
                    $receivingSignals = implode('.', $receivingSignals);
                
                    // записываем полученное в куки
                    setcookie('receivingSignals', $receivingSignals, time() + 3600*24*7, '/');
                }
            
            }
        
        }
    
        public function getReceivingSignals() {
            // если  куки не пуст
            if(!empty($_COOKIE['receivingSignals'])) {
                // берем эту куки
                $receivingSignals = $_COOKIE['receivingSignals'];
                // разбиваем данные массива по .
                $receivingSignals = explode('.', $receivingSignals);
                // возвращаем данные
                return $receivingSignals;
            
            }
            // иначе false
            return false;
        }
    
        public function getAllReceivingSignals() {
            // если куки не пуста
            if(!empty($_COOKIE['receivingSignals'])) {
                // то возвращаем ее
                return $_COOKIE['receivingSignals'];
            }
        
            // иначе false
            return false;
        }
    
        
        public function setHistoryView ($alias) {
            // получаем путь сохраненного вида
            $HistoryView = $this->getAllHistoryView();
    
            // если алиаса нет в куки, то записываем его
            if (!$HistoryView) {
                setcookie('HistoryView', $alias, time() + 3600*24*7*4, '/');
            } else {
                // иначе разбиваем все алиасы по .
                $HistoryView = explode('.', $HistoryView);
        
                // проверяем, есть ли текущего алиаса в списке нет
                if (!in_array($alias, $HistoryView)) {
                    // то дописываем его
                    $HistoryView[] = $alias;
            
                    // соединяем все алиасу
                    $HistoryView = implode('.', $HistoryView);
            
                    // записываем полученное в куки
                    setcookie('HistoryView', $HistoryView, time() + 3600*24*7*4, '/');
                } else {
    
                    // иначе если алиас существует, то присваиваем его в конец списка
                    $HistoryView[]  = $alias;
    
                    // переворачиваем массив
                    $HistoryView = array_reverse( $HistoryView, TRUE );
    
                    // удаляем повторяющиеся значения
                    $HistoryView = array_unique($HistoryView);
    
                    // переворачиваем массив в исходное состоятние
                    $HistoryView = array_reverse( $HistoryView, TRUE );
    
                    // соединяем все алиасу
                    $HistoryView = implode('.', $HistoryView);
    
                    // записываем полученное в куки
                    setcookie('HistoryView', $HistoryView, time() + 3600*24*7*4, '/');
                }
            }
        }
    
        public function getHistoryView () {
            // если  куки не пуст
            if(!empty($_COOKIE['HistoryView'])) {
                // берем эту куки
                $HistoryView = $_COOKIE['HistoryView'];
                // разбиваем данные массива по .
                $HistoryView = explode('.', $HistoryView);
                // возвращаем последний вариант
                return array_slice($HistoryView, -2);
        
            }
            // иначе false
            return false;
        }
    
        public function getAllHistoryView () {
            // если куки не пуста
            if(!empty($_COOKIE['HistoryView'])) {
                // то возвращаем ее
                return $_COOKIE['HistoryView'];
            }
            return false;
        }
        
    }