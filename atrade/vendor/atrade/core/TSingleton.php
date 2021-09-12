<?php


namespace atrade;


trait TSingleton {

    // Создаем приватное статичное свойство
    private static $instance;

    // Проверяем: если в свойстве нет объектов, то создаем его и возвращаем
    public static function instance() {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // Данный метод не разрешает создавать другие экземпляры объектов
    private function __construct() {
    }

    // Данный метод запрещает клонирование объекта
    private function __clone() {
    }

    // Предотвращает сериализацию при повторной инициализации
    private function __wakeup() {
    }
}