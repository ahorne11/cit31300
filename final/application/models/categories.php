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

    public function updateCategories($data){

        $name = $data['name'];
        $categoryID = $data['categoryID'];

        //$sql =  'UPDATE posts SET title='.$title.', date='.$date.', categoryID='.$categoryID.', content='.$content.' WHERE  pID ='.$pID ;
        $sql =  "UPDATE categories SET name='".$name."' WHERE  categoryID =" . $categoryID ;

        // perform query
        $this->db->execute($sql,$data);

        $message = 'Category updated.';
        return $message;

    }
	
	
}