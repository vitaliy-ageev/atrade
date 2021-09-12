<!DOCTYPE html>
<html id='html'  lang="ru" class='page_load'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/public/css/base/style.css">
    <link rel="stylesheet" href="/public/widgets/header/css/style.css">
    <link rel="stylesheet" href="/public/widgets/footer/css/white/style.css">
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
<body class='page_load'>







<!--Header-->
<div class="header">
    <div class="container">
        <div class="header_inner">
            <!--Logotype-->
            <a href="<?=PATH;?>" class="header_logotype" title="ATrade" tabindex="-2">
                <svg class='header_logo_icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 465.13 459"><defs><style>.cls-1{fill:#2da98c;}.cls-2{fill:#302213;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="logo"><path id="A" class="cls-1" d="M34,0l96.5,96.5H174L372.25,294.75V346l92.87,92.88V0ZM368,196l-94-95h94Z"/><polygon id="T" class="cls-2" points="0.5 165.5 0.5 21.5 438 459 296.5 459 186.25 348.75 79.5 455.5 0 455.5 0 392 115 277 0.5 165.5"/></g></g></svg>
                <svg class='header_logo_name' style='display: block; margin-top: 2px;' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 892.76 204.03"><g id="Слой_2" data-name="Слой 2"><g id="name"><path d="M132.5,164.42H59.84L48.16,201.18H0L70.67,11.4H122l70.67,189.78H144.47Zm-60.69-37h48.73L96.31,47.3Z"/><path d="M336,11.4v37H285V201.18H238.22V48.44h-51v-37Z"/><path d="M436.26,100.87h-5.41q-27.08,0-38.18,13.68v86.63h-45.6V61.55h44.17V84.92q4-11.4,12.25-18t21.66-6.55a43.39,43.39,0,0,1,6.7.43,41.6,41.6,0,0,1,5.55,1.28Z"/><path d="M529.16,187.5q-6.55,6.56-17.81,11.54a60.27,60.27,0,0,1-24.65,5,42.77,42.77,0,0,1-16.81-3.14,35.22,35.22,0,0,1-12.4-8.55,38,38,0,0,1-7.69-12.68,44,44,0,0,1-2.71-15.53q0-19.37,12.11-29.2t34.34-11.55q8.26-.55,17.52-.85t16.39-.57V117.4q0-22.79-25.36-22.8a80.7,80.7,0,0,0-19.24,2.28,77.36,77.36,0,0,0-17,6.27l-8.26-31.63a97.52,97.52,0,0,1,23.5-9.26,115.9,115.9,0,0,1,29.5-3.56Q540,58.7,556.51,74T573,119.68v81.5H529.16Zm-24.79-13.39a43.9,43.9,0,0,0,12.39-1.71,47.16,47.16,0,0,0,10.69-4.56V147q-6.84.57-12.25,1.28c-3.62.47-7.13.9-10.55,1.28q-14,1.71-14,13.11a10.45,10.45,0,0,0,3.56,8.26Q497.82,174.11,504.37,174.11Z"/><path d="M737.46,201.18h-43.6v-17.5a47.65,47.65,0,0,1-17,14.84Q666.51,204,652,204A49.59,49.59,0,0,1,630,199a52.18,52.18,0,0,1-17.81-14.25,68.53,68.53,0,0,1-11.83-22.37,94.32,94.32,0,0,1-4.27-29.35q0-18.22,5.84-32.2a68.36,68.36,0,0,1,15.67-23.36A64.2,64.2,0,0,1,640.57,63.4a82.22,82.22,0,0,1,27.93-4.7,76.28,76.28,0,0,1,13.11,1,83,83,0,0,1,10.25,2.42V0h45.6Zm-69-31.92q14.54,0,23.36-9.72V95.18q-6.27-2.28-16.24-2.28-17.1,0-25.5,10.58t-8.41,28.89q0,16.31,6.41,26.6T668.5,169.26Z"/><path d="M833.48,58.7q27.36,0,43.32,16.1t16,44.6a112.9,112.9,0,0,1-2.57,23.08H809.26q.57,12.83,8.7,20.66T842.89,171a131.92,131.92,0,0,0,21.51-1.85,79.08,79.08,0,0,0,19.52-5.56l5.7,29.35a100.67,100.67,0,0,1-24.36,8.27A136.63,136.63,0,0,1,837.19,204q-18.24,0-32.2-5.27a65,65,0,0,1-23.37-14.68,61.39,61.39,0,0,1-14.24-22.51,83.09,83.09,0,0,1-4.85-29.07,89.27,89.27,0,0,1,5-30.77A64.57,64.57,0,0,1,781.77,78.5a62.38,62.38,0,0,1,22.37-14.67A79.9,79.9,0,0,1,833.48,58.7Zm-1.42,29.07q-10.83,0-16.67,7T809.55,114H850a19.88,19.88,0,0,0,.57-4.84q0-9.12-4.84-15.25T832.06,87.77Z"/></g></g></svg>
    
                <svg class='header_logo_name'  style='display:none; margin-top: 4px; width: 80px;' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 921.07 253.38"><g id="Слой_2" data-name="Слой 2"><g id="name"><path d="M123.5,164.4H55.77L44.89,198.66H0L65.87,21.78h47.8l65.87,176.88H134.66ZM66.93,129.88h45.42L89.77,55.24Z"/><path d="M313.14,21.78V56.31H265.59V198.66H222V56.31H174.5V21.78Z"/><path d="M327.48,68.52h40.63V83.93q12.75-18.06,39.05-18.06a46.19,46.19,0,0,1,20.45,4.65,48.94,48.94,0,0,1,16.6,13.27,64.24,64.24,0,0,1,11,20.85,88.21,88.21,0,0,1,4,27.36q0,17.26-5.44,30.15a63.86,63.86,0,0,1-14.61,21.64,59.81,59.81,0,0,1-21.38,13.15,76.57,76.57,0,0,1-26,4.38,71.43,71.43,0,0,1-12.22-.93,75.4,75.4,0,0,1-9.56-2.26v55.25H327.48Zm64.27,30a31.82,31.82,0,0,0-12.48,2.25,25.75,25.75,0,0,0-9.3,6.78v60.29a33.52,33.52,0,0,0,6.64,1.59,59.78,59.78,0,0,0,8.5.53q16.74,0,24.17-10.22t7.44-27.49q0-14.36-6-24T391.75,98.54Z"/><path d="M540.22,65.87q25.5,0,40.37,15t14.87,41.57A105.41,105.41,0,0,1,593.07,144H517.64q.52,12,8.1,19.26t23.24,7.3a123.55,123.55,0,0,0,20-1.72,74,74,0,0,0,18.2-5.18L592.54,191a93.14,93.14,0,0,1-22.71,7.7,126.7,126.7,0,0,1-26.16,2.66q-17,0-30-4.91a60.58,60.58,0,0,1-21.78-13.68,57.42,57.42,0,0,1-13.28-21,77.68,77.68,0,0,1-4.52-27.09A83.29,83.29,0,0,1,478.73,106,60.29,60.29,0,0,1,492,84.33a58.21,58.21,0,0,1,20.85-13.68A74.45,74.45,0,0,1,540.22,65.87ZM538.89,93q-10.1,0-15.54,6.51t-5.44,17.92h37.71a18.22,18.22,0,0,0,.53-4.51q0-8.5-4.51-14.21T538.89,93Z"/><path d="M619.63,198.66V68.52h42.49V139.7l44-71.18h40V198.66H703.56V126.42L660,198.66ZM735.43,6.37q-3.46,21-18.06,32.14T681.51,49.67q-21.25,0-35.85-11.16T627.6,6.37L659.2,0a32,32,0,0,0,6.51,13.81q4.9,6.12,15.8,6.11a25.75,25.75,0,0,0,9.56-1.59,16.92,16.92,0,0,0,6.38-4.25,20.6,20.6,0,0,0,3.85-6.51q1.46-3.86,2.52-7.57Z"/><path d="M798.9,198.66v32.67H763.58V168.92h13.81q8-9.57,13-28.29a210.42,210.42,0,0,0,6.38-42.89l1.32-29.22H903.28v100.4h17.79v62.41H885.75V198.66ZM833.69,98.27q-1.32,13.55-2.52,23.9A161.11,161.11,0,0,1,828,140.9a86.55,86.55,0,0,1-4.91,15,74.41,74.41,0,0,1-7.44,13h45.15V98.27Z"/></g></g></svg>
                
                
            </a>
    
            
            
            
            <!--Header Navigation-->
            <div class="header_navigation">
                <div class="header_navigation_inner">
                        <a href="/ideas"
                           class="header_navigation_link <?php if($this->route['controller'] == 'Main' OR $this->route['controller'] == 'Ideas'):?>active<?php endif;?>" tabindex="-2">
                            Идеи
                        </a>
                        <a href="/robot"
                           class="header_navigation_link <?php if($this->route['controller'] == 'Robot'):?>active<?php endif;?>" target="_blank" tabindex="-2">
                            Робот
                        </a>
                        <a href="/news"
                           class="header_navigation_link <?php if($this->route['controller'] == 'News'):?>active<?php endif;?>" tabindex="-2">
                            Новости
                        </a>
                        <a href="/calendar"
                           class="header_navigation_link <?php if($this->route['controller'] == 'Calendar'):?>active<?php endif;?>" tabindex="-2">
                            Календарь
                        </a>
                        <a href="/feedback"
                           class="header_navigation_link <?php if($this->route['controller'] == 'Help' OR $this->route['controller'] == 'Feedback'):?>active<?php endif;?>" tabindex="-2">
                            Помощь
                        </a>
                </div>
            </div>
            
            <!--Language Selection-->
            <div class="header_lang_selection">
                <div class="header_lang_selection_inner">
                    <!--Button-->
                    <div class="header_lang_selection_button">
                        <div class="header_lang_selection_button_name">
                            Язык:
                        </div>
                        <div class="header_lang_selection_button_icon">
                            <svg class='header_lang_selection_button_svg' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.68 473.68" style="enable-background:new 0 0 473.68 473.68;" xml:space="preserve">
<circle style="fill:#FFFFFF;" cx="236.85" cy="236.849" r="236.83"/>
                                <path style="fill:#2B479D;" d="M460.143,157.873H314.218c6.339,50.593,6.376,106.339,0.123,156.995h146.113  c8.53-24.438,13.219-50.682,13.219-78.026C473.677,209.139,468.879,182.573,460.143,157.873z"/>
                                <path style="fill:#EFECEC;" d="M314.218,157.873H460.14c-0.022-0.075-0.045-0.138-0.075-0.206  C429.756,72.2,351.785,9.319,258.105,0.972C294.361,20.844,304.951,83.804,314.218,157.873z"/>
                                <path style="fill:#E63026;" d="M258.113,472.697c93.848-8.362,171.927-71.46,202.12-157.156c0.079-0.228,0.146-0.453,0.228-0.673  H314.345C305.149,389.338,294.514,452.742,258.113,472.697z"/>
                                <path style="fill:#3757A6;" d="M0,236.841c0,27.348,4.697,53.588,13.219,78.026h313.313c6.26-50.66,6.215-106.402-0.116-156.995  H13.534C4.798,182.573,0,209.139,0,236.841z"/>
                                <path style="fill:#EFEFEF;" d="M13.608,157.668c-0.022,0.067-0.045,0.131-0.075,0.206h312.883  c-9.274-74.07-32.056-137.029-68.307-156.901c-7.012-0.621-14.102-0.972-21.274-0.972C133.806,0,46.191,65.801,13.608,157.668z"/>
                                <path style="fill:#E73B36;" d="M326.532,314.867H13.219c0.079,0.221,0.153,0.445,0.228,0.673  C45.9,407.642,133.641,473.676,236.835,473.676c7.173,0,14.263-0.352,21.274-0.98C294.514,452.742,317.336,389.338,326.532,314.867z  "/>
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
                    <!--Window-->
                    <div class="header_lang_selection_list_block">
                        <div class="header_lang_selection_list_block_inner">
                            <!--Item-->
                            <div class="header_lang_selection_window_list">
                                <div class="header_lang_selection_window_list_name">
                                    RUS
                                </div>
                                <div class="header_lang_selection_window_list_icon">
                                    <svg class='header_lang_selection_window_list_svg' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.68 473.68" style="enable-background:new 0 0 473.68 473.68;" xml:space="preserve">
<circle style="fill:#FFFFFF;" cx="236.85" cy="236.849" r="236.83"/>
                                        <path style="fill:#2B479D;" d="M460.143,157.873H314.218c6.339,50.593,6.376,106.339,0.123,156.995h146.113  c8.53-24.438,13.219-50.682,13.219-78.026C473.677,209.139,468.879,182.573,460.143,157.873z"/>
                                        <path style="fill:#EFECEC;" d="M314.218,157.873H460.14c-0.022-0.075-0.045-0.138-0.075-0.206  C429.756,72.2,351.785,9.319,258.105,0.972C294.361,20.844,304.951,83.804,314.218,157.873z"/>
                                        <path style="fill:#E63026;" d="M258.113,472.697c93.848-8.362,171.927-71.46,202.12-157.156c0.079-0.228,0.146-0.453,0.228-0.673  H314.345C305.149,389.338,294.514,452.742,258.113,472.697z"/>
                                        <path style="fill:#3757A6;" d="M0,236.841c0,27.348,4.697,53.588,13.219,78.026h313.313c6.26-50.66,6.215-106.402-0.116-156.995  H13.534C4.798,182.573,0,209.139,0,236.841z"/>
                                        <path style="fill:#EFEFEF;" d="M13.608,157.668c-0.022,0.067-0.045,0.131-0.075,0.206h312.883  c-9.274-74.07-32.056-137.029-68.307-156.901c-7.012-0.621-14.102-0.972-21.274-0.972C133.806,0,46.191,65.801,13.608,157.668z"/>
                                        <path style="fill:#E73B36;" d="M326.532,314.867H13.219c0.079,0.221,0.153,0.445,0.228,0.673  C45.9,407.642,133.641,473.676,236.835,473.676c7.173,0,14.263-0.352,21.274-0.98C294.514,452.742,317.336,389.338,326.532,314.867z  "/>
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
                            <!--Item-->
                            <div class="header_lang_selection_window_list">
                                <div class="header_lang_selection_window_list_name">
                                    ENG
                                </div>
                                <div class="header_lang_selection_window_list_icon">
                                    <svg class='header_lang_selection_window_list_svg' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.68 473.68" style="enable-background:new 0 0 473.68 473.68;" xml:space="preserve">
<g>
    <path style="fill:#29337A;" d="M41.712,102.641c-15.273,22.168-26.88,47.059-33.918,73.812h107.734L41.712,102.641z"/>
    <path style="fill:#29337A;" d="M170.511,9.48c-27.288,7.947-52.56,20.628-74.814,37.168l74.814,74.814V9.48z"/>
    <path style="fill:#29337A;" d="M101.261,430.982c20.874,14.607,44.195,25.915,69.25,33.211v-102.45L101.261,430.982z"/>
    <path style="fill:#29337A;" d="M10.512,306.771c7.831,25.366,19.831,48.899,35.167,69.833l69.833-69.833H10.512z"/>
</g>
                                        <g>
                                            <path style="fill:#FFFFFF;" d="M45.619,97.144c-1.324,1.81-2.629,3.646-3.908,5.501l73.816,73.812H7.793   c-1.746,6.645-3.171,13.418-4.345,20.284h141.776L45.619,97.144z"/>
                                            <path style="fill:#FFFFFF;" d="M95.767,427.074c1.802,1.343,3.654,2.621,5.493,3.908l69.25-69.242v102.45   c6.653,1.945,13.41,3.624,20.284,4.974V332.05L95.767,427.074z"/>
                                            <path style="fill:#FFFFFF;" d="M5.25,286.487c1.47,6.873,3.205,13.642,5.258,20.284h105.001l-69.833,69.833   c7.595,10.377,16.017,20.115,25.168,29.12L190.08,286.487H5.25L5.25,286.487z"/>
                                            <path style="fill:#FFFFFF;" d="M170.511,9.48v111.982l-74.815-74.81c-10.314,7.67-19.955,16.185-28.888,25.403l123.983,123.983   V4.506C183.921,5.864,177.164,7.547,170.511,9.48z"/>
                                        </g>
                                        <g>
                                            <polygon style="fill:#D32030;" points="170.511,306.056 169.8,306.771 170.511,306.771  "/>
                                            <polygon style="fill:#D32030;" points="190.084,286.487 190.794,286.487 190.794,285.773  "/>
                                            <polygon style="fill:#D32030;" points="281.229,196.737 280.545,196.737 280.545,197.425  "/>
                                            <polygon style="fill:#D32030;" points="171.21,176.457 170.511,175.754 170.511,176.457  "/>
                                            <polygon style="fill:#D32030;" points="190.794,196.037 190.794,196.737 191.494,196.737  "/>
                                        </g>
                                        <g>
                                            <path style="fill:#252F6C;" d="M300.825,411.764v53.091c25.381-7.105,49.045-18.305,70.211-32.897l-57.526-57.526   C308.913,390.583,307.231,398.933,300.825,411.764z"/>
                                            <path style="fill:#252F6C;" d="M313.812,108.471l62.799-62.799C354.05,29.15,328.456,16.559,300.824,8.818v54.538   C308.21,78.146,308.831,89.384,313.812,108.471z"/>
                                            <path style="fill:#252F6C;" d="M427.029,377.984c15.815-21.275,28.141-45.29,36.147-71.213h-107.36L427.029,377.984z"/>
                                            <path style="fill:#252F6C;" d="M465.887,176.457c-7.188-27.318-19.143-52.676-34.898-75.192l-75.2,75.192H465.887z"/>
                                        </g>
                                        <g>
                                            <path style="fill:#E7E7E7;" d="M327.638,290.5l16.275,16.275l77.903,77.903c1.769-2.214,3.526-4.42,5.217-6.69l-71.213-71.213   h107.36c2.046-6.638,3.784-13.41,5.25-20.284H329.16C328.932,289.367,327.911,287.643,327.638,290.5z"/>
                                            <path style="fill:#E7E7E7;" d="M311.352,120.348l70.607-70.615c-1.769-1.372-3.541-2.737-5.348-4.061l-62.799,62.799   C314.463,110.954,310.746,117.805,311.352,120.348z"/>
                                            <path style="fill:#E7E7E7;" d="M300.825,58.992V8.814c-6.645-1.862-13.41-3.44-20.284-4.727v24.476   C288.088,36.745,294.853,47.022,300.825,58.992z"/>
                                            <path style="fill:#E7E7E7;" d="M326.041,196.737h144.195c-1.171-6.866-2.599-13.635-4.345-20.284H355.793l75.2-75.192   C423.6,90.7,415.384,80.768,406.409,71.565l-84.702,84.694C323.988,171.622,325.009,180.544,326.041,196.737z"/>
                                            <path style="fill:#E7E7E7;" d="M310.088,371.002l60.952,60.959c10.138-6.982,19.685-14.753,28.593-23.189l-80.173-80.177   C316.901,343.423,313.865,357.745,310.088,371.002z"/>
                                            <path style="fill:#E7E7E7;" d="M280.545,442.301v27.28c6.873-1.279,13.635-2.865,20.284-4.727v-53.091   C294.853,423.738,288.088,434.13,280.545,442.301z"/>
                                        </g>
                                        <path style="fill:#D71F28;" d="M321.707,156.259l84.694-84.694c-7.625-7.831-15.8-15.119-24.446-21.832l-66.55,66.561  C318.363,128.657,319.706,142.808,321.707,156.259z"/>
                                        <g>
                                            <path style="fill:#D32030;" d="M225.019,0.292C228.965,0.101,232.899,0,236.836,0C232.876,0,228.935,0.101,225.019,0.292z"/>
                                            <path style="fill:#D32030;" d="M236.836,473.68c-3.938,0-7.872-0.108-11.81-0.299C228.942,473.579,232.876,473.68,236.836,473.68z"/>
                                            <path style="fill:#D32030;" d="M236.836,473.68c14.943,0,29.535-1.447,43.708-4.099v-27.28   C268.103,455.786,253.549,473.68,236.836,473.68z"/>
                                        </g>
                                        <g>
                                            <path style="fill:#D71F28;" d="M470.232,196.737H327.911c1.885,29.704,1.657,60.249-0.681,89.75h141.2   c3.418-16.017,5.25-32.613,5.25-49.643C473.68,223.164,472.461,209.784,470.232,196.737z"/>
                                            <path style="fill:#D71F28;" d="M327.638,290.5c-1.316,13.994-5.901,24.898-8.182,38.099l80.173,80.173   c7.932-7.517,15.347-15.557,22.183-24.094l-77.9-77.907L327.638,290.5z"/>
                                        </g>
                                        <path style="fill:#D32030;" d="M280.545,30.324V4.091C266.376,1.447,251.784,0,236.836,0C253.549,0,268.103,16.843,280.545,30.324z"/>
                                        <g>
                                            <path style="fill:#29337A;" d="M300.825,422.007c6.406-12.834,11.899-27.609,16.499-43.757l-16.499-16.499V422.007z"/>
                                            <path style="fill:#29337A;" d="M319.377,102.906c-4.989-19.087-11.166-36.439-18.552-51.229v69.773L319.377,102.906z"/>
                                        </g>
                                        <g>
                                            <path style="fill:#FFFFFF;" d="M332.234,295.092c0.269-2.857,0.512-5.725,0.744-8.605h-9.349L332.234,295.092z"/>
                                            <path style="fill:#FFFFFF;" d="M300.825,121.451V51.674c-5.976-11.97-12.737-22.254-20.284-30.429v129.906l40.735-40.735   c-0.613-2.543-1.257-5.034-1.9-7.517L300.825,121.451z"/>
                                            <path style="fill:#FFFFFF;" d="M281.229,196.737h52.429c-1.028-16.192-2.666-32.123-4.944-47.482L281.229,196.737z"/>
                                            <path style="fill:#FFFFFF;" d="M280.545,452.432c7.547-8.182,14.308-18.459,20.284-30.429v-60.256l16.499,16.499   c3.784-13.264,6.959-27.434,9.525-42.261l-46.307-46.304L280.545,452.432L280.545,452.432z"/>
                                        </g>
                                        <path style="fill:#E51D35;" d="M280.545,452.432V289.681l46.304,46.307c2.277-13.205,4.069-26.899,5.381-40.896l-8.605-8.605h9.349  c2.337-29.502,2.565-60.047,0.681-89.75h-52.429l47.482-47.482c-2.001-13.455-4.476-26.469-7.434-38.836l-40.728,40.735V21.248  C268.103,7.763,253.549,0,236.836,0c-3.938,0-7.872,0.101-11.817,0.292c-11.649,0.583-23.073,2.016-34.225,4.215v191.531  L66.808,72.055c-7.618,7.861-14.704,16.237-21.189,25.089l79.313,79.313l20.291,20.284H3.448C1.227,209.784,0,223.164,0,236.844  c0,17.034,1.84,33.626,5.25,49.643h184.834L70.847,405.724c7.808,7.67,16.121,14.813,24.921,21.349l95.023-95.023v137.116  c11.151,2.199,22.583,3.631,34.232,4.215c3.938,0.191,7.872,0.299,11.81,0.299C253.549,473.68,268.103,465.917,280.545,452.432z"/>
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
                        </div>
                    </div>
                </div>
            </div>
            
           
            
            <!--Mobile Header Block-->
            <div class="mobile_header_block">
                <div class="mobile_header_block_inner">
                    <!--Search Mobile-->
                    <div class="header_search_mobile">
                        <!--Svg-->
                        <svg version="1.1" class='header_search_mobile_icon' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
  s-17-7.626-17-17S14.61,6,23.984,6z"/>
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
                    <!--Search Mobile Window-->
                    <div class="wrapper_search_mobile_window">
                        <div class="search_mobile_window">
                            <div class="search_mobile_window_inner">
                                <form action="/search" method="get" autocomplete="off" class="search_mobile_window_form">
                                    <!--Button-->
                                    <button type="submit" value="" class="search_mobile_window_button">
                                        <!--Svg-->
                                        <svg version="1.1" class='search_mobile_window_icon' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
      s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
      c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
      s-17-7.626-17-17S14.61,6,23.984,6z"/>
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
                                    </button>
                                    <input type="text" name="s" id="page_search_mobile" class="search_mobile_window_input">
                                    <!--Svg-->
                                    <svg class="search_mobile_window_close_icon" id="buttonsclose-1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                        
                                        </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g></svg>
                                </form>
                            </div>
                            <div class="search_mobile_window_close" ontouchmove="blurInput(event)"></div>
                        </div>
                    </div>
                    <!--Header Burger Menu-->
                    <div class="header_burger_menu">
                        <span class='header_burger_menu_line'></span>
                        <span class='header_burger_menu_line'></span>
                        <span class='header_burger_menu_line'></span>
                        <span class='header_burger_menu_line'></span>
                    </div>
                    <!--Header Burder Menu Window-->
                    <div class="wrapper_burger_window">
                        <div class="header_burder_menu_window">
                            <div class="header_burder_menu_window_inner" ontouchmove="noScroll(event)">
                                <div class="header_burder_menu_window_inner_wrapper">
                                    <div class="header_burder_menu_window_nav_block">
                                        <!--Navigation-->
                                        <div class="header_burder_menu_window_nav">
                                            <!--Link-->
                                            <div class="header_burder_menu_window_nav_link_block">
                                                <a href="/ideas" class="header_burder_menu_window_nav_link">Идеи</a>
                                            </div>
                                            <!--Link-->
                                            <div class="header_burder_menu_window_nav_link_block">
                                                <a href="/robot" class="header_burder_menu_window_nav_link">Робот</a>
                                            </div>
                                            <!--Link-->
                                            <div class="header_burder_menu_window_nav_link_block">
                                                <a href="/news" class="header_burder_menu_window_nav_link">Новости</a>
                                            </div>
                                            <!--Link-->
                                            <div class="header_burder_menu_window_nav_link_block">
                                                <a href="/calendar" class="header_burder_menu_window_nav_link">Календарь</a>
                                            </div>
                                        </div>
                                        <!--Subnavigation-->
                                        <div class="header_burder_menu_window_subnav">
                                            <a href="" class="header_burder_menu_window_subnav_link">
                                                Версия для компьютеров
                                            </a>
                                            <a href="/help" class="header_burder_menu_window_subnav_link">Помощь</a>
                                            <a href="" class="header_burder_menu_window_subnav_link">Соглашение</a>
                                        </div>
                                        <!--Mail Notifications-->
                                        <div class="header_burger_menu_window_mail_notifocations">
                                            <div class="header_burger_menu_window_mail_notifocations_inner">
                                                <!--Telegram-->
                                                <a href="https://tgme.pro/sputnik_ws_signals" class="header_burger_menu_window_mail_notifocations_item" target="_blank">
                                                    <!--Svg Icon-->
                                                    <svg class="header_burger_menu_window_mail_notifocations_tg" id="mailing_tg_burger" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"></path></svg>
                                                    <!--Content-->
                                                    <div class="header_burger_menu_window_mail_notifocations_content">
                                                        <div class="header_burger_menu_window_mail_notifocations_suptitle">
                                                            Рассылка в
                                                        </div>
                                                        <div class="header_burger_menu_window_mail_notifocations_text">
                                                            Telegram
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--Vk-->
                                                <a href="https://vk.com/sputnik_ws?w=app5748831_-179403718" class="header_burger_menu_window_mail_notifocations_item" target="_blank">
                                                    <!--Svg Icon-->
                                                    <svg class="header_burger_menu_window_mail_notifocations_vk" version="1.1" id="mailing_vk_burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="548.358px" height="548.358px" viewBox="0 0 548.358 548.358" style="enable-background:new 0 0 548.358 548.358;" xml:space="preserve">
    <g>
        <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571
        l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13
        c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939
        l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568
        c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859
        c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238
        c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849
        c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995
        c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706
        c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125
        c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137
        c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71
        c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851
        c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837
        c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418
        c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431
        c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558
        c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267
        c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427
        c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711
        C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659
        c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981
        c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416
        c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834
        c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851
        c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418
        c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429
        c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274
        l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14
        c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712
        C546.782,404.25,546.115,401.725,545.451,400.298z"></path>
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
                                                    <!--Content-->
                                                    <div class="header_burger_menu_window_mail_notifocations_content">
                                                        <div class="header_burger_menu_window_mail_notifocations_suptitle">
                                                            Рассылка во
                                                        </div>
                                                        <div class="header_burger_menu_window_mail_notifocations_text">
                                                            Вконтакте
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Social Media-->
                                    <div class="header_burder_menu_window_social_nw_block">
                                        <div class="header_burder_menu_window_social_nw_block_inner">
                                            <!--Vk-->
                                            <a href='https://vk.com/sputnik_ws' class="header_burder_menu_window_social_nw_link" target="_blank">
                                                <svg class="header_burder_menu_window_social_nw_vk" id="burger_vk_1" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M14.77 10.358c.531.573 1.091 1.111 1.567 1.741.21.28.41.569.562.894.216.462.02.97-.355.998l-2.33-.002c-.602.056-1.081-.212-1.485-.666-.322-.363-.621-.75-.932-1.124a2.296 2.296 0 0 0-.42-.412c-.317-.228-.593-.159-.775.208-.186.373-.228.786-.246 1.201-.025.606-.19.766-.742.793-1.178.062-2.296-.135-3.335-.792-.916-.578-1.626-1.395-2.245-2.32-1.203-1.801-2.124-3.78-2.953-5.815-.187-.458-.051-.704.408-.712a55.95 55.95 0 0 1 2.281-.002c.309.005.513.2.633.523.411 1.117.914 2.18 1.546 3.166.169.262.34.524.585.709.27.204.476.136.603-.196.08-.211.116-.438.134-.664.06-.777.068-1.553-.037-2.327-.065-.483-.312-.796-.748-.887-.223-.047-.19-.139-.082-.279.188-.242.364-.393.716-.393h2.634c.415.09.507.296.564.757l.002 3.232c-.005.178.08.708.372.826.232.084.386-.122.526-.285.63-.74 1.08-1.613 1.483-2.518.178-.398.332-.81.48-1.224.11-.306.283-.457.596-.45l2.535.003c.075 0 .151 0 .224.014.428.08.545.284.413.745-.208.723-.613 1.325-1.008 1.93-.423.646-.875 1.27-1.295 1.92-.385.594-.354.893.124 1.408z" stroke="none"></path></svg>
                                            </a>
                                            <!--Telegram-->
                                            <a href="https://tgme.pro/sputnik_ws" class="header_burder_menu_window_social_nw_link" target="_blank">
                                                <svg class="header_burder_menu_window_social_nw_tg" id="burger_tg_1" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"></path></svg>
                                            </a>
                                            <!--Instagram-->
                                            <a href="https://www.instagram.com/sputnik_ws/" class="header_burder_menu_window_social_nw_link" target="_blank">
                                                <svg class="header_burder_menu_window_social_nw_inst" id="burder_inst_1" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M6 2h6a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4zm3 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm3.444-5.556a.889.889 0 1 0 0-1.777.889.889 0 0 0 0 1.777z" stroke="none"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header_burger_menu_window_close" ontouchmove="BurgerClose(event)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>










<!--Subheader Mobile-->
<div class="subheader_mobile">
    <div class="container_mobile">
        <div class="subheader_mobile_inner">
            <!--Navigation-->
            <div class="subheader_mobile_navigation">
                <!--Navigation Item-->
                <a href="/ideas" class="subheader_mobile_navigation_link <?php if($this->route['controller'] == 'Main' OR $this->route['controller'] == 'Ideas'):?>active<?php endif;?>">Идеи</a>
                <!--Navigation Item-->
                <a href="/robot" class="subheader_mobile_navigation_link <?php if($this->route['controller'] == 'Robot'):?>active<?php endif;?>">Робот</a>
                <!--Navigation Item-->
                <a href="/news" class="subheader_mobile_navigation_link <?php if($this->route['controller'] == 'News'):?>active<?php endif;?>">Новости</a>
                <!--Navigation Item-->
                <a href="/calendar" class="subheader_mobile_navigation_link <?php if($this->route['controller'] == 'Calendar'):?>active<?php endif;?>">Календарь</a>
                <!--Navigation Item-->
                <a href="/help" class="subheader_mobile_navigation_link <?php if($this->route['controller'] == 'Help' OR $this->route['controller'] == 'Feedback'):?>active<?php endif;?>">Помощь</a>
            </div>
        </div>
    </div>
</div>





<!--Up Button-->
<div class="fixation">
    <a href='javascript://0' onclick="slowScroll('#up')" class="up_button">
        <div class="up_button_inner">
            <!--Svg Arrow Icon-->
            <svg class="up_button_icon" version="1.1" id="arrow_back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
<g>
    <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
    L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
    c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
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
</div>






<!--Cookie Notification-->
<div class="cookie_notification">
    <div class="cookie_notification_inner">
        <!--Text-->
        <div class="cookie_notification_text">
            Используя наш сайт, вы соглашаетесь с использованием файлов cookie и сервисов сбора технических данных посетителей для обеспечения работоспособности и улучшения качества обслуживания.
            <a href="<?php $documentCookies = \R::find('documents', "id = ?", ['2']); echo "/main/" . $documentCookies['2']['alias'];?>" class="cookie_notification_text_link">
                Подробнее
            </a>
        </div>
        <!--Button-->
        <div class="cookie_notification_text_button">
            Ок, продолжить.
        </div>
    </div>
</div>


<!--Modal Signal Window-->
<div class="signal_modal_window" id="modal_signal" role="dialog" tabindex="-2">
    <div class="container_modal">
        <div class="signal_modal_window_inner">
        
        </div>
    </div>
</div>





<!--Modal Trading Advisor-->
<div class="modal_trading_advisor" id="modal_advisor" role="dialog" tabindex="-2">
    <div class="container_modal">
        <div class="modal_trading_advisor_inner">
        
        </div>
    </div>
</div>


<!---->





<div class="php_content">
    <?=$content;?>
</div>















<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="container_margin">
                <!--Social Networks-->
                <div class="social_nw">
                    <div class="social_nw_inner">
                        <!--Svg Icon Vk-->
                        <a href="https://vk.com/sputnik_ws" class="social_link social_vk_link" target="_blank">
                            <svg class='social_vk' id='vk_1' xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M14.77 10.358c.531.573 1.091 1.111 1.567 1.741.21.28.41.569.562.894.216.462.02.97-.355.998l-2.33-.002c-.602.056-1.081-.212-1.485-.666-.322-.363-.621-.75-.932-1.124a2.296 2.296 0 0 0-.42-.412c-.317-.228-.593-.159-.775.208-.186.373-.228.786-.246 1.201-.025.606-.19.766-.742.793-1.178.062-2.296-.135-3.335-.792-.916-.578-1.626-1.395-2.245-2.32-1.203-1.801-2.124-3.78-2.953-5.815-.187-.458-.051-.704.408-.712a55.95 55.95 0 0 1 2.281-.002c.309.005.513.2.633.523.411 1.117.914 2.18 1.546 3.166.169.262.34.524.585.709.27.204.476.136.603-.196.08-.211.116-.438.134-.664.06-.777.068-1.553-.037-2.327-.065-.483-.312-.796-.748-.887-.223-.047-.19-.139-.082-.279.188-.242.364-.393.716-.393h2.634c.415.09.507.296.564.757l.002 3.232c-.005.178.08.708.372.826.232.084.386-.122.526-.285.63-.74 1.08-1.613 1.483-2.518.178-.398.332-.81.48-1.224.11-.306.283-.457.596-.45l2.535.003c.075 0 .151 0 .224.014.428.08.545.284.413.745-.208.723-.613 1.325-1.008 1.93-.423.646-.875 1.27-1.295 1.92-.385.594-.354.893.124 1.408z" stroke="none"></path></svg>
                        </a>
                        
                        <!--Svg Icon Telegram-->
                        <a href="https://tgme.pro/sputnik_ws" class="social_link social_tg_link" target="_blank">
                            <svg class='social_nw_tg' id='tg_1'  enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                        </a>
                        <!--Svg Icon Instagram-->
                        <a href="https://www.instagram.com/sputnik_ws" class="social_link social_inst_link" target="_blank">
                            <svg class='social_inst' id='inst_1' xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M6 2h6a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4zm3 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm3.444-5.556a.889.889 0 1 0 0-1.777.889.889 0 0 0 0 1.777z"  stroke="none"></path></svg>
                        </a>
                    </div>
                </div>
                <!--Footer Navigation-->
                <div class="footer_nav">
                    <div class="footer_nav_inner">
                        <a href="/ideas" class="footer_nav_link">Идеи</a>
                        <a href="/robot" class="footer_nav_link">Робот</a>
                        <a href="/news" class="footer_nav_link">Новости</a>
                        <a href="/calendar" class="footer_nav_link">Календарь</a>
                        <a href="/help" class="footer_nav_link">Помощь</a>
                        <a href="" class="footer_nav_link">Мобильная версия</a>
                    </div>
                </div>
                <!--Mailing Notifications-->
                <div class="footer_ml_notification">
                    <div class="footer_ml_notification_inner">
                        <!--Telegram-->
                        <a href='https://tgme.pro/sputnik_ws_signals' class="footer_ml_notification_item" target="_blank">
                            <!--Svg Icon-->
                            <svg class='social_nw_tg_mailing' id='mailing_tg_1'  enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                            <!--Content-->
                            <div class="footer_ml_notification_item_content">
                                <div class="footer_ml_notification_item_subtitle">
                                    Рассылка в
                                </div>
                                <div class="footer_ml_notification_item_text">
                                    Telegram
                                </div>
                            </div>
                        </a>
                        <!--Vk-->
                        <a href="https://vk.com/sputnik_ws?w=app5748831_-179403718" class="footer_ml_notification_item" target="_blank">
                            <!--Svg Icon-->
                            <svg class='social_vk_mailing' version="1.1" id="mailing_vk_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="548.358px" height="548.358px" viewBox="0 0 548.358 548.358" style="enable-background:new 0 0 548.358 548.358;"
                                 xml:space="preserve">
<g>
    <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571
    l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13
    c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939
    l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568
    c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859
    c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238
    c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849
    c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995
    c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706
    c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125
    c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137
    c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71
    c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851
    c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837
    c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418
    c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431
    c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558
    c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267
    c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427
    c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711
    C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659
    c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981
    c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416
    c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834
    c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851
    c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418
    c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429
    c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274
    l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14
    c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712
    C546.782,404.25,546.115,401.725,545.451,400.298z"/>
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
                            <!--Content-->
                            <div class="footer_ml_notification_item_content">
                                <div class="footer_ml_notification_item_subtitle">
                                    Рассылка во
                                </div>
                                <div class="footer_ml_notification_item_text">
                                    Вконтакте
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--Footer Border-->
                <div class="footer_border"></div>
                <!--Company Information-->
                <div class="footer_company_information">
                    <div class="footer_company_information_inner">
                        <div class="footer_company_information_text">
                            Мы не предлагаем своим клиентам финансовые продукты, в том числе контракты на разницу цен и другие сложные финансовые инструменты. Торговля на CFD отличается высоким уровнем риска, поскольку использование кредитного плеча может сказаться на вашем финансовом положении как положительно, так и отрицательно.
                        </div>
                    </div>
                </div>
                <!--Footer Mobile Navigation-->
                <div class="footer_mobile_navigation">
                    <div class="footer_mobile_navigation_inner">
                        <a href="" class="footer_mobile_navigation_link">
                            Версия для компьютеров
                        </a>
                        <a href="" class="footer_mobile_navigation_link">
                            Помощь
                        </a>
                        <a href="" class="footer_mobile_navigation_link">
                            Соглашение
                        </a>
                    </div>
                </div>
                <!--Footer Border-->
                <div class="footer_border last"></div>
                <!--Footer Last Block-->
                <div class="footer_last_block">
                    <!--Footer Company-->
                    <div class="footer_company">
                        <div class="footer_company_text">
                            © 2020, <a href="" class="footer_company_text_link">Спутник</a>
                        </div>
                        <!--Footer Age Limit-->
                        <div class="footer_age_limit">
                            18+
                        </div>
                    </div>
                    <!--Footer Language-->
                    <a href='' class="footer_lang">
                        <div class="footer_lang_inner">
                            <div class="footer_lang_text">Язык:</div>
                            <div class="footer_lang_reg">
                                RUS
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





<!--Connection of JavaScript-->
<script src="<?=JS_1;?>"></script>
<script src="<?=JS_2;?>"></script>
<script src="<?=JS_COOKIE;?>"></script>
<script src="<?=JS_SEARCH;?>"></script>
<script src='<?=JS_BASE;?>/main.js'></script>
<script src='<?=JS_BASE;?>/app.js'></script>
<?php
    // проходим циклом по массиву скриптов
    foreach ($scripts as $script) {
        // выводим скрипты
        echo $script;
    }
?>

</body>
</html>
