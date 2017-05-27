<?php
	/*
	session_start();
	include('../../connect_db.php');
	$iduser=$_POST['iduser'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query2 = "SELECT * FROM user WHERE username = '$username'";
        //execute the query
  		$result2 = $db->query( $query2 );
  		$row2 = $result2->fetch_object();
		if ($password==$row2->password) {
		$query = "UPDATE user SET username='$username' WHERE iduser=$iduser";
		$result = $db->query($query);
		if(!$result)
		{
			die("Could not query the database: <br />". $db->error);
		} else
		{
			$query2 = "SELECT username FROM user WHERE username='$username' AND iduser=$iduser";
			$result2 = $db->query($query2);
			$row2 = $result2->fetch_object();
			$_SESSION['id'] = $row2->username;
			header('Location: index.php');
			exit;
		}
	}else
	header('Location: edit_username2.php?pesan=1');
	*/

	session_start();
	include('../../connect_db.php');
	$iduser=$_POST['iduser'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query2 = "SELECT * FROM user WHERE iduser=$iduser";
	$result2 = $db->query( $query2 );
	$row2 = $result2->fetch_object();
	if ($row2->password==$password) {
		$query2 = "UPDATE user SET username='$username' WHERE iduser=$iduser";
			$result2 = $db->query($query2);
			$_SESSION['id']=$username;
			header('Location: index.php?pesan=1');
			exit;
	}else{
			header('Location: edit_username2.php?pesan=1');
		}
	/*if(!$result2 || $result2=='')
		{
			header('Location: edit_username2.php?pesan=1');
		} else
		{
			$query2 = "UPDATE user SET username='$username' WHERE iduser=$iduser";
			$result2 = $db->query($query2);
			$_SESSION['id']=$username;
			header('Location: index.php?pesan=1');
			exit;
		}*/
?>
