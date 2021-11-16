<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_59391f245236d2",
        "title" => __('Project Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_5937e0a52b48cexmod33",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __('To find more portfolio project settings navigate to', 'hubitat') . '&nbsp;<a target="_blank" href="./admin.php?page=hubitat_hub_settings&options_page=theme-general-portfolio">' . __('Global Theme Settings', 'hubitat') . '</a></p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593dbedc58835",
                "label" => __('Project page layout', 'hubitat'),
                "name" => "project_layout_type",
                "type" => "image_option",
                "instructions" => __('Choose layout type for project page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __('Use from Theme Settings', 'hubitat'),
                        "src" => "acf__image_inherited.svg"
                    ],
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
                "default_value" => "inherit"
            ],
            [
                "key" => "field_592fd66622a41amodagg",
                "label" => __('Custom content position', 'hubitat'),
                "name" => "project_custom_content_position",
                "type" => "select",
                "instructions" => __('Choose WPBakery/Elementor builders content position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc5a7fe",
                            "operator" => "!=",
                            "value" => "none"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "top" => __('Top - Before content', 'hubitat'),
                    "after_description" => __('Center - After description', 'hubitat'),
                    "bottom" => __('Bottom - After content', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "top",
                "return_format" => "value"
            ],
            [
                "key" => "field_593dbedc5a7fe",
                "label" => __('Navigation', 'hubitat'),
                "name" => "project_show_navigation",
                "type" => "radio",
                "instructions" => __('Choose portfolio navigation type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "none" => __('Without navigation', 'hubitat'),
                    "prev_n_next" => __('Next and preview', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => [
                    "inherit"
                ],
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593dbedc5b780",
                "label" => __('Double width', 'hubitat'),
                "name" => "project_style_in_grid",
                "type" => "radio",
                "instructions" => __('Make double width for this portfolio item', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Default - 1 column width', 'hubitat'),
                    "2col" => __('Wide - 2 column width', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "default",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a24fa34hnof",
                "label" => '<h4>' . __('Slider Settings', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_592fd66622a41amodagg",
                "label" => __('Custom content position', 'hubitat'),
                "name" => "project_custom_content_position",
                "type" => "select",
                "instructions" => __('Choose WPBakery/Elementor builders content position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc5a7fe",
                            "operator" => "!=",
                            "value" => "none"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "top" => __('Top - Before content', 'hubitat'),
                    "after_description" => __('Center - After description', 'hubitat'),
                    "bottom" => __('Bottom - After content', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "top",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4w13tfgdfse3s",
                "label" => __('Gallery scrolling effect', 'hubitat'),
                "name" => "project_gallery_scrolling_effect",
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
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "parallax" => __('Parallax', 'hubitat'),
                    "scale" => __('Scale', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4b093lgdfse2",
                "label" => __('Navigation', 'hubitat'),
                "name" => "project_nav_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show navigation buttons on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5923k4obl393bw",
                "label" => __('Bullets', 'hubitat'),
                "name" => "project_bullets_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show bullets bar on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "show" => __('Show', 'hubitat'),
                    "hide" => __('Hide', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => "",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4w1kbjg2jir1f3",
                "label" => __('Bullets type', 'hubitat'),
                "name" => "project_bullets_type",
                "type" => "select",
                "instructions" => __('Choose bullets or number pagination on the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5923k4obl393bw",
                            "operator" => "==",
                            "value" => 1
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
                "key" => "field_59fb434rgth4kn0ythj994",
                "label" => __('Loop mode', 'hubitat'),
                "name" => "project_loop_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable loop mode for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Enable', 'hubitat'),
                    "no" => __('Disable', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_594gerhkn56ok2pop",
                "label" => __('Autoplay mode', 'hubitat'),
                "name" => "project_autoplay_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable autoplay mode for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Enable', 'hubitat'),
                    "no" => __('Disable', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59erbvdfdkbk4io2okn1nj",
                "label" => __('Autoplay interval timeout', 'hubitat'),
                "name" => "project_autoplay_interval",
                "type" => "number",
                "instructions" => __('Set up autoplay interval timeout for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_594gerhkn56ok2pop",
                            "operator" => "==",
                            "value" => 1
                        ]
                    ]
                ],
                "default_value" => 5000,
                "placeholder" => "",
                "prepend" => "",
                "append" => "Ms"
            ],
            [
                "key" => "field_egetrgwelnl54oopkgpo",
                "label" => __('Mouse wheel scroll', 'hubitat'),
                "name" => "project_mousewheel_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable mouse wheel scroll for the project slider', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_4"
                        ]
                    ]
                ],
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Enable', 'hubitat'),
                    "no" => __('Disable', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_egetrgwery53k93jvh8rpos",
                "label" => __('Overlay color', 'hubitat'),
                "name" => "project_color_overlay",
                "type" => "hubitat_color",
                "instructions" => __('Choose color overlay for main image', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_1"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_2"
                        ],
                        [
                            "field" => "field_593dbedc58835",
                            "operator" => "!=",
                            "value" => "type_3"
                        ],
                        [
                            "field" => "field_593dbedc58835",
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
                "key" => "field_5937gj5kn3309b09a",
                "label" => '<h4>' . __('Project page typography', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_lk3obp0g0jnf41hnj44",
                "label" => __('Project title typography', 'hubitat'),
                "name" => "project_title_typography",
                "instructions" => __('Set up typography styles for title', 'hubitat'),
                "type" => "hubitat_typo",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_kg894kg9ckjdj3v04jgi432",
                "label" => __('Show project categories?', 'hubitat'),
                "name" => "project_show_categories",
                "type" => "true_false",
                "instructions" => __('If enabled, project categories are shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnll401kkhn3a34nf41hnj44",
                "label" => __('Project category typography', 'hubitat'),
                "name" => "project_category_typography",
                "instructions" => __('Set up typography styles for categories', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kg9ckjdj3v04jgi432",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_kg894kmb94jkg92f09aoisoj34",
                "label" => __('Show project date?', 'hubitat'),
                "name" => "project_show_date",
                "type" => "true_false",
                "instructions" => __('If enabled, project date is shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnll401kkmr30rkwovkeanf41hnj44",
                "label" => __('Project date typography', 'hubitat'),
                "name" => "project_date_typography",
                "instructions" => __('Set up typography styles for date', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kmb94jkg92f09aoisoj34",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_kg894kg9l3kmgmbklkaj323",
                "label" => __('Show project description?', 'hubitat'),
                "name" => "project_show_description",
                "type" => "true_false",
                "instructions" => __('If enabled, project description is shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnlkh34oofkgm399gk3nnn3",
                "label" => __('Project description typography', 'hubitat'),
                "name" => "project_description_typography",
                "instructions" => __('Set up typography styles for description', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kg9l3kmgmbklkaj323",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
			[
                "key" => "field_kg894kg9l3kmgmbklkaj3233trg",
                "label" => __('Show project task?', 'hubitat'),
                "name" => "project_show_task",
                "type" => "true_false",
                "instructions" => __('If enabled, project task is shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnlkh34oofkgm399gk3nnn3ert34",
                "label" => __('Project task typography', 'hubitat'),
                "name" => "project_task_typography",
                "instructions" => __('Set up typography styles for task', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kg9l3kmgmbklkaj3233trg",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_kg894kkb3kdl1o345b5jbkalwbvna",
                "label" => __('Show project details?', 'hubitat'),
                "name" => "project_show_details",
                "type" => "true_false",
                "instructions" => __('If enabled, project details are shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnll401kkmhgope4k3wovkeanf41hnj44",
                "label" => __('Project details typography', 'hubitat'),
                "name" => "project_details_typography",
                "instructions" => __('Set up typography styles for details', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kkb3kdl1o345b5jbkalwbvna",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_kg894kg9l3fgiak400hoalgkk",
                "label" => __('Show project link?', 'hubitat'),
                "name" => "project_show_link",
                "type" => "true_false",
                "instructions" => __('If enabled, project link is shown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_lnlkh34oofk3g90ao1343",
                "label" => __('Project link typography', 'hubitat'),
                "name" => "project_link_typography",
                "instructions" => __('Set up typography styles for project link', 'hubitat'),
                "type" => "hubitat_typo",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_kg894kg9l3fgiak400hoalgkk",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_egetrgwery5kop3kfk13sdgasdg",
                "label" => __('Video button color', 'hubitat'),
                "name" => "project_grid_video_btn_bg",
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
                "key" => "field_59fb4312b343615asohigi",
                "label" => __('Project video button style', 'hubitat'),
                "name" => "project_video_button_style",
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
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "hubitat_portfolio"
                ]
            ]
        ],
        "menu_order" => 1,
        "position" => "acf_after_title",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ]);

endif;
