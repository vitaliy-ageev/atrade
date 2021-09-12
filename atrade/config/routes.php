<?php
    
    use atrade\Router;
    
    //  Маршрут для страниц статей по алиасу
    Router::add('^news/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'News', 'action' => 'view']);
    //  Маршрут для страниц статей категорий по алиасу
    Router::add('^news/category/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'News', 'action' => 'category']);
    //  Маршрут для страниц календаря по алиасу
    Router::add('^calendar/show/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Calendar', 'action' => 'show']);
    //  Маршрут для страниц историй сигналов по алиасу
    Router::add('^ideas/history/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Ideas', 'action' => 'history']);
    //  Маршрут для страниц историй сделок советников по алиасу
    Router::add('^robot/history/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Robot', 'action' => 'history']);
    //  Маршрут для разделов помощи по алиасу
    Router::add('^help/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Help', 'action' => 'view']);
    //  Маршрут для страниц статей по алиасу
    Router::add('^main/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Main', 'action' => 'view']);
    
    
    // Маршрут по умолчанию для админ. панели
    Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
    // Правило маршрута, которое запоминает в массив из адресноый строки и формирует
    // Controller и Action для админ. панели, Action не обязателен
    Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
    
    
    // Маршрут по умолчанию
    Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
    // Правило маршрута, которое запоминает в массив из адресноый строки и формирует
    // Controller и Action, Action не обязателен
    Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');