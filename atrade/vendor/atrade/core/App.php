<?php


namespace atrade;


class App {

    // базовый контейнер для приложения
    public static $app;

    public function __construct() {
        // Ищем что вбивает пользователь в адресную строку
        $query = trim($_SERVER['QUERY_STRING'], '/');
        // Старт сессии
        session_start();
        // Создаем объект класса Registry
        self::$app = Registry::instance();
        // Вызываем метод getParams с данными
        $this->getParams();
        // Создаем объект класса исключений ошибок
        new ErrorHandler();
        // Передаем полученный маршрут в класс Router
        Router::dispatch($query);
    }

    /**
     * Метод getParams
     * Получает параметры из файла params.php
     */
    protected function getParams() {
        // Подключаем файл params.php
        $params = require_once CONF . '/params.php';
        // Проверяем не пуст ли данный массив
        if(!empty($params)) {
            // Проходимся по нему в цикле
            foreach($params as $k => $v) {
                // И заполняем его по методу ключ/значением методом setProperty
                self::$app->setProperty($k, $v);
            }
        }
    }
}