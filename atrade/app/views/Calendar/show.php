<link rel="stylesheet" href="<?=STYLE_CR;?>/style.css">
<link rel="stylesheet" href="<?=STYLE_CR;?>/preloader/style.css">


<!--Preloader-->
<div class="preloader" id="preloader">
    <div class="container">
        <div class="preloader_inner">
            <div class="container_margin">
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
</div>




<!--Main Page-->
<div id='up' class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <!--Economic Calendar-->
                <div class="economic_calendar">
                    <!--Left Title-->
                    <div class="left_title">
                        <div class="left_title_block">
                            <div class="left_title_text">
                                Экономический календарь
                            </div>
                            <div class="left_title_text_mobile">
                                Календарь
                            </div>
                        </div>
                    </div>
                    <div class="economic_calendar_inner">
                        <!--Current Time-->
                        <div class="current_time">
                            <!--Title-->
                            <div class="current_time_title">
                                Текущее время:
                            </div>
                            <!--Value-->
                            <div class="current_time_value">
                                <!--Data-->
                                <div class="current_data">
                                    <?php date_default_timezone_set("Europe/Moscow"); $month = date('m')-1;
                                        echo $months[$month] . ' ' . date('d') . ', ' . date('H:i');?>
                                </div>
                                <!--Timezone-->
                                <div class="current_timezone">
                                    <?php date_default_timezone_set("Europe/Moscow"); echo '(UTC ' . date('P') . ')';?>
                                </div>
                            </div>
                        </div>
                        <?php if($calendar_days): ?>
                            <!--Calendar Day-->
                            <div class="economic_calendar_day_block">
                                <div class="economic_calendar_day_block_inner">
                                    <?php foreach($calendar_days as $calendar_day): ?>
                                        <!--Calendar Day Item-->
                                        <a href="/calendar/show/<?=$calendar_day->alias;?>" class="calendar_day_item <?php if($calendar_day->alias === $thisDay->alias) echo 'active' ?>">
                                            <div class="calendar_day_item_inner">
                                                <!--Datetime-->
                                                <div class="calendar_day_item_datetime">
                                                    <div class="calendar_day_item_datetime_nubmer">
                                                        <?=$calendar_day->day;?>
                                                    </div>
                                                    <div class="calendar_day_item_datetime_month">
                                                        <?=$calendar_day->month;?>
                                                    </div>
                                                    <div class="calendar_day_item_datetime_day">
                                                        <?=$calendar_day->name;?>
                                                    </div>
                                                </div>
                                                <!--Events-->
                                                <?php $count = \R::count('calendar_events', 'day_id = ?', [$calendar_day->id]); ?>
                                                <div class="calendar_day_item_events <?php if($count == 0) echo 'empty'; ?>">
                                                    <?php echo $count; ?>
                                                    <?php if($count == 0): ?>
                                                        событий
                                                    <?php elseif ($count == 1): ?>
                                                        событие
                                                    <?php elseif ($count >= 1 && $count < 5): ?>
                                                        события
                                                    <?php elseif ($count >= 5 && $count < 21): ?>
                                                        событий
                                                    <?php elseif ($count == 21): ?>
                                                        событие
                                                    <?php elseif ($count >= 22 && $count < 25): ?>
                                                        события
                                                    <?php elseif ($count >= 25 && $count < 31 ): ?>
                                                        событий
                                                    <?php elseif ($count == 31): ?>
                                                        событие
                                                    <?php elseif ($count >= 32 && $count < 35): ?>
                                                        события
                                                    <?php elseif ($count >= 35 && $count < 41 ): ?>
                                                        событий
                                                    <?php elseif ($count == 41): ?>
                                                        событие
                                                    <?php elseif ($count >= 42 && $count < 45): ?>
                                                        события
                                                    <?php elseif ($count >= 45 && $count < 51 ): ?>
                                                        событий
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!--Ecomonic Events-->
                        <div id='hidden-calendar-events' class="economic_events">
                            <div class="economic_events_inner">
                                <!--Economic Events Title-->
                                <div class="economic_events_title">
                                    <!--Left-->
                                    <div class="economic_events_title_left">
                                        <div class="economic_events_title_time">
                                            Время
                                        </div>
                                        <div class="economic_events_title_currency">
                                            Валюта
                                        </div>
                                        <div class="economic_events_title_importance">
                                            Важность
                                        </div>
                                        <div class="economic_title_events">
                                            Событие
                                        </div>
                                    </div>
                                    <!--Right-->
                                    <div class="economic_events_title_right">
                                        <div class="economic_events_title_now">
                                            Сейчас
                                        </div>
                                        <div class="economic_events_title_prognose">
                                            Прогноз
                                        </div>
                                        <div class="economic_events_title_before">
                                            Раньше
                                        </div>
                                        <div class="economic_events_title_data">
                                            Данные
                                        </div>
                                    </div>
                                </div>
                                <!--Economic Events Calendar Block-->
                                <div id='calendar_loader' class="economic_events_calendar_block">
                                    <!--Economic Events Calendar-->
                                    <div class="economic_events_calendar">
                                        <div class="economic_events_calendar_day">
                                            <?=$thisDay->fullname;?>,
                                        </div>
                                        <div class="economic_events_calendar_data">
                                            <?=$thisDay->day;?> <?=$thisDay->fullmonth;?> <?=$thisDay->year;?> г.
                                        </div>
                                    </div>
                                    <?php if($calendar_events): ?>
                                        <?php foreach($calendar_events as $calendar_event): ?>
                                            <!--Economic Events Calendar Row-->
                                            <div class="economic_events_calendar_row">
                                                <div class="economic_events_calendar_row_wrapper <?php if($calendar_event->description == null) echo 'nodesc';?>">
                                                    <!--Left-->
                                                    <div class="economic_events_calendar_row_left">
                                                        <!--Time-->
                                                        <div class="economic_events_calendarr_time">
                                                            <?=$calendar_event->time;?>
                                                        </div>
                                                        <div class="economic_events_calendar_row_left_container">
                                                            <div class="economic_events_calendar_row_left_container_block">
                                                                <!--Currency Block-->
                                                                <div class="economic_events_calendar_currency">
                                                                    <div class="economic_events_calendar_currency_img" style='background-image: url("<?=IMG_BASE?>/currency/svg/<?=$currencies[$calendar_event->curr_id]['image'];?>");'></div>
                                                                    <div class="economic_events_calendar_currency_value"><?=$currencies[$calendar_event->curr_id]['code'];?>
                                                                    </div>
                                                                </div>
                                                                <!--Impact-->
                                                                <div class="economic_events_calendarr_impact <?php if($calendar_event->impact == 1) echo 'one';?><?php if($calendar_event->impact == 2) echo 'two';?><?php if($calendar_event->impact == 3) echo 'three';?>">
                                                                    <!--Svg Impact Orange Icon-->
                                                                    <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                                            <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                                        </use></svg>
                                                                    <!--Svg Impact Orange Icon-->
                                                                    <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                                            <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                                        </use></svg>
                                                                    <!--Svg Impact Grey Icon-->
                                                                    <svg class="Economic__impactItem"><use xlink:href="#icon_general_hot">
                                                                            <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                                        </use></svg>
                                                                </div>
                                                                <?php if($calendar_event->is_report == 1): ?>
                                                                    <!--Report Mobile-->
                                                                    <div id='report_mobile' class="economic_events_calendarr_report_mobile active">
                                                                        <svg class="Economic__icon_report_mobile"><use xlink:href="#icon_general_document">
                                                                                <svg viewBox="0 0 12 14" id="icon_general_document"><g fill="currentColor"><path d="M10.95 2.026H8.887V.39a.39.39 0 0 0-.39-.39H.406a.388.388 0 0 0-.389.39v10.77c0 .214.173.387.388.387H2.04v2.062c0 .214.173.387.388.387h5.878c.102 0 .2-.04.276-.113l2.64-2.64a.387.387 0 0 0 .113-.275V2.413a.383.383 0 0 0-.386-.388zm-8.91.388v8.356H.793V.777H8.11v1.25H2.43a.389.389 0 0 0-.39.387zm6.658 10.258v-1.315h1.314l-1.314 1.315zm1.863-2.092H8.31a.39.39 0 0 0-.39.39v2.25h-5.1V2.803h7.74v7.777z"></path><path d="M9.293 4.16H4.087a.39.39 0 0 0 0 .78h5.206a.389.389 0 0 0 .388-.39.388.388 0 0 0-.387-.39zm0 2.176H4.087a.389.389 0 1 0 0 .778h5.206a.389.389 0 0 0 .001-.778zm0 2.171H4.087a.39.39 0 1 0 0 .778h5.206a.388.388 0 0 0 .388-.39.387.387 0 0 0-.387-.388zM6.482 10.68H4.087a.389.389 0 1 0 0 .776h2.395a.389.389 0 1 0 0-.778z"></path></g></svg></use></svg>
                                                                        <span id='report_tooltip_mobile' aria-label="Отчёт"></span>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($calendar_event->is_speech == 1): ?>
                                                                    <!--Speech Mobile-->
                                                                    <div id='speech_mobile' class="economic_events_calendarr_speech_mobile active">
                                                                        <svg class="Economic__icon_speech_mobile active"><use xlink:href="#icon_general_speech">
                                                                                <svg viewBox="0 0 18 14" id="icon_general_speech"><path d="M12.174.08l-8.68 4.716h-3A.494.494 0 0 0 0 5.289v3.445c0 .27.22.493.493.493h1.375a3.324 3.324 0 0 0 2.04 3.305c.413.172 2.313.663 3.86-.984l4.41 2.393c.554.204.73-.263.73-.432V.514c-.004-.172-.167-.62-.734-.432zM.987 8.245V5.78H3.13v2.464H.987zm3.302 3.38a2.335 2.335 0 0 1-1.43-2.393h.64l3.384 1.84a2.35 2.35 0 0 1-2.595.555zm-.176-3.18v-2.86L11.92 1.34v11.34L4.114 8.445zm11.991-5.512a.494.494 0 0 0-.698-.017l-1.477 1.41c-.197.19-.217.514-.02.698.24.213.606.105.7.01l1.477-1.403a.493.493 0 0 0 .017-.697zM17.24 6.52h-2.035a.492.492 0 1 0 .001.985h2.035a.494.494 0 0 0 0-.986zm-1.153 3.876L14.61 8.99a.494.494 0 1 0-.68.717l1.476 1.404c.094.092.48.202.698-.016a.49.49 0 0 0-.017-.698z" fill="currentColor"></path></svg></use></svg>
                                                                        <span id='speech_tooltip_mobile' aria-label="Выступление"></span>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                            <!--Event-->
                                                            <div class="economic_events_calendarr_event">
                                                                <?=$calendar_event->event;?>
                                                            </div>
                                                            <?php if($calendar_event->is_report == 1): ?>
                                                                <!--Report-->
                                                                <div id='report' class="economic_events_calendarr_report active">
                                                                    <svg class="Economic__icon_report"><use xlink:href="#icon_general_document">
                                                                            <svg viewBox="0 0 12 14" id="icon_general_document"><g fill="currentColor"><path d="M10.95 2.026H8.887V.39a.39.39 0 0 0-.39-.39H.406a.388.388 0 0 0-.389.39v10.77c0 .214.173.387.388.387H2.04v2.062c0 .214.173.387.388.387h5.878c.102 0 .2-.04.276-.113l2.64-2.64a.387.387 0 0 0 .113-.275V2.413a.383.383 0 0 0-.386-.388zm-8.91.388v8.356H.793V.777H8.11v1.25H2.43a.389.389 0 0 0-.39.387zm6.658 10.258v-1.315h1.314l-1.314 1.315zm1.863-2.092H8.31a.39.39 0 0 0-.39.39v2.25h-5.1V2.803h7.74v7.777z"></path><path d="M9.293 4.16H4.087a.39.39 0 0 0 0 .78h5.206a.389.389 0 0 0 .388-.39.388.388 0 0 0-.387-.39zm0 2.176H4.087a.389.389 0 1 0 0 .778h5.206a.389.389 0 0 0 .001-.778zm0 2.171H4.087a.39.39 0 1 0 0 .778h5.206a.388.388 0 0 0 .388-.39.387.387 0 0 0-.387-.388zM6.482 10.68H4.087a.389.389 0 1 0 0 .776h2.395a.389.389 0 1 0 0-.778z"></path></g></svg></use></svg>
                                                                    <span id='report_tooltip' aria-label="Отчёт"></span>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if($calendar_event->is_speech == 1): ?>
                                                                <!--Speech-->
                                                                <div id='speech' class="economic_events_calendarr_speech active">
                                                                    <svg class="Economic__icon_speech"><use xlink:href="#icon_general_speech">
                                                                            <svg viewBox="0 0 18 14" id="icon_general_speech"><path d="M12.174.08l-8.68 4.716h-3A.494.494 0 0 0 0 5.289v3.445c0 .27.22.493.493.493h1.375a3.324 3.324 0 0 0 2.04 3.305c.413.172 2.313.663 3.86-.984l4.41 2.393c.554.204.73-.263.73-.432V.514c-.004-.172-.167-.62-.734-.432zM.987 8.245V5.78H3.13v2.464H.987zm3.302 3.38a2.335 2.335 0 0 1-1.43-2.393h.64l3.384 1.84a2.35 2.35 0 0 1-2.595.555zm-.176-3.18v-2.86L11.92 1.34v11.34L4.114 8.445zm11.991-5.512a.494.494 0 0 0-.698-.017l-1.477 1.41c-.197.19-.217.514-.02.698.24.213.606.105.7.01l1.477-1.403a.493.493 0 0 0 .017-.697zM17.24 6.52h-2.035a.492.492 0 1 0 .001.985h2.035a.494.494 0 0 0 0-.986zm-1.153 3.876L14.61 8.99a.494.494 0 1 0-.68.717l1.476 1.404c.094.092.48.202.698-.016a.49.49 0 0 0-.017-.698z" fill="currentColor"></path></svg></use></svg>
                                                                    <span id='speech_tooltip' aria-label="Выступление"></span>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <!--Right-->
                                                    <div class="economic_events_calendar_row_right">
                                                        <?php if($calendar_event->now): ?>
                                                            <div class="economic_events_calendarr_actual">
                                                                <?=$calendar_event->now;?>
                                                            </div>
                                                        <?php else: ?><div class="economic_events_calendarr_actual">
                                                            -
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php if($calendar_event->prognose_buy): ?>
                                                            <div class="economic_events_calendarr_forecast up">
                                                                <?=$calendar_event->prognose_buy;?>
                                                            </div>
                                                        <?php elseif ($calendar_event->prognose_sell): ?>
                                                            <div class="economic_events_calendarr_forecast down">
                                                                <?=$calendar_event->prognose_sell;?>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="economic_events_calendarr_forecast">
                                                                -
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if($calendar_event->before_cr): ?>
                                                            <div class="economic_events_calendarr_previos">
                                                                <?=$calendar_event->before_cr;?>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="economic_events_calendarr_previos">
                                                                -
                                                            </div>
                                                        <?php endif; ?>
                                                        <!--Data Mobile-->
                                                        <div class="economic_events_calendar_row_data_mobile">
                                                            <div class="economic_events_calendar_row_data_mobile_inner">
                                                                <!--Item-->
                                                                <div class="economic_events_calendar_row_data_mobile_item">
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title">
                                                                        С:
                                                                    </div>
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title_550px">
                                                                        Сейчас:
                                                                    </div>
                                                                    <?php if($calendar_event->now): ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value">
                                                                            <?=$calendar_event->now;?>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value">
                                                                            -
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <!--Item-->
                                                                <div class="economic_events_calendar_row_data_mobile_item">
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title">
                                                                        П:
                                                                    </div>
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title_550px">
                                                                        Прогноз:
                                                                    </div>
                                                                    <?php if($calendar_event->prognose_buy): ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value up">
                                                                            <?=$calendar_event->prognose_buy;?>
                                                                        </div>
                                                                    <?php elseif ($calendar_event->prognose_sell): ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value down">
                                                                            <?=$calendar_event->prognose_sell;?>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value">
                                                                            -
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <!--Item-->
                                                                <div class="economic_events_calendar_row_data_mobile_item">
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title">
                                                                        Р:
                                                                    </div>
                                                                    <div class="economic_events_calendar_row_data_mobile_item_title_550px">
                                                                        Раньше:
                                                                    </div>
                                                                    <?php if($calendar_event->before_cr): ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value">
                                                                            <?=$calendar_event->before_cr;?>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <div class="economic_events_calendar_row_data_mobile_item_value">
                                                                            -
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($calendar_event->description): ?>
                                                    <!--Economic Events Calendar Row Description-->
                                                    <div class="economic_events_calendar_row_desc">
                                                        <?=$calendar_event->description;?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach;?>
                                    <?php else: ?>
                                        <!--Economic Calendar Row No Events-->
                                        <div class="economic_calendar_row_no_events">
                                            <span class="economic_calendar_row_no_events_text">
                                                Нет данных за этот период
                                            </span>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <!--Economic Calendar Designations-->
                        <div id='hidden-calendar' class="economic_calendar_designations">
                            <!--Left-->
                            <div class="economic_calendar_designations_left">
                                <!--Title-->
                                <div class="economic_calendar_designations_legend_title">
                                    Условные обозначения
                                </div>
                                <!--Legend-->
                                <div class="economic_calendar_designations_legend">
                                    <!--Left-->
                                    <div class="economic_calendar_designations_legend_left">
                                        <!--Economic Calendar Designations Legend Item-->
                                        <div class="economic_calendar_designations_importance_item">
                                            <!--Background-->
                                            <div class="economic_calendar_designations_legend_importance_item_bg one">
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                            </div>
                                            <!--Description-->
                                            <div class="economic_calendar_designations_importance_item_desc">
                                                Ожидается низкая волатильность
                                            </div>
                                        </div>
                                        <!--Economic Calendar Designations Legend Item-->
                                        <div class="economic_calendar_designations_importance_item">
                                            <!--Background-->
                                            <div class="economic_calendar_designations_legend_importance_item_bg two">
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                            </div>
                                            <!--Description-->
                                            <div class="economic_calendar_designations_importance_item_desc">
                                                Ожидается средняя волатильность
                                            </div>
                                        </div>
                                        <!--Economic Calendar Designations Legend Item-->
                                        <div class="economic_calendar_designations_importance_item">
                                            <!--Background-->
                                            <div class="economic_calendar_designations_legend_importance_item_bg three">
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                                <!--Svg-->
                                                <svg class="Economic__impactItem Economic__impactItem_active"><use xlink:href="#icon_general_hot">
                                                        <svg viewBox="0 0 12 14" id="icon_general_hot"><path fill="currentColor" d="M3.378 14c-1.075-1.15-.066-2.82.078-3.16C3.6 10.5 4.63 8.782 4.63 8.782s.61.802.366 2.058c1.077-1.214 1.28-3.15 1.118-3.89C8.547 8.673 9.587 11.235 8.186 14c7.455-4.273 1.854-10.666.88-11.387.324.72.386 1.94-.27 2.53C7.683.876 4.935 0 4.935 0c.324 2.202-1.18 4.61-2.628 6.408-.05-.878-.106-1.483-.56-2.324C1.643 5.68.44 6.98.114 8.577c-.44 2.165.33 3.75 3.263 5.423z"></path></svg>
                                                    </use></svg>
                                            </div>
                                            <!--Description-->
                                            <div class="economic_calendar_designations_importance_item_desc">
                                                Ожидается высокая волатильность
                                            </div>
                                        </div>
                                    </div>
                                    <!--Right-->
                                    <div class="economic_calendar_designations_legend_right">
                                        <div class="economic_calendar_designations_legend_right_L_block">
                                            <!--Economic Calendar Designations Reporting-->
                                            <div class="economic_calendar_designations_reporting">
                                                <!--Svg-->
                                                <svg class="Economic__icon Economic__icon_withText Economic__iconDocument"><use xlink:href="#icon_general_document">
                                                        <svg viewBox="0 0 12 14" id="icon_general_document"><g fill="currentColor"><path d="M10.95 2.026H8.887V.39a.39.39 0 0 0-.39-.39H.406a.388.388 0 0 0-.389.39v10.77c0 .214.173.387.388.387H2.04v2.062c0 .214.173.387.388.387h5.878c.102 0 .2-.04.276-.113l2.64-2.64a.387.387 0 0 0 .113-.275V2.413a.383.383 0 0 0-.386-.388zm-8.91.388v8.356H.793V.777H8.11v1.25H2.43a.389.389 0 0 0-.39.387zm6.658 10.258v-1.315h1.314l-1.314 1.315zm1.863-2.092H8.31a.39.39 0 0 0-.39.39v2.25h-5.1V2.803h7.74v7.777z"></path><path d="M9.293 4.16H4.087a.39.39 0 0 0 0 .78h5.206a.389.389 0 0 0 .388-.39.388.388 0 0 0-.387-.39zm0 2.176H4.087a.389.389 0 1 0 0 .778h5.206a.389.389 0 0 0 .001-.778zm0 2.171H4.087a.39.39 0 1 0 0 .778h5.206a.388.388 0 0 0 .388-.39.387.387 0 0 0-.387-.388zM6.482 10.68H4.087a.389.389 0 1 0 0 .776h2.395a.389.389 0 1 0 0-.778z"></path></g></svg></use></svg>
                                                <div class="economic_calendar_designations_reporting_desc">
                                                    Отчет
                                                </div>
                                            </div>
                                            <!--Economic Calendar Designations Speech-->
                                            <div class="economic_calendar_designations_speech">
                                                <!--Svg-->
                                                <svg class="Economic__icon Economic__icon_withText Economic__iconSpeech"><use xlink:href="#icon_general_speech">
                                                        <svg viewBox="0 0 18 14" id="icon_general_speech"><path d="M12.174.08l-8.68 4.716h-3A.494.494 0 0 0 0 5.289v3.445c0 .27.22.493.493.493h1.375a3.324 3.324 0 0 0 2.04 3.305c.413.172 2.313.663 3.86-.984l4.41 2.393c.554.204.73-.263.73-.432V.514c-.004-.172-.167-.62-.734-.432zM.987 8.245V5.78H3.13v2.464H.987zm3.302 3.38a2.335 2.335 0 0 1-1.43-2.393h.64l3.384 1.84a2.35 2.35 0 0 1-2.595.555zm-.176-3.18v-2.86L11.92 1.34v11.34L4.114 8.445zm11.991-5.512a.494.494 0 0 0-.698-.017l-1.477 1.41c-.197.19-.217.514-.02.698.24.213.606.105.7.01l1.477-1.403a.493.493 0 0 0 .017-.697zM17.24 6.52h-2.035a.492.492 0 1 0 .001.985h2.035a.494.494 0 0 0 0-.986zm-1.153 3.876L14.61 8.99a.494.494 0 1 0-.68.717l1.476 1.404c.094.092.48.202.698-.016a.49.49 0 0 0-.017-.698z" fill="currentColor"></path></svg></use></svg>
                                                <div class="economic_calendar_designations_speech_desc">
                                                    Выступление
                                                </div>
                                            </div>
                                        </div>
                                        <div class="economic_calendar_designations_legend_right_R_block">
                                            <!--Item-->
                                            <div class="economic_calendar_designations_legend_right_R_item">
                                                <div class="economic_calendar_designations_legend_right_R_item_title">
                                                    С:
                                                </div>
                                                <div class="economic_calendar_designations_legend_right_R_item_value">
                                                    Сейчас
                                                </div>
                                            </div>
                                            <!--Item-->
                                            <div class="economic_calendar_designations_legend_right_R_item">
                                                <div class="economic_calendar_designations_legend_right_R_item_title">
                                                    П:
                                                </div>
                                                <div class="economic_calendar_designations_legend_right_R_item_value">
                                                    Прогноз
                                                </div>
                                            </div>
                                            <!--Item-->
                                            <div class="economic_calendar_designations_legend_right_R_item">
                                                <div class="economic_calendar_designations_legend_right_R_item_title">
                                                    Р:
                                                </div>
                                                <div class="economic_calendar_designations_legend_right_R_item_value">
                                                    Раньше
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Right-->
                            <div class="economic_calendar_designations_right">
                                <!--About-->
                                <div class="economic_calendar_designations_about">
<span class="economic_calendar_designations_about_title">
Экономический календарь
</span> — это хроника основных событий финансового мира, новости, которые помогают понять, куда движется рынок. Выступления премьер-министров Великобритании и Японии, сообщения о безработице в США и Европе, индекс инфляции, ВВП и нефтяные прогнозы — все это влияет на настроение участников рынка. Вот почему удобный экономический календарь — незаменимый инструмент каждого трейдера.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src='<?=JS_CR;?>/main.js'></script>
<script src='<?=JS_CR;?>/app.js'></script>
