<?php

class BlogController extends Controller{
	
	public $postObject;
	public $commentsObject;
   
   	public function post($pID){
	   
		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);

		$this->commentsObject = new Comments();
        $comments = $this->commentsObject->getComments($pID);

        $this->set('comments', $comments);
	  	$this->set('post',$post);
	   
   	}

    public function add(){

        $this->commentsObject = new Comments();

        $data = array('commentText'=>$_POST['commentText']);

        $result = $this->commentsObject->addComment($data);

        $this->set('message', $result);

    }

    public function delete(){

        $this->commentsObject = new Comments();

        $result = $this->commentsObject->deleteComment();

        $this->set('message', $result);

    }
	
	public function index(){
		
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	
	}
	
	
}
