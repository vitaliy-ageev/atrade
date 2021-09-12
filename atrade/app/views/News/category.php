<link rel="stylesheet" href="<?=STYLE_ARTS;?>/style.css">
<link rel="stylesheet" href="<?=STYLE_ARTS;?>/preloader/style.css">


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
                            Лента новостей
                        </div>
                        <!--Left Title Navigation-->
                        <?php if($cats): ?>
                            <div class="left_title_nav">
                                <div class="left_title_nav_inner">
                                    <div class="left_title_nav_link_block">
                                        <a href="/news" class="left_title_nav_link">Все новости</a>
                                    </div>
                                    <?php foreach($cats as $cat): ?>
                                        <div class="left_title_nav_link_block">
                                            <a href="<?=$cat->alias;?>"
                                                    <?php if($cat->alias === $category->alias): ?>
                                                        class="left_title_nav_link active"
                                                    <?php endif; ?>
                                               class="left_title_nav_link"><?=$cat->title;?></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!--Left Title Navigation Mobile-->
                        <?php if($cats): ?>
                            <div class="left_title_nav_mobile">
                                <div class="left_title_nav_mobile_wrapper">
                                    <div class="left_title_nav_mobile_inner">
                                        <div class="left_title_nav_mobile_link_block">
                                            <a href="/news" class="left_title_nav_mobile_link">Все новости</a>
                                        </div>
                                        <?php foreach($cats as $cat): ?>
                                            <div class="left_title_nav_mobile_link_block">
                                                <a href="<?=$cat->alias;?>"
                                                        <?php if($cat->alias === $category->alias): ?>
                                                            class="left_title_nav_mobile_link active"
                                                        <?php endif; ?>
                                                   class="left_title_nav_mobile_link"><?=$cat->title;?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!--Articles Page-->
                <div class="articles_page">
                    <!--Main Content-->
                    <div class="AP_main_content">
                        <div class="AP_main_content_inner">
                            <?php if($articles): ?>
                                <!--Articles Item Block-->
                                <div id="articles_page" class="articles_item_block">
                                    <?php foreach ($articles as $article): ?>
                                        <!--Articles Item-->
                                        <div class="articles_item">
                                            <a href='/news/<?=$article->alias;?>' class="articles_item_inner">
                                                <!--Content-->
                                                <div class="articles_item_content">
                                                    <!--Left-->
                                                    <div class="articles_item_content_left">
                                                        <!--Date-->
                                                        <div class="articles_item_date">
                                                            <?php if(date('d-m-Y') ==  $article->date): ?>
                                                                Сегодня
                                                            <?php endif; ?>
                                                            <?php if(date('d-m-Y') != $article->date && date('d-m-Y', strtotime('yesterday'))  == $article->date): ?>
                                                                Вчера
                                                            <?php endif; ?>
                                                            <?php if(date('d-m-Y') !=  $article->date && date('d-m-Y', strtotime('yesterday')) != $article->date): ?>
                                                                <?=$article->day;?>
                                                            <?php endif; ?>
                                                            <?php if(date('Y') != $article->year): ?>
                                                                <?=$article->year;?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!--Title-->
                                                        <div class="articles_item_title">
                                                            <?=$article->title;?>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="articles_item_text">
                                                            <?=$article->preview_text;?>
                                                        </div>
                                                    </div>
                                                    <!--Right-->
                                                    <div class="articles_item_content_right">
                                                        <!--Background-->
                                                        <div class="articles_item_bg" style="background-image: url('/public/images/news/bg/desktop/<?=$article->image;?>');">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Footer-->
                                                <div class="articles_item_footer">
                                                    <!--Button-->
                                                    <a href='' class="articles_item_btn">
    <span class="articles_item_btn_text">
    Подробнее
    </span>
                                                        <!--Svg-->
                                                        <svg class='articles_item_btn_icon' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g id="simple-link-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M19.5857864,11 L17.2928932,8.70710678 C16.9023689,8.31658249 16.9023689,7.68341751 17.2928932,7.29289322 C17.6834175,6.90236893 18.3165825,6.90236893 18.7071068,7.29289322 L22.7071068,11.2928932 C23.0976311,11.6834175 23.0976311,12.3165825 22.7071068,12.7071068 L18.7071068,16.7071068 C18.3165825,17.0976311 17.6834175,17.0976311 17.2928932,16.7071068 C16.9023689,16.3165825 16.9023689,15.6834175 17.2928932,15.2928932 L19.5857864,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 L19.5857864,11 Z" id="Combined-Shape" fill="#333" fill-rule="nonzero"></path></g></svg>
                                                    </a>
                                                    <!--Border-->
                                                    <div class="articles_item_border"></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!--Article Pagination-->
                                <?php if($pagination->countPages > 1): ?>
                                    <?=$pagination;?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <?php if($articlesInTrend): ?>
                        <!--Right Sidebar-->
                        <div class="AP_right_sidebar">
                            <!--In Trend-->
                            <div class="article_in_trend fixation_artcl" id='aside2'>
                                <!--Title-->
                                <div class="article_in_trend_title">
                                    В тренде
                                </div>
                                <!--In Trend Block-->
                                <div id='in_trend' class="article_in_trend_block">
                                    <?php foreach ($articlesInTrend as $articleInTrend): ?>
                                        <!--In Trend Item-->
                                        <a href='/news/<?=$articleInTrend->alias;?>' class="article_in_trend_item">
                                            <!--Date-->
                                            <div class="article_in_trend_item_date">
                                                <?php if(date('d-m-Y') ==  $articleInTrend->date): ?>
                                                    Сегодня
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') != $articleInTrend->date && date('d-m-Y', strtotime('yesterday'))  == $articleInTrend->date): ?>
                                                    Вчера
                                                <?php endif; ?>
                                                <?php if(date('d-m-Y') !=  $articleInTrend->date && date('d-m-Y', strtotime('yesterday')) != $articleInTrend->date): ?>
                                                    <?=$articleInTrend->day;?>
                                                <?php endif; ?>
                                                <?php if(date('Y') != $articleInTrend->year): ?>
                                                    <?=$articleInTrend->year;?>
                                                <?php endif; ?>
                                            </div>
                                            <!--Title-->
                                            <div class="article_in_trend_item_title">
                                                <?=$articleInTrend->title;?>
                                            </div>
                                            <!--Border-->
                                            <div class="article_in_trend_item_border"></div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!--Articles Page Mobile-->
                <div class="articles_page_mobile">
                    <div class="articles_page_mobile_inner">
                        <?php if($articlesMobile): ?>
                            <div class="articles_item_mobile_block">
                                <?php foreach ($articlesMobile as $articleMobile): ?>
                                    <!--Articles Page Mobile Item-->
                                    <a href='/news/<?=$articleMobile->alias;?>' class="articles_page_mobile_item">
                                        <div class="articles_page_mobile_item_inner">
                                            <!--Left-->
                                            <div class="articles_page_mobile_item_left">
                                                <!--Background-->
                                                <div class="articles_page_mobile_item_img" style="background-image: url('/public/images/news/bg/mobile/<?=$articleMobile->image;?>');"></div>
                                            </div>
                                            <!--Right-->
                                            <div class="articles_page_mobile_item_right">
                                                <!--Title-->
                                                <div class="articles_page_mobile_item_title">
                                                    <?=$articleMobile->title;?>
                                                </div>
                                                <!--Title 600-->
                                                <div class="articles_item_title_600">
                                                    <?=$articleMobile->title_600;?>
                                                </div>
                                                <!--Date-->
                                                <div class="articles_page_mobile_item_date">
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
                                        <div class="articles_page_mobile_item_border"></div>
                                    </a>
                                <?php endforeach;  ?>
                            </div>
                            <!--Article Pagination Mobile-->
                            <?php if($mobile_pagination->countPages > 1): ?>
                                <?=$mobile_pagination;?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>


<script src='<?=JS_ARTS;?>/main.js'></script>
<script src='<?=JS_ARTS;?>/app.js'></script>