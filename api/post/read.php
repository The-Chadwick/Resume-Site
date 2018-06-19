<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../config/Database.php');
include_once('../../models/Post.php');

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Post($db);

// Blog Post Query
$result = $post->getPosts();
$rowCount = $result->rowCount();
if($rowCount > 0){
	// Array of posts
	$postArr = array();
	$postArr['data'] = array();
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		$postItem = array(
			'id' => $id,
			'title' => $title,
			'author' => $author,
			'categoryName' => $categoryName,
			'createDate' => $createDate
		);
		
		// Add rows to $postArr['data']
		array_push($postArr['data'], $postItem);
	}
	
	// Create JSON output of $postArr['data'] array
	echo json_encode($postArr);
}else{
	// No posts found in database
	echo json_encode(array('message' => 'No Posts Found'));
}


?>