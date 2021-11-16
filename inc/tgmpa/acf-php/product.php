<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_59390deae2279_product",
        "title" => __('Product Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59390deaekk1ee3d",
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
                "key" => "field_47272fda25ype",
                "label" => __('View mode', 'hubitat'),
                "name" => "woocommerce_view_mode",
                "type" => "radio",
                "instructions" => __('Choose view mode for product pages', 'hubitat'),
                "choices" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "left" => __('Left gallery', 'hubitat'),
                    "right" => __('Right gallery', 'hubitat')
                ],
                "default_value" => [
                    "inherit"
                ],
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_59390deb03328dsaf1v",
                "label" => __('Category slug', 'hubitat'),
                "name" => "page_show_category_breadcrumbs",
                "type" => "inherited_checkbox",
                "instructions" => __('Show product categories in breadcrumbs?', 'hubitat'),
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
                "key" => "field_593dbedc5bqwee1",
                "label" => __('Double width', 'hubitat'),
                "name" => "product_style_in_grid",
                "type" => "radio",
                "instructions" => __('Double the width of this product', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __('Default - 1-column wide', 'hubitat'),
                    "2col" => __('Wide - 2-columns wide', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "default",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_47271241245ype",
                "label" => __('Sticky product', 'hubitat'),
                "name" => "woocommerce_product_sticky",
                "type" => "inherited_checkbox",
                "instructions" => __('Enable sticky product for product page?', 'hubitat'),
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "default_value" => "inherit",
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_47271f141245ype",
                "label" => __('Sale tag', 'hubitat'),
                "name" => "woocommerce_product_sale_tag",
                "type" => "inherited_checkbox",
                "instructions" => __('Show sale tag on product page?', 'hubitat'),
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "default_value" => "inherit",
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_eq2rf141245ype",
                "label" => __('SKU', 'hubitat'),
                "name" => "woocommerce_product_sku",
                "type" => "inherited_checkbox",
                "instructions" => __('Show SKU on product page?', 'hubitat'),
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "default_value" => "inherit",
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_eqcat141245ype",
                "label" => __('Category', 'hubitat'),
                "name" => "woocommerce_product_category",
                "type" => "inherited_checkbox",
                "instructions" => __('Show category on product page?', 'hubitat'),
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "default_value" => "inherit",
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_eqtag141245ype",
                "label" => __('Tags', 'hubitat'),
                "name" => "woocommerce_product_tags",
                "type" => "inherited_checkbox",
                "instructions" => __('Show tags on product page?', 'hubitat'),
                "custom_labels" => [
                    "inherit" => __('Use from Theme Settings', 'hubitat'),
                    "yes" => __('Show', 'hubitat'),
                    "no" => __('Hide', 'hubitat')
                ],
                "default_value" => "inherit",
                "return_format" => "value",
                "layout" => "horizontal"
            ],
            [
                "key" => "field_59390deaekk2ee3d",
                "label" => __('Typography Settings', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_vqkf4haf12422c",
                "label" => __('Product title typography', 'hubitat'),
                "name" => "woocommerce_single_product_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for simple product titles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592f4aff124wen",
                "label" => __('Product price typography', 'hubitat'),
                "name" => "woocommerce_single_product_price_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for simple product price', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_qwr93f4hff12422b",
                "label" => __('Product meta typography', 'hubitat'),
                "name" => "woocommerce_single_product_category_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for product meta', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5940ecs23rfrewdfas",
                "label" => __('Widget title text color', 'hubitat'),
                "name" => "page_footer_widget_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Choose widget title typography', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "add_theme_inherited" => false
            ]
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "product"
                ]
            ]
        ],
        "menu_order" => 2,
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
