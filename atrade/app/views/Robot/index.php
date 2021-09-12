<link rel="stylesheet" href="/public/css/robot/style.css">




<!--Preloader-->
<div class="preloader" id="preloader">
</div>

<?php if($robot):?>
    <?php foreach($robot as $item):?>
<!--Header-->
<header id='up' class="header animation-items animation-no-hide">
    <div class="container">
        <div class="header-inner">
            <!--Logotype-->
            <a href='<?=PATH;?>' class="logotype-block" tabindex="-2">
                <svg class="logotype-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 465.13 459"><defs><style>.cls-1{fill:#13a492;}.cls-2{fill:#302213;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="logo"><path id="A" class="cls-1" d="M34,0l96.5,96.5H174L372.25,294.75V346l92.87,92.88V0ZM368,196l-94-95h94Z"></path><polygon id="T" class="cls-2" points="0.5 165.5 0.5 21.5 438 459 296.5 459 186.25 348.75 79.5 455.5 0 455.5 0 392 115 277 0.5 165.5"></polygon></g></g></svg>
                <svg class="logotype-name" style="display: block; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 892.76 204.03"><g id="Слой_2" data-name="Слой 2"><g id="name"><path d="M132.5,164.42H59.84L48.16,201.18H0L70.67,11.4H122l70.67,189.78H144.47Zm-60.69-37h48.73L96.31,47.3Z"></path><path d="M336,11.4v37H285V201.18H238.22V48.44h-51v-37Z"></path><path d="M436.26,100.87h-5.41q-27.08,0-38.18,13.68v86.63h-45.6V61.55h44.17V84.92q4-11.4,12.25-18t21.66-6.55a43.39,43.39,0,0,1,6.7.43,41.6,41.6,0,0,1,5.55,1.28Z"></path><path d="M529.16,187.5q-6.55,6.56-17.81,11.54a60.27,60.27,0,0,1-24.65,5,42.77,42.77,0,0,1-16.81-3.14,35.22,35.22,0,0,1-12.4-8.55,38,38,0,0,1-7.69-12.68,44,44,0,0,1-2.71-15.53q0-19.37,12.11-29.2t34.34-11.55q8.26-.55,17.52-.85t16.39-.57V117.4q0-22.79-25.36-22.8a80.7,80.7,0,0,0-19.24,2.28,77.36,77.36,0,0,0-17,6.27l-8.26-31.63a97.52,97.52,0,0,1,23.5-9.26,115.9,115.9,0,0,1,29.5-3.56Q540,58.7,556.51,74T573,119.68v81.5H529.16Zm-24.79-13.39a43.9,43.9,0,0,0,12.39-1.71,47.16,47.16,0,0,0,10.69-4.56V147q-6.84.57-12.25,1.28c-3.62.47-7.13.9-10.55,1.28q-14,1.71-14,13.11a10.45,10.45,0,0,0,3.56,8.26Q497.82,174.11,504.37,174.11Z"></path><path d="M737.46,201.18h-43.6v-17.5a47.65,47.65,0,0,1-17,14.84Q666.51,204,652,204A49.59,49.59,0,0,1,630,199a52.18,52.18,0,0,1-17.81-14.25,68.53,68.53,0,0,1-11.83-22.37,94.32,94.32,0,0,1-4.27-29.35q0-18.22,5.84-32.2a68.36,68.36,0,0,1,15.67-23.36A64.2,64.2,0,0,1,640.57,63.4a82.22,82.22,0,0,1,27.93-4.7,76.28,76.28,0,0,1,13.11,1,83,83,0,0,1,10.25,2.42V0h45.6Zm-69-31.92q14.54,0,23.36-9.72V95.18q-6.27-2.28-16.24-2.28-17.1,0-25.5,10.58t-8.41,28.89q0,16.31,6.41,26.6T668.5,169.26Z"></path><path d="M833.48,58.7q27.36,0,43.32,16.1t16,44.6a112.9,112.9,0,0,1-2.57,23.08H809.26q.57,12.83,8.7,20.66T842.89,171a131.92,131.92,0,0,0,21.51-1.85,79.08,79.08,0,0,0,19.52-5.56l5.7,29.35a100.67,100.67,0,0,1-24.36,8.27A136.63,136.63,0,0,1,837.19,204q-18.24,0-32.2-5.27a65,65,0,0,1-23.37-14.68,61.39,61.39,0,0,1-14.24-22.51,83.09,83.09,0,0,1-4.85-29.07,89.27,89.27,0,0,1,5-30.77A64.57,64.57,0,0,1,781.77,78.5a62.38,62.38,0,0,1,22.37-14.67A79.9,79.9,0,0,1,833.48,58.7Zm-1.42,29.07q-10.83,0-16.67,7T809.55,114H850a19.88,19.88,0,0,0,.57-4.84q0-9.12-4.84-15.25T832.06,87.77Z"></path></g></g></svg>
            </a>
            <!--Average Profit-->
            <div class="average-profit">
                <div class="average-profit-inner">
<span class="average-profit-value">
<span id='average-profit-value'>0</span>%
</span>
                    <script>
                        setTimeout(function(){
                            $('.header.active #average-profit-value').spincrement({
                                thousandSeparator: "",
                                from: 0,
                                to: <?=$item->average_profit;?>,
                                decimalPlaces: 1,
                                decimalPoint: ',',
                                duration: 1200,
                            });
                        },1000);
                    </script>
                    
                    <span class="average-profit-description">
Средний месячный заработок наших клиентов с роботом <?=$item->name;?>
</span>
                </div>
            </div>
            <!--Buttons-->
            <div class="buttons">
                <div class="buttons-container">
                    <div class="button animation-button" onclick="slowScroll('#try-free')">
                        <span>Попробовать бесплатно</span>
                        <div class="button-circle"></div>
                    </div>
                </div>
            </div>
            <!--Burger-->
            <div class="burger-menu">
                <svg class='burger-menu-icon' xmlns="http://www.w3.org/2000/svg" width="36" height="30" viewBox="0 0 36 30" fill="none">
                    <rect width="36" height="4" rx="2"/>
                    <rect x="13" y="13" width="23" height="4" rx="2"/>
                    <rect y="26" width="36" height="4" rx="2"/>
                </svg>
            </div>
            <!--Mobile Menu-->
            <div class="mobile-menu-wrapper">
                <div class="mobile-menu">
                    <div class="mobile-menu-inner" ontouchmove="noScroll(event)">
                        <div class="mobile-menu-inner-wrapper">
                            <div class="container-indents __mobile_header">
                                <!--Button-->
                                <a href="/robot/payment" class="mobile-menu-button">
                                    Купить
                                </a>
                                <!--Button-->
                                <div id='mobile-menu-free-button' class="mobile-menu-button" onclick="slowScroll('#try-free')">
                                    Попробовать бесплатно
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-close" ontouchmove="BurgerClose(event)"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--Main Content-->
<main class="main-content">
    <!--Intro-->
    <div class="intro-wrapper animation-items animation-no-hide">
        <!--Patterns-->
        <div class="intro-patterns">
            <div class="intro-patterns-inner">
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="intro-patterns-block">
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                    <div class="intro-patterns-circle"></div>
                </div>
            </div>
        </div>
        <!--Robot Name-->
        <div class="intro-robot-name">
            ATRADE ROBOT
        </div>
        <div class="container-content">
            <section class="intro">
                <div class="container-indents">
                    <div class="intro-inner">
                        <!--Left-->
                        <div class="intro-left">
                            <!--Name-->
                            <h1 class="intro-name animation-items">
                                <?=$item->name;?>
                            </h1>
                            <!--Title-->
                            <h2 class="intro-tutle">
                                <?=$item->subtitle;?>
                            </h2>
                            <!--Subtitle-->
                            <h3 class="intro-subtitle">
                                <?=$item->slogan;?>.
                            </h3>
                            <!--Calculator-->
                            <div class="intro-calculator">
                                <!--Rage Block-->
                                <div class="intro-calculator-rage-block">
                                    <!--Rage-->
                                    <div class="intro-calculator-rage first-rage">
                                        <h3 class="intro-calculator-rage-title">
                                            Период:
                                        </h3>
                                        <div class="intro-calculator-rage-wrapper">
<span class="intro-calculator-rage-min">
1 день
</span>
                                            <div class="input-rage-block">
                                                <input type="range" min="1" max="365" value="184" step="1" id="period-range" class="input-range" oninput="period(this.value);" tabindex="-2">
                                                <output for="period" id="period-value" class="output-range" tabindex="-2">184 дня</output>
                                            </div>
                                            <span class="intro-calculator-rage-max">365 дней
</span>
                                        </div>
                                    </div>
                                    <!--Rage-->
                                    <div class="intro-calculator-rage second-rage">
                                        <h3 class="intro-calculator-rage-title">
                                            Размер депозита:
                                        </h3>
                                        <div class="intro-calculator-rage-wrapper">
<span class="intro-calculator-rage-min indent">
$100
</span>
                                            <div class="input-rage-block">
                                                <input type="range" min="100" max="10000" value="5000" step="100" id="deposit-range" class="input-range" oninput="deposit(this.value);" tabindex="-2">
                                                <output for="deposit" id="deposit-value" class="output-range" tabindex="-2">$5000</output>
                                            </div>
                                            <span class="intro-calculator-rage-max indent">$10000
</span>
                                        </div>
                                    </div>
                                </div>
                                <!--Calculation Data-->
                                <div class="intro-calculation-data">
                                    <!--Item-->
                                    <div class="intro-calculation-data-item">
                                        <h2 class="intro-calculation-data-item-title">
                                            Депозит:
                                        </h2>
                                        <span id='deposit' class="intro-calculation-data-item-value">
$<span id="deposit-animation">11593.3</span>
</span>
                                    </div>
                                    <!--Item-->
                                    <div class="intro-calculation-data-item">
                                        <h2 class="intro-calculation-data-item-title">
                                            Чистая прибыль:
                                        </h2>
                                        <span id='profit' class="intro-calculation-data-item-value">
$<span id="profit-animation">6593.3</span>
</span>
                                    </div>
                                    <!--Item-->
                                    <div class="intro-calculation-data-item">
                                        <h2 class="intro-calculation-data-item-title">
                                            Доходность:
                                        </h2>
                                        <span id='yield' class="intro-calculation-data-item-value profit">
<span id="yield-animation">131.9</span>%
</span>
                                    </div>
                                </div>
                            </div>
                            <!--Price-->
                            <div class="intro-price">
                                <div class="intro-price-title">
                                    Цена:
                                </div>
                                <div class="intro-price-value">
                                    <span id="price-animation-1"><?= mb_substr($item->price,0,1);?></span> <span id="price-animation-2"><?= mb_substr($item->price,1,4);?></span>
    
                                    <script>
                                        setTimeout(function () {
                                            $('#price-animation-1').spincrement({
                                                thousandSeparator: "",
                                                from: 0,
                                                to: <?= mb_substr($item->price,0,1);?>,
                                                duration: 1200,
                                            });

                                            $('#price-animation-2').spincrement({
                                                thousandSeparator: "",
                                                from: 0,
                                                to: <?= mb_substr($item->price,1,4);?>,
                                                duration: 1200,
                                            });
                                        },2500)
                                    </script>
                                    
                                    <svg version="1.1" class="intro-price-value-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510.127px" height="510.127px" viewBox="0 0 510.127 510.127" style="enable-background:new 0 0 510.127 510.127;" xml:space="preserve">
<g>
    <g>
        <path d="M34.786,428.963h81.158v69.572c0,3.385,1.083,6.156,3.262,8.322c2.173,2.18,4.951,3.27,8.335,3.27h60.502
            c3.14,0,5.857-1.09,8.152-3.27c2.295-2.166,3.439-4.938,3.439-8.322v-69.572h182.964c3.377,0,6.156-1.076,8.334-3.256
            c2.18-2.178,3.262-4.951,3.262-8.336v-46.377c0-3.365-1.082-6.156-3.262-8.322c-2.172-2.18-4.957-3.27-8.334-3.27H199.628v-42.754
            h123.184c48.305,0,87.73-14.719,118.293-44.199c30.551-29.449,45.834-67.49,45.834-114.125c0-46.604-15.283-84.646-45.834-114.125
            C410.548,14.749,371.116,0,322.812,0H127.535c-3.385,0-6.157,1.089-8.335,3.256c-2.173,2.179-3.262,4.969-3.262,8.335v227.896
            H34.786c-3.384,0-6.157,1.145-8.335,3.439c-2.172,2.295-3.262,5.012-3.262,8.151v53.978c0,3.385,1.083,6.158,3.262,8.336
            c2.179,2.18,4.945,3.256,8.335,3.256h81.158v42.754H34.786c-3.384,0-6.157,1.09-8.335,3.27c-2.172,2.166-3.262,4.951-3.262,8.322
            v46.377c0,3.385,1.083,6.158,3.262,8.336C28.629,427.887,31.401,428.963,34.786,428.963z M199.628,77.179h115.938
            c25.6,0,46.248,7.485,61.953,22.46c15.697,14.976,23.549,34.547,23.549,58.691c0,24.156-7.852,43.733-23.549,58.691
            c-15.705,14.988-36.354,22.473-61.953,22.473H199.628V77.179z"></path>
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
                                <div class="intro-old-price-value">
                                    <?=$item->old_price?>
                                    <svg version="1.1" class="intro-old-price-value-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510.127px" height="510.127px" viewBox="0 0 510.127 510.127" style="enable-background:new 0 0 510.127 510.127;" xml:space="preserve">
<g>
    <g>
        <path d="M34.786,428.963h81.158v69.572c0,3.385,1.083,6.156,3.262,8.322c2.173,2.18,4.951,3.27,8.335,3.27h60.502
            c3.14,0,5.857-1.09,8.152-3.27c2.295-2.166,3.439-4.938,3.439-8.322v-69.572h182.964c3.377,0,6.156-1.076,8.334-3.256
            c2.18-2.178,3.262-4.951,3.262-8.336v-46.377c0-3.365-1.082-6.156-3.262-8.322c-2.172-2.18-4.957-3.27-8.334-3.27H199.628v-42.754
            h123.184c48.305,0,87.73-14.719,118.293-44.199c30.551-29.449,45.834-67.49,45.834-114.125c0-46.604-15.283-84.646-45.834-114.125
            C410.548,14.749,371.116,0,322.812,0H127.535c-3.385,0-6.157,1.089-8.335,3.256c-2.173,2.179-3.262,4.969-3.262,8.335v227.896
            H34.786c-3.384,0-6.157,1.145-8.335,3.439c-2.172,2.295-3.262,5.012-3.262,8.151v53.978c0,3.385,1.083,6.158,3.262,8.336
            c2.179,2.18,4.945,3.256,8.335,3.256h81.158v42.754H34.786c-3.384,0-6.157,1.09-8.335,3.27c-2.172,2.166-3.262,4.951-3.262,8.322
            v46.377c0,3.385,1.083,6.158,3.262,8.336C28.629,427.887,31.401,428.963,34.786,428.963z M199.628,77.179h115.938
            c25.6,0,46.248,7.485,61.953,22.46c15.697,14.976,23.549,34.547,23.549,58.691c0,24.156-7.852,43.733-23.549,58.691
            c-15.705,14.988-36.354,22.473-61.953,22.473H199.628V77.179z"></path>
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
                            <!--Buttons-->
                            <div class="intro-buttons">
                                <!--Button-->
                                <a href='/robot/payment' class="intro-button buy-button animation-button payment-button" tabindex="-2">
                                    <span>Купить</span>
                                    <div class="buy-button-circle"></div>
                                </a>
                                <!--Button-->
                                <div class="intro-button try-for-free-button animation-button" onclick="slowScroll('#try-free')">
                                    <span>Попробовать бесплатно</span>
                                    <div class="try-for-free-button-circle"></div>
                                </div>
                            </div>
                        </div>
                        <!--Right-->
                        <div class="intro-right">
                            <!--Background-->
                            <img src="/public/images/robot/bg/<?=$item->robot_img?>" alt="Торговый робот" class="intro-background">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Intro Mobile-->
    <div class="intro-mobile-wrapper">
        <div class="container-content">
            <section class="intro-mobile">
                <div class="container-indents">
                    <div class="intro-mobile-inner">
                        <!--Left-->
                        <div class="intro-mobile-left">
                            <!--Title-->
                            <h1 class="intro-mobile-title">
                                ATrade Robot
                            </h1>
                            <!--Subtitle-->
                            <h2 class="intro-mobile-subtitle">
                                <?=$item->subtitle;?>
                            </h2>
                            <!--Advantages-->
                            <div class="intro-mobile-advantages">
                                <div class="intro-mobile-advantages-value">
                                    <span><?= str_ireplace('.', ',',$item->average_profit);?></span>%
                                </div>
                                <div class="intro-mobile-advantages-text">
                                    Средний месячный заработок наших клиентов с роботом <?=$item->name;?>
                                </div>
                            </div>
                            <!--Button-->
                            <div class="intro-mobile-button" onclick="slowScroll('#try-free')">
                                Попробовать бесплатно
                            </div>
                        </div>
                        <!--Right-->
                        <div class="intro-mobile-right">
                            <!--Background-->
                            <img src="/public/images/robot/bg/<?=$item->robot_img?>" alt="ATrade Robot v1.03" class="intro-mobile-background">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Calculator Mobile-->
    <div class="calculator-mobile-wrapper">
        <div class="container-content">
            <section class="calculator-mobile">
                <div class="container-indents">
                    <div class="calculator-mobile-inner">
                        <!--Title-->
                        <h2 class="calculator-mobile-title">
                            <?=$item->slogan;?>
                        </h2>
                        <!--Rage-->
                        <div class="calculator-mobile-rage-block">
                            <!--Item-->
                            <div class="calculator-mobile-rage mobile-first-rage">
                                <h3 class="calculator-mobile-rage-title">
                                    Период:
                                </h3>
                                <div class="mobile-input-rage-block">
                                    <input type="range" min="1" max="365" value="184" step="1" id="mobile-period-range" class="mobile-input-range" oninput="periodMobile(this.value);">
                                    <output for="mobile-period" id="mobile-period-value" class="mobile-output-range">184 дня</output>
                                </div>
                                <div class="calculator-mobile-rage-wrapper">
<span class="calculator-mobile-rage-min">
1 день
</span>
                                    <span class="calculator-mobile-rage-max">365 дней
</span>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="calculator-mobile-rage mobile-second-rage">
                                <h3 class="calculator-mobile-rage-title">
                                    Размер депозита:
                                </h3>
                                <div class="mobile-input-rage-block">
                                    <input type="range" min="100" max="10000" value="5000" step="100" id="mobile-deposit-range" class="mobile-input-range" oninput="depositMobile(this.value);">
                                    <output for="mobile-deposit" id="mobile-deposit-value" class="mobile-output-range">$5000</output>
                                </div>
                                <div class="calculator-mobile-rage-wrapper">
<span class="calculator-mobile-rage-min">
$100
</span>
                                    <span class="calculator-mobile-rage-max">$10000
</span>
                                </div>
                            </div>
                        </div>
                        <!--Data-->
                        <div class="calculation-mobile-data">
                            <!--Item-->
                            <div class="calculation-mobile-data-item">
                                <h2 class="calculation-mobile-data-item-title">
                                    Депозит:
                                </h2>
                                <span id='mobile-deposit' class="calculation-mobile-data-item-value">
$<span id="mobile-deposit-animation">11593.3</span>
</span>
                            </div>
                            <!--Item-->
                            <div class="calculation-mobile-data-item yield">
                                <h2 class="calculation-mobile-data-item-title">
                                    Чистая прибыль:
                                </h2>
                                <span id='mobile-profit' class="calculation-mobile-data-item-value">
$<span id="mobile-profit-animation">6563.3</span>
</span>
                            </div>
                            <!--Item-->
                            <div class="calculation-mobile-data-item">
                                <h2 class="calculation-mobile-data-item-title">
                                    Доходность:
                                </h2>
                                <span id='mobile-yield' class="calculation-mobile-data-item-value profit">
<span id="mobile-yield-animation">131.9</span>%
</span>
                            </div>
                        </div>
                        <!--Button And Price-->
                        <div class="calculation-mobile-container">
                            <!--Button-->
                            <a href='/robot/payment' class="calculation-mobile-button">
                                Купить
                            </a>
                            <!--Price-->
                            <div class="calculation-mobile-price-block">
                                <div class="calculation-mobile-price-title">
                                    Цена:
                                </div>
                                <div class="calculation-mobile-price-value">
                                    <?=$item->price;?>
                                    <svg version="1.1" class="calculation-mobile-price-value-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510.127px" height="510.127px" viewBox="0 0 510.127 510.127" style="enable-background:new 0 0 510.127 510.127;" xml:space="preserve">
<g>
    <g>
        <path d="M34.786,428.963h81.158v69.572c0,3.385,1.083,6.156,3.262,8.322c2.173,2.18,4.951,3.27,8.335,3.27h60.502
            c3.14,0,5.857-1.09,8.152-3.27c2.295-2.166,3.439-4.938,3.439-8.322v-69.572h182.964c3.377,0,6.156-1.076,8.334-3.256
            c2.18-2.178,3.262-4.951,3.262-8.336v-46.377c0-3.365-1.082-6.156-3.262-8.322c-2.172-2.18-4.957-3.27-8.334-3.27H199.628v-42.754
            h123.184c48.305,0,87.73-14.719,118.293-44.199c30.551-29.449,45.834-67.49,45.834-114.125c0-46.604-15.283-84.646-45.834-114.125
            C410.548,14.749,371.116,0,322.812,0H127.535c-3.385,0-6.157,1.089-8.335,3.256c-2.173,2.179-3.262,4.969-3.262,8.335v227.896
            H34.786c-3.384,0-6.157,1.145-8.335,3.439c-2.172,2.295-3.262,5.012-3.262,8.151v53.978c0,3.385,1.083,6.158,3.262,8.336
            c2.179,2.18,4.945,3.256,8.335,3.256h81.158v42.754H34.786c-3.384,0-6.157,1.09-8.335,3.27c-2.172,2.166-3.262,4.951-3.262,8.322
            v46.377c0,3.385,1.083,6.158,3.262,8.336C28.629,427.887,31.401,428.963,34.786,428.963z M199.628,77.179h115.938
            c25.6,0,46.248,7.485,61.953,22.46c15.697,14.976,23.549,34.547,23.549,58.691c0,24.156-7.852,43.733-23.549,58.691
            c-15.705,14.988-36.354,22.473-61.953,22.473H199.628V77.179z"></path>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Advantages-->
    <div class="advantages-wrapper animation-items animation-no-hide">
        <div class="container-content">
            <section class="advantages">
                <div class="container-indents">
                    <!--Title Block-->
                    <div class="advantages-title-block">
                        <h1 class="advantages-title">
                            С торговым роботом Вы сможете:
                        </h1>
                        <div class="advantages-pattern">
                            <div class="advantages-pattern-block">
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                                <div class="advantages-pattern-circle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages-inner">
                        <!--Item-->
                        <div class="advantages-item first">
                            <svg class='advantages-item-svg' xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <path d="M41.2498 31.875C43.8456 31.875 46.3832 31.1052 48.5416 29.663C50.7 28.2208 52.3823 26.171 53.3757 23.7727C54.3691 21.3744 54.629 18.7354 54.1226 16.1894C53.6161 13.6434 52.3661 11.3048 50.5305 9.46923C48.695 7.63366 46.3563 6.38363 43.8103 5.8772C41.2643 5.37077 38.6253 5.63069 36.227 6.62409C33.8288 7.61749 31.7789 9.29975 30.3367 11.4581C28.8945 13.6165 28.1248 16.1541 28.1248 18.75C28.1287 22.2298 29.5128 25.5659 31.9733 28.0264C34.4339 30.487 37.77 31.8711 41.2498 31.875ZM36.5623 28.9757V23.4375C36.5625 23.1889 36.6614 22.9507 36.8372 22.7749C37.0129 22.5991 37.2512 22.5003 37.4998 22.5H41.2498C41.4983 22.5003 41.7366 22.5991 41.9124 22.7749C42.0881 22.9507 42.187 23.1889 42.1873 23.4375V29.9606C41.878 29.9862 41.5655 30 41.2498 30C39.6315 30.0017 38.0322 29.6522 36.5623 28.9757ZM47.8123 27.882V15.9375C47.8125 15.6889 47.9114 15.4507 48.0872 15.2749C48.2629 15.0991 48.5012 15.0003 48.7498 15H51.8563C52.6683 17.2955 52.713 19.7926 51.9837 22.1158C51.2544 24.4389 49.7905 26.4624 47.8123 27.882ZM41.2498 7.5C43.2239 7.50119 45.163 8.02154 46.8725 9.00884C48.5821 9.99614 50.0019 11.4157 50.9895 13.125H48.7498C48.0041 13.1258 47.2892 13.4224 46.7619 13.9497C46.2347 14.477 45.9381 15.1918 45.9373 15.9375V28.9757C45.3334 29.2539 44.7059 29.4775 44.0623 29.644V23.4375C44.0614 22.6918 43.7648 21.977 43.2376 21.4497C42.7103 20.9224 41.9954 20.6258 41.2498 20.625H37.4998C36.7541 20.6258 36.0392 20.9224 35.5119 21.4497C34.9847 21.977 34.6881 22.6918 34.6873 23.4375V27.882C32.7533 26.4936 31.3099 24.5272 30.5648 22.2661C29.8196 20.0049 29.8113 17.5657 30.541 15.2995C31.2706 13.0333 32.7006 11.0572 34.625 9.65558C36.5494 8.25397 38.869 7.49922 41.2498 7.5Z"/>
                                <path d="M2.81226 25.3125H15.9373C16.1072 25.3125 16.2739 25.2663 16.4196 25.1789L20.8845 22.5H24.7953C25.5329 25.7213 27.2 28.6551 29.5898 30.9375H26.2498C25.5041 30.9384 24.7892 31.2349 24.262 31.7622C23.7347 32.2895 23.4381 33.0043 23.4373 33.75V51.5625H21.5623V40.3125C21.5614 39.5668 21.2648 38.852 20.7376 38.3247C20.2103 37.7974 19.4954 37.5008 18.7498 37.5H14.9998C14.2541 37.5008 13.5392 37.7974 13.0119 38.3247C12.4847 38.852 12.1881 39.5668 12.1873 40.3125V51.5625H9.37476V53.4375H58.1248V51.5625H55.3123V28.067C57.1498 25.3075 58.1285 22.0653 58.1248 18.75C58.1248 9.44509 50.5547 1.875 41.2498 1.875C33.2333 1.875 26.5051 7.49393 24.7953 15H20.8845L16.4196 12.3211C16.2739 12.2337 16.1072 12.1875 15.9373 12.1875H2.81226C2.56362 12.1875 2.32516 12.2863 2.14935 12.4621C1.97353 12.6379 1.87476 12.8764 1.87476 13.125V24.375C1.87476 24.6236 1.97353 24.8621 2.14935 25.0379C2.32516 25.2137 2.56362 25.3125 2.81226 25.3125ZM19.6873 21.0317L16.8748 22.7192V14.7808L19.6873 16.4683V21.0317ZM14.0623 51.5625V40.3125C14.0625 40.0639 14.1614 39.8257 14.3372 39.6499C14.5129 39.4741 14.7512 39.3753 14.9998 39.375H18.7498C18.9983 39.3753 19.2366 39.4741 19.4124 39.6499C19.5881 39.8257 19.687 40.0639 19.6873 40.3125V51.5625H14.0623ZM25.3123 51.5625V33.75C25.3125 33.5014 25.4114 33.2632 25.5872 33.0874C25.7629 32.9116 26.0012 32.8128 26.2498 32.8125H29.9998C30.2483 32.8128 30.4866 32.9116 30.6624 33.0874C30.8381 33.2632 30.937 33.5014 30.9373 33.75V51.5625H25.3123ZM32.7823 33.342C33.3965 33.7001 34.0327 34.019 34.6873 34.2967V51.5625H32.8123V33.75C32.8121 33.6135 32.8021 33.4771 32.7823 33.342ZM36.5623 51.5625V34.962C38.0857 35.4028 39.6638 35.626 41.2498 35.625C41.5644 35.625 41.8768 35.6156 42.1873 35.5985V51.5625H36.5623ZM45.9373 34.962V51.5625H44.0623V35.3893C44.6949 35.2829 45.321 35.1403 45.9373 34.962ZM53.4373 51.5625H47.8123V34.2967C49.9319 33.3968 51.8459 32.0743 53.4373 30.4099V51.5625ZM41.2498 3.75C44.2165 3.75 47.1166 4.62973 49.5833 6.27796C52.05 7.92618 53.9726 10.2689 55.1079 13.0097C56.2433 15.7506 56.5403 18.7666 55.9615 21.6764C55.3828 24.5861 53.9541 27.2588 51.8564 29.3566C49.7586 31.4544 47.0858 32.883 44.1761 33.4618C41.2664 34.0406 38.2504 33.7435 35.5095 32.6082C32.7686 31.4729 30.4259 29.5503 28.7777 27.0836C27.1295 24.6168 26.2498 21.7167 26.2498 18.75C26.2543 14.7731 27.8361 10.9604 30.6481 8.14837C33.4602 5.3363 37.2729 3.7545 41.2498 3.75ZM21.5623 16.875H24.4795C24.3399 18.1211 24.3399 19.3789 24.4795 20.625H21.5623V16.875ZM3.74976 14.0625H14.9998V23.4375H3.74976V14.0625Z"/>
                                <path d="M48.7498 56.25H52.4998V58.125H48.7498V56.25Z"/>
                                <path d="M37.4998 56.25H41.2498V58.125H37.4998V56.25Z"/>
                                <path d="M26.2498 56.25H29.9998V58.125H26.2498V56.25Z"/>
                                <path d="M14.9998 56.25H18.7498V58.125H14.9998V56.25Z"/>
                            </svg>
                            <div class="advantages-item-text">
                                Прогнозировать рынок в реальном времени
                            </div>
                        </div>
                        <!--Item-->
                        <div class="advantages-item second">
                            <svg class='advantages-item-svg' xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                <path d="M61.132 39.137L58.631 38.553C58.499 37.914 58.33 37.282 58.125 36.662L59.988 34.915C60.3 34.623 60.392 34.164 60.216 33.773C59.672 32.571 59.002 31.414 58.223 30.332C57.973 29.985 57.532 29.835 57.12 29.96L54.696 30.696C54.259 30.206 53.794 29.74 53.302 29.303L54.04 26.88C54.164 26.471 54.015 26.028 53.668 25.778C53.13 25.39 52.573 25.029 52 24.697V7C52 4.243 49.757 2 47 2H7C4.243 2 2 4.243 2 7V33C2 35.757 4.243 38 7 38H17.573L14.3 47H9C8.447 47 8 47.448 8 48C8 50.757 10.243 53 13 53H25.345C25.491 53.221 25.622 53.452 25.777 53.667C26.027 54.014 26.466 54.164 26.88 54.039L29.304 53.303C29.741 53.793 30.206 54.259 30.698 54.696L29.96 57.119C29.836 57.528 29.985 57.971 30.332 58.221C31.412 59 32.57 59.671 33.774 60.215C34.165 60.392 34.623 60.301 34.916 59.987L36.662 58.123C37.28 58.328 37.913 58.497 38.554 58.629L39.138 61.131C39.236 61.548 39.587 61.857 40.014 61.899C40.688 61.966 41.357 62 42 62C42.643 62 43.312 61.966 43.987 61.9C44.414 61.858 44.765 61.549 44.863 61.132L45.447 58.63C46.088 58.498 46.72 58.329 47.339 58.124L49.085 59.988C49.379 60.301 49.838 60.393 50.227 60.216C51.427 59.673 52.585 59.002 53.667 58.222C54.015 57.972 54.164 57.529 54.04 57.119L53.303 54.695C53.794 54.258 54.26 53.792 54.697 53.302L57.121 54.039C57.528 54.164 57.974 54.014 58.224 53.667C59.002 52.586 59.673 51.429 60.217 50.226C60.394 49.836 60.302 49.377 59.989 49.084L58.126 47.337C58.331 46.717 58.5 46.085 58.632 45.445L61.133 44.861C61.55 44.764 61.859 44.412 61.901 43.986C61.966 43.314 62 42.645 62 42C62 41.355 61.966 40.686 61.899 40.012C61.857 39.586 61.549 39.234 61.132 39.137ZM7 4H47C48.654 4 50 5.346 50 7V23.721C49.67 23.658 49.324 23.757 49.085 24.011L47.339 25.875C46.721 25.67 46.088 25.501 45.447 25.369L44.863 22.867C44.765 22.45 44.414 22.141 43.987 22.099C42.635 21.966 41.364 21.966 40.012 22.099C39.585 22.141 39.234 22.45 39.136 22.867L38.552 25.369C37.911 25.501 37.279 25.67 36.66 25.875L34.914 24.011C34.621 23.699 34.163 23.607 33.772 23.783C32.572 24.326 31.414 24.997 30.332 25.777C29.984 26.027 29.835 26.47 29.959 26.88L30.301 28H10V16H20V14H10V8H44V20H46V7C46 6.448 45.553 6 45 6H9C8.447 6 8 6.448 8 7V28H4V7C4 5.346 5.346 4 7 4ZM30 30C29.768 30.232 29.521 30.451 29.303 30.696L27.012 30H30ZM4 33V30H26.209C26.041 30.069 25.889 30.177 25.777 30.332C24.999 31.413 24.328 32.57 23.784 33.773C23.607 34.163 23.699 34.622 24.012 34.915L25.17 36H7C5.346 36 4 34.654 4 33ZM19.7 38H25.5C25.455 38.184 25.407 38.367 25.369 38.553L22.868 39.137C22.451 39.234 22.142 39.586 22.1 40.012C22.034 40.686 22 41.355 22 42C22 42.645 22.034 43.313 22.101 43.988C22.143 44.414 22.452 44.766 22.869 44.863L25.37 45.447C25.478 45.972 25.628 46.487 25.785 47H16.428L19.7 38ZM13 51C11.696 51 10.584 50.164 10.171 49H24.102L24.011 49.085C23.699 49.377 23.607 49.836 23.783 50.227C23.902 50.49 24.05 50.742 24.181 51H13ZM59.966 43.082L57.539 43.649C57.145 43.741 56.846 44.061 56.78 44.46C56.622 45.417 56.369 46.363 56.028 47.271C55.886 47.649 55.986 48.076 56.281 48.352L58.087 50.045C57.766 50.687 57.402 51.313 57.004 51.915L54.653 51.2C54.265 51.081 53.846 51.209 53.59 51.521C52.972 52.273 52.276 52.969 51.521 53.59C51.209 53.847 51.083 54.266 51.2 54.653L51.915 57.004C51.311 57.403 50.686 57.766 50.045 58.088L48.353 56.281C48.077 55.986 47.647 55.886 47.272 56.029C46.367 56.369 45.421 56.622 44.46 56.781C44.061 56.847 43.741 57.146 43.649 57.54L43.083 59.967C42.347 60.012 41.655 60.012 40.919 59.967L40.353 57.54C40.261 57.146 39.942 56.847 39.542 56.781C38.581 56.622 37.636 56.368 36.73 56.029C36.353 55.887 35.924 55.986 35.649 56.281L33.957 58.088C33.314 57.766 32.688 57.403 32.086 57.004L32.802 54.654C32.919 54.267 32.792 53.848 32.481 53.591C31.727 52.971 31.031 52.275 30.412 51.522C30.155 51.21 29.735 51.083 29.349 51.201L26.998 51.915C26.599 51.312 26.236 50.687 25.914 50.045L27.721 48.352C28.016 48.076 28.116 47.649 27.974 47.271C27.633 46.362 27.38 45.416 27.222 44.459C27.157 44.06 26.857 43.74 26.463 43.648L24.036 43.081C24.012 42.715 24 42.353 24 42C24 41.647 24.012 41.285 24.034 40.918L26.461 40.351C26.855 40.259 27.154 39.939 27.22 39.54C27.378 38.582 27.631 37.636 27.972 36.729C28.115 36.351 28.015 35.924 27.72 35.647L25.913 33.954C26.234 33.312 26.598 32.687 26.996 32.084L29.347 32.798C29.734 32.915 30.154 32.788 30.41 32.477C31.029 31.725 31.724 31.029 32.479 30.408C32.791 30.151 32.917 29.732 32.8 29.345L32.085 26.994C32.689 26.595 33.314 26.232 33.955 25.91L35.647 27.717C35.922 28.012 36.351 28.111 36.728 27.969C37.633 27.629 38.579 27.376 39.54 27.217C39.939 27.151 40.259 26.852 40.351 26.458L40.917 24.031C41.653 23.986 42.345 23.986 43.081 24.031L43.647 26.458C43.739 26.852 44.058 27.151 44.458 27.217C45.419 27.376 46.364 27.63 47.27 27.969C47.645 28.111 48.075 28.011 48.351 27.717L50.043 25.91C50.686 26.232 51.312 26.595 51.914 26.994L51.198 29.344C51.081 29.731 51.208 30.15 51.519 30.407C52.273 31.027 52.969 31.723 53.588 32.476C53.845 32.788 54.264 32.916 54.651 32.797L57.002 32.083C57.401 32.686 57.764 33.311 58.086 33.953L56.279 35.646C55.984 35.922 55.884 36.349 56.026 36.727C56.367 37.636 56.62 38.582 56.778 39.539C56.843 39.938 57.143 40.258 57.537 40.35L59.964 40.917C59.988 41.285 60 41.647 60 42C60 42.353 59.988 42.715 59.966 43.082Z"/>
                                <path d="M49 42C49 38.14 45.859 35 42 35C38.141 35 35 38.14 35 42C35 45.86 38.141 49 42 49C45.859 49 49 45.86 49 42ZM42 47C39.243 47 37 44.757 37 42C37 39.243 39.243 37 42 37C44.757 37 47 39.243 47 42C47 44.757 44.757 47 42 47Z"/>
                                <path d="M33.8951 36.142L32.2761 34.969C31.8551 35.549 31.485 36.171 31.175 36.817L32.9781 37.682C33.2361 37.144 33.5451 36.625 33.8951 36.142Z"/>
                                <path d="M41.5209 32.0119L41.4269 30.0139C40.7099 30.0479 39.9929 30.1459 39.2959 30.3059L39.7449 32.2549C40.3269 32.1219 40.9239 32.0399 41.5209 32.0119Z"/>
                                <path d="M49.451 32.593L48.207 34.159C48.675 34.53 49.113 34.946 49.509 35.395L51.009 34.073C50.535 33.536 50.011 33.038 49.451 32.593Z"/>
                                <path d="M32.364 44.681L30.436 45.213C30.625 45.901 30.881 46.578 31.195 47.226L32.996 46.355C32.734 45.815 32.522 45.251 32.364 44.681Z"/>
                                <path d="M37.2379 33.204L36.2829 31.446C35.6549 31.787 35.0539 32.188 34.4939 32.636L35.7459 34.196C36.2119 33.822 36.7139 33.488 37.2379 33.204Z"/>
                                <path d="M51.8411 43.786L53.8101 44.141C53.9361 43.441 54.0001 42.721 54.0001 42V41.957L52.0001 42C52.0001 42.602 51.9461 43.203 51.8411 43.786Z"/>
                                <path d="M42.459 51.99L42.549 53.988C43.267 53.955 43.984 53.859 44.681 53.7L44.236 51.75C43.655 51.882 43.058 51.963 42.459 51.99Z"/>
                                <path d="M50.094 47.875L51.711 49.052C52.132 48.473 52.504 47.852 52.815 47.206L51.014 46.338C50.754 46.875 50.444 47.393 50.094 47.875Z"/>
                                <path d="M51.6311 39.3011L53.5591 38.7661C53.3681 38.0771 53.1101 37.4001 52.7941 36.7531L50.9971 37.6291C51.2591 38.1671 51.4731 38.7291 51.6311 39.3011Z"/>
                                <path d="M46.7451 50.805L47.6941 52.565C48.3231 52.226 48.9261 51.827 49.4871 51.378L48.2391 49.816C47.7711 50.189 47.2691 50.522 46.7451 50.805Z"/>
                                <path d="M37.2949 53.043C37.9549 53.325 38.6449 53.547 39.3439 53.705L39.7829 51.754C39.2019 51.623 38.6289 51.438 38.0799 51.203L37.2949 53.043Z"/>
                                <path d="M34.4791 48.59L32.9751 49.908C33.4481 50.447 33.9711 50.946 34.5321 51.392L35.7761 49.827C35.3091 49.456 34.8721 49.04 34.4791 48.59Z"/>
                                <path d="M46.6831 30.9479C46.0251 30.6679 45.3351 30.4469 44.6331 30.2899L44.1951 32.2409C44.7791 32.3719 45.3531 32.5559 45.8991 32.7889L46.6831 30.9479Z"/>
                                <path d="M32.155 40.2341L30.186 39.8831C30.062 40.5771 30 41.2891 30 42.0001V42.0221L32 42.0001C32 41.4071 32.053 40.8121 32.155 40.2341Z"/>
                                <path d="M37.707 11.293L36.293 12.707L38.586 15H26C23.243 15 21 17.243 21 20V26H23V20C23 18.346 24.346 17 26 17H38.586L36.293 19.293L37.707 20.707L41.707 16.707C42.098 16.316 42.098 15.684 41.707 15.293L37.707 11.293Z"/>
                                <path d="M12 10H14V12H12V10Z"/>
                                <path d="M16 10H18V12H16V10Z"/>
                                <path d="M20 10H22V12H20V10Z"/>
                            </svg>
                            <div class="advantages-item-text">
                                Автоматически открывать и закрывать сделки
                            </div>
                        </div>
                        <!--Item-->
                        <div class="advantages-item third">
                            <svg class='advantages-item-svg' xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                                <path d="M52.5938 15.4688C52.0255 15.4688 51.5625 15.0057 51.5625 14.4375H49.5C49.5 16.1432 50.8881 17.5312 52.5938 17.5312V19.5938H54.6562V17.5312H57.75V14.4375C57.75 12.7318 56.3619 11.3438 54.6562 11.3438H52.5938C52.0255 11.3438 51.5625 10.8807 51.5625 10.3125V9.28125H54.6562C55.2245 9.28125 55.6875 9.74428 55.6875 10.3125H57.75C57.75 8.60681 56.3619 7.21875 54.6562 7.21875V5.15625H52.5938V7.21875H49.5V10.3125C49.5 12.0182 50.8881 13.4062 52.5938 13.4062H54.6562C55.2245 13.4062 55.6875 13.8693 55.6875 14.4375V15.4688H52.5938Z"/>
                                <path d="M61.875 54.6562H59.8125V50.9262C59.8125 49.0029 58.2471 47.4375 56.3238 47.4375C55.7318 47.4375 55.1461 47.5891 54.6294 47.8768L48.7688 51.1325C48.0583 50.7612 47.2622 50.5312 46.4062 50.5312C45.5503 50.5312 44.7542 50.7612 44.0426 51.1325L38.182 47.8768C38.1738 47.8727 38.1645 47.8706 38.1562 47.8665V39.1875C38.1562 37.4818 36.7682 36.0938 35.0625 36.0938H22.5039L27.1518 28.7904C27.3745 28.842 27.6045 28.875 27.8438 28.875C29.1864 28.875 30.3208 28.0098 30.7477 26.8125H37.3158C37.7427 28.0098 38.8771 28.875 40.2198 28.875C41.9255 28.875 43.3135 27.4869 43.3135 25.7812C43.3135 25.3048 43.197 24.8593 43.0031 24.4561L46.3722 21.087C48.3398 22.7277 50.8685 23.7188 53.625 23.7188C59.8795 23.7188 64.9688 18.6295 64.9688 12.375C64.9688 6.12047 59.8795 1.03125 53.625 1.03125C47.3705 1.03125 42.2812 6.12047 42.2812 12.375C42.2812 15.1315 43.2723 17.6602 44.913 19.6288L41.5439 22.9979C41.1407 22.804 40.6952 22.6875 40.2188 22.6875C38.8761 22.6875 37.7417 23.5527 37.3147 24.75H30.7467C30.3198 23.5527 29.1854 22.6875 27.8427 22.6875C26.137 22.6875 24.749 24.0756 24.749 25.7812C24.749 26.498 25.0037 27.1507 25.4152 27.6757L20.625 35.2038V25.7812V24.75V18.5625H25.7812C30.8983 18.5625 35.0625 14.3983 35.0625 9.28125V8.25H27.8438C24.9294 8.25 22.3276 9.603 20.625 11.7109V11.3438V10.3125C20.625 5.19544 16.4608 1.03125 11.3438 1.03125H4.125V2.0625C4.125 7.17956 8.28919 11.3438 13.4062 11.3438H18.5625V17.5312V18.5625V18.9296C16.8599 16.8218 14.2581 15.4688 11.3438 15.4688H4.125V16.5C4.125 21.6171 8.28919 25.7812 13.4062 25.7812H18.5625V36.0938H4.125C2.41931 36.0938 1.03125 37.4818 1.03125 39.1875V61.875C1.03125 63.5807 2.41931 64.9688 4.125 64.9688H27.8438H29.9815H64.9688V57.75C64.9688 56.0443 63.5807 54.6562 61.875 54.6562ZM27.8438 10.3125H32.9268C32.4246 13.8064 29.4123 16.5 25.7812 16.5H20.6982C21.2004 13.0061 24.2127 10.3125 27.8438 10.3125ZM13.4062 9.28125C9.77522 9.28125 6.76294 6.58763 6.26072 3.09375H11.3438C14.9748 3.09375 17.9871 5.78737 18.4893 9.28125H13.4062ZM13.4062 23.7188C9.77522 23.7188 6.76294 21.0251 6.26072 17.5312H11.3438C14.9748 17.5312 17.9871 20.2249 18.4893 23.7188H13.4062ZM55.6318 49.6794C55.8432 49.5619 56.0825 49.5 56.3238 49.5C57.1106 49.5 57.75 50.1394 57.75 50.9262V54.6562H51.4583C51.2975 53.8694 50.9427 53.1609 50.4673 52.5484L55.6318 49.6794ZM49.5 56.7188V62.9062H43.3125V56.7188H49.5ZM49.3103 54.6562H43.5033C43.9302 53.459 45.0646 52.5938 46.4073 52.5938C47.75 52.5938 48.8833 53.459 49.3103 54.6562ZM42.3452 52.5484C41.8708 53.1609 41.515 53.8694 41.3542 54.6562H35.0625V50.9262C35.0625 50.1394 35.7019 49.5 36.4887 49.5C36.73 49.5 36.9693 49.5619 37.1807 49.6794L42.3452 52.5484ZM36.0938 39.1875V42.2812H24.75V38.1562H35.0625C35.6307 38.1562 36.0938 38.6193 36.0938 39.1875ZM16.5 38.1562H22.6875V62.9062H16.5V38.1562ZM53.625 3.09375C58.7421 3.09375 62.9062 7.25794 62.9062 12.375C62.9062 17.4921 58.7421 21.6562 53.625 21.6562C48.5079 21.6562 44.3438 17.4921 44.3438 12.375C44.3438 7.25794 48.5079 3.09375 53.625 3.09375ZM40.2188 24.75C40.787 24.75 41.25 25.213 41.25 25.7812C41.25 26.3495 40.787 26.8125 40.2188 26.8125C39.6505 26.8125 39.1875 26.3495 39.1875 25.7812C39.1875 25.213 39.6505 24.75 40.2188 24.75ZM27.8438 24.75C28.412 24.75 28.875 25.213 28.875 25.7812C28.875 26.3495 28.412 26.8125 27.8438 26.8125C27.2755 26.8125 26.8125 26.3495 26.8125 25.7812C26.8125 25.213 27.2755 24.75 27.8438 24.75ZM4.125 38.1562H14.4375V42.2812H3.09375V39.1875C3.09375 38.6193 3.55678 38.1562 4.125 38.1562ZM3.09375 61.875V44.3438H14.4375V62.9062H4.125C3.55678 62.9062 3.09375 62.4432 3.09375 61.875ZM24.75 62.9062V44.3438H36.0938V47.4777C34.3582 47.6768 33 49.138 33 50.9262V54.6562H30.9375C29.2318 54.6562 27.8438 56.0443 27.8438 57.75V62.9062H24.75ZM29.9062 62.9062V57.75C29.9062 57.1818 30.3693 56.7188 30.9375 56.7188H41.25V62.9062H29.9815H29.9062ZM62.9062 62.9062H51.5625V56.7188H61.875C62.4432 56.7188 62.9062 57.1818 62.9062 57.75V62.9062Z"/>
                                <path d="M5.15625 58.7812H7.21875V60.8438H5.15625V58.7812Z"/>
                                <path d="M5.15625 54.6562H7.21875V56.7188H5.15625V54.6562Z"/>
                                <path d="M5.15625 50.5312H7.21875V52.5938H5.15625V50.5312Z"/>
                                <path d="M49.5 27.8438H59.8125V29.9062H49.5V27.8438Z"/>
                                <path d="M49.5 31.9688H59.8125V34.0312H49.5V31.9688Z"/>
                                <path d="M53.625 36.0938H55.6875V38.1562H53.625V36.0938Z"/>
                                <path d="M49.5 36.0938H51.5625V38.1562H49.5V36.0938Z"/>
                                <path d="M57.75 36.0938H59.8125V38.1562H57.75V36.0938Z"/>
                            </svg>
                            <div class="advantages-item-text">
                                Выполнять сделки с высокой вероятностью получения прибыли
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Try For Free-->
    <div id='try-free' class="try-for-free-wrapper animation-items animation-no-hide">
        <!--Patterns-->
        <div class="try-for-free-patterns left">
            <div class="try-for-free-patterns-inner">
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
            
            </div>
        </div>
        <!--Patterns-->
        <div class="try-for-free-patterns right">
            <div class="try-for-free-patterns-inner">
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
                <!--Block-->
                <div class="try-for-free-patterns-block">
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                    <div class="try-for-free-patterns-circle"></div>
                </div>
            
            </div>
        </div>
        <div class="container-content">
            <section class="try-for-free animation-items animation-no-hide">
                <div class="try-for-free-inner">
                    <!--Left-->
                    <div class="try-for-free-left">
                        <div class="container-indents">
                            <h1 class="try-for-free-title left">
                                Попробуйте робота бесплатно!
                            </h1>
                            <form action="/robot" class="try-for-free-form" id='try-for-free-form' autocomplete="off" method="POST" role="dialog" novalidate="novalidate">
                                <div class="try-for-free-form-container">
                                    <!--Name-->
                                    <div class="try-for-free-form-item name">
                                        <label for="name" class="try-for-free-form-label">Имя:</label>
                                        <input id='firstname' type="text" name="name" class="try-for-free-form-input"  tabindex="1" required aria-required="true">
                                    </div>
                                    <!--Surname-->
                                    <div class="try-for-free-form-item surname">
                                        <label for="surname" class="try-for-free-form-label">Фамилия:</label>
                                        <input id='secondname' type="text" name="surname" class="try-for-free-form-input"  tabindex="1" required aria-required="true">
                                    </div>
                                    <!--Email-->
                                    <div class="try-for-free-form-item email">
                                        <label for="email" class="try-for-free-form-label">Электронный адрес:</label>
                                        <input id='email' type="email" name="email" class="try-for-free-form-input"  tabindex="1" required aria-required="true">
                                    </div>
                                    <input type="hidden" name="id" value="<?=$robot->id;?>">
                                    <input type="hidden" name="form-name" value="try-for-free-form">
                                </div>
                                <!--Button Submit-->
                                <button type="submit" class="try-for-free-form-submit-button animation-button" tabindex="-1" autocomplete="off">
                                    <span>Попробовать бесплатно</span>
                                    <div class="try-for-free-form-submit-button-circle"></div>
                                </button>
                                <!--Agrement-->
                                <div class="try-for-free-agrement">
                                    <h3 class="try-for-free-agrement-title">
                                        Нажимая кнопку «Попробовать бесплатно»:
                                    </h3>
                                    <!--Item-->
                                    <div class="try-for-free-agrement-item risk">
                                        <input type="checkbox" name="warning-risk" id="warning-risk" class="try-for-free-agrement-checkbox" autocomplete="off" tabindex="-2" value required checked>
                                        <label for="warning-risk" id='warning-risk' class="try-for-free-agrement-label">
                                            Я принимаю условия приобритения и использования робота у компании ATrade
                                        </label>
                                    </div>
                                    <!--Item-->
                                    <div class="try-for-free-agrement-item condition">
                                        <input type="checkbox" name="personal-condition" id="personal-condition" class="try-for-free-agrement-checkbox" autocomplete="off" tabindex="-2" value required checked>
                                        <label for="personal-condition" id='personal-condition' class="try-for-free-agrement-label">
                                            Я принимаю условия пользовательского соглашения и даю своё согласие Спутнику на обработку моей персональной информации на условиях, определенных политикой конфиденциальности
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Right-->
                    <div class="try-for-free-right">
                        <div class="container-indents try-free-indents">
                            <h1 class="try-for-free-title right" style="color: #fff; max-width: 500px;">
                                Показатели торгового робота <?=$item->name;?>:
                            </h1>
                            <div class="try-for-free-characteristic">
                                <!--Item-->
                                <div class="try-for-free-characteristic-item first">
<span class="try-for-free-characteristic-item-name">
— Доходность в валюте:
</span>
                                    <span class="try-for-free-characteristic-item-value">
до <?=str_ireplace('.',',',$item->average_profit);?>%
</span>
                                </div>
                                <!--Item-->
                                <div class="try-for-free-characteristic-item second">
<span class="try-for-free-characteristic-item-name">
— Тип советника:
</span>
                                    <span class="try-for-free-characteristic-item-value">
<?=$item->robot_type;?>
</span>
                                </div>
                                <!--Item-->
                                <div class="try-for-free-characteristic-item third">
<span class="try-for-free-characteristic-item-name">
— Тип торговли:
</span>
                                    <span class="try-for-free-characteristic-item-value">
<?=$item->trading_type;?>
</span>
                                </div>
                                <!--Item-->
                                <div class="try-for-free-characteristic-item fourth">
<span class="try-for-free-characteristic-item-name">
— Валютные пары:
</span>
                                    <span class="try-for-free-characteristic-item-value">
<?=$item->currencies_pairs;?>
</span>
                                </div>
                                <!--Item-->
                                <div class="try-for-free-characteristic-item fifth">
<span class="try-for-free-characteristic-item-name">
— Рекомендуемый депозит:
</span>
                                    <span class="try-for-free-characteristic-item-value">
<span class='px-320'><?=$item->rec_deposit;?></span>
<span class='px-375'>от <?=$item->rec_deposit;?></span>
</span>
                                </div>
                                <!--Item-->
                                <div class="try-for-free-characteristic-item sixth">
<span class="try-for-free-characteristic-item-name">
— Минимальный размер лота:
</span>
                                    <span class="try-for-free-characteristic-item-value">
<?=$item->min_lot;?>
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Characteristics-->
    <div class="characteristics-wrapper animation-items animation-no-hide">
        <div class="container-content">
            <section class="characteristics">
                <div class="container-indents">
                    <h1 class="characteristics-title">
                        Лучшие условия для торговли роботом
                    </h1>
                    <div class="characteristics-inner">
                        <div class="characteristics-container first-container">
                            <!--Item-->
                            <div class="characteristics-item first">
                                <div class="characteristics-background">
                                    <svg class="characteristics-background-svg" xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63" fill="none">
                                        <path class='svg-path-white' d="M51.1875 40.1133C51.8667 40.1133 52.418 39.562 52.418 38.8828C52.418 38.2037 51.8667 37.6523 51.1875 37.6523C50.5083 37.6523 49.957 38.2037 49.957 38.8828C49.957 39.562 50.5083 40.1133 51.1875 40.1133Z"/>
                                        <path class='svg-path-white' d="M61.7695 60.5391H59.8008V26.5781C59.8008 25.8985 59.25 25.3477 58.5703 25.3477H51.1875C50.5079 25.3477 49.957 25.8985 49.957 26.5781V33.9609C49.957 34.6406 50.5079 35.1914 51.1875 35.1914C51.8671 35.1914 52.418 34.6406 52.418 33.9609V27.8086H57.3398V60.5391H52.418V43.8047C52.418 43.125 51.8671 42.5742 51.1875 42.5742C50.5079 42.5742 49.957 43.125 49.957 43.8047V60.5391H45.0352V36.4219C45.0352 35.7422 44.4843 35.1914 43.8047 35.1914H36.4219C35.7422 35.1914 35.1914 35.7422 35.1914 36.4219V60.5391H30.2695V43.8047C30.2695 43.125 29.7187 42.5742 29.0391 42.5742H21.6562C20.9766 42.5742 20.4258 43.125 20.4258 43.8047V60.5391H15.5039V48.7266C15.5039 48.0469 14.9531 47.4961 14.2734 47.4961H6.89062C6.21098 47.4961 5.66016 48.0469 5.66016 48.7266V60.5391H2.46094V1.23047C2.46094 0.550827 1.91011 0 1.23047 0C0.550827 0 0 0.550827 0 1.23047V61.7695C0 62.4492 0.550827 63 1.23047 63H61.7695C62.4492 63 63 62.4492 63 61.7695C63 61.0899 62.4492 60.5391 61.7695 60.5391ZM13.043 60.5391H8.12109V49.957H13.043V60.5391ZM27.8086 60.5391H22.8867V45.0352H27.8086V60.5391ZM42.5742 60.5391H37.6523V37.6523H42.5742V60.5391Z"/>
                                        <path class='svg-path-green' d="M11.5573 38.8564C10.8926 38.9977 10.4682 39.6504 10.609 40.3156C10.7494 40.9789 11.4016 41.4053 12.0678 41.264C28.0235 37.8826 41.475 28.2561 49.9624 15.3015L52.0037 16.731C52.7521 17.2544 53.7927 16.8079 53.9268 15.9033L55.1376 7.73897C55.2058 7.27803 55.0083 6.81804 54.6261 6.5508C54.2445 6.28356 53.7446 6.25472 53.3346 6.47678L46.0763 10.4066C45.2731 10.8411 45.2073 11.9726 45.9562 12.4969L47.9451 13.8894C39.6039 26.6372 26.4061 35.71 11.5573 38.8564ZM52.3421 9.8125L51.7845 13.5731L48.9992 11.6226L52.3421 9.8125Z"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Средняя ежемесячная доходность до <?=str_ireplace('.',',',$item->average_profit);?>%
                                </div>
                                <div class="characteristics-text px-320">
                                    Доходность до <?=str_ireplace('.',',',$item->average_profit);?>%
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item second">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
                                        <g clip-path="">
                                            <path class='svg-path-green' d="M41.0286 35.4771H36.9352C36.1815 35.4771 35.5706 36.088 35.5706 36.8411V40.9351C35.5706 41.6883 36.1815 42.2992 36.9352 42.2992C37.6884 42.2992 38.2993 41.6883 38.2993 40.9351V38.2058H41.0286C41.7818 38.2058 42.3933 37.5949 42.3933 36.8411C42.3933 36.088 41.7818 35.4771 41.0286 35.4771Z"/>
                                            <path class='svg-path-white' d="M76.5057 23.1963C73.4925 23.1994 71.0501 25.6411 71.0476 28.6543C71.0521 29.8564 71.4572 31.0223 72.1989 31.9685L68.651 36.5293C67.7855 35.658 66.7351 34.9925 65.5781 34.5817C67.5499 31.6243 67.3905 27.7323 65.1819 24.947C65.4467 24.4009 65.5857 23.8027 65.5895 23.1963V13.4511C68.2503 12.764 69.9858 10.2055 69.6391 7.47871C69.293 4.75254 66.9733 2.70839 64.2249 2.70839C61.4765 2.70839 59.1567 4.75254 58.8106 7.47871C58.4639 10.2055 60.1994 12.764 62.8602 13.4511V22.9397C61.6181 22.2145 60.2052 21.8322 58.7668 21.8322C58.73 21.8322 58.6925 21.8322 58.6551 21.8335C59.3993 17.3775 56.3982 13.1603 51.9447 12.4033V10.9161C51.9447 10.1623 51.3338 9.55144 50.58 9.55144C49.8263 9.55144 49.2154 10.1623 49.2154 10.9161V12.4033C45.2807 13.0708 42.3996 16.4764 42.3933 20.4676V30.019H39.6639V20.4676C39.6576 16.4764 36.7765 13.0708 32.8412 12.4033V10.2455C32.8425 9.63717 33.2457 9.10311 33.8299 8.93483L36.3453 8.21534C37.3124 9.88674 39.0975 10.9161 41.0286 10.9161C42.9597 10.9161 44.7441 9.88674 45.7119 8.21534L47.0156 8.58811C47.1376 8.6224 47.2639 8.63954 47.3909 8.64018C48.0723 8.64018 48.6489 8.13851 48.7429 7.46411C48.8369 6.78907 48.4197 6.14897 47.7643 5.9629L46.4727 5.59459C46.474 5.54823 46.4867 5.50505 46.4867 5.45806C46.4867 2.44358 44.0431 0 41.0286 0C38.0141 0 35.5705 2.44358 35.5705 5.45806C35.5705 5.50441 35.5832 5.5476 35.5839 5.59459L33.0812 6.30963C31.3273 6.81702 30.1182 8.41982 30.1125 10.2455V12.4033C25.659 13.1603 22.6579 17.3775 23.4022 21.8329C23.3647 21.8322 23.3272 21.8322 23.2898 21.8322C21.8514 21.8322 20.4391 22.2145 19.1964 22.9397V21.4906C19.1964 20.7374 18.5855 20.1265 17.8323 20.1265C17.0786 20.1265 16.4677 20.7374 16.4677 21.4906V23.202C16.4689 23.7125 16.5655 24.2187 16.7528 24.6943C16.7903 24.7768 16.836 24.8556 16.8893 24.9286C14.6686 27.7151 14.5035 31.6174 16.4797 34.5817C15.3227 34.9925 14.2724 35.658 13.4068 36.5293L9.85893 31.9685C10.6 31.0223 11.0052 29.8564 11.0096 28.6543C11.0153 26.2342 9.43156 24.098 7.11371 23.4007C4.79649 22.7041 2.29639 23.6122 0.966644 25.6335C-0.363103 27.6554 -0.206887 30.3105 1.3502 32.1628C2.90792 34.0146 5.49693 34.6236 7.71698 33.6596L11.7786 38.8821C9.97958 42.7233 11.4274 47.3025 15.1081 49.4108C15.1373 50.1671 15.2719 50.9158 15.5075 51.6353L13.3414 52.5472C12.6467 52.8393 12.3203 53.6395 12.6124 54.3342C12.9045 55.0289 13.7047 55.3553 14.3994 55.0632L16.7655 54.0668C17.09 54.498 17.457 54.8962 17.8596 55.255C17.8412 55.4817 17.8317 55.7109 17.8317 55.944C17.8292 59.5471 20.1876 62.7267 23.6365 63.77C24.114 65.3348 25.0513 66.7197 26.3271 67.744L23.8276 71.3148C23.2205 71.0811 22.576 70.9585 21.9257 70.9541C19.3253 70.9236 17.0557 72.7112 16.4765 75.2463C15.8974 77.7819 17.1649 80.3773 19.5209 81.479C21.8762 82.5815 24.6817 81.8905 26.256 79.821C27.8308 77.7508 27.7483 74.8633 26.0585 72.8871L28.711 69.0979C29.1663 69.2649 29.6349 69.3907 30.1125 69.4739V70.9541C30.1125 71.7073 30.7234 72.3181 31.4772 72.3181C32.2303 72.3181 32.8412 71.7073 32.8412 70.9541V69.4662C36.7765 68.7988 39.6576 65.3932 39.6639 61.402V51.8506H42.3933V61.402C42.3996 65.3932 45.2807 68.7988 49.2154 69.4662V71.6247C49.2141 72.2331 48.8115 72.7671 48.2266 72.9354L45.7119 73.6542C44.7441 71.9835 42.9597 70.9541 41.0286 70.9541C39.0975 70.9541 37.3124 71.9835 36.3453 73.6542L35.0416 73.2821C34.5723 73.1481 34.0681 73.2751 33.7175 73.6142C33.367 73.9533 33.2248 74.4537 33.3429 74.9268C33.4616 75.3999 33.8236 75.7733 34.2929 75.9073L35.5839 76.2756C35.5832 76.322 35.5705 76.3645 35.5705 76.4122C35.5705 79.4266 38.0141 81.8702 41.0286 81.8702C44.0431 81.8702 46.4867 79.4266 46.4867 76.4122C46.4867 76.3652 46.474 76.322 46.4727 76.2756L48.9753 75.56C50.7299 75.0532 51.939 73.4498 51.9447 71.6241V69.4739C52.4216 69.3907 52.8909 69.2643 53.3462 69.0979L55.9987 72.8871C55.1491 73.8651 54.6785 75.1161 54.6734 76.4115C54.6734 79.426 57.117 81.8696 60.1315 81.8696C63.146 81.8696 65.5895 79.426 65.5895 76.4115C65.5895 73.3977 63.146 70.9541 60.1315 70.9541C59.4806 70.9585 58.8367 71.0811 58.2296 71.3148L55.7301 67.744C57.0052 66.7197 57.9432 65.3348 58.4207 63.77C61.8689 62.7267 64.2274 59.5478 64.2249 55.9446C64.2249 55.7096 64.2153 55.4804 64.1976 55.2556C64.6008 54.8962 64.9672 54.4987 65.2917 54.0675L67.6578 55.0632C68.1074 55.2524 68.6237 55.187 69.0117 54.8924C69.4003 54.5977 69.6023 54.1183 69.5413 53.6344C69.4797 53.1511 69.1654 52.7365 68.7164 52.5472L66.5491 51.6347C66.7847 50.9158 66.9193 50.1671 66.9491 49.4108C70.6298 47.3019 72.0776 42.7233 70.2786 38.8814L74.3409 33.6596C76.3755 34.5404 78.7416 34.1022 80.326 32.5502C81.9097 30.9988 82.3974 28.6423 81.5592 26.5899C80.7203 24.5368 78.7232 23.1956 76.5057 23.1963ZM41.0286 2.72871C42.5355 2.72871 43.7573 3.9505 43.7573 5.45806C43.7573 6.96498 42.5355 8.18677 41.0286 8.18677C39.521 8.18677 38.2993 6.96498 38.2993 5.45806C38.3018 3.95177 39.5223 2.73125 41.0286 2.72871ZM21.9257 79.1409C20.4182 79.1409 19.1964 77.9191 19.1964 76.4115C19.1964 74.9046 20.4182 73.6828 21.9257 73.6828C23.4326 73.6828 24.6544 74.9046 24.6544 76.4115C24.6525 77.9178 23.432 79.139 21.9257 79.1409ZM41.0286 79.1409C39.521 79.1409 38.2993 77.9191 38.2993 76.4115C38.2993 74.9046 39.521 73.6828 41.0286 73.6828C42.5355 73.6828 43.7573 74.9046 43.7573 76.4115C43.7554 77.9178 42.5349 79.139 41.0286 79.1409ZM62.8602 76.4115C62.8602 77.9191 61.6384 79.1409 60.1315 79.1409C58.6239 79.1409 57.4021 77.9191 57.4021 76.4115C57.4021 74.9046 58.6239 73.6828 60.1315 73.6828C61.6378 73.6847 62.8583 74.9052 62.8602 76.4115ZM66.9453 38.7214L66.6951 39.0427C66.436 39.3742 66.0385 39.5692 65.6175 39.5704H51.9447V34.1124C51.9422 33.8628 51.9168 33.6145 51.8692 33.3694L63.1853 26.8394C64.6199 28.8036 64.5646 31.484 63.0507 33.3872C62.0137 34.6979 60.4382 35.4663 58.7668 35.4771C58.013 35.4771 57.4021 36.088 57.4021 36.8411C57.4021 37.5949 58.013 38.2058 58.7668 38.2058C60.3487 38.202 61.8962 37.7428 63.2234 36.8824C64.6586 36.9776 65.9979 37.6393 66.9453 38.7214ZM47.8507 49.1219H34.2059C33.4527 49.1212 32.8418 48.511 32.8412 47.7572V34.1124C32.8418 33.3592 33.4527 32.7483 34.2059 32.7477H47.8507C48.6045 32.7483 49.2147 33.3592 49.2154 34.1124V47.7572C49.2147 48.511 48.6045 49.1212 47.8507 49.1219ZM61.4962 8.18677C61.4962 6.67985 62.718 5.45806 64.2249 5.45806C65.7318 5.45806 66.9536 6.67985 66.9536 8.18677C66.9536 9.69432 65.7318 10.9161 64.2249 10.9161C62.7186 10.9142 61.4981 9.69305 61.4962 8.18677ZM45.122 20.4676C45.122 17.4531 47.5656 15.0095 50.58 15.0095C53.5945 15.0095 56.0381 17.4531 56.0381 20.4676C56.0419 21.3306 55.8368 22.1815 55.4412 22.9486C55.1865 23.442 55.2558 24.0402 55.6171 24.4619C55.9784 24.8835 56.5588 25.0442 57.0853 24.8689C57.625 24.6733 58.1934 24.5692 58.7668 24.5609C59.5041 24.5609 60.2337 24.7108 60.9113 25.0023L50.493 31.0122C49.7602 30.3752 48.8223 30.0228 47.8507 30.019H45.122V20.4676ZM18.8338 36.8824C20.161 37.7428 21.7079 38.202 23.2898 38.2058C24.0435 38.2058 24.6544 37.5949 24.6544 36.8411C24.6544 36.088 24.0435 35.4771 23.2898 35.4771C22.0743 35.4764 20.8944 35.0668 19.9406 34.3143C19.7603 34.1657 19.5901 34.0057 19.4313 33.8355C19.2815 33.6939 19.1392 33.5447 19.0065 33.3878C18.2445 32.4302 17.8304 31.2427 17.8323 30.019C17.8349 27.0058 20.2772 24.5641 23.2898 24.5609C23.8645 24.5698 24.4341 24.674 24.9745 24.8689C25.5009 25.0436 26.0807 24.8816 26.4414 24.46C26.8015 24.0383 26.8707 23.4401 26.616 22.9473C26.2198 22.1809 26.0153 21.3299 26.0191 20.4676C26.0191 17.4531 28.4627 15.0095 31.4772 15.0095C34.4916 15.0095 36.9352 17.4531 36.9352 20.4676V30.019H34.2059C33.2349 30.0228 32.297 30.3752 31.5635 31.0122L30.162 30.2032C29.7397 29.9593 29.219 29.9593 28.7973 30.2032C28.3751 30.447 28.1147 30.8972 28.1147 31.3849C28.1147 31.8726 28.3751 32.3229 28.7973 32.5667L30.1874 33.3694C30.1398 33.6139 30.115 33.8628 30.1125 34.1124V39.5704H16.4404C16.0193 39.5692 15.6218 39.3742 15.3621 39.0427L15.1119 38.7214C16.06 37.6393 17.3986 36.9776 18.8338 36.8824ZM2.82283 28.6543C2.82283 27.1474 4.04462 25.9256 5.55154 25.9256C7.05846 25.9256 8.28025 27.1474 8.28025 28.6543C8.28025 30.1619 7.05846 31.3837 5.55154 31.3837C4.04526 31.3811 2.82473 30.1606 2.82283 28.6543ZM26.1226 62.4486C25.9073 61.3614 26.0293 60.2349 26.4719 59.2194C26.7462 58.5349 26.4268 57.7563 25.7511 57.4611C25.0755 57.1664 24.288 57.4611 23.9724 58.1278C23.6193 58.9375 23.4009 59.7999 23.3266 60.6806C21.6184 59.716 20.5617 57.9062 20.561 55.9446C20.5591 55.6042 20.5909 55.2645 20.6557 54.9305C20.7554 54.4078 20.5426 53.8757 20.1108 53.5658C18.6814 52.5364 17.8336 50.8834 17.8323 49.1219C17.8323 48.9726 17.8374 48.8317 17.8495 48.6837C17.8958 48.0989 17.5637 47.5502 17.0246 47.3203C14.6877 46.3354 13.3573 43.8499 13.8342 41.3593C14.5658 41.9683 15.4884 42.3011 16.4404 42.2991H30.1125V45.487L28.4322 46.1944C27.7375 46.4865 27.4111 47.2867 27.7032 47.9814C27.9953 48.6761 28.7954 49.0025 29.4902 48.7097L30.1798 48.4202C30.4402 49.9881 31.587 51.2619 33.1193 51.6855L30.6523 56.0018C30.2985 56.6203 30.1125 57.3207 30.1125 58.0338V61.9062C30.1131 62.1863 30.0268 62.46 29.8661 62.6899L27.8924 65.5081C26.978 64.7143 26.3544 63.6373 26.1226 62.4486ZM36.9352 61.402C36.9486 63.0487 36.2126 64.6121 34.9336 65.6504C33.6553 66.688 31.9738 67.0874 30.3652 66.7356L32.102 64.2552C32.5846 63.5668 32.8431 62.7464 32.8412 61.9062V58.0338C32.8418 57.7963 32.9041 57.5633 33.0215 57.3569L36.1675 51.8506H36.9352V61.402ZM50.58 66.8601C47.5668 66.8576 45.1252 64.4152 45.122 61.402V51.8506H45.8891L49.0357 57.3582C49.1531 57.5639 49.2154 57.797 49.2154 58.0338V61.9062C49.2141 62.7464 49.4719 63.5662 49.9552 64.2539L51.692 66.7356C51.3268 66.815 50.9541 66.8569 50.58 66.8601ZM65.0326 47.3209C64.4935 47.5515 64.162 48.0995 64.2077 48.6837C64.2198 48.8317 64.2249 48.9733 64.2249 49.1225C64.223 50.8841 63.3746 52.5371 61.9451 53.5664C61.5114 53.8763 61.2993 54.4117 61.4015 54.9349C61.4657 55.2677 61.4974 55.6055 61.4962 55.9446C61.4955 57.9062 60.4382 59.7154 58.73 60.68C58.6557 59.7992 58.4379 58.9375 58.0848 58.1278C57.7711 57.4566 56.9805 57.1581 56.3016 57.4547C55.6234 57.7513 55.3053 58.5349 55.5847 59.2201C56.5334 61.4014 55.9587 63.9466 54.1648 65.5081L52.1911 62.6886C52.0298 62.46 51.9434 62.1863 51.9447 61.9062V58.0338C51.9447 57.3214 51.7587 56.6215 51.4049 56.003L48.9379 51.6855C50.4696 51.2619 51.617 49.9881 51.8774 48.4202L52.567 48.7097C53.016 48.899 53.5323 48.8342 53.9203 48.5389C54.3089 48.2443 54.5109 47.7648 54.4493 47.2816C54.3883 46.7977 54.074 46.383 53.6244 46.1944L51.9447 45.487V42.2991H65.6169C66.5688 42.3011 67.4915 41.9683 68.223 41.3593C68.6999 43.8505 67.3695 46.3354 65.0326 47.3209ZM76.5057 31.3837C74.9981 31.3837 73.7763 30.1619 73.7763 28.6543C73.7763 27.1474 74.9981 25.9256 76.5057 25.9256C78.0126 25.9256 79.2344 27.1474 79.2344 28.6543C79.2325 30.1606 78.0119 31.3811 76.5057 31.3837Z"/>
                                            <path class='svg-path-green' d="M77.8696 62.9604V62.3508C77.8696 61.5977 77.2588 60.9868 76.5056 60.9868C75.7518 60.9868 75.1409 61.5977 75.1409 62.3508V62.9604C72.4795 63.6475 70.7446 66.2067 71.0907 68.9329C71.4375 71.6597 73.7566 73.7032 76.5056 73.7032C79.254 73.7032 81.5738 71.6597 81.9199 68.9329C82.2659 66.2067 80.531 63.6475 77.8696 62.9604ZM76.5056 70.9541C74.9981 70.9541 73.7763 69.7317 73.7763 68.2248C73.7763 66.7179 74.9981 65.4961 76.5056 65.4961C78.0125 65.4961 79.2343 66.7179 79.2343 68.2248C79.2324 69.7311 78.0119 70.9516 76.5056 70.9541Z"/>
                                            <path class='svg-path-white' d="M74.3085 57.8631C74.4577 57.9259 74.5943 58.0148 74.7124 58.126C75.0642 58.4759 75.5786 58.608 76.0555 58.4695C76.5324 58.3311 76.8962 57.945 77.0061 57.4605C77.116 56.9766 76.954 56.4705 76.5832 56.1402C76.2282 55.805 75.8167 55.5363 75.3665 55.3477L73.7478 54.6651C73.0531 54.3723 72.2523 54.6981 71.9595 55.3928C71.6668 56.0875 71.9926 56.8883 72.6873 57.1811L74.3085 57.8631Z"/>
                                            <path class='svg-path-white' d="M61.1712 49.3708L58.6565 48.3116C57.9618 48.0188 57.161 48.3446 56.8682 49.0393C56.5755 49.7341 56.9013 50.5348 57.596 50.8276L60.1101 51.8868C60.2783 51.9573 60.4587 51.9935 60.6403 51.9935C61.2906 51.9941 61.8507 51.5363 61.9796 50.8993C62.1085 50.2624 61.77 49.6229 61.1712 49.3708Z"/>
                                            <path class='svg-path-white' d="M25.9341 29.3395C26.31 28.6867 26.0865 27.8523 25.4343 27.4751L23.0701 26.1117C22.6478 25.8685 22.1277 25.8685 21.7055 26.1123C21.2832 26.3562 21.0234 26.8064 21.0234 27.2941C21.0234 27.7818 21.2838 28.232 21.7061 28.4759L24.0697 29.8393C24.7225 30.2152 25.5569 29.9917 25.9341 29.3395Z"/>
                                            <path class='svg-path-green' d="M17.8323 17.3972C18.5854 17.3972 19.1963 16.7863 19.1963 16.0325V13.4511C21.8577 12.764 23.5926 10.2055 23.2465 7.4787C22.9004 4.75253 20.5807 2.70837 17.8323 2.70837C15.0832 2.70837 12.7641 4.75253 12.4174 7.4787C12.0713 10.2055 13.8062 12.764 16.4676 13.4511V16.0325C16.4676 16.7863 17.0785 17.3972 17.8323 17.3972ZM15.1029 8.18675C15.1029 6.67983 16.3247 5.45804 17.8323 5.45804C19.3392 5.45804 20.561 6.67983 20.561 8.18675C20.561 9.69431 19.3392 10.9161 17.8323 10.9161C16.3253 10.9142 15.1048 9.69304 15.1029 8.18675Z"/>
                                            <path class='svg-path-green' d="M6.91617 62.9604V62.3508C6.91617 61.5977 6.30527 60.9868 5.5515 60.9868C4.79772 60.9868 4.18682 61.5977 4.18682 62.3508V62.9604C1.52606 63.6475 -0.20947 66.2067 0.137255 68.9329C0.483345 71.6597 2.8031 73.7032 5.5515 73.7032C8.2999 73.7032 10.6196 71.6597 10.9657 68.9329C11.3125 66.2067 9.57693 63.6475 6.91617 62.9604ZM5.5515 70.9541C4.04458 70.9541 2.82278 69.7317 2.82278 68.2248C2.82278 66.7179 4.04458 65.4961 5.5515 65.4961C7.05842 65.4961 8.28021 66.7179 8.28021 68.2248C8.2783 69.7311 7.05778 70.9516 5.5515 70.9541Z"/>
                                            <path class='svg-path-white' d="M23.4008 48.3116L20.8861 49.3708C20.2866 49.6229 19.9488 50.2624 20.0771 50.8993C20.206 51.5363 20.7667 51.9941 21.4164 51.9935C21.5986 51.9935 21.779 51.9573 21.9466 51.8868L24.4613 50.8276C25.156 50.5348 25.4818 49.7341 25.1891 49.0393C24.8957 48.3446 24.0955 48.0188 23.4008 48.3116Z"/>
                                            <path class='svg-path-white' d="M7.34539 58.126C7.4635 58.0142 7.6013 57.9253 7.75117 57.8631L9.37049 57.1811C10.0652 56.8883 10.391 56.0875 10.0982 55.3928C9.80485 54.6981 9.00471 54.3723 8.30999 54.6651L6.69322 55.3477C6.24235 55.5357 5.82958 55.8043 5.47396 56.1402C5.10374 56.4705 4.94181 56.9766 5.05167 57.4605C5.1609 57.945 5.5254 58.3311 6.00231 58.4695C6.47921 58.608 6.99358 58.4759 7.34539 58.126Z"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="82" height="82" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Создан для внутридневной торговли
                                </div>
                                <div class="characteristics-text px-320">
                                    Внутридневная торговля
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item  third">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="80" height="78" viewBox="0 0 80 78" fill="none">
                                        <path class='svg-path-white' d="M79.8458 42.6954C79.1275 35.4706 75.8998 28.6594 70.7569 23.5163C66.3618 19.1214 60.9824 16.2971 55.322 15.0413V11.0713C57.6339 10.4961 59.3523 8.40342 59.3523 5.91604C59.3523 2.98662 56.9692 0.603455 54.0398 0.603455H42.7896C39.8602 0.603455 37.477 2.98662 37.477 5.91604C37.477 8.40326 39.1955 10.496 41.5072 11.0713V15.0524C35.8642 16.3135 30.5025 19.1339 26.1199 23.5165C25.1609 24.4755 24.2765 25.4817 23.4669 26.5273C23.4277 26.5243 23.3885 26.5214 23.3485 26.5214H12.2138C11.351 26.5214 10.6513 27.2209 10.6513 28.0839C10.6513 28.9469 11.351 29.6464 12.2138 29.6464H21.3408C20.1952 31.5644 19.2714 33.5787 18.5683 35.6521H1.56252C0.699698 35.6521 0 36.3517 0 37.2147C0 38.0776 0.699698 38.7772 1.56252 38.7772H17.6853C17.235 40.7539 16.9765 42.7657 16.9098 44.7831H10.0002C9.13733 44.7831 8.43763 45.4826 8.43763 46.3456C8.43763 47.2086 9.13733 47.9081 10.0002 47.9081H16.9596C17.0915 49.9306 17.4167 51.9425 17.9353 53.914H7.81262C6.9498 53.914 6.2501 54.6135 6.2501 55.4765C6.2501 56.3395 6.9498 57.039 7.81262 57.039H18.9325C20.4653 61.0939 22.8608 64.8945 26.1199 68.1536C31.2678 73.3015 38.0861 76.53 45.3184 77.2445C46.3506 77.3464 47.3836 77.3968 48.4151 77.3968C54.5124 77.3968 60.5322 75.6323 65.6401 72.306C66.3632 71.835 66.5678 70.8671 66.0968 70.1439C65.6259 69.4208 64.6579 69.2162 63.9347 69.6872C52.7538 76.9681 37.7797 75.3938 28.3297 65.9438C17.2417 54.8559 17.2417 36.8145 28.3297 25.7263C39.4175 14.6385 57.4589 14.6385 68.547 25.7263C77.9845 35.164 79.5673 50.1253 72.3105 61.3008C71.8405 62.0246 72.0463 62.9924 72.7699 63.4622C73.494 63.9323 74.4615 63.7265 74.9313 63.0027C78.8086 57.0315 80.5539 49.8197 79.8458 42.6954ZM40.602 5.91619C40.602 4.70993 41.5833 3.72866 42.7896 3.72866H54.0398C55.246 3.72866 56.2273 4.70993 56.2273 5.91619C56.2273 7.12246 55.246 8.10373 54.0398 8.10373H53.7594H43.0697H42.7896C41.5833 8.10373 40.602 7.12231 40.602 5.91619ZM44.6323 14.5152V11.2288H52.1969V14.5096C49.685 14.2109 47.1437 14.2127 44.6323 14.5152Z"/>
                                        <path class='svg-path-white' d="M69.6526 65.4854C69.2401 65.4854 68.8385 65.6526 68.5481 65.9433C68.2559 66.2339 68.0901 66.637 68.0901 67.0479C68.0901 67.4589 68.2559 67.862 68.5481 68.1526C68.8385 68.4448 69.2402 68.6104 69.6526 68.6104C70.0635 68.6104 70.4651 68.4448 70.7573 68.1526C71.0479 67.862 71.2151 67.4589 71.2151 67.0479C71.2151 66.637 71.0481 66.2339 70.7573 65.9433C70.4651 65.6526 70.0634 65.4854 69.6526 65.4854Z"/>
                                        <path class='svg-path-white' d="M48.4385 21.5955C35.073 21.5955 24.1992 32.4691 24.1992 45.8348C24.1992 59.2005 35.073 70.0741 48.4385 70.0741C61.804 70.0741 72.6778 59.2005 72.6778 45.8348C72.6778 32.4691 61.804 21.5955 48.4385 21.5955ZM48.4385 66.949C36.796 66.949 27.3243 57.4772 27.3243 45.8348C27.3243 34.1924 36.796 24.7206 48.4385 24.7206C60.081 24.7206 69.5527 34.1924 69.5527 45.8348C69.5527 57.4772 60.081 66.949 48.4385 66.949Z"/>
                                        <path class='svg-path-green' d="M58.3224 33.7412L50.5832 41.4802C49.936 41.1602 49.208 40.9794 48.4385 40.9794C47.6688 40.9794 46.9409 41.1602 46.2937 41.4802L42.8301 38.0166C42.2198 37.4064 41.2307 37.4064 40.6202 38.0166C40.0101 38.6267 40.0101 39.6161 40.6202 40.2263L44.0839 43.6899C43.7637 44.3371 43.5831 45.0651 43.5831 45.8347C43.5831 48.5119 45.7611 50.6901 48.4385 50.6901C51.1159 50.6901 53.2939 48.5119 53.2939 45.8347C53.2939 45.0651 53.1131 44.3371 52.7931 43.6899L60.3051 36.178L60.5321 35.9509C61.1423 35.3408 61.1423 34.3514 60.5321 33.7412C59.9219 33.131 58.9328 33.131 58.3224 33.7412ZM48.4385 47.5652C47.4844 47.5652 46.7081 46.7889 46.7081 45.8348C46.7081 44.8807 47.4844 44.1045 48.4385 44.1045C49.3925 44.1045 50.1688 44.8807 50.1688 45.8348C50.1688 46.7889 49.3925 47.5652 48.4385 47.5652Z"/>
                                        <path class='svg-path-white' d="M65.1447 44.2914H63.697C62.8342 44.2914 62.1345 44.9909 62.1345 45.8539C62.1345 46.7168 62.8342 47.4164 63.697 47.4164H65.1447C66.0075 47.4164 66.7072 46.7168 66.7072 45.8539C66.7072 44.9909 66.0075 44.2914 65.1447 44.2914Z"/>
                                        <path class='svg-path-white' d="M33.1797 44.2532H31.7322C30.8694 44.2532 30.1697 44.9528 30.1697 45.8157C30.1697 46.6787 30.8694 47.3782 31.7322 47.3782H33.1797C34.0425 47.3782 34.7422 46.6787 34.7422 45.8157C34.7422 44.9528 34.0425 44.2532 33.1797 44.2532Z"/>
                                        <path class='svg-path-white' d="M48.4575 32.1384C49.3203 32.1384 50.02 31.4389 50.02 30.5759V29.1284C50.02 28.2655 49.3203 27.5659 48.4575 27.5659C47.5947 27.5659 46.895 28.2655 46.895 29.1284V30.5759C46.895 31.4389 47.5947 32.1384 48.4575 32.1384Z"/>
                                        <path class='svg-path-white' d="M48.4194 59.5311C47.5566 59.5311 46.8569 60.2307 46.8569 61.0936V62.5411C46.8569 63.4041 47.5566 64.1036 48.4194 64.1036C49.2822 64.1036 49.9819 63.4041 49.9819 62.5411V61.0936C49.9819 60.2307 49.2822 59.5311 48.4194 59.5311Z"/>
                                        <path class='svg-path-white' d="M1.5625 53.9134C1.15156 53.9134 0.748438 54.0806 0.457813 54.3712C0.167188 54.6618 0 55.065 0 55.4759C0 55.8884 0.167031 56.29 0.457813 56.5806C0.748594 56.8712 1.15156 57.0384 1.5625 57.0384C1.97344 57.0384 2.37656 56.8712 2.66703 56.5806C2.95766 56.29 3.125 55.8868 3.125 55.4759C3.125 55.065 2.95781 54.6618 2.66703 54.3712C2.37656 54.0806 1.97344 53.9134 1.5625 53.9134Z"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Таймфрейм графика от 15-ти минут до 4-х часов
                                </div>
                                <div class="characteristics-text px-320">
                                    Таймфрейм от М15 до  H4
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item fourth">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                        <g clip-path="url(#clip0)">
                                            <path class='svg-path-white' d="M70.3 34.5333H3.7C1.65655 34.5333 0 36.1899 0 38.2333V70.3C0 72.3435 1.65655 74 3.7 74H70.3C72.3435 74 74 72.3435 74 70.3V38.2333C74 36.1899 72.3435 34.5333 70.3 34.5333ZM71.5333 70.3C71.5333 70.9812 70.9812 71.5333 70.3 71.5333H3.7C3.01885 71.5333 2.46667 70.9812 2.46667 70.3V38.2333C2.46667 37.5522 3.01885 37 3.7 37H70.3C70.9812 37 71.5333 37.5522 71.5333 38.2333V70.3Z"/>
                                            <path class='svg-path-white' d="M67.8336 45.6333C65.109 45.6333 62.9003 43.4246 62.9003 40.7C62.9003 40.0189 62.3481 39.4667 61.6669 39.4667H12.3336C11.6524 39.4667 11.1003 40.0189 11.1003 40.7C11.1003 43.4246 8.89153 45.6333 6.16693 45.6333C5.48578 45.6333 4.93359 46.1855 4.93359 46.8667V61.6667C4.93359 62.3478 5.48578 62.9 6.16693 62.9C8.89153 62.9 11.1003 65.1087 11.1003 67.8333C11.1003 68.5145 11.6524 69.0667 12.3336 69.0667H61.6669C62.3481 69.0667 62.9003 68.5145 62.9003 67.8333C62.9003 65.1087 65.109 62.9 67.8336 62.9C68.5147 62.9 69.0669 62.3478 69.0669 61.6667V46.8667C69.0669 46.1855 68.5147 45.6333 67.8336 45.6333ZM13.4683 66.6C12.9446 63.4913 10.509 61.0557 7.40026 60.532V48.0013C10.509 47.4777 12.9446 45.042 13.4683 41.9333H28.8356C24.7018 44.6754 22.2166 49.3061 22.2166 54.2667C22.2166 59.2273 24.7018 63.8579 28.8356 66.6H13.4683ZM37.0003 41.9333C43.8118 41.9333 49.3336 47.4552 49.3336 54.2667C49.3336 61.0782 43.8118 66.6 37.0003 66.6C30.1887 66.6 24.6669 61.0782 24.6669 54.2667C24.6669 47.4552 30.1887 41.9333 37.0003 41.9333ZM66.6003 60.532C63.4916 61.0557 61.0559 63.4913 60.5323 66.6H45.1649C49.2987 63.8579 51.7839 59.2273 51.7839 54.2667C51.7839 49.3061 49.2987 44.6754 45.1649 41.9333H60.5323C61.0559 45.042 63.4916 47.4777 66.6003 48.0013V60.532Z"/>
                                            <path class='svg-path-white' d="M36.9997 60.4333C35.6374 60.4333 34.5331 59.329 34.5331 57.9667C34.5331 57.2855 33.9809 56.7333 33.2997 56.7333C32.6186 56.7333 32.0664 57.2855 32.0664 57.9667C32.0737 60.2103 33.594 62.1664 35.7664 62.7273V64.1333C35.7664 64.8145 36.3186 65.3667 36.9997 65.3667C37.6809 65.3667 38.2331 64.8145 38.2331 64.1333V62.7273C40.6085 62.0825 42.1452 59.7854 41.8345 57.3437C41.5239 54.902 39.461 53.0628 36.9997 53.0333C35.6374 53.0333 34.5331 51.929 34.5331 50.5667C34.5331 49.2044 35.6374 48.1 36.9997 48.1C38.362 48.1 39.4664 49.2044 39.4664 50.5667C39.4664 51.2478 40.0186 51.8 40.6997 51.8C41.3809 51.8 41.9331 51.2478 41.9331 50.5667C41.9258 48.323 40.4055 46.3669 38.2331 45.806V44.4C38.2331 43.7188 37.6809 43.1667 36.9997 43.1667C36.3186 43.1667 35.7664 43.7188 35.7664 44.4V45.806C33.391 46.4508 31.8543 48.7479 32.165 51.1896C32.4756 53.6313 34.5385 55.4705 36.9997 55.5C38.362 55.5 39.4664 56.6044 39.4664 57.9667C39.4664 59.329 38.362 60.4333 36.9997 60.4333Z"/>
                                            <path class='svg-path-green' d="M11.7167 32.0667H22.8167C23.8384 32.0667 24.6667 31.2384 24.6667 30.2167V22.8167C24.6667 21.7949 23.8384 20.9667 22.8167 20.9667H11.7167C10.695 20.9667 9.8667 21.7949 9.8667 22.8167V30.2167C9.8667 31.2384 10.695 32.0667 11.7167 32.0667ZM12.3334 23.4333H22.2V29.6H12.3334V23.4333Z"/>
                                            <path class='svg-path-green' d="M31.4501 32.0667H42.5501C43.5718 32.0667 44.4001 31.2384 44.4001 30.2167V17.8833C44.4001 16.8616 43.5718 16.0333 42.5501 16.0333H31.4501C30.4284 16.0333 29.6001 16.8616 29.6001 17.8833V30.2167C29.6001 31.2384 30.4284 32.0667 31.4501 32.0667ZM32.0668 18.5H41.9334V29.6H32.0668V18.5Z"/>
                                            <path class='svg-path-green' d="M48.2356 13.5667H49.3333V30.2167C49.3333 31.2384 50.1616 32.0667 51.1833 32.0667H62.2833C63.305 32.0667 64.1333 31.2384 64.1333 30.2167V13.5667H65.231C65.9537 13.5523 66.6028 13.1211 66.8962 12.4604C67.1895 11.7998 67.074 11.029 66.6 10.4833L58.1146 0.937325C57.754 0.560368 57.255 0.347168 56.7333 0.347168C56.2116 0.347168 55.7126 0.560368 55.352 0.937325L46.8666 10.4833C46.3925 11.029 46.2771 11.7998 46.5704 12.4604C46.8638 13.1211 47.5129 13.5523 48.2356 13.5667ZM56.7333 3.08333L63.8496 11.1H63.5166C62.4949 11.1 61.6666 11.9283 61.6666 12.95V29.6H51.8V12.95C51.8 11.9283 50.9717 11.1 49.95 11.1H49.617L56.7333 3.08333Z"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="74" height="74" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Рекомендуемый минимальный депозит от <?=$item->rec_deposit;?>
                                </div>
                                <div class="characteristics-text px-320">
                                    Депозит от <?=$item->rec_deposit;?>
                                </div>
                            </div>
                        </div>
                        <div class="characteristics-container second-container">
                            <!--Item-->
                            <div class="characteristics-item first">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77" fill="none">
                                        <path class='svg-path-white' d="M74.3172 42.5425L68.3016 35.3238C68.1041 35.0888 67.8244 34.9381 67.5195 34.9027L51.7345 32.9295V31.2812H63.7658C64.0849 31.2812 64.3909 31.1545 64.6165 30.9289C64.8422 30.7032 64.9689 30.3972 64.9689 30.0781V26.4688H62.5627V28.875H50.5314C50.2123 28.875 49.9063 29.0018 49.6807 29.2274C49.455 29.453 49.3283 29.759 49.3283 30.0781V32.6288L39.7033 31.4256V26.4688H37.297V31.4256L27.672 32.6288V30.0781C27.672 29.759 27.5453 29.453 27.3196 29.2274C27.094 29.0018 26.788 28.875 26.4689 28.875H14.4377V26.4688H12.0314V30.0781C12.0314 30.3972 12.1582 30.7032 12.3838 30.9289C12.6094 31.1545 12.9154 31.2812 13.2345 31.2812H25.2658V32.9295L9.48078 34.9027C9.17594 34.9381 8.89618 35.0888 8.69875 35.3238L2.68312 42.5425C2.55123 42.7028 2.46308 42.8946 2.42724 43.0991C2.3914 43.3036 2.40909 43.5139 2.47859 43.7095C2.54476 43.9069 2.66199 44.0832 2.81837 44.2205C2.97474 44.3579 3.16469 44.4514 3.3689 44.4916L8.42203 45.5383V64.9688C8.42203 65.2291 8.50646 65.4824 8.66266 65.6906C8.81885 65.8989 9.03837 66.0509 9.28828 66.1237L38.1633 74.5456V74.5336C38.2718 74.571 38.3854 74.5913 38.5002 74.5938C38.6143 74.5956 38.728 74.5793 38.837 74.5456L67.712 66.1237C67.9619 66.0509 68.1815 65.8989 68.3377 65.6906C68.4939 65.4824 68.5783 65.2291 68.5783 64.9688V45.5383L73.6314 44.4916C73.8356 44.4514 74.0256 44.3579 74.1819 44.2205C74.3383 44.0832 74.4556 43.9069 74.5217 43.7095C74.5912 43.5139 74.6089 43.3036 74.5731 43.0991C74.5372 42.8946 74.4491 42.7028 74.3172 42.5425ZM5.81125 42.5425L10.1064 37.3931L36.6113 41.8086L31.9792 47.9927L5.81125 42.5425ZM37.297 71.7905L10.8283 64.0664V46.0436L32.2439 50.5072C32.3233 50.5218 32.4038 50.5298 32.4845 50.5312C32.6711 50.53 32.8549 50.4859 33.0217 50.4025C33.1886 50.3191 33.3341 50.1985 33.447 50.05L37.297 44.9127V71.7905ZM38.5002 39.6911L17.9628 36.2622L25.2658 35.3478V36.0938H27.672V35.047L37.297 33.8439V36.0938H39.7033V33.8439L49.3283 35.047V36.0938H51.7345V35.3478L59.0375 36.2622L38.5002 39.6911ZM66.172 64.0664L39.7033 71.7905V44.9127L43.5533 50.05C43.6662 50.1985 43.8117 50.3191 43.9786 50.4025C44.1455 50.4859 44.3292 50.53 44.5158 50.5312C44.5965 50.5298 44.677 50.5218 44.7564 50.5072L66.172 46.0436V64.0664ZM45.0211 47.9927L40.3891 41.8086L66.8939 37.3931L71.1891 42.5425L45.0211 47.9927Z"/>
                                        <path class='svg-path-green' d="M39.7031 12.0312V9.625C40.0222 9.625 40.3282 9.75176 40.5539 9.97739C40.7795 10.203 40.9062 10.509 40.9062 10.8281H43.3125C43.3096 9.87174 42.9285 8.95534 42.2522 8.27907C41.5759 7.6028 40.6595 7.22161 39.7031 7.21875V6.01562H37.2969V7.21875C36.3396 7.21875 35.4216 7.59902 34.7447 8.27591C34.0678 8.9528 33.6875 9.87086 33.6875 10.8281C33.6875 11.7854 34.0678 12.7034 34.7447 13.3803C35.4216 14.0572 36.3396 14.4375 37.2969 14.4375V16.8438C36.9778 16.8438 36.6718 16.717 36.4461 16.4914C36.2205 16.2657 36.0938 15.9597 36.0938 15.6406H33.6875C33.6904 16.597 34.0715 17.5134 34.7478 18.1897C35.4241 18.866 36.3405 19.2471 37.2969 19.25V20.4531H39.7031V19.25C40.6604 19.25 41.5784 18.8697 42.2553 18.1928C42.9322 17.516 43.3125 16.5979 43.3125 15.6406C43.3125 14.6834 42.9322 13.7653 42.2553 13.0884C41.5784 12.4115 40.6604 12.0312 39.7031 12.0312ZM37.2969 12.0312C36.9778 12.0312 36.6718 11.9045 36.4461 11.6789C36.2205 11.4532 36.0938 11.1472 36.0938 10.8281C36.0938 10.509 36.2205 10.203 36.4461 9.97739C36.6718 9.75176 36.9778 9.625 37.2969 9.625V12.0312ZM39.7031 16.8438V14.4375C40.0222 14.4375 40.3282 14.5643 40.5539 14.7899C40.7795 15.0155 40.9062 15.3215 40.9062 15.6406C40.9062 15.9597 40.7795 16.2657 40.5539 16.4914C40.3282 16.717 40.0222 16.8438 39.7031 16.8438Z"/>
                                        <path class='svg-path-white' d="M38.5 2.40625C36.3584 2.40625 34.2649 3.04131 32.4842 4.23112C30.7035 5.42093 29.3157 7.11205 28.4961 9.09063C27.6766 11.0692 27.4621 13.2464 27.8799 15.3468C28.2977 17.4473 29.329 19.3767 30.8434 20.891C32.3577 22.4054 34.2871 23.4366 36.3875 23.8544C38.488 24.2722 40.6652 24.0578 42.6437 23.2383C44.6223 22.4187 46.3134 21.0308 47.5033 19.2502C48.6931 17.4695 49.3281 15.376 49.3281 13.2344C49.3237 10.3639 48.1814 7.61236 46.1517 5.58265C44.122 3.55295 41.3704 2.4107 38.5 2.40625ZM38.5 21.6562C36.8343 21.6562 35.206 21.1623 33.8211 20.2369C32.4361 19.3115 31.3566 17.9962 30.7192 16.4573C30.0818 14.9184 29.915 13.225 30.24 11.5913C30.5649 9.95766 31.367 8.45703 32.5448 7.27921C33.7227 6.10139 35.2233 5.29928 36.857 4.97432C38.4907 4.64936 40.184 4.81615 41.7229 5.45358C43.2618 6.09101 44.5771 7.17046 45.5025 8.55543C46.4279 9.9404 46.9219 11.5687 46.9219 13.2344C46.9193 15.4672 46.0312 17.6079 44.4524 19.1867C42.8735 20.7656 40.7328 21.6537 38.5 21.6562Z"/>
                                        <path class='svg-path-white' d="M13.2344 24.0625C15.376 24.0625 17.4695 23.4274 19.2502 22.2376C21.0308 21.0478 22.4187 19.3567 23.2383 17.3781C24.0578 15.3995 24.2722 13.2224 23.8544 11.1219C23.4366 9.02147 22.4054 7.09208 20.891 5.57774C19.3767 4.0634 17.4473 3.03212 15.3468 2.61431C13.2464 2.19651 11.0692 2.41094 9.09063 3.2305C7.11205 4.05005 5.42093 5.43792 4.23112 7.2186C3.04131 8.99927 2.40625 11.0928 2.40625 13.2344C2.40943 16.1052 3.55127 18.8575 5.58125 20.8875C7.61123 22.9175 10.3636 24.0593 13.2344 24.0625ZM13.2344 4.8125C14.9001 4.8125 16.5283 5.30644 17.9133 6.23185C19.2983 7.15725 20.3777 8.47257 21.0152 10.0115C21.6526 11.5504 21.8194 13.2437 21.4944 14.8774C21.1695 16.5111 20.3674 18.0117 19.1895 19.1895C18.0117 20.3674 16.5111 21.1695 14.8774 21.4944C13.2437 21.8194 11.5504 21.6526 10.0115 21.0152C8.47257 20.3777 7.15725 19.2983 6.23184 17.9133C5.30643 16.5284 4.8125 14.9001 4.8125 13.2344C4.81505 11.0015 5.70317 8.86089 7.28202 7.28203C8.86088 5.70317 11.0015 4.81505 13.2344 4.8125Z"/>
                                        <path class='svg-path-white' d="M63.7656 2.40625C61.624 2.40625 59.5305 3.04131 57.7498 4.23112C55.9692 5.42093 54.5813 7.11205 53.7617 9.09063C52.9422 11.0692 52.7278 13.2464 53.1456 15.3468C53.5634 17.4473 54.5947 19.3767 56.109 20.891C57.6233 22.4054 59.5527 23.4366 61.6532 23.8544C63.7536 24.2722 65.9308 24.0578 67.9094 23.2383C69.888 22.4187 71.5791 21.0308 72.7689 19.2502C73.9587 17.4695 74.5938 15.376 74.5938 13.2344C74.5893 10.3639 73.4471 7.61236 71.4174 5.58265C69.3876 3.55295 66.6361 2.4107 63.7656 2.40625ZM63.7656 21.6562C62.0999 21.6562 60.4717 21.1623 59.0867 20.2369C57.7017 19.3115 56.6223 17.9962 55.9848 16.4573C55.3474 14.9184 55.1806 13.225 55.5056 11.5913C55.8305 9.95766 56.6326 8.45703 57.8105 7.27921C58.9883 6.10139 60.4889 5.29928 62.1226 4.97432C63.7563 4.64936 65.4496 4.81615 66.9885 5.45358C68.5274 6.09101 69.8428 7.17046 70.7682 8.55543C71.6936 9.9404 72.1875 11.5687 72.1875 13.2344C72.185 15.4672 71.2968 17.6079 69.718 19.1867C68.1391 20.7656 65.9985 21.6537 63.7656 21.6562Z"/>
                                        <path class='svg-path-green' d="M70.2147 15.4584C70.0985 17.0649 69.5038 18.3295 68.4305 19.2524C67.3641 20.1752 65.9559 20.6367 64.2059 20.6367C62.2919 20.6367 60.7845 19.9941 59.6839 18.7089C58.5902 17.4169 58.0433 15.6464 58.0433 13.3974V12.4848C58.0433 11.0493 58.2962 9.78461 58.8021 8.69086C59.308 7.59711 60.0292 6.7597 60.9657 6.17865C61.909 5.59076 63.0028 5.29681 64.2469 5.29681C65.9696 5.29681 67.3573 5.75824 68.41 6.68109C69.4627 7.60394 70.0711 8.89935 70.2352 10.5673H67.159C67.0838 9.60345 66.8138 8.90619 66.349 8.47552C65.891 8.03802 65.1903 7.81927 64.2469 7.81927C63.2215 7.81927 62.4525 8.18842 61.9398 8.9267C61.4339 9.65814 61.1742 10.7963 61.1605 12.3412V13.4692C61.1605 15.0825 61.4032 16.2617 61.8885 17.0068C62.3807 17.7519 63.1532 18.1245 64.2059 18.1245C65.1561 18.1245 65.8636 17.9091 66.3285 17.4785C66.8002 17.041 67.0702 16.3676 67.1385 15.4584H70.2147Z"/>
                                        <path class='svg-path-green' d="M10.6 15.1713V20.4316H7.52378V5.50189H13.348C14.4691 5.50189 15.4535 5.70697 16.3011 6.11713C17.1556 6.52728 17.8119 7.11176 18.2699 7.87054C18.7279 8.6225 18.9569 9.48041 18.9569 10.4443C18.9569 11.9072 18.4544 13.0624 17.4496 13.9101C16.4515 14.7509 15.0672 15.1713 13.2967 15.1713H10.6ZM10.6 12.6796H13.348C14.1615 12.6796 14.7801 12.4882 15.204 12.1054C15.6346 11.7226 15.85 11.1757 15.85 10.4648C15.85 9.73334 15.6346 9.14203 15.204 8.69086C14.7733 8.23969 14.1786 8.00726 13.4198 7.99359H10.6V12.6796Z"/>
                                        <rect x="57.5474" y="12.1579" width="8.10527" height="2.43158"/>
                                        <rect class='svg-path-green' x="7.29492" y="15.4" width="5.67369" height="2.43158"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Торговля осуществляется на мажорных валютных парах
                                </div>
                                <div class="characteristics-text px-320">
                                    Мажорные валютные пары
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item second">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70" fill="none">
                                        <path class='svg-path-white' d="M63.4375 1.09375H53.5938C50.5783 1.09375 48.125 3.54703 48.125 6.5625V14.8597L43.4667 19.518C42.3336 18.5577 41.0331 17.7953 39.6189 17.2616C42.0941 15.7139 43.75 12.9719 43.75 9.84375C43.75 5.01922 39.8245 1.09375 35 1.09375C30.1755 1.09375 26.25 5.01922 26.25 9.84375C26.25 12.9719 27.9059 15.7139 30.3811 17.2616C25.4198 19.1362 21.875 23.9214 21.875 29.5312V37.1875C21.875 40.203 24.3283 42.6562 27.3438 42.6562V46.5784L20.3284 53.5938H6.5625C3.54703 53.5938 1.09375 56.047 1.09375 59.0625V63.4375C1.09375 66.453 3.54703 68.9062 6.5625 68.9062H16.4062C19.4217 68.9062 21.875 66.453 21.875 63.4375V55.1403L27.3438 49.6716V64.5312C27.3438 66.9441 29.3059 68.9062 31.7188 68.9062C33.0312 68.9062 34.1972 68.3134 35 67.3947C35.8028 68.3134 36.9688 68.9062 38.2812 68.9062C40.6941 68.9062 42.6562 66.9441 42.6562 64.5312V42.6562C45.6717 42.6562 48.125 40.203 48.125 37.1875V29.5312C48.125 26.3058 46.9503 23.3527 45.0133 21.0645L49.6716 16.4062H63.4375C66.453 16.4062 68.9062 13.953 68.9062 10.9375V6.5625C68.9062 3.54703 66.453 1.09375 63.4375 1.09375ZM19.6875 63.4375C19.6875 65.2466 18.2153 66.7188 16.4062 66.7188H6.5625C4.75344 66.7188 3.28125 65.2466 3.28125 63.4375V59.0625C3.28125 57.2534 4.75344 55.7812 6.5625 55.7812H19.6875V63.4375ZM28.4375 9.84375C28.4375 6.22453 31.3808 3.28125 35 3.28125C38.6192 3.28125 41.5625 6.22453 41.5625 9.84375C41.5625 13.463 38.6192 16.4062 35 16.4062C31.3808 16.4062 28.4375 13.463 28.4375 9.84375ZM45.9375 37.1875C45.9375 38.9966 44.4653 40.4688 42.6562 40.4688V26.25H40.4688V64.5312C40.4688 65.7377 39.4877 66.7188 38.2812 66.7188C37.0748 66.7188 36.0938 65.7377 36.0938 64.5312V38.2812H33.9062V64.5312C33.9062 65.7377 32.9252 66.7188 31.7188 66.7188C30.5123 66.7188 29.5312 65.7377 29.5312 64.5312V26.25H27.3438V40.4688C25.5347 40.4688 24.0625 38.9966 24.0625 37.1875V29.5312C24.0625 23.5003 28.9691 18.5938 35 18.5938C41.0309 18.5938 45.9375 23.5003 45.9375 29.5312V37.1875ZM66.7188 10.9375C66.7188 12.7466 65.2466 14.2188 63.4375 14.2188H50.3125V6.5625C50.3125 4.75344 51.7847 3.28125 53.5938 3.28125H63.4375C65.2466 3.28125 66.7188 4.75344 66.7188 6.5625V10.9375Z"/>
                                        <path class='svg-path-green' d="M52.5 5.46875H64.5312V7.65625H52.5V5.46875Z"/>
                                        <path class='svg-path-green' d="M62.3438 9.84375H64.5312V12.0312H62.3438V9.84375Z"/>
                                        <path class='svg-path-green' d="M52.5 9.84375H60.1562V12.0312H52.5V9.84375Z"/>
                                        <path class='svg-path-green' d="M5.46875 62.3438H17.5V64.5312H5.46875V62.3438Z"/>
                                        <path class='svg-path-green' d="M5.46875 57.9688H7.65625V60.1562H5.46875V57.9688Z"/>
                                        <path class='svg-path-green'  d="M9.84375 57.9688H17.5V60.1562H9.84375V57.9688Z"/>
                                        <path class='svg-path-white' d="M66.7188 41.5625H64.5312V60.1562H62.3438V43.75H60.1562V60.1562H57.9688V50.3125H55.7812V60.1562H53.5938V47.0312H51.4062V60.1562H49.2188V49.2188H47.0312V60.1562H44.8438V62.3438H68.9062V60.1562H66.7188V41.5625Z"/>
                                        <path class='svg-path-white' d="M66.7188 64.5312H68.9062V66.7188H66.7188V64.5312Z"/>
                                        <path class='svg-path-white' d="M44.8438 64.5312H64.5312V66.7188H44.8438V64.5312Z"/>
                                        <path class='svg-path-white' d="M13.125 25.1562C19.7586 25.1562 25.1562 19.7586 25.1562 13.125C25.1562 6.49141 19.7586 1.09375 13.125 1.09375C6.49141 1.09375 1.09375 6.49141 1.09375 13.125C1.09375 19.7586 6.49141 25.1562 13.125 25.1562ZM22.9688 13.125C22.9688 14.9461 22.4623 16.6469 21.5972 18.1125L18.0534 15.4547C18.3903 14.7448 18.5938 13.9606 18.5938 13.125C18.5938 10.4847 16.7114 8.27531 14.2188 7.76672V3.34578C19.133 3.89266 22.9688 8.0675 22.9688 13.125ZM13.125 9.84375C14.9341 9.84375 16.4062 11.3159 16.4062 13.125C16.4062 14.9341 14.9341 16.4062 13.125 16.4062C11.3159 16.4062 9.84375 14.9341 9.84375 13.125C9.84375 11.3159 11.3159 9.84375 13.125 9.84375ZM12.0312 3.34578V7.76672C9.53859 8.27531 7.65625 10.4847 7.65625 13.125C7.65625 16.1405 10.1095 18.5938 13.125 18.5938C14.5141 18.5938 15.7697 18.0567 16.7355 17.2003L20.2836 19.8614C18.4866 21.7689 15.9458 22.9688 13.125 22.9688C7.69781 22.9688 3.28125 18.5522 3.28125 13.125C3.28125 8.0675 7.11703 3.89266 12.0312 3.34578Z"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Степень агрессивности регулируется самим трейдером
                                </div>
                                <div class="characteristics-text px-320">
                                    Регулируемая агрессивность
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item third">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                        <path class='svg-path-white' d="M68.45 2.46671H5.55C2.46672 2.46671 0 4.93342 0 8.0167V45.6334V51.1834C0 54.2667 2.46672 56.7334 5.55 56.7334H29.23L27.38 64.1334H27.1333C23.68 64.1334 20.9666 66.8467 20.9666 70.3001C20.9666 71.0401 21.4599 71.5334 22.1999 71.5334H51.7999C52.5399 71.5334 53.0331 71.0401 53.0331 70.3001C53.0331 66.8468 50.3199 64.1334 46.8664 64.1334H46.6197L44.7697 56.7334H68.45C71.5333 56.7334 74 54.2667 74 51.1834V45.6334V8.0167C74 4.93328 71.5333 2.46671 68.45 2.46671ZM2.46671 8.0167C2.46671 6.28999 3.82343 4.93342 5.55 4.93342H68.45C70.1767 4.93342 71.5333 6.29013 71.5333 8.0167V44.4H2.46671V8.0167ZM50.4433 69.0667H23.68C24.1733 67.5867 25.53 66.6 27.1333 66.6H28.3666H45.6333H46.99C48.5933 66.6 49.95 67.5867 50.4433 69.0667ZM44.03 64.1333H29.97L31.82 56.7333H42.18L44.03 64.1333ZM71.5333 51.1833C71.5333 52.91 70.1766 54.2666 68.45 54.2666H43.1667H30.8334H5.55C3.82329 54.2666 2.46671 52.9098 2.46671 51.1833V46.8666H71.5334V51.1833H71.5333Z"/>
                                        <path class='svg-path-green' d="M67.8332 16.0333C67.8332 15.2933 67.3398 14.8 66.5999 14.8H57.9667C57.2267 14.8 56.7334 15.2933 56.7334 16.0333C56.7334 16.7733 57.2267 17.2666 57.9667 17.2666H63.6399L48.8399 32.0666L38.6032 21.8298C38.5824 21.809 38.5604 21.7902 38.5388 21.7712C38.5195 21.7493 38.5008 21.7274 38.4798 21.7064C37.9865 21.3364 37.2465 21.3364 36.7531 21.8297L22.4464 37.3697C22.0764 37.863 22.0764 38.603 22.5696 39.0964C22.8164 39.3431 23.1864 39.4664 23.4329 39.4664C23.8029 39.4664 24.0496 39.3431 24.2962 39.0964L37.7197 24.3999L47.9762 34.6564C48.2229 34.9031 48.4695 35.0264 48.8395 35.0264C49.0708 35.0264 49.2539 34.9783 49.4188 34.8819C49.5178 34.8241 49.6103 34.7489 49.7028 34.6564L65.3661 18.9931V24.6664C65.3661 25.4064 65.8594 25.8997 66.5994 25.8997C67.3394 25.8997 67.8326 25.4064 67.8326 24.6664V16.0333H67.8332Z"/>
                                        <path class='svg-path-white' d="M7.39979 11.1C6.65979 11.1 6.1665 11.5933 6.1665 12.3333V39.4666C6.1665 40.2066 6.65979 40.6998 7.39979 40.6998C8.13979 40.6998 8.63307 40.2066 8.63307 39.4666V12.3333C8.63307 11.5933 8.13979 11.1 7.39979 11.1Z"/>
                                        <path class='svg-path-white' d="M12.3334 14.8H14.8001C15.5401 14.8 16.0334 14.3067 16.0334 13.5667C16.0334 12.8267 15.5401 12.3334 14.8001 12.3334H12.3334C11.5934 12.3334 11.1001 12.8267 11.1001 13.5667C11.1001 14.3067 11.5934 14.8 12.3334 14.8Z"/>
                                        <path class='svg-path-white' d="M17.2668 17.2667H12.3334C11.5934 17.2667 11.1001 17.76 11.1001 18.5C11.1001 19.24 11.5934 19.7333 12.3334 19.7333H17.2667C18.0067 19.7333 18.5 19.24 18.5 18.5C18.5 17.76 18.0068 17.2667 17.2668 17.2667Z"/>
                                        <path class='svg-path-white' d="M12.3334 24.6667H14.8001C15.5401 24.6667 16.0334 24.1734 16.0334 23.4334C16.0334 22.6934 15.5401 22.2001 14.8001 22.2001H12.3334C11.5934 22.2001 11.1001 22.6934 11.1001 23.4334C11.1001 24.1733 11.5934 24.6667 12.3334 24.6667Z"/>
                                        <path class='svg-path-white' d="M17.2668 27.1333H12.3334C11.5934 27.1333 11.1001 27.6266 11.1001 28.3666C11.1001 29.1066 11.5934 29.5998 12.3334 29.5998H17.2667C18.0067 29.5998 18.5 29.1066 18.5 28.3666C18.5 27.6266 18.0068 27.1333 17.2668 27.1333Z"/>
                                        <path class='svg-path-white' d="M12.3334 34.5333H14.8001C15.5401 34.5333 16.0334 34.04 16.0334 33.3C16.0334 32.56 15.5401 32.0667 14.8001 32.0667H12.3334C11.5934 32.0667 11.1001 32.56 11.1001 33.3C11.1001 34.04 11.5934 34.5333 12.3334 34.5333Z"/>
                                        <path class='svg-path-white' d="M17.2668 37H12.3334C11.5934 37 11.1001 37.4933 11.1001 38.2333C11.1001 38.9733 11.5934 39.4666 12.3334 39.4666H17.2667C18.0067 39.4666 18.5 38.9733 18.5 38.2333C18.5 37.4933 18.0068 37 17.2668 37Z"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    Написан для торговой платформы МТ4
                                </div>
                                <div class="characteristics-text px-320">
                                    Терминал МТ4
                                </div>
                            </div>
                            <!--Item-->
                            <div class="characteristics-item fourth">
                                <div class="characteristics-background">
                                    <svg class='characteristics-background-svg' xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
                                        <path class='svg-path-white' d="M60.4089 43.871C61.2236 43.871 62.0115 44.1093 62.6903 44.5618L72.265 50.9454C73.3963 51.6978 74.7111 52.0968 76.068 52.0968H85V49.3548H76.0693C75.2553 49.3548 74.4654 49.1165 73.7866 48.664L69.9194 46.0854V0H17.8226V8.22581H0V85H52.0968V76.7742H69.9194V65.2401C70.0057 65.2194 70.0947 65.2127 70.1811 65.1919L76.5586 63.598C77.9738 63.2439 79.4298 63.0645 80.8871 63.0645H85V60.3226H80.8871C79.2062 60.3226 77.5253 60.5294 75.8939 60.9371L69.5164 62.531C66.2382 63.3497 62.7492 63.2165 59.5467 62.1488L57.2366 61.3783C55.1333 60.6774 52.9429 60.3226 50.7258 60.3226H38.7626C38.7626 58.0553 40.6082 56.2097 42.8755 56.2097H57.9562C60.2242 56.2097 62.0691 54.3641 62.0691 52.0968C62.0691 49.9935 60.4759 48.2744 58.4375 48.0321L59.5628 43.871H60.4089ZM58.6772 64.7494C60.7805 65.4517 62.9715 65.8064 65.1879 65.8064C65.8533 65.8064 66.5167 65.7489 67.1774 65.6846V74.0323H52.0968V69.5478C52.5781 68.9929 52.951 68.3362 53.1511 67.5931L54.2737 63.4347C54.98 63.5786 55.6802 63.75 56.3677 63.9803L58.6772 64.7494ZM51.5264 63.096L50.5049 66.8769C50.2391 67.8616 49.3414 68.5484 48.3226 68.5484H47.8781C46.6323 68.5484 45.6188 67.5356 45.6188 66.2891C45.6188 66.0889 45.6449 65.8915 45.6971 65.6993L46.4087 63.0645H50.7258C50.9929 63.0645 51.2593 63.0853 51.5264 63.096ZM43.5677 63.0645L43.0496 64.9824C42.9345 65.4075 42.8769 65.8459 42.8769 66.2891C42.8769 68.1427 43.9024 69.7453 45.4039 70.6089L44.9735 72.3279L47.6331 72.9933L48.0595 71.2903H48.3226C48.676 71.2903 49.0188 71.2408 49.3548 71.1698V82.2581H2.74194V10.9677H20.5645V2.74194H67.1774V44.2579L64.2119 42.2804C63.0813 41.528 61.7665 41.129 60.4089 41.129H60.3032L66.0093 20.0176C66.1244 19.5925 66.182 19.1541 66.182 18.7109C66.182 15.9529 63.9381 13.7097 61.1808 13.7097H60.7363C58.4817 13.7097 56.4962 15.2299 55.9078 17.4069L52.0968 31.5088V8.22581H23.3065V10.9677H49.3548V41.129H46.5185C45.0264 41.129 43.6213 41.6237 42.4464 42.5H28.7903V45.2419H39.5659L36.824 47.9839H28.7903V50.7258H34.0834L31.7927 53.0166C30.984 53.8239 30.5382 54.899 30.5382 56.0437C30.5382 58.4034 32.4574 60.3226 34.8184 60.3226C35.2408 60.3226 35.6478 60.2416 36.0428 60.1238C36.0415 60.1907 36.022 60.2543 36.022 60.3226C36.022 61.8348 37.2518 63.0645 38.764 63.0645H43.5677ZM54.1285 53.4677H49.0027L54.7919 32.0477L59.4945 33.6148L54.1285 53.4677ZM43.6106 45.0746C44.377 44.3094 45.4367 43.871 46.5185 43.871H48.7557L47.6371 48.0086C45.9027 48.0716 44.2766 48.757 43.0429 49.9908L35.9042 57.1295C35.6177 57.416 35.2214 57.5806 34.8171 57.5806C33.9683 57.5806 33.2788 56.8911 33.2788 56.0437C33.2788 55.6326 33.4394 55.2471 33.73 54.9565L43.6106 45.0746ZM44.9815 51.9294C45.4997 51.4113 46.159 51.0578 46.8626 50.8737L46.1617 53.4677H43.4445L44.9815 51.9294ZM63.3617 19.302L61.6828 25.5135L56.9802 23.9464L58.554 18.1231C58.8211 17.1384 59.7181 16.4516 60.7363 16.4516H61.1808C62.4272 16.4516 63.4401 17.4644 63.4401 18.7109C63.4401 18.9111 63.414 19.1085 63.3617 19.302ZM56.2646 26.598L60.9672 28.1651L60.2101 30.9633L55.5075 29.3961L56.2646 26.598ZM57.9562 50.7258C58.712 50.7258 59.3272 51.3417 59.3272 52.0968C59.3272 52.8519 58.712 53.4677 57.9562 53.4677H56.9681L57.7098 50.7258H57.9562Z"/>
                                        <path class='svg-path-white' d="M41.129 13.7097H5.48389V27.4193H41.129V13.7097ZM38.3871 24.6774H8.22582V16.4516H38.3871V24.6774Z"/>
                                        <path class='svg-path-white' d="M10.9678 19.1935H13.7097V21.9355H10.9678V19.1935Z"/>
                                        <path class='svg-path-white' d="M16.4517 19.1935H19.1936V21.9355H16.4517V19.1935Z"/>
                                        <path class='svg-path-white' d="M21.9355 19.1935H24.6775V21.9355H21.9355V19.1935Z"/>
                                        <path class='svg-path-white' d="M27.4194 19.1935H30.1614V21.9355H27.4194V19.1935Z"/>
                                        <path class='svg-path-white' d="M32.9033 19.1935H35.6453V21.9355H32.9033V19.1935Z"/>
                                        <path class='svg-path-white' d="M21.9355 43.871H19.1936V49.3548H8.22582V38.3871H16.4516V35.6452H5.48389V52.0968H21.9355V43.871Z"/>
                                        <path class='svg-path-green' d="M26.4501 30.5629L13.7098 43.3033L11.9372 41.5307L9.99854 43.4693L13.7098 47.1806L28.3888 32.5016L26.4501 30.5629Z"/>
                                        <path class='svg-path-white' d="M19.1936 72.6613H8.22582V61.6935H16.4516V58.9516H5.48389V75.4032H21.9355V67.1774H19.1936V72.6613Z"/>
                                        <path class='svg-path-green' d="M11.9372 64.8371L9.99854 66.7758L13.7098 70.487L28.3888 55.808L26.4501 53.8694L13.7098 66.6097L11.9372 64.8371Z"=/>
                                        <path class='svg-path-white' d="M43.8711 75.4032H46.613V78.1452H43.8711V75.4032Z"/>
                                        <path class='svg-path-white' d="M26.0483 75.4032H41.129V78.1452H26.0483V75.4032Z"/>
                                        <path class='svg-path-white' d="M28.7905 37.0161H46.6131V39.7581H28.7905V37.0161Z"/>
                                    </svg>
                                </div>
                                <div class="characteristics-text">
                                    К роботу прилагается инструкция с описанием настроек
                                </div>
                                <div class="characteristics-text px-320">
                                    Инструкция с настройками
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Screenshots-->
    <div class="screenshots-wrapper animation-items animation-no-hide">
        <div class="container-content">
            <section class="screenshots">
                <div class="container-indents">
                    <div class="screenshots-inner">
                        <!--Item-->
                        <div class="screenshots-item first-item">
                            <img src="/public/images/robot/screen/<?=$item->screen_img;?>" alt="" class="screenshots-item-image full-screen">
                            <div class="screenshots-item-text-block">
                                <div class="screenshots-item-text">
                                    <h1><?=$item->name;?> в МТ4</h1>
                                    <p><?=$item->description;?></p>
                                </div>
                                <!--Button-->
                                <div class="screenshots-item-button animation-button full-screen">
                                    <span>Посмотреть изображение</span>
                                    <div class="screenshots-item-button-circle"></div>
                                </div>
                            </div>
                            <!--Button-->
                            <div class="screenshots-item-button-mobile full-screen">
                                Посмотреть изображение
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Screenshots Active-->
    <section class="screenshots-active">
        <div class="screenshots-active-inner">
            <div class="screenshots-active-wrapper" ontouchmove="noScroll(event)">
                <!--Image-->
                <div class="screenshots-active-image-block">
                    <img src="/public/images/robot/screen/<?=$item->screen_img;?>" alt="Скриншот торгового робота в терминале MT4" class="screenshots-active-image">
                    <div class="screenshots-active-image-title-block">
                        <div class="screenshots-active-image-title-block-inner">
                            <h1 class="screenshots-active-image-title">
                                Скриншот торгового робота в терминале MT4
                            </h1>
                        </div>
                    </div>
                </div>
                <!--Close-->
                <svg class="screenshots-active-close" width="16" height="16"><use xlink:href="#icon-close" style="stroke: none; stroke-width: 0;">
                        <svg viewBox="0 0 18 18" id="icon-close"><path clip-rule="evenodd" d="M1.707.293A1 1 0 1 0 .293 1.707L7.586 9 .293 16.293a1 1 0 1 0 1.414 1.414L9 10.414l7.293 7.293a1 1 0 1 0 1.414-1.414L10.414 9l7.293-7.293A1 1 0 1 0 16.293.293L9 7.586 1.707.293z"></path></svg></use>
                </svg>
            </div>
            <div class="screenshots-active-background" ontouchmove="BurgerClose(event)"></div>
        </div>
    </section>
    <!--Profit Chart-->
    <div class="profit-chart-wrapper animation-items animation-no-hide">
        <div class="container-content">
            <section class="profit-chart">
                <div class="container-indents">
                    <h1 class="profit-chart-title">
                        График доходности
                    </h1>
                    <div class="profit-chart-inner">
                        <!--Chart Block-->
                        <section class="profit-chart-block">
                            <!--Chart Data-->
                            <div class="profit-chart-data">
                                <div class="profit-chart-data-inner">
                                    <div class="profit-chart-date-container">
                                        <!--Item-->
                                        <span class="profit-chart-data-item profit">
<h3 class="profit-chart-data-item-name">
Доходность в месяц:
</h3>
<span class="profit-chart-data-item-value">
до <span id="profit-chart" data-value="<?=$item->average_profit;?>">0</span>%
</span>
</span>
                                        <!--Item-->
                                        <span class="profit-chart-data-item all-profit">
<h3 class="profit-chart-data-item-name">
Общая доходность:
</h3>
<span class="profit-chart-data-item-value green">
<span id="yield-chart" data-value="<?=$item->all_profit;?>">0</span>%
</span>
</span>
                                        <!--Item-->
                                        <span class="profit-chart-data-item days">
<h3 class="profit-chart-data-item-name">
Дней в работе:
</h3>
<span class="profit-chart-data-item-value">
<span id="day-chart"  data-value="<?=$day_in_work;?>">0</span>
</span>
</span>
                                        <!--Item-->
                                        <span class="profit-chart-data-item deals">
<h3 class="profit-chart-data-item-name">
Сделок совершено:
</h3>
<span class="profit-chart-data-item-value">
<span id="deal-chart" data-value="<?=$item->all_deals;?>">0</span>
</span>
</span>
                                        <!--Item-->
                                        <span class="profit-chart-data-item drawdown">
<h3 class="profit-chart-data-item-name">
Макс. просадка:
</h3>
<span class="profit-chart-data-item-value">
<span id="drawdown-chart" data-value="<?=$item->max_drawdown;?>">0</span>%
</span>
</span>
                                    </div>
                                    <!--Button-->
                                    <a href='/robot/payment' class="profit-chart-data-button animation-button payment-button" tabindex="-2">
                                        <span class='px-1000-button-chart'>Купить</span>
                                        <span>Купить за <?=$item->price?></span>
                                        <svg version="1.1" class="profit-chart-data-button-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510.127px" height="510.127px" viewBox="0 0 510.127 510.127" style="enable-background:new 0 0 510.127 510.127;" xml:space="preserve">
<g>
    <g>
        <path d="M34.786,428.963h81.158v69.572c0,3.385,1.083,6.156,3.262,8.322c2.173,2.18,4.951,3.27,8.335,3.27h60.502
            c3.14,0,5.857-1.09,8.152-3.27c2.295-2.166,3.439-4.938,3.439-8.322v-69.572h182.964c3.377,0,6.156-1.076,8.334-3.256
            c2.18-2.178,3.262-4.951,3.262-8.336v-46.377c0-3.365-1.082-6.156-3.262-8.322c-2.172-2.18-4.957-3.27-8.334-3.27H199.628v-42.754
            h123.184c48.305,0,87.73-14.719,118.293-44.199c30.551-29.449,45.834-67.49,45.834-114.125c0-46.604-15.283-84.646-45.834-114.125
            C410.548,14.749,371.116,0,322.812,0H127.535c-3.385,0-6.157,1.089-8.335,3.256c-2.173,2.179-3.262,4.969-3.262,8.335v227.896
            H34.786c-3.384,0-6.157,1.145-8.335,3.439c-2.172,2.295-3.262,5.012-3.262,8.151v53.978c0,3.385,1.083,6.158,3.262,8.336
            c2.179,2.18,4.945,3.256,8.335,3.256h81.158v42.754H34.786c-3.384,0-6.157,1.09-8.335,3.27c-2.172,2.166-3.262,4.951-3.262,8.322
            v46.377c0,3.385,1.083,6.158,3.262,8.336C28.629,427.887,31.401,428.963,34.786,428.963z M199.628,77.179h115.938
            c25.6,0,46.248,7.485,61.953,22.46c15.697,14.976,23.549,34.547,23.549,58.691c0,24.156-7.852,43.733-23.549,58.691
            c-15.705,14.988-36.354,22.473-61.953,22.473H199.628V77.179z"></path>
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
                                        <div class="profit-chart-data-button-circle"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="profit-chart-block-inner">
                                <div class="profit-chart-block-wrapper">
                                    <!--Grid-->
                                    <div id='animate-grid' class="profit-chart-grid animate">
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line start"></div>
                                    </div>
                                    <!--Graph-->
                                    <div class="profit-chart-graph">
                                        <svg class="profit-chart-graph-svg" viewBox="0 0 338 150">
                                            <!--Polyline-->
                                            <polyline points="0,<?=$item->chart_svg;?>" fill="none" stroke="rgba(255, 255, 255, 0.7)" stroke-width="0.5" stroke-linejoin="round"></polyline>
                                            <!--Gradient-->
                                            <defs><linearGradient id="194RS" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgba(255, 255, 255, 1);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgba(255, 255, 255, 0.5);stop-opacity:0.02"></stop></linearGradient></defs>
                                            <!--Path-->
                                            <path d="M 0,115 L 0,<?=$item->chart_svg;?>, 115" fill="url(#194RS)"></path>
                                        </svg>
                                    </div>
                                    <!--Grid-->
                                    <div class="profit-chart-grid">
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line"></div>
                                        <div class="profit-chart-grid-line start"></div>
                                    </div>
                                    <!--Grid Delimiter-->
                                    <div class="profit-chart-grid-delimiter">
                                        <div class="profit-chart-grid-delimiter-line start"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                        <div class="profit-chart-grid-delimiter-line"></div>
                                    </div>
                                </div>
                                <!--Grid Integer-->
                                <div class="profit-chart-grid-integer">
                                    <div class="profit-chart-grid-integer-value sixth">
                                        <?=$robot_chart_levels['6']['level'];?>
                                    </div>
                                    <div class="profit-chart-grid-integer-value fifth">
                                        <?=$robot_chart_levels['5']['level'];?>
                                    </div>
                                    <div class="profit-chart-grid-integer-value fourth">
                                        <?=$robot_chart_levels['4']['level'];?>
                                    </div>
                                    <div class="profit-chart-grid-integer-value third">
                                        <?=$robot_chart_levels['3']['level'];?>
                                    </div>
                                    <div class="profit-chart-grid-integer-value second">
                                        <?=$robot_chart_levels['2']['level'];?>
                                    </div>
                                    <div class="profit-chart-grid-integer-value first">
                                        <?=$robot_chart_levels['1']['level'];?>
                                    </div>
                                </div>
                                <!--Grid Date-->
                                <div class="profit-chart-grid-date">
                                    <div class="profit-chart-grid-date-item first">
                                        <?=$robot_chart_period['1']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item second">
                                        <?=$robot_chart_period['2']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item third">
                                        <?=$robot_chart_period['3']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item fourth">
                                        <?=$robot_chart_period['4']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item fifth">
                                        <?=$robot_chart_period['5']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item sixth">
                                        <?=$robot_chart_period['6']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item seventh">
                                        <?=$robot_chart_period['7']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item eighth">
                                        <?=$robot_chart_period['8']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item ninth">
                                        <?=$robot_chart_period['9']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item tenth">
                                        <?=$robot_chart_period['10']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item eleventh">
                                        <?=$robot_chart_period['11']['name'];?>
                                    </div>
                                    <div class="profit-chart-grid-date-item twelfth">
                                        <?=$robot_chart_period['12']['name'];?>
                                    </div>
                                </div>
                                <!--Chart Hover-->
                                <div class="profit-chart-grid-hover-block">
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['1']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['1']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['1']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['2']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['2']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['2']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['3']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['3']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['4']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['4']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['5']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['5']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['6']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['6']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['7']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['7']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['8']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['8']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['9']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['9']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item tenth">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['10']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['10']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item eleventh">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['11']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['11']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="profit-chart-grid-hover-item twelfth">
                                        <div class="profit-chart-grid-hover-item-info">
                                            <div class="profit-chart-grid-hover-item-info-date">
                                                <?php $str = $robot_chart_period['12']['name']; $fc = mb_strtoupper(mb_substr($str, 0, 1)); echo $fc.mb_substr($str, 1);?> <?=$robot_chart_period['3']['year'];?>
                                            </div>
                                            <div class="profit-chart-grid-hover-item-info-profit">
                                                Доходность:
                                                <span class="profit-chart-grid-hover-item-info-profit-value green">
+<?=$robot_chart_period['12']['profit'];?>%
</span>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                </div>
                            </div>
                        </section>
                        <!--Mobile Chart Date-->
                        <div class="mobile-profit-chart-data">
                            <div class="mobile-profit-chart-data-inner">
                                <div class="mobile-profit-chart-data-container">
                                    <!--Item-->
                                    <div class="mobile-profit-chart-data-item">
                                        <div class="mobile-profit-chart-data-item-name">
                                            Общая доходность:
                                        </div>
                                        <div class="mobile-profit-chart-data-item-value">
                                            <?=$item->all_profit;?>%
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="mobile-profit-chart-data-item">
                                        <div class="mobile-profit-chart-data-item-name">
                                            Дней в работе:
                                        </div>
                                        <div class="mobile-profit-chart-data-item-value">
                                            <?=$day_in_work;?>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="mobile-profit-chart-data-item">
                                        <div class="mobile-profit-chart-data-item-name">
                                            Сделок совершено:
                                        </div>
                                        <div class="mobile-profit-chart-data-item-value">
                                            <?=$item->all_deals;?>
                                        </div>
                                    </div>
                                    <!--Item-->
                                    <div class="mobile-profit-chart-data-item drawdown">
                                        <div class="mobile-profit-chart-data-item-name">
                                            Макс. просадка:
                                        </div>
                                        <div class="mobile-profit-chart-data-item-value">
                                            <?=$item->max_drawdown;?>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Mobile Graph-->
                <div class="mobile-profit-chart-graph">
                    <svg class="mobile-profit-chart-graph-svg" viewBox="0 0 338 150">
                        <!--Polyline-->
                        <polyline points="0,<?=$item->chart_svg;?>" fill="none" stroke="rgba(255, 255, 255, 0.7)" stroke-linejoin="round"></polyline>
                        <!--Gradient-->
                        <defs><linearGradient id="194RSM" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:rgba(255, 255, 255, 1);stop-opacity:0.24"></stop><stop offset="100%" style="stop-color:rgba(255, 255, 255, 1);stop-opacity:0"></stop></linearGradient></defs>
                        <!--Path-->
                        <path d="M 0,150 L 0,<?=$item->chart_svg;?>, 150" fill="url(#194RSM)"></path>
                    </svg>
                </div>
            </section>
        </div>
    </div>
    <!--Free Easy Steps-->
    <div class="free-easy-steps-wrapper animation-items animation-no-hide">
        <div class="container-content">
            <section class="free-easy-steps">
                <div class="container-indents free-steps">
                    <div class="free-easy-steps-title-block">
                        <h1 class="free-easy-steps-title">
                            Как зарабатывать с торговым роботом
                        </h1>
                        <h2 class="free-easy-steps-subtitle">
                            Три простых шага на пути к стабильному доходу
                        </h2>
                    </div>
                    <div class="free-easy-steps-inner">
                        <div class="free-easy-steps-border"></div>
                        <!--Item-->
                        <div class="free-easy-steps-item first">
                            <div class="free-easy-steps-item-num">
                                1
                            </div>
                            <div class="free-easy-steps-item-name">
                                скачайте файлы
                            </div>
                            <div class="free-easy-steps-item-text">
                                Заполните форму оплаты или тестового периода, получите архив файлов робота на электронный адрес и скачайте его.
                            </div>
                            <!--Button-->
                            <div class="free-easy-steps-item-button animation-button" onclick="slowScroll('#try-free')">
                                <span>Скачать файлы</span>
                                <div class="free-easy-steps-item-button-circle"></div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="free-easy-steps-item second">
                            <div class="free-easy-steps-item-num">
                                2
                            </div>
                            <div class="free-easy-steps-item-name">
                                Установите их в MT4
                            </div>
                            <div class="free-easy-steps-item-text">
                                После скачивания файлов робота установите их в свой торговый терминал MT4.
                            </div>
                            <!--Button-->
                            <div class="free-easy-steps-item-button animation-button" onclick="slowScroll('#try-free')">
                                <span>Установить робота</span>
                                <div class="free-easy-steps-item-button-circle"></div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="free-easy-steps-item third">
                            <div class="free-easy-steps-item-num">
                                3
                            </div>
                            <div class="free-easy-steps-item-name">
                                Начните получать прибыль
                            </div>
                            <div class="free-easy-steps-item-name px-1000">
                                Получайте прибыль
                            </div>
                            <div class="free-easy-steps-item-text">
                                Подберите комфортные настройки робота и начните получать прибыль.
                            </div>
                            <!--Button-->
                            <div class="free-easy-steps-item-button animation-button" onclick="slowScroll('#try-free')">
                                <span>Начать сейчас</span>
                                <div class="free-easy-steps-item-button-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--Footer-->
    <div class="footer-wrapper">
        <div class="container-content">
            <section class="footer">
                <div class="container-indents">
                    <div class="footer-inner">
                        <!--Social Networks-->
                        <div class="footer-social-networks">
                            <div class="footer-social-networks-inner">
                                <!--Item-->
                                <a href="https://vk.com/sputnik_ws" class="footer-social-networks-link link-vk" target="_blank" tabindex="-2">
                                    <svg class="social-vk" id="vk-1" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M14.77 10.358c.531.573 1.091 1.111 1.567 1.741.21.28.41.569.562.894.216.462.02.97-.355.998l-2.33-.002c-.602.056-1.081-.212-1.485-.666-.322-.363-.621-.75-.932-1.124a2.296 2.296 0 0 0-.42-.412c-.317-.228-.593-.159-.775.208-.186.373-.228.786-.246 1.201-.025.606-.19.766-.742.793-1.178.062-2.296-.135-3.335-.792-.916-.578-1.626-1.395-2.245-2.32-1.203-1.801-2.124-3.78-2.953-5.815-.187-.458-.051-.704.408-.712a55.95 55.95 0 0 1 2.281-.002c.309.005.513.2.633.523.411 1.117.914 2.18 1.546 3.166.169.262.34.524.585.709.27.204.476.136.603-.196.08-.211.116-.438.134-.664.06-.777.068-1.553-.037-2.327-.065-.483-.312-.796-.748-.887-.223-.047-.19-.139-.082-.279.188-.242.364-.393.716-.393h2.634c.415.09.507.296.564.757l.002 3.232c-.005.178.08.708.372.826.232.084.386-.122.526-.285.63-.74 1.08-1.613 1.483-2.518.178-.398.332-.81.48-1.224.11-.306.283-.457.596-.45l2.535.003c.075 0 .151 0 .224.014.428.08.545.284.413.745-.208.723-.613 1.325-1.008 1.93-.423.646-.875 1.27-1.295 1.92-.385.594-.354.893.124 1.408z" stroke="none"></path></svg>
                                </a>
                                <!--Item-->
                                <a href="https://tgme.pro/sputnik_ws" class="footer-social-networks-link link-tg" target="_blank" tabindex="-2">
                                    <svg class="social-tg" id="tg-1" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"></path></svg>
                                </a>
                                <!--Item-->
                                <a href="https://www.instagram.com/sputnik_ws" class="footer-social-networks-link link-inst" target="_blank" tabindex="-2">
                                    <svg class="social-inst" id="inst-1" xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 24 24" width="512"><path d="M6 2h6a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4zm3 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm3.444-5.556a.889.889 0 1 0 0-1.777.889.889 0 0 0 0 1.777z" stroke="none"></path></svg>
                                </a>
                            </div>
                        </div>
                        <!--Documents-->
                        <div class="footer-documents">
                            <div class="footer-documents-inner">
                                <a href="" class="footer-documents-link" tabindex="-2">Политика конфиденциальности</a>
                                <a href="" class="footer-documents-link" tabindex="-2">Пользовательское соглашение</a>
                                <a href="" class="footer-documents-link" tabindex="-2">Условия использования робота</a>
                            </div>
                        </div>
                        <!--Documents Mobile-->
                        <div class="footer-documents-mobile">
                            <div class="footer-documents-mobile-inner">
                                <a href="" class="footer-documents-link-mobile">Конфиденциальность</a>
                                <a href="" class="footer-documents-link-mobile">Соглашение</a>
                                <a href="" class="footer-documents-link-mobile">Помощь</a>
                            </div>
                        </div>
                        <!--Compony Information-->
                        <div class="footer-company-information">
                            <div class="footer-company-information-inner">
<span class="footer-company-information-text">
Мы не предлагаем своим клиентам финансовые продукты, в том числе контракты на разницу цен и другие сложные финансовые инструменты. Торговля на CFD отличается высоким уровнем риска, поскольку использование кредитного плеча может сказаться на вашем финансовом положении как положительно, так и отрицательно.
</span>
                            </div>
                        </div>
                        <!--Border Mobile-->
                        <div class="footer-border-mobile"></div>
                        <div class="footer-container">
                            <!--Company Name-->
                            <div class="footer-company">
                                <div class="footer-company-text">
                                    © 2020,
                                    <a href="" class="company-link" tabindex="-2">ATrade</a>
                                </div>
                                <div class="footer-company-age-limit">
                                    18+
                                </div>
                            </div>
                            <!--Payment Methods-->
                            <div class="footer-payment-methods">
                                <div class="footer-payment-methods-inner">
                                    <!--Visa-->
                                    <svg class='visa-methods' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;" xml:space="preserve">
<g>
    <g>
        <polygon points="19.153,16.799 16.722,31.065 20.61,31.065 23.043,16.799   "/>
    </g>
</g>
                                        <g>
                                            <g>
                                                <path d="M13.462,16.815l-3.808,9.729l-0.406-1.469c-0.751-1.77-2.883-4.312-5.386-5.914l3.482,11.897l4.114-0.007l6.123-14.239    L13.462,16.815z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M7.772,17.836c-0.226-0.869-0.881-1.128-1.694-1.159H0.05L0,16.961c4.691,1.138,7.795,3.88,9.083,7.177L7.772,17.836z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M30.923,19.534c1.272-0.02,2.194,0.258,2.91,0.546l0.351,0.165l0.526-3.092c-0.77-0.289-1.977-0.599-3.483-0.599    c-3.842,0-6.55,1.935-6.571,4.708c-0.025,2.049,1.929,3.193,3.405,3.876c1.515,0.7,2.023,1.145,2.016,1.77    c-0.012,0.955-1.208,1.393-2.325,1.393c-1.557,0-2.384-0.215-3.661-0.747l-0.501-0.228l-0.547,3.193    c0.91,0.399,2.589,0.742,4.332,0.76c4.087,0,6.743-1.912,6.771-4.875c0.017-1.621-1.02-2.858-3.267-3.873    c-1.36-0.662-2.192-1.102-2.184-1.77C28.695,20.168,29.401,19.534,30.923,19.534z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M44.688,16.815h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143    c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.815z M39.893,26.01    c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z"/>
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
                                    <!--Mastercard-->
                                    <svg class='mastercard-methods' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 48.428 48.428" style="enable-background:new 0 0 48.428 48.428;" xml:space="preserve">
<g>
    <g>
        <path d="M33.933,9.716c-3.741,0.001-7.151,1.419-9.721,3.748c-2.572-2.326-5.98-3.745-9.717-3.745c-0.031,0-0.063,0-0.093,0    C6.444,9.771,0,16.245,0,24.214c0,8.001,6.494,14.494,14.494,14.494c3.737,0,7.145-1.417,9.716-3.745    c-0.537-0.485-1.023-1.022-1.482-1.584h2.993c-0.451,0.553-0.943,1.071-1.472,1.553h-0.002c-0.012,0.013-0.025,0.021-0.037,0.032    c2.573,2.33,5.985,3.75,9.728,3.749c8.005-0.003,14.492-6.495,14.49-14.499c0-0.003,0-0.005,0-0.007    C48.429,16.203,41.938,9.714,33.933,9.716z M22.894,14.961h2.755c0.406,0.492,0.783,1.01,1.125,1.552h-4.915    C22.176,15.995,22.524,15.462,22.894,14.961z M21.003,18.035h6.607c0.235,0.502,0.443,1.021,0.625,1.553H20.22    C20.3,19.438,20.58,18.834,21.003,18.035z M5.917,27.906l0.879-5.542l-1.983,5.542H3.75l-0.138-5.542l-0.939,5.542H1.184    l1.234-7.35H4.67l0.079,4.51l1.521-4.51h2.443l-1.217,7.35H5.917z M11.182,27.894l0.051-0.587    c-0.024,0.003-0.494,0.709-1.583,0.709c-0.57,0-1.49-0.311-1.49-1.663c0-1.719,1.402-2.289,2.737-2.289    c0.21,0,0.663,0.038,0.663,0.038s0.051-0.105,0.051-0.389c0-0.467-0.42-0.531-0.995-0.531c-1.013,0-1.682,0.271-1.682,0.271    l0.224-1.33c0,0,0.812-0.34,1.869-0.34c0.547,0,2.12,0.058,2.12,1.861l-0.606,4.25H11.182z M16.925,26.022    c0,2.051-1.987,1.963-2.334,1.963c-1.295,0-1.695-0.179-1.732-0.189l0.206-1.35c0.002-0.012,0.65,0.235,1.371,0.235    c0.416,0,0.956-0.041,0.956-0.538c0-0.744-1.932-0.566-1.932-2.333c0-1.559,1.158-2.015,2.3-2.015    c0.882,0,1.424,0.121,1.424,0.121l-0.195,1.362c0,0-0.837-0.069-1.054-0.069c-0.549,0-0.848,0.12-0.848,0.504    C15.086,24.485,16.925,24.107,16.925,26.022z M19.311,26.56c0.137,0,0.292-0.047,0.398-0.047l-0.193,1.311    c-0.155,0.043-0.594,0.199-1.157,0.203c-0.719,0.006-1.23-0.396-1.23-1.308c0-0.612,0.877-5.655,0.911-5.688h1.543l-0.157,0.902    h0.77l-0.197,1.453h-0.817l-0.434,2.677C18.715,26.276,18.774,26.56,19.311,26.56z M22.705,21.763c1.694,0,2.201,1.24,2.201,2.257    c0,0.407-0.204,1.407-0.204,1.407h-3.136c0,0-0.29,1.235,1.367,1.235c0.777,0,1.639-0.38,1.639-0.38L24.3,27.769    c0,0-0.498,0.254-1.63,0.254c-1.227,0-2.666-0.519-2.666-2.699C20.005,23.435,21.153,21.763,22.705,21.763z M26.792,31.886H21.65    c-0.313-0.5-0.605-1.013-0.856-1.552h6.843C27.385,30.87,27.103,31.388,26.792,31.886z M26.447,27.917h-1.584l0.963-5.982h1.437    l-0.138,0.867c0,0,0.512-0.943,1.203-0.943c0.201,0,0.298,0.02,0.298,0.02c-0.205,0.418-0.386,0.801-0.574,1.79    C26.98,23.289,26.898,25.362,26.447,27.917z M32.482,27.824c0,0-0.83,0.212-1.35,0.212c-1.842,0-2.777-1.271-2.777-3.196    c0-2.903,1.733-4.449,3.514-4.449c0.805,0,1.738,0.378,1.738,0.378l-0.252,1.635c0,0-0.631-0.441-1.416-0.441    c-1.05,0-1.992,1.002-1.992,2.823c0,0.897,0.439,1.733,1.535,1.733c0.521,0,1.276-0.379,1.276-0.379L32.482,27.824z     M36.197,27.897l0.052-0.591c-0.025,0.003-0.495,0.709-1.583,0.709c-0.57,0-1.49-0.311-1.49-1.663    c0-1.719,1.402-2.289,2.736-2.289c0.21,0,0.664,0.038,0.664,0.038s0.052-0.104,0.052-0.388c0-0.467-0.42-0.531-0.996-0.531    c-1.013,0-1.681,0.271-1.681,0.271l0.224-1.33c0,0,0.812-0.34,1.87-0.34c0.546,0,2.12,0.058,2.119,1.861l-0.606,4.25    C37.557,27.897,36.197,27.897,36.197,27.897z M39.404,27.917H37.82l0.963-5.982h1.438l-0.138,0.867c0,0,0.513-0.943,1.204-0.943    c0.201,0,0.297,0.02,0.297,0.02c-0.204,0.418-0.387,0.801-0.574,1.79C39.937,23.289,39.855,25.362,39.404,27.917z M44.133,27.901    L44.2,27.35c0,0-0.512,0.646-1.438,0.646c-1.283,0-1.912-1.239-1.912-2.505c0-1.958,1.178-3.665,2.592-3.665    c0.91,0.002,1.491,0.805,1.491,0.805l0.334-2.065l1.547-0.003l-1.18,7.338H44.133z M47.185,27.694    c-0.041,0.074-0.099,0.131-0.173,0.175c-0.073,0.041-0.151,0.062-0.233,0.062c-0.08,0-0.157-0.021-0.231-0.062    c-0.074-0.044-0.132-0.101-0.173-0.175c-0.042-0.075-0.062-0.151-0.062-0.232c0-0.082,0.021-0.16,0.062-0.234    c0.041-0.074,0.102-0.134,0.175-0.174c0.076-0.041,0.151-0.062,0.229-0.062c0.08,0,0.156,0.021,0.23,0.062    c0.076,0.041,0.134,0.098,0.176,0.174c0.043,0.075,0.062,0.153,0.062,0.234S47.227,27.62,47.185,27.694z"/>
    </g>
</g>
                                        <g>
                                            <g>
                                                <path d="M47.061,32.117c-0.01-0.007-0.019-0.018-0.035-0.024c-0.016-0.006-0.041-0.009-0.08-0.009h-0.094v0.15h0.1    c0.047,0,0.078-0.004,0.096-0.021c0.017-0.014,0.025-0.031,0.025-0.055C47.073,32.142,47.069,32.131,47.061,32.117z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M47.384,32.027c-0.043-0.078-0.102-0.133-0.177-0.174c-0.075-0.041-0.151-0.062-0.229-0.062    c-0.08,0-0.156,0.021-0.23,0.062c-0.074,0.041-0.135,0.098-0.176,0.174c-0.043,0.074-0.062,0.152-0.062,0.232    s0.021,0.159,0.062,0.232c0.043,0.074,0.101,0.134,0.174,0.175c0.074,0.041,0.152,0.062,0.234,0.062    c0.08,0,0.158-0.021,0.231-0.062c0.073-0.041,0.132-0.101,0.173-0.175c0.042-0.073,0.062-0.151,0.062-0.232    S47.425,32.1,47.384,32.027z M47.096,32.519L47.096,32.519l-0.044-0.079c-0.035-0.062-0.064-0.103-0.086-0.119    c-0.014-0.01-0.036-0.018-0.064-0.018h-0.047v0.215h-0.082v-0.505h0.174c0.06,0,0.103,0.005,0.127,0.015    c0.027,0.01,0.05,0.024,0.064,0.049c0.016,0.023,0.023,0.048,0.023,0.074c0,0.037-0.014,0.068-0.039,0.097    c-0.026,0.026-0.062,0.043-0.105,0.046c0.018,0.006,0.032,0.016,0.043,0.027c0.021,0.02,0.045,0.053,0.075,0.099l0.062,0.099    H47.096z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M11.022,25.211c-1.131,0-1.36,0.508-1.36,0.931c0,0.218,0.125,0.582,0.604,0.582c0.929,0,1.122-1.218,1.092-1.477    C11.314,25.238,11.286,25.212,11.022,25.211z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M22.711,23.144c-0.841,0-1.003,0.957-1.003,1.058h1.713C23.421,24.125,23.582,23.144,22.711,23.144z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M43.709,23.311c-0.679,0-1.216,0.788-1.215,1.985c0,0.73,0.26,1.198,0.816,1.198c0.836,0,1.239-1.091,1.239-1.904    C44.549,23.693,44.264,23.311,43.709,23.311z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M47.115,27.268c-0.035-0.062-0.084-0.11-0.146-0.145c-0.062-0.035-0.125-0.052-0.191-0.052    c-0.064,0-0.129,0.018-0.191,0.052c-0.062,0.032-0.111,0.082-0.146,0.145c-0.035,0.063-0.053,0.13-0.053,0.195    c0,0.067,0.018,0.133,0.051,0.194c0.037,0.062,0.084,0.109,0.146,0.146c0.062,0.034,0.126,0.054,0.193,0.054    c0.067,0,0.133-0.02,0.193-0.054c0.062-0.035,0.11-0.083,0.146-0.146c0.035-0.062,0.051-0.127,0.051-0.194    C47.168,27.397,47.15,27.331,47.115,27.268z M46.898,27.72l-0.045-0.078c-0.035-0.063-0.063-0.103-0.084-0.118    c-0.017-0.013-0.037-0.019-0.066-0.019h-0.046v0.214h-0.084v-0.504h0.175c0.059,0,0.103,0.005,0.128,0.016    c0.025,0.009,0.047,0.026,0.064,0.048c0.017,0.022,0.023,0.047,0.023,0.074c0,0.037-0.014,0.068-0.04,0.096    c-0.026,0.029-0.062,0.041-0.104,0.046c0.02,0.008,0.033,0.017,0.043,0.026c0.021,0.021,0.045,0.051,0.074,0.099l0.062,0.1    C46.998,27.72,46.898,27.72,46.898,27.72z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M36.039,25.211c-1.131,0-1.36,0.508-1.36,0.931c0,0.218,0.124,0.582,0.604,0.582c0.929,0,1.121-1.218,1.092-1.477    C36.33,25.238,36.302,25.212,36.039,25.211z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M46.864,27.318c-0.008-0.01-0.019-0.018-0.034-0.025c-0.017-0.005-0.042-0.01-0.082-0.01v0.001h-0.091v0.152h0.099    c0.047,0,0.078-0.006,0.097-0.021c0.015-0.015,0.024-0.034,0.024-0.056C46.877,27.342,46.873,27.332,46.864,27.318z"/>
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
                                    <!--Qiwi-->
                                    <svg class='qiwi-methods' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 56">
                                        <g fill="none">
                                            <path d="M54.406 34.313h1.737v3.893h1.255l2.252-3.893h1.899l-2.703 4.569v.032L61.71 43.9h-1.963l-2.317-4.183h-1.254v4.183h-1.738v-9.588h-.032zm11.197 2.542c2.09 0 3.796 1.512 3.796 3.603 0 2.124-1.673 3.604-3.764 3.604-2.092 0-3.765-1.48-3.765-3.604-.032-2.123 1.641-3.603 3.733-3.603zm5.147.16h1.641v5.406h2.156v-5.405h1.64v5.405h2.156v-5.405h1.641V43.9h-9.17v-6.885h-.064zm14.093-.16c1.962 0 3.056 1.448 3.056 3.25a4.8 4.8 0 0 1-.064.675h-4.73c.097 1.19 1.03 1.834 2.06 1.834.707 0 1.415-.322 1.962-.74l.676 1.223c-.708.61-1.77.997-2.767.997-2.285 0-3.7-1.641-3.7-3.604 0-2.155 1.447-3.635 3.507-3.635zm3.86 5.598c.837-.129 1.448-.836 1.448-3.282v-2.155h5.02V43.9h-1.706v-5.502h-1.673v.772c0 2.992-.804 4.73-3.089 4.794v-1.512zm11.358-5.598c1.962 0 3.056 1.448 3.056 3.25a4.8 4.8 0 0 1-.064.675h-4.73c.097 1.19 1.03 1.834 2.06 1.834.707 0 1.415-.322 1.962-.74l.676 1.223c-.708.61-1.77.997-2.767.997-2.284 0-3.7-1.641-3.7-3.604 0-2.155 1.448-3.635 3.507-3.635zm4.472.16h1.705v2.639h.837l1.673-2.638h1.898l-2.188 3.281v.033l2.445 3.57h-1.994l-1.802-2.798h-.9V43.9H104.5v-6.885h.032zm-38.93 5.567c1.126 0 2.059-.869 2.059-2.156 0-1.255-.933-2.156-2.06-2.156-1.125 0-2.026.87-2.026 2.156 0 1.287.9 2.156 2.027 2.156zm20.559-2.992c0-.901-.612-1.448-1.384-1.448-.868 0-1.512.579-1.673 1.448h3.057zm15.218 0c0-.901-.611-1.448-1.383-1.448-.87 0-1.513.579-1.674 1.448h3.057z"/><path d="M78.44 13.432V29.68a.44.44 0 0 1-.45.45h-3.314a.44.44 0 0 1-.45-.45V13.432a.44.44 0 0 1 .45-.45h3.314a.44.44 0 0 1 .45.45zm25.868-.45c.129 0 .29.064.45.193.097.096.097.257.065.386l-5.47 16.28a.458.458 0 0 1-.418.29h-2.96c-.193 0-.354-.097-.418-.29L92.37 20.35l-3.185 9.49a.458.458 0 0 1-.418.29h-2.96c-.193 0-.354-.096-.418-.29l-5.47-16.28c-.032-.128-.032-.257.064-.385.065-.129.226-.193.354-.193h3.7c.193 0 .354.128.419.321l2.927 9.62 3.218-9.62a.458.458 0 0 1 .418-.29h2.606c.193 0 .354.097.418.29l3.218 9.62 2.928-9.62a.444.444 0 0 1 .418-.321h3.7zm5.598 0c.225 0 .418.193.45.45V29.68a.44.44 0 0 1-.45.45h-3.314a.44.44 0 0 1-.45-.45V13.432a.44.44 0 0 1 .45-.45h3.314zm-37.611 16.57c.193.225.032.546-.258.546h-4.054a.519.519 0 0 1-.418-.193l-.675-.836c-1.416.9-3.09 1.448-4.859 1.448-4.954 0-8.976-4.022-8.976-8.977s4.022-8.977 8.976-8.977c4.955 0 8.977 4.022 8.977 8.977 0 1.77-.515 3.443-1.416 4.858l2.703 3.153zm-33.88 7.882c.837.322 1.159 1.576 1.223 2.123.129.998-.16 1.384-.482 1.384-.322 0-.773-.386-1.255-1.158-.483-.773-.676-1.641-.418-2.092.16-.29.514-.418.933-.257zm-4.89 3.636c.515 0 1.094.225 1.609.675.997.837 1.287 1.802.772 2.51-.29.354-.772.579-1.319.579-.547 0-1.126-.193-1.512-.547-.901-.772-1.158-2.06-.58-2.767.226-.29.58-.45 1.03-.45zm-11.26 9.298c-12.227 0-22.136-9.91-22.136-22.136 0-12.226 9.91-22.135 22.135-22.135 12.226 0 22.136 9.91 22.136 22.135 0 4.15-1.158 8.044-3.12 11.358-.065.096-.226.064-.258-.065-.772-5.437-4.086-8.43-8.912-9.33-.419-.065-.483-.322.064-.386 1.48-.129 3.571-.097 4.665.096.064-.547.097-1.126.097-1.705 0-8.076-6.564-14.64-14.64-14.64-8.075 0-14.639 6.564-14.639 14.64s6.564 14.64 14.64 14.64h.675a19.749 19.749 0 0 1-.29-3.958c.033-.901.226-1.03.612-.322 2.027 3.507 4.923 6.66 10.585 7.915 4.633 1.03 9.266 2.22 14.253 8.558.45.547-.225 1.126-.74.676-5.083-4.505-9.716-5.985-13.931-5.985-4.73.033-7.947.644-11.197.644zm41.986-24.42l-1.77-2.156c-.192-.225-.031-.579.258-.579h3.732c.193-.515.29-1.094.29-1.673 0-2.67-1.995-4.987-4.73-4.987-2.734 0-4.73 2.317-4.73 4.987s1.996 4.955 4.73 4.955c.772.032 1.545-.193 2.22-.547z"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>


<!--Up Button-->
<a href="javascript://0" class="up-button" onclick="slowScroll('#up')" tabindex="-2">
    <div class="up-button-container">
        <svg class="up-button-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
<g>
    <g>
        <path d="M466.22,205.787L263.553,3.12c-4.16-4.16-10.923-4.16-15.083,0L45.804,205.787c-21.803,21.803-21.803,57.28,0,79.083    s57.28,21.803,79.083,0l77.781-77.781v251.584c0,29.397,23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333V207.088    l77.781,77.781c21.803,21.803,57.28,21.803,79.083,0C488.001,263.088,488.001,227.589,466.22,205.787z"/>
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
</a>

<!--Feedback-->
<div class="feedback">
    <div class="feedback-inner">
        <!--Button-->
        <div class="feedback-button">
            <svg class="feedback-button-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30.743px" height="30.744px" viewBox="0 0 30.743 30.744" style="enable-background:new 0 0 30.743 30.744;" xml:space="preserve">
<g>
    <path d="M28.585,9.67h-0.842v9.255c0,1.441-0.839,2.744-2.521,2.744H8.743v0.44c0,1.274,1.449,2.56,2.937,2.56h12.599l4.82,2.834   L28.4,24.669h0.185c1.487,0,2.158-1.283,2.158-2.56V11.867C30.743,10.593,30.072,9.67,28.585,9.67z"/>
    <path d="M22.762,3.24H3.622C1.938,3.24,0,4.736,0,6.178v11.6c0,1.328,1.642,2.287,3.217,2.435l-1.025,3.891L8.76,20.24h14.002   c1.684,0,3.238-1.021,3.238-2.462V8.393V6.178C26,4.736,24.445,3.24,22.762,3.24z M6.542,13.032c-0.955,0-1.729-0.774-1.729-1.729   s0.774-1.729,1.729-1.729c0.954,0,1.729,0.774,1.729,1.729S7.496,13.032,6.542,13.032z M13,13.032   c-0.955,0-1.729-0.774-1.729-1.729S12.045,9.574,13,9.574s1.729,0.774,1.729,1.729S13.955,13.032,13,13.032z M19.459,13.032   c-0.955,0-1.73-0.774-1.73-1.729s0.775-1.729,1.73-1.729c0.953,0,1.729,0.774,1.729,1.729S20.412,13.032,19.459,13.032z"/>
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
            <div class="feedback-button-text">
                Задать вопрос
            </div>
        </div>
        <!--Window-->
        <div class="feedback-window">
            <!--Close-->
            <svg class="feedback-window-close-icon" id="close_1" height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                </style><g class="st2" id="cross"><g class="st0"><line class="st1" x1="112.5" x2="401" y1="112.5" y2="401"></line><line class="st1" x1="401" x2="112.5" y1="112.5" y2="401"></line></g></g><g id="cross_copy"><path d="M268.064,256.75l138.593-138.593c3.124-3.124,3.124-8.189,0-11.313c-3.125-3.124-8.189-3.124-11.314,0L256.75,245.436   L118.157,106.843c-3.124-3.124-8.189-3.124-11.313,0c-3.125,3.124-3.125,8.189,0,11.313L245.436,256.75L106.843,395.343   c-3.125,3.125-3.125,8.189,0,11.314c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343L256.75,268.064l138.593,138.593   c1.563,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c3.124-3.125,3.124-8.189,0-11.314L268.064,256.75z"></path></g>
</svg>
            <!--Title-->
            <h1 class="feedback-window-title">
                Форма обратной связи
            </h1>
            <!--Subtitle-->
            <h2 class="feedback-window-subtitle">
                Введите данные своего запроса. Сотрудник нашей службы поддержки ответит Вам в ближайшее время.
            </h2>
            <!--Form-->
            <form action="/robot" id="feedback_form" class="feedback-window-form" autocomplete="off" method="post" role="form" novalidate="novalidate">
                <!--Item-->
                <div class="feedback-window-form-item">
                    <label for="feedback-email" class="feedback-window-form-item-label" value>
                        Электронный адрес:
                    </label>
                    <input id="feedback-email" type="email" name='email' class="feedback-window-form-item-input" tabindex="1" required autofocus aria-required="true">
                </div>
                <!--Item-->
                <div class="feedback-window-form-item">
                    <label for="feedback-theme" class="feedback-window-form-item-label">
                        Тема:
                    </label>
                    <input id="feedback-theme" type="text" name='theme' class="feedback-window-form-item-input" tabindex="1" required aria-required="true">
                </div>
                <!--Item-->
                <div class="feedback-window-form-item">
                    <label for="feedback-description" class="feedback-window-form-item-label">
                        Сообщение:
                    </label>
                    <textarea id="feedback-description" type="text" name='message' class="feedback-window-form-item-textarea" tabindex="1" required aria-required="true" aria-describedby="request_description_hint" aria-labelledby="request_description_label"></textarea>
                    <span class="feedback-window-item-desc">
<span>*</span>
Пожалуйста, опишите Вашу проблему подробно, чтобы мы смогли помочь Вам!
</span>
                </div>
                <input type="hidden" name="form-name" value="feedback-form">
                <!--Button-->
                <button type="submit" class="feedback-window-button-submit" tabindex="1" autocomplete="off">
                    <span>Отправить</span>
                    <div class="feedback-window-button-submit-circle"></div>
                </button>
            </form>
        </div>
    </div>
</div>

<script src='<?=JS_VLDT;?>'></script>
<script src='/public/js/robot/animation.js'></script>
<script src='/public/js/robot/gallery.js'></script>
<script src='/public/js/robot/app.js'></script>
    <?php endforeach;?>
<?php endif;?>
