<?php

class Users extends Model {

    function getUser($uID){


        $sql =  'SELECT uID, first_name, last_name, email, password FROM users 
                  WHERE uID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;

    }

    public function getAllUsers($limit = 0){



        if($limit > 0){

            $numusers = ' LIMIT '.$limit;
        }

        //$sql =  'SELECT pID, title, content, date, uID, categoryID FROM posts'.$numusers;
        $sql = 'SELECT uID, first_name, last_name, email, password FROM users ';

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $users[] = $row;
        }

        return $users;

    }

    public function registerUser($data){


        $sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'User added.';
        return $message;

    }

}