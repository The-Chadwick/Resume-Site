<?php

class Post {
	// DB Connection
	private $conn;
	private $table = 'posts';
	
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
	
	// Read Posts
	public function readPost(){
//		$query = 'SELECT category.name as categoryName, posts.id, posts.title, posts.body, posts.author, posts.createDate FROM' . $this->table . ' posts LEFT JOIN  categories c ON posts.caregoryID = c.id ORDER BY posts.createDate DESC';
		$query = 'SELECT * FROM posts';
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