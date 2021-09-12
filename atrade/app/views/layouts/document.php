<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <?=$this->getMeta();?>
    <!--Connect Styles-->
    <link rel="stylesheet" href="<?=STYLE_BASE;?>/style.css">
    <link rel="stylesheet" href="/public/css/documents/style.css">
    <link rel="stylesheet" href="/public/css/documents/preloader/style.css">
    <?php
        // проходим циклом по массиву стилей
        foreach ($styles as $style) {
            // выводим стили
            echo $style;
        }
    ?>
    <link rel="stylesheet" href="<?=STYLE_2;?>">
    <!--Favicons-->
    <link rel="mask-icon" href="/public/images/base/favicons/safari-favicon-16.svg" color="#fff">
    <link rel="apple-touch-icon-precomposed" href="/public/images/base/favicons/favicon-152.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-57.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-76.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-96.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-120.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-128.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-144.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-152.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-180.png">
    <link rel="icon" type="image/png" href="/public/images/base/favicons/favicon-196.png">
    <link rel="shortcut icon" href="/public/images/base/favicons/favicon.ico" type="image/x-icon">
    <!--Connecting Fonts-->
    <link href="/public/css/fonts/style.css" rel="stylesheet">
</head>
<body>


<!--Preloader-->
<div class="preloader" id="preloader">
    <div class="container">
        <div class="preloader_inner">
            <div class="container_margin"></div>
        </div>
    </div>
</div>



<!--Modal Up Button-->
<a href="javascript://0" class="modal_up_button" tabindex="-2">
    <div class="modal_up_button_inner">
        <!--Svg Arrow Icon-->
        <svg class='modal_up_btn_icon' version="1.1" id="arrow_back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
    </div>
</a>




<div class="php_content">
    <?=$content;?>
</div>






<!--Connection of JavaScript-->
<script src="<?=JS_1;?>"></script>
<script src="<?=JS_2;?>"></script>
<script src='<?=JS_BASE;?>/main.js'></script>
<script src='<?=JS_BASE;?>/app.js'></script>
<script src="/public/js/documents/main.js"></script>
<script src="/public/js/documents/app.js"></script>
<?php
    // проходим циклом по массиву скриптов
    foreach ($scripts as $script) {
        // выводим скрипты
        echo $script;
    }
?>
</body>
</html>