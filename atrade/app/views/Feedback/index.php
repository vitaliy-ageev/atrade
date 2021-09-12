<link rel="stylesheet" href="<?=STYLE_FDB;?>/style.css">
<link rel="stylesheet" href="<?=STYLE_FDB;?>/preloader/style.css">


<!--Preloader-->
<div class="preloader" id="preloader">
    <div class="container">
        <div class="preloader_inner">
            <div class="container_preloader">
                <div class="loader-container arc-rotate">
                    <div class="loader">
                        <div class="arc"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Main Page-->
<div id='up' class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <!--Left Title-->
                <div class="left_title">
                    <div class="left_title_block">
                        <div class="left_title_text">
                            Форма обратной связи
                        </div>
                    </div>
                </div>
                <!--Main Content-->
                <div id='feedback_load' class="main_content">
                    <div class="main_content_inner">
                        <!--Feedback Page-->
                        <div class="feedback_page">
                            <!--Description-->
                            <div class="feedback_page_description">
                                Введите данные своего запроса. Сотрудник нашей службы поддержки ответит Вам в ближайшее время.
                            </div>


                            


                            <!--Form-->
                            <form action="feedback" id='feedback_form' class="feedback_page_form" autocomplete="off" method="post" role="form">
                                <!--Item-->
                                <div class="feedback_page_form_item">
                                    <label for="feedback_email" class="feedback_page_form_item_label" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '' ; ?>">
                                        Электронный адрес:
                                    </label>
                                    <input id='feedback_email' type="email" name="email" class="feedback_page_form_item_input" tabindex="1"  required autofocus>
                                </div>
                                <!--Item-->
                                <div class="feedback_page_form_item">
                                    <label for="feedback_theme" class="feedback_page_form_item_label">
                                        Тема:
                                    </label>
                                    <input id='feedback_theme' type="text" name="theme" class="feedback_page_form_item_input" required tabindex="1" value="<?=isset($_SESSION['form_data']['theme']) ? h($_SESSION['form_data']['theme']) : '' ; ?>">
                                </div>
                                <!--Item-->
                                <div class="feedback_page_form_item">
                                    <label for="feedback_description" class="feedback_page_form_item_label">
                                        Описание:
                                    </label>
                                    <textarea id='feedback_description' name="message" class="feedback_page_form_item_textarea" required tabindex="1"
                                              aria-required="true" aria-describedby="request_description_hint" aria-labelledby="request_description_label"><?=isset($_SESSION['form_data']['message']) ? h($_SESSION['form_data']['message']) : '' ; ?></textarea>
                                    <span class="feedback_page_form_item_desc">
<span>*</span>
Пожалуйста, опишите Вашу проблему подробно, чтобы мы смогли помочь Вам!
</span>
                                </div>
                                <!--Button Submit-->
                                <div class="feedback_page_form_submit">
                                    <button type="submit" class="feedback_page_form_submit_button" tabindex="1" autocomplete="off">
                                        Отправить
                                    </button>
                                </div>
                            </form>
                            <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src='<?=JS_VLDT;?>'></script>
<script src='<?=JS_FDB;?>/main.js'></script>
<script src='<?=JS_FDB;?>/app.js'></script>

