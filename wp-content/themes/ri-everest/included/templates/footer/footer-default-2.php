<div id="top-rit-footer">
    <div class="container">
        <?php if(is_active_sidebar('bottom-main-footer')||is_active_sidebar('footer-info')||is_active_sidebar('footer-2')||is_active_sidebar('footer-3')||is_active_sidebar('footer-4')):?>
        <div class="main-top-footer">
            <div class=" row">
                <section class="col-xs-12 col-sm-4 wrap-footer-info">
                    <?php dynamic_sidebar('footer-info') ?>
                </section>
                <div class="col-xs-12 col-sm-8 wrap-content-footer">
                    <?php dynamic_sidebar('bottom-main-footer') ?>
                    <div class="row">
                        <section class="col-xs-12 col-sm-4">
                            <?php dynamic_sidebar('footer-2') ?>
                        </section>
                        <section class="col-xs-12 col-sm-4">
                            <?php dynamic_sidebar('footer-3') ?>
                        </section>
                        <section class="col-xs-12 col-sm-4">
                            <?php dynamic_sidebar('footer-4') ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
<?php if(is_active_sidebar('footer-1')||(get_theme_mod('rit_enable_copyright', '1') && get_theme_mod('rit_copyright_text'))){?>
<div id="rit-bottom-footer">
    <div class="container">
        <div class="row">
        <?php if (get_theme_mod('rit_enable_copyright', '1') && get_theme_mod('rit_copyright_text')) {?>
            <div class="copy-right col-xs-12 col-sm-6" id="copy-right">
                  <?php  echo get_theme_mod('rit_copyright_text');?>
            </div>
        <?php }?>
        <div class="col-xs-12 col-sm-6 bottom-right-widget pull-right">
            <?php dynamic_sidebar('bottom-footer') ?>
        </div>
    </div>
    </div>
</div>
<?php }?>