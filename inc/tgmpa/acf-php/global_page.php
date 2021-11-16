<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_591ac509c1730",
        "title" => __('Page Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d481fc",
                "label" => __('General', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ],
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48cexmod153",
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
                "key" => "field_591ac509d31f3",
                "label" => __('Page wrapper', 'hubitat'),
                "name" => "global_page_add_wrapper",
                "type" => "true_false",
                "instructions" => __('Add content wrapper to all pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_591ac5s9d31f3",
                "label" => __('Page wrapper width', 'hubitat'),
                "name" => "global_page_content_wrapper_width",
                "type" => "text",
                "instructions" => __('Set the container wrapper width', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "1300px",
                "placeholder" => "",
                "prepend" => __('Use CSS units', 'hubitat'),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591b10dbb4a85_fwgaps",
                "label" => __('Page full-width layout margins', 'hubitat'),
                "name" => "global_page_full_width_margins_size",
                "type" => "text",
                "instructions" => __('Set side margins for a full-width page layout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => __('Use CSS units', 'hubitat'),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591ac509d3606",
                "label" => __('Page content padding', 'hubitat'),
                "name" => "global_page_add_top_padding",
                "type" => "true_false",
                "instructions" => __('Add top and bottom padding for page content', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat'),
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_59381c77504bs",
                "label" => __('Page boxed layout', 'hubitat'),
                "name" => "global_page_use_boxed_wrapper",
                "type" => "true_false",
                "instructions" => __('Wrap all pages in boxed container', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59381c77504bf",
                "label" => __('Page boxed layout margins', 'hubitat'),
                "name" => "global_page_boxed_wrapper_margins_size",
                "type" => "text",
                "instructions" => __('Set side margins for a full-width page layout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59381c77504bs",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => __('Use CSS units', 'hubitat'),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591ac509d1208grp",
                "label" => __('Page background', 'hubitat'),
                "name" => "global_page",
                "type" => "clone",
                "instructions" => __('Choose the background for all pages', 'hubitat'),
                "required" => false,
                "conditional_logic" => false,
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "prefix_label" => false,
                "prefix_name" => true
            ],
            [
                "key" => "field_59229bda372c9",
                "label" => __('Page Headline', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59229bda38e8d",
                "label" => __('Page headline', 'hubitat'),
                "name" => "global_page_header_title_visibility",
                "type" => "true_false",
                "instructions" => __('Show page headline on all pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_59229bda3868f",
                "label" => __('Page headline fullscreen mode', 'hubitat'),
                "name" => "global_page_header_title_fullscreen",
                "type" => "true_false",
                "instructions" => __('Enable fullscreen height for page headline?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_59229bda38a78",
                "label" => __('Page headline height', 'hubitat'),
                "name" => "global_page_header_title_height",
                "type" => "hubitat_responsive_height",
                "instructions" => __('Set up page headline height', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3868f",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229e431eaea",
                "label" => __('Page headline alignment', 'hubitat'),
                "name" => "global_page_header_title_align",
                "type" => "radio",
                "instructions" => __('Choose page headline content position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "left",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5922a0ea1eaebgrp",
                "label" => __('Page headline background', 'hubitat'),
                "name" => "global_page_header_title",
                "type" => "clone",
                "instructions" => __('Choose the background for pages headline', 'hubitat'),
                "required" => false,
                "conditional_logic" => false,
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "prefix_label" => false,
                "prefix_name" => true
            ],
            [
                "key" => "field_59229bda376e8",
                "label" => __('Page headline overlay', 'hubitat'),
                "name" => "global_page_header_title_use_overlay",
                "type" => "true_false",
                "instructions" => __('Add colored overlay over background image?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_59229bda37acf",
                "label" => __('Page headline overlay color', 'hubitat'),
                "name" => "global_page_header_title_overlay_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose background overlay color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda376e8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229bwjeofwnheof3920",
                "label" => __('Page headline parallax', 'hubitat'),
                "name" => "global_page_header_title_use_parallax",
                "type" => "true_false",
                "instructions" => __('Add parallax effect to background image?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_5937sc63g152w346",
                "label" => '<h4>' . __('Back Link Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_5922qef4g4376e8",
                "label" => __('Go back button', 'hubitat'),
                "name" => "global_page_header_previous_button",
                "type" => "true_false",
                "instructions" => __('Add back link button to previous page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_59256hderger8",
                "label" => __('Go back button text', 'hubitat'),
                "name" => "global_page_header_previous_button_text",
                "type" => "text",
                "instructions" => __('Add text for previous button', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922qef4g4376e8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => __('Back', 'hubitat'),
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_5937sc62g152w346",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59223452345a3827b",
                "label" => __('Go back button typography', 'hubitat'),
                "name" => "global_page_header_previous_button_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for go back button', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922qef4g4376e8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59229bda3827b",
                "label" => __('Title typography', 'hubitat'),
                "name" => "global_page_header_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for hero titles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_59229d1dd0a61",
                "label" => __('Subtitle typography', 'hubitat'),
                "name" => "global_page_header_subtitle_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for subtitles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_591b0f20ed84s",
                "label" => __('Page Sidebar', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ],
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59390deaf218c",
                "label" => __('Sidebar', 'hubitat'),
                "name" => "global_page_sidebar_position",
                "type" => "radio",
                "instructions" => __('Enable sidebar on all pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "without" => __('Disable sidebar', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "right" => __('Right', 'hubitat')
                ],
                "default_value" => [
                    "left"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "layout" => "horizontal",
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59392223423434234c",
                "label" => __('Sidebar layout', 'hubitat'),
                "name" => "global_page_sidebar_layout",
                "type" => "select",
                "instructions" => __('Choose sidebar layout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf218c",
                            "operator" => "!=",
                            "value" => "without"
                        ]
                    ]
                ],
                "choices" => [
                    "simple" => __('Simple', 'hubitat'),
                    "boxed" => __('Boxed', 'hubitat')
                ],
                "default_value" => [
                    "simple"
                ],
                "return_format" => "value"
            ],
            [
                "key" => "field_593s45s15af5g9t",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_5937e3a33b3exmod15",
                "label" => __('Widget heading typography', 'hubitat'),
                "name" => "global_widgets_heading_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for widget heading', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_5937e3a33f4exmod15",
                "label" => __('Widget content typography', 'hubitat'),
                "name" => "global_widgets_content_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for widget content', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_591b0f20ed84e",
                "label" => __('Breadcrumbs', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_591ac509d29ee",
                "label" => __('Breadcrumbs', 'hubitat'),
                "name" => "global_page_breadcrumbs_visibility",
                "type" => "true_false",
                "instructions" => __('Show breadcrumbs on all pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_591b10dbb4a85",
                "label" => __('Breadcrumbs separator', 'hubitat'),
                "name" => "global_breadcrumbs_separator",
                "type" => "text",
                "instructions" => __('Use custom HTML or UTF-8 symbols. Slashes or arrows are recommended', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d29ee",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => 250
            ],
            [
                "key" => "field_591ac509d2e0d",
                "label" => __('Breadcrumbs home slug', 'hubitat'),
                "name" => "global_page_show_home_breadcrumb",
                "type" => "true_false",
                "instructions" => __('Show', 'hubitat') . '<em>' . __('Home /', 'hubitat') . '</em>' . __('slug in breadcrumbs', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d29ee",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_591ac509d1208grpbcbac",
                "label" => __('Breadcrumbs background', 'hubitat'),
                "name" => "global_page_breadcrumbs",
                "type" => "clone",
                "instructions" => __('Choose breadcrumbs bar background', 'hubitat'),
                "required" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d29ee",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "prefix_label" => false,
                "prefix_name" => true
            ],
            [
                "key" => "field_593s35s15af5g9t",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d29ee",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "type" => "message"
            ],
            [
                "key" => "field_591ef10cd845c",
                "label" => __('Breadcrumbs typography', 'hubitat'),
                "name" => "global_page_breadcrumbs_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose breadcrumbs typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d29ee",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_591b0f30ed84e",
                "label" => "Other",
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592s35f15af5g9t",
                "label" => '<h4>' . __('Back Smooth Scrolling', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_591ac509d4234",
                "label" => __('Scroll-to-top', 'hubitat'),
                "name" => "global_page_show_arrow",
                "type" => "true_false",
                "instructions" => __('Show scroll-to-top arrow on all pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_591ac509d4235",
                "label" => __('Scroll-to-top on mobiles', 'hubitat'),
                "name" => "global_page_show_arrow_mobile",
                "type" => "true_false",
                "instructions" => __('Show scroll-to-top arrow on mobile devices', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d4234",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_591ac509d465a",
                "label" => __('Scroll-to-top typography', 'hubitat'),
                "name" => "global_page_arrow_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up scroll-to-top typography for all pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d4234",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_5937e1905d075d24",
                "label" => __('Scroll-to-top position', 'hubitat'),
                "name" => "global_page_arrow_position",
                "type" => "select",
                "instructions" => __('Choose scroll-to-top position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d4234",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "left" => __('Left side', 'hubitat'),
                    "right" => __('Right side', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "left",
                "layout" => "horizontal",
                "return_format" => "value"
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-pages"
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
