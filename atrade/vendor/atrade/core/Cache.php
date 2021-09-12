<?php


namespace atrade;


class Cache {

    //  подключаем TSingleton
    use TSingleton;

    // метод, который будет записывать в кеш
    public function set($key, $data, $seconds = 3600*24) {
        // если объект кешируется
        if($seconds) {
            // помещаем в переменную полученные данные
            $content['data'] = $data;
            // определяем конечное время кеширования
            $content['end_time'] = time() + $seconds;

            // кладем данные в кеш
            // формируем путь
            // хешируем его
            // добавляем расширение txt
            // сериализуем его в строку
            if(file_put_contents(CACHE . '/' . md5($key) . '.txt', serialize($content))) {
                return true;
            }

        }

        return false;

    }

    // метод, который будет получать данные из кеша
    public function get($key) {
        // формируем путь к файлу
        $file = CACHE . '/' . md5($key) . '.txt';
        // если существует такой файл
        if(file_exists($file)) {
            // получаем в переменную content данные
            // десириализуем их обратно
            $content = unserialize(file_get_contents($file));

            // проверяем, не устарели ли кешированные данные
            if(time() <= $content['end_time']) {
                // тогда мы их вернем
                return $content['data'];
            } else {
                // иначе удаляем файл
                unlink($file);
            }

        }

        return false;

    }

    // метод, который будет удалять кеш
    public function delete($key) {
        // получаем путь к файлу
        $file = CACHE . '/' . md5($key) . '.txt';
        // если существует такой файл
        if (file_exists($file)) {
            // то удаляем 
            unlink($file);
            
        }
    }

}