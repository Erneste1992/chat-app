<?php

//insert_chat.php

include('conn.php');

session_start();

$data = array(
	':userid'		=>	$_POST['userid'],

	':message'		=>	$_POST['message'],
	
);

$query = "
INSERT INTO chat
(userid, message) 
VALUES (:userid, :message)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
	echo fetch_user_chat_history($_SESSION['userid'], $_POST['userid'], $connect);
}

?>