<?php
class Pages extends Controller {
    public $postModel;
    public function __construct(){
        $this->postModel = $this->model('Post');

    }

    public function index(){
        $rows = $this->postModel->getPosts();

        $data = [
            'title' => 'Welcome',
            'rows' => $rows
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}