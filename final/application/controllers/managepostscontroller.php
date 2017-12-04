<?php

class ManagepostsController extends Controller{
	
	public $postObject;
	public $categoriesObject;

	protected $access = 1;

	public function index(){

        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();
        $this->set('posts',$posts);

    }

	public function add(){
		
		$this->postObject = new Post();
		$this->set('task', 'save');

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('categories', $categories);
	}
	
	public function save(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'], 'date'=>$_POST['post_date'],
                'categoryID'=>$_POST['post_categoryID'],'content'=>$_POST['post_content']);
			
	
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}

	public function update(){


        $this->postObject = new Post();

        //snatch from url put it in array below
        /*$url = $_SERVER['REQUEST_URI'];
        $pID = substr($url, strpos($url, 'edit/') + 5);*/

        $data = array('pID'=>$_POST['pID'], 'title'=>$_POST['post_title'], 'date'=>$_POST['post_date'],
            'categoryID'=>$_POST['post_categoryID'],'content'=>$_POST['post_content']);


        $result = $this->postObject->updatePost($data);

        $this->set('message', $result);

    }
	
	public function edit($pID){
		
        $this->postObject = new Post();

        $post = $this->postObject->getPost($pID);

        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('task', 'update');

        $this->categoriesObject = new Categories();
        $categories = $this->categoriesObject->getCategories();
        $this->set('categories', $categories);
			
		
	}

    public function delete($pID){

        $this->postObject = new Post();

        $post = $this->postObject->deletePost($pID);

        $this->set('message', $post);


    }
	
	
}
