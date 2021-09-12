<?php


namespace app\controllers;


use app\models\AppModel;
use atrade\base\Controller;

class AppController extends Controller {

    public function __construct($route) {
            parent::__construct($route);
            // создаем объект класса модели
            new AppModel();
            $visit = new AppModel();
            $visit->setTotalVisit('1');
            $visit->setDayVisit('2');
    
            // получаем сегодняшнюю дату
            $today = date('d-m-Y');
            // получаем значение данные ежедневных посещений
            $visitDay = \R::find('visit_statistics', 'id =?', ['2']);
            // получаем значение завтрашнего дня
            $tomorrow = $visitDay[2]['tomorrow'];
    
            if($today == $tomorrow) {
                $d = strtotime('+1 day');
                $dd = date('d-m-Y', $d);
        
                $visitDayTomorrow = \R::load('visit_statistics', '2');
                $visitDayTomorrow->tomorrow =  $dd;
                $visitDayTomorrow->views = 0;
                \R::store($visitDayTomorrow);
            }
    }
    
    public function technical () {
        if(TECHNICAL == 1) {
            // формируем путь
            $http  = '/technical/works';
            // отправляем по указанному  пути
            redirect($http);
        }
    }

}