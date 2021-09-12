<?php


namespace atrade;


class ErrorHandler
{
    public function __construct()
    {
        //Узнаем состояние константы Debug
        if(DEBUG){
            // Если стоит режим разработчика, то показываем все ошибки
            error_reporting(-1);
        }  else {
            // Если стоит режим пользователя, то скрываем показ ошибок
            error_reporting(0);
        }
        //  Обрабатываем исключения ошибок, назначая им свой метод(функцию)
        set_exception_handler([$this, 'exceptionHandler']);
    }

    // Метод для перехватыва и обрабатки исключений
    public function exceptionHandler($e) {
        // Логируем ошибку и записываем параметры
        $this->logErrors($e->getMessage(),$e->getFile(), $e->getLine());
        $this->displayError('Исключение',$e->getMessage(),$e->getFile(), $e->getLine(), $e->getCode());
    }

    // Метод для логирования ошибок
    protected function logErrors($message = '', $file = '', $line = '') {
        // Формируем ошибку, заполняя дату, текст ошибки, файл и строку
        // Затем указываем, что хотим записать это в файл (1 - отправить по почте, 3 - записать в файл)
        // И указываем путь, куда сохранять файл
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n========================\n", 3, ROOT . '/tmp/error.log');
    }

    // Метод для вывода ошибок и подключения шаблонов
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404) {
        // Отправляем заголовок ошибки
        http_response_code($responce);
        // Подключаем шаблон по условию
        // Если ошибка равна 404 и выключен режим разработки, то загрузить шаблон 404
        if($responce == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        // Если ошибка равна 500 и выключен режим разработки, то загрузить шаблон 500
        if($responce == 500 && !DEBUG) {
            require WWW . '/errors/500.php';
            die;
        }
        // Проверяем, если влючен режим разработчика, то
        if(DEBUG) {
            // Подключаем шаблон разработчика
            require WWW . '/errors/dev.php';
        } else {
            // Подключаем шаблон пользователя
            require WWW . '/errors/prod.php';
        }
        die;
    }
}