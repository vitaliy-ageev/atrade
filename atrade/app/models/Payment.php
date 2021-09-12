<?php


namespace app\models;


use atrade\App;

class Payment extends AppModel {

    // массив с настройками подключения к Qiwi
    public $qiwi_attrs = [
        'phone' => '+79193112812',
        'token' => 'bb59848c7761867ef5c9e0f935a27060',
        'secret_key' => 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6ImcycjYzdi0wMCIsInVzZXJfaWQiOiI3OTE5MzExMjgxMiIsInNlY3JldCI6ImE4NGY0NGY1OTExNjkxMjI0ZGZjNDJlM2VhZGNhMjNlZjcwZTZjMGRiNjA4NmI3MzU1OWUyYzE4YjNjMzJhMjcifX0=',

    ];

    // массив данных полей
    public $attributes = [
        'name' => '',
        'surname' => '',
        'email' => '',
    ];

    //  массив правил валидации
    public $rules = [
        'required' => [
            ['name'],
            ['surname'],
            ['email'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['email', 5]    
        ],

    ];

    public static function mailSend ($order_id, $user_email, $layout, $titile, $text) {
        // устанавливаем транспорт почты SMTP
        $transport = (new \Swift_SmtpTransport('smtp.yandex.ru', '465', 'ssl'))
            ->setUsername('ageeva.nina.75@yandex.ru')
            ->setPassword('Ghbrjkbcnrf123')
            ;

        // создаем объект модели SwiftMailer
        $mailer = new \Swift_Mailer($transport);

        // загружаем шаблон письмо в буфер
        ob_start();
        require APP . '/views/mail/' . $layout . '.php';
        $body = ob_get_clean();

        // создаем письмо
        $message = (new \Swift_Message($titile))
            ->setFrom(['ageeva.nina.75@yandex.ru' => 'ATrade'])
            ->setTo('support@sputnik.ws')
            ->setBody($body, 'text/html');

        // отправляем письмо
        $result = $mailer->send($message);
        $_SESSION['success'] = $text;


    }
    

}