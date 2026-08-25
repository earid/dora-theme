<?php

function my_theme_register_team_member() {

    register_post_type(
        'team_member',
        array(
            'labels' => array(
                'name'          => 'Team Members',
                'singular_name' => 'Team Member',
            ),

            'public'       => true,
            'show_in_rest' => true,

            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),

            'menu_icon' => 'dashicons-groups',
        )
    );
}

add_action(
    'init',
    'my_theme_register_team_member'
);


function my_theme_register_blocks() {

    register_block_type(
        __DIR__ . '/blocks/team-members'
    );

}

add_action(
    'init',
    'my_theme_register_blocks'
);