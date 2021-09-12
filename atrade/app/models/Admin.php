<?php


namespace app\models;


class Admin extends AppModel {

    public function login($isAdmin = false) {
        // если не пуст логин в посте, тогда берем его, иначе null
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']): null;
        // если не пуст пароль в посте, тогда берем его, иначе null
        $password = !empty(trim($_POST['login'])) ? trim($_POST['login']): null;

        // если не пуст логин и пароль
        if($login && $password) {
            // если это администратор
            if($isAdmin) {
                // дополнительно проверяем его роль
                $user = \R::findOne("user', 'login = ? AND role = 'admin'", [$login]);
            } else {
                return false;
            }

            // если мы авторизуем администратора
            if($user) {
                // проверяем его пароль
                if(password_verify($password, $user->password)){
                    // тогда его авторизуем
                    foreach ($user as $k => $v) {
                        // кладем в сессию все данные, кроме пароля
                        if($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;

                }
            }

        }

        return false;
    }

    public function logout() {
        // если сессия такого пользователя есть, тогда удаляем ее
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        // и делаем редирект
        redirect();
    }

    public static function checkAuth() {
        // если пользователь авторизован, возвращаем его данные
        return isset($_SESSION['user']);
    }

    public static function isAdmin() {
        // если пользователь авторизован и это админ, то возврадаем его данные
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }

}