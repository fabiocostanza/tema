<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_592fd650bf099",
        "title" => __('Portfolio Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d4818cffmod",
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
                "key" => "field_5937e0a52b48ce86od152",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __('To find more portfolio page settings navigate to', 'hubitat') . '&nbsp;<a target="_blank" href="./admin.php?page=hubitat_hub_settings&options_page=theme-general-portfolio">' . __('Global Theme Settings', 'hubitat') . '</a></p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fa4344b383615p",
                "label" => __('Portfolio layout', 'hubitat'),
                "name" => "portfolio_item_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose layout type for portfolio items', 'hubitat'),
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __('Use from Theme Settings', 'hubitat'),
                        "src" => "acf__image_inherited.svg"
                    ],
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
                "key" => "field_59fa41123412345p",
                "label" => __('Portfolio hover effect', 'hubitat'),
                "name" => "portfolio_grid_hover",
                "type" => "select",
                "instructions" => __('Choose hover type for portfolio items', 'hubitat'),
                "default_value" => "inherit",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "type1" => __('Image Scaling', 'hubitat'),
                    "type2" => __('Color Overlay', 'hubitat'),
                    "type3" => __('Greyscale', 'hubitat'),
                    "type4" => __('Image Parallax', 'hubitat')
                ]
            ],
            [
                "key" => "field_59fb4n52l433",
                "label" => __('Portfolio tilt hover effect', 'hubitat'),
                "name" => "portfolio_tilt_effect",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable tilt hover effect for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4313b383615p",
                "label" => __('Portfolio grid spacing', 'hubitat'),
                "name" => "grid_items_without_padding",
                "type" => "inherited_checkbox",
                "instructions" => __('Remove spacing between grid items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "default_value" => "inherit",
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a253d23s15fas",
                "label" => '<h4>' . __('Number of Projects', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_5d5313712d7c3",
                "label" => __('Portfolio categories', 'hubitat'),
                "name" => "portfolio_categories",
                "type" => "taxonomy",
                "instructions" => __('Leave empty to show all', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "taxonomy" => "hubitat_portfolio_category",
                "field_type" => "multi_select",
                "add_term" => 0,
                "save_terms" => 0,
                "load_terms" => 0,
                "return_format" => "object",
                "multiple" => 1,
                "allow_null" => 0
            ],
            [
                "key" => "field_59fb4334a433615p",
                "label" => __('Portfolio items per page', 'hubitat'),
                "name" => "portfolio_projects_per_page",
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
                "key" => "field_59fb4313b343615p",
                "label" => __('Portfolio items per row', 'hubitat'),
                "name" => "portfolio_columns_in_row",
                "type" => "hubitat_columns",
                "instructions" => __('Choose number of portfolio items per row', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "default_value" => "i-i-i",
                "use_inherit" => true
            ],
            [
                "key" => "field_59fb4312b343615asdasdx",
                "label" => __('Video button style', 'hubitat'),
                "name" => "portfolio_video_button_style",
                "type" => "select",
                "instructions" => __('Choose video button style', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "default" => __('Default', 'hubitat'),
                    "outline" => __('Outline', 'hubitat')
                ],
                "default_value" => [
                    "inherit"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a25fd23s15p",
                "label" => '<h4>' . __('Grid Appear Effect', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_59fb4312b343615p",
                "label" => __('Grid animation', 'hubitat'),
                "name" => "page_animation_type",
                "type" => "select",
                "instructions" => __('Choose grid animation type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "default" => __('Disable animation', 'hubitat'),
                    "sync" => __('Sync animation', 'hubitat'),
                    "async" => __('Async animation', 'hubitat')
                ],
                "default_value" => [
                    "inherit"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4332b343615p",
                "label" => __('Grid animation effect', 'hubitat'),
                "name" => "page_animation_effect",
                "type" => "select",
                "instructions" => __('Choose portfolio items appear effect', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312b343615p",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_59fb4312b343615p",
                            "operator" => "!=",
                            "value" => "default"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
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
                    "flip-down" => __('Flip down', 'hubitat'),
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
                "key" => "field_591b002d4818cffmodpcs",
                "label" => __('Portfolio Card / Slide', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59fb433432gnr1f",
                "label" => __('Navigation', 'hubitat'),
                "name" => "portfolio_nav_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb43lh421g23",
                "label" => __('Bullets', 'hubitat'),
                "name" => "portfolio_bullets_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fbl4lphpoy244",
                "label" => __('Loop mode', 'hubitat'),
                "name" => "portfolio_loop_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59lbl52lkfkf032",
                "label" => __('Autoplay mode', 'hubitat'),
                "name" => "portfolio_autoplay_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5kj23bk5n43345kjb",
                "label" => __('Autoplay interval', 'hubitat'),
                "name" => "portfolio_autoplay_interval",
                "type" => "number",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4n52n3lool433",
                "label" => __('Mousewheel scrolling', 'hubitat'),
                "name" => "portfolio_mousewheel_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4n52n3lool434",
                "label" => __('Drag scroll', 'hubitat'),
                "name" => "portfolio_dragscroll_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59f2342343s83615p",
                "label" => __('Metro style', 'hubitat'),
                "name" => "portfolio_metro_style",
                "type" => "inherited_checkbox",
                "instructions" => __('Convert project images to a square', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "default_value" => "inherit",
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8fb80d",
                "label" => __('Boxed layout', 'hubitat'),
                "name" => "portfolio_items_boxed_style",
                "type" => "inherited_checkbox",
                "instructions" => __('Use boxed layout for portfolio items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_4"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_11"
                        ],
                        [
                            "field" => "field_59fa4344b383615p",
                            "operator" => "!=",
                            "value" => "grid_12"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "default_value" => "inherit",
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591b002d4819cffmod",
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
                "key" => "field_5937a54r3hs152p",
                "label" => '<h4>' . __('Portfolio Filter Bar', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59fb4334b343615p",
                "label" => __('Category filter', 'hubitat'),
                "name" => "project_page_filter_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category filter on portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd651222a5_tcol",
                "label" => __('Category filter typography', 'hubitat'),
                "name" => "project_filter_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose category filter typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592fd651222a5_acol",
                "label" => __('Category filter accent typography', 'hubitat'),
                "name" => "project_filter_accent_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose category filter accent typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592fd6512267d",
                "label" => __('Category filter position', 'hubitat'),
                "name" => "project_filter_align",
                "type" => "select",
                "instructions" => __('Choose category filter position for portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
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
                "key" => "field_5937a54r3hs231p",
                "label" => '<h4>' . __('Portfolio Page Pagination', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592fd65121624",
                "label" => __('Pagination', 'hubitat'),
                "name" => "pagination_type",
                "type" => "select",
                "instructions" => __('Choose pagination type for portfolio page', 'hubitat'),
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
                "key" => "field_59fb4334bgd33615",
                "label" => __('Pagination position', 'hubitat'),
                "name" => "pagination_position",
                "type" => "select",
                "instructions" => __('Choose pagination position for portfolio page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
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
            ]
        ],
        "location" => [
            [
                [
                    "param" => "page_template",
                    "operator" => "==",
                    "value" => "page_templates/page_for-projects.php"
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
