<?php

class CategoriesController extends controller {

    public $categoriesObject;

    public function index(){

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('title', 'Categories');
        $this->set('categories', $categories);

    }

}