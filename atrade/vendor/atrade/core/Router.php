<?php


namespace atrade;


class Router {
    // Свойство для хранения всех маршрутов
    protected static $routes = [];
    // Свойство для хранения текущего маршрута
    protected static $route = [];

    // Метод, который записывает правила в таблицу маршрутов
    public static function add($regexp, $route = []) {
       self::$routes[$regexp] = $route;
    }

    // Метод для тестирования - возвращает таблицу маршрутов
    public static function getRoutes() {
        return self::$routes;
    }

    // Метод для тестирования, возвращает текущий маршрут
    public static function getRoute() {
        return self::$route;
    }

    // Метод, который принимает запрошенный адрес и выполняет действие
    public static function dispatch($url) {
        $url = self::removeQueryString($url);
        // Проверяем, если MatchRoute найдет адрес, то
        if(self::matchRoute($url)) {
            // Вызываем котроллер
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            // Проверяем, если у нас такой класс
            if(class_exists($controller)) {
                // Если контроллер найден, то создаем его объект и передаем текущий маршрут
                $controllerObject = new $controller(self::$route);
                // Вызываем метод у данного объекта
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                // Проверям, есть ли такой объект в данном классе
                if(method_exists($controllerObject, $action)) {
                    // То вызываем его
                    $controllerObject->$action();
                    // вызываем метод getView
                    $controllerObject->getView();
                } else {
                    // Если не существует, выдаем исключение и завершаем работу скрипта
                    throw new \Exception("Метод $controller::$action не найден", 404);
                }
            } else {
                // Иначе выдаем ислючение и завершаем работу скрипта
                throw new \Exception("Контроллер $controller не найден", 404);
            }
        } else {
            // Иначе выдаем ислючение и завершаем работу скрипта
            throw new \Exception('Страница не найдена', 404);
        }
    }

    // Метод, который ищет соответсвие в таблице маршрутов с запрошенным адресом
    public static function matchRoute($url) {
        // Проходимся в цикле по массиву маршрутов и складываем отдельно в
        // Pattern с ключом Route
        foreach(self::$routes as $pattern => $route) {
            // Ищем соответсвие переданного адреса с нашими правилами маршрутов
            if(preg_match("#{$pattern}#i", $url, $matches)) {
                // Если найдено соответсвтие, то проходимся снова по массиву
                // И берем отдельно ключ, отдельно значение
                foreach ($matches as $k => $v) {
                    // Проверяем, чтобы были только строковые ключи
                    if(is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                // Если пуст Action
                if (empty(($route['action']))) {
                    // Тогда присваиваем по умолчанию index
                    $route['action'] = 'index';
                }
                // Если не существует админский префикс
                if(!isset($route['prefix'])) {
                    // тогда создаем его и присваиваем пустую строку
                    $route['prefix'] = '';

                } else {
                    // иначе добавляем обратный слеш
                    $route['prefix'] .= '\\';
                }
                // Обработаем имя контроллера под стандарты
                $route['controller'] = self::upperCamelCase($route['controller']);
                // Сохраняем в свойстве route, в котором хранится текущий маршрут
                self::$route = $route;
                return true;
            }
        }

        return false;
    }

    // Метод, который будет делать у полученного контроллера
    // первую букву большой
    // И если есть дефис, то заменять его и делать последующию букву за дефисом большой
    protected static function upperCamelCase($name) {
       return str_replace(' ' , '' ,ucwords(str_replace('-', ' ', $name)));
    }

    // Метод, который будет делать у полученного экшена
    // первую букву маленькой
    protected static function lowerCamelCase($name) {
        return lcfirst(self::upperCamelCase($name));
    }

    // метод, который вырезает гет параметры из адресной строки
    protected static function removeQueryString($url) {
        // если в url есть дополнительные гет параметры
        if($url) {
            // если есть, то делим адресную строку на массив по &
            $params = explode('&', $url, 2);
            // проверяем 0 элемент массива на знак =
             if(false === strpos($params[0], '=')) {
                 // если его там нет, то возвращаем 0 элемент массива
                 return rtrim($params[0], '/');
             } else {
                 // если знак = есть, то возвращаем пустую строку
                 return '';
             }
        }
    }
}