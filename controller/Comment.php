<?php
namespace controller;

use \controller\Config as DB;

class Comment extends DB
{

	public function saveComment($data)
 	{
 		$sql = $this->prepare(
 			"INSERT INTO comments VALUES(
 			'',
 			'".$data['post_id']."',
 			'".$data['username']."',
 			'".$data['reply']."'
 			)"
 		);

 		$sql->execute();
 		return $sql->fetchAll();

 		header('location:index.php?detail=id'.$data['post_id']);

 		
 	}

 	public function getComment($id)
	{
		$sql = $this->prepare("SELECT * FROM comments WHERE post_id =$id");

 		$sql->execute();

 		return $sql->fetchAll();
 		
	}


}


?>