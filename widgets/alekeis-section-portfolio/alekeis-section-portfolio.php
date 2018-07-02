<?php

/*
Widget Name: Alekeis Section Portfolio
Description: add a nice portfolio :)
Author: Alexander Rasputin
Author URI: https://alekei.me
Widget URI: https://alekei.me
*/

class Alekeis_Section_Portfolio extends SiteOrigin_Widget {
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'alekeis_section_portfolio',

      // The name of the widget for display purposes.
      'Alekeis Section Portfolio',

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => 'A nice about section with 3 pictures and a small text',
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'title' => array(
          'type' => 'text',
          'label' => __('Project Title', 'widget-form-fields-text-domain')
        ),
        'url' => array(
          'type' => 'text',
          'label' => __('Project Url', 'widget-form-fields-text-domain')
        ),
        'dekstop_image' => array(
          'type' => 'media',
          'label' => __( 'Choose the dekstop image', 'widget-form-fields-text-domain' ),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ), 
        'mobile_image' => array(
          'type' => 'media',
          'label' => __( 'Choose a mobile image', 'widget-form-fields-text-domain' ),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'description' => array(
          'type' => 'textarea',
          'label' => __( 'Project Description', 
                        'widget-form-fields-text-domain' ),
          'rows' => 10
        ),
        'tech_used' => array(
          'type' => 'repeater',
          'label' => __( 'Add more tech' , 'widget-form-fields-text-domain' ),
          'item_name'  => __('Tech', 'siteorigin-widgets' ),
          'fields' => array(
            'tech' => array(
              'type' => 'text',
              'label' => __('Tech used', 'widget-form-fields-text-domain')
              ),
          )
        )
      ),

      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  
  function get_template_name($instance) {
    return 'template';
  }

  function get_template_dir($instance) {
      return 'templates';
  }

}

siteorigin_widget_register('alekeis_section_portfolio', __FILE__, 'Alekeis_Section_Portfolio');
