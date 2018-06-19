<?php

class Post {
	// DB Connection
	private $conn;
	
	// Post Properties
	public $id;
	public $categoryID;
	public $categoryName;
	public $title;
	public $body;
	public $author;
	public $createDate;
	
	// Constructor
	public function __construct($db){
		$this->conn = $db;
	}
	
	// Return List of Posts
	public function getPosts(){
		$query = 'SELECT posts.id, categories.name as categoryName, posts.title, posts.author, posts.createDate FROM posts LEFT OUTER JOIN categories ON posts.categoryID = categories.id ORDER BY posts.createDate DESC';
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	
	// Return Single Post
	public function readPost($id){
		$query = 'SELECT posts.id, categories.name as categoryName, posts.title, posts.body, posts.author, posts.createDate FROM posts LEFT OUTER JOIN categories ON posts.categoryID = categories.id WHERE posts.id = 1';
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	
	// Add Post
	public function addPost(){
		$query = 'INSERT INTO';
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return 'sall goodman';
	}
}

?>