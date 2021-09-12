<?php


namespace atrade\base;


class View {
    
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
    public $meta = [];

    // массив со скриптами видов
    public $scripts = [];
    // массив со стилями
    public $styles = [];

    public function __construct ($route, $layout = '', $view = '', $meta) {
        // получаем данные и складываем их в свойства
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;

        // проверяем, если шаблон отключен
        if($layout === false) {
            // отключаем его
            $this->layout = false;
        } else {
            // иначе подключаем стандартные, либо указанный в константе
            $this->layout = $layout ?: LAYOUT;
        }
    }

    // формирует страницу для пользователя
    // принимает переменную с данными
    public function render($data) {
        // извлекаем данные
        if(is_array($data)) extract($data);
        // формируем путь к виду
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";

        // если существует такой файл
        if(is_file($viewFile)) {
            // то включаем буфиризацию, чтобы не выводился сам файл
            ob_start();
            // подключаем его
            require_once $viewFile;
            // возвращаем буфер в переменную
            $content = ob_get_clean();
        } else {
            // иначе выводим исключение и завершаем скрипт
            throw new \Exception("Не найден вид {$viewFile}", 404);
        }

        // подключаем шаблон, если он не отключен
        if(false != $this->layout) {
            // формируем путь
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            // если это файл, то подключаем
            if(is_file($layoutFile)) {
                // обработаем скрипты в виде, если есть
                $content = $this->getScripts($content);
                // кладем в переменную массиво скриптов
                $scripts = [];
                // если не пуст массив
                if(!empty($this->scripts[0])) {
                    // то кладем данные в переменную
                    $scripts = $this->scripts[0];
                }

                // обработаем стили в виде, если есть
                $content = $this->getStyles($content);
                $styles = [];

                if(!empty($this->styles[0])) {
                    $styles = $this->styles[0];
                }

//                debug($styles);
                
                require_once $layoutFile;
            } else {
                // иначе выводим исключение и завершаем скрипт
                throw new \Exception("Не найден шаблон {$layoutFile}", 404);
            }
        }

        }

    // обрабатываем и выводит мета данные в шаблон
    public function getMeta() {
        $output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $output .= '<meta name="description" content="' . $this->meta['desc'] . ' ">' . PHP_EOL;
        $output .= '<meta name="keywords" content="' . $this->meta['keywords'] . ' ">' . PHP_EOL;
        return $output;
    }

    // метод, который вырезает скрипты и передает в шаблон
    protected function getScripts($content) {
        // переменная, в которой хранится шаблон регулярного выражения
        $pattern = "#<script.*?>.*?</script>#si";

        // ищем если есть скрипты в видах, то кладем их в массив scripts
        preg_match_all($pattern, $content, $this->scripts);

        // если scripts не пуст
        if(!empty($this->scripts)) {
            // то вырезаем все скрипты, заменяя их пустой строкой
            $content = preg_replace($pattern, '', $content);
        }

        // после всего возвращаем данные
        return $content;
    }

    // метод, который вырезает стили и передает в шаблон
    protected function getStyles($content) {
        // переменная, в которой хранится шаблон регулярного выражения
        $pattern = "#<link rel=\"stylesheet\" href=\".*?\">#si";

        // ищем если есть стили в видах, то кладем их в массив styles
        preg_match_all($pattern, $content, $this->styles);

        // если styles не пуст
        if(!empty($this->styles)) {
            // то вырезаем все стили, заменяя их пустой строкой
            $content = preg_replace($pattern, '', $content);
        }

        // после возвращаем данные
        return $content;
        
    }

}