<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_5946362bf373c5",
        "title" => __('Other', 'hubitat'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_5222e3443f7k9ls",
                "label" => __('Coming Soon Mode', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5222e3443f7k9l0",
                "label" => __('Coming soon mode', 'hubitat'),
                "name" => "global_coming_soon_switch",
                "type" => "true_false",
                "instructions" => __('Enable coming soon mode for your website. Users won\'t be able to access the site\'s content and will see the coming soon page only', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_52832525asfsafff7k9l0",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => '<p class="message">' . __('Note, use <a target="_blank" href="../?coming-soon-preview=true">the following link</a> to be able to see the coming soon page as a WordPress administrator.', 'hubitat') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_5222e3443f7k9l1",
                "label" => __('Coming soon page background', 'hubitat'),
                "name" => "global_coming_soon_background",
                "type" => "clone",
                "instructions" => __('Choose coming soon page background', 'hubitat'),
                "required" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
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
                "key" => "field_5222e3443f7k9l2",
                "label" => __('Coming soon page heading', 'hubitat'),
                "name" => "global_coming_soon_heading",
                "type" => "text",
                "instructions" => __('Enter heading for the coming soon page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => __('We\'re under<br> construction', 'hubitat'),
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_5222e3443f7k9l3",
                "label" => __('Coming soon page details', 'hubitat'),
                "name" => "global_coming_soon_details",
                "type" => "textarea",
                "instructions" => __('Add some details about the coming soon page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => __('Check back for an update soon.', 'hubitat'),
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_5222e3443f7k9l4",
                "label" => __('Countdown', 'hubitat'),
                "name" => "global_coming_soon_countdown",
                "type" => "true_false",
                "instructions" => __('Show a countdown timer on the coming soon page', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
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
                "key" => "field_5222e3443f7k9l5",
                "label" => __('Countdown expiration date', 'hubitat'),
                "name" => "global_coming_soon_expiration",
                "type" => "date_time_picker",
                "instructions" => __('Enter the date when site will be online', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l4",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                'display_format' => "Y/m/d H:i:s",
                'return_format' => "Y/m/d H:i:s",
                'first_day' => 1,
                "default_value" => '2022/03/14 18:00:00',
            ],
            [
                "key" => "field_5222e3443f7k9l6",
                "label" => __('Social networks', 'hubitat'),
                "name" => "global_coming_soon_switch_social",
                "type" => "true_false",
                "instructions" => __('Show social networks on the coming soon page. <em>(Go to Theme Settings > Other > Social Networks to add networks)</em>', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
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
                "key" => "field_5222e3443f7k9l7",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],

            [
                "key" => "field_5222e3443f7k9l8",
                "label" => __('Page heading typography', 'hubitat'),
                "name" => "global_coming_soon_heading_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for the coming soon page heading', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5222e3443f7k9l9",
                "label" => __('Page details typography', 'hubitat'),
                "name" => "global_coming_soon_details_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for the coming soon page details', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l0",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_5222e3443f7k9l10",
                "label" => __('Countdown typography', 'hubitat'),
                "name" => "global_coming_soon_countdown_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for the coming soon page countdown', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e3443f7k9l4",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_542244d4313bf",
                "label" => __('Plugins', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937a0a521481ebmod23",
                "label" => '<h4>' . __('Google Maps', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message"
            ],
            [
                "key" => "field_592fe13500023",
                "label" => __('Google Maps API key', 'hubitat'),
                "name" => "global_google_maps_api_key",
                "type" => "text",
                "instructions" => 'Paste your Google Maps API key here.<br> <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">How to get your API key</a>',
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => __('Paste your key', 'hubitat'),
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_542244d4343bf",
                "label" => __('Snippets & Tracking', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a32b48cexmod151",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . __('Note, that you can update the theme without losing the code injected.', 'hubitat') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_5937e3a43b383415",
                "label" => __('Header JavaScript injection', 'hubitat'),
                "name" => "global_header_javascript",
                "type" => "hubitat_code",
                "instructions" => __('Paste your Google Analytics, Facebook Pixel or custom tracking code', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "javascript"
            ],
            [
                "key" => "field_5937e4a43b383415",
                "label" => __('Footer JavaScript injection', 'hubitat'),
                "name" => "global_footer_javascript",
                "type" => "hubitat_code",
                "instructions" => __('Paste your Google Analytics, Facebook Pixel or custom tracking code', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "javascript"
            ],
            [
                "key" => "field_591b056456481fcffmod",
                "label" => __('Subscribe Pop-Up', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5222e34430vve4od8",
                "label" => __('Subscribe pop-up', 'hubitat'),
                "name" => "global_subscribe_popup_switch",
                "type" => "true_false",
                "instructions" => __('Enable subscribe pop-up', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592fd8901f6jiofnbbbqo",
                "label" => __('Subscribe pop-up background', 'hubitat'),
                "name" => "global_subscribe_popup",
                "type" => "clone",
                "instructions" => __('Choose pop-up background', 'hubitat'),
                "required" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
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
                "key" => "field_5937895484415",
                "label" => __('Subscribe pop-up form', 'hubitat'),
                "name" => "global_subscribe_choice_of_forms",
                "type" => "post_object",
                "post_type" => [
                    "wpcf7_contact_form"
                ],
                "instructions" => __('Choose', 'hubitat') . '&nbsp;<a target="_blank" href="/wp-admin/admin.php?page=wpcf7">' . __('Contact Form 7', 'hubitat') . '&nbsp;</a>' . __('form for subscribtion', 'hubitat') . '<em>&nbsp;' . __('(Use pre-made forms only)', 'hubitat') . '</em>',
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "id",
                "placeholder" => ""
            ],
            [
                "key" => "field_592gh23s3500c30",
                "label" => __('Subscribe pop-up heading', 'hubitat'),
                "name" => "global_text_subcribe_popup",
                "type" => "text",
                "instructions" => __('Enter heading for your subscribe pop-up', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => __('Subscribe to our newsletter', 'hubitat'),
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592g223s3500c30",
                "label" => __('Subscribe pop-up details', 'hubitat'),
                "name" => "global_details_text_subcribe_popup",
                "type" => "textarea",
                "instructions" => __('Enter details about subscription terms', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => __('Sign up to receive updates, promotions, and sneak peaks of upcoming products. Plus 20% off your next order.', 'hubitat'),
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592s33s15af5g8t",
                "label" => '<h4>' . __('Display Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59229bda31f95_sbscr",
                "label" => __('Subscribe pop-up triggers', 'hubitat'),
                "name" => "global_subscribe_popup_display_trigger",
                "type" => "radio",
                "instructions" => __('Select one of the ways to display modal', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "time" => __('Time', 'hubitat'),
                    "scroll" => __('Page scroll', 'hubitat'),
                    "exit" => __('Exit intent', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "no",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_3337773s3500c30",
                "label" => __('Show pop-up delay', 'hubitat'),
                "name" => "global_delay_subcribe_popup",
                "type" => "text",
                "instructions" => __('Here goes a description', 'hubitat'),
                "required" => 0,
                "append" => __('seconds', 'hubitat'),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_58351fsa421j1265",
                "label" => __('Show after page scrolled', 'hubitat'),
                "name" => "global_subscribe_popup_scroll_percent",
                "type" => "text",
                "instructions" => __('Here goes a description', 'hubitat'),
                "required" => 0,
                "append" => __('%', 'hubitat'),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "maxlength" => "2",
                "placeholder" => ""
            ],
            [
                "key" => "field_58383c7ed01ae_sbscr",
                "label" => __('Expires', 'hubitat'),
                "name" => "global_subscribe_popup_expires",
                "type" => "text",
                "instructions" => __('After expiry, user will see the subscribe pop-up again', 'hubitat'),
                "required" => 1,
                "append" => __('days', 'hubitat'),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "maxlength" => "2",
                "placeholder" => ""
            ],
            [
                "key" => "field_592s33s15af5g9t",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_592fgj993827b",
                "label" => __('Heading typography', 'hubitat'),
                "name" => "global_text_subcribe_popup_typo",
                "type" => "hubitat_typo",
                "instructions" => __('et up typography styles for subscribe pop-up heading', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_592fg8883827b",
                "label" => __('Details typography', 'hubitat'),
                "name" => "global_details_text_subcribe_popup_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for subscribe pop-up details', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5222e34430vve4od8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_591b002d481fcff56",
                "label" => __('Social Networks', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fe1350456235",
                "label" => __('Social networks', 'hubitat'),
                "name" => "global_header_menu_social_links_visibility",
                "type" => "true_false",
                "instructions" => __('Show social networks on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_snlid", // old field_59229bda366f4mod
                "label" => __('Social networks list', 'hubitat'),
                "name" => "global_header_menu_social_links",
                "type" => "repeater",
                "instructions" => __('Choose social networks to be displayed on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "collapsed" => "",
                "min" => 0,
                "max" => 6,
                "layout" => "table",
                "button_label" => __('+ Add social network', 'hubitat'),
                "sub_fields" => [
                    [
                        "key" => "insnsn", // old field_59229bda7b686moddd
                        "label" => __('Direction', 'hubitat'),
                        "name" => "social_network",
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
                            "tripadvisor" => __('Tripadvisor', 'hubitat'),
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
                        "default_value" => [],
                        "allow_null" => 0,
                        "multiple" => 0,
                        "ui" => 0,
                        "ajax" => 0,
                        "return_format" => "value",
                        "placeholder" => ""
                    ],
                    [
                        "key" => "insnurl", // old field_59229bda7ba5ajhghjhg
                        "label" => __('URL', 'hubitat'),
                        "name" => "url",
                        "type" => "url",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "default_value" => "",
                        "placeholder" => ""
                    ]
                ]
            ],
            [
                "key" => "field_592fe1350013rfw4g23",
                "label" => __('Social networks type', 'hubitat'),
                "name" => "global_social_network_type",
                "type" => "radio",
                "instructions" => __('Choose social networks type', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "letters" => __('Letters', 'hubitat'),
                    "icons" => __('Icons', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "letters",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592s33s15af4g8s",
                "label" => '<h4>' . __('Display Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_592fe13500linksinnewtab",
                "label" => __('Open links in new tab?', 'hubitat'),
                "name" => "global_social_network_target_blank",
                "type" => "true_false",
                "instructions" => __('Social network links will open in a new tab', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_5937e1905d075d297",
                "label" => __('Social networks position', 'hubitat'),
                "name" => "global_social_network_position",
                "type" => "select",
                "instructions" => __('Choose social network display position', 'hubitat'),
                "required" => 0,
                "conditional_logic" => false,
                "choices" => [
                    "left" => __('Left side', 'hubitat'),
                    "right" => __('Right side', 'hubitat')
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "right",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_598s31s15af5g9s",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_l05mnk93kid43naf2",
                "label" => __('Social networks typography', 'hubitat'),
                "name" => "global_page_social_networks_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for social networks', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe1350456235",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "add_theme_inherited" => false
            ],
            [
                "key" => "field_542244d4343hg",
                "label" => __('Notification', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fe13500qwedqwxs",
                "label" => __('Notification', 'hubitat'),
                "name" => "global_notification_bar",
                "type" => "true_false",
                "instructions" => __('Enable notification on your website', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592fe13500hjbh",
                "label" => __('Notification details', 'hubitat'),
                "name" => "global_notification_text",
                "type" => "text",
                "instructions" => __('Paste your notification text here', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_592fe135002542tgs",
                "label" => __('Notification details link', 'hubitat'),
                "name" => "global_notification_link",
                "type" => "true_false",
                "instructions" => __('Enable notification link', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592feа125350234df2",
                "label" => __('Notification link', 'hubitat'),
                "name" => "global_notification_link",
                "type" => "link",
                "instructions" => __('Set up notification link', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe135002542tgs",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592fe13500asdas",
                "label" => __('Notification button', 'hubitat'),
                "name" => "global_notification_button",
                "type" => "true_false",
                "instructions" => __('Enable notification button', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_592feа125350kasdgh",
                "label" => __('Button link', 'hubitat'),
                "name" => "global_notification_button_link",
                "type" => "link",
                "instructions" => __('Set up button link', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe13500asdas",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ],
            [
                "key" => "field_583592feа12asdf4asfasf",
                "label" => __('Notification background', 'hubitat'),
                "name" => "global_notification_background_color",
                "type" => "hubitat_color",
                "instructions" => __('Choose background color for notification', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ],
                "ui" => 0,
                "ajax" => 0,
                "placeholder" => ""
            ],
            [
                "key" => "field_592s33s15af4g8t",
                "label" => '<h4>' . __('Display Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe13500qwedqwxs",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_583592feа12asdf435e",
                "label" => __('Expires', 'hubitat'),
                "name" => "global_notification_expires",
                "type" => "text",
                "instructions" => __('After expiry, user will see the notification bar again', 'hubitat'),
                "required" => 0,
                "append" => __('days', 'hubitat'),
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ],
                "default_value" => "360",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "maxlength" => "3",
                "placeholder" => ""
            ],
            [
                "key" => "field_598s31s15af5g9t",
                "label" => '<h4>' . __('Typography Settings', 'hubitat') . '</h4>',
                "name" => "",
                "type" => "message",
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ]
            ],
            [
                "key" => "field_583592feа12as98holrv",
                "label" => __('Notification details typography', 'hubitat'),
                "name" => "global_notification_details_typo",
                "type" => "hubitat_typo",
                "instructions" => __('Set up typography styles for notification details', 'hubitat'),
                "required" => 0,
                "conditional_logic" => [
                    [
                        "field" => "field_592fe13500qwedqwxs",
                        "operator" => "==",
                        "value" => "1"
                    ]
                ]
            ],
            [
                "key" => "field_542244d4343ch",
                "label" => __('Options Cache', 'hubitat'),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fe13500cch",
                "label" => __('Use options cache', 'hubitat'),
                "name" => "global_options_cache",
                "type" => "true_false",
                "instructions" => __('Cache allows to avoid repeated queries to the database, thereby speeding up your site. Turn off this setting to reset and stop cache', 'hubitat'),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => __('Yes', 'hubitat'),
                "ui_off_text" => __('No', 'hubitat')
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-other"
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
