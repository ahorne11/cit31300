<?php
class Comments extends Model{
	
	function getComments($pID, $limit = 0){

        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql = 'SELECT commentID, commentText, date, postID, u.first_name, u.last_name
                FROM comments c 
                INNER JOIN users u ON u.uid = c.uID 
                WHERE postID = '.$pID.$numposts;


        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
	
	}

    public function addComment($data){


        $sql='INSERT INTO comments (commentText, postID, uID) VALUES (?, '.$_POST['pID'].',' .$_SESSION['uID']. ')';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;

    }

    public function deleteComment(){


        $sql='DELETE from comments WHERE commentID = ' . $_POST['commentID'];
        $this->db->execute($sql);
        $message = 'Comment deleted.';
        return $message;

    }

	
}