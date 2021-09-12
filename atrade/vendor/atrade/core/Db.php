<?php


namespace atrade;


class Db {

    // подключаем TSingleton
    use TSingleton;


    protected  function __construct() {
        // получаем массив с данными авторизации базой данных
        $db = require_once CONF . '/confiq_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        // устанавливаем соединение с базой данных
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        // проверяем, услановлено ли соединение
        if( !\R::testConnection()) {
            // если соединение не установлено, то выбрасываем исключение и завершаем скрипт
            throw new \Exception("Нет соединения с базой данных", 500);

        }
        // запрещаем RedBeanPHP изменять таблицы автоматически
        \R::freeze( true );
        // включаем режим отладки
        if(DEBUG) {
            \R::debug(true, 1);
        }
    }


}