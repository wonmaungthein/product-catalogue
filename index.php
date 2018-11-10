<?php
// Silence is golden.
add_action('init', function () {
    register_post_type('people', [
        'labels' => [
            'name' => __('People'),
            'singular_name' => __('Person'),
        ],
        'public' => true,
        'has_archive' => true,
    ]);
});