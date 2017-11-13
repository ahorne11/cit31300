<?php

class MembersController extends Controller {

    public $membersObject;

    public function users($uID){

        $this->membersObject = new Users();
        $user = $this->membersObject->getUser($uID);
        $this->set('user',$user);

    }

    public function index(){

        $this->membersObject = new Users();
        $users = $this->membersObject->getAllUsers();
        $this->set('title', 'The Members View');
        $this->set('users',$users);

    }

}