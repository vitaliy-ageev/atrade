<?php

/*
 * Данный файл предназначен для создания и хранения различный функций
 */

// функция для красивой распечатки
function debug($arr) {
    echo '<pre>'. print_r($arr, true) .'</pre>';
}

// функция для преобразования первого символа в заглавный
function my_ucfirst($string, $e ='utf-8') {
    if (function_exists('mb_strtoupper') && function_exists('mb_substr') && !empty($string)) {
            $string = mb_strtolower($string, $e);
            $upper = mb_strtoupper($string, $e);
            preg_match('#(.)#us', $upper, $matches);
            $string = $matches[1] . mb_substr($string, 1, mb_strlen($string, $e), $e);
    }
        else {
            $string = ucfirst($string);
        }
        
        return $string;
}
    


// функция для редиректа на главную или какие-то заданные адреса
function redirect($http = false) {
    // если передана страница, куда перенаправить
    if($http) {
        // то перенаправляем
        $redirect = $http;
    } else {
        // иначе перезапращиваем существующую страницу
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;

    }
    header("Location: $redirect");
    exit;
}

// обертка для функции htmlspecialchars
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}