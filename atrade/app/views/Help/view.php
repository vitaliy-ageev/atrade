<link rel="stylesheet" href="/public/css/FAQ/style.css">
<link rel="stylesheet" href="/public/css/FAQ/preloader/style.css">


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
                <!--Left Title-->
                <div class="left_title">
                    <div class="left_title_block">
                        <div id='up' class="left_title_text">
                            <?=$title;?>
                        </div>
                        
                        <!--Left Title Navigation-->
                        <div class="left_title_nav">
                            <div class="left_title_nav_inner">
                                <div class="left_title_nav_link_block">
                                    <a href="/help" class="left_title_nav_link" tabindex="-2">Страница помощи</a>
                                </div>
                                <?php if($alias == 'general'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href='/help/ideas' class="left_title_nav_link" tabindex="-2">Торговые идеи</a>
                                    </div>
                                <?php else: ?>
                                    <div class="left_title_nav_link_block">
                                        <a href='/help/general' class="left_title_nav_link" tabindex="-2">Общие вопросы</a>
                                    </div>
                                <?php endif; ?>
                                <?php if($alias == 'advisors'):?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/ideas" class="left_title_nav_link" tabindex="-2">Торговые идеи</a>
                                    </div>
                                <?php elseif($alias == 'articles'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/ideas" class="left_title_nav_link" tabindex="-2">Торговые идеи</a>
                                    </div>
                                <?php elseif($alias == 'calendar'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/signals" class="left_title_nav_link" tabindex="-2">Торговые идеи</a>
                                    </div>
                                <?php else: ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/advisors" class="left_title_nav_link" tabindex="-2">Торговые советники</a>
                                    </div>
                                <?php endif; ?>
                                <?php  if($alias == 'articles'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/advisors" class="left_title_nav_link" tabindex="-2">Торговые советники</a>
                                    </div>
                                <?php elseif($alias == 'calendar'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/advisors" class="left_title_nav_link" tabindex="-2">Торговые советники</a>
                                    </div>
                                <?php else: ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/articles" class="left_title_nav_link" tabindex="-2">Лента новостей</a>
                                    </div>
                                <?php endif; ?>
                                <?php if($alias == 'calendar'): ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/articles" class="left_title_nav_link" tabindex="-2">Лента новостей</a>
                                    </div>
                                <?php else: ?>
                                    <div class="left_title_nav_link_block">
                                        <a href="/help/calendar" class="left_title_nav_link" tabindex="-2">Календарь</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!--Left Title Navigation Mobile-->
                        <div class="left_title_nav_mobile">
                            <div class="left_title_nav_mobile_wrapper">
                                <div class="left_title_nav_mobile_inner">
                                    <div class="left_title_nav_mobile_link_block">
                                        <a href="/help" class="left_title_nav_mobile_link">Страница помощи
                                        </a>
                                    </div>
                                    <?php if($alias == 'general'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href='/help/ideas' class="left_title_nav_mobile_link" tabindex="-2">Торговые идеи</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href='/help/general' class="left_title_nav_mobile_link" tabindex="-2">Общие вопросы</a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($alias == 'advisors'):?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/ideas" class="left_title_nav_mobile_link" tabindex="-2">Торговые идеи</a>
                                        </div>
                                    <?php elseif($alias == 'articles'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/ideas" class="left_title_nav_mobile_link" tabindex="-2">Торговые идеи</a>
                                        </div>
                                    <?php elseif($alias == 'calendar'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/ideas" class="left_title_nav_mobile_link" tabindex="-2">Торговые идеи</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/advisors" class="left_title_nav_mobile_link" tabindex="-2">Торговые советники</a>
                                        </div>
                                    <?php endif; ?>
                                    <?php  if($alias == 'articles'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/advisors" class="left_title_nav_mobile_link" tabindex="-2">Торговые советники</a>
                                        </div>
                                    <?php elseif($alias == 'calendar'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/advisors" class="left_title_nav_mobile_link" tabindex="-2">Торговые советники</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/articles" class="left_title_nav_mobile_link" tabindex="-2">Лента новостей</a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($alias == 'calendar'): ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/articles" class="left_title_nav_mobile_link" tabindex="-2">Лента новостей</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/help/calendar" class="left_title_nav_mobile_link" tabindex="-2">Календарь</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_margin_TA">
                    <!--Main Content-->
                    <div class="main_content">
                        <div class="main_content_inner">
                            <?php if($questions): ?>
                                <div class="main_content_help_item_block">
                                    <?php foreach($questions as $item): ?>
                                        <!--Item-->
                                        <div data-id="<?=$item->id;?>" class="main_content_help_item">
                                            <!--Circle-->
                                            <div class="main_content_help_item_circle"></div>
                                            <!--Question-->
                                            <div class="main_content_help_item_question_block">
                                                <div class="main_content_help_item_question">
                                                    <?=$item->question;?>
                                                </div>
                                            </div>
                                            <!--Answer Block-->
                                            <div class="main_content_help_item_answer_block">
                                                <div class="main_content_help_item_answer_block_inner">
                                                    <!--Answer-->
                                                    <div class="main_content_help_item_answer">
                                                        <?=$item->answer;?>
                                                    </div>
                                                    <?php $links = \R::findAll('help_links', "question_id = ?", [$item->id]); ?>
                                                    <?php  if($links): ?>
                                                        <!--Links Block-->
                                                        <div class="main_content_help_item_links_block">
                                                            <?php foreach($links as $link): ?>
                                                                <!--Item-->
                                                                <div class="main_content_help_item_links_item">
                                                                    <!--Title-->
                                                                    <?=$link->title;?>:
                                                                    <!--Link-->
                                                                    <a href="https://<?=$link->link;?>" class="main_content_help_item_link" target="_blank" tabindex="-2">
                                                                        <?=$link->link;?>
                                                                    </a>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if(!isset($_COOKIE[$item->id . 'decides']) && !isset($_COOKIE[$item->id . 'ndecides'])): ?>
                                                        <!--Button Block-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block">
                                                            <div class="main_content_help_item_answer_btn_block_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_decides">
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_dsnt_decides">
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback-->
                                                        <div class="main_content_help_item_answer_btn_feedback">
                                                            <div class="main_content_help_item_answer_btn_feedback_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_feedback_thanks_vote">
                                                                    <div class="main_content_help_item_answer_btn_feedback_thanks_vote_inner">
                                                                        <!--Text-->
                                                                        Мы рады, что смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div data-id='<?=$item->id;?>' class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_feedback_didnt_help">
                                                                    <div id='didnt_help_block'>
                                                                        <!--Text-->
                                                                        Нам жаль, что мы не смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div data-id='<?=$item->id;?>' class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif(isset($_COOKIE[$item->id . "decides"])): ?>
                                                        <!--Button Block-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block active">
                                                            <div class="main_content_help_item_answer_btn_block_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_decides active">
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_dsnt_decides">
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback-->
                                                        <div class="main_content_help_item_answer_btn_feedback">
                                                            <div class="main_content_help_item_answer_btn_feedback_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_feedback_thanks_vote active">
                                                                    <div class="main_content_help_item_answer_btn_feedback_thanks_vote_inner">
                                                                        <!--Text-->
                                                                        Мы рады, что смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div data-id='<?=$item->id;?>' class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_feedback_didnt_help">
                                                                    <div id='didnt_help_block'>
                                                                        <!--Text-->
                                                                        Нам жаль, что мы не смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif(isset($_COOKIE[$item->id . "ndecides"])): ?>
                                                        <!--Button Block-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block active">
                                                            <div class="main_content_help_item_answer_btn_block_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_decides">
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_dsnt_decides active">
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback-->
                                                        <div class="main_content_help_item_answer_btn_feedback">
                                                            <div class="main_content_help_item_answer_btn_feedback_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_feedback_thanks_vote">
                                                                    <div class="main_content_help_item_answer_btn_feedback_thanks_vote_inner">
                                                                        <!--Text-->
                                                                        Мы рады, что смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div data-id='<?=$item->id;?>' class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_feedback_didnt_help active">
                                                                    <div id='didnt_help_block'>
                                                                        <!--Text-->
                                                                        Нам жаль, что мы не смогли Вам помочь!
                                                                        <!--Cancel-->
                                                                        <div data-id='<?=$item->id;?>' class='thanks_vote_cancel'>
                                                                            Отмена
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if(!isset($_COOKIE[$item->id . 'decides']) && !isset($_COOKIE[$item->id . 'ndecides'])): ?>
                                                        <!--Button Block Mobile-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block_mobile">
                                                            <div class="main_content_help_item_answer_btn_block_mobile_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_decides">
                                                                    <!--Svg-->
                                                                    <svg id="happy_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle id='happy_smile_cicle' cx="12" cy="12" r="12"/><g id='happy_smile_g'><path d="m9.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m18.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m12 20.032c-2.003 0-4.006-.762-5.53-2.287-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.275-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.526 1.525-3.529 2.287-5.532 2.287z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_dsnt_decides">
                                                                    <!--Svg-->
                                                                    <svg  id="bad_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" id='bad_smile_circle' r="12"/><g id='bad_smile_g'><path d="m7.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m16.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m15.25 18h-6.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h6.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback Mobile-->
                                                        <div class="main_content_help_item_answer_btn_feedback_mobile">
                                                            <div class="main_content_help_item_answer_btn_feedback_mobile_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_thanks_vote">
                                                                    <!--Svg-->
                                                                    <svg id="thanks_vote" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#ffd54f" r="12"/><g fill="#6d4c41"><path d="m12 20.036c-2.089 0-4.053-.813-5.53-2.291-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.276-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.479 1.477-3.443 2.291-5.532 2.291z"/><path d="m9.25 10h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/><circle cx="17" cy="9" r="2"/></g></svg>
                                                                    <!--Text-->
                                                                    Спасибо за Ваш голос!
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_didnt_help">
                                                                    <!--Text-->
                                                                    Если у Вас остались вопросы, то напишите нам о своей проблеме и мы постараемся ее решить в ближайшее время!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif(isset($_COOKIE[$item->id . "decides"])): ?>
                                                        <!--Button Block Mobile-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block_mobile active">
                                                            <div class="main_content_help_item_answer_btn_block_mobile_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_decides active">
                                                                    <!--Svg-->
                                                                    <svg id="happy_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle id='happy_smile_cicle' cx="12" cy="12" r="12"/><g id='happy_smile_g'><path d="m9.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m18.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m12 20.032c-2.003 0-4.006-.762-5.53-2.287-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.275-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.526 1.525-3.529 2.287-5.532 2.287z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_dsnt_decides">
                                                                    <!--Svg-->
                                                                    <svg  id="bad_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" id='bad_smile_circle' r="12"/><g id='bad_smile_g'><path d="m7.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m16.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m15.25 18h-6.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h6.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback Mobile-->
                                                        <div class="main_content_help_item_answer_btn_feedback_mobile">
                                                            <div class="main_content_help_item_answer_btn_feedback_mobile_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_thanks_vote active">
                                                                    <!--Svg-->
                                                                    <svg id="thanks_vote" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#ffd54f" r="12"/><g fill="#6d4c41"><path d="m12 20.036c-2.089 0-4.053-.813-5.53-2.291-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.276-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.479 1.477-3.443 2.291-5.532 2.291z"/><path d="m9.25 10h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/><circle cx="17" cy="9" r="2"/></g></svg>
                                                                    <!--Text-->
                                                                    Спасибо за Ваш голос!
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_didnt_help">
                                                                    <!--Text-->
                                                                    Если у Вас остались вопросы, то напишите нам о своей проблеме и мы постараемся ее решить в ближайшее время!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif(isset($_COOKIE[$item->id . "ndecides"])): ?>
                                                        <!--Button Block Mobile-->
                                                        <div data-id='<?=$item->id;?>' class="main_content_help_item_answer_btn_block_mobile active">
                                                            <div class="main_content_help_item_answer_btn_block_mobile_inner">
                                                                <!--Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_decides">
                                                                    <!--Svg-->
                                                                    <svg id="happy_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle id='happy_smile_cicle' cx="12" cy="12" r="12"/><g id='happy_smile_g'><path d="m9.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m18.5 10.25c-.414 0-.75-.336-.75-.75 0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25c0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-1.517 1.233-2.75 2.75-2.75s2.75 1.233 2.75 2.75c0 .414-.336.75-.75.75z"/><path d="m12 20.032c-2.003 0-4.006-.762-5.53-2.287-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.275-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.526 1.525-3.529 2.287-5.532 2.287z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это решает мою проблему
                                                                </div>
                                                                <!--Doesn't Decides-->
                                                                <div class="main_content_help_item_answer_btn_mobile_dsnt_decides active">
                                                                    <!--Svg-->
                                                                    <svg  id="bad_smile" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" id='bad_smile_circle' r="12"/><g id='bad_smile_g'><path d="m7.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m16.5 11c-1.379 0-2.5-1.122-2.5-2.5 0-.414.336-.75.75-.75s.75.336.75.75c0 .551.448 1 1 1s1-.449 1-1c0-.414.336-.75.75-.75s.75.336.75.75c0 1.378-1.121 2.5-2.5 2.5z"/><path d="m15.25 18h-6.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h6.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g></svg>
                                                                    <!--Text-->
                                                                    Это не решает мою проблему
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Button Feedback Mobile-->
                                                        <div class="main_content_help_item_answer_btn_feedback_mobile">
                                                            <div class="main_content_help_item_answer_btn_feedback_mobile_inner">
                                                                <!--Thanks for vote-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_thanks_vote active">
                                                                    <!--Svg-->
                                                                    <svg id="thanks_vote" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#ffd54f" r="12"/><g fill="#6d4c41"><path d="m12 20.036c-2.089 0-4.053-.813-5.53-2.291-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0c1.194 1.194 2.781 1.852 4.47 1.852s3.276-.658 4.47-1.852c.293-.293.768-.293 1.061 0s.293.768 0 1.061c-1.479 1.477-3.443 2.291-5.532 2.291z"/><path d="m9.25 10h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/><circle cx="17" cy="9" r="2"/></g></svg>
                                                                    <!--Text-->
                                                                    Спасибо за Ваш голос!
                                                                </div>
                                                                <!--Why didn't help-->
                                                                <div class="main_content_help_item_answer_btn_mobile_feedback_didnt_help active">
                                                                    <!--Text-->
                                                                    Если у Вас остались вопросы, то напишите нам о своей проблеме и мы постараемся ее решить в ближайшее время!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($support_contacts): ?>
                        <!--Right Sidebar-->
                        <div class="right_sidebar">
                            <div class="right_sidebar_inner">
                                <!--Support Contancts-->
                                <div class="right_sidebar_support_contacts" id="asideItem2">
                                    <div class="right_sidebar_support_contacts_inner">
                                        <?php foreach($support_contacts as $item): ?>
                                            <!--Item-->
                                            <a href="<?=$item->link;?>"  class="right_sidebar_support_contacts_item" target="_blank" tabindex="-2">
                                                <!--Background-->
                                                <div class="right_sidebar_support_contacts_item_bg">
                                                    <!--Svg-->
                                                    <?=$item->svg_icon_ip;?>
                                                </div>
                                                <!--Name-->
                                                <div class="right_sidebar_support_contacts_item_name_block">
                                                    <div class="right_sidebar_support_contacts_item_title">
                                                        <?=$item->name;?>:
                                                    </div>
                                                    <div class="right_sidebar_support_contacts_item_name">
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
                            <a href='/feedback' class="help_ask_question_button">
                                Задать вопрос
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--Go Back-->
<a href="/help" class="go_back_btn" tabindex="-2">
    <div class="go_back_btn_inner">
        <div class="go_back_btn_block">
            <!--Svg Arrow Icon-->
            <svg class='go_back_icon' version="1.1" id="arrow_back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                 xml:space="preserve">
  <g>
      <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
      L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
      c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
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
            <div class="go_back_text">
                Назад
            </div>
        </div>
    </div>
</a>




<script src='/public/js/FAQ/main.js'></script>
<script src='/public/js/FAQ/app.js'></script>