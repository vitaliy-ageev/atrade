<link rel="stylesheet" href="/public/css/help/style.css">
<link rel="stylesheet" href="/public/css/help/preloader/style.css">


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
<div class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <div class="container_margin_TA">
                    <!--Help Block-->
                    <div class="help_block">
                        <!--Left Title-->
                        <div id='up' class="left_title">
                            <div class="left_title_block">
                                <div class="left_title_text">
                                    Помощь
                                </div>
                                <!--Left Title Navigation-->
                                <div class="left_title_nav">
                                    <div class="left_title_nav_inner">
                                        <div class="left_title_nav_link_block">
                                            <a href="/technical/works" class="left_title_nav_link" tabindex="-2">Общие вопросы</a>
                                        </div>
                                        <div class="left_title_nav_link_block">
                                            <a href='/technical/works' class="left_title_nav_link about_ta" tabindex="-2">Торговые идеи</a>
                                        </div>
                                        <div class="left_title_nav_link_block">
                                            <a href="/technical/works" class="left_title_nav_link" tabindex="-2">Торговые советники</a>
                                        </div>
                                        <div class="left_title_nav_link_block">
                                            <a href="/technical/works" class="left_title_nav_link" tabindex="-2">Лента новостей</a>
                                        </div>
                                        <div class="left_title_nav_link_block">
                                            <a href="/technical/works" class="left_title_nav_link" tabindex="-2">Календарь</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Left Title Navigation Mobile-->
                                <div class="left_title_nav_mobile">
                                    <div class="left_title_nav_mobile_wrapper">
                                        <div class="left_title_nav_mobile_inner">
                                            <div class="left_title_nav_mobile_link_block">
                                                <a href="/technical/works" class="left_title_nav_mobile_link">Общие вопросы
                                                </a>
                                            </div>
                                            <div class="left_title_nav_mobile_link_block">
                                                <a href='/technical/works' class="left_title_nav_mobile_link">Торговые идеи
                                                </a>
                                            </div>
                                            <div class="left_title_nav_mobile_link_block">
                                                <a href="/technical/works" class="left_title_nav_mobile_link">Торговые советники
                                                </a>
                                            </div>
                                            <div class="left_title_nav_mobile_link_block">
                                                <a href="/technical/works" class="left_title_nav_mobile_link">Лента новостей
                                                </a>
                                            </div>
                                            <div class="left_title_nav_mobile_link_block">
                                                <a  href="/technical/works" class="left_title_nav_mobile_link">Календарь
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id='help_page' class="help_block_inner">
                            <!--Search For A Question-->
                            <div class="help_search_question">
                                <div class="help_search_question_inner">
                                    <!--Left-->
                                    <div class="help_search_question_left">
                                        <!--Title-->
                                        <div class="help_search_question_title">
                                            Чем мы можем вам помочь?
                                        </div>
                                        <!--Search-->
                                        <div class="help_block_search">
                                            <div class="help_block_search_inner">
                                                <!--Form-->
                                                <form action="/search" method="get" autocomplete="off" class="help_block_search_form">
                                                    <input type="text"  name="s" id="search_input_help" class="help_block_search_input" placeholder="Введите ваш вопрос" tabindex="-2">
                                                    <!--Button-->
                                                    <button type="submit" value="" class="help_block_search_button">
                                                        <!--Svg Icon-->
                                                        <svg class="help_block_search_icon" width="18" height="18" viewBox="0 0 18 18"><path fill-rule="evenodd" d="M12.026 10.626L16 14.6 14.6 16l-3.974-3.974a5.5 5.5 0 1 1 1.4-1.4zM7.5 11.1a3.6 3.6 0 1 0 0-7.2 3.6 3.6 0 0 0 0 7.2z"></path></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Subtitle-->
                                        <div class="help_search_question_subtitle">
                                            <div class="help_search_question_subtitle_inner">
                                                <span>Популярные вопросы: </span>
                                                <a href="/search?s=Как+торговать+по+сигналам" tabindex="-2">Как торговать по идеям,</a>
                                                <a href="/search?s=Выбор++брокера" tabindex="-2">выбор брокера</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Right-->
                                    <div class="help_search_question_right">
                                        <!--Background-->
                                        <div class="help_search_question_background">
                                            <img src="/public/images/help/search/1.png" srcset="/public/images/help/search/2.png 2x, /public/images/help/search/3.png 3x" alt="" class="help_search_question_background_img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="help_item_container">
                                <!--Help Item Title-->
                                <div class="help_item_container_title_block">
                                    <div class="help_item_container_title">
                                        Основные разделы
                                    </div>
                                    <div class="help_item_container_description">
                                        Найдите ответ на любые свои вопросы: от простых действий и до специфических советов и возможностей!
                                    </div>
                                </div>
                                <div class="help_item_container_inner">
                                    <?php if($help_sections): ?>
                                        <?php foreach ($help_sections as $item): ?>
                                            <!--Help Item-->
                                            <a href='/technical/works' class="help_item" tabindex="-2">
                                                <div class="help_item_inner">
                                                    <!--Left-->
                                                    <div class="help_item_left">
                                                        <!--Background-->
                                                        <?=$item->svg_icon?>
                                                    </div>
                                                    <!--Right-->
                                                    <div class="help_item_right">
                                                        <!--Title-->
                                                        <div class="help_item_title">
                                                            <?=$item->title?>
                                                        </div>
                                                        <!--Title-->
                                                        <div class="help_item_title_450px">
                                                            <?=$item->title_450px?>
                                                        </div>
                                                        <!--Description-->
                                                        <div class="help_item_description">
                                                            <?=$item->text?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                
                                </div>
                            </div>
                            <?php if($support_contacts): ?>
                                <!--Support Contacts-->
                                <div class="help_support_contacts">
                                    <div class="help_support_contacts_inner">
                                        <!--Title-->
                                        <div class="help_support_contacts_title_block">
                                            <div class="help_support_contacts_title">
                                                Служба поддержки
                                            </div>
                                            <div class="help_support_contacts_description">
                                                Наши менеджеры ответят на все Ваши вопросы.
                                            </div>
                                        </div>
                                        <div class="help_support_contacts_wrapper">
                                            <div class="help_support_contacts_wrapper_container">
                                                <?php foreach($support_contacts as $item): ?>
                                                    <!--Item-->
                                                    <a href="<?=$item->link;?>"  class="help_support_contacts_item" target="_blank" tabindex="-2">
                                                        <!--Background-->
                                                        <div class="help_support_contacts_item_bg">
                                                            <!--Svg-->
                                                            <?=$item->svg_icon;?>
                                                        </div>
                                                        <!--Name-->
                                                        <div class="help_support_contacts_item_name_block">
                                                            <div class="help_support_contacts_item_title">
                                                                <?=$item->name;?>:
                                                            </div>
                                                            <div class="help_support_contacts_item_name">
                                                                <?=$item->contact;?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--Ask A Question-->
                            <div class="help_ask_question">
                                <div class="help_ask_question_inner">
                                    <!--Left-->
                                    <div class="help_ask_question_left">
                                        <div class="help_ask_question_title">
                                            Не нашли ответ на свой вопрос?
                                        </div>
                                        <div class="help_ask_question_text">
<span>
Не нашли ответ на свой вопрос?
</span>
                                            Напишите нам о своей проблеме и мы постараемся решить ее в ближайшее время.
                                        </div>
                                    </div>
                                    <!--Right-->
                                    <div class="help_ask_question_right">
                                        <!--Button-->
                                        <a href='/feedback' class="help_ask_question_button" tabindex="-2">
                                            Задать вопрос
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                        
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src='/public/js/help/main.js'></script>
<script src='/public/js/help/app.js'></script>