<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
    $meta_boxes[] = [
        'title'      => 'Category Details',
        'post_types' => 'categoryslider',
        'fields'     => [
            [
                'name' => 'Headding',
                'id'   => 'cat_head',
                'type' => 'text',
            ],
            [
                'name' => 'Category Url',
                'id'   => 'cat_url',
                'type' => 'url',
            ],
            [

                'id'               => 'image',
                'name'             => 'Category Icon',
                'type'             => 'image_upload',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => false,
                'image_size'       => 'medium',
            ],
        ],
    ];

    $meta_boxes[] = [
        'title'      => 'Album Tracks',
        'post_types' => 'categoryslider',
        'fields'     => [
            [
                'id'            => 'standard',
                'type'          => 'group', // Group!
                'clone' => true, // Clone whole group?
                'sort_clone' => true, // Drag and drop clones to reorder them?
                'collapsible' => true,
                'default_state' => 'collapsed',
                'save_state'    => true,
                'name'          => esc_html__( 'hello', 'shop-x' ),
                'group_title'   => ['field' => 'name'],
                // List of sub-fields.
                'fields'        => array(
                    [
                        'name' => 'Track name',
                        'id'   => 'text',
                    ],
                    [
                        'name' => 'Release Date',
                        'id'   => 'date',
                        'type' => 'date',
                    ],
                    [

                        'id'               => 'image',
                        'name'             => 'Image upload',
                        'type'             => 'image_upload',
                        'force_delete'     => false,
                        'max_file_uploads' => 2,
                        'max_status'       => false,
                        'image_size'       => 'medium',
                    ],
                ),
            ],
        ],
    ];
    // Add more field groups if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
} );