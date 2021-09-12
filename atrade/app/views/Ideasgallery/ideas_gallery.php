<link rel="stylesheet" href="/public/css/ideas_gallery/style.css">
<link rel="stylesheet" href="/public/css/base/galleryHistory.css">

<!--Preloader-->
<div class="preloader_gallery" id="preloader_gallery">
    <div class="container">
        <div class="preloader_gallery_inner">
            <div class="container_preloader_gallery">
                <div class="loader-container-gallery arc-rotate-gallery">
                    <div class="loader-gallery">
                        <div class="arc-gallery"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Image Active History-->
<div class="image_active_history">
    <div class="image_active_history_inner">
        <div class="image_active_history_wrapper">
            <!--Image-->
            <div class="image_active_history_open_block">
                <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signalHistory->screen_before;?>" class="image_active_history_open">
                <?php if($signalHistory->screen_text_before): ?>
                <div class="image_active_history_open_title">
                <div class="image_active_history_open_title_inner">
                    <h1 class="image_active_history_open_text">
                       <?=$signalHistory->screen_text_before;?>
                    </h1>
                </div>
                </div>
                <?php endif; ?>
            </div>
            <!--Image-->
            <div class="image_active_history_open_block">
                <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signalHistory->screen_after;?>" alt="" class="image_active_history_open">
                <?php if($signalHistory->screen_text_after): ?>
                    <div class="image_active_history_open_title">
                        <div class="image_active_history_open_title_inner">
                            <h1 class="image_active_history_open_text">
                                <?=$signalHistory->screen_text_after;?>
                            </h1>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!--Svg Close Icon-->
            <svg class="image_active_history_open_close image_active_history_close" width="16" height="16" class=""><use xlink:href="#icon-close" style="stroke: none; stroke-width: 0;">
                    <svg viewBox="0 0 18 18" id="icon-close"><path clip-rule="evenodd" d="M1.707.293A1 1 0 1 0 .293 1.707L7.586 9 .293 16.293a1 1 0 1 0 1.414 1.414L9 10.414l7.293 7.293a1 1 0 1 0 1.414-1.414L10.414 9l7.293-7.293A1 1 0 1 0 16.293.293L9 7.586 1.707.293z"></path></svg>
                </use></svg>
            <!--Left Arrow Icon-->
            <div class="image_active_history_open_left_arrow_block image_active_history_open_prev">
                <!--Svg-->
                <svg class="image_active_history_open_left_arrow" width="20" height="20" class=""><use xlink:href="#icon-direction">
                        <svg viewBox="0 0 23 12" id="icon-direction"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.707.293a1 1 0 1 0-1.414 1.414L19.586 5H1a1 1 0 1 0 0 2h18.586l-3.293 3.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5z"></path></svg>
                    </use></svg>
            </div>
            <!--Right Arrow Icon-->
            <div class="image_active_history_open_right_arrow_block image_active_history_open_next">
                <!--Svg-->
                <svg class="image_active_history_open_right_arrow" width="20" height="20" class=""><use xlink:href="#icon-direction">
                        <svg viewBox="0 0 23 12" id="icon-direction"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.707.293a1 1 0 1 0-1.414 1.414L19.586 5H1a1 1 0 1 0 0 2h18.586l-3.293 3.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5z"></path></svg>
                    </use></svg>
            </div>
        </div>
        <!--Image Switch-->
        <div class="image_active_history_switch">
            <div class="image_active_history_switch_wrapper">
                <!--Image-->
                <div class="image_active_history_switch_image_block">
                    <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signalHistory->screen_before;?>" alt="" class="image_active_history_switch_image">
                </div>
                <!--Image-->
                <div class="image_active_history_switch_image_block">
                    <img src="<?=IMG_MAIN?>/screen/screen_gallery/<?=$signalHistory->screen_after;?>" alt="" class="image_active_history_switch_image">
                </div>
            </div>
        </div>
        <!--Image Background-->
        <div class="image_active_history_background"></div>
    </div>
</div>


<script src='/public/js/base/galleryHistory.js'></script>