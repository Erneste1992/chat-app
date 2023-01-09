<?php

//group_chat.php

include('conn.php');

session_start();

if($_POST["action"] == "insert_data")
{
	$data = array(
		':userid'		=>	$_SESSION["userid"],
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
		echo fetch_group_chat_history($connect);
	}

}

if($_POST["action"] == "fetch_data")
{
	echo fetch_group_chat_history($connect);
}

?>