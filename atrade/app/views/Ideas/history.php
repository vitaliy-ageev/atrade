<link rel="stylesheet" href="/public/css/ideas/history/style.css">
<link rel="stylesheet" href="/public/css/ideas/history/preloader/style.css">


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





<div id='up' class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <!--Left Title-->
                <div class="left_title">
                    <div class="left_title_block">
                        <div class="left_title_text">
                            История идей
                        </div>
                    </div>
                </div>
                
                
                <?php if($alias == 'table'):?>
                    <!--Links Views-->
                    <div class="history_page_links">
                        <div class="history_page_links_inner">
                            <!--Items-->
                            <a href="/ideas/history/grid" class="history_page_links_item">
                                <!--Svg-->
                                <svg class="history_page_links_item_svg_items" width="14" height="14">
                                    <use xlink:href="#icon_general_cards">
                                        <svg viewBox="0 0 14 14" id="icon_general_cards">
                                            <g fill="currentColor">
                                                <path d="M0 0h5.765v5.765H0zM8.235 0H14v5.765H8.235zM0 8.235h5.765V14H0zM8.235
                                                8.235H14V14H8.235z">
                                                </path>
                                            </g>
                                        </svg>
                                    </use>
                                </svg>
                            </a>
                            <!--Table-->
                            <a href="/ideas/history/table" class="history_page_links_item active">
                                <!--Svg-->
                                <svg class='history_page_links_item_svg_table' width="14" height="14">
                                    <use xlink:href="#icon_general_list">
                                        <svg viewBox="0 0 14 14" id="icon_general_list">
                                            <g fill="currentColor">
                                                <path d="M0 0h14v2H0zM0 4h14v2H0zM0 8h14v2H0zM0 12h14v2H0z">
                                                </path>
                                            </g>
                                        </svg>
                                    </use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="history_table_wrapper_1Ad4G">
                        <!--Signals History Table-->
                        <div id='signals_history_table' class="signals_history_table">
                            <!--Signals History Table Description-->
                            <div class="signals_history_table_desc">
                                <!--Signals History Table Title-->
                                <div class="signals_history_table_title">
                                    <!--Signals History Table Left-->
                                    <div class="signals_history_table_left">
                                        <!--Time-->
                                        <div class="signals_history_table_title_time">
                                            Дата
                                        </div>
                                        <!--Currency-->
                                        <div class="signals_history_table_title_currency">
                                            Валюта
                                        </div>
                                        <!--Volatility-->
                                        <div class="signals_history_table_title_volatility">
                                            Риск
                                        </div>
                                        <!--Type-->
                                        <div class="signals_history_table_title_type">
                                            Тип
                                        </div>
                                        <!--Mobile Currency-->
                                        <div class="signals_history_table_title_mobile_currency">
                                            Валютная пара
                                        </div>
                                    </div>
                                    <!--Signals History Table Right-->
                                    <div class="signals_history_table_right">
                                        <!--Purchase Price-->
                                        <div class="signals_history_table_title_purchase_price">
                                            Покупка
                                        </div>
                                        <!--Selling Price-->
                                        <div class="signals_history_table_title_selling_price">
                                            Продажа
                                        </div>
                                        <!--Result-->
                                        <div class="signals_history_table_title_result">
                                            Результат
                                        </div>
                                        <!--Mobile Data-->
                                        <div class="signals_history_table_title_mobile_data">
                                            Данные сделки
                                        </div>
                                    </div>
                                </div>
                                <!--Completed Transactions-->
                                <div class="signals_history_table_completed_transactions">
                                    <div class="signals_history_table_completed_text">
                                        Закрытые позиции
                                    </div>
                                </div>
                                
                                <!--Signals History Table Item-->
                                <?php if($signalsHistory): ?>
                                    <?php foreach($signalsHistory as $signalHistory): ?>
                                        <div id='history_table' class="signals_history_table_item">
                                            <a id="R<?=$signalHistory->id;?>" data-id="<?=$signalHistory->id;?>" href='signalsh/add?id=<?=$signalHistory->id;?>'  class="signals_history_table_item_inner history_table <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>">
                                                <div class="signals_history_table_item_inner_touch">
                                                    <!--Signals History Table Item Left-->
                                                    <div class="signals_history_table_item_left">
                                                        <!--Date-->
                                                        <div class="signals_history_table_item_date">
                                                            <?=$signalHistory->date?>
                                                            <?php if(date('Y') != $signalHistory->year): ?>
                                                                <?=$signalHistory->year;?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="signals_history_table_item_left_container_adaptive">
                                                            <!--Currency-->
                                                            <div class="signals_history_table_item_currency">
                                                                <div class="signals_history_table_img" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signalHistory->curr_id]['image'];?>");'></div>
                                                                <div class="signals_history_table_currency_value_block">
                                                                    <div class="signals_history_table_item_currency_value"><?=$signalsCurrencies[$signalHistory->curr_id]['code'];?>
                                                                    </div>
                                                                    <div class="signals_history_table_item_type_mobile <?=$signalsType[$signalHistory->type_id]['class'];?> <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>">
                                                                        <?=$signalsType[$signalHistory->type_id]['type'];?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Volatility-->
                                                            <div class="signals_history_table_item_volatility_wrapper">
                                                                <div class="signals_history_table_item_volatility <?php if($signalHistory->risk == 1): ?> one <?php endif; ?><?php if($signalHistory->risk == 2): ?> two <?php endif; ?><?php if($signalHistory->risk == 3): ?> three <?php endif; ?>">
                                                                    <div class="signals_history_table_item_volatility_item first"></div>
                                                                    <div class="signals_history_table_item_volatility_item second"></div>
                                                                    <div class="signals_history_table_item_volatility_item third"></div>
                                                                </div>
                                                            </div>
                                                            
                                                            <!--Type-->
                                                            <div class="signals_history_table_item_type <?=$signalsType[$signalHistory->type_id]['class'];?> <?php if($signalHistory->cancel_status== 1): ?>cancel<?php endif; ?>">
                                                                <?=$signalsType[$signalHistory->type_id]['type'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--Signals History Table Item Right-->
                                                    <div class="signals_history_table_item_right">
                                                        <?php if($signalHistory->close_status == 1 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 0): ?>
                                                            <!--Purchase Price-->
                                                            <div class="signals_history_table_item_purchase_price">
                                                                <?=$signalHistory->price;?>
                                                            </div>
                                                        <?php elseif ($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                            <!--Purchase Price-->
                                                            <div class="signals_history_table_item_purchase_price">
                                                                -
                                                            </div>
                                                        <?php endif; ?>
                                                        <!--Selling Price-->
                                                        <div class="signals_history_table_item_selling_price">
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
                                                            <div class="signals_history_table_item_result buy">
                                                                +<?=$signalHistory->result_plus;?> pips
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if(!empty($signalHistory->result_minus)): ?>
                                                            <div class="signals_history_table_item_result sell">
                                                                -<?=$signalHistory->result_minus;?> pips
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                            <div class="signals_history_table_item_result cancel">
                                                                Отменён
                                                            </div>
                                                        <?php endif; ?>
                                                        <!--Mobile-->
                                                        <div class="signals_history_table_item_right_mobile">
                                                            <div class="signals_history_table_item_right_mobile_inner">
                                                                <div class="signals_history_table_item_right_mobile_l">
                                                                    <!--Relust Mobile-->
                                                                    <div class="signals_history_table_item_result_block_mobile">
                                                                        <div class="signals_history_table_item_result_mobile_title">
                                                                            Rs:
                                                                        </div>
                                                                        <?php if(!empty($signalHistory->result_plus)): ?>
                                                                            <div class="signals_history_table_item_result_mobile_value buy">
                                                                                +<?=$signalHistory->result_plus;?> pips
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <?php if(!empty($signalHistory->result_minus)): ?>
                                                                            <div class="signals_history_table_item_result_mobile_value sell">
                                                                                -<?=$signalHistory->result_minus;?> pips
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <?php if($signalHistory->close_status == 0 && $signalHistory->active_status == 0 && $signalHistory->in_work_status == 0 && $signalHistory->cancel_status == 1): ?>
                                                                            <div class="signals_history_table_item_result_mobile_value cancel">
                                                                                Отменён
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <!--Purchase Price Mobile-->
                                                                    <div class="signals_history_table_item_purchase_price_block_mobile">
                                                                        <div class="signals_history_table_item_purchase_price_mobile_title">
                                                                            Pr:
                                                                        </div>
                                                                        <div class="signals_history_table_item_purchase_price_mobile_value">
                                                                            <?=$signalHistory->price;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="signals_history_table_item_right_mobile_r">
                                                                    <!--Take Profit Mobile-->
                                                                    <div class="signals_history_table_item_takeprofit_block_mobile">
                                                                        <div class="signals_history_table_item_takeprofit_mobile_title">
                                                                            T/P:
                                                                        </div>
                                                                        <div class="signals_history_table_item_takeprofit_mobile_value">
                                                                            <?=$signalHistory->take_profit;?>
                                                                        </div>
                                                                    </div>
                                                                    <!--Selling Price Mobile-->
                                                                    <div class="signals_history_table_item_purchase_price_block_mobile">
                                                                        <div class="signals_history_table_item_purchase_price_mobile_title">
                                                                            S/L:
                                                                        </div>
                                                                        <div class="signals_history_table_item_purchase_price_mobile_value">
                                                                            <?=$signalHistory->stop_loss;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Date Mobile-->
                                                                <div class="signals_history_table_item_date_mobile_block">
                                                                    <div class="signals_history_table_item_date_mobile_block_inner">
                                                                        <div class="signals_history_table_item_date_mobile">
                                                                            <?=$signalHistory->date;?>
                                                                        </div>
                                                                        <div class="signals_history_table_item_year_mobile">
                                                                            <?=$signalHistory->year;?>г.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </a>
                                            
                                            <!--Signals History Table Description-->
                                            <div class="signals_history_table_item_desc open">
                                                <!--Text-->
                                                <div class="signals_history_table_item_desc_text">
                                                    <?=$signalHistory->preview_text;?>
                                                </div>
                                                <?php if($signalHistory->screen_before_preload && $signalHistory->screen_after_preload && $signalHistory->screen_before && $signalHistory->screen_after):?>
                                                    <!--Screen-->
                                                    <div class="signals_history_table_item_desc_screen image_history_description_block">
                                                        <div class="signals_history_table_item_desc_screen_inner">
                                                            <!--Before-->
                                                            <div class="signals_history_table_item_desc_screen_before full_screen_history">
                                                                <img src="<?=IMG_MAIN?>/screen/screen_preload/<?=$signalHistory->screen_before_preload;?>" alt="" class="signals_history_table_item_desc_screen_before_img">
                                                                <!--Image Hover-->
                                                                <div class="signals_history_table_item_desc_screen_hover_block">
                                                                    <div class="signals_history_table_item_desc_screen_hover_block_inner">
                                                                        <!--Svg-->
                                                                        <svg class="signals_history_table_item_desc_screen_hover_block_icon"  xmlns="http://www.w3.org/2000/svg" height="511pt" viewBox="0 -21 511.98744 511" width="511pt"><path d="m133.320312 373.828125c-34.152343 0-64.53125-21.867187-75.5625-54.421875l-.746093-2.453125c-2.601563-8.621094-3.691407-15.871094-3.691407-23.125v-145.453125l-51.753906 172.757812c-6.65625 25.410157 8.511719 51.753907 33.960938 58.773438l329.878906 88.34375c4.117188 1.066406 8.234375 1.578125 12.289062 1.578125 21.246094 0 40.660157-14.101563 46.101563-34.882813l19.21875-61.117187zm0 0"/><path d="m191.988281 149.828125c23.53125 0 42.664063-19.136719 42.664063-42.667969s-19.132813-42.667968-42.664063-42.667968-42.667969 19.136718-42.667969 42.667968 19.136719 42.667969 42.667969 42.667969zm0 0"/><path d="m458.652344.492188h-320c-29.394532 0-53.332032 23.9375-53.332032 53.335937v234.664063c0 29.398437 23.9375 53.335937 53.332032 53.335937h320c29.398437 0 53.335937-23.9375 53.335937-53.335937v-234.664063c0-29.398437-23.9375-53.335937-53.335937-53.335937zm-320 42.667968h320c5.890625 0 10.667968 4.777344 10.667968 10.667969v151.445313l-67.390624-78.636719c-7.148438-8.382813-17.496094-12.863281-28.609376-13.117188-11.050781.0625-21.417968 4.96875-28.5 13.460938l-79.234374 95.101562-25.8125-25.75c-14.589844-14.589843-38.335938-14.589843-52.90625 0l-58.878907 58.859375v-201.363281c0-5.890625 4.777344-10.667969 10.664063-10.667969zm0 0"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--After-->
                                                            <div class="signals_history_table_item_desc_screen_after full_screen_history">
                                                                <img src="<?=IMG_MAIN?>/screen/screen_preload/<?=$signalHistory->screen_after_preload;?>" alt="" class="signals_history_table_item_desc_screen_after_img">
                                                                <!--Image Hover-->
                                                                <div class="signals_history_table_item_desc_screen_hover_block">
                                                                    <div class="signals_history_table_item_desc_screen_hover_block_inner">
                                                                        <!--Svg-->
                                                                        <svg class="signals_history_table_item_desc_screen_hover_block_icon"  xmlns="http://www.w3.org/2000/svg" height="511pt" viewBox="0 -21 511.98744 511" width="511pt"><path d="m133.320312 373.828125c-34.152343 0-64.53125-21.867187-75.5625-54.421875l-.746093-2.453125c-2.601563-8.621094-3.691407-15.871094-3.691407-23.125v-145.453125l-51.753906 172.757812c-6.65625 25.410157 8.511719 51.753907 33.960938 58.773438l329.878906 88.34375c4.117188 1.066406 8.234375 1.578125 12.289062 1.578125 21.246094 0 40.660157-14.101563 46.101563-34.882813l19.21875-61.117187zm0 0"/><path d="m191.988281 149.828125c23.53125 0 42.664063-19.136719 42.664063-42.667969s-19.132813-42.667968-42.664063-42.667968-42.667969 19.136718-42.667969 42.667968 19.136719 42.667969 42.667969 42.667969zm0 0"/><path d="m458.652344.492188h-320c-29.394532 0-53.332032 23.9375-53.332032 53.335937v234.664063c0 29.398437 23.9375 53.335937 53.332032 53.335937h320c29.398437 0 53.335937-23.9375 53.335937-53.335937v-234.664063c0-29.398437-23.9375-53.335937-53.335937-53.335937zm-320 42.667968h320c5.890625 0 10.667968 4.777344 10.667968 10.667969v151.445313l-67.390624-78.636719c-7.148438-8.382813-17.496094-12.863281-28.609376-13.117188-11.050781.0625-21.417968 4.96875-28.5 13.460938l-79.234374 95.101562-25.8125-25.75c-14.589844-14.589843-38.335938-14.589843-52.90625 0l-58.878907 58.859375v-201.363281c0-5.890625 4.777344-10.667969 10.664063-10.667969zm0 0"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="desc_screen_wrap">
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!--Article Pagination-->
                        <?php if($pagination_table->countPages > 1): ?>
                            <div class="history_pagination table">
                                <?=$pagination_table;?>
                            </div>
                        <?php endif; ?>
                        
                        <!--Article Pagination Mobile-->
                        <?php if($mobile_pagination_table->countPages > 1): ?>
                            <div class="history_pagination_mobile table">
                                <?=$mobile_pagination_table;?>
                            </div>
                        <?php endif; ?>
                    </div>
                
                
                <?php endif; ?>
                <?php if($alias == 'grid'):?>
                <!--Links Views-->
                <div class="history_page_links">
                    <div class="history_page_links_inner">
                        <!--Items-->
                        <a href="/ideas/history/grid" class="history_page_links_item active">
                            <!--Svg-->
                            <svg class="history_page_links_item_svg_items" width="14" class="css-ub3s63 e10c9vnq1"
                                 height="14">
                                <use xlink:href="#icon_general_cards">
                                    <svg viewBox="0 0 14 14" id="icon_general_cards">
                                        <g fill="currentColor">
                                            <path d="M0 0h5.765v5.765H0zM8.235 0H14v5.765H8.235zM0 8.235h5.765V14H0zM8.235
                                                8.235H14V14H8.235z">
                                            </path>
                                        </g>
                                    </svg>
                                </use>
                            </svg>
                        </a>
                        <!--Table-->
                        <a href="/ideas/history/table" class="history_page_links_item">
                            <!--Svg-->
                            <svg class='history_page_links_item_svg_table' width="14" class="css-ub3s63 e10c9vnq1"
                                 height="14">
                                <use xlink:href="#icon_general_list">
                                    <svg viewBox="0 0 14 14" id="icon_general_list">
                                        <g fill="currentColor">
                                            <path d="M0 0h14v2H0zM0 4h14v2H0zM0 8h14v2H0zM0 12h14v2H0z">
                                            </path>
                                        </g>
                                    </svg>
                                </use>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <?php if($signalsHistoryItem): ?>
                    <div id='signals-history-grid' class="signals_history_item_page_1s34">
                        <div class="signals_history_item_page_A364G3">
                            <div class="signals_history_item_A334G5">
                                <?php foreach($signalsHistoryItem as $signalHistoryItem): ?>
                                    <div class="signals_history_item <?=$signalsType[$signalHistoryItem->type_id]['class'];?>
                                    <?php if(in_array($signalHistoryItem->id, (array) $signalsViewed)): ?>
                                        viewed
                                    <?php endif; ?>
                                    ">
                                        <a id="M<?=$signalHistoryItem->id;?>" data-id="<?=$signalHistoryItem->id;?>" href='/ideas/history/grid?id=<?=$signalHistoryItem->id;?>' class="signals_history_item_inner modal_msw">
                                            <?php if(in_array($signalHistoryItem->id, (array) $signalsViewed)): ?>
                                                <div class="signals_history_item_viewed_card">
                                                    <div class="signals_history_itemviewed_card_inner">
                                                        <svg class="signals_history_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
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
                                            <div class="signals_history_item_viewed_card js">
                                                <div class="signals_history_item_viewed_card_inner">
                                                    <svg class="signals_history_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
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
                                            <div class="signals_history_item_result
                                        <?php if(!empty($signalHistoryItem->result_plus)):?>
                                        plus
                                        <?php endif; ?>
                                        <?php if(!empty($signalHistoryItem->result_minus)):?>
                                        minus
                                        <?php endif; ?>
                                        <?php if(empty($signalHistoryItem->result_plus) && empty($signalHistoryItem->result_minus)):?>
                                        cancel
                                        <?php endif; ?>
                                            ">
                                                <?php if(!empty($signalHistoryItem->result_plus)): ?>
                                                    <div class="signals_history_item_result_text">
                                                        +<?=$signalHistoryItem->result_plus;?>  points
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(!empty($signalHistoryItem->result_minus)): ?>
                                                    <div class="signals_history_item_result_text">
                                                        -<?=$signalHistoryItem->result_minus;?> points
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(empty($signalHistoryItem->result_plus) && empty($signalHistoryItem->result_minus)): ?>
                                                    <div class="signals_history_item_result_text">
                                                        Отменён
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="signals_history_item_upper">
                                                <div class="signals_history_item_bg" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signalHistoryItem->curr_id]['image'];?>");'>
                                                </div>
                                                <div class="signals_history_item_name">
                                                    <?=$signalsCurrencies[$signalHistoryItem->curr_id]['name'];?>
                                                </div>
                                                <div class="signals_history_item_profitability <?=$signalsType[$signalHistoryItem->type_id]['class'];?>">
                                                    <?=$signalsType[$signalHistoryItem->type_id]['type'];?>
                                                </div>
                                            </div>
                                            <!--Chart-->
                                            <div class="signals_history_item_chart">
                                                <svg class="Chart__svgChartContainer_30V2_" viewBox="0 0 338 150">
                                                    <!--Polyline-->
                                                    <?php if($signalsType[$signalHistoryItem->type_id]['id'] == 1): ?>
                                                        <polyline points="<?=$signalHistoryItem->svg_path;?>" fill="none" stroke="#22a053" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                    <?php endif; ?>
                                                    <?php if($signalsType[$signalHistoryItem->type_id]['id'] == 2): ?>
                                                        <polyline points="<?=$signalHistoryItem->svg_path;?>" fill="none" stroke="#E01F19" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                    <?php endif; ?>
                                                    <!--Gradient-->
                                                    <?php if($signalsType[$signalHistoryItem->type_id]['id'] == 1): ?>
                                                        <defs><linearGradient id="<?=$signalHistoryItem->id;?>RS" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#22a053;stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:#22a053;stop-opacity:0"></stop></linearGradient></defs>
                                                    <?php endif; ?>
                                                    <?php if($signalsType[$signalHistoryItem->type_id]['id'] == 2): ?>
                                                        <defs><linearGradient id="<?=$signalHistoryItem->id;?>RS" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(224, 31, 25);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgb(224, 31, 25);stop-opacity:0"></stop></linearGradient></defs>
                                                    <?php endif; ?>
                                                    <!--Path-->
                                                    <path d="M 0,150 L <?=$signalHistoryItem->svg_path;?>, 150" fill="url(#<?=$signalHistoryItem->id;?>RS)"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!--Article Pagination-->
                            <?php if($pagination_item->countPages > 1): ?>
                            <div class="history_pagination grids">
                                <?=$pagination_item;?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                
                <!--Mobile-->
                <?php if($signalsHistoryItemMobile): ?>
                <div id='signals-history-grid-mobile' class="signals_history_item_page_mobile_1s34">
                    <div class="signals_history_item_page_A364G3">
                        <div class="signals_history_item_A334G5">
                            <?php foreach($signalsHistoryItemMobile as $signalHistoryItemMobile): ?>
                                <div class="signals_history_item <?=$signalsType[$signalHistoryItemMobile->type_id]['class'];?>
                                    <?php if(in_array($signalHistoryItemMobile->id, (array) $signalsViewed)): ?>
                                        viewed
                                    <?php endif; ?>
                                    ">
                                    <a id="M<?=$signalHistoryItemMobile->id;?>" data-id="<?=$signalHistoryItemMobile->id;?>" href='signal/add?id=<?=$signalHistoryItem->id;?>' class="signals_history_item_inner modal_msw">
                                        <?php if(in_array($signalHistoryItemMobile->id, (array) $signalsViewed)): ?>
                                            <div class="signals_history_item_viewed_card">
                                                <div class="signals_history_itemviewed_card_inner">
                                                    <svg class="signals_history_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
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
                                        <div class="signals_history_item_viewed_card js">
                                            <div class="signals_history_item_viewed_card_inner">
                                                <svg class="signals_history_item_viewed_card_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.533 512.533" style="enable-background:new 0 0 512.533 512.533;" xml:space="preserve">
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
                                        <div class="signals_history_item_result
                                        <?php if(!empty($signalHistoryItemMobile->result_plus)):?>
                                        plus
                                        <?php endif; ?>
                                        <?php if(!empty($signalHistoryItemMobile->result_minus)):?>
                                        minus
                                        <?php endif; ?>
                                        <?php if(empty($signalHistoryItemMobile->result_plus) && empty($signalHistoryItemMobile->result_minus)):?>
                                        cancel
                                        <?php endif; ?>
                                            ">
                                            <?php if(!empty($signalHistoryItemMobile->result_plus)): ?>
                                                <div class="signals_history_item_result_text">
                                                    +<?=$signalHistoryItemMobile->result_plus;?> points
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty($signalHistoryItemMobile->result_minus)): ?>
                                                <div class="signals_history_item_result_text">
                                                    -<?=$signalHistoryItemMobile->result_minus;?> points
                                                </div>
                                            <?php endif; ?>
                                            <?php if(empty($signalHistoryItemMobile->result_plus) && empty($signalHistoryItemMobile->result_minus)): ?>
                                                <div class="signals_history_item_result_text">
                                                    Отменён
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="signals_history_item_upper">
                                            <div class="signals_history_item_bg" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$signalsCurrencies[$signalHistoryItemMobile->curr_id]['image'];?>");'>
                                            </div>
                                            <div class="signals_history_item_name">
                                                <?=$signalsCurrencies[$signalHistoryItemMobile->curr_id]['name'];?>
                                            </div>
                                            <div class="signals_history_item_profitability <?=$signalsType[$signalHistoryItemMobile->type_id]['class'];?>">
                                                <?=$signalsType[$signalHistoryItemMobile->type_id]['type'];?>
                                            </div>
                                        </div>
                                        <!--Chart-->
                                        <div class="signals_history_item_chart">
                                            <svg class="Chart__svgChartContainer_30V2_" viewBox="0 0 338 150">
                                                <!--Polyline-->
                                                <?php if($signalsType[$signalHistoryItemMobile->type_id]['id'] == 1): ?>
                                                    <polyline points="<?=$signalHistoryItemMobile->svg_path;?>" fill="none" stroke="#22a053" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                <?php endif; ?>
                                                <?php if($signalsType[$signalHistoryItemMobile->type_id]['id'] == 2): ?>
                                                    <polyline points="<?=$signalHistoryItemMobile->svg_path;?>" fill="none" stroke="#E01F19" stroke-width="1.5" stroke-linejoin="round"></polyline>
                                                <?php endif; ?>
                                                <!--Gradient-->
                                                <?php if($signalsType[$signalHistoryItemMobile->type_id]['id'] == 1): ?>
                                                    <defs><linearGradient id="<?=$signalHistoryItemMobile->id;?>RM" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#22a053;stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:#22a053;stop-opacity:0"></stop></linearGradient></defs>
                                                <?php endif; ?>
                                                <?php if($signalsType[$signalHistoryItemMobile->type_id]['id'] == 2): ?>
                                                    <defs><linearGradient id="<?=$signalHistoryItemMobile->id;?>RM" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgb(224, 31, 25);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgb(224, 31, 25);stop-opacity:0"></stop></linearGradient></defs>
                                                <?php endif; ?>
                                                <!--Path-->
                                                <path d="M 0,150 L <?=$signalHistoryItemMobile->svg_path;?>, 150" fill="url(#<?=$signalHistoryItemMobile->id;?>RM)"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!--Article Pagination-->
                        <?php if($pagination_item->countPages > 1): ?>
                        <div class="history_pagination grids">
                            <?=$pagination_item;?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!--Article Pagination Mobile-->
                    <?php if($mobile_pagination_item->countPages > 1): ?>
                        <div class="history_pagination_mobile grids_mobile">
                            <?=$mobile_pagination_item;?>
                        </div>
                    <?php endif; ?>
    
    
    
                    <?php if(!empty($_GET['id'])):?>
                        <?php if(is_numeric($_GET['id']) == 1):?>
                            <?php $ideasID = R::getCol( 'SELECT `id` FROM signals');?>
                            <?php if(in_array($_GET['id'],$ideasID)):?>
                                <div class="this_element" data-id="<?=$_GET['id'];?>">
                                </div>
                                <script>
                                    // Modal Signal Window Ajax
                                    $.removeCookie('ideas_ajax', { path: '/' });
                                    $.removeCookie('history_ajax', { path: '/' });
                                    var id = $('.this_element').data('id');
                                    $.cookie('history_ajax', id, { expires: 90, path: '/' });
                                    <?php if(!empty($_GET['page'])): ?>
                                    <?php if(is_numeric($_GET['page']) == 1):?>
                                    document.location.href = 'http://atrade.ru/ideas/history/grid?page=' + <?= $_GET['page'];?>;
                                    <?php endif; ?>
                                    <?php else: ?>
                                    document.location.href = 'http://atrade.ru/ideas/history/grid';
                                    <?php endif; ?>
                                </script>
                            <?php elseif(!empty($_GET['page'])): ?>
                                <?php if(is_numeric($_GET['page']) == 1):?>
                                    <?php $http  = '/ideas/history/grid?page=' . $_GET['page']; redirect($http);?>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php $http  = '/ideas/history/grid'; redirect($http);?>
                            <?php endif;?>
                        <?php else: ?>
                            <?php $http  = '/ideas/history/grid'; redirect($http);?>
                        <?php endif;?>
                    <?php endif; ?>
                    
                    <script>
                        // Modal Signal Window Ajax
                        $('body').on('click', '.modal_msw', function (e) {
                            e.preventDefault();
                            var id = $(this).data('id');
                            let hrefP;
                            <?php if(!empty($_GET['page'])): ?>
                            <?php if(is_numeric($_GET['page']) == 1):?>
                            history.pushState({}, '', '?page=' + <?= $_GET['page']; ?> + '&id=' + id);
                            hrefP = '/ideas/history/grid?page=' +  <?= $_GET['page']; ?>;
                            <?php endif; ?>
                            <?php else: ?>
                            history.pushState({}, '', '?id=' + id);
                            hrefP = '/ideas/history/grid';
                            <?php endif; ?>

                            $.ajax({
                                url: '/ideas/view',
                                data: {id: id},
                                type: 'GET',
                                success: function (res) {
                                    showSignal(res,hrefP);

                                },
                                error: function () {
                                    alert('Ошибка, попробуйте позже');
                                }
                            });
                        });
    

                        // при синхронном запросе
                        if($.cookie('history_ajax') != null) {
                            var ctr = $.cookie('history_ajax');
                            let hrefP;
                            setTimeout(function () {
                                <?php if(!empty($_GET['page'])): ?>
                                <?php if(is_numeric($_GET['page']) == 1):?>
                                history.pushState({}, '', '/ideas/history/grid?page=' + <?=$_GET['page'];?> + '&id=' + ctr);
                                hrefP = '/ideas/history/grid?page=' +  <?= $_GET['page']; ?>;
                            <?php endif; ?>
                                <?php else: ?>
                                    history.pushState({}, '', '/ideas/history/grid?id=' + ctr);
                                hrefP = '/ideas/history/grid';
                                <?php endif; ?>


                                $.ajax({
                                    url: '/ideas/view',
                                    data: {id: ctr},
                                    type: 'GET',
                                    success: function (res) {
                                        showSignal(res, hrefP);

                                    },
                                    error: function () {
                                        alert('Ошибка, попробуйте позже');
                                    }
                                });

                                $('.signal_modal_window').addClass('open');
                                $('#preloader_modal').addClass('open');
                                $('.header').addClass('modal_window');
                                $('.subheader').addClass('modal_window');
                                $('body').addClass('modal_window');
                                $('html').addClass('modal_window');
                            },400);

                        }

                        // показываем модальное окно
                        function showSignal(signal, href) {
                            $('#modal_signal .signal_modal_window_inner').html(signal);
                            document.querySelector('#href-page').dataset.hrefPage = href;
                            setTimeout(function () {
                                $('#modal_signal').removeClass('open');
                                $('#preloader_modal').removeClass('open');
                                $('#modal_signal').addClass('active');
                            }, 200);
                        };


                        //Close - если клик вне блока
                            $(document).mouseup(function (e){
                                var div = $(".signal_modal_window_inner");
                                var baseUrl;
                                
                                if (!div.is(e.target)
                                    && div.has(e.target).length === 0) {
                                    div.removeClass('active');
                                    $('#modal_signal').removeClass('open');
                                    $('#preloader_modal').removeClass('open');
                                    $('.signal_modal_window').removeClass('active');
                                    $('.header').removeClass('modal_window');
                                    $('.subheader').removeClass('modal_window');
                                    $('body').removeClass('modal_window');
                                    $('html').removeClass('modal_window');
                                    $.removeCookie('ideas_ajax', { path: '/' });
                                    $.removeCookie('history_ajax', { path: '/' });
    
                                    <?php if(!empty($_GET['page'])): ?>
                                    <?php if(is_numeric($_GET['page']) == 1):?>
                                    baseUrl = window.location.origin + '/ideas/history/grid?page=' + <?= $_GET['page']; ?>;
                                    window.history.pushState({}, '', baseUrl);
                                    <?php endif; ?>
                                    <?php else: ?>
                                    baseUrl = window.location.origin + '/ideas/history/grid';
                                    window.history.pushState({}, '', baseUrl);
                                    <?php endif; ?>
                                };
                            });
                      
                    
                    
                    
                    
                    </script>
                
                </div>
            </div>
            <?php endif; ?>
            
            <?php endif; ?>
        
        
        </div>
    </div>
</div>
</div>




<script src='/public/js/ideas/history/main.js'></script>
<script src="/public/libs/copy/app.js"></script>
<script src='/public/js/ideas/history/app.js'></script>

