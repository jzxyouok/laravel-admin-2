<?php

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\AdminController;
use App\Comment;

class CommentController extends Controller
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

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Comment::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->article_id('文章ID')->sortable();
            $grid->content('内容');
            $grid->created_at(trans('admin::lang.created_at'));
            $grid->ip('评论者IP');
            $grid->user_id('评论者ID');
            $grid->user_nick('评论者昵称');

            $grid->disableCreation();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Comment::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('article_id');
            $form->textarea('content');
            $form->display('ip', 'IP');
            $form->text('user_id');
            $form->text('user_nick');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}