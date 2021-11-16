<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_593be7a6c2017prd",
        "title" => __('Product Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_583be7a6d2429",
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
                "key" => "field_47272c6ed00ae_laytype",
                "label" => __('View mode', 'hubitat'),
                "name" => "global_woocommerce_view_mode",
                "type" => "select",
                "instructions" => __('Choose view mode for product pages', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __('Left gallery', 'hubitat'),
                    "right" => __('Right gallery', 'hubitat')
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
                "key" => "field_593benajslodkihoih",
                "label" => __('Gallery zoom effect', 'hubitat'),
                "name" => "global_woocommerce_product_zoom",
                "type" => "true_false",
                "instructions" => __('Enable product gallery images zoom effect', 'hubitat'),
                "required" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be7a6fas124d437b",
                "label" => __('Category slug', 'hubitat'),
                "name" => "global_woocommerce_page_show_category_breadcrumbs",
                "type" => "true_false",
                "instructions" => __('Show product categories in breadcrumbs?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "1",
                "layout" => "horizontal",
                "return_format" => "value",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be7a6d18qlgt",
                "label" => __('Lightbox preview', 'hubitat'),
                "name" => "global_woocommerce_product_lightbox_preview",
                "type" => "true_false",
                "instructions" => __('Enable lightbox preview for product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be8a6d18qlgt",
                "label" => __('Sticky product', 'hubitat'),
                "name" => "global_woocommerce_product_sticky",
                "type" => "true_false",
                "instructions" => __('Enable sticky product for product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592fd62342342a3124",
                "label" => __('Next/Prev navigation', 'hubitat'),
                "name" => "global_woocommerce_product_navigation",
                "type" => "true_false",
                "instructions" => __('Show product navigation with next and previouse products', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59fb4ad44a1dtd336199",
                "label" => __('Number of related products', 'hubitat'),
                "name" => "global_woocommerce_product_related_amount",
                "type" => "text",
                "instructions" => __('Set a number of related products output. Up to 12', 'hubitat'),
                "required" => 0,
                "append" => __('products', 'hubitat'),
                "default_value" => "3",
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be8a6d18930",
                "label" => __('Sale tag', 'hubitat'),
                "name" => "global_woocommerce_product_sale_tag",
                "type" => "true_false",
                "instructions" => __('Show sale tag on product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be8a6d1893b",
                "label" => __('SKU', 'hubitat'),
                "name" => "global_woocommerce_product_sku",
                "type" => "true_false",
                "instructions" => __('Show SKU on product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be8a6d1893c",
                "label" => __('Category', 'hubitat'),
                "name" => "global_woocommerce_product_category",
                "type" => "true_false",
                "instructions" => __('Show category on product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_593be8a6d1893d",
                "label" => __('Tags', 'hubitat'),
                "name" => "global_woocommerce_product_tags",
                "type" => "true_false",
                "instructions" => __('Show tags on product page?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_583be7a6d2429tpg",
                "label" => __('Typography', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593f4haf12422c",
                "label" => __('Product title', 'hubitat'),
                "name" => "global_woocommerce_single_product_title_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for simple product titles', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592f4aff12422a",
                "label" => __('Product price', 'hubitat'),
                "name" => "global_woocommerce_single_product_price_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for simple product price', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593f4hff12422b",
                "label" => __('Product meta', 'hubitat'),
                "name" => "global_woocommerce_single_product_category_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography for product meta', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_593beba6d4b64",
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
                "key" => "field_593743w37383615",
                "label" => __('Sharing', 'hubitat'),
                "name" => "global_woocommerce_sharing_visibility",
                "type" => "true_false",
                "instructions" => __('Enable sharing feature for product pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "new_lines" => "",
                "esc_html" => 0,
                "ui" => true
            ],
            [
                "key" => "field_593743e37383615",
                "label" => __('Sharing networks', 'hubitat'),
                "name" => "global_woocommerce_sharing_networks",
                "type" => "select",
                "instructions" => __('Choose sharing social networks', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593743w37383615",
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
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-product"
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
