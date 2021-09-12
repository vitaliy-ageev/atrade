<?php


namespace app\controllers;


use app\models\Feedback;

class FeedbackController extends AppController {

    public function indexAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
        // если есть переданные данные
        if(!empty($_POST))  {
            // создаем объект модели
            $fb_message = new Feedback();
            // берем данные из POST
            $data = $_POST;
            $fb_message->load($data);

            // если данные не проходят валидацию
            if(!$fb_message->validate($data)) {
                // тогда мы показываем ошибки
                $fb_message->getErrors();
                // сохраняем верные введенные данные
                $_SESSION['form_data'] = $data;
                // делаем редирект
                redirect();
            }  else {
                // иначе сохраняем данные
                if($fb_message->save('feedback')) {
                    // записываем в сессию успех
                    $_SESSION['success'] = 'Спасибо за Ваше обращение!';
                    // формируем путь
                    $http  = '/feedback/success';
                    // отправляем по указанному  пути
                    redirect($http);
                } else {
                    // записываем в сессию успех
                    $_SESSION['error'] = 'Ошибка при отправке';
                    // делаем редирект
                    redirect();
                }
                // делаем редирект
                redirect();
            }
        }

        $this->setMeta(" Форма обратной связи", "Описание...", "Ключевые слова");
    }
    
    
    public function successAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
        //  подключаем новый шаблон
        $this->layout  = 'empty';
    
    }

}