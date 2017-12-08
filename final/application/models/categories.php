<?php
class Categories extends Model{

    function getCategory($cID){


        $sql = 'SELECT name, categoryID
        FROM categories
		WHERE categoryID = ?
		';
        $results = $this->db->getrow($sql, array($cID));

        $category = $results;

        return $category;

    }

    function getCategories(){

        $sql = 'SELECT name, categoryID FROM categories';

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;

    }

    public function updateCategories($data){

        $name = $data['name'];
        //$categoryID = $data['cID'];

        $sql =  "UPDATE categories SET name ='".$name."' WHERE categoryID =?";
        //$sql='INSERT INTO categories (name, categoryID) VALUES (?,?)';

        // perform query
        $this->db->execute($sql,$data);

        $message = 'Category updated.';
        return $message;

    }

    public function addCategory($data){


        $sql='INSERT INTO categories (name) VALUES (?)';
        $this->db->execute($sql,$data);
        $message = 'Category added.';
        return $message;

    }

	
	
}