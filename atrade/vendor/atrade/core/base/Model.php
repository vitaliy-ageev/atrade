<?php


namespace atrade\base;

use atrade\Db;
use Valitron\Validator;


abstract class Model {

    // массив свойств моделей, который равен полям БД
    public $attributes = [];
    // массив с ошибками
    public $errors = [];
    // массив правил валидации данных
    public $rules = [];

    public function __construct() {
        // создаем объект класса модели
        Db::instance();

    }

    // загружает данные из формы в модель
    public function load($data) {
        // проходим в цикле
        foreach ($this->attributes as $name => $value) {
            // если существует в переданном массиве такой ключ
            if(isset($data[$name])) {
                // тогда мы берем текущее значение в наше свойство
                $this->attributes[$name] = $data[$name];
            }

        }
    }

    // сохраняет данные в БД
    public function save($table) {
        // указываем таблицу
        $tbl = \R::dispense($table);
        // проходимся по массиву атрибутов
        foreach ($this->attributes as $name => $value) {
            // кладем текущие значения в таблицу
            $tbl->$name = $value;
        }
        // сохраняем данные в таблицу БД
        return \R::store($tbl);

    }

    // описываем метод Validate
    public function validate($data) {
        // указываем наш файл языков
        Validator::langDir(WWW . "/validator/lang");
        // устанавливаем язык валидатора
        Validator::lang('ru');
        // создаем объект класса Validator
        $v = new Validator($data);
        // передаем правила валидации
        $v->rules($this->rules);

        // если все хорошо
        if($v->validate()) {
            // возвращаем true
            return true;
        }

        // иначе возвращаем ошибки
        $this->errors = $v->errors();
        return false;

    }

    // выводим ошибки пользователям
    public function getErrors() {
        // проходимся по циклу ошибок
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            //проходимся циклом по вложенным данным массива
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';

        // запоминаем ошибки в сессию
        $_SESSION['error'] = $errors;


    }

}