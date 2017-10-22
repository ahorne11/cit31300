<?php

class LoginController extends Controller{
	
	protected $userObject;
   
   public function do_login(){

        $this->userObject = new Users();

        if($this->userObject->checkUser($_POST['post_user_name'], $_POST['post_password'])){


            $userInfo = $this->userObject->getUserFromEmail($_POST['post_user_name']);

            $_SESSION['uID'] = $userInfo['uID'];

            header('Location: ' .BASE_URL);


        } else {
            $this->set('error', 'Wrong password / email combination');
        }
	   
   }
	
	
}