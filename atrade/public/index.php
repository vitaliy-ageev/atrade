<?php


// Подключаем конфигурационный файл init
require_once dirname(__DIR__) . '/config/init.php';
// Подключаем файл функций
require_once LIBS . '/functions.php';
// Подключаем файл массива маршрутов
require_once CONF . '/routes.php';


// Создаем экземпляр класса App
new \atrade\App();






