<?php


namespace atrade\libs;


class MobilePagination {

    // текущая страница
    public $currentPage;
    // сколько записей на страницу
    public $perpage;
    // общее количество записей
    public $total;
    // общее количество страниц пагинации
    public $countPages;
    // свойсвто для хранения строк запроса
    public $uri;


    public function __construct($page, $perpage, $total) {
        // сколько записей на страницу
        $this->perpage = $perpage;
        // общее количество записей
        $this->total = $total;
        // общее количество страниц
        $this->countPages = $this->getCountPages();
        // текущая страница
        $this->currentPage = $this->getCurrentPage($page);
        // параметры запроса страниц
        $this->uri = $this->getParams();

    }

    // формирует верстку пагинации
    public function getHtml() {
        // назад
        $back = null;
        // вперед
        $forward = null;

        // формирует верстку пути  назад
        if($this->currentPage > 1) {
            $back = "<div class='articles_page_mobile_pagination_prev'><a class='articles_page_mobile_pagination_prev_text' href='{$this->uri}page=" .($this->currentPage - 1). "'>Назад</a></div>";
        }

        // формирует верстку пути вперед
        if($this->currentPage < $this->countPages) {
            $forward = "<div class='articles_page_mobile_pagination_next'><a class='articles_page_mobile_pagination_next_text' href='{$this->uri}page=" .($this->currentPage + 1). "'>Вперед</a></div>";
        }

        return '<div class="articles_page_mobile_pagination"><div class="articles_page_mobile_pagination_inner">' . $back.$forward . '</div></div>';

    }

    // переводим нашу верстку в строку
    public function __toString() {
        return $this->getHtml();
    }

    // получает общее количество страниц
    public function getCountPages() {
        // расчитываем общее количесвто страниц
        // и округляем его в большую сторону
        return ceil($this->total / $this->perpage) ?: 1;

    }

    // получает текущую страницу
    public function getCurrentPage($page) {
        // если страница возвращает false
        // или меньше 1
        // то page =  1
        if(!$page || $page < 1) $page = 1;

        // если страница больше количества всех страниц
        // то присваиваем page номер последней страницы
        if ($page > $this->countPages) $page = $this->countPages;
        // возвращаем page
        return $page;

    }

    // рассчитываем с какой по какой статье брать из БД на страницу
    public function getStart() {
        return ($this->currentPage - 1) * $this->perpage;

    }

    // получает параметры строки запроса
    public function getParams() {
        // получаем в переменную параметры строки запроса
        $url = $_SERVER['REQUEST_URI'];
        // разбиваем адресную строку по знаку ? в массив
        $url = explode('?', $url);
        //  берем первый элемент массива
        $uri = $url[0] . '?';
        // если существует второй параметр массива
        if(isset($url[1]) && $url[1] != '') {
            // разбиваем второй элемент массива по знаку & в массив
            $params  = explode('&', $url[1]);
            foreach ($params as $param) {
                // если этот параметр не соответствует шаблону
                // то дописываем в uri свойства
                if(!preg_match("#page=#", $param)) $uri .= "{$param}&amp;";
            }
        }

        return urldecode($uri);
    }

}