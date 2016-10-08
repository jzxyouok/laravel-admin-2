<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menu items
    |--------------------------------------------------------------------------
    |
    | title:    item title.
    | url:      item url.
    | icon:     item icon, see https://fortawesome.github.io/Font-Awesome/icons/
    | children: subitems
    |
    */

    [
        'title' => 'Index',
        'url'   => '/',
        'icon'  => 'fa-bar-chart'
    ],
    [
        'title' => '用户列表',
        'url'   => 'users',
        'icon'  => 'fa-users',
    ],
    [
        'title' => 'Auth',
        'icon'  => 'fa-tasks',
        'children' => [
                [
                    'title' => 'Users',
                    'url'   => 'auth/users',
                    'icon'  => 'fa-user',
                ],
                [
                    'title' => 'Roles',
                    'url'   => 'auth/roles',
                    'icon'  => 'fa-user',
                ],
                [
                    'title' => 'Permissions',
                    'url'   => 'auth/permissions',
                    'icon'  => 'fa-user',
                ],
            ]
    ],
];
