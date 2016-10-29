<?php

/*
    MK System
*/

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('onetone', '', $directory_template).'mksystem';
  return $directory_child;
}


function mksystem_customizer_register( $wp_customize ) {


  //color de Tema
  $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#7cafd6',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#accordion-section-fp-social,#accordion-section-colors,#accordion-panel-widgets,#accordion-section-static_front_page,#accordion-section-background_image{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'colors',
    'settings'   => 'color_mksystem_theme',
  )));
  $wp_customize->add_section('mksystem_logo',array(
            'title' => __('Administracion ', 'mksystem'),
            'description'=> __('Ingresar a Opciones ONETONE', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('Logo_mksystem',array(
    'default' => get_template_directory_child().'/inc/img/logo_293x252.png'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Logo_mksystem' , array(
    'label' => __('Imagen Logo (Tamaño recomendado 293x252px)' , 'mksystem'),
    'section' => 'mksystem_logo',
    'settings' => 'Logo_mksystem',
  )));

  


}
add_action('customize_register','mksystem_customizer_register');



