<?php

class Controller {

    public $load;
    public $users;

    //put rest of magic methods in here

    function __construct() {

        $this->load = new Load();
        $this->users = new Users("aahorne", "Aaron", "Horne", "aahorne@iupui.edu", "User");
        $this->home();

    }

    public function __set($name, $value){

    }

    public function __get($name){

    }

    public function __destruct()
    {
    }

    function home() {

        $data = $this->users->getName();

        $this->load->view('view.php',$data);
    }
}