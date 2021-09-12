<?php
    
    
    namespace app\controllers;
    
    
    use app\models\Feedback;
    use app\models\Payment;
    use Qiwi\Api\BillPayments;
    
    class RobotController extends AppController {
        
        // основной экшен для советников
        public function indexAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            //  подключаем новый шаблон
            $this->layout  = 'empty';
            
            // получаем данные о роботе
            $robot = \R::find('robot');
            // получаем данные о доходности графика по периодам
            $robot_chart_period = \R::findAll('robot_chart_period');
            // получаем данные уровня графика
            $robot_chart_levels = \R::findAll('robot_chart_levels');
    
            // получаем сегодняшнюю дату
            $current_day = time();
            // получаем день запуска робота
            $date_start = strtotime($robot['1']['date_start']);
            // считаем сколько дней работает робот
            $day_in_work_count = $current_day - $date_start;
            $day_in_work = round($day_in_work_count / (60 * 60 * 24));
            
            // получим данные документа "О торговых советниках"
            $documentAboutRobot = \R::find('documents', "id = ?", ['5']);
            
            // заполняем мета данные
            $this->setMeta('Торговый робот', 'Описание', 'Ключевые слова');
            
            // отправляем данные в вид
            $this->set(compact('robot', 'day_in_work', 'robot_chart_levels' ,'robot_chart_period' ,'documentAboutRobot'));
    
    
    
            if(!empty($_POST)) {
                if($_POST['form-name'] == 'try-for-free-form') {
                    // создаем объект модели
                    $payment = new Payment();
                    // берем данные из POST
                    $data = $_POST;
                    $payment->load($data);
    
                    // если данные не проходят валидацию
                    if(!$payment->validate($data)) {
                        // тогда мы показываем ошибки
                        $payment->getErrors();
                        // делаем редирект
                        redirect();
                    }  else {
        
                        // создаем счетчик
                        $count = \R::dispense('count');
                        $count->count = trim(date('Y-m-d H:i:s'));
                        $count->count = str_replace('-', '', $count->count);
                        $count->count = str_replace(':', '', $count->count);
                        $count->count = str_replace(' ', '', $count->count);
                        // сохраняем счетчик в таблицу БД
                        $id = \R::store($count);
        
                        // сохраняем все данные о заказе в таблицу
                        $order = \R::dispense('tryfree');
                        $order->count =  $count->count;
                        $order->email = $data['email'];
                        $order->name = $data['name'];
                        $order->surname = $data['surname'];
                        $order->robot_name = $robot['1']['name'];
                        $order->warning_risk = '1';
                        $order->personal_condition = '1';
                        // сохраняем данные в таблицу БД
                        $id = \R::store($order);
        
                        // отправляем сообщение о выставленном счете
                        Payment::mailSend($order->id, $order->email, 'mail_tryfree', 'Тестовый период', 'Спасибо за Ваш запрос!');
        
                        // формируем путь
                        $http  = '/feedback/success';
                        // отправляем по указанному  пути
                        redirect($http);
                    }
                }
    
                if($_POST['form-name'] == 'feedback-form') {
                    // создаем объект модели
                    $fb_message = new Feedback();
                    // берем данные из POST
                    $data = $_POST;
                    $fb_message->load($data);
    
                    // если данные не проходят валидацию
                    if(!$fb_message->validate($data)) {
                        // тогда мы показываем ошибки
                        $fb_message->getErrors();
                        // сохраняем верные введенные данные
                        $_SESSION['form_data'] = $data;
                        // делаем редирект
                        redirect();
                    }  else {
                        // иначе сохраняем данные
                        if($fb_message->save('feedback')) {
                            // записываем в сессию успех
                            $_SESSION['success'] = 'Спасибо за Ваше обращение!';
                            // формируем путь
                            $http  = '/feedback/success';
                            // отправляем по указанному  пути
                            redirect($http);
                        } else {
                            // записываем в сессию успех
                            $_SESSION['error'] = 'Ошибка при отправке';
                            // делаем редирект
                            redirect();
                        }
                        // делаем редирект
                        redirect();
                    }
                }
                
                
                
            }
            
            
        }
        
        public function paymentAction () {
            // Проверяем ведутся ли технические работы
            $this->technical();
            
            //  подключаем новый шаблон
            $this->layout  = 'empty';
    
            // получаем данные о роботе
            //$robot = \R::find('robot',);
            $robot_id = '1';
            $robot_name = \R::getCell('SELECT name FROM robot WHERE id = ? LIMIT 1', [$robot_id]);
            
            // заполняем мета данные
            $this->setMeta('Оплата робота ATrade Robot v1.03', 'Описание...', 'Ключевые слова...');
            
            // отправляем данные из БД в вид
            $this->set(compact('robot_id', 'robot_name'));
    
    
            if(!empty($_POST)) {
                // создаем объект модели
                $payment = new Payment();
                // берем данные из POST
                $data = $_POST;
                $payment->load($data);
        
                // если данные не проходят валидацию
                if(!$payment->validate($data)) {
                    // тогда мы показываем ошибки
                    $payment->getErrors();
                    // делаем редирект
                    redirect();
                }  else {
            
                    // создаем счетчик покупки
                    $count = \R::dispense('count');
                    $count->count = trim(date('Y-m-d H:i:s'));
                    $count->count = str_replace('-', '', $count->count);
                    $count->count = str_replace(':', '', $count->count);
                    $count->count = str_replace(' ', '', $count->count);
                    // сохраняем счетчик в таблицу БД
                    $id = \R::store($count);
            
                    // получаем данные о советниках по id
                    $id = $data['id'];
                    // получаем имя советника
                    $robot_name = \R::getCell('SELECT name FROM robot WHERE id = ? LIMIT 1', [$id]);
                    // получаем цену советника
                    $robot_price = \R::getCell('SELECT price_qiwi FROM robot WHERE id = ? LIMIT 1', [$id]);
            
                    // сохраняем все данные о заказе в таблицу
                    $order = \R::dispense('order');
                    $order->count =  $count->count;
                    $order->email = $data['email'];
                    $order->name = $data['name'];
                    $order->surname = $data['surname'];
                    $order->advisor_name = $robot_name ;
                    $order->advisor_price = $robot_price;
                    $order->warning_risk = '1';
                    $order->personal_conditions = '1';
                    $order->status = 0;
                    // сохраняем данные в таблицу БД
                    $id = \R::store($order);
            
                    // данные подключения к Qiwi
                    $phone = $payment->qiwi_attrs['phone'];
                    $token = $payment->qiwi_attrs['token'];
                    $SECRET_KEY = $payment->qiwi_attrs['secret_key'];
            
                    // создаем класс модели Qiwi и устанавливаем подключение
                    $api = new ApiQiwi($phone, $token);
            
                    // если подключение установлено
                    if ($api) {
                        // создаем объект модели BillPayments
                        $billPayments = new BillPayments($SECRET_KEY);
                        /** @var \Qiwi\Api\BillPayments $billPayments */
                
                        // формируем дату активности счета
                        $date = date("Y-m-d",strtotime("+3 day"));
                        $date_new = $date . 'T08:44:07+03:00';
                
                        // выставленяем счет
                        $billId = $count->count;
                
                        $fields = [
                                'amount' => $robot_price,
                                'currency' => 'RUB',
                                'comment' => 'Покупка советника ' . $robot_name ,
                                'expirationDateTime' => $date_new,
                                'email' => $data['email'],
                        ];
                
                        // загружаем данные счета
                        $response = $billPayments->createBill($billId, $fields);
                
                        // отправляем сообщение о выставленном счете
                        Payment::mailSend($order->id, $order->email, 'mail_order', 'Новый заказ', 'Спасибо за заказ!');
                
                        // формируем ссылку счета
                        $http = $response['payUrl'];
                        // отправляем на страницу оплаты
                        redirect($http);
                
                    } else {
                        // записываем в сессию ошибки
                        $_SESSION['error'] = 'Ошибка при отправке';
                        // делаем редирект
                        redirect();
                    }
            
                }
        
        
            }
            
        }
        
        
    }