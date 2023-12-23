<?php

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki')){
//	Kirki::add_config( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
//		'capability'    => 'edit_theme_options',
//		'option_type'   => 'theme_mod',
//	) );

//	Kirki::add_panel( SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
//		'priority'    => 240,
//		'title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
//		'description' => esc_html__( 'SimpleShop Settings', 'simpleshop' ),
//	) );
//
//	Kirki::add_section( 'simpleshop_homepage', array(
//		'title'          => esc_html__( 'Homepage Settings', 'kirki' ),
//		'panel'          => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
//		'priority'       => 160,
//		'active_callback' => function(){
//			return is_page_template('page-templates/homepage.php');
//		}
//	) );
//
//	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
//		'type'     => 'text',
//		'settings' => 'my_setting',
//		'label'    => esc_html__( 'Text Control', 'simpleshop' ),
//		'section'  => 'simpleshop_homepage',
//		'default'  => esc_html__( 'This is a default value', 'simpleshop' ),
//		'priority' => 10,
//	] );

    new \Kirki\Panel(
        SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        [
            'priority'    => 10,
            'title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
            'description' => esc_html__( 'SimpleShop Settings', 'simpleshop' ),
        ]
    );

    new \Kirki\Section(
        'simpleshop_homepage',
        [
            'title'       => esc_html__( 'Homepage Settings', 'simpleshop' ),
            'description' => esc_html__( 'Homepage Description.', 'simpleshop' ),
            'panel'       => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
            'priority'    => 160,
            'active_callback' => function(){
                return is_page_template('page-templates/homepage.php');
            }
        ]
    );

//    Product categories

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'Simpleshop_homepage_display_categories',
            'label'       => esc_html__( 'Display Categories Section', 'simpleshop' ),
            'description' => esc_html__( 'Categories  control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'Simpleshop_homepage_title',
            'label'    => esc_html__( 'Categories Section Title', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
            'default'  => esc_html__( 'Shop By Category', 'simpleshop' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'Simpleshop_homepage_display_categories',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_categories_number',
            'label'       => esc_html__( 'Display Numbers Beside Category', 'simpleshop' ),
            'description' => esc_html__( 'Numbers control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
            'active_callback' => [
                [
                    'setting'  => 'Simpleshop_homepage_display_categories',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'simpleshop_homepage_categories_col',
            'label'    => esc_html__( 'Number of Columns', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
            'default'  => 3,
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'Simpleshop_homepage_display_categories',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );

//    New Arrival

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_product',
            'label'       => esc_html__( 'Display New Arrival Section', 'simpleshop' ),
            'description' => esc_html__( 'New Arrival switch control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'simpleshop_homepage_product_title',
            'label'    => esc_html__( 'New Arrival Section Title', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
            'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'simpleshop_homepage_display_product',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'simpleshop_homepage_product_subtitle',
            'label'    => esc_html__( 'New Arrival Section Sub-Title', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
//            'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'simpleshop_homepage_display_product',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );

    //    Promo

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_promo',
            'label'       => esc_html__( 'Display promo Section', 'simpleshop' ),
            'description' => esc_html__( 'promo switch control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    //    Popular Products

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_popular',
            'label'       => esc_html__( 'Display popular Products Section', 'simpleshop' ),
            'description' => esc_html__( 'popular Products switch control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'simpleshop_homepage_popular_title',
            'label'    => esc_html__( 'popular Products Section Title', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
            'default'  => esc_html__( 'Popular Product', 'simpleshop' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'simpleshop_homepage_display_popular',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );

    //    Offer

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_offer',
            'label'       => esc_html__( 'Display offer Section', 'simpleshop' ),
            'description' => esc_html__( 'offer switch control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    //    flicker

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'simpleshop_homepage_display_flickr',
            'label'       => esc_html__( 'Display flickr Section', 'simpleshop' ),
            'description' => esc_html__( 'flickr switch control', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'simpleshop_homepage_flickr_title',
            'label'    => esc_html__( 'flickr Section Title', 'simpleshop' ),
            'section'  => 'simpleshop_homepage',
            'default'  => esc_html__( 'SimpleShop on Flickr', 'simpleshop' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'simpleshop_homepage_display_flickr',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );

}