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



<div class="php_content">
    <?=$content;?>
</div>





<!--Connection of JavaScript-->
<script src="<?=JS_1;?>"></script>
<script src="<?=JS_2;?>"></script>
<?php
    // проходим циклом по массиву скриптов
    foreach ($scripts as $script) {
        // выводим скрипты
        echo $script;
    }
?>
</body>
</html>