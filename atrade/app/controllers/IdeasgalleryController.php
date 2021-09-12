<?php


namespace app\controllers;


class IdeasgalleryController extends AppController {

    public function viewAction() {
        // получаем id сигнала из массива get
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;

        // если id не пуст
        if($id) {
            // то мы получаем данные о сигнале по id
            $signalHistory = \R::findOne('signals', 'id = ?', [$id]);
            // если данные пусты
            if(!$signalHistory) {
                // возворащаем false
                return false;
            }
        }


        // если запрос пришел ассинхронно
        if($this->isAjax()) {
            // тогда загружаем описание сигнала
            $this->loadView( 'ideas_gallery', compact('signalHistory'));
        }
        // иначе
        redirect();

    }

}