<link rel="stylesheet" href="/public/css/robot/payment/style.css">


<!--Preloader-->
<div class="preloader" id="preloader">
</div>

<main class="main-content animation-items animation-no-hide">
    <!--Close-->
    <a href="/robot" class="close-link" tabindex="-1">
        <svg class="close-icon" id="close_1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
            </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g>
</svg>
    </a>
    <!--Back-->
    <a href="/robot"" class="back-link" tabindex="-1">
        <svg class="back-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g id="simple-link-icon" stroke="none" stroke-width="1"  fill-rule="evenodd"><path d="M19.5857864,11 L17.2928932,8.70710678 C16.9023689,8.31658249 16.9023689,7.68341751 17.2928932,7.29289322 C17.6834175,6.90236893 18.3165825,6.90236893 18.7071068,7.29289322 L22.7071068,11.2928932 C23.0976311,11.6834175 23.0976311,12.3165825 22.7071068,12.7071068 L18.7071068,16.7071068 C18.3165825,17.0976311 17.6834175,17.0976311 17.2928932,16.7071068 C16.9023689,16.3165825 16.9023689,15.6834175 17.2928932,15.2928932 L19.5857864,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 L19.5857864,11 Z" id="Combined-Shape" fill-rule="nonzero"></path></g></svg>
    </a>
    <!--Payment-->
    <section class="payment-wrapper">
        <div class="container">
            <div class="payment">
                <!--Close-->
                <a href="/robot"" class="payment-close-link" tabindex="-1">
                    <svg class="payment-close-icon" id="close_1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                        </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g>
</svg>
                </a>
                <div class="container-indents">
                    <div class="payment-inner">
                        <!--Suptitle-->
                        <div class="payment-suptitle">
                            Оплата робота
                        </div>
                        <!--Title-->
                        <div class="payment-title">
                            <?=$robot_name;?>
                        </div>
                        <!--Text-->
                        <div class="payment-text">
                            Заполните форму, указывая только действительные данные. После оплаты Вы получите письмо с файлами робота на указанный Вами электронный адрес.
                        </div>
                        <!--Form-->
                        <form action="/robot/payment" class="payment-form" id='payment-form' autocomplete="off" method="POST" role="dialog" novalidate="novalidate">
                            <div class="payment-form-container">
                                <!--Name-->
                                <div class="payment-form-item name">
                                    <label for="name" class="payment-form-label">Имя:</label>
                                    <input id="firstname" type="text" name="name" class="payment-form-input" tabindex="1" required="" aria-required="true">
                                </div>
                                <!--Surname-->
                                <div class="payment-form-item surname">
                                    <label for="surname" class="payment-form-label">Фамилия:</label>
                                    <input id="secondname" type="text" name="surname" class="payment-form-input" tabindex="1" required="" aria-required="true">
                                </div>
                                <!--Email-->
                                <div class="payment-form-item email">
                                    <label for="email" class="payment-form-label">Электронный адрес:</label>
                                    <input id="email" type="email" name="email" class="payment-form-input" tabindex="1" required aria-required="true">
                                </div>
                                <input type="hidden" name="id" value="<?=$robot_id;?>">
                            </div>
                            <!--Button Submit-->
                            <button type="submit" class="payment-form-submit-button" tabindex="-1" autocomplete="off">
                                <span>Перейти на страницу оплаты</span>
                                <div class="payment-form-submit-button-circle"></div>
                            </button>
                            <!--Agrement-->
                            <div class="payment-form-agrement">
                                <h3 class="payment-form-agrement-title">
                                    Нажимая кнопку «Перейти на страницу оплаты»:
                                </h3>
                                <!--Item-->
                                <div class="payment-form-agrement-item risk">
                                    <input type="checkbox" name="warning-risk" id="warning-risk" class="payment-form-agrement-checkbox" autocomplete="off" tabindex="-2" value="" required="" checked="">
                                    <label for="warning-risk" id="warning-risk" class="payment-form-agrement-label">
                                        Я принимаю условия приобритения и использования робота у компании ATrade
                                    </label>
                                </div>
                                <!--Item-->
                                <div class="payment-form-agrement-item condition">
                                    <input type="checkbox" name="personal-condition" id="personal-condition" class="payment-form-agrement-checkbox" autocomplete="off" tabindex="-2" value="" required="" checked="">
                                    <label for="personal-condition" id="personal-condition" class="payment-form-agrement-label">
                                        Я принимаю условия пользовательского соглашения и даю своё согласие Спутнику на обработку моей персональной информации на условиях, определенных политикой конфиденциальности
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src='<?=JS_VLDT;?>'></script>
<script src='/public/js/robot//payment/app.js'></script>