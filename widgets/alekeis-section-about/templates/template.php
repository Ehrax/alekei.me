<?php
    $img_right_id = wp_kses_post($instance['picture_right']);
?>

<div class="uk-section uk-section-default section-about ">
    <div class="content">
        <div class="uk-child-width-expand@s uk-grid-small content" uk-grid>
            <div class="uk-flex uk-flex-center">
                <div class="section-about-pic" data-src="<?php echo wp_get_attachment_url( $img_right_id ); ?>" uk-img></div>
            </div>
            <div>
                <h2>Who I am ?</h2>
                <p><?php echo wp_kses_post($instance['about_description']) ?></p>
            </div>
        </div>
        <div class="uk-flex uk-flex-column uk-flex-middle">
            <h2>Toolbox</h2>
        </div>
            <div class="toolbox">
                <div class="uk-grid-collapse items" uk-grid>
                    <div>
                        <i class="devicon-android-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-angularjs-plain"></i>
                    </div>
                    <div>
                        <i class="devicon-bootstrap-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-docker-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-git-plain"></i>
                    </div>
                    <div>
                        <i class="devicon-html5-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-java-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-javascript-plain"></i>
                    </div>
                    <div>
                        <i class="devicon-jquery-plain-wordmark"></i> 
                    </div>
                    <div>
                        <i class="devicon-mongodb-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-mysql-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-nginx-original-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-nodejs-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-php-plain"></i>
                    </div>
                    <div>
                        <i class="devicon-sass-original"></i>
                    </div>
                    <div>
                        <i class="devicon-webpack-plain"></i>
                    </div>
                    <div>
                        <i class="devicon-wordpress-plain-wordmark"></i>
                    </div>
                    <div>
                        <i class="devicon-python-plain-wordmark"></i>
                    </div>
                </div>
            </div>
    </div>
</div>