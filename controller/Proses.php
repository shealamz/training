<?php
namespace controller;

use \controller\Config as DB;

class Proses extends DB
{
	public function getCategory()
	{
		$sql = $this->prepare("SELECT * FROM category_blog");

 		$sql->execute();

 		return $sql->fetchAll();
	}

	public function user()
	{
		$sql = $this->prepare("SELECT * FROM users WHERE id = 1");

 		$sql->execute();

 		return $sql->fetch();
	}

	public function getPost()
	{
		$sql = $this->prepare("SELECT posts.*, category_blog.category_name FROM posts, category_blog WHERE posts.id_category = category_blog.id");

 		$sql->execute();

 		return $sql->fetchAll();
	}

	public function getDetail($id)
	{
		$sql = $this->prepare('SELECT * FROM posts WHERE id ='.$id);

 		$sql->execute();

 		return $sql->fetch();
	}

	public function getPostcat($id)
	{
		$sql = $this->prepare("SELECT * FROM posts WHERE id_category =".$id);

 		$sql->execute();

 		return $sql->fetchAll();
	}

	public function searchPost()
	{
		$_SESSION['session_search'] = $_POST['keyword'];
		$keyword = $_SESSION['session_search'];

		$sql = $this->prepare("SELECT posts.*, category_blog.category_name FROM posts, category_blog WHERE posts.id_category = category_blog.id AND title LIKE '%".$keyword."%' ");

 		$sql->execute();

 		return $sql->fetchAll();
	}

}


?>