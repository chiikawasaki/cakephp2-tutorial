<?php

class PostsController extends AppController{
    public $scafffold;
    public $helpers = array('HTML','Form');
    public function index() {
        $this->set('posts',$this->Post->find('all'));
        $this->set('title_for_layout','記事一覧');
	}
}
