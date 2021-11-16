<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_5946360af373c5",
        "title" => __('Custom CSS', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_542245d4313bf",
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
                "key" => "field_5937e0a52b4567mod951",
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
                "key" => "field_591ac509d4a44",
                "label" => __('Custom CSS styles', 'hubitat'),
                "name" => "global_page_custom_css",
                "type" => "hubitat_code",
                "instructions" => __('Write a custom CSS code here', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => __('Your CSS code goes here', 'hubitat'),
                "language" => "css"
            ],
            [
                "key" => "field_542245d6313bf",
                "label" => __('Adaptive Options', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593743a43b383415",
                "label" => __('Desktop devices', 'hubitat'),
                "name" => "global_page_custom_large_css",
                "type" => "hubitat_code",
                "instructions" => __('Write a custom CSS code here', 'hubitat') . '<br> <em>' . __('(from 1025px)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_593743a43b373415",
                "label" => "Tablet devices",
                "name" => "global_page_custom_medium_css",
                "type" => "hubitat_code",
                "instructions" => __('Write a custom CSS code here', 'hubitat') . '<br> <em>' . __('(up to 1024px)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_593743a43b363415",
                "label" => "Mobile devices",
                "name" => "global_page_custom_small_css",
                "type" => "hubitat_code",
                "instructions" => __('Write a custom CSS code here', 'hubitat') . '<br> <em>' . __('(up to 768px)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-custom"
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
