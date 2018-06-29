<div class="uk-section section-portfolio uk-height-viewport" uk-height-viewport="offset-top: true">
    <!-- TODO new portfolio design :) -->

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