<?php 
    $desktop_image = wp_kses_post($instance['dekstop_image']);
    $mobile_image = wp_kses_post($instance['mobile_image']);

    $title =  wp_kses_post($instance['title']);
    $description = wp_kses_post($instance['description']);
    $url = wp_kses_post($instance['url']);

    $techs = get_tech_variables($instance, $args);
?>

<div class="section-portfolio">
    <div class="uk-child-width-expand@s" uk-grid>
        <a href="http://<?php echo $url; ?>" target="_blank">
            <div class="content-left">
                <div class="previes uk-position-relative">
                    <div class="preview preview-desktop">
                        <div class="preview-bar uk-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="preview-content">
                            <div class="img" data-src="<?php echo wp_get_attachment_url($desktop_image); ?>" uk-img></div>
                        </div>
                    </div>
                    <div class="preview preview-mobile uk-visible@l">
                        <div class="preview-bar uk-flex">
                            <span> </span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="preview-content">
                            <div class="img" data-src="<?php echo wp_get_attachment_url($mobile_image); ?>" uk-img></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="content-right uk-flex uk-flex-center uk-flex-column">
            <h1><?php echo $title ?></h1>
            <div class="description">
                <p><?php echo $description ?></p>
            </div>
            <div>
                <?php if(!empty($techs)): ?>
                    <?php foreach($techs as $tech): ?>
                        <span class="uk-badge"><?php echo $tech ?></span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

                
<?php
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