<?php if(!empty($_GET['id'])):?>
    <?php if(is_numeric($_GET['id']) == 1):?>
        <?php $ideasID = R::getCol( 'SELECT `id` FROM signals');?>
            <?php if(in_array($_GET['id'],$ideasID)):?>
                <div class="this_element"  data-id="<?=$_GET['id'];?>">
                </div>
                <script>
                    // Modal Signal Window Ajax
                    $.removeCookie('history_ajax', { path: '/' });
                    $.removeCookie('ideas_ajax', { path: '/' });
                    var id = $('.this_element').data('id');
                    $.cookie('ideas_ajax', id, { expires: 90, path: '/' });
                    document.location.href = 'http://atrade.ru/ideas';
                </script>
            <?php else: ?>
                <?php throw new \Exception("Страница не найдена", 404);?>
            <?php endif;?>
    <?php else: ?>
        <?php throw new \Exception("Страница не найдена", 404);?>
    <?php endif;?>
    <?php else: ?>
        <?php throw new \Exception("Страница не найдена", 404);?>
<?php endif; ?>




<style>
    body {
        background: #fff;
    }
    
    .header {
        display: none;
    }
    
    .footer {
        display: none;
    }
    
    .cookie_notification {
        display: none;
    }
    
    .cookie_notification.active {
        display: none;
    }
    
    .subheader_mobile {
        display: none;
    }
</style>

