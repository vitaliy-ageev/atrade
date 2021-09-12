<link rel="stylesheet" href="/public/libs/carousel/dist/assets/style.css">
<link rel="stylesheet" href="/public/libs/carousel/dist/assets//style.theme.css">
<link rel="stylesheet" href="/public/css/ideas/style.css">
<link rel="stylesheet" href="/public/css/ideas/preloader/style.css">






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

<!--Preloader-->
<div class="preloader_modal" id="preloader_modal">
    <div class="container">
        <div class="preloader_modal_inner">
            <div class="container_preloader_modal">
                <div class="loader-container-modal arc-rotate-modal">
                    <div class="loader-modal">
                        <div class="arc-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













<!--Main Page-->
<div id="up" class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <!--Left Title-->
                <div class="left_title">
                    <div class="left_title_block">
                        <div class="left_title_text">
                            Торговые идеи
                        </div>
                        <!--Left Title Navigation-->
                        <div class="left_title_nav">
                            <div class="left_title_nav_inner">
                                <div class="left_title_nav_link_block">
                                    <a href="/main/<?=$documentSignals['1']['alias'];?>" class="left_title_nav_link" tabindex="-2">Как торговать по идеям</a>
                                </div>
                                <div class="left_title_nav_link_block">
                                    <a href='/ideas/history' class="left_title_nav_link about_ta" tabindex="-2">История идей</a>
                                </div>
                                <div class="left_title_nav_link_block">
                                    <a href="/feedback" class="left_title_nav_link" tabindex="-2">Помощь</a>
                                </div>
                            </div>
                        </div>
                        <!--Left Title Navigation Mobile-->
                        <div class="left_title_nav_mobile">
                            <div class="left_title_nav_mobile_wrapper">
                                <div class="left_title_nav_mobile_inner">
                                    <div class="left_title_nav_mobile_link_block">
                                        <a href='/main/<?=$documentSignals['1']['alias'];?>' class="left_title_nav_mobile_link">Как торговать по идеям
                                        </a>
                                    </div>
                                    <div class="left_title_nav_mobile_link_block">
                                        <a href="/ideas/history" class="left_title_nav_mobile_link">История идей
                                        </a>
                                    </div>
                                    <div class="left_title_nav_mobile_link_block">
                                        <a href="/feedback" class="left_title_nav_mobile_link">Помощь
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Receiving Signals-->
                <div class="receiving_signals" id='receiving_signals'>
                    <div class="receiving_signals_inner">
                        <!--Receiving Signals Notification-->
                        <div class="receiving_signals_notification">
                            <div class="receiving_signals_notification_inner">
                                <!--Receiving Signals Notification Text-->
                                <div class="receiving_signals_notification_text">
                                    К сожалению, в данный момент, рынок закрыт. Чтобы не пропускать новые идеи, подпишитесь на уведомления в нашем <a href="https://t.me/sputnik_ws" class="receiving_signals_notification_tg" target="_blank" tabindex="-2">Telegram канале</a>
                                </div>
                                <!--Receiving Signals Notification Button-->
                                <a href="https://t.me/sputnik_ws" class="receiving_signals_notification_link" target="_blank" tabindex="-2">
                                    Подписаться
                                </a>
                            </div>
                        </div>
                        <div class="receiving_signals_container owl-carousel">
                            <!--Receiving Signals Item-->
                            <?php $date = date('D'); if($date != 'Sat' && $date != 'Sun'): ?>
                                <?php if($signals): ?>
                                    <?php foreach($signals as $signal): ?>
                                        <div  class="receiving_signals_item <?=$signalsType[$signal->type_id]['class'];?>
                            <?php if(in_array($signal->id, (array) $signalsViewed)): ?>
                                viewed
                            <?php endif; ?>
                             ">
                                            <a id="D<?=$signal->id;?>" data-id="<?=$signal->id;?>" href='ideas/view?id=<?=$signal->id;?>' class="receiving_signals_item_inner modal_msw" tabindex="-2">
                                                <?php if(in_array($signal->id, (array) $signalsViewed)): ?>
                                                    <div class="receiving_signals_item_viewed_card">
                                                        <div class="receiving_signals_item_viewed_card_inner">
                                                            <svg class="receiving_signals_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
<g>
    <g>
        <path d="M510.933,245.6c-4.267-6.4-93.867-160-253.867-160S7.467,239.2,3.2,245.6c-4.267,6.4-4.267,14.933,0,21.333    c4.267,6.4,93.867,160,253.867,160s249.6-153.6,253.867-160C513.067,260.533,513.067,252,510.933,245.6z M257.067,362.933    C197.333,362.933,150.4,316,150.4,256.267S197.333,149.6,257.067,149.6s106.667,46.933,106.667,106.667    S316.8,362.933,257.067,362.933z"/>
    </g>
</g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M257.067,192.267c-36.267,0-64,27.733-64,64s27.733,64,64,64s64-27.733,64-64S293.333,192.267,257.067,192.267z     M278.4,256.267c-12.8,0-21.333-8.533-21.333-21.333c0-12.8,8.533-21.333,21.333-21.333c12.8,0,21.333,8.533,21.333,21.333    C299.733,247.733,291.2,256.267,278.4,256.267z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
</svg>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="receiving_signals_item_viewed_card js">
                                                    <div class="receiving_signals_item_viewed_card_inner">
                                                        <svg class="receiving_signals_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
<g>
    <g>
        <path d="M510.933,245.6c-4.267-6.4-93.867-160-253.867-160S7.467,239.2,3.2,245.6c-4.267,6.4-4.267,14.933,0,21.333    c4.267,6.4,93.867,160,253.867,160s249.6-153.6,253.867-160C513.067,260.533,513.067,252,510.933,245.6z M257.067,362.933    C197.333,362.933,150.4,316,150.4,256.267S197.333,149.6,257.067,149.6s106.667,46.933,106.667,106.667    S316.8,362.933,257.067,362.933z"/>
    </g>
</g>
                                                            <g>
                                                                <g>
                                                                    <path d="M257.067,192.267c-36.267,0-64,27.733-64,64s27.733,64,64,64s64-27.733,64-64S293.333,192.267,257.067,192.267z     M278.4,256.267c-12.8,0-21.333-8.533-21.333-21.333c0-12.8,8.533-21.333,21.333-21.333c12.8,0,21.333,8.533,21.333,21.333    C299.733,247.733,291.2,256.267,278.4,256.267z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
</svg>
                                                    </div>
                                                </div>
                                                <div class="receiving_signals_status_card
                                        <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0  && $signal->cancel_status == 0):?>
                                        new
                                        <?php endif; ?>
                                            ">
                                                    <span class="receiving_signals_status_card_circle"></span>
                                                    <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                                        <div class="receiving_signals_status_card_text">
                                                            Активный
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="receiving_signals_item_upper">
                                                    <div class="receiving_signals_item_bg" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signal->curr_id]['image'];?>");'>
                                                    </div>
                                                    <div class="receiving_signals_item_name">
                                                        <?=$signalsCurrencies[$signal->curr_id]['name'];?>
                                                    </div>
                                                    <div class="receiving_signals_item_profitability <?=$signalsType[$signal->type_id]['class'];?>">
                                                        <?=$signalsType[$signal->type_id]['type'];?>
                                                    </div>
                                                </div>
                                                <!--Chart-->
                                                <div class="receiving_signals_item_chart">
                                                    <svg class="Chart__svgChartContainer_30V2_" viewBox="0 0 338 150">
                                                        <!--Polyline-->
                                                        <?php if($signalsType[$signal->type_id]['id'] == 1): ?>
                                                            <polyline points="<?=$signal->svg_path;?>" fill="none" stroke="#22a053" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                        <?php endif; ?>
                                                        <?php if($signalsType[$signal->type_id]['id'] == 2): ?>
                                                            <polyline points="<?=$signal->svg_path;?>" fill="none" stroke="#E01F19" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                        <?php endif; ?>
                                                        <!--Gradient-->
                                                        <?php if($signalsType[$signal->type_id]['id'] == 1): ?>
                                                            <defs><linearGradient id="<?=$signal->id;?>RS" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#22a053;stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:#22a053;stop-opacity:0"></stop></linearGradient></defs>
                                                        <?php endif; ?>
                                                        <?php if($signalsType[$signal->type_id]['id'] == 2): ?>
                                                            <defs><linearGradient id="<?=$signal->id;?>RS" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(224, 31, 25);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgb(224, 31, 25);stop-opacity:0"></stop></linearGradient></defs>
                                                        <?php endif; ?>
                                                        <!--Path-->
                                                        <path d="M 0,150 L <?=$signal->svg_path;?>, 150" fill="url(#<?=$signal->id;?>RS)"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                    <!--Показать историю сигналов-->
                                    <div class="receiving_signals_item view_all">
                                        <a href="/ideas/history/grid" class="receiving_signals_item_inner" tabindex="-2">
                                            <div class="receiving_signals_item_button_block">
                                                Показать все
                                            </div>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <!--Receiving Signals Stub-->
                            <!--Заглушка блока сигналов-->
                            <div class="receiving_signals_stub">
                                <div class="receiving_signals_stub_inner">
                                    <div class="receiving_signals_stub_upper">
                                        <div class="receiving_signals_stub_bg"></div>
                                        <div class="receiving_signals_stub_name"></div>
                                        <div class="receiving_signals_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_stub_chart">
                                        <svg class="receiving_signals_stub_chart_30V2_" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="ppolyFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#ppolyFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Stub-->
                            <!--Заглушка блока сигналов-->
                            <div class="receiving_signals_stub">
                                <div class="receiving_signals_stub_inner">
                                    <div class="receiving_signals_stub_upper">
                                        <div class="receiving_signals_stub_bg"></div>
                                        <div class="receiving_signals_stub_name"></div>
                                        <div class="receiving_signals_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_stub_chart">
                                        <svg class="receiving_signals_stub_chart_30V2_" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="poolyFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#poolyFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Stub-->
                            <!--Заглушка блока сигналов-->
                            <div class="receiving_signals_stub">
                                <div class="receiving_signals_stub_inner">
                                    <div class="receiving_signals_stub_upper">
                                        <div class="receiving_signals_stub_bg"></div>
                                        <div class="receiving_signals_stub_name"></div>
                                        <div class="receiving_signals_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_stub_chart">
                                        <svg class="receiving_signals_stub_chart_30V2_" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="pollyFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#pollyFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Stub-->
                            <!--Заглушка блока сигналов-->
                            <div class="receiving_signals_stub">
                                <div class="receiving_signals_stub_inner">
                                    <div class="receiving_signals_stub_upper">
                                        <div class="receiving_signals_stub_bg"></div>
                                        <div class="receiving_signals_stub_name"></div>
                                        <div class="receiving_signals_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_stub_chart">
                                        <svg class="receiving_signals_stub_chart_30V2_" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="polyyFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#polyyFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Receiving Signals Arrows-->
                        <div class="receiving_signals_arrows">
                            <!--Left Arrow-->
                            <div class="receiving_signals_arrows_left">
                                <svg class='receiving_signals_arrows_left_icon' id='arrows_carousel' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13">
                                    <defs>
                                        <style>
                                            .arrows_carousel {
                                                fill: none;
                                                stroke: #666666;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2.2px;
                                                transition: all .1s linear;
                                            }
                                        </style>
                                    </defs>
                                    <title>Назад</title>
                                    <g id="Слой_2" data-name="Слой 2">
                                        <g id="icons">
                                            <g id="arrows">
                                                <polyline class="arrows_carousel" points="1.5 1.5 6.5 6.5 1.5 11.5"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <!--Right Arrow-->
                            <div class="receiving_signals_arrows_right">
                                <svg class='receiving_signals_arrows_right_icon' id='arrows_carousel' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13">
                                    <defs>
                                        <style>
                                            .arrows_carousel {
                                                fill: none;
                                                stroke: #666666;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2.2px;
                                                transition: all .1s linear;
                                            }
                                        </style>
                                    </defs>
                                    <title>Вперед</title>
                                    <g id="Слой_2" data-name="Слой 2">
                                        <g id="icons">
                                            <g id="arrows">
                                                <polyline class="arrows_carousel" points="1.5 1.5 6.5 6.5 1.5 11.5"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Receiving Signals Mobile Notification-->
                <div id='rs_n' class="receiving_signals_mobile_notification">
                    <div class="receiving_signals_mobile_notification_inner">
                        <!--Text-->
                        <div class="receiving_signals_mobile_notification_text_320">
                            Рынок закрыт. Чтобы не пропускать идеи, подпишитесь на уведомления в
                            <a href="https://t.me/sputnik_ws" class="receiving_signals_mobile_notification_text_link" target="_blank" tabindex="-2">
                                Telegram канале
                            </a>
                        </div>
                        <div class="receiving_signals_mobile_notification_text_450">
                            В данный момент, рынок закрыт. Чтобы не пропускать идеи, подпишитесь на уведомления в
                            <a href="https://t.me/sputnik_ws" class="receiving_signals_mobile_notification_text_link"  target="_blank" tabindex="-2">
                                Telegram канале
                            </a>
                        </div>
                        <div class="receiving_signals_mobile_notification_text_690">
                            К сожалению, в данный момент, рынок закрыт. Чтобы не пропускать идеи, подпишитесь на уведомления в нашем
                            <a href="https://t.me/sputnik_ws" class="receiving_signals_mobile_notification_text_link" target="_blank" tabindex="-2">
                                Telegram канале
                            </a>
                        </div>
                    </div>
                </div>
                
                <!--Receiving Signals Mobile-->
                <div id='rs_mobile' class="receiving_signals_mobile">
                    <div class="receiving_signals_mobile_wrapper">
                        <div class="receiving_signals_mobile_inner">
                            <?php $date = date('D'); if($date != 'Sat' && $date != 'Sun'): ?>
                                <?php if($signals_mobile): ?>
                                    <?php foreach($signals_mobile as $signal): ?>
                                        <!--Receiving Signals Mobile Item-->
                                        <div class="receiving_signals_mobile_item">
                                            <a id="M<?=$signal->id;?>" data-id="<?=$signal->id;?>" href='ideas/view?id=<?=$signal->id;?>' class="receiving_signals_mobile_item_inner modal_msw">
                                                <?php if(in_array($signal->id, (array) $signalsViewed)): ?>
                                                    <div class="receiving_signals_item_viewed_card">
                                                        <div class="receiving_signals_item_viewed_card_inner">
                                                            <svg class="receiving_signals_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
<g>
    <g>
        <path d="M510.933,245.6c-4.267-6.4-93.867-160-253.867-160S7.467,239.2,3.2,245.6c-4.267,6.4-4.267,14.933,0,21.333    c4.267,6.4,93.867,160,253.867,160s249.6-153.6,253.867-160C513.067,260.533,513.067,252,510.933,245.6z M257.067,362.933    C197.333,362.933,150.4,316,150.4,256.267S197.333,149.6,257.067,149.6s106.667,46.933,106.667,106.667    S316.8,362.933,257.067,362.933z"/>
    </g>
</g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M257.067,192.267c-36.267,0-64,27.733-64,64s27.733,64,64,64s64-27.733,64-64S293.333,192.267,257.067,192.267z     M278.4,256.267c-12.8,0-21.333-8.533-21.333-21.333c0-12.8,8.533-21.333,21.333-21.333c12.8,0,21.333,8.533,21.333,21.333    C299.733,247.733,291.2,256.267,278.4,256.267z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
</svg>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="receiving_signals_item_viewed_card js">
                                                    <div class="receiving_signals_item_viewed_card_inner">
                                                        <svg class="receiving_signals_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
<g>
    <g>
        <path d="M510.933,245.6c-4.267-6.4-93.867-160-253.867-160S7.467,239.2,3.2,245.6c-4.267,6.4-4.267,14.933,0,21.333    c4.267,6.4,93.867,160,253.867,160s249.6-153.6,253.867-160C513.067,260.533,513.067,252,510.933,245.6z M257.067,362.933    C197.333,362.933,150.4,316,150.4,256.267S197.333,149.6,257.067,149.6s106.667,46.933,106.667,106.667    S316.8,362.933,257.067,362.933z"/>
    </g>
</g>
                                                            <g>
                                                                <g>
                                                                    <path d="M257.067,192.267c-36.267,0-64,27.733-64,64s27.733,64,64,64s64-27.733,64-64S293.333,192.267,257.067,192.267z     M278.4,256.267c-12.8,0-21.333-8.533-21.333-21.333c0-12.8,8.533-21.333,21.333-21.333c12.8,0,21.333,8.533,21.333,21.333    C299.733,247.733,291.2,256.267,278.4,256.267z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
</svg>
                                                    </div>
                                                </div>
                                                <div class="receiving_signals_status_card
                                        <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0):?>
                                        new
                                        <?php endif; ?>
                                            ">
                                                    <span class="receiving_signals_status_card_circle"></span>
                                                    <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0): ?>
                                                        <div class="receiving_signals_status_card_text">
                                                            Активный
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="receiving_signals_mobile_item_upper">
                                                    <div class="receiving_signals_mobile_item_bg" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signal->curr_id]['image'];?>");'>
                                                    </div>
                                                    <div class="receiving_signals_mobile_item_name">
                                                        <?=$signalsCurrencies[$signal->curr_id]['name'];?>
                                                    </div>
                                                    <div class="receiving_signals_mobile_item_direction <?=$signalsType[$signal->type_id]['class'];?>">
                                                        <?=$signalsType[$signal->type_id]['type'];?>
                                                    </div>
                                                </div>
                                                <!--Chart-->
                                                <div class="receiving_signals_mobile_item_chart">
                                                    <svg class="receiving_signals_chart_mobile" viewBox="0 0 338 150">
                                                        <!--Polyline-->
                                                        <?php if($signalsType[$signal->type_id]['id'] == 1): ?>
                                                            <polyline points="<?=$signal->svg_path;?>" fill="none" stroke="#22a053" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                        <?php endif; ?>
                                                        <?php if($signalsType[$signal->type_id]['id'] == 2): ?>
                                                            <polyline points="<?=$signal->svg_path;?>" fill="none" stroke="#E01F19" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                        <?php endif; ?>
                                                        <!--Gradient-->
                                                        <?php if($signalsType[$signal->type_id]['id'] == 1): ?>
                                                            <defs><linearGradient id="<?=$signal->id;?>RSM" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#22a053;stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:#22a053;stop-opacity:0"></stop></linearGradient></defs>
                                                        <?php endif; ?>
                                                        <?php if($signalsType[$signal->type_id]['id'] == 2): ?>
                                                            <defs><linearGradient id="<?=$signal->id;?>RSM" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(224, 31, 25);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgb(224, 31, 25);stop-opacity:0"></stop></linearGradient></defs>
                                                        <?php endif; ?>
                                                        <!--Path-->
                                                        <path d="M 0,150 L <?=$signal->svg_path;?>, 150" fill="url(#<?=$signal->id;?>RSM)"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                    <!--Показать историю сигналов-->
                                    <div class="receiving_signals_mobile_item view_all">
                                        <a href="/ideas/history" class="receiving_signals_mobile_item_inner">
                                            <div class="receiving_signals_mobile_item_button_block">
                                                Показать все
                                            </div>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <!--Receiving Signals Mobile Stub-->
                            <!--Мобильная заглушка сигналов-->
                            <div class="receiving_signals_mobile_stub">
                                <div class="receiving_signals_mobile_stub_inner">
                                    <div class="receiving_signals_mobile_stub_upper">
                                        <div class="receiving_signals_mobile_stub_bg"></div>
                                        <div class="receiving_signals_mobile_stub_name"></div>
                                        <div class="receiving_signals_mobile_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_mobile_stub_chart">
                                        <svg class="receiving_signals_chart_mobile_stub" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="mobileStubGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#mobileStubGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Mobile Stub-->
                            <!--Мобильная заглушка сигналов-->
                            <div class="receiving_signals_mobile_stub">
                                <div class="receiving_signals_mobile_stub_inner">
                                    <div class="receiving_signals_mobile_stub_upper">
                                        <div class="receiving_signals_mobile_stub_bg"></div>
                                        <div class="receiving_signals_mobile_stub_name"></div>
                                        <div class="receiving_signals_mobile_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_mobile_stub_chart">
                                        <svg class="receiving_signals_chart_mobile_stub" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="mobileStubFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#mobileStubFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Mobile Stub-->
                            <!--Мобильная заглушка сигналов-->
                            <div class="receiving_signals_mobile_stub">
                                <div class="receiving_signals_mobile_stub_inner">
                                    <div class="receiving_signals_mobile_stub_upper">
                                        <div class="receiving_signals_mobile_stub_bg"></div>
                                        <div class="receiving_signals_mobile_stub_name"></div>
                                        <div class="receiving_signals_mobile_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_mobile_stub_chart">
                                        <svg class="receiving_signals_chart_mobile_stub" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="StubFillGrady_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#StubFillGrady_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <!--Receiving Signals Mobile Stub-->
                            <!--Мобильная заглушка сигналов-->
                            <div class="receiving_signals_mobile_stub">
                                <div class="receiving_signals_mobile_stub_inner">
                                    <div class="receiving_signals_mobile_stub_upper">
                                        <div class="receiving_signals_mobile_stub_bg"></div>
                                        <div class="receiving_signals_mobile_stub_name"></div>
                                        <div class="receiving_signals_mobile_stub_order"></div>
                                    </div>
                                    <div class="receiving_signals_mobile_stub_chart">
                                        <svg class="receiving_signals_chart_mobile_stub" viewBox="0 0 338 150"><polyline points="0,135 28,125 56,120 84,108 113,102 141,53 169,44 197,71 225,65 253,96 282,44 310,65 338,17" fill="none" stroke="#F2F2F2" stroke-width="1.5" stroke-linejoin="round"></polyline><defs><linearGradient id="mobileStubFill_0.99" x1="100%" y1="100%" x2="100%" y2="100%"><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:0.99"></stop><stop offset="100%" style="stop-color:#F2F2F2;stop-opacity:1"></stop></linearGradient></defs><path d="M 0,150 L 0,135 L 28,125 L 56,120 L 84,108 L 113,102 L 141,53 L 169,44 L 197,71 L 225,65 L 253,96 L 282,44 L 310,65 L 338,17 L 338,150" fill="url(#mobileStubFill_0.99)"></path></svg>
                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
                    </div>
                </div>
                
                
                
                <!--Signal History-->
                <div id='signal_history' class="signal_history">
                    <!--Left Title-->
                    <div class="left_title useful_">
                        <div class="left_title_block">
                            <div class="left_title_text">
                                История идей
                            </div>
                        </div>
                    </div>
                    <!--Signal History Description-->
                    <div class="signal_history_desc">
                        <!--Signal History Title-->
                        <div class="signal_history_title">
                            <!--Signal History Left-->
                            <div class="signal_history_left">
                                <!--Time-->
                                <div class="signal_history_title_time">
                                    Дата
                                </div>
                                <!--Currency-->
                                <div class="signal_history_title_currency">
                                    Валюта
                                </div>
                                <!--Volatility-->
                                <div class="signal_history_title_volatility">
                                    Риск
                                </div>
                                <!--Type-->
                                <div class="signal_history_title_type">
                                    Тип
                                </div>
                                <!--Mobile Currency-->
                                <div class="signal_history_title_mobile_currency">
                                    Валютная пара
                                </div>
                            </div>
                            <!--Signal History Right-->
                            <div class="signal_history_right">
                                <!--Purchase Price-->
                                <div class="signal_history_title_purchase_price">
                                    Покупка
                                </div>
                                <!--Selling Price-->
                                <div class="signal_history_title_selling_price">
                                    Продажа
                                </div>
                                <!--Result-->
                                <div class="signal_history_title_result">
                                    Результат
                                </div>
                                <!--Mobile Data-->
                                <div class="signal_history_title_mobile_data">
                                    Данные сделки
                                </div>
                            </div>
                        </div>
                        <!--Open Transactions-->
                        <div class="signal_history_open_transactions">
                            <div class="signal_history_open_text">
                                Открытые позиции
                            </div>
                        </div>
                        <?php if($signalActive):?>
                            <?php foreach ($signalActive as $item): ?>
                                <div class="signal_history_item open">
                                    <div class="signal_history_item_inner open">
                                        <div class="signal_history_item_inner_touch">
                                            <!--Signal History Item Left-->
                                            <div class="signal_history_item_left">
                                                <!--Date-->
                                                <div class="signal_history_item_date">
                                                    <?=$item->date?>
                                                    <?php if(date('Y') != $item->year): ?>
                                                        <?=$item->year;?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="signal_history_item_left_container_adaptive">
                                                    <!--Currency-->
                                                    <div class="signal_history_item_currency">
                                                        <div class="signal_history_item_img" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$item->curr_id]['image'];?>");'></div>
                                                        <div class="signal_history_item_currency_value_block">
                                                            <div class="signal_history_item_currency_value"><?=$signalsCurrencies[$item->curr_id]['code'];?>
                                                            </div>
                                                            <div class="signal_history_item_type_mobile <?=$signalsType[$item->type_id]['class'];?>">
                                                                <?=$signalsType[$item->type_id]['type'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Volatility-->
                                                    <div class="signal_history_item_volatility_wrapper">
                                                        <div class="signal_history_item_volatility <?php if($item->risk == 1): ?> one <?php endif; ?><?php if($item->risk == 2): ?> two <?php endif; ?><?php if($item->risk == 3): ?> three <?php endif; ?>">
                                                            <div class="signal_history_item_volatility_item first"></div>
                                                            <div class="signal_history_item_volatility_item second"></div>
                                                            <div class="signal_history_item_volatility_item third"></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--Type-->
                                                    <div class="signal_history_item_type <?=$signalsType[$item->type_id]['class'];?>">
                                                        <?=$signalsType[$item->type_id]['type'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Signal History Item Right-->
                                            <div class="signal_history_item_right">
                                                <!--Purchase Price-->
                                                <div class="signal_history_item_purchase_price">
                                                    <?=$item->price;?>
                                                </div>
                                                <!--Selling Price-->
                                                <div class="signal_history_item_selling_price">
                                                    -
                                                </div>
                                                <!--Relust-->
                                                <div class="signal_history_item_result">
                                                    -
                                                </div>
                                                <!--Mobile-->
                                                <div class="signal_history_item_right_mobile">
                                                    <div class="signal_history_item_right_mobile_inner">
                                                        <div class="signal_history_item_right_mobile_l">
                                                            <!--Relust Mobile-->
                                                            <div class="signal_history_item_result_block_mobile">
                                                                <div class="signal_history_item_result_mobile_title">
                                                                    Rs:
                                                                </div>
                                                                <div class="signal_history_item_result_mobile_value">
                                                                    -
                                                                </div>
                                                            </div>
                                                            <!--Purchase Price Mobile-->
                                                            <div class="signal_history_item_purchase_price_block_mobile">
                                                                <div class="signal_history_item_purchase_price_mobile_title">
                                                                    Pr:
                                                                </div>
                                                                <div class="signal_history_item_purchase_price_mobile_value">
                                                                    <?=$item->price;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="signal_history_item_right_mobile_r">
                                                            <!--Take Profit Mobile-->
                                                            <div class="signal_history_item_takeprofit_block_mobile">
                                                                <div class="signal_history_item_takeprofit_mobile_title">
                                                                    T/P:
                                                                </div>
                                                                <div class="signal_history_item_takeprofit_mobile_value">
                                                                    <?=$item->take_profit;?>
                                                                </div>
                                                            </div>
                                                            <!--Selling Price Mobile-->
                                                            <div class="signal_history_item_purchase_price_block_mobile">
                                                                <div class="signal_history_item_purchase_price_mobile_title">
                                                                    S/L:
                                                                </div>
                                                                <div class="signal_history_item_purchase_price_mobile_value">
                                                                    <?=$item->stop_loss;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Date Mobile-->
                                                        <div class="signal_history_item_date_mobile_block">
                                                            <div class="signal_history_item_date_mobile_block_inner">
                                                                <div class="signal_history_item_date_mobile">
                                                                    <?=$item->date;?>
                                                                </div>
                                                                <div class="signal_history_item_year_mobile">
                                                                    <?=$item->year;?>г.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!--No Open Transactions-->
                            <div class="signal_history_no_open_transactions">
                            <span class="signal_history_no_open_transactions_text">
                                Нет активных позиций
                            </span>
                            </div>
                        <?php endif; ?>
                        <!--Completed Transactions-->
                        <div class="signal_history_completed_transactions">
                            <div class="signal_history_completed_text">
                                Закрытые позиции
                            </div>
                        </div>
                        
                        <!--Signal History Item-->
                        <?php if($signalsHistory): ?>
                            <?php foreach($signalsHistory as $signalHistory): ?>
                                <div id='history_item' class="signal_history_item">
                                    <a id="B<?=$signalHistory->id;?>" data-id="<?=$signalHistory->id;?>" href='ideasgallery/view?id=<?=$signalHistory->id;?>'  class="signal_history_item_inner history_item <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>" tabindex="-2">
                                        <div class="signal_history_item_inner_touch">
                                            <!--Signal History Item Left-->
                                            <div class="signal_history_item_left">
                                                <!--Date-->
                                                <div class="signal_history_item_date">
                                                    <?=$signalHistory->date?>
                                                    <?php if(date('Y') != $signalHistory->year): ?>
                                                        <?=$signalHistory->year;?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="signal_history_item_left_container_adaptive">
                                                    <!--Currency-->
                                                    <div class="signal_history_item_currency">
                                                        <div class="signal_history_item_img" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signalHistory->curr_id]['image'];?>");'></div>
                                                        <div class="signal_history_item_currency_value_block">
                                                            <div class="signal_history_item_currency_value"><?=$signalsCurrencies[$signalHistory->curr_id]['code'];?>
                                                            </div>
                                                            <div class="signal_history_item_type_mobile <?=$signalsType[$signalHistory->type_id]['class'];?> <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>">
                                                                <?=$signalsType[$signalHistory->type_id]['type'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Volatility-->
                                                    <div class="signal_history_item_volatility_wrapper">
                                                        <div class="signal_history_item_volatility <?php if($signalHistory->risk == 1): ?> one <?php endif; ?><?php if($signalHistory->risk == 2): ?> two <?php endif; ?><?php if($signalHistory->risk == 3): ?> three <?php endif; ?>">
                                                            <div class="signal_history_item_volatility_item first"></div>
                                                            <div class="signal_history_item_volatility_item second"></div>
                                                            <div class="signal_history_item_volatility_item third"></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--Type-->
                                                    <div class="signal_history_item_type <?=$signalsType[$signalHistory->type_id]['class'];?> <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>">
                                                        <?=$signalsType[$signalHistory->type_id]['type'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--Signal History Item Right-->
                                            <div class="signal_history_item_right">
                                                <?php if($signalHistory->close_status == 1 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 0): ?>
                                                    <!--Purchase Price-->
                                                    <div class="signal_history_item_purchase_price">
                                                        <?=$signalHistory->price;?>
                                                    </div>
                                                <?php elseif ($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                    <!--Purchase Price-->
                                                    <div class="signal_history_item_purchase_price">
                                                        -
                                                    </div>
                                                <?php endif; ?>
                                                <!--Selling Price-->
                                                <div class="signal_history_item_selling_price">
                                                    <?php if(!empty($signalHistory->result_plus)): ?>
                                                        <?=$signalHistory->take_profit;?>
                                                    <?php endif; ?>
                                                    <?php if(!empty($signalHistory->result_minus)): ?>
                                                        <?=$signalHistory->stop_loss;?>
                                                    <?php endif; ?>
                                                    <?php if(empty($signalHistory->result_minus) && empty($signalHistory->result_plus)): ?>
                                                        -
                                                    <?php endif; ?>
                                                </div>
                                                <!--Relust-->
                                                <?php if(!empty($signalHistory->result_plus)): ?>
                                                    <div class="signal_history_item_result buy">
                                                        +<?=$signalHistory->result_plus;?> points
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(!empty($signalHistory->result_minus)): ?>
                                                    <div class="signal_history_item_result sell">
                                                        -<?=$signalHistory->result_minus;?> points
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                    <div class="signal_history_item_result cancel">
                                                        Отменён
                                                    </div>
                                                <?php endif; ?>
                                                <!--Mobile-->
                                                <div class="signal_history_item_right_mobile">
                                                    <div class="signal_history_item_right_mobile_inner">
                                                        <div class="signal_history_item_right_mobile_l">
                                                            <!--Relust Mobile-->
                                                            <div class="signal_history_item_result_block_mobile">
                                                                <div class="signal_history_item_result_mobile_title">
                                                                    Rs:
                                                                </div>
                                                                <?php if(!empty($signalHistory->result_plus)): ?>
                                                                    <div class="signal_history_item_result_mobile_value buy">
                                                                        +<?=$signalHistory->result_plus;?> points
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if(!empty($signalHistory->result_minus)): ?>
                                                                    <div class="signal_history_item_result_mobile_value sell">
                                                                        -<?=$signalHistory->result_minus;?> points
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                                    <div class="signal_history_item_result_mobile_value cancel">
                                                                        Отменён
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                            <!--Purchase Price Mobile-->
                                                            <div class="signal_history_item_purchase_price_block_mobile">
                                                                <div class="signal_history_item_purchase_price_mobile_title">
                                                                    Pr:
                                                                </div>
                                                                <div class="signal_history_item_purchase_price_mobile_value">
                                                                    <?=$signalHistory->price;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="signal_history_item_right_mobile_r">
                                                            <!--Take Profit Mobile-->
                                                            <div class="signal_history_item_takeprofit_block_mobile">
                                                                <div class="signal_history_item_takeprofit_mobile_title">
                                                                    T/P:
                                                                </div>
                                                                <div class="signal_history_item_takeprofit_mobile_value">
                                                                    <?=$signalHistory->take_profit;?>
                                                                </div>
                                                            </div>
                                                            <!--Selling Price Mobile-->
                                                            <div class="signal_history_item_purchase_price_block_mobile">
                                                                <div class="signal_history_item_purchase_price_mobile_title">
                                                                    S/L:
                                                                </div>
                                                                <div class="signal_history_item_purchase_price_mobile_value">
                                                                    <?=$signalHistory->stop_loss;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Date Mobile-->
                                                        <div class="signal_history_item_date_mobile_block">
                                                            <div class="signal_history_item_date_mobile_block_inner">
                                                                <div class="signal_history_item_date_mobile">
                                                                    <?=$signalHistory->date;?>
                                                                </div>
                                                                <div class="signal_history_item_year_mobile">
                                                                    <?=$signalHistory->year;?>г.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </a>
                                    
                                    <!--Signals History Description-->
                                    <div class="signals_history_desc open">
                                        <!--Text-->
                                        <div class="signals_history_desc_text">
                                            <?=$signalHistory->preview_text;?>
                                        </div>
                                        <!--Screen-->
                                        <div class="signals_history_desc_screen image_history_description_block">
                                            <div class="signals_history_desc_screen_inner">
                                                <!--Before-->
                                                <div class="signal_history_desc_screen_before full_screen_history">
                                                    <img src="<?=IMG_MAIN?>/screen/screen_preload/<?=$signalHistory->screen_before_preload;?>" alt="" class="signal_history_desc_screen_before_img">
                                                    <!--Image Hover-->
                                                    <div class="signals_history_desc_screen_hover_block">
                                                        <div class="signals_history_desc_screen_hover_block_inner">
                                                            <!--Svg-->
                                                            <svg class="signals_history_desc_screen_hover_block_icon"  xmlns="http://www.w3.org/2000/svg" height="511pt" viewBox="0 -21 511.98744 511" width="511pt"><path d="m133.320312 373.828125c-34.152343 0-64.53125-21.867187-75.5625-54.421875l-.746093-2.453125c-2.601563-8.621094-3.691407-15.871094-3.691407-23.125v-145.453125l-51.753906 172.757812c-6.65625 25.410157 8.511719 51.753907 33.960938 58.773438l329.878906 88.34375c4.117188 1.066406 8.234375 1.578125 12.289062 1.578125 21.246094 0 40.660157-14.101563 46.101563-34.882813l19.21875-61.117187zm0 0"/><path d="m191.988281 149.828125c23.53125 0 42.664063-19.136719 42.664063-42.667969s-19.132813-42.667968-42.664063-42.667968-42.667969 19.136718-42.667969 42.667968 19.136719 42.667969 42.667969 42.667969zm0 0"/><path d="m458.652344.492188h-320c-29.394532 0-53.332032 23.9375-53.332032 53.335937v234.664063c0 29.398437 23.9375 53.335937 53.332032 53.335937h320c29.398437 0 53.335937-23.9375 53.335937-53.335937v-234.664063c0-29.398437-23.9375-53.335937-53.335937-53.335937zm-320 42.667968h320c5.890625 0 10.667968 4.777344 10.667968 10.667969v151.445313l-67.390624-78.636719c-7.148438-8.382813-17.496094-12.863281-28.609376-13.117188-11.050781.0625-21.417968 4.96875-28.5 13.460938l-79.234374 95.101562-25.8125-25.75c-14.589844-14.589843-38.335938-14.589843-52.90625 0l-58.878907 58.859375v-201.363281c0-5.890625 4.777344-10.667969 10.664063-10.667969zm0 0"/></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--After-->
                                                <div class="signal_history_desc_screen_after full_screen_history">
                                                    <img src="<?=IMG_MAIN?>/screen/screen_preload/<?=$signalHistory->screen_after_preload;?>" alt="" class="signal_history_desc_screen_after_img">
                                                    <!--Image Hover-->
                                                    <div class="signals_history_desc_screen_hover_block">
                                                        <div class="signals_history_desc_screen_hover_block_inner">
                                                            <!--Svg-->
                                                            <svg class="signals_history_desc_screen_hover_block_icon"  xmlns="http://www.w3.org/2000/svg" height="511pt" viewBox="0 -21 511.98744 511" width="511pt"><path d="m133.320312 373.828125c-34.152343 0-64.53125-21.867187-75.5625-54.421875l-.746093-2.453125c-2.601563-8.621094-3.691407-15.871094-3.691407-23.125v-145.453125l-51.753906 172.757812c-6.65625 25.410157 8.511719 51.753907 33.960938 58.773438l329.878906 88.34375c4.117188 1.066406 8.234375 1.578125 12.289062 1.578125 21.246094 0 40.660157-14.101563 46.101563-34.882813l19.21875-61.117187zm0 0"/><path d="m191.988281 149.828125c23.53125 0 42.664063-19.136719 42.664063-42.667969s-19.132813-42.667968-42.664063-42.667968-42.667969 19.136718-42.667969 42.667968 19.136719 42.667969 42.667969 42.667969zm0 0"/><path d="m458.652344.492188h-320c-29.394532 0-53.332032 23.9375-53.332032 53.335937v234.664063c0 29.398437 23.9375 53.335937 53.332032 53.335937h320c29.398437 0 53.335937-23.9375 53.335937-53.335937v-234.664063c0-29.398437-23.9375-53.335937-53.335937-53.335937zm-320 42.667968h320c5.890625 0 10.667968 4.777344 10.667968 10.667969v151.445313l-67.390624-78.636719c-7.148438-8.382813-17.496094-12.863281-28.609376-13.117188-11.050781.0625-21.417968 4.96875-28.5 13.460938l-79.234374 95.101562-25.8125-25.75c-14.589844-14.589843-38.335938-14.589843-52.90625 0l-58.878907 58.859375v-201.363281c0-5.890625 4.777344-10.667969 10.664063-10.667969zm0 0"/></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="desc_screen_wrap">
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        <!--Signal History See More-->
                        <div class="signal_history_see_more">
                            <a href='/ideas/history/table' class="signal_history_see_more_inner" tabindex="-2">
                                <div class="signal_history_see_more_text">
                                    Показать всю историю
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                
                <!--Latest News-->
                <div id='latest_news_main' class="latest_news">
                    <!--Left Title-->
                    <div class="left_title useful_">
                        <div class="left_title_block">
                            <div class="left_title_text">
                                Последние новости
                            </div>
                        </div>
                    </div>
                    <?php if($articlesDesktop): ?>
                        <!--Latest News Carousel-->
                        <div class="latest_news_carousel" id='latest_news'>
                            <!--Latest News Item Block-->
                            <div class="latest_news_item_block owl-carousel" id="latest_news_carousel">
                                <?php foreach($articlesDesktop as $articleDesktop): ?>
                                    <!--Latest News Item-->
                                    <a href='/articles/<?=$articleDesktop->alias;?>' class="latest_news_item" tabindex="-2">
                                        <!--Content-->
                                        <div class="latest_news_item_content">
                                            <!--Left-->
                                            <div class="latest_news_item_content_left">
                                                <!--Title-->
                                                <div class="latest_news_item_title">
                                                    <?=$articleDesktop->title;?>
                                                </div>
                                                <!--Text-->
                                                <div class="latest_news_item_text">
                                                    <?php echo mb_strimwidth($articleDesktop->preview_text, 0, 200, "..."); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Footer-->
                                        <div class="latest_news_item_footer">
                                            <!--Button-->
                                            <div class="latest_news_item_btn">
<span class="latest_news_item_btn_text">
Подробнее
</span>
                                                <!--Svg-->
                                                <svg class="latest_news_item_btn_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g id="simple-link-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M19.5857864,11 L17.2928932,8.70710678 C16.9023689,8.31658249 16.9023689,7.68341751 17.2928932,7.29289322 C17.6834175,6.90236893 18.3165825,6.90236893 18.7071068,7.29289322 L22.7071068,11.2928932 C23.0976311,11.6834175 23.0976311,12.3165825 22.7071068,12.7071068 L18.7071068,16.7071068 C18.3165825,17.0976311 17.6834175,17.0976311 17.2928932,16.7071068 C16.9023689,16.3165825 16.9023689,15.6834175 17.2928932,15.2928932 L19.5857864,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 L19.5857864,11 Z" id="Combined-Shape" fill="#333" fill-rule="nonzero"></path></g></svg>
                                            </div>
                                            <!--Date-->
                                            <div class="latest_news_item_date">
                                                <?php if(date('d-m-Y') ==  $articleDesktop->date): ?>
                                                    Сегодня
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') != $articleDesktop->date && date('d-m-Y', strtotime('yesterday'))  == $articleDesktop->date): ?>
                                                    Вчера
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') !=  $articleDesktop->date && date('d-m-Y', strtotime('yesterday')) != $articleDesktop->date): ?>
                                                    <?=$articleDesktop->day;?>
                                                <?php endif; ?>
                                                <?php if(date('Y') != $articleDesktop->year): ?>
                                                    <?=$articleDesktop->year;?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                                <!--Latest News More Item-->
                                <a href='/articles' class="latest_news_item view_all" tabindex="-2">
                                    <!--Content-->
                                    <div class="latest_news_item_content">
                                        <div class="latest_news_item_button_block">
                                            Показать все новости
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--Latest News Arrows-->
                            <div class="latest_news_arrows">
                                <!--Left Arrow-->
                                <div class="latest_news_arrow_left">
                                    <svg class='latest_news_arrow_left_icon' id='arrows_carousel' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13">
                                        <defs>
                                            <style>
                                                .arrows_carousel {
                                                    fill: none;
                                                    stroke: #666666;
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                    stroke-width: 2.2px;
                                                    transition: all .1s linear;
                                                }
                                            </style>
                                        </defs>
                                        <title>Назад</title>
                                        <g id="Слой_2" data-name="Слой 2">
                                            <g id="icons">
                                                <g id="arrows">
                                                    <polyline class="arrows_carousel" points="1.5 1.5 6.5 6.5 1.5 11.5"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <!--Right Arrow-->
                                <div class="latest_news_arrow_right">
                                    <svg class='latest_news_arrow_right_icon' id='arrows_carousel' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13">
                                        <defs>
                                            <style>
                                                .arrows_carousel {
                                                    fill: none;
                                                    stroke: #666666;
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                    stroke-width: 2.2px;
                                                    transition: all .1s linear;
                                                }
                                            </style>
                                        </defs>
                                        <title>Вперед</title>
                                        <g id="Слой_2" data-name="Слой 2">
                                            <g id="icons">
                                                <g id="arrows">
                                                    <polyline class="arrows_carousel" points="1.5 1.5 6.5 6.5 1.5 11.5"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Latest News Mobile-->
                <div id='latest_news_mobile_main' class="latest_news_mobile">
                    <!--Left Title-->
                    <div class="left_title useful_">
                        <div class="left_title_block">
                            <div class="left_title_text">
                                Последние новости
                            </div>
                        </div>
                    </div>
                    <div class="latest_news_mobile_inner">
                        <?php if($articlesMobile): ?>
                            <?php foreach($articlesMobile as $articleMobile): ?>
                                <!--Latest News Mobile Item-->
                                <a href="/articles/<?=$articleMobile->alias;?>" class="latest_news_mobile_item">
                                    <div class="latest_news_mobile_item_inner">
                                        <!--Left-->
                                        <div class="latest_news_mobile_item_left">
                                            <!--Background-->
                                            <div class="latest_news_mobile_item_img" style="background-image: url('/images/articles/bg/mobile/<?=$articleMobile->image;?>');"></div>
                                        </div>
                                        <!--Right-->
                                        <div class="latest_news_mobile_item_right">
                                            <!--Title-->
                                            <div class="latest_news_mobile_item_title">
                                                <?=$articleMobile->title;?>
                                            </div>
                                            <!--Title 600px-->
                                            <div class="latest_news_mobile_item_title_600">
                                                <?=$articleMobile->title_600;?>
                                            </div>
                                            <!--Date-->
                                            <div class="latest_news_mobile_item_date">
                                                <?php if(date('d-m-Y') ==  $articleMobile->date): ?>
                                                    Сегодня
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') != $articleMobile->date && date('d-m-Y', strtotime('yesterday'))  == $articleMobile->date): ?>
                                                    Вчера
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') !=  $articleMobile->date && date('d-m-Y', strtotime('yesterday')) != $articleMobile->date): ?>
                                                    <?=$articleMobile->day;?>
                                                <?php endif; ?>
                                                <?php if(date('Y') != $articleMobile->year): ?>
                                                    <?=$articleMobile->year;?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Border-->
                                    <div class="latest_news_mobile_item_border"></div>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <!--Latest News Mobile See More-->
                        <div class="latest_news_mobile_see_more">
                            <a href='/articles' class="latest_news_mobile_see_more_inner">
                                <div class="latest_news_mobile_see_more_text">
                                    Все новости
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>



<script src='/public/js/ideas/main.js'></script>
<script src="/public/libs/copy/app.js"></script>
<script src='/public/libs/carousel/dist/app.js'></script>
<script src='/public/js/ideas/app.js'></script>