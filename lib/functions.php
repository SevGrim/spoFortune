<?php
	$mysqli=false;
	function connectDB(){
		global $mysqli;
		$mysqli=new mysqli("localhost","root","","mydatabase");
	}
	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}

function getAllArticles(){
global $mysqli;

$result_set=$mysqli->query("SELECT * FROM `articles`");

return resultSetToArray($result_set);
}

function resultSetToArray($result_set){
$array=array();
while(($row=$result_set->fetch_assoc())!=false)
{
$array[]=$row;
}
return $array;
}

function getArticle($id){
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `articles` WHERE `id`='$id'");

	return $result_set->fetch_assoc();
}

function getAllBanners(){
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `banners`");

	return resultSetToArray($result_set);
}

function getAllGuestBookComments(){
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `guestbook`");

	return resultSetToArray($result_set);
}

function addGuestBookComment($name,$comment){
	global $mysqli;
	$success=$mysqli->query("INSERT INTO `guestbook` (`name`,`comment`) 
	VALUES ('$name','$comment') ");

	return $success;
}
function addUser($email,$password){
	global $mysqli;

	$success=$mysqli->query("INSERT INTO `users` (`email`,`password`) 
	VALUES ('$email','$password') ");

	return $success;
}

function checkUser($email,$password){
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

	if($result_set->fetch_assoc()) return true;
	else return false;
}

function checksUsers($email,$password){
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

	if($result_set->fetch_assoc()) return true;
	else return false;
}



function searchArticles($words){
$query_search="";
$arraywords=explode(" ",$words);
foreach ($arraywords as $key=>$value){
if(isset($arraywords[$key-1])) $query_search .= " OR ";
$query_search .="(`full_text` LIKE '%$value%' OR `title` LIKE '%$value%')";
}
	global $mysqli;

	$result_set=$mysqli->query("SELECT * FROM `articles` WHERE $query_search");

	return resultSetToArray($result_set);
}
function isAdmin($email){
	global $mysqli;
	connectDB();
	$result_set=$mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
	$row = $result_set->fetch_assoc();	
	closeDB();
	return $row["admin"];
}
?>