<?php
	/*session_start();
	$iduser=$_POST['iduser'];
	$newpass=$_POST['newpass'];
	include('../../connect_db.php');
	$query = "UPDATE user SET password='$newpass' WHERE iduser=$iduser";
		$result = $db->query($query);
		if(!$result)
		{
			die("Could not query the database: <br />". $db->error);
		}else
		{

			header('Location: index.php');

			$db->close();
			exit;
		}*/	

	session_start();
	include('../../connect_db.php');
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$iduser=$_POST['iduser'];
	$query2 = "SELECT * FROM user WHERE iduser=$iduser";
	$result2 = $db->query( $query2 );
	$row2 = $result2->fetch_object();
	if ($row2->password==$oldpass) {
		$query2 = "UPDATE user SET password='$newpass' WHERE iduser=$iduser";
			$result2 = $db->query($query2);
			header('Location: index.php?pesan=2');
			exit;
	}else{
			header('Location: edit_password2.php?pesan=1');
		}
?>
