<?php

/**
 * The template used for displaying work page content
 * @author Noel Lopez noel@rebootproject.mx
 * @author Daniel Huidobro daniel@rebootproject.mx
 * @package Reboot Project
 */

?>
<div class="portfolio-gap"></div>
<div id="colorlib-work">
    <div class="container">
        <div class="row row-padded-bottom">
            <div class="col-md-12">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-hire" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-md-pull-1">
                <h2 class="heading">Te gustaría contactarnos?</h2>
                <p><a href="mailto:info@rebootproject.mx" class="btn btn-primary btn-lg"><span class="icon"><i class="icon-mail5"></i></span>Envíanos un correo</a></p>
            </div>
        </div>
    </div>
</div>