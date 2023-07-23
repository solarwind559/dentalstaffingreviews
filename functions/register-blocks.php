<?php

function register_blocks()
{
    if (function_exists('acf_register_block_type')) {
        $default = [
            'align' => false,
        ];


        acf_register_block_type([
            'name' => 'agencies',
            'title' => __('Front Page Agencies'),
            'render_template' => 'blocks/agencies/agencies-block.php',
            'category' => 'otm-sections-block',
            'icon' => '',
            'supports' => [
                'align' => true,
                'anchor' => true,
                'customClassName' => true,
                'jsx' => true,
            ],
        ]);

    }
}

add_action('acf/init', 'register_blocks');


