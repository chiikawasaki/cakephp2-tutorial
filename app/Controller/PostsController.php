<?php

class PostsController extends AppController{
    public $helpers = array('Html','Form');
    public function index() {
       
        $this->set('posts',$this->Post->find('all'));
        $this->set('title_for_layout','記事一覧');
	}

    public function view($id = null){
        $this->Post->id = $id;
        $this->set('post',$this->Post->read());
    } 
    //記事の追加
    public function add(){
        if ($this->request->is('post')){
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Succsess!');
                $this->redirt(array('action'=>'index'));
            }else{
                $this->Session->setFlash('faild!')
            }
        }
    }
}
