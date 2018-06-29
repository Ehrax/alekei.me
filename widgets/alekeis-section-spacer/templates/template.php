<div class="section-spacer">
    <div class="uk-child-width-expand@s uk-grid-large" uk-grid>
        <?php 
        $content = get_section_content($instance, $args);
        if (count($content) != 0): 
        ?>
            <?php foreach($content as $con): ?>
                <div class="uk-flex uk-flex-column uk-flex-middle">
                    <span uk-icon="icon: <?php echo $con['icon']; ?>; ratio: 4;"></span>
                    <h3><?php echo $con['title']; ?></h3>
                    <div class="section-spacer-content">
                        <p><?php echo $con['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php 
    function get_section_content($instance, $args) {
            $content = array();

            if(!empty($instance['spacer_content'])) {
                $repeater_items = $instance['spacer_content'];
                foreach($repeater_items as $repeater_item ) {
                    $icon_from_repeater = $repeater_item['icon'];
                    $title_from_repeater = $repeater_item['title'];
                    $description_from_repeater = $repeater_item['description'];

                    $content[] = array(
                        'icon' => $icon_from_repeater,
                        'title' => $title_from_repeater,
                        'description' => $description_from_repeater
                    );
                }
            }
            return $content;
        }
?>
