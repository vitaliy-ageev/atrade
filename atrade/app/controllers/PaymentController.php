<?php


namespace app\controllers;


use app\models\Payment;
use Qiwi\Api\BillPayments;

class PaymentController extends AppController {

    public $layout = false;
    
    public function checkAction() {
        // Проверяем ведутся ли технические работы
        $this->technical();
        
            // создаем объект модели
            $payment = new Payment();
            // данные подключения к Qiwi
            $phone = $payment->qiwi_attrs['phone'];
            $token = $payment->qiwi_attrs['token'];
            $SECRET_KEY = $payment->qiwi_attrs['secret_key'];

            // создаем объект модели Qiwi и устанавливаем подключение
            $api = new ApiQiwi($phone, $token);

            // создаем объект модели BillPayments
            $billPayments = new BillPayments($SECRET_KEY);
            /** @var \Qiwi\Api\BillPayments $billPayments */

            // получаем все номера выставленных счетов
            $payments = \R::getAll('SELECT `count` FROM `order` WHERE status = 0');


            // проходимся циклом по всему массиву
            while ($i = current($payments)) {
                // номер счета равен текущему номеру массива
                $billId = $i['count'];
                // получаем информацию о заказе
                $order_info = \R::findOne('order', 'count = ?', [ $billId]);

                // создаем объект модели
                /** @var \Qiwi\Api\BillPayments $billPayments */
                // получаем информацию о счете
                $response = $billPayments->getBillInfo($billId);

                // то проверяем его статус
                if ($response['amount']['value'] == $order_info->advisor_price && $response['status']['value'] == 'PAID') {
                    // ищем текущий строку заказа в БД
                    $order_st = \R::load('order',$order_info->id);
                    // обновляем статус
                    $order_st->status = 1;
                    // загружаем его в БД
                    \R::store($order_st);

                    // отправляем письмо об оплате
                    // отправляем сообщение о выставленном счете
                    Payment::mailSend($order_info->id, $order_info->email, 'mail_paid', 'Успешная оплата', 'Спасибо за доверие! Ожидайте робота на указаннй электроннй адрес.');
                }
                
                // переходим на следующее значение массива
                next($payments);
            }

    }
}
