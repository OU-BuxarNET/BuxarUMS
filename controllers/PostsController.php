<?php

use vendor\system\Controller;

class PostsController extends Controller
{
    public function actionIndex()
    {
        return $this->render();
    }

    public function actionTest()
    {
        return $this->render();
    }

    public function actionView()
    {
        // $post = Post::find(1);
        // return $this->render(['post' => $post]);

        echo 'Просмотр поста';
    }
}