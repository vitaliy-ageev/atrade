<?php

/**
 * В данном файле будут храниться некоторые константы
 */

// Константа, отвечающая за режим отладки - 1 или режим пользователя - 0
define("DEBUG",0);
define("TECHNICAL", 0);


// Константа, ведущая на корневую папку проекта
define("ROOT",dirname(__DIR__));
// Константа, ведущая на папку проекта public
define("WWW", ROOT . '/public');
// Константа, ведущая на папку проекта app
define("APP", ROOT . '/app');
// Константа, ведущая к ядру на папку проекта core
define("CORE", ROOT . '/vendor/atrade/core');
// Константа, ведущая к ядру на папку проекта base
define("BASE", ROOT . '/vendor/atrade/core/base');
// Константа, ведущая к ядру на папку проекта libs
define("LIBS", ROOT . '/vendor/atrade/core/libs');
// Константа, ведущая на папку проекта cache
define("CACHE", ROOT . '/tmp/cache');
// Константа, ведущая на папку проекта config
define("CONF", ROOT . '/config');

// Константа, отвечающая за шаблон сайта по умолчанию
define("LAYOUT", 'atrade');


// Константа, ведущая на фавикон сайт
define("FAVICON", "/images/base/logotype/comet-favicon.ico");

// Константа, ведущая на папку базовых стилей
define("STYLE_BASE", "/css/base");
// Константа, ведущая на базовые скрипты
define("JS_BASE", "/js/base");




// Константа, ведущая на стили Advisors
define("STYLE_ADV", "/css/advisors");
// Константа, ведущая на скрипты Advisors
define("JS_ADV", "/js/advisors");
// Константа, ведущая на стили Articles
define("STYLE_ARTS", "/css/news");
// Константа, ведущая на скрипты Articles
define("JS_ARTS", "/js/news");
// Константа, ведущая на стили Article
define("STYLE_ART", "/css/news/item");
// Константа, ведущая на скрипты Articles
define("JS_ART", "/js/news/item");
// Константа, ведущая на стили Calendar
define("STYLE_CR", "/css/calendar");
// Константа, ведущая на скрипты Calendar
define("JS_CR", "/js/calendar");
// Константа, ведущая на стили Feedback
define("STYLE_FDB", "/css/feedback");
// Константа, ведущая на скрипты Feedback
define("JS_FDB", "/js/feedback");

// Константа, ведущая на стили хедера
define("STYLE_HEADER", "/widgets/header/css");
// Константа, ведущая на стили футера
define("STYLE_FOOTER", "/widgets/footer/css");

// Константа, ведущая на библиотеку скриптов Jquery 3.4.1
define("JS_1", "/libs/js/1/app.js");
// Константа, ведущая на библиотеку скриптов Jquery 3.4.1 Cookie
define("JS_COOKIE", "/libs/js/1/cookie.js");
// Константа, ведущая на библиотеку скриптов Jquery 1.12.1
define("JS_2", "/libs/js/2/app.js");
// Константа, ведущая на библиотеку стилей Jquery 1.12.1
define("STYLE_2", "/libs/js/2/style.css");



// Константы, ведущая на библиотеку скриптов Typeahead
define("JS_SEARCH", "/libs/search/app.js");
// Константы, ведущая на библиотеку скриптов Validator
define("JS_VLDT", "/libs/validator/app.js");


// Константа, ведущая на базову папку картинок
define("IMG_BASE", "/images/base");
// Константа, ведущая на папку картинок Main
define("IMG_MAIN", "/images/signals");



/**
 * Расчитываем програмно стандартный путь сайта http и https
 */
// Формируем ссылку http
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// Формируем ссылку https
$app_path_s = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

// Ищем все символы кроме / и заменяем пустой строкой index в $app_path
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// Тоже самое для https
$app_path_s = preg_replace("#[^/]+$#", '', $app_path_s);

// Ищем все /public/ заменяем пустой строкой в $app_path
$app_path = str_replace('/public/', '', $app_path);
// Тоже самое для https
$app_path_s = str_replace('/public/', '', $app_path_s);

// Записываем в константу url страницы, который в $app_path и в $app_path_s
define("PATH", $app_path);
define("PATH_S", $app_path_s);

// Константа, ведущая на админ. панель
define("ADMIN", PATH . '/admin');

// Подключаем автозагрузчик composer
require_once ROOT . '/vendor/autoload.php';