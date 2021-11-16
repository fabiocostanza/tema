<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_593dd5f5615b0",
        "title" => __('Blog Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d4818sffmod",
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
                "key" => "field_593dd5f56ca9d",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __('To find more blog page settings navigate to', 'hubitat') . '&nbsp;<a target="_blank" href="./admin.php?page=hubitat_hub_settings&options_page=theme-general-blog">' . __('Global Theme Settings', 'hubitat') . '</a></p>',
                "new_lines" => "wpautop",
                "esc_html" => 0
            ],
            [
                "key" => "field_593dd5f56bae0",
                "label" => __('Blog layout', 'hubitat'),
                "name" => "blog_item_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose blog grid layout type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __('Use from Theme Settings', 'hubitat'),
                        "src" => "acf__image_inherited.svg"
                    ],
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
                "default_value" => "inherit",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592d60af8b3f9afs",
                "label" => __('Blog hover effect', 'hubitat'),
                "name" => "blog_item_hover_type",
                "type" => "select",
                "instructions" => __('Choose hover effect type for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "type1" => __('Image Scaling', 'hubitat'),
                    "type2" => __('Color Overlay', 'hubitat'),
                    "type3" => __('Greyscale', 'hubitat'),
                    "type4" => __('Image Parallax', 'hubitat')
                ],
                "default_value" => "inherit",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_593dd5f56af4c",
                "label" => __('Blog grid layout', 'hubitat'),
                "name" => "blog_page_layout",
                "type" => "radio",
                "instructions" => __('Choose grid layout type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "classic" => __('Classic layout', 'hubitat'),
                    "masonry" => __('Masonry layout', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593dd5f56c2b2",
                "label" => __('Blog grid spacing', 'hubitat'),
                "name" => "grid_items_without_padding",
                "type" => "inherited_checkbox",
                "instructions" => __('Remove spacing between grid items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59ccb100ba6f7nomod",
                "label" => __('Blog categories', 'hubitat'),
                "name" => "blog_categories",
                "type" => "taxonomy",
                "instructions" => __('Leave empty if want show all categories', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "taxonomy" => "category",
                "field_type" => "multi_select",
                "allow_null" => 0,
                "add_term" => 0,
                "save_terms" => 0,
                "load_terms" => 0,
                "return_format" => "object",
                "multiple" => 1
            ],
            [
                "key" => "field_5937a0a253d23s15u",
                "label" => '<h4>' . __('Number of Posts', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_593dd5f56b70f",
                "label" => __('Blog items per page', 'hubitat'),
                "name" => "blog_posts_per_page",
                "type" => "number",
                "instructions" => __('Choose the number of blog items per page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 24,
                "placeholder" => "",
                "prepend" => "",
                "append" => "posts",
                "min" => 1,
                "max" => 100,
                "step" => 1
            ],
            [
                "key" => "field_593dd5f56b310",
                "label" => __('Blog items per row', 'hubitat'),
                "name" => "blog_columns_in_row",
                "type" => "hubitat_columns",
                "instructions" => __('Choose the number of blog items per row', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "default_value" => "i-i-i",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => "",
                "use_inherit" => true
            ],
            [
                "key" => "field_5937a0a253d23s15l",
                "label" => '<h4>' . __('Grid Appear Effect', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592d60af8a7ffmo7ds",
                "label" => __('Grid animation', 'hubitat'),
                "name" => "page_animation_type",
                "type" => "radio",
                "instructions" => __('Choose grid animation type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "default" => __('Disable animation', 'hubitat'),
                    "sync" => __('Sync animation', 'hubitat'),
                    "async" => __('Async animation', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8ac17d27mo7ds",
                "label" => __('Grid animation effect', 'hubitat'),
                "name" => "page_animation_effect",
                "type" => "select",
                "instructions" => __('Choose blog items appear effect', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "fade-up" => __('Fade up', 'hubitat'),
                    "fade-left" => __('Fade left', 'hubitat'),
                    "fade-right" => __('Fade right', 'hubitat'),
                    "slide-up" => __('Slide up', 'hubitat'),
                    "flip-up" => __('Flip up', 'hubitat'),
                    "zoom-in" => __('Zoom in', 'hubitat')
                ],
                "default_value" => [
                    "inherit"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5937a0a253d23s15h",
                "label" => '<h4>' . __('Post Card', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59f2342343g531f",
                "label" => __('Metro style', 'hubitat'),
                "name" => "blog_metro_style",
                "type" => "inherited_checkbox",
                "instructions" => __('Convert blog images to a square', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "blog_grid_6"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60affsafr4gdt25",
                "label" => __('Boxed layout', 'hubitat'),
                "name" => "blog_items_boxed_style",
                "type" => "radio",
                "instructions" => __('Use boxed layout post items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "boxed" => __('Boxed layout', 'hubitat'),
                    "default" => __('Default layout', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593f23hmnty31",
                "label" => __('Post card background', 'hubitat'),
                "name" => "posts_card_background_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose post card background color', 'hubitat'),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60affsafr4gdt25",
                            "operator" => "!=",
                            "value" => "default"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593ffgll21g5g412",
                "label" => __('Post card alignment', 'hubitat'),
                "name" => "posts_text_alignment",
                "type" => "select",
                "instructions" => __('Choose text alignment for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "default_value" => "inherit",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_591b002d4817sffmod",
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
                "key" => "field_5937a0a253d23s1fb",
                "label" => '<h4>' . __('Blog Page Pagination', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_593dd5f56ba30",
                "label" => __('Pagination', 'hubitat'),
                "name" => "pagination_type",
                "type" => "select",
                "instructions" => __('Choose pagination type for blog page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
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
                "key" => "field_593dd523442330",
                "label" => __('Pagination position', 'hubitat'),
                "name" => "pagination_position",
                "type" => "select",
                "instructions" => __('Choose pagination position for blog page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
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
                    "param" => "page_template",
                    "operator" => "==",
                    "value" => "page_templates/page_for-posts.php"
                ],
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "page"
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
