<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_592fd665c6552",
        "title" => __('Protfolio Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_592fe6046937d",
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
                "key" => "field_5937e0a52b48cexmod155",
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
                "key" => "field_59fa4344b383615",
                "label" => __('Portfolio layout', 'hubitat'),
                "name" => "global_portfolio_item_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose layout type for portfolio items', 'hubitat'),
                "conditional_logic" => 0,
                "default_value" => "grid_1",
                "image_option_value" => [
                    [
                        "name" => "grid_1",
                        "description" => __('Classic grid', 'hubitat'),
                        "src" => "acf__image_portfolio_01.svg"
                    ],
                    [
                        "name" => "grid_2",
                        "description" => __('Minimal grid', 'hubitat'),
                        "src" => "acf__image_portfolio_02.svg"
                    ],
                    [
                        "name" => "grid_11",
                        "description" => __('Caption cursor grid', 'hubitat'),
                        "src" => "acf__image_portfolio_43.svg"
                    ],
                    [
                        "name" => "grid_3",
                        "description" => __('Slider with horizontal scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_03.svg"
                    ],
                    [
                        "name" => "grid_4",
                        "description" => __('Slider with vertical scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_04.svg"
                    ],
                    [
                        "name" => "grid_5",
                        "description" => __('Split screen with smooth scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_05.svg"
                    ],
                    [
                        "name" => "grid_6",
                        "description" => __('Carousel with horizontal scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_06.svg"
                    ],
                    [
                        "name" => "grid_7",
                        "description" => __('Onepage with smooth scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_07.svg"
                    ],
                    [
                        "name" => "grid_8",
                        "description" => __('Interactive links', 'hubitat'),
                        "src" => "acf__image_portfolio_42.svg"
                    ],
                    [
                        "name" => "grid_9",
                        "description" => __('Scattered with smooth scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_37.svg"
                    ],
                    [
                        "name" => "grid_10",
                        "description" => __('Centered with smooth scroll', 'hubitat'),
                        "src" => "acf__image_portfolio_38.svg"
                    ],
                    [
                        "name" => "grid_12",
                        "description" => __('Vertical interactive links', 'hubitat'),
                        "src" => "acf__image_portfolio_45.svg"
                    ]
                ]
            ],
            [
                "key" => "field_59fa41123412345",
                "label" => __('Portfolio hover effect', 'hubitat'),
                "name" => "global_portfolio_grid_hover",
                "type" => "select",
                "instructions" => __('Choose hover effect type for portfolio items', 'hubitat'),
                "default_value" => "type1",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "choices" => [
                    "type1" => __('Image Scaling', 'hubitat'),
                    "type2" => __('Color Overlay', 'hubitat'),
                    "type3" => __('Greyscale', 'hubitat'),
                    "type4" => __('Image Parallax', 'hubitat')
                ]
            ],
            [
                "key"=> "field_59fb4w121284912hjfol",
                "label"=> "Portfolio tilt hover effect",
                "name"=> "global_portfolio_tilt_effect",
                "type"=> "true_false",
                "instructions"=> "Enable tilt hover effect for portfolio items",
                "required"=> 0,
                "conditional_logic"=> [
                    [
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "!=",
                            "value"=> "grid_1"
                        ],
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "!=",
                            "value"=> "grid_2"
                        ],
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "!=",
                            "value"=> "grid_8"
                        ],
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "!=",
                            "value"=> "grid_11"
                        ],
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "!=",
                            "value"=> "grid_12"
                        ]
                    ]
                ],
                "message"=> "",
                "default_value"=> 1,
                "ui"=> 1,
                "ui_on_text"=> "",
                "ui_off_text"=> ""
            ],
            [
                "key" => "field_592fd66v12ffaqwba22c",
                "label" => __('Portfolio thumbnail size', 'hubitat'),
                "name" => "global_portfolio_images_size",
                "type" => "select",
                "instructions" => __('Choose image size for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "thumbnail" => __('Thumbnail', 'hubitat'),
                    "medium" => __('Small', 'hubitat'),
                    "medium_large" => __('Medium', 'hubitat'),
                    "large" => __('Large', 'hubitat'),
                    "hubitat_full" => __('Original', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "medium_large",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4313b383615",
                "label" => __('Portfolio grid spacing', 'hubitat'),
                "name" => "global_portfolio_grid_items_without_padding",
                "type" => "true_false",
                "instructions" => __('Remove spacing between grid items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937a0a253d23s15fa",
                "label" => '<h4>' . __('Number of Projects', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59fb4334a433615",
                "label" => __('Portfolio items per page', 'hubitat'),
                "name" => "global_portfolio_projects_per_page",
                "type" => "number",
                "instructions" => __('Choose number of portfolio items per page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 12,
                "placeholder" => "",
                "prepend" => "",
                "append" => __('projects', 'hubitat'),
                "min" => 1,
                "max" => 250,
                "step" => 1
            ],
            [
                "key" => "field_59fb4313b343615",
                "label" => __('Portfolio items per row', 'hubitat'),
                "name" => "global_portfolio_columns_in_row",
                "type" => "hubitat_columns",
                "instructions" => __('Choose number of portfolio items per row', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "default_value" => "2-2-1"
            ],

            [
                "key" => "field_59fb4312b343615asdasd",
                "label" => __('Video button style', 'hubitat'),
                "name" => "global_portfolio_video_button_style",
                "type" => "select",
                "instructions" => __('Choose video button style', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Default', 'hubitat'),
                    "outline" => __('Outline', 'hubitat')
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a25fd23s15gh",
                "label" => '<h4>' . __('Grid Appear Effect', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_59fb4312b343615",
                "label" => __('Grid animation', 'hubitat'),
                "name" => "global_portfolio_page_animation_type",
                "type" => "select",
                "instructions" => __('Choose grid animation type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "choices" => [
                    "default" => __('Disable animation', 'hubitat'),
                    "sync" => __('Sync animation', 'hubitat'),
                    "async" => __('Async animation', 'hubitat')
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4332b343615",
                "label" => __('Grid animation effect', 'hubitat'),
                "name" => "global_portfolio_page_animation_effect",
                "type" => "select",
                "instructions" => __('Choose portfolio items appearance effect', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312b343615",
                            "operator" => "!=",
                            "value" => "default"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
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
                "key" => "field_59fb4332b34323fresdaw",
                "label" => __('Grid animation repeat', 'hubitat'),
                "name" => "global_portfolio_page_animation_once",
                "type" => "true_false",
                "instructions" => __('Repeat animation while scrolling page up and down', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312b343615",
                            "operator" => "!=",
                            "value" => "default"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
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
                "key" => "field_5937a0a253d23s15fa",
                "label" => '<h4>' . __('Project Cards / Slides', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59f2342343s83615",
                "label" => __('Metro style', 'hubitat'),
                "name" => "global_portfolio_metro_style",
                "type" => "true_false",
                "instructions" => __('Convert projects image to a square', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60af8fb80c",
                "label" => __('Boxed layout', 'hubitat'),
                "name" => "global_portfolio_items_boxed_style",
                "type" => "true_false",
                "instructions" => __('Use boxed layout for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
                        ]
                    ]
                ],
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_59392323423423523",
                "label" => __('Background color', 'hubitat'),
                "name" => "global_portfolio_grid_background_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose background color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59392398832343d98",
                "label" => __('Overlay color', 'hubitat'),
                "name" => "global_portfolio_grid_overlay_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose overlay background color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_59392398832343d99",
                "label" => __('Video button color', 'hubitat'),
                "name" => "global_portfolio_grid_video_btn_bg",
                "type" => "hubitat_color",
                "instructions" => __('Choose video button color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_59392398832343457hd",
                "label" => __('Text background color', 'hubitat'),
                "name" => "global_portfolio_grid_description_overlay_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose portfolio details background color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "==",
                            "value" => "grid_11"
                        ],
                        [
                            "field"=> "field_59fa4344b383615",
                            "operator"=> "==",
                            "value"=> "grid_12"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_593f2445fbsdf2",
                "label" => __('Project card alignment', 'hubitat'),
                "name" => "global_projects_text_alignment",
                "type" => "select",
                "instructions" => __('Choose text alignment for blog items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
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
                "key" => "field_5937a0a25fd35gh",
                "label" => '<h4>' . __('Slider Settings', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_59fb4w123s2g1ase2",
                "label" => __('Navigation', 'hubitat'),
                "name" => "global_portfolio_nav_visibility",
                "type" => "true_false",
                "instructions" => __('Show navigation buttons on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_eg345345sdafasf",
                "label" => __('Navigation color', 'hubitat'),
                "name" => "global_portfolio_nav_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose a navigation color for the main slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4w123s2g1ase2",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w123s2g2f4w",
                "label" => __('Bullets', 'hubitat'),
                "name" => "global_portfolio_bullets_visibility",
                "type" => "true_false",
                "instructions" => __('Show bullets bar on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_eg345345sdafas2342",
                "label" => __('Bullets color', 'hubitat'),
                "name" => "global_portfolio_bullets_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose bullets color for the main slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4w123s2g2f4w",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w1124124215f4w",
                "label" => __('Bullets type', 'hubitat'),
                "name" => "global_portfolio_bullets_type",
                "type" => "select",
                "instructions" => __('Choose bullets or number pagination', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4w123s2g2f4w",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "pagination" => __('Pagination', 'hubitat'),
                    "bullets" => __('Bullets', 'hubitat')
                ],
                "default_value" => [
                    "pagination"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb4w123s2g3g42",
                "label" => __('Loop mode', 'hubitat'),
                "name" => "global_portfolio_loop_mode",
                "type" => "true_false",
                "instructions" => __('Enable loop mode for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_59fb4w123s2g4g43",
                "label" => __('Autoplay mode', 'hubitat'),
                "name" => "global_portfolio_autoplay_mode",
                "type" => "true_false",
                "instructions" => __('Enable autoplay mode for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_59fb4w123s2g5",
                "label" => __('Autoplay interval timeout', 'hubitat'),
                "name" => "global_portfolio_autoplay_interval",
                "type" => "number",
                "instructions" => __('Set up autoplay interval timeout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4w123s2g4g43",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 5000,
                "placeholder" => "",
                "prepend" => "",
                "append" => "Ms"
            ],
            [
                "key" => "field_59fb4w123s2g6",
                "label" => __('Mouse wheel scroll', 'hubitat'),
                "name" => "global_portfolio_mousewheel_mode",
                "type" => "true_false",
                "instructions" => __('Enable mouse wheel scroll for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_59fb4w123s2g7",
                "label" => __('Drag scroll', 'hubitat'),
                "name" => "global_portfolio_dragscroll_mode",
                "type" => "true_false",
                "instructions" => __('Enable drag scroll for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_5937a0a25ff35gh",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => 0,
                "type" => "message"
            ],
            [
                "key" => "field_593f2345f6sdf6",
                "label" => __('Title typography', 'hubitat'),
                "name" => "global_portfolio_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for portfolio item titles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4312383615",
                "label" => __('Category', 'hubitat'),
                "name" => "global_portfolio_page_category_visibility",
                "type" => "true_false",
                "instructions" => __('Show category label on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593f2s45fbsdf5",
                "label" => __('Category typography', 'hubitat'),
                "name" => "global_portfolio_category_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for portfolio item categories', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4312383615f",
                "label" => __('Date', 'hubitat'),
                "name" => "global_portfolio_date_visibility",
                "type" => "true_false",
                "instructions" => __('Show date on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_593f2s45fbsdf5f",
                "label" => __('Date typography', 'hubitat'),
                "name" => "global_portfolio_date_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for portfolio item categories', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312383615f",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59f235234383615",
                "label" => __('Short description', 'hubitat'),
                "name" => "global_portfolio_descr_visibility",
                "type" => "true_false",
                "instructions" => __('Show "View project" link on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_593f2j1s41df52as5",
                "label" => __('Short description length', 'hubitat'),
                "name" => "global_portfolio_descr_length",
                "type" => "number",
                "instructions" => __('Specify the length of the short description.', 'hubitat') . '<em>' . __('(Default value=> 24 words)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f235234383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 24,
                "placeholder" => "",
                "prepend" => "",
                "append" => __('words', 'hubitat')
            ],
            [
                "key" => "field_59fb4334asd3615",
                "label" => __('Portfolio items per page', 'hubitat'),
                "name" => "global_portfolio_projects_per_page",
                "type" => "number",
                "instructions" => __('Choose number of portfolio items per page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 12,
                "placeholder" => "",
                "prepend" => "",
                "append" => __('projects', 'hubitat'),
                "min" => 1,
                "max" => 250,
                "step" => 1
            ],
            [
                "key" => "field_593f2j45fbsdf5",
                "label" => __('Short description typography', 'hubitat'),
                "name" => "global_portfolio_descr_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for portfolio items short description', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f235234383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59f234234383615",
                "label" => __('Project link', 'hubitat'),
                "name" => "global_portfolio_page_more_visibility",
                "type" => "true_false",
                "instructions" => __('Show "View project" link on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
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
                "key" => "field_593f2j45fb435df5",
                "label" => __('Project link typography', 'hubitat'),
                "name" => "global_portfolio_show_more_button_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for portfolio item project links', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f234234383615",
                            "operator" => "==",
                            "value" => "1"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "!=",
                            "value" => "grid_12"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592fe4346937d",
                "label" => __('Portfolio Page', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd66622e2f",
                "label" => __('Breadcrumbs slug', 'hubitat'),
                "name" => "global_project_breadcrumb_slug",
                "type" => "text",
                "instructions" => __('Enter custom text for breadcrumbs slug', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "Portfolio",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a25fd23s15gh2",
                "label" => '<h4>' . __('Portfolio Page Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592fd666241be",
                "label" => __('Portfolio page', 'hubitat'),
                "name" => "global_portfolio_page",
                "type" => "page_link",
                "instructions" => __('Choose page for all portfolio projects', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "post_type" => [
                    "page"
                ],
                "taxonomy" => [],
                "allow_null" => 0,
                "allow_archives" => 0,
                "multiple" => 0
            ],
            [
                "key" => "field_592fd66vba22c",
                "label" => __('Custom content position', 'hubitat'),
                "name" => "global_portfolio_content_position",
                "type" => "select",
                "instructions" => __('Choose WPBakery/Elementor builders content position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "top" => __('Top - Before portfolio', 'hubitat'),
                    "bottom" => __('Bottom - After portfolio', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "top",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a54r3hs152s",
                "label" => '<h4>' . __('Portfolio Filter Bar', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59fb4334b343615",
                "label" => __('Category filter', 'hubitat'),
                "name" => "global_project_page_filter_visibility",
                "type" => "true_false",
                "instructions" => __('Show category filter on portfolio pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59fb43341343615",
                "label" => __('Category filter typography', 'hubitat'),
                "name" => "global_project_filter_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose category filter typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59fb43342343615",
                "label" => __('Category filter accent typography', 'hubitat'),
                "name" => "global_project_filter_accent_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose category filter accent typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59fb4334b433615",
                "label" => __('Category filter position', 'hubitat'),
                "name" => "global_portfolio_project_filter_align",
                "type" => "select",
                "instructions" => __('Choose category filter position for portfolio pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "default_value" => [
                    "center"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5937a0s253d23s15b",
                "label" => '<h4>' . __('Portfolio Page Pagination', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59fb4334fd33615",
                "label" => __('Pagination', 'hubitat'),
                "name" => "global_portfolio_pagination_type",
                "type" => "select",
                "instructions" => __('Choose pagination type for portfolio page', 'hubitat'),
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
                "key" => "field_59fb4334bgdasdf33615",
                "label" => __('Pagination position', 'hubitat'),
                "name" => "global_portfolio_pagination_position",
                "type" => "select",
                "instructions" => __('Choose pagination position for portfolio page', 'hubitat'),
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
                "key" => "field_592fe44346937d",
                "label" => __('Project Page', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd6662265c",
                "label" => __('Project default layout', 'hubitat'),
                "name" => "global_project_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose layout type for project pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "type_1",
                        "description" => __('Details with Left Gallery', 'hubitat'),
                        "src" => "acf__image_27.svg"
                    ],
                    [
                        "name" => "type_2",
                        "description" => __('Details with Right Gallery', 'hubitat'),
                        "src" => "acf__image_26.svg"
                    ],
                    [
                        "name" => "type_3",
                        "description" => __('Split Screen Left Gallery', 'hubitat'),
                        "src" => "acf__image_29.svg"
                    ],
                    [
                        "name" => "type_4",
                        "description" => __('Split Screen Right Gallery', 'hubitat'),
                        "src" => "acf__image_28.svg"
                    ],
                    [
                        "name" => "type_5",
                        "description" => __('Slider with Details', 'hubitat'),
                        "src" => "acf__image_30.svg"
                    ],
                    [
                        "name" => "type_6",
                        "description" => __('Slider with Custom Details', 'hubitat'),
                        "src" => "acf__image_31.svg"
                    ],
                    [
                        "name" => "type_7",
                        "description" => __('Details with Bottom Gallery', 'hubitat'),
                        "src" => "acf__image_32.svg"
                    ],
                    [
                        "name" => "type_8",
                        "description" => __('Asymmetric with Custom Details', 'hubitat'),
                        "src" => "acf__image_33.svg"
                    ],
                    [
                        "name" => "type_9",
                        "description" => __('Slider with Centered Details', 'hubitat'),
                        "src" => "acf__image_44.svg"
                    ]
                ],
                "default_value" => "type_1"
            ],
            [
                "key" => "field_59fb4ad44a1dtd336sl",
                "label" => __('Project URL slug', 'hubitat'),
                "name" => "global_portfolio_slug",
                "type" => "text",
                "instructions" => __('Do not forget to rebuild', 'hubitat') . '<em>&nbsp;<a target="_blank" href="./options-permalink.php">' . __('Permalinks', 'hubitat') . '</a>&nbsp;</em>' . __('by clicking the "Save Changes" button', 'hubitat'),
                "required" => 0,
                "default_value" => "project",
                "new_lines" => "",
                "esc_html" => 1
            ],
            [
                "key" => "field_592fd922a41f",
                "label" => __('Custom content position', 'hubitat'),
                "name" => "global_project_custom_content_position",
                "type" => "select",
                "instructions" => __('Choose WPBakery/Elementor builders content position', 'hubitat'),
                "required" => 0,
                "choices" => [
                    "top" => __('Top - Before content', 'hubitat'),
                    "after_description" => __('Center - After description', 'hubitat'),
                    "bottom" => __('Bottom - After content', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "bottom",
                "layout" => "vertical",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd62342342a31",
                "label" => __('Next/Prev navigation', 'hubitat'),
                "name" => "global_project_show_navigation",
                "type" => "true_false",
                "instructions" => __('Show portfolio navigation with next and previouse projects', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59391f24598db5182jgls",
                "label" => __('Featured image', 'hubitat'),
                "name" => "global_project_add_featured_on_page",
                "type" => "true_false",
                "instructions" => __('Show featured image on the project page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 1,
                "ui" => 1
            ],
            [
                "key" => "field_5937a0a24fd35gh",
                "label" => '<h4>' . __('Slider Settings', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_59fb4w13tfgdfse3",
                "label" => __('Gallery scrolling effect', 'hubitat'),
                "name" => "global_project_gallery_scrolling_effect",
                "type" => "select",
                "instructions" => __('Choose main gallery scrolling effect', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "choices" => [
                    "parallax" => __('Parallax', 'hubitat'),
                    "scale" => __('Scale', 'hubitat')
                ],
                "default_value" => [
                    "parallax"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb4w13tfgdfse2",
                "label" => __('Navigation', 'hubitat'),
                "name" => "global_project_nav_visibility",
                "type" => "true_false",
                "instructions" => __('Show navigation buttons on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_59234fgbds2g2f4w",
                "label" => __('Bullets', 'hubitat'),
                "name" => "global_project_bullets_visibility",
                "type" => "true_false",
                "instructions" => __('Show bullets bar on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_59fb4w1rebth3wef4w",
                "label" => __('Bullets type', 'hubitat'),
                "name" => "global_project_bullets_type",
                "type" => "select",
                "instructions" => __('Choose bullets or number pagination on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59234fgbds2g2f4w",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "pagination" => __('Pagination', 'hubitat'),
                    "bullets" => __('Bullets', 'hubitat')
                ],
                "default_value" => [
                    "pagination"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb434rgthjedsdcvwerf",
                "label" => __('Loop mode', 'hubitat'),
                "name" => "global_project_loop_mode",
                "type" => "true_false",
                "instructions" => __('Enable loop mode for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_594gerh45rfsecxg43",
                "label" => __('Autoplay mode', 'hubitat'),
                "name" => "global_project_autoplay_mode",
                "type" => "true_false",
                "instructions" => __('Enable autoplay mode for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_59erbvdfdhe5rhgergvsd5",
                "label" => __('Autoplay interval timeout', 'hubitat'),
                "name" => "global_project_autoplay_interval",
                "type" => "number",
                "instructions" => __('Set up autoplay interval timeout for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_594gerh45rfsecxg43",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 5000,
                "placeholder" => "",
                "prepend" => "",
                "append" => "Ms"
            ],
            [
                "key" => "field_egetrgwery534erg3w5hy3",
                "label" => __('Mouse wheel scroll', 'hubitat'),
                "name" => "global_project_mousewheel_mode",
                "type" => "true_false",
                "instructions" => __('Enable mouse wheel scroll for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_egetrgwery5kop3kfk",
                "label" => __('Overlay color', 'hubitat'),
                "name" => "global_project_color_overlay",
                "type" => "hubitat_color",
                "instructions" => __('Choose an overlay color for the main slider image', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_4"
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
                "key" => "field_egetrgwery5kop3kfk13asfah",
                "label" => __('Video button color', 'hubitat'),
                "name" => "global_project_grid_video_btn_bg",
                "type" => "hubitat_color",
                "instructions" => __('Choose video button color', 'hubitat'),
                "required" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59fb4312b343615asdasfga",
                "label" => __('Project video button style', 'hubitat'),
                "name" => "global_project_video_button_style",
                "type" => "select",
                "instructions" => __('Choose video button style', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Default', 'hubitat'),
                    "outline" => __('Outline', 'hubitat')
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5936a7a521481ebmod23",
                "label" => '<h4>' . __('Sharing Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592fd666231f2",
                "label" => __('Sharing', 'hubitat'),
                "name" => "global_project_sharing_buttons_visibility",
                "type" => "true_false",
                "instructions" => __('Enable sharing feature for project pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_592fd666235d9",
                "label" => __('Sharing networks', 'hubitat'),
                "name" => "global_project_social_sharing_buttons",
                "type" => "select",
                "instructions" => __('Choose sharing social networks', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd666231f2",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "facebook" => __('Facebook', 'hubitat'),
                    "twitter" => __('Twitter', 'hubitat'),
                    "pinterest" => __('Pinterest', 'hubitat'),
                    "linkedin" => __('LinkedIn', 'hubitat'),
                    "vk" => __('VKontakte', 'hubitat')
                ],
                "default_value" => [],
                "allow_null" => 0,
                "multiple" => 1,
                "ui" => 1,
                "ajax" => 1,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592f4a166937e",
                "label" => __('Lightbox', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59fb44344asdd33615",
                "label" => __('Lightbox', 'hubitat'),
                "name" => "global_portfolio_projects_in_popup",
                "type" => "true_false",
                "instructions" => __('Enable lightbox preview for portfolio projects', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_5937a0a5314ris152s",
                "label" => '<h4>' . __('Lightbox Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "!=",
                            "value" => "0"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59391f24598db5182jglb",
                "label" => __('Show featured image', 'hubitat'),
                "name" => "global_project_add_featured_to_gallery",
                "type" => "true_false",
                "instructions" => __('Show featured image on the projects', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "!=",
                            "value" => "0"
                        ]
                    ]
                ],
                "default_value" => 1,
                "ui" => 1
            ],
            [
                "key" => "field_59391f24598db5182jglb",
                "label" => __('Featured image', 'hubitat'),
                "name" => "global_project_add_featured_to_gallery",
                "type" => "true_false",
                "instructions" => __('Show featured images in the lightbox?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 1,
                "ui" => 1
            ],
            [
                "key" => "field_59qd89qws2354d24",
                "label" => __('Lightbox trigger color', 'hubitat'),
                "name" => "global_lightbox_trigger_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose color for the lightbox trigger icon', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59fb4ad4456f45",
                "label" => __('Project category', 'hubitat'),
                "name" => "global_lightbox_category_visibility",
                "type" => "true_false",
                "instructions" => __('Show portfolio categories in the lightbox', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593d2745h6sdf6",
                "label" => __('Project category typography', 'hubitat'),
                "name" => "global_lightbox_category_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project description', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad4456f45",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4ad4456s34",
                "label" => __('Project date', 'hubitat'),
                "name" => "global_lightbox_date_visibility",
                "type" => "true_false",
                "instructions" => __('Show portfolio date in the lightbox', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad4456s35",
                "label" => __('Project date typography', 'hubitat'),
                "name" => "global_lightbox_date_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project date', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad4456s34",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593f2745h6sdf6",
                "label" => __('Project title typography', 'hubitat'),
                "name" => "global_lightbox_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project headline', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4ad44567d33615",
                "label" => __('Project description', 'hubitat'),
                "name" => "global_portfolio_gallery_description",
                "type" => "true_false",
                "instructions" => __('Show portfolio description in the lightbox', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44567d33615sfdry",
                "label" => __('Project description length', 'hubitat'),
                "name" => "global_portfolio_gallery_descr_length",
                "type" => "number",
                "instructions" => __('Specify the length of the description.', 'hubitat') . '<em>' . __('(Default value=> 24 words)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad44567d33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 24,
                "placeholder" => "",
                "prepend" => "",
                "append" => __('words', 'hubitat')
            ],
            [
                "key" => "field_593f2345h6sdf6",
                "label" => __('Project description typography', 'hubitat'),
                "name" => "global_lightbox_description_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project description', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad44567d33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4ad44566d33615",
                "label" => __('Project details', 'hubitat'),
                "name" => "global_portfolio_gallery_details",
                "type" => "true_false",
                "instructions" => __('Show portfolio details in the lightbox', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593f2945h6sdf6",
                "label" => __('Project details typography', 'hubitat'),
                "name" => "global_lightbox_details_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project details', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad44566d33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59fb4ad44asdtd33615",
                "label" => __('Project link', 'hubitat'),
                "name" => "global_portfolio_lightbox_link",
                "type" => "true_false",
                "instructions" => __('Show "View project" link in the lightbox', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44a1dtd33615",
                "label" => __('Project link text', 'hubitat'),
                "name" => "global_portfolio_lightbox_link_text",
                "type" => "text",
                "instructions" => __('Enter a custom value for project link', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad44asdtd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => "View Project",
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592f2945h6sdf6",
                "label" => __('Project link typography', 'hubitat'),
                "name" => "global_lightbox_link_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for project link', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4ad44asdtd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5937a0a5314ris152f",
                "label" => '<h4>' . __('Lightbox Slider Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59fb4w123s2g1l",
                "label" => __('Navigation', 'hubitat'),
                "name" => "global_lightbox_nav_visibility",
                "type" => "true_false",
                "instructions" => __('Show navigation buttons on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w123s2g2l",
                "label" => __('Bullets', 'hubitat'),
                "name" => "global_lightbox_bullets_visibility",
                "type" => "true_false",
                "instructions" => __('Show bullets bar on portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w123s2g3l",
                "label" => __('Loop mode', 'hubitat'),
                "name" => "global_lightbox_loop_mode",
                "type" => "true_false",
                "instructions" => __('Enable loop mode for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w123s2g4l",
                "label" => __('Autoplay mode', 'hubitat'),
                "name" => "global_lightbox_autoplay_mode",
                "type" => "true_false",
                "instructions" => __('Enable autoplay mode for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_59fb4w123s2g5l",
                "label" => __('Autoplay interval timeout', 'hubitat'),
                "name" => "global_lightbox_autoplay_interval",
                "type" => "number",
                "instructions" => __('Set up autoplay interval timeout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4w123s2g4l",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => 5000,
                "placeholder" => "",
                "prepend" => "",
                "append" => __('Ms', 'hubitat')
            ],
            [
                "key" => "field_59fb4w123s2g6l",
                "label" => __('Mouse wheel scroll', 'hubitat'),
                "name" => "global_lightbox_mousewheel_mode",
                "type" => "true_false",
                "instructions" => __('Enable mouse wheel scrollfor portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb44344asdd33615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-portfolio"
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
