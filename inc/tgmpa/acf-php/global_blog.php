<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_592d60af343cf",
        "title" => __('Blog Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_592d60ah8a413",
                "label" => __('General', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b488qw",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __('These settings apply to all the pages of your site. Use local Page Settings to override some options for individual pages.', 'hubitat') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592d60af8b3f8",
                "label" => __('Blog layout', 'hubitat'),
                "name" => "global_blog_item_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose blog grid layout type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "blog_grid_1",
                        "description" => __('Classic grid', 'hubitat'),
                        "src" => "acf__image_portfolio_01.svg"
                    ],
                    [
                        "name" => "blog_grid_2",
                        "description" => __('Minimal grid', 'hubitat'),
                        "src" => "acf__image_portfolio_02.svg"
                    ],
                    [
                        "name" => "blog_grid_3",
                        "description" => __('Split grid', 'hubitat'),
                        "src" => "acf__image_portfolio_39.svg"
                    ],
                    [
                        "name" => "blog_grid_4",
                        "description" => __('Inner grid', 'hubitat'),
                        "src" => "acf__image_portfolio_40.svg"
                    ],
                    [
                        "name" => "blog_grid_5",
                        "description" => __('Compact grid', 'hubitat'),
                        "src" => "acf__image_portfolio_41.svg"
                    ],
                    [
                        "name" => "blog_grid_6",
                        "description" => __('Simple grid', 'hubitat'),
                        "src" => "acf__image_portfolio_44.svg"
                    ]
                ],
                "default_value" => "blog_grid_1",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592d60af8b3f9",
                "label" => __('Blog hover effect', 'hubitat'),
                "name" => "global_blog_item_hover_type",
                "type" => "select",
                "instructions" => __('Choose hover effect type for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "type1" => __('Image Scaling', 'hubitat'),
                    "type2" => __('Color Overlay', 'hubitat'),
                    "type3" => __('Greyscale', 'hubitat'),
                    "type4" => __('Image Parallax', 'hubitat')
                ],
                "default_value" => "type1",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592fd6fa1246v12ffaqwba22c",
                "label" => __('Blog thumbnail size', 'hubitat'),
                "name" => "global_blog_images_size",
                "type" => "select",
                "instructions" => __('Choose image size for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "thumbnail" => __('Thumbnail', 'hubitat'),
                    "medium" => __('Small', 'hubitat'),
                    "medium_large" => __('Medium', 'hubitat'),
                    "large" => __('Large', 'hubitat'),
                    "full" => __('Original', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "medium_large",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8a7ff",
                "label" => __('Blog grid layout', 'hubitat'),
                "name" => "global_blog_page_layout",
                "type" => "radio",
                "instructions" => __('Choose grid layout type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "classic" => __('Classic layout', 'hubitat'),
                    "masonry" => __('Masonry grid', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8bc07",
                "label" => __('Blog grid spacing', 'hubitat'),
                "name" => "global_blog_grid_items_without_padding",
                "type" => "true_false",
                "instructions" => __('Remove spacing between grid items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 0
            ],
            [
                "key" => "field_5937a0a253d23s15g",
                "label" => '<h4>' . __('Number of Posts', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592d60af8b000",
                "label" => __('Blog items per page', 'hubitat'),
                "name" => "global_blog_posts_per_page",
                "type" => "number",
                "instructions" => __('Choose the number of blog items per page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 16,
                "placeholder" => "",
                "prepend" => "",
                "append" => "posts",
                "min" => 1,
                "max" => 100,
                "step" => 1
            ],
            [
                "key" => "field_592d60af8ac17",
                "label" => __('Blog items per row', 'hubitat'),
                "name" => "global_blog_columns_in_row",
                "type" => "hubitat_columns",
                "instructions" => __('Choose the number of blog items per row', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8a7ff",
                            "operator" => "==",
                            "value" => "masonry"
                        ],
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "default_value" => "3-2-1",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => "",
                "use_inherit" => false
            ],
            [
                "key" => "field_5937a0a253d23s15gh",
                "label" => '<h4>' . __('Grid Appearance Effect', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592d60af8a7ffmods",
                "label" => __('Grid animation', 'hubitat'),
                "name" => "global_blog_page_animation_type",
                "type" => "select",
                "instructions" => __('Choose grid animation type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Disable animation', 'hubitat'),
                    "sync" => __('Sync animation', 'hubitat'),
                    "async" => __('Async animation', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8ac17d2mod",
                "label" => __('Grid animation effect', 'hubitat'),
                "name" => "global_blog_page_animation_effect",
                "type" => "select",
                "instructions" => __('Choose blog items appear effect', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8a7ffmods",
                            "operator" => "!=",
                            "value" => "default"
                        ]
                    ]
                ],
                "choices" => [
                    "fade-up" => __('Fade up', 'hubitat'),
                    "fade-left" => __('Fade left', 'hubitat'),
                    "fade-right" => __('Fade right', 'hubitat'),
                    "slide-up" => __('Slide up', 'hubitat'),
                    "flip-up" => __('Flip up', 'hubitat'),
                    "zoom-in" => __('Zoom in', 'hubitat')
                ],
                "default_value" => [
                    "fade-up"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb4332b34323f12412rf",
                "label" => __('Grid animation repeat', 'hubitat'),
                "name" => "global_blog_page_animation_once",
                "type" => "true_false",
                "instructions" => __('Repeat animation while scrolling page up and down', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8a7ffmods",
                            "operator" => "!=",
                            "value" => "default"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937aa3d23s15gh",
                "label" => '<h4>' . __('Post Cards', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59f2342343s73615",
                "label" => __('Metro style', 'hubitat'),
                "name" => "global_blog_metro_style",
                "type" => "true_false",
                "instructions" => __('Convert post image to a square', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60af8b80c",
                "label" => __('Boxed layout', 'hubitat'),
                "name" => "global_blog_items_boxed_style",
                "type" => "true_false",
                "instructions" => __('Use boxed layout for blog post items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbsdf1",
                "label" => __('Post card background', 'hubitat'),
                "name" => "global_posts_card_background_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose post card background color', 'hubitat'),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b80c",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593f2345fbsdf2",
                "label" => __('Post card alignment', 'hubitat'),
                "name" => "global_posts_text_alignment",
                "type" => "select",
                "instructions" => __('Choose text alignment for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "default_value" => [
                    "left"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592s60af8bc07",
                "label" => __('Author', 'hubitat'),
                "name" => "global_posts_author_visibility",
                "type" => "true_false",
                "instructions" => __('Show an author on blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbsdf3",
                "label" => __('Author typography', 'hubitat'),
                "name" => "global_posts_author_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items author', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592s60af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593f2345fbsdf4",
                "label" => __('Publication date typography', 'hubitat'),
                "name" => "global_posts_date_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items date', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593s60af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593s61af8bc07",
                "label" => __('Category', 'hubitat'),
                "name" => "global_posts_category_visibility",
                "type" => "true_false",
                "instructions" => __('Show a category on blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbsdf5",
                "label" => __('Category typography', 'hubitat'),
                "name" => "global_posts_category_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items category', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593s61af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593f2345fbsdf6",
                "label" => __('Title typography', 'hubitat'),
                "name" => "global_posts_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items title', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593sh61af8bc07",
                "label" => __('Short description', 'hubitat'),
                "name" => "global_posts_short_description_visibility",
                "type" => "true_false",
                "instructions" => __('Show a short description on blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbfas124",
                "label" => __('Short description length', 'hubitat'),
                "name" => "global_posts_content_length",
                "type" => "number",
                "instructions" => __('Specify the length of the short description in words', 'hubitat'),
                "required" => 0,
                "append" => __('words', 'hubitat'),
                "default_value" => 12,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593sh61af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593f2345fbsdf7",
                "label" => __('Short description typography', 'hubitat'),
                "name" => "global_posts_content_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items content', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593sh61af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_583sh61af8bc07",
                "label" => __('Read more', 'hubitat'),
                "name" => "global_posts_read_more_visibility",
                "type" => "true_false",
                "instructions" => __('Show a Read more button on blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbsdf8",
                "label" => __('Read more typography', 'hubitat'),
                "name" => "global_posts_readmore_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items Read more button', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_583sh61af8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_583sh61azen4123f8bc07",
                "label" => __('Reading time', 'hubitat'),
                "name" => "global_posts_reading_time_visibility",
                "type" => "true_false",
                "instructions" => __('Show approximate post reading time', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_593f2345fbsnxzq354gdf8",
                "label" => __('Reading time typography', 'hubitat'),
                "name" => "global_posts_reading_time_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for blog items reading time', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_583sh61azen4123f8bc07",
                            "operator" => "!=",
                            "ui_on_text" => __('Yes', 'hubitat')
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592d60af8a413",
                "label" => __('Blog Page', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937434433s3615",
                "label" => __('Breadcrumbs slug', 'hubitat'),
                "name" => "global_page_home_breadcrumb_slug",
                "type" => "text",
                "instructions" => __('Enter custom text for breadcrumbs slug', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_591ef18a3ef37",
                "label" => __('Categories filter', 'hubitat'),
                "name" => "global_breadcrumbs_show_cats",
                "type" => "true_false",
                "instructions" => __('Show categories filter on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591ef1773ef36",
                "label" => __('Tag filter', 'hubitat'),
                "name" => "global_breadcrumbs_show_tags",
                "type" => "true_false",
                "instructions" => __('Show tag filter on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591ef1473ef35",
                "label" => __('Author filter', 'hubitat'),
                "name" => "global_breadcrumbs_show_author",
                "type" => "true_false",
                "instructions" => __('Show author filter on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60af8b001",
                "label" => __('Pagination', 'hubitat'),
                "name" => "global_blog_pagination_type",
                "type" => "select",
                "instructions" => __('Choose pagination type for blog page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "simple" => __('Simple', 'hubitat'),
                    "standard" => __('Standard', 'hubitat'),
                    "lazy_scroll" => __('Lazy load', 'hubitat'),
                    "lazy_button" => __('Load more', 'hubitat')
                ],
                "default_value" => [
                    "simple"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59374afs43d8361523f",
                "label" => __('Pagination position', 'hubitat'),
                "name" => "global_blog_pagination_position",
                "type" => "select",
                "instructions" => __('Choose pagination position for blog page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "default_value" => [
                    "left"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-blog"
                ]
            ]
        ],
        "menu_order" => 0,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ]);

endif;
