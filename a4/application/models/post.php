<?php
class Post extends Model{
	
	function getPost($pID){


		$sql =  'SELECT pID, title, content, date, posts.uID, posts.categoryID, categories.categoryID, 
                  name, first_name, last_name FROM posts, categories, 
                  users WHERE posts.categoryID = categories.categoryID AND pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){



		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}
		
		//$sql =  'SELECT pID, title, content, date, uID, categoryID FROM posts'.$numposts;
        $sql = 'SELECT p.pID, p.title, p.content, p.uID, p.categoryID, p.date, c.name AS name, u.first_name, u.last_name
                FROM posts p
                INNER JOIN categories c ON c.categoryID = p.categoryID
                INNER JOIN users u ON u.uID = p.uID'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){

		
		$sql='INSERT INTO posts (title, date, categoryID, content, uID) VALUES (?,?,?,?, '.$_SESSION['uID'].')';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function updatePost($data){

	    $title = $data['title'];
        $date = $data['date'];
        $categoryID = $data['categoryID'];
        $content = $data['content'];
        //$pID = $data['pID'];

        //$sql =  'UPDATE posts SET title='.$title.', date='.$date.', categoryID='.$categoryID.', content='.$content.' WHERE  pID ='.$pID ;
        $sql =  "UPDATE posts SET title='".$title."', date='".$date."', categoryID='".$categoryID."', content='".$content."' WHERE  pID =?" ;

        // perform query
        $this->db->execute($sql,$data);

        $message = 'Post updated.';
        return $message;

    }
	
	
}