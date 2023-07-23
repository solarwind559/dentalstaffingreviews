<?php
function otm_block_categories($categories)
{
    return array_merge(
        $categories,
        [
            [
                'slug' => 'otm-sections-blocks',
                'title' => __('OTM Sections Blocks', 'otm-sections-blocks'),
            ],
        ]
    );
}
add_action('block_categories', 'otm_block_categories', 1, 2);
