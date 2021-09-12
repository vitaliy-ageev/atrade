<?php


namespace app\controllers;


class CalendarController extends AppController {

    public function indexAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
        // получаем данные о днях недели
        $calendar_days = \R::findAll('calendar_days');
        // получаем текущий день недели
        $thisDate = date('j');
        $calendar_d = \R::findOne('calendar_days', 'day = ?', [$thisDate]);
        $calendar_day_id = $calendar_d['id'];
        // получаем даннные о всех событиях текущего дня
        $calendar_events = \R::find('calendar_events', 'day_id = ? ORDER BY time', [$calendar_day_id]);
        // получаем все валюты событий
        $currencies = \R::find('caledar_currency');
        
        // массив месяцев
        $months= [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь',
        ];


        // заполняем мета данные
        $this->setMeta('Календарь', 'Описание', 'Ключевые слова');

        // отправляем данные в вид
        $this->set(compact('calendar_days','calendar_d', 'calendar_events', 'currencies', 'months'));

    }

    public function showAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
        // получаем данные о днях недели
        $calendar_days = \R::findAll('calendar_days');

        // получаем алиас из категории
        $alias = $this->route['alias'];
        //получаем данные о текущей категории
        $thisDay = \R::findOne('calendar_days', 'alias = ?', [$alias]);
        $thisDay_id = $thisDay['id'];
        // получаем даннные о всех событиях  текущего дня
        $calendar_events = \R::find('calendar_events', 'day_id = ? ORDER BY time', [$thisDay_id]);
        // получаем все валюты событий
        $currencies = \R::find('caledar_currency');

        // если мы не достали категорию
        if(!$thisDay) {
            // выдаем исключение
            throw new \Exception("Страница не найдена", 404);
        }

        // массив месяцев
        $months= [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь',
        ];

        // заполняем мета данные
        $this->setMeta('Календарь', 'Описание', 'Ключевые слова');

        // отправляем данные полученные из БД в вид
        $this->set(compact('calendar_days', 'thisDay', 'calendar_events', 'currencies', 'months'));
    }

}