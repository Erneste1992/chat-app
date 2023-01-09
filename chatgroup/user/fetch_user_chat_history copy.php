<?php

//fetch_user_chat_history.php

include('conn.php');

session_start();

echo fetch_user_chat_history($_SESSION['userid'], $_POST['userid'], $connect);

?>