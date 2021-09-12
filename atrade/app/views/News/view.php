<link rel="stylesheet" href="<?=STYLE_ART;?>/style.css">
<link rel="stylesheet" href="<?=STYLE_ART;?>/preloader/style.css">




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





<!--Go Back-->
<a href="/<?php if($r_back && $r_back[0] != 'index') {
    $goBack = $r_back[0];
}  else {
    $goBack = 'news';
}
    echo  $goBack;?>" class="go_back_btn" tabindex="-2">
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




<!--Main Page-->
<div id='up' class="main_page">
    <div class="container">
        <div class="main_page_inner">
            <div class="container_margin">
                <div class="container_margin_AR">
                    <!--Main Content-->
                    <div id="main_content" class="main_content">
                        <div class="main_content_inner">
                            <!--Article Page Block-->
                            <div class="article_page_block">
                                <!--Article Page Title-->
                                <div class="article_page_title">
                                    <?=$article->title;?>
                                </div>
                                <!--Article Page Subtitle Block-->
                                <div class="article_page_subtitle_block">
                                    <!--Category-->
                                    <a href='/news/category/<?=$categories[$article->category_id]['alias'];?>' class="article_page_subtitle_category" tabindex="-2">
                                        <?=$categories[$article->category_id]['title'];?>
                                    </a>
                                    <!--Delimiter-->
                                    <div class="article_page_subtitle_delimiter">
                                        •
                                    </div>
                                    <!--Date-->
                                    <div class="article_page_subtitle_date">
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
                                </div>
                                <!--Articles Image-->
                                <img class='articles_page_image' src="/public/images/news/bg/item/<?=$article->image;?>" alt="">
                                <!--Article Page Text-->
                                <div class="article_page_text">
                                    <?=$article->text;?>
                                </div>
                                <!--Article Page Footer Fixed Mobile-->
                                <div class="article_page_footer_fixed_mobile">
                                    <div class="article_page_footer_fixed_mobile_inner">
                                        <!--Share Item Fixed Mobile-->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://sputnik.ws/articles/<?=$article->alias;?>" target="_blank" class="article_page_footer_fixed_mobile_share_item facebook" tabindex="-2">
                                            <!--Svg Facebook Mobile-->
                                            <svg class='article_page_share_mobile_FB' height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m483.738281 0h-455.5c-15.597656.0078125-28.24218725 12.660156-28.238281 28.261719v455.5c.0078125 15.597656 12.660156 28.242187 28.261719 28.238281h455.476562c15.605469.003906 28.257813-12.644531 28.261719-28.25 0-.003906 0-.007812 0-.011719v-455.5c-.007812-15.597656-12.660156-28.24218725-28.261719-28.238281zm0 0" fill="#4267b2"/><path d="m353.5 512v-198h66.75l10-77.5h-76.75v-49.359375c0-22.386719 6.214844-37.640625 38.316406-37.640625h40.683594v-69.128906c-7.078125-.941406-31.363281-3.046875-59.621094-3.046875-59 0-99.378906 36-99.378906 102.140625v57.035156h-66.5v77.5h66.5v198zm0 0" fill="#fff"/></svg>
                                        </a>
                                        <!--Share Item Fixed Mobile-->
                                        <a href="https://vk.com/share.php?url=https://sputnik.ws/articles/<?=$article->alias;?>" class="article_page_footer_fixed_mobile_share_item vkontakte" target="_blank" tabindex="-2">
                                            <!--Svg Vkontakte Mobile-->
                                            <svg class="article_page_share_mobile_VK" id="vk_2" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M14.77 10.358c.531.573 1.091 1.111 1.567 1.741.21.28.41.569.562.894.216.462.02.97-.355.998l-2.33-.002c-.602.056-1.081-.212-1.485-.666-.322-.363-.621-.75-.932-1.124a2.296 2.296 0 0 0-.42-.412c-.317-.228-.593-.159-.775.208-.186.373-.228.786-.246 1.201-.025.606-.19.766-.742.793-1.178.062-2.296-.135-3.335-.792-.916-.578-1.626-1.395-2.245-2.32-1.203-1.801-2.124-3.78-2.953-5.815-.187-.458-.051-.704.408-.712a55.95 55.95 0 0 1 2.281-.002c.309.005.513.2.633.523.411 1.117.914 2.18 1.546 3.166.169.262.34.524.585.709.27.204.476.136.603-.196.08-.211.116-.438.134-.664.06-.777.068-1.553-.037-2.327-.065-.483-.312-.796-.748-.887-.223-.047-.19-.139-.082-.279.188-.242.364-.393.716-.393h2.634c.415.09.507.296.564.757l.002 3.232c-.005.178.08.708.372.826.232.084.386-.122.526-.285.63-.74 1.08-1.613 1.483-2.518.178-.398.332-.81.48-1.224.11-.306.283-.457.596-.45l2.535.003c.075 0 .151 0 .224.014.428.08.545.284.413.745-.208.723-.613 1.325-1.008 1.93-.423.646-.875 1.27-1.295 1.92-.385.594-.354.893.124 1.408z" stroke="none"></path></svg>
                                        </a>
                                        <!--Share Item Fixed Mobile-->
                                        <a href='http://twitter.com/share?text=<?php echo $article->title; ?>&url=https://sputnik.ws/articles/<?=$article->alias;?>' class="article_page_footer_fixed_mobile_share_item twitter" target="_blank" tabindex="-2">
                                            <!--Svg Twitter Mobile-->
                                            <svg class='article_page_share_mobile_TW' id='tw_2' xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M18 4.538a6.553 6.553 0 0 1-1.885.517 3.297 3.297 0 0 0 1.443-1.815 6.616 6.616 0 0 1-2.086.797A3.283 3.283 0 0 0 9.88 7.03 9.318 9.318 0 0 1 3.115 3.6a3.259 3.259 0 0 0-.445 1.65c0 1.14.58 2.144 1.46 2.732a3.282 3.282 0 0 1-1.486-.412v.041a3.286 3.286 0 0 0 2.632 3.22 3.324 3.324 0 0 1-.864.115 3.15 3.15 0 0 1-.618-.061 3.284 3.284 0 0 0 3.065 2.28 6.584 6.584 0 0 1-4.076 1.403c-.265 0-.526-.016-.783-.045A9.276 9.276 0 0 0 7.031 16c6.038 0 9.338-5.002 9.338-9.34l-.01-.426A6.555 6.555 0 0 0 18 4.538z" stroke="none"></path></svg>
                                        </a>
                                        <!--Share Item Fixed Mobile-->
                                        <a href='https://t.me/share/url?url=https://sputnik.ws/articles/<?=$article->alias;?>' class="article_page_footer_fixed_mobile_share_item telegram" target="_blank" tabindex="-2">
                                            <!--Svg Telegram Mobile-->
                                            <svg class="article_page_share_mobile_TG" id="tg_2" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!--Article Page Footer-->
                                <div class="article_page_footer">
                                    <!--Social Networks-->
                                    <div class="articles_page_share_on_soc_net">
                                        <!--Share Item-->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://sputnik.ws/articles/<?=$article->alias;?>"  class="articles_page_share_item facebook" target="_blank" tabindex="-2">
                                            <!--Svg Facebook-->
                                            <svg class="articles_page_share_FB" id="fb_2" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M12.687 2h-1.841c-2.236 0-3.68 1.392-3.68 3.547v1.378H5.313c-.173 0-.313.132-.313.295v2.37c0 .163.14.294.313.294h1.853v5.823c0 .162.14.294.312.294h2.61c.174 0 .314-.132.314-.294V9.883h2.284c.173 0 .313-.131.313-.294L13 7.22a.286.286 0 0 0-.092-.207.323.323 0 0 0-.221-.087h-2.285v-1.13c0-.666.169-1.004 1.093-1.004l1.192-.004c.172 0 .312-.131.312-.294v-2.2C13 2.132 12.86 2 12.687 2z" stroke="none"></path></svg>
                                        </a>
                                        <!--Share Item-->
                                        <a href="https://vk.com/share.php?url=https://sputnik.ws/articles/<?=$article->alias;?>" class="articles_page_share_item vkontakte" target="_blank" tabindex="-2">
                                            <!--Svg Vkontakte-->
                                            <svg class="articles_page_share_VK" id="vk_2" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M14.77 10.358c.531.573 1.091 1.111 1.567 1.741.21.28.41.569.562.894.216.462.02.97-.355.998l-2.33-.002c-.602.056-1.081-.212-1.485-.666-.322-.363-.621-.75-.932-1.124a2.296 2.296 0 0 0-.42-.412c-.317-.228-.593-.159-.775.208-.186.373-.228.786-.246 1.201-.025.606-.19.766-.742.793-1.178.062-2.296-.135-3.335-.792-.916-.578-1.626-1.395-2.245-2.32-1.203-1.801-2.124-3.78-2.953-5.815-.187-.458-.051-.704.408-.712a55.95 55.95 0 0 1 2.281-.002c.309.005.513.2.633.523.411 1.117.914 2.18 1.546 3.166.169.262.34.524.585.709.27.204.476.136.603-.196.08-.211.116-.438.134-.664.06-.777.068-1.553-.037-2.327-.065-.483-.312-.796-.748-.887-.223-.047-.19-.139-.082-.279.188-.242.364-.393.716-.393h2.634c.415.09.507.296.564.757l.002 3.232c-.005.178.08.708.372.826.232.084.386-.122.526-.285.63-.74 1.08-1.613 1.483-2.518.178-.398.332-.81.48-1.224.11-.306.283-.457.596-.45l2.535.003c.075 0 .151 0 .224.014.428.08.545.284.413.745-.208.723-.613 1.325-1.008 1.93-.423.646-.875 1.27-1.295 1.92-.385.594-.354.893.124 1.408z" stroke="none"></path></svg>
                                        </a>
                                        <!--Share Item-->
                                        <a href='http://twitter.com/share?text=<?php echo $article->title; ?>&url=https://sputnik.ws/articles/<?=$article->alias;?>' class="articles_page_share_item twitter" target="_blank" tabindex="-2">
                                            <!--Svg Twitter-->
                                            <svg class='articles_page_share_TW' id='tw_2' xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M18 4.538a6.553 6.553 0 0 1-1.885.517 3.297 3.297 0 0 0 1.443-1.815 6.616 6.616 0 0 1-2.086.797A3.283 3.283 0 0 0 9.88 7.03 9.318 9.318 0 0 1 3.115 3.6a3.259 3.259 0 0 0-.445 1.65c0 1.14.58 2.144 1.46 2.732a3.282 3.282 0 0 1-1.486-.412v.041a3.286 3.286 0 0 0 2.632 3.22 3.324 3.324 0 0 1-.864.115 3.15 3.15 0 0 1-.618-.061 3.284 3.284 0 0 0 3.065 2.28 6.584 6.584 0 0 1-4.076 1.403c-.265 0-.526-.016-.783-.045A9.276 9.276 0 0 0 7.031 16c6.038 0 9.338-5.002 9.338-9.34l-.01-.426A6.555 6.555 0 0 0 18 4.538z" stroke="none"></path></svg>
                                        </a>
                                        <!--Share Item-->
                                        <a href='https://t.me/share/url?url=https://sputnik.ws/articles/<?=$article->alias;?>' class="articles_page_share_item telegram" target="_blank" tabindex="-2">
                                            <!--Svg Telegram-->
                                            <svg class="articles_page_share_TG" id="tg_2" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"></path></svg>
                                        </a>
                                    </div>
                                    <!--Article Page Views-->
                                    <div class="article_page_views">
                                        <!--Svg-->
                                        <svg class="articles_page_views_svg" id="views_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525.153 525.153" style="enable-background:new 0 0 525.153 525.153;" xml:space="preserve">
<g>
    <path d="M262.576,83.543C143.235,83.543,41.29,157.765,0,262.576c41.29,104.812,143.235,179.033,262.576,179.033
    s221.264-74.221,262.576-179.033C483.841,157.765,381.917,83.543,262.576,83.543z M262.576,381.917
    c-65.885,0-119.341-53.456-119.341-119.341s53.456-119.341,119.341-119.341s119.341,53.456,119.341,119.341
    S328.461,381.917,262.576,381.917z M262.576,190.98c-39.649,0-71.596,31.969-71.596,71.596s31.969,71.596,71.596,71.596
    s71.596-31.969,71.596-71.596S302.225,190.98,262.576,190.98z"></path>
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
                                        <p class="article_page_views_text">
                                            <?=$article->views;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($categoryArticles): ?>
                        <!--Right Sidebar-->
                        <div id='read_also' class="right_sidebar fixation_arim">
                            <div class="right_sidebar_inner">
                                <!--Read Also-->
                                <div class="read_also">
                                    <div class="read_also_inner">
                                        <!--Read Also Title-->
                                        <div class="read_also_title">
                                            Читайте также
                                        </div>
                                        <div class="read_also_border"></div>
                                        <?php foreach($categoryArticles as $categoryArticle): ?>
                                            <?php if($categoryArticle->id != $article->id): ?>
                                                <!--Read Also Item-->
                                                <a href='/news/<?=$categoryArticle->alias;?>' class="read_also_item" tabindex="-2">
                                                    <div class="read_also_item_inner">
                                                        <!--Title-->
                                                        <div class="read_also_item_title">
                                                            <?=$categoryArticle->title;?>
                                                        </div>
                                                        <!--Footer-->
                                                        <div class="read_also_item_footer">
                                                            <!--Date-->
                                                            <div class="read_also_item_data">
                                                                <?php if(date('d-m-Y') ==  $categoryArticle->date): ?>
                                                                    Сегодня
                                                                <?php endif; ?>
                                                                <?php if(date('d-m-Y') != $categoryArticle->date && date('d-m-Y', strtotime('yesterday'))  == $categoryArticle->date): ?>
                                                                    Вчера
                                                                <?php endif; ?>
                                                                <?php if(date('d-m-Y') !=  $categoryArticle->date && date('d-m-Y', strtotime('yesterday')) != $categoryArticle->date): ?>
                                                                    <?=$categoryArticle->day;?>
                                                                <?php endif; ?>
                                                                <?php if(date('Y') != $categoryArticle->year): ?>
                                                                    <?=$categoryArticle->year;?>
                                                                <?php endif; ?>
                                                            </div>
                                                            <!--Views-->
                                                            <div class="read_also_item_views">
                                                                <!--Svg Views Icon-->
                                                                <svg class="read_also_footer_views_icon" id="views_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525.153 525.153" style="enable-background:new 0 0 525.153 525.153;" xml:space="preserve">
<g>
    <path d="M262.576,83.543C143.235,83.543,41.29,157.765,0,262.576c41.29,104.812,143.235,179.033,262.576,179.033
    s221.264-74.221,262.576-179.033C483.841,157.765,381.917,83.543,262.576,83.543z M262.576,381.917
    c-65.885,0-119.341-53.456-119.341-119.341s53.456-119.341,119.341-119.341s119.341,53.456,119.341,119.341
    S328.461,381.917,262.576,381.917z M262.576,190.98c-39.649,0-71.596,31.969-71.596,71.596s31.969,71.596,71.596,71.596
    s71.596-31.969,71.596-71.596S302.225,190.98,262.576,190.98z"></path>
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
                                                                <div class="read_also_item_views_title">
                                                                    <?=$categoryArticle->views;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Border-->
                                                        <div class="read_also_border_item"></div>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>




<script src='<?=JS_ART;?>/main.js'></script>
<script src='<?=JS_ART;?>/app.js'></script>




