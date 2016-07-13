<?php

class HomeController extends BaseController
{
    function index()
    {
        $posts = $this->model->getLatestPosts(5);
        $this->posts = array_slice($posts, 0, 3);
        $this->postsSideBar = $posts;
    }
	
	function view($id)
    {
        $post = $this->model->getPostById($id);
        if($post) {
            $this->post  = $post;
        } else {
            $this->addErrorMessage("Error: invalid post id.");
            $this->redirect("");
        }

    }
}
