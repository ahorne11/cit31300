<?php

class CategoriesController extends controller {

    public $categoriesObject;

    public function index(){

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('title', 'Categories');
        $this->set('categories', $categories);

    }

    public function update(){


        $this->categoriesObject = new Categories();


        $data = array('cID'=>$_POST['post_id'], 'name'=>$_POST['post_name']);


        $result = $this->categoriesObject->updateCategories($data);

        $this->set('message', $result);

    }

    public function edit($cID){

        $this->categoriesObject = new Categories();

        $post = $this->categoriesObject->getCategory($cID);

        $this->set('cID', $post['categoryID']);
        $this->set('name', $post['name']);
        $this->set('task', 'update');


    }

    public function add(){

        $this->categoriesObject = new Categories();

        $data = $_POST['post_name'];


        $result = $this->categoriesObject->addCategory($data);

        $this->set('message', $result);


    }

}