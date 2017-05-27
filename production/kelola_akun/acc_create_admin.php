<?php
	include '../connect_db.php';
	$username = (isset($_POST['username']) ? $_POST['username'] : '');
	$password = (isset($_POST['password']) ? $_POST['password'] : '');
	$role=-1;

		$query = "INSERT into user(username,
									password,
									role 
									) 

									values ('$username',
									'$password',
									'$role')";

		$result = $db->query($query);
		if(!$result)
		{
			die("Could not query the database: <br />". $db->error);
		}else
		{
			header ('Location: user_management.php');
			$db->close();
			exit;
		}	
?>
