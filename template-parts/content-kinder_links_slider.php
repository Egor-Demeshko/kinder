<?php
    $text = get_field('kinder_links_slider_text');
    $imgId = get_field('kinder_links_slider_image');
    $link = get_field('kinder_slider_links_link');
    $imglink = '';
    $imgalt = '';

    if($imgId){
        $imglink =  wp_get_attachment_image_src( $imgId, 'thumbnail' )[0];
        $imgalt = get_post_meta( $imgId, '_wp_attachment_image_alt', true );
    }
?>
<a class="links__item" href="<?php echo $link?>" 
    aria-label="<?php __("перейти на страницу ", "kinder")?> <?php echo $text ?>"
    target="_blank" rel="external">
    <?php 
        if($imglink){
            ?>
            <div class="links__image" role="presentation">
                <img src="<?php echo $imglink ?>" width="89px" height="89px" alt="<?php echo $imgalt?>" target="_blank"/>
             </div>
            <?php
        }

        if($text){
            ?>
            <div class="links__title_wrapper" aria-label="<?php  __("Название другой организации", "kinder")?>" role="presentation">
                <span class="links__title"><?php echo $text ?></span>
            </div>
            <?php
        }
    ?>
</a>