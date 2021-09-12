<?php


namespace atrade\libs;


class Pagination {

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
        // в начало
        $startpage = null;
        // в конец
        $endpage = null;
        // вторая страница слева
        $page2left = null;
        // первая страница слева
        $page1left = null;
        // вторая страница справа
        $page2right = null;
        // первая страница справа
        $page1right = null;

        // формирует верстку пути  назад
        if($this->currentPage > 1) {
            $back = "<a class='article_pagination_link_prev' href='{$this->uri}page=" .($this->currentPage - 1). "'>Назад</a>";
        }

        // формирует верстку пути вперед
        if($this->currentPage < $this->countPages) {
            $forward = "<a class='article_pagination_link_next' href='{$this->uri}page=" .($this->currentPage + 1). "'>Вперед</a>";
        }

        // формирует верстку пути в начало
        if($this->currentPage > 3) {
            $startpage = "<a class='article_pagination_link' href='{$this->uri}page=1'>1</a><span class='article_pagination_separator'>...</span>";
        }

        // формирует верстку пути в конец
        if($this->currentPage < $this->countPages - 2) {
            $endpage = "<span class='article_pagination_separator'>...</span><a class='article_pagination_link' href='{$this->uri}page={$this->countPages}'>"  .($this->countPages)."</a>";

        }

        // формирует верстку пути на две страницы слево
        if( $this->currentPage - 2 > 0) {
            $page2left = "<a class='article_pagination_link' href='{$this->uri}page=" .($this->currentPage - 2). "'>" .($this->currentPage - 2). "</a>";

        }

        // формирует верстку пути на одну страницу слева
        if($this->currentPage - 1 > 0) {
            $page1left = "<a class='article_pagination_link' href='{$this->uri}page=" .($this->currentPage - 1). "'>" .($this->currentPage - 1). "</a>";

        }

        // формирует верстку пути на одну страницы справа
        if($this->currentPage + 1 <= $this->countPages) {
            $page1right = "<a class='article_pagination_link' href='{$this->uri}page=" .($this->currentPage + 1). "'>" .($this->currentPage + 1). "</a>";

        }

        // формирует верстку пути на две страницу справа
        if($this->currentPage + 2 <= $this->countPages) {
            $page2right = "<a class='article_pagination_link' href='{$this->uri}page=" .($this->currentPage + 2). "'>" .($this->currentPage + 2). "</a>";
        }

        return '<div class="article_pagination">' . $back.$startpage.$page2left.$page1left.'<a class="article_pagination_link active">'.$this->currentPage.'</a>'.$page1right.$page2right.$endpage.$forward . '</div>';

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