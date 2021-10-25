<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
//            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        [
            'title' => 'Quản lí bài viết',
//            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Tất cả bài viết',
                    'page' => '/items',
                    'bullet' => 'dot',
                ],
                [
                    'title' => 'Danh mục bài viết',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Profile 1',
                            'bullet' => 'line',
                            'submenu' => [
                                [
                                    'title' => 'Overview',
                                    'page' => 'custom/apps/profile/profile-1/overview'
                                ],

                            ]
                        ],
                    ]
                ],
                [
                    'title' => 'Nhóm bài viết',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Du lịch',
                            'page' => '/du-lich'
                        ],
                        [
                            'title' => 'Liên hoan',
                            'page' => '/lien-hoan'
                        ],
                        [
                            'title' => 'Sự kiện',
                            'page' => '/su-kien'
                        ],
                        [
                            'title' => 'Từ thiện',
                            'page' => '/tu-thien'
                        ],
                        [
                            'title' => 'Dự án đào tạo',
                            'page' => '/du-an-dao-tao'
                        ],
                        [
                            'title' => 'Dự án kinh doanh',
                            'page' => '/du-an-kinh-doanh'
                        ],
                    ],
                ],
            ]
        ],
        [
            'title' => 'Quản lí quảng cáo',
//            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Tất cả quảng cáo',
                    'page' => '/pages'
                ],
                [
                    'title' => 'Danh mục quảng cáo',
                    'page' => '/users'
                ],


            ],
        ],
        [
            'title' => 'Hệ thống',
//            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Cấu hình chung',
                    'page' => '/settings'
                ],
//                [
//                    'title' => 'Danh mục quảng cáo',
//                    'page' => '/users'
//                ],

            ],
        ],
    ],
];
