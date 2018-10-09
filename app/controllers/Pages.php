<?php
class Pages extends Controller {
    public $postModel;
    public function __construct(){
        $this->postModel = $this->model('Post');

    }

    public function index(){
        $data = [
            'title' => 'Welcome'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}