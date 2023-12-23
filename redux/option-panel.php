<?php
if (!class_exists('Redux')) {
    return;
}

//unset( Redux_Core::$server['REMOTE_ADDR'] );

$opt_name = 'Option_panel';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name' => $theme->get('Name'),
    'display_version' => $theme->get('Version'),
    'menu_title' => esc_html__('Option_panel', 'redux-framework-demo'),
    'customizer' => true,
    // 'dev_mode'        => false,
);

Redux::set_args($opt_name, $args);

Redux::set_section($opt_name, array(
    'title' => esc_html__('Basic Field', 'redux-framework-demo'),
    'id' => 'basic',
    'desc' => esc_html__('Basic field with no subsections.', 'redux-framework-demo'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'opt-text',
            'type' => 'text',
            'title' => esc_html__('Example Text', 'redux-framework-demo'),
            'desc' => esc_html__('Example description.', 'redux-framework-demo'),
            'subtitle' => esc_html__('Example subtitle.', 'redux-framework-demo'),
            'hint' => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            ),
        ), array(
            'id' => 'opt-text-2',
            'type' => 'text',
            'title' => esc_html__('Example Text 2', 'redux-framework-demo'),
            'desc' => esc_html__('Example description 2.', 'redux-framework-demo'),
            'subtitle' => esc_html__('Example subtitle 2.', 'redux-framework-demo'),
            'hint' => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            ),
        ), array(
            'id' => 'heading_color',
            'type' => 'color',
            'output' => array('.entry-title'),
            'title' => __('Heading Color', 'redux_docs_generator'),
            'default' => '#FF0000',
        ),
    ),
));

Redux::set_section($opt_name, array(
    'title' => esc_html__('More Fields', 'redux-framework-demo'),
    'id' => 'more',
    'desc' => esc_html__('Basic field with no subsections.', 'redux-framework-demo'),
    'icon' => 'el el-home',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'opt-textm',
            'type' => 'text',
            'title' => esc_html__('Example Text', 'redux-framework-demo'),
            'desc' => esc_html__('Example description.', 'redux-framework-demo'),
            'subtitle' => esc_html__('Example subtitle.', 'redux-framework-demo'),
            'hint' => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            ),
        ), array(
            'id' => 'opt-text-2m',
            'type' => 'text',
            'title' => esc_html__('Example Text 2', 'redux-framework-demo'),
            'desc' => esc_html__('Example description 2.', 'redux-framework-demo'),
            'subtitle' => esc_html__('Example subtitle 2.', 'redux-framework-demo'),
            'hint' => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            ),
        ), array(
            'id' => 'heading_colorm',
            'type' => 'color',
            'output' => array('.entry-title'),
            'title' => __('Heading Color', 'redux_docs_generator'),
            'default' => '#FF0000',
        ),
    ),
));