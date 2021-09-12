<?php


namespace atrade;


class Registry {

    // Используем трейт TSingleton
    use TSingleton;

    // Создаем статичное свойство, в которое будем складывать другие свойства
    protected static $properties  = [];

    /**
     * Метод setProperty
     * Записывает данные в свойство $properties
     * $name - ключ, $value - значение
     */
    public function setProperty($name, $value) {
        self::$properties[$name] = $value;
    }


    /**
     * Метод getProperty
     * Показывает данные в $properties по ключу $name
     */
    public function getProperty($name) {
        // Если объект существует, то возвращаем его
        if(isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    /**
     * Метод getProperties
     * Распечатывает все доступные свойства в $properties
     */
    public function  getProperties() {
        return self::$properties;
    }

}