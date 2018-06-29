<div class="uk-section uk-section-default section-portfolio uk-height-viewport <?php if(wp_kses_post($instance['position'])): // TODO  ?> <?php endif;?>" uk-height-viewport="offset-top: true">
    <div class="container">
        <div class="uk-child-width-expand@s uk-grid-small" uk-grid>
            <div class="section-portfolio-content-left">
                <div class="uk-position-relative " uk-slider="center: true">
                    <ul class="uk-slider-items uk-child-width-1-2">
                        <?php 
                            $images = get_img_variables($instance, $args);
                            if(count($images) != 0): ?>
                            <?php foreach($images as $img): ?>
                                <li uk-lightbox>
                                    <div class="portfolio-picture" data-src="<?php echo wp_get_attachment_url($img); ?>" uk-img></div>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
            <div class="section-portfolio-content-right">
                <h3><?php echo wp_kses_post($instance['title']); ?></h3>
                <p><?php echo wp_kses_post($instance['description'])?>
                <?php if(count(wp_kses_post($instance['url'])) != 0): ?>
                    <a href="http://<?php echo wp_kses_post($instance['url'])?>" target="_blank">View</a>
                    <br></p>
                <?php endif; ?>
                <?php 
                    $techs_used = get_tech_variables($instance, $args);
                    if (count($techs_used) != 0): ?>
                        <?php foreach($techs_used as $tech):?>
                            <span class="uk-badge"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>

                
<?php
    function get_img_variables( $instance, $args ) {
        $images = array();

        // Ensure that the repeater is available and not empty.
        if (!empty($instance['image_repeater'] ) ) {
            $repeater_items = $instance['image_repeater'];

            foreach($repeater_items as $repeater_item ) {
                $img_from_repeater = $repeater_item['image'];
                $images[] = $img_from_repeater;
            }
        }

        return $images;
    }

    function get_tech_variables($instance, $args) {
        $techs_used = array();

        if(!empty($instance['tech_used'])) {
            $repeater_items = $instance['tech_used'];

            foreach($repeater_items as $repeater_item ) {
                $tech_from_repeater = $repeater_item['tech'];
                $techs_used[] = $tech_from_repeater;
            }
        }

        return $techs_used;
    }
?>