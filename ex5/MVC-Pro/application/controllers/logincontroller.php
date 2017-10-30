<?php

class LoginController extends Controller{
	
	protected $userObject;
   
   public function do_login(){

        $this->userObject = new Users();

        if($this->userObject->checkUser($_POST['post_user_name'], $_POST['post_password'])){


            $userInfo = $this->userObject->getUserFromEmail($_POST['post_user_name']);

            $_SESSION['uID'] = $userInfo['uID'];



            if(strlen($_SESSION['redirect']) > 0) {
                $view = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                header('Location: '.BASE_URL.$view);
            } else {
                header('Location: ' .BASE_URL);
            }



        } else {
            $this->set('error', 'Wrong password / email combination');
        }
	   
   }

    public function logout(){

       //unset the session id
        unset($_SESSION['uID']);

        //close the session
        session_write_close();

        $logOutMessage = "You have successfully logged out.";

        //send back to homepage
        header('Location: '.BASE_URL."?message=".urldecode($logOutMessage));

    }
	
	
}