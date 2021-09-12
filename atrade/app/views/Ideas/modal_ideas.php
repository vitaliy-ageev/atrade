<?php if(!empty($signal)): ?>
    
    <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
        <link rel="stylesheet" href="/public/css/base/gallery_one_image.css">
    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
        <link rel="stylesheet" href="/public/css/base/gallery_one_image.css">
    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
        <link rel="stylesheet" href="/public/css/base/galleryIdeas.css">
    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
        <link rel="stylesheet" href="/public/css/base/galleryIdeas.css">
    <?php endif; ?>
    
    
    <!--Preloader-->
    <div class="preloader_signals" id="preloader_signals">
        <div class="container">
            <div class="preloader_signals_inner">
                <div class="container_preloader_signals">
                    <div class="loader-container-signals arc-rotate-signals">
                        <div class="loader-signals">
                            <div class="arc-signals"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="signal_mw_container_margin">
        <!--Main Content-->
        <div class="signal_mw_main_content" id="href-page" data-href-page="no-name">
            <div class="signal_mw_main_content_margin">
                <!--Signal Modal Window Description-->
                <div class="signal_mw_description">
                    <!--Header-->
                    <div class="signal_mw_description_header_block">
                        <div class="signal_mw_description_header_block_inner">
                            <!--Img-->
                            <img src="<?=IMG_BASE?>/currency/svg/<?=$signalCurrency->image;?>" alt="" class="signal_mw_description_header_img">
                            <!--Name-->
                            <div class="signal_mw_description_header_name">
                                <?=$signalCurrency->code;?>
                            </div>
                            <!--Route-->
                            <div class="signal_mw_description_header_route <?=$signalType->class?>">
                                <!--Svg-->
                                <svg class='signal_mw_description_header_route_down_icon <?=$signalType->class?>' width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14 4V14H4V12H10.5L0 1.5L1.5 0L12 10.5V4H14Z" fill="#fff"></path></svg>
                                <!--Text-->
                                <div class="signal_mw_description_header_route_up_text">
                                    <?=$signalType->code;?>
                                </div>
                            </div>
                            <!--Price-->
                            <div class="signal_mw_description_header_price <?=$signalType->class?>">
                                <?=$signal->price?>
                            </div>
                        </div>
                    </div>
                    <!--Header Mobile-->
                    <div class="signal_mw_description_header_block_mobile">
                        <div class="signal_mw_description_header_block_mobile_container">
                            <!--Status Mobile-->
                            <div class="signal_mw_description_header_status_mobile_block
                            <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                    new
                                <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                    in_work
                                <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                    close
                                    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
                                    cancel
                                <?php endif; ?>
                            ">
                                <div class="signal_mw_description_header_status_mobile_block_inner">
                                    <!--Status-->
                                    <div class="signal_mw_description_header_status_mobile">
                                        <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                            Активный
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                            В работе
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                            Завершён
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
                                            Отменён
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="signal_mw_description_header_block_mobile_inner <?php if($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                            result_not_empty
                            <?php endif; ?>
                        ">
                                <div class="signal_mw_description_header_block_mobile_inner_wrapper">
                                    <!--Img-->
                                    <img src="<?=IMG_BASE?>/currency/svg/<?=$signalCurrency->image;?>" alt="" class="signal_mw_description_header_mobile_img">
                                    <!--Name-->
                                    <div class="signal_mw_description_header_mobile_name">
                                        <?=$signalCurrency->code;?>
                                    </div>
                                    <!--Route-->
                                    <div class="signal_mw_description_header_mobile_route <?=$signalType->class?>">
                                        <!--Svg-->
                                        <svg class='signal_mw_description_header_mobile_route_down_icon <?=$signalType->class?>' width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14 4V14H4V12H10.5L0 1.5L1.5 0L12 10.5V4H14Z" fill="#fff"></path></svg>
                                        <!--Text-->
                                        <div class="signal_mw_description_header_mobile_route_up_text">
                                            <?=$signalType->type;?>
                                        </div>
                                    </div>
                                    <?php if($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                        <?php if($signal->result_plus): ?>
                                            <div class="signal_mw_description_header_mobile_price buy">
                                                +<?=$signal->result_plus?> points
                                            </div>
                                        <?php endif; ?>
                                        <?php if($signal->result_minus): ?>
                                            <div class="signal_mw_description_header_mobile_price sell">
                                                -<?=$signal->result_minus?> points
                                            </div>
                                        <?php endif; ?>
                                    <?php elseif ($signal->close_status == 0): ?>
                                        <!--Price-->
                                        <div class="signal_mw_description_header_mobile_price <?=$signalType->class?>">
                                            <?=$signal->price?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                        <!--Result 550px-->
                                        <div class="signal_mw_description_header_mobile_details_item_block">
                                            <div class="signal_mw_description_header_mobile_details_item_block_inner">
                                                <div class="signal_mw_description_header_mobile_price_details_item_title">
                                                    Rs:
                                                </div>
                                                <div class="signal_mw_description_header_mobile_price_details_item_title_630px">
                                                    Result:
                                                </div>
                                                <?php if($signal->result_plus): ?>
                                                    <div class="signal_mw_description_header_mobile_price_details_item_value takeprofit">
                                                        +<?=$signal->result_plus?> points
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($signal->result_minus): ?>
                                                    <div class="signal_mw_description_header_mobile_price_details_item_value stoploss">
                                                        -<?=$signal->result_minus?> points
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!--Price 550px-->
                                    <div class="signal_mw_description_header_mobile_details_item_block price">
                                        <div class="signal_mw_description_header_mobile_details_item_block_inner">
                                            <div class="signal_mw_description_header_mobile_price_details_item_title">
                                                Pr:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_title_630px">
                                                Price:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_value">
                                                <?=$signal->price?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Take Profit 550px-->
                                    <div class="signal_mw_description_header_mobile_details_item_block">
                                        <div class="signal_mw_description_header_mobile_details_item_block_inner">
                                            <div class="signal_mw_description_header_mobile_price_details_item_title">
                                                T/P:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_title_630px">
                                                Take Profit:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_value takeprofit">
                                                <?=$signal->take_profit?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Stop Loss 550px-->
                                    <div class="signal_mw_description_header_mobile_details_item_block">
                                        <div class="signal_mw_description_header_mobile_details_item_block_inner">
                                            <div class="signal_mw_description_header_mobile_price_details_item_title">
                                                S/L:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_title_630px">
                                                Stop Loss:
                                            </div>
                                            <div class="signal_mw_description_header_mobile_price_details_item_value stoploss">
                                                <?=$signal->stop_loss?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Mobil Close-->
                                <div class="signal_mw_close_mobil">
                                    <div class="signal_mw_close_mobil_inner">
                                        <div class="signal_mw_close_mobill_text">
                                            Закрыть
                                        </div>
                                        <!--Svg-->
                                        <svg class="signal_mw_close_mobil_icon" id="close_1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                            
                                            </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Title-->
                    <div class="signal_mw_description_title">
                        <?=$signal->title;?>
                    </div>
                    
                    <!--Content-->
                    <div class="signal_mw_description_content">
                        <?=$signal->text;?>
                    </div>
                    <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0 || $signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                        <!--Screenshot-->
                        <div class="signal_mw_description_screen full_screen">
                            <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_before;?>" alt="" class="signal_mw_description_screen_img">
                        </div>
                        <!--One Image Active-->
                        <div class="one_image_active">
                            <div class="one_image_active_inner">
                                <div class="one_image_active_wrapper">
                                    <!--Image-->
                                    <div class="one_image_active_open_block">
                                        <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_before;?>" class="one_image_active_open">
                                        <?php if($signal->screen_text_before): ?>
                                            <div class="one_image_active_open_title">
                                                <div class="one_image_active_open_title_inner">
                                                    <h1 class="one_image_active_open_text">
                                                        <?=$signal->screen_text_before;?>
                                                    </h1>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!--Svg Close Icon-->
                                    <svg class="one_image_active_open_close one_image_active_close" width="16" height="16" class=""><use xlink:href="#icon-close" style="stroke: none; stroke-width: 0;">
                                            <svg viewBox="0 0 18 18" id="icon-close"><path clip-rule="evenodd" d="M1.707.293A1 1 0 1 0 .293 1.707L7.586 9 .293 16.293a1 1 0 1 0 1.414 1.414L9 10.414l7.293 7.293a1 1 0 1 0 1.414-1.414L10.414 9l7.293-7.293A1 1 0 1 0 16.293.293L9 7.586 1.707.293z"></path></svg></use>
                                    </svg>
                                </div>
                                <!--Image Background-->
                                <div class="one_image_active_open_background"></div>
                            </div>
                        </div>
                    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0 || $signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
                        <!--Screenshots-->
                        <div class="signal_screens_desc image_signal_description_block">
                            <div class="signal_screens_desc_inner">
                                <!--Before-->
                                <div class="signal_screens_desc_before full_screen_signal">
                                    <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_before;?>" alt="" class="signal_screens_desc_before_img">
                                </div>
                                <!--After-->
                                <div class="signal_screens_desc_after full_screen_signal">
                                    <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_after;?>" alt="" class="signal_screens_desc_after_img">
                                </div>
                            </div>
                            <!--Image Active Signals-->
                            <div class="image_active_signals">
                                <div class="image_active_signals_inner">
                                    <div class="image_active_signals_wrapper ideas">
                                        <!--Image-->
                                        <div class="image_active_signals_open_block ideas">
                                            <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_before;?>" class="image_active_signals_open ideas">
                                            <?php if($signal->screen_text_before): ?>
                                                <div class="image_active_signals_open_title">
                                                    <div class="image_active_signals_open_title_inner">
                                                        <h1 class="image_active_signals_open_text">
                                                            <?=$signal->screen_text_before;?>
                                                        </h1>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <!--Image-->
                                        <div class="image_active_signals_open_block ideas">
                                            <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_after;?>" alt="" class="image_active_signals_open ideas">
                                            <?php if($signal->screen_text_after): ?>
                                                <div class="image_active_signals_open_title">
                                                    <div class="image_active_signals_open_title_inner">
                                                        <h1 class="image_active_signals_open_text">
                                                            <?=$signal->screen_text_after;?>
                                                        </h1>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <!--Svg Close Icon-->
                                        <svg class="image_active_signals_open_close image_active_signals_close" width="16" height="16" class=""><use xlink:href="#icon-close" style="stroke: none; stroke-width: 0;">
                                                <svg viewBox="0 0 18 18" id="icon-close"><path clip-rule="evenodd" d="M1.707.293A1 1 0 1 0 .293 1.707L7.586 9 .293 16.293a1 1 0 1 0 1.414 1.414L9 10.414l7.293 7.293a1 1 0 1 0 1.414-1.414L10.414 9l7.293-7.293A1 1 0 1 0 16.293.293L9 7.586 1.707.293z"></path></svg>
                                            </use></svg>
                                        <!--Left Arrow Icon-->
                                        <div class="image_active_signals_open_left_arrow_block image_active_signals_open_prev">
                                            <!--Svg-->
                                            <svg class="image_active_signals_open_left_arrow" width="20" height="20" class=""><use xlink:href="#icon-direction">
                                                    <svg viewBox="0 0 23 12" id="icon-direction"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.707.293a1 1 0 1 0-1.414 1.414L19.586 5H1a1 1 0 1 0 0 2h18.586l-3.293 3.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5z"></path></svg>
                                                </use></svg>
                                        </div>
                                        <!--Right Arrow Icon-->
                                        <div class="image_active_signals_open_right_arrow_block image_active_signals_open_next">
                                            <!--Svg-->
                                            <svg class="image_active_signals_open_right_arrow" width="20" height="20" class=""><use xlink:href="#icon-direction">
                                                    <svg viewBox="0 0 23 12" id="icon-direction"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.707.293a1 1 0 1 0-1.414 1.414L19.586 5H1a1 1 0 1 0 0 2h18.586l-3.293 3.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5z"></path></svg>
                                                </use></svg>
                                        </div>
                                    </div>
                                    <!--Image Switch-->
                                    <div class="image_active_signals_switch">
                                        <div class="image_active_signals_switch_wrapper">
                                            <!--Image-->
                                            <div class="image_active_signals_switch_image_block">
                                                <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_before;?>" alt="" class="image_active_signals_switch_image">
                                            </div>
                                            <!--Image-->
                                            <div class="image_active_signals_switch_image_block">
                                                <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signal->screen_after;?>" alt="" class="image_active_signals_switch_image">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Image Background-->
                                    <div class="image_active_signals_background"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--Notification-->
                    <div class="signal_mw_description_notification">
                        <div class="signal_mw_description_notification_text">
                            Прогнозы финансовых рынков являются частным мнением автора. Текущая рекомендация не представляет собой руководство к торговле. Вы должны понимать возможные риски, которые могут возникнуть при использовании торговых рекомендаций.
                        </div>
                    </div>
                    <!--Mobile Details-->
                    <div class="signal_mw_main_content_mobile_details">
                        <div class="signal_mw_main_content_mobile_details_inner">
                            <!--Price-->
                            <div class="signal_mw_main_content_mobile_details_item_block">
                                <div class="signal_mw_main_content_mobile_details_item_title_320">
                                    Pr:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_title_450">
                                    Price:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_value">
                                    <?=$signal->price;?>
                                </div>
                            </div>
                            <!--Take Profit-->
                            <div class="signal_mw_main_content_mobile_details_item_block">
                                <div class="signal_mw_main_content_mobile_details_item_title_320">
                                    T/P:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_title_450">
                                    Take Profit:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_value takeprofit">
                                    <?=$signal->take_profit;?>
                                </div>
                            </div>
                            <!--Stop Loss-->
                            <div class="signal_mw_main_content_mobile_details_item_block">
                                <div class="signal_mw_main_content_mobile_details_item_title_320">
                                    S/L:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_title_450">
                                    Stol Loss:
                                </div>
                                <div class="signal_mw_main_content_mobile_details_item_value stoploss">
                                    <?=$signal->stop_loss;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Sidebar-->
        <div class="signal_mw_right_sidebar">
            <!--Close-->
            <div id='mw_close' class="signal_mw_icon">
                <div class="signal_mw_close_link">
                    <!--Svg-->
                    <svg class="signal_mw_close_icon" id="close_1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                        
                        </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g></svg>
                </div>
            </div>
            <!--Signal Details-->
            <div class="signal_mw_details">
                <div class="signal_mw_details_inner">
                    <!--Title-->
                    <div class="signal_mw_details_title_block">
                        <div class="signal_mw_details_title">
                            Детали идеи
                        </div>
                        <!--Border-->
                        <div class="signal_mw_details_title_border"></div>
                    </div>
                    <!--Description-->
                    <div class="signal_mw_details_desc">
                        
                        
                        <!--Status-->
                        <div class="signal_mw_details_desc_row status">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Статус
                                    </div>
                                    <!--Info-->
                                    <span id='status_info' class="signal_mw_details_desc_name_info">
<!--Svg-->
<svg class="signal_mw_details_desc_name_info_icon" id="info_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#959BA4" d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM8.9 13h-2v-2h2v2zM11 8.1c-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3z"></path>
</svg>
<span id='status_tooltip' class="signal_mw_details_desc_name_info_tooltip" aria-label="Если статус не является «Активным», то вход в рынок по данной идее запрещён. Подробнее о статусах читайте в мануале «Как торговать по идеям»"></span>
</span>
                                </div>
                                <!--Value-->
                                <div class="signal_mw_details_desc_value_block
                                <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                    new
                                <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                    in_work
                                <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                    close
                                    <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
                                    cancel
                                <?php endif; ?>
                                ">
                                    <div class="signal_mw_details_desc_value">
                                        <?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                            Активный
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
                                            В работе
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
                                            Завершён
                                        <?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
                                            Отменён
                                        <?php endif; ?>
                                    
                                    </div>
                                </div>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Date-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Дата публикации
                                    </div>
                                </div>
                                <!--Value-->
                                <div class="signal_mw_details_desc_value_block">
                                    <div class="signal_mw_details_desc_value date_930">
                                        <?=$signal->full_date;?>
                                    </div>
                                    <div class="signal_mw_details_desc_value date_900" style="display: none;">
                                        <?=$signal->date;?>
                                    </div>
                                </div>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        
                        <!--Currency-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Валютная пара
                                    </div>
                                </div>
                                <!--Value-->
                                <div class="signal_mw_details_desc_value_block">
                                    <div class="signal_mw_details_desc_value">
                                        <?=$signalCurrency->code;?>
                                    </div>
                                </div>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Type-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Тип сделки
                                    </div>
                                </div>
                                <!--Value-->
                                <div class="signal_mw_details_desc_value_block">
                                    <div class="signal_mw_details_desc_value">
                                        <?=$signalType->type;?>
                                    </div>
                                </div>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Price-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Цена открытия
                                    </div>
                                    <!--Info-->
                                    <span id='price_info' class="signal_mw_details_desc_name_info">
<!--Svg-->
<svg class="signal_mw_details_desc_name_info_icon" id="info_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#959BA4" d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM8.9 13h-2v-2h2v2zM11 8.1c-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3z"></path>
</svg>
<span id='price_tooltip' class="signal_mw_details_desc_name_info_tooltip" aria-label="Уровень цены открытия сделки"></span>
</span>
                                </div>
                                <!--Value-->
                                <btn class="signal_mw_details_desc_value_block copy_price" data-clipboard-target="#copy_price" aria-label="Скопированно">
                                    <!--Svg-->
                                    <svg class="signal_mw_details_desc_copy_icon"><use xlink:href="#main_copy_1"></use>
                                        <symbol id="main_copy_1" viewBox="0 0 32 32">
                                            <title>Скопировать</title>
                                            <path d="M13.757 19.868c-0.416 0-0.832-0.159-1.149-0.476-2.973-2.973-2.973-7.81 0-10.783l6-6c1.44-1.44 3.355-2.233 5.392-2.233s3.951 0.793 5.392 2.233c2.973 2.973 2.973 7.81 0 10.783l-2.743 2.743c-0.635 0.635-1.663 0.635-2.298 0s-0.635-1.663 0-2.298l2.743-2.743c1.706-1.706 1.706-4.481 0-6.187-0.826-0.826-1.925-1.281-3.094-1.281s-2.267 0.455-3.094 1.281l-6 6c-1.706 1.706-1.706 4.481 0 6.187 0.635 0.635 0.635 1.663 0 2.298-0.317 0.317-0.733 0.476-1.149 0.476z"></path>
                                            <path d="M8 31.625c-2.037 0-3.952-0.793-5.392-2.233-2.973-2.973-2.973-7.81 0-10.783l2.743-2.743c0.635-0.635 1.664-0.635 2.298 0s0.635 1.663 0 2.298l-2.743 2.743c-1.706 1.706-1.706 4.481 0 6.187 0.826 0.826 1.925 1.281 3.094 1.281s2.267-0.455 3.094-1.281l6-6c1.706-1.706 1.706-4.481 0-6.187-0.635-0.635-0.635-1.663 0-2.298s1.663-0.635 2.298 0c2.973 2.973 2.973 7.81 0 10.783l-6 6c-1.44 1.44-3.355 2.233-5.392 2.233z"></path>
                                        </symbol></svg>
                                    <div class="signal_mw_details_desc_value" id='copy_price'>
                                        <?=$signal->price;?>
                                    </div>
                                </btn>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Take Profit-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Тейк Профит
                                    </div>
                                    <!--Info-->
                                    <span id='takeProfit_info' class="signal_mw_details_desc_name_info">
<!--Svg-->
<svg class="signal_mw_details_desc_name_info_icon" id="info_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#959BA4" d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM8.9 13h-2v-2h2v2zM11 8.1c-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3z"></path>
</svg>
<span id='takeProfit_tooltip' class="signal_mw_details_desc_name_info_tooltip" aria-label="Уровень цены, при котором закроется сделка, в случае убытка"></span>
</span>
                                </div>
                                <!--Value-->
                                <btn class="signal_mw_details_desc_value_block copy_takeProfit" data-clipboard-target="#copy_takeProfit" aria-label="Скопированно">
                                    <!--Svg-->
                                    <svg class="signal_mw_details_desc_copy_icon"><use xlink:href="#main_copy_1"></use>
                                        <symbol id="main_copy_1" viewBox="0 0 32 32">
                                            <title>Скопировать</title>
                                            <path d="M13.757 19.868c-0.416 0-0.832-0.159-1.149-0.476-2.973-2.973-2.973-7.81 0-10.783l6-6c1.44-1.44 3.355-2.233 5.392-2.233s3.951 0.793 5.392 2.233c2.973 2.973 2.973 7.81 0 10.783l-2.743 2.743c-0.635 0.635-1.663 0.635-2.298 0s-0.635-1.663 0-2.298l2.743-2.743c1.706-1.706 1.706-4.481 0-6.187-0.826-0.826-1.925-1.281-3.094-1.281s-2.267 0.455-3.094 1.281l-6 6c-1.706 1.706-1.706 4.481 0 6.187 0.635 0.635 0.635 1.663 0 2.298-0.317 0.317-0.733 0.476-1.149 0.476z"></path>
                                            <path d="M8 31.625c-2.037 0-3.952-0.793-5.392-2.233-2.973-2.973-2.973-7.81 0-10.783l2.743-2.743c0.635-0.635 1.664-0.635 2.298 0s0.635 1.663 0 2.298l-2.743 2.743c-1.706 1.706-1.706 4.481 0 6.187 0.826 0.826 1.925 1.281 3.094 1.281s2.267-0.455 3.094-1.281l6-6c1.706-1.706 1.706-4.481 0-6.187-0.635-0.635-0.635-1.663 0-2.298s1.663-0.635 2.298 0c2.973 2.973 2.973 7.81 0 10.783l-6 6c-1.44 1.44-3.355 2.233-5.392 2.233z"></path>
                                        </symbol></svg>
                                    <div class="signal_mw_details_desc_value" id='copy_takeProfit'>
                                        <?=$signal->take_profit;?>
                                    </div>
                                </btn>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Stop Loss-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Стоп Лосс
                                    </div>
                                    <!--Info-->
                                    <span id='stopLoss_info' class="signal_mw_details_desc_name_info">
<!--Svg-->
<svg class="signal_mw_details_desc_name_info_icon" id="info_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#959BA4" d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM8.9 13h-2v-2h2v2zM11 8.1c-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3z"></path>
</svg>
<span id='stopLoss_tooltip' class="signal_mw_details_desc_name_info_tooltip" aria-label="Уровень цены, при котором закроется сделка, в случае успеха"></span>
</span>
                                </div>
                                <!--Value-->
                                <btn class="signal_mw_details_desc_value_block copy_stopLoss" data-clipboard-target="#copy_stopLoss" aria-label="Скопированно">
                                    <!--Svg-->
                                    <svg class="signal_mw_details_desc_copy_icon"><use xlink:href="#main_copy_1"></use>
                                        <symbol id="main_copy_1" viewBox="0 0 32 32">
                                            <title>Скопировать</title>
                                            <path d="M13.757 19.868c-0.416 0-0.832-0.159-1.149-0.476-2.973-2.973-2.973-7.81 0-10.783l6-6c1.44-1.44 3.355-2.233 5.392-2.233s3.951 0.793 5.392 2.233c2.973 2.973 2.973 7.81 0 10.783l-2.743 2.743c-0.635 0.635-1.663 0.635-2.298 0s-0.635-1.663 0-2.298l2.743-2.743c1.706-1.706 1.706-4.481 0-6.187-0.826-0.826-1.925-1.281-3.094-1.281s-2.267 0.455-3.094 1.281l-6 6c-1.706 1.706-1.706 4.481 0 6.187 0.635 0.635 0.635 1.663 0 2.298-0.317 0.317-0.733 0.476-1.149 0.476z"></path>
                                            <path d="M8 31.625c-2.037 0-3.952-0.793-5.392-2.233-2.973-2.973-2.973-7.81 0-10.783l2.743-2.743c0.635-0.635 1.664-0.635 2.298 0s0.635 1.663 0 2.298l-2.743 2.743c-1.706 1.706-1.706 4.481 0 6.187 0.826 0.826 1.925 1.281 3.094 1.281s2.267-0.455 3.094-1.281l6-6c1.706-1.706 1.706-4.481 0-6.187-0.635-0.635-0.635-1.663 0-2.298s1.663-0.635 2.298 0c2.973 2.973 2.973 7.81 0 10.783l-6 6c-1.44 1.44-3.355 2.233-5.392 2.233z"></path>
                                        </symbol></svg>
                                    <div class="signal_mw_details_desc_value" id='copy_stopLoss'>
                                        <?=$signal->stop_loss;?>
                                    </div>
                                </btn>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <!--Risk Management-->
                        <div class="signal_mw_details_desc_row">
                            <div class="signal_mw_details_desc_row_inner">
                                <!--Name-->
                                <div class="signal_mw_details_desc_name_block">
                                    <div class="signal_mw_details_desc_name">
                                        Риск-менеджмент
                                    </div>
                                    <!--Info-->
                                    <span id='risk_info' class="signal_mw_details_desc_name_info">
<!--Svg-->
<svg class="signal_mw_details_desc_name_info_icon" id="info_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#959BA4" d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM8.9 13h-2v-2h2v2zM11 8.1c-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3z"></path>
</svg>
<span id='risk_tooltip' class="signal_mw_details_desc_name_info_tooltip" aria-label="Максимальный размер инвестиции в сделку"></span>
</span>
                                </div>
                                <!--Value-->
                                <div class="signal_mw_details_desc_value_block">
                                    <div class="signal_mw_details_desc_value">
                                        2%
                                    </div>
                                </div>
                            </div>
                            <!--Border-->
                            <div class="signal_mw_details_desc_border"></div>
                        </div>
                        
                        <?php if($signal->close_status == 1 && $signal->active_status == 0 && $signal->in_work_status == 0 && $signal->cancel_status == 0): ?>
                            <!--Result-->
                            <div class="signal_mw_details_desc_row">
                                <div class="signal_mw_details_desc_row_inner">
                                    <!--Name-->
                                    <div class="signal_mw_details_desc_name_block">
                                        <div class="signal_mw_details_desc_name">
                                            Результат
                                        </div>
                                    </div>
                                    <!--Value-->
                                    <div class="signal_mw_details_desc_value_block">
                                        <?php if($signal->result_plus): ?>
                                            <div class="signal_mw_details_desc_value plus">
                                                +<?=$signal->result_plus?> points
                                            </div>
                                        <?php endif; ?>
                                        <?php if($signal->result_minus): ?>
                                            <div class="signal_mw_details_desc_value minus">
                                                -<?=$signal->result_minus?> points
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!--Border-->
                                <div class="signal_mw_details_desc_border"></div>
                            </div>
                        <?php endif; ?>
                    
                    </div>
                    <!--Warning Risk-->
                    <div class="signal_mw_detaile_warning_risk">
                        <div class="signal_mw_detaile_warning_risk_text">
                            Напоминаем: финансовый рынок – это сложный инструмент, который, будучи маржинальным, имеет высокий уровень риска. Вы должны понимать, можете ли позволить принять риск потери средств. Пожалуйста, прочтите наше
                            <a href="/main/<?=$documentSignal['3']['alias'];?>" class="signal_mw_detaile_warning_risk_link">
                                «Уведомление о  рисках»
                            </a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script>
        //Close - если клик по крестику
        $('#modal_signal #mw_close').click(function(){
            $('#modal_signal').removeClass('active');
            $('.header').removeClass('modal_window');
            $('.subheader').removeClass('modal_window');
            $('body').removeClass('modal_window');
            $('html').removeClass('modal_window');
            let baseUrl;
            if($('#href-page').data('href-page') != 'no-name') {
                baseUrl = window.location.origin + $('#href-page').data('href-page');
                window.history.pushState({}, '', baseUrl);
         
            } else {
                baseUrl = window.location.origin + '/ideas';
                window.history.pushState({}, '', baseUrl);
            };
            $.removeCookie('ideas_ajax', { path: '/' });
            $.removeCookie('history_ajax', { path: '/' });
        });


        //Mobile Close - если клик по крестику
        $('.signal_mw_close_mobill_text').click(function(){
            $('.signal_modal_window').removeClass('active');
            $('.header').removeClass('modal_window');
            $('.subheader').removeClass('modal_window');
            $('body').removeClass('modal_window');
            $('html').removeClass('modal_window');
            let baseUrl;
            if($('#href-page').data('href-page') != 'no-name') {
                baseUrl = window.location.origin + $('#href-page').data('href-page');
                window.history.pushState({}, '', baseUrl);

            } else {
                baseUrl = window.location.origin + '/ideas';
                window.history.pushState({}, '', baseUrl);
            };
            $.removeCookie('ideas_ajax', { path: '/' });
            $.removeCookie('history_ajax', { path: '/' });
        });

        $('.signal_mw_close_mobil_icon').click(function(){
            $('.signal_modal_window').removeClass('active');
            $('.header').removeClass('modal_window');
            $('.subheader').removeClass('modal_window');
            $('body').removeClass('modal_window');
            $('html').removeClass('modal_window');
            let baseUrl;
            if($('#href-page').data('href-page') != 'no-name') {
                baseUrl = window.location.origin + $('#href-page').data('href-page');
                window.history.pushState({}, '', baseUrl);

            } else {
                baseUrl = window.location.origin + '/ideas';
                window.history.pushState({}, '', baseUrl);
            };
            $.removeCookie('ideas_ajax', { path: '/' });
            $.removeCookie('history_ajax', { path: '/' });
        });
        
        
    </script>
    
<?php endif; ?>
    
    
    <script src='/public/js/modal_ideas/app.js'></script>
<?php if($signal->active_status == 1 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
    <script src='/public/js/base/gallery_one_image.js'></script>
<?php elseif ($signal->active_status == 0 && $signal->in_work_status == 1 && $signal->close_status == 0 && $signal->cancel_status == 0): ?>
    <script src='/public/js/base/gallery_one_image.js'></script>
<?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 1 && $signal->cancel_status == 0): ?>
    <script src='/public/js/base/galleryIdeas.js'></script>
<?php elseif ($signal->active_status == 0 && $signal->in_work_status == 0 && $signal->close_status == 0 && $signal->cancel_status == 1): ?>
    <script src='/public/js/base/galleryIdeas.js'></script>
<?php endif; ?>