<?php

use Illuminate\Database\Seeder;
use \Encore\Admin\Auth\Database\Menu;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => '控制面板',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => '权限控制',
                'icon'      => 'fa-user',
                'uri'       => '',
            ],
            [
                'parent_id' => 2,
                'order'     => 3,
                'title'     => '用户',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 2,
                'order'     => 4,
                'title'     => '角色',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 2,
                'order'     => 5,
                'title'     => '权限',
                'icon'      => 'fa-user',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 2,
                'order'     => 6,
                'title'     => '菜单',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 0,
                'order'     => 7,
                'title'     => '文章',
                'icon'      => 'fa-book',
                'uri'       => '',
            ],
            [
                'parent_id' => 7,
                'order'     => 8,
                'title'     => '发表文章',
                'icon'      => 'fa-pencil-square-o',
                'uri'       => 'articles/create',
            ],
            [
                'parent_id' => 7,
                'order'     => 9,
                'title' => '文章审核',
                'icon'  => 'fa-newspaper-o',
                'url'   => 'articles',
            ],
            [
                'parent_id' => 7,
                'order'     => 10,
                'title' => '文字链接',
                'url'   => 'link',
                'icon'  => 'fa-link',
            ],
            [
                'parent_id' => 0,
                'order'     => 11,
                'title' => '热区排序',
                'icon'  => 'fa-sort',
                'url'   => '',
            ],
            [
                'parent_id' => 11,
                'order'     => 12,
                'title' => '文字链接',
                'icon'  => 'fa-rocket',
                'url'   => 'linksort',
            ],
            [
                'parent_id' => 11,
                'order'     => 13,
                'title' => '焦点图',
                'icon'  => 'fa-plane',
                'url'   => 'photosort',
            ],
            [
                'parent_id' => 0,
                'order'     => 14,
                'title' => '用户互动',
                'icon'  => 'fa-users',
                'url'   => '',
            ],
            [
                'parent_id' => 14,
                'order'     => 15,
                'title' => '评论',
                'icon' => 'fa-comment',
                'url' => 'comments',
            ],
            [
                'parent_id' => 14,
                'order'     => 16,
                'title' => '投票',
                'icon' => 'fa-calculator',
                'url' => 'votes',
            ],
            [
                'parent_id' => 0,
                'order'     => 17,
                'title' => '素材',
                'icon'  => 'fa-image',
                'url'   => '',
            ],
            [
                'parent_id' => 17,
                'order'     => 18,
                'title' => '图片',
                'url'   => 'photos',
                'icon'  => 'fa-image',
            ],
            [
                'parent_id' => 17,
                'order'     => 19,
                'title' => '水印',
                'url'   => 'watermarks',
                'icon'  => 'fa-image',
            ],
            [
                'parent_id' => 0,
                'order'     => 20,
                'title' => '频道',
                'icon'  => 'fa-tasks',
                'url'   => 'channels',
            ],
            [
                'parent_id' => 0,
                'order'     => 21,
                'title' => '关键词',
                'url'   => 'keywords',
                'icon'  => 'fa-info',
            ],
            [
                'parent_id' => 0,
                'order'     => 22,
                'title' => '系统日志',
                'url'   => 'syslog',
                'icon'  => 'fa-linux',
            ],
        ]);
    }
}
