<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_59390deae2279_page_options",
        "title" => __('Page Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59390d235353d",
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
                "key" => "field_5937e0a52b488cexmod60",
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
                "key" => "field_5937afa621s71ebmod23",
                "label" => '<h4>' . __('Site Identity', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59391a16302be",
                "label" => __('Site logo', 'hubitat'),
                "name" => "header_logo_style",
                "type" => "select",
                "instructions" => __('Choose a logo for this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "dark_variant" => __('Dark variant', 'hubitat'),
                    "light_variant" => __('Light variant', 'hubitat'),
                    "sitename" => __('Text logo', 'hubitat'),
                    "custom" => __('Custom image', 'hubitat')
                ],
                "default_value" => [],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59390deaf09ac",
                "label" => __('Text logo settings', 'hubitat'),
                "name" => "header_sitename_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Custom typography options for text logo', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391a16302be",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59411f87d2536",
                "label" => __('Custom logo', 'hubitat'),
                "name" => "header_custom_logo",
                "type" => "image",
                "instructions" => __('Choose logo image for this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391a16302be",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => ""
            ],
            [
                "key" => "field_5937afa621s71eqfas",
                "label" => '<h4>' . __('Color Mode', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_591ac509d3se51781624591h",
                "label" => __('Dark mode', 'hubitat'),
                "name" => "dark_mode",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable dark color scheme for this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591ac509d3se51781624593t",
                "label" => __('Color mode switcher', 'hubitat'),
                "name" => "dark_mode_switcher",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable color mode switcher for this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390d235453d",
                "label" => __('Menu', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5837s0ae5fd23s15a",
                "label" => '<h4>' . __('General', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deaefde5",
                "label" => __('Menu type', 'hubitat'),
                "name" => "header_menu_type",
                "type" => "radio",
                "instructions" => __('Choose menu type of this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "full" => __('Standard menu', 'hubitat'),
                    "hamburger" => __('Hamburger menu', 'hubitat'),
                    "both" => __('Both menus', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deaefzxfmod",
                "label" => __('Hamburger menu layout', 'hubitat'),
                "name" => "fullscreen_menu_style",
                "type" => "image_option",
                "instructions" => __('Choose layout type for a hamburger menu', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaefde5",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deaefde5",
                            "operator" => "==",
                            "value" => "both"
                        ]
                    ]
                ],
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __('Use from Theme Settings', 'hubitat'),
                        "src" => "acf__image_inherited.svg"
                    ],
                    [
                        "name" => "default",
                        "description" => __('Standard', 'hubitat'),
                        "src" => "acf__image_34.svg"
                    ],
                    [
                        "name" => "centered",
                        "description" => __('Centered', 'hubitat'),
                        "src" => "acf__image_35.svg"
                    ],
                    [
                        "name" => "split",
                        "description" => __('Creative', 'hubitat'),
                        "src" => "acf__image_36.svg"
                    ]
                ],
                "default_value" => "inherit"
            ],
            [
                "key" => "field_5937s0ae5fd23s15a",
                "label" => '<h4>' . __('Other', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592d43df9e26cs",
                "label" => __('Search', 'hubitat'),
                "name" => "header_search_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show search icon on the current page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d43df9f212cs",
                "label" => __('Search position', 'hubitat'),
                "name" => "header_search_position",
                "type" => "select",
                "instructions" => __('Choose search icon position for all pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d43df9e26cs",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "standard" => __('Standard position', 'hubitat'),
                    "fixed" => __('Fixed position', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "full",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59267bda33fg234fd4s",
                "label" => __('Search icon color', 'hubitat'),
                "name" => "header_search_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose color for header items', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d43df9f212cs",
                            "operator" => "==",
                            "value" => "fixed"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaeee3d",
                "label" => __('Header', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937s0a25fd23s15a",
                "label" => '<h4>' . __('General', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deaef9efdd",
                "label" => __('Header', 'hubitat'),
                "name" => "header_visibility",
                "type" => "true_false",
                "instructions" => __('Show header on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "yes",
                "layout" => "horizontal",
                "return_format" => "value",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_59390deaefzxf",
                "label" => __('Header layout', 'hubitat'),
                "name" => "header_menu_style",
                "type" => "image_option",
                "instructions" => __('Choose the layout type for page header', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __('Use from Theme Settings', 'hubitat'),
                        "src" => "acf__image_inherited.svg"
                    ],
                    [
                        "name" => "style1",
                        "description" => __('Standard', 'hubitat'),
                        "src" => "acf__image_01.svg"
                    ],
                    [
                        "name" => "style2",
                        "description" => __('With top logo', 'hubitat'),
                        "src" => "acf__image_02.svg"
                    ],
                    [
                        "name" => "style3",
                        "description" => __('With center menu', 'hubitat'),
                        "src" => "acf__image_04.svg"
                    ],
                    [
                        "name" => "style4",
                        "description" => __('With center logo', 'hubitat'),
                        "src" => "acf__image_05.svg"
                    ],
                    [
                        "name" => "style5",
                        "description" => __('With sidebar menu', 'hubitat'),
                        "src" => "acf__image_06.svg"
                    ],
                    [
                        "name" => "style6",
                        "description" => __('With top hamburger', 'hubitat'),
                        "src" => "acf__image_07.svg"
                    ],
                    [
                        "name" => "style7",
                        "description" => __('With center hamburger', 'hubitat'),
                        "src" => "acf__image_08.svg"
                    ]
                ],
                "default_value" => "inherit"
            ],
            [
                "key" => "field_59390deaef9ea",
                "label" => __('Header blank spacer', 'hubitat'),
                "name" => "header_add_cap",
                "type" => "inherited_checkbox",
                "instructions" => __('We suggest using this option with transparent and fixed headers', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Add spacer', 'hubitat'),
                    "no" => __('Do not add spacer', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deaef614",
                "label" => __('Header wrapper', 'hubitat'),
                "name" => "header_menu_use_wrapper",
                "type" => "inherited_checkbox",
                "instructions" => __('Use header content wrapper', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59411fcf0048f",
                "label" => __('Header styles', 'hubitat'),
                "name" => "header_menu_style_settings",
                "type" => "radio",
                "instructions" => __('Define custom header styles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "custom" => __('Custom', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5941276d0b89b",
                "label" => __('Header height', 'hubitat'),
                "name" => "header_menu_height",
                "type" => "hubitat_responsive_height",
                "instructions" => __('Set up header height', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_591ac509d1208gbgclrlcfpagbgmn",
                "label" => __('Header background', 'hubitat'),
                "name" => "header_menu",
                "type" => "clone",
                "instructions" => __('Choose header background', 'hubitat'),
                "required" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_59390deaf05bd",
                "label" => __('Header typography', 'hubitat'),
                "name" => "header_menu_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for header', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5941261c69959",
                "label" => __('Header border', 'hubitat'),
                "name" => "header_menu_border_visibility",
                "type" => "true_false",
                "instructions" => __('Show header border?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_594126ed0b898",
                "label" => __('Bottom border type', 'hubitat'),
                "name" => "header_menu_border_type",
                "type" => "select",
                "instructions" => __('Choose border line style', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_5941261c69959",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "solid" => __('Solid', 'hubitat'),
                    "dashed" => __('Dashed', 'hubitat'),
                    "dotted" => __('Dotted', 'hubitat'),
                    "double" => __('Double', 'hubitat')
                ],
                "default_value" => [
                    "solid"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_594127340b89a",
                "label" => __('Bottom border color', 'hubitat'),
                "name" => "header_menu_border_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose border color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_5941261c69959",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],

            [
                "key" => "field_59390deaf1978asf32fadsgas",
                "label" => __('Elements dynamic colors for dark/light mode', 'hubitat'),
                "name" => "header_dynamic_typography_color",
                "type" => "inherited_checkbox",
                "instructions" => __('Dynamically change header elements color for dark/light sections', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],

            [
                "key" => "field_5937a0a25sd23s15a",
                "label" => '<h4>' . __('Sticky header', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deaf1978",
                "label" => __('Sticky header', 'hubitat'),
                "name" => "header_menu_fixed",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable sticky header, which is fixed at the top as you scroll', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a25fd23s15a",
                "label" => '<h4>' . __('Subheader', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deaf0da4",
                "label" => __('Subheader', 'hubitat'),
                "name" => "subheader_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show subheader on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5941030b7ce5d",
                "label" => __('Subheader styles', 'hubitat'),
                "name" => "subheader_style",
                "type" => "radio",
                "instructions" => __('Choose subheader style', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "allow_null" => 0,
                "choices" => [
                    "inherit" => __('Use from Header & Menu Settings', 'hubitat'),
                    "custom" => __('Custom', 'hubitat')
                ],
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5941040a97ec9",
                "label" => __('Subheader height', 'hubitat'),
                "name" => "subheader_height",
                "type" => "hubitat_responsive_height",
                "instructions" => __('Set up subheader height', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda36adbsubheadasstglgbl64backglbp5",
                "label" => __('Subheader background', 'hubitat'),
                "name" => "subheader",
                "type" => "clone",
                "instructions" => __('Choose subheader background', 'hubitat'),
                "required" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_59390deaf159e",
                "label" => __('Subheader typography', 'hubitat'),
                "name" => "subheader_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for subheader', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59390deb012f8",
                "label" => __('Page', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937a0a35fd23s15a",
                "label" => '<h4>' . __('General', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59391464abd30",
                "label" => __('Double width', 'hubitat'),
                "name" => "post_style_in_grid",
                "type" => "radio",
                "instructions" => __('Double the width of this post item', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Default - 1-column wide', 'hubitat'),
                    "2col" => __('Wide - 2-column wide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "default",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deb03b1b",
                "label" => __('Page wrapper', 'hubitat'),
                "name" => "add_wrapper",
                "type" => "inherited_checkbox",
                "instructions" => __('Add content wrapper to this page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Enable wrapper', 'hubitat'),
                    "no" => __('Disable wrapper', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591b10dbb4a82342342345623",
                "label" => __('Page wrapper width', 'hubitat'),
                "name" => "content_wrapper_width",
                "type" => "text",
                "instructions" => __('Set the container wrapper width', 'hubitat') . '<em>&nbsp;' . __('(Use CSS-units)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "1300px",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591b10dbb4a85_fwgaps_local",
                "label" => __('Page full-width layout margins', 'hubitat'),
                "name" => "full_width_margins_size",
                "type" => "text",
                "instructions" => __('Define side margins for full-width page container', 'hubitat') . '<em>&nbsp;' . __('(Use CSS-units)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_59390deb03f38",
                "label" => __('Page content padding', 'hubitat'),
                "name" => "add_top_padding",
                "type" => "inherited_checkbox",
                "instructions" => __('Add top and bottom paddings for page content', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => "Add",
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deb03738",
                "label" => __('Page boxed layout', 'hubitat'),
                "name" => "use_boxed_wrapper",
                "type" => "inherited_checkbox",
                "instructions" => __('Wrap this page in boxed container?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59381c77504bfasfeas",
                "label" => __('Page boxed layout margins', 'hubitat'),
                "name" => "boxed_wrapper_margins_size",
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
                "key" => "field_59390deb0171egrp",
                "label" => __('Page background', 'hubitat'),
                "name" => "",
                "type" => "clone",
                "instructions" => __('Choose the background for page', 'hubitat'),
                "required" => false,
                "conditional_logic" => false,
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "inherited_slug" => __('Use from Theme Settings', 'hubitat'),
                "prefix_label" => false,
                "prefix_name" => false
            ],
            [
                "key" => "field_5937afa35fd23s15a",
                "label" => '<h4>' . __('Page Headline', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deb00ef1",
                "label" => __('Page headline', 'hubitat'),
                "name" => "header_title_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show page headline on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_59390deb00733",
                "label" => __('Page headline fullscreen mode', 'hubitat'),
                "name" => "header_title_fullscreen",
                "type" => "inherited_checkbox",
                "instructions" => __('Set fullscreen mode for page headline?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deb00b09",
                "label" => __('Page headline height', 'hubitat'),
                "name" => "header_title_height",
                "type" => "hubitat_responsive_height",
                "instructions" => __('Set up page headline height', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb00733",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59391464a51e6",
                "label" => __('Post subtitle text', 'hubitat'),
                "name" => "header_title_subtitle_type",
                "type" => "radio",
                "instructions" => __('Choose custom subtitle type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "generated" => "Author, date and comments",
                    "custom" => "Custom subtitle",
                    "without" => "Without subtitle"
                ],
                "default_value" => [
                    "generated"
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
                "key" => "field_593ddebba2fcb",
                "label" => __('Page headline subtitle', 'hubitat'),
                "name" => "header_title_custom_subtitle_text",
                "type" => "text",
                "instructions" => __('Custom subtitle text', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_59390deb0034e",
                "label" => __('Page headline content position', 'hubitat'),
                "name" => "header_title_align",
                "type" => "select",
                "instructions" => __('Choose page headline content position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "center" => __('Center', 'hubitat'),
                    "right" => __('Right', 'hubitat'),
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
                "key" => "field_59390deaf218agrp",
                "label" => __('Page headline background', 'hubitat'),
                "name" => "header_title",
                "type" => "clone",
                "instructions" => __('Choose the background for page headline', 'hubitat'),
                "required" => false,
                "conditional_logic" => false,
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "inherited_slug" => __('Use from Theme Settings', 'hubitat'),
                "prefix_label" => false,
                "prefix_name" => true
            ],
            [
                "key" => "field_59390deaf3961",
                "label" => __('Page headline background overlay', 'hubitat'),
                "name" => "header_title_use_overlay",
                "type" => "inherited_checkbox",
                "instructions" => __('Add colored overlay over background image?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deaf3d98",
                "label" => __('Page headline background overlay color', 'hubitat'),
                "name" => "header_title_overlay_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose background overlay color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf3961",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229bwjeofwnheof3921",
                "label" => __('Page headline parallax', 'hubitat'),
                "name" => "header_title_use_parallax",
                "type" => "inherited_checkbox",
                "instructions" => __('Add parallax effect to background image?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "message" => "",
                "default_value" => "inherit",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593a55746376f",
                "label" => __('Page headline typography', 'hubitat'),
                "name" => "typography_settings",
                "type" => "radio",
                "instructions" => __('Set up typography for page headline', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "custom" => __('Custom', 'hubitat')
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
                "key" => "field_593a55d0637fq",
                "label" => __('Go back button typography', 'hubitat'),
                "name" => "header_previous_button_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for go back button', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593a55746376f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593a55d063770",
                "label" => __('Title settings', 'hubitat'),
                "name" => "header_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for hero titles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593a55746376f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593a565163771",
                "label" => __('Subtitle settings', 'hubitat'),
                "name" => "header_subtitle_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for subtitles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593a55746376f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5937a0a621s71ebs6d23",
                "label" => '<h4>' . __('Page Sidebar', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deaf218b",
                "label" => __('Sidebar', 'hubitat'),
                "name" => "sidebar_position",
                "type" => "radio",
                "instructions" => __('Choose sidebar placement for all pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left', 'hubitat'),
                    "right" => __('Right', 'hubitat'),
                    "without" => __('Disable sidebar', 'hubitat')
                ],
                "default_value" => [
                    "inherit"
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
                "key" => "field_592345234958934",
                "label" => __('Sidebar layout', 'hubitat'),
                "name" => "sidebar_layout",
                "type" => "select",
                "instructions" => __('Choose sidebar layout', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "simple" => __('Simple', 'hubitat'),
                    "boxed" => __('Boxed', 'hubitat'),
                ],
                "default_value" => [
                    "inherit"
                ],
                "return_format" => "value"
            ],
            [
                "key" => "field_592s45f15af5g9ts",
                "label" => '<h4>' . __('Breadcrumbs', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deb03328",
                "label" => __('Breadcrumbs', 'hubitat'),
                "name" => "breadcrumbs_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show breadcrumbs on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_591ac509d1208grpbcbaclcl1",
                "label" => __('Breadcrumbs background', 'hubitat'),
                "name" => "breadcrumbs",
                "type" => "clone",
                "instructions" => __('Choose breadcrumbs bar background', 'hubitat'),
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
                "key" => "field_593db13395d12",
                "label" => __('Breadcrumbs typography', 'hubitat'),
                "name" => "breadcrumbs_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose breadcrumbs typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592s35f15af5g9ts",
                "label" => '<h4>' . __('Other', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_591ac509d4234s",
                "label" => __('Scroll-to-top', 'hubitat'),
                "name" => "show_arrow",
                "type" => "inherited_checkbox",
                "instructions" => __('Show scroll-to-top arrow on the current page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591ac509d465as",
                "label" => __('Scroll-to-top typography', 'hubitat'),
                "name" => "arrow_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for the current page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d4234s",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => "inherited",
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59390deb04364",
                "label" => __('Footer', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59321s81ebmod23",
                "label" => '<h4>' . __('General', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deb06b99",
                "label" => __('Footer', 'hubitat'),
                "name" => "footer_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show footer on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Hide', 'hubitat'),
                    "no" => __('Show', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deb06fd1",
                "label" => __('Footer wrapper', 'hubitat'),
                "name" => "footer_is_wrapped",
                "type" => "inherited_checkbox",
                "instructions" => __('Add footer content wrapper?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => "Enable wrapper",
                    "no" => "Disable wrapper"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5940ec917da19",
                "label" => __('Footer typography', 'hubitat'),
                "name" => "footer_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose content typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59390deb057c5grp",
                "label" => __('Footer background', 'hubitat'),
                "name" => "footer",
                "type" => "clone",
                "instructions" => __('Choose footer background', 'hubitat'),
                "required" => false,
                "conditional_logic" => false,
                "clone" => [
                    "group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3"
                ],
                "display" => "group",
                "layout" => "block",
                "inherited_slug" => __('Use from Theme Settings', 'hubitat'),
                "prefix_label" => false,
                "prefix_name" => true
            ],
            [
                "key" => "field_59391743def2b",
                "label" => __('Sticky footer', 'hubitat'),
                "name" => "footer_is_sticky",
                "type" => "inherited_checkbox",
                "instructions" => __('Set sticky (fixed) footer on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Yes', 'hubitat'),
                    "no" => __('No', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a0a521s81ebmod23",
                "label" => '<h4>' . __('Copyright Bar', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390dsb07397",
                "label" => __('Copyright section', 'hubitat'),
                "name" => "footer_copyright_visibility",
                "type" => "inherited_checkbox",
                "instructions" => __('Show copyright section on this page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_592fd8901f63agrppg",
                "label" => __('Copyright bar background', 'hubitat'),
                "name" => "footer_copyright_section",
                "type" => "clone",
                "instructions" => __('Choose section background', 'hubitat'),
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
                "key" => "field_59390deb07b67",
                "label" => __('Copyright section text typography', 'hubitat'),
                "name" => "footer_copyright_section_text_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose section content typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_59390deb07b68",
                "label" => __('Copyright section links color', 'hubitat'),
                "name" => "footer_copyright_section_links_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose section content links color', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593afasf1ebmod23",
                "label" => '<h4>' . __('Other', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_59390deb04788",
                "label" => __('Footer site logo', 'hubitat'),
                "name" => "footer_logo_widget_type",
                "type" => "select",
                "instructions" => __('Choose widget logo type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "light_variant" => __('Light variant logo', 'hubitat'),
                    "dark_variant" => __('Dark variant logo', 'hubitat'),
                    "sitename" => __('Text logo', 'hubitat'),
                    "custom" => __('Custom image', 'hubitat'),
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
                "key" => "field_5940dfabfe181",
                "label" => __('Footer site name settings', 'hubitat'),
                "name" => "footer_sitename_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Custom settings for footer site name', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb04788",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5940dfeafe182",
                "label" => __('Footer custom logo image', 'hubitat'),
                "name" => "footer_custom_logo",
                "type" => "image",
                "instructions" => __('Custom logo image in footer', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb04788",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => ""
            ],
            [
                "key" => "field_59390deb07fa2",
                "label" => __('Custom CSS', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b456smod951",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message"><span class="dashicons dashicons-editor-help"></span>' . __('You won\'t lose the following CSS code after updating the theme.', 'hubitat') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59390deb083b5",
                "label" => __('Custom CSS styles', 'hubitat'),
                "name" => "custom_css",
                "type" => "hubitat_code",
                "instructions" => __('Write a custom CSS code here', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_59390deb043641",
                "label" => __('Other', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592s35f15af5g9l",
                "label" => '<h4>' . __('Social Networks', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_l05mnk93kid43naf2l",
                "label" => __('Social networks typography', 'hubitat'),
                "name" => "social_networks_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for social networks', 'hubitat'),
                "required" => 0,
                "default_value" => "inherit",
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ]
        ],
        "location" => [],
        "menu_order" => 3,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => [
            "discussion",
            "comments",
            "author",
            "format"
        ],
        "active" => 1,
        "description" => ""
    ]);

endif;
