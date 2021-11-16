<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_592d60af343cfp",
        "title" => __('Post Settings', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_592d60ah8a4137",
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
                "key" => "field_592d716deeb15",
                "label" => __('Related posts', 'hubitat'),
                "name" => "global_post_related_posts_visibility",
                "type" => "true_false",
                "instructions" => __('Show block with related posts?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60af8ac18",
                "label" => __('Related post items per row', 'hubitat'),
                "name" => "global_post_columns_in_row",
                "type" => "hubitat_columns",
                "instructions" => __('Choose the number of post items per row', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d716deeb15",
                            "operator" => "==",
                            "value" => "1"
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
                "key" => "field_592d60af8ac66",
                "label" => __('Related posts amount', 'hubitat'),
                "name" => "global_related_posts_amount",
                "type" => "number",
                "instructions" => __('Choose the number of related posts', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d716deeb15",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => "2",
                "allow_null" => 0,
                "multiple" => 0,
                "min" => 1,
                "max" => 12,
                "ui" => 0,
                "ajax" => 0,
                "placeholder" => ""
            ],
            [
                "key" => "field_59374a3443d8361523f",
                "label" => __('Post tags', 'hubitat'),
                "name" => "global_post_tags_visibility",
                "type" => "true_false",
                "instructions" => __('Show post tags on post pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59374a3fdf523f",
                "label" => __('Post comments', 'hubitat'),
                "name" => "global_post_comments_visibility",
                "type" => "true_false",
                "instructions" => __('Show post comments on post pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d714deeb14",
                "label" => __('Post navigation', 'hubitat'),
                "name" => "global_post_previous_n_next_visibility",
                "type" => "true_false",
                "instructions" => __('Show', 'hubitat') . '<em>' . __('"Prev and next posts"', 'hubitat') . '</em>' . __('navigation?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60ah8a413k",
                "label" => __('Sharing', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937433fdf523f",
                "label" => __('Sharing', 'hubitat'),
                "name" => "global_post_social_visibility",
                "type" => "true_false",
                "instructions" => __('Enable sharing feature for post pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937fd3fdf523f",
                "label" => __('Sharing networks', 'hubitat'),
                "name" => "global_post_sharing_networks",
                "type" => "select",
                "instructions" => __('Choose sharing social networks', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [],
                "choices" => [
                    "facebook" => __('Facebook', 'hubitat'),
                    "twitter" => __('Twitter', 'hubitat'),
                    "linkedin" => __('LinkedIn', 'hubitat'),
                    "pinterest" => __('Pinterest', 'hubitat'),
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
                "key" => "field_592d60ah8a313k",
                "label" => __('Author', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48c",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __('More author settings you can find in', 'hubitat') . '&nbsp;<a target="_blank" href="profile.php">' . __('your profile menu', 'hubitat') . '</a></p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592d716deeb14",
                "label" => __('Author', 'hubitat'),
                "name" => "global_post_author_widget_visibility",
                "type" => "true_false",
                "instructions" => __('Show author widget on all post pages?', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937e0a52b873",
                "label" => __('Author social links', 'hubitat'),
                "name" => "global_author_social_links",
                "type" => "repeater",
                "instructions" => __('Add some links to author social networks', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 0,
                "layout" => "table",
                "button_label" => __('+ Add Author', 'hubitat'),
                "sub_fields" => [
                    [
                        "key" => "field_5937e0a52f6f4",
                        "label" => __('Author', 'hubitat'),
                        "name" => "author",
                        "type" => "user",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "role" => "",
                        "allow_null" => 0,
                        "multiple" => 0
                    ],
                    [
                        "key" => "field_5937e0a52fac9",
                        "label" => __('Links', 'hubitat'),
                        "name" => "links",
                        "type" => "repeater",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "collapsed" => "",
                        "min" => 0,
                        "max" => 0,
                        "layout" => "table",
                        "button_label" => __('+ Add Link', 'hubitat'),
                        "sub_fields" => [
                            [
                                "key" => "field_5937e0a534d96",
                                "label" => __('Social networks', 'hubitat'),
                                "name" => "social_networks",
                                "type" => "select",
                                "instructions" => "",
                                "required" => 0,
                                "conditional_logic" => 0,
                                "choices" => [
                                    "behance" => __('Behance', 'hubitat'),
                                    "digg" => __('Digg', 'hubitat'),
                                    "discord" => __('Discord', 'hubitat'),
                                    "dribbble" => __('Dribbble', 'hubitat'),
                                    "facebook" => __('Facebook', 'hubitat'),
                                    "flickr" => __('Flickr', 'hubitat'),
                                    "github" => __('GitHub', 'hubitat'),
                                    "instagram" => __('Instagram', 'hubitat'),
                                    "kaggle" => __('Kaggle', 'hubitat'),
                                    "linkedin" => __('LinkedIn', 'hubitat'),
                                    "medium" => __('Medium', 'hubitat'),
                                    "mixer" => __('Mixer', 'hubitat'),
                                    "pinterest" => __('Pinterest', 'hubitat'),
                                    "quora" => __('Quora', 'hubitat'),
                                    "reddit" => __('Reddit', 'hubitat'),
                                    "snapchat" => __('Snapchat', 'hubitat'),
                                    "soundcloud" => __('SoundCloud', 'hubitat'),
                                    "spotify" => __('Spotify', 'hubitat'),
                                    "teamspeak" => __('Teamspeak', 'hubitat'),
                                    "telegram" => __('Telegram', 'hubitat'),
                                    "tiktok" => __('TikTok', 'hubitat'),
                                    "tumblr" => __('Tumblr', 'hubitat'),
                                    "twitch" => __('Twitch', 'hubitat'),
                                    "twitter" => __('Twitter', 'hubitat'),
                                    "vimeo" => __('Vimeo', 'hubitat'),
                                    "vine" => __('Vine', 'hubitat'),
                                    "vkontakte" => __('VKontakte', 'hubitat'),
                                    "whatsapp" => __('WhatsApp', 'hubitat'),
                                    "xing" => __('Xing', 'hubitat'),
                                    "youtube" => __('YouTube', 'hubitat'),
                                    "500px" => __('500px', 'hubitat'),
                                ],
                                "default_value" => [
                                    "facebook"
                                ],
                                "allow_null" => 0,
                                "multiple" => 0,
                                "ui" => 0,
                                "ajax" => 0,
                                "return_format" => "value",
                                "placeholder" => ""
                            ],
                            [
                                "key" => "field_5937e0a535178",
                                "label" => "URL",
                                "name" => "url",
                                "type" => "url",
                                "instructions" => "",
                                "required" => 0,
                                "conditional_logic" => 0,
                                "default_value" => "",
                                "placeholder" => ""
                            ]
                        ]
                    ]
                ]
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-post"
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
