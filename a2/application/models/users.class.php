<?php

class Users extends Model {

    public function __construct($userID, $firstname, $lastname, $email, $role) {

        parent::__construct();
        $this->userID = $userID;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->role = $role;

    }

    public function __set($name, $value){
        $this->$name = $value;
        return;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __destruct()
    {
    }

    public function getName(){

        //put values into array to be returned
        return array('userID'=>$this->userID,
                    'firstname'=>$this->firstname,
                    'lastname'=>$this->lastname,
                    'email'=>$this->email,
                    'role'=>$this->role);

    }
}