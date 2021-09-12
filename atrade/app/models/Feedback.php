<?php


namespace app\models;


class Feedback  extends AppModel {

    // массив данных полей
    public $attributes = [
        'email' => '',
        'theme' => '',
        'message' => '',
    ];

    //  массив правил валидации
    public $rules = [
        'required' => [
            ['email'],
            ['theme'],
            ['message'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['email', 5],
        ],

    ];

    // проверка уникальности данных
    public function checkUnique() {
        // получаем данные из БД для сравнения
        $user = \R::findOne('feedback', 'login = ? OR email = ?', [$this->attributes['login'], $this->attributes['email']]);

        if($user) {
            // если такой логин уже есть, то выдаем ошибку
            if($user->login == $this->attributes['login']) {
                $this->errors['unique'] = "Этот login уже существует";
            }
            // если такой email есть, то выдаем ошибку
            if($user->email == $this->attributes['email']) {
                $this->errors['unique'] = "Этот email уже существует";
            }
            return false;
        }
        return true;

    }



}