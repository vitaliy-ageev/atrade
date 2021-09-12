<?php


namespace atrade\base;


abstract class Controller {

    // массив с текущим маршрутом
    public $route;
    // текущий контроллер
    public $controller;
    // вызываемая модель
    public $model;
    // вызываемый вид
    public $view;
    // текущий префикс
    public $prefix;
    // текущий шаблон
    public $layout;
    // передаваемые данные из контроллера в вид
    public $data = [];
    // передаваемые мета данные
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];

    
    public function __construct ($route) {
        // получаем данные и складываем их в свойства
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];

    }

    // получает объект вида с данными
    public function getView() {
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    // в  свойство data складываем полученные данные
    public function set($data) {
        $this->data = $data;
    }

    // метод, который проверяет асинхронно ли поступают данные
    public function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    // метод, который загружает шаблон модального окна
    public function loadView($view, $vars = []) {
        // извлекаем данные
        extract($vars);
        // подключаем файл
        require APP . "/views/{$this->prefix}{$this->controller}/{$view}.php";
        die;
    }

    //  в свойсвто meta складываем полученные мета данные
    public function setMeta($title = '', $desc = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

}