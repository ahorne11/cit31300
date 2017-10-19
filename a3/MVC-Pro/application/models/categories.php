<?php
class Categories extends Model{

    function getCategories(){

        $sql = 'SELECT name, categoryID FROM categories';

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;

    }
	
	
}