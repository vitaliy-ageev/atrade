<?php
    
    
    namespace app\controllers;
    
    
    class HelpController  extends AppController {
        
        public function indexAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();

            // получаем список разделов помощи
            $help_sections = \R::findAll('help_sections', "ORDER BY id");
            // получаем список контактов службы поддержки
            $support_contacts = \R::findAll('support_contacts', 'ORDER BY id');


            // заполняем мета данные
            $this->setMeta('Помощь', 'Описание...', 'Ключевые слова...');

            // отправляем данные из БД в вид
            $this->set(compact('help_sections', 'support_contacts'));
            
        }
        
        
        public function viewAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();

            // берем текущий alias из масссива маршрутов
            $alias = $this->route['alias'];
            // получаем информацию о запрошенном разделе
            $section = \R::findOne('help_sections', 'alias = ?', [$alias]);

            // если такого раздела нет, выбрасываем исключение
            if(!$section) {
                throw new \Exception("Страница не найдена", 404);
            }


            // получаем id текущего раздела
            $section_id = $section->id;
            // получаем все вопросы текущего раздела по id
            $questions = \R::findAll('help_faq', "section_id = ?", [$section_id]);
            // получаем список контактов службы поддержки
            $support_contacts = \R::findAll('support_contacts', 'ORDER BY id');

            // формируем название страницы
            $title = $section->title;

            // заполняем мета данные
            $this->setMeta($title, 'Описание...', 'Ключевые слова...');

            // отправляем данные из БД в вид
            $this->set(compact('questions', 'support_contacts', 'alias', 'title'));
            
        }
        
    }