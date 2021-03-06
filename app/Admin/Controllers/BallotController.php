<?php

namespace App\Admin\Controllers;

use App\Ballot;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\AdminController;
use App\Comment;

class BallotController extends Controller
{
    use AdminController;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    public function store()
    {

    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Ballot::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->article_id('文章id');
            $grid->type('种类')->value(function($id) {
                $names = ['投票', 'PK'];
                return $names[$id];
            });

            $grid->status('状态')->value(function($id) {
                $names = ['未开始', '进行中', '已结束'];
                return $names[$id];
            });

            $grid->start_at('开始时间');
            $grid->end_at('结束时间');

            $grid->created_at(trans('admin::lang.created_at'));
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Ballot::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
