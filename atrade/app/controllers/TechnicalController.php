<?php
    
    
    namespace app\controllers;
    
    
    class TechnicalController extends AppController {
        
        public function indexAction() {
            // формируем путь
            $http  = '/technical/works';
            // отправляем по указанному  пути
            redirect($http);
    
            // заполняем мета данные
            $this->setMeta('Технические работы', 'Описание...', 'Ключевые слова...');
            
        }
    
        public function worksAction() {
            //  подключаем новый шаблон
            $this->layout  = 'empty';
    
            // заполняем мета данные
            $this->setMeta('Технические работы', 'Описание...', 'Ключевые слова...');
            
        }
        
    }