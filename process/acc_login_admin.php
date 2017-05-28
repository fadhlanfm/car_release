<?php 	
session_start();
    //connect database
    include('../process/connect_db.php');
    if(isset($_SESSION['role']) && $_SESSION['role'] == -1){
            header("Location:production/index.php");
            exit;
        }else if (isset($_SESSION['role']) && $_SESSION['role'] == 1){
            header("Location:production/user/index.php");
            exit;
        }
        else{
        }
if(isset($_POST['id']) && isset($_POST['password']))
{	
	$id_admin = secure($_POST['id'], $mysqli);
	$pass_admin =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM user WHERE username = '$id_admin' AND password = '$pass_admin' AND role = -1";
	$result = $db->query($q);
	$row = $result->fetch_object();
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['id'] = $id_admin;
			$_SESSION['role'] = $row->role;
			header("Location:../production/index.php");
			echo 
			"<script>
				window.location.href = '../production/index.php';
			</script>";
			exit;
		}
		else
		{
  			echo "<script type='text/javascript'>
  			window.location.href = '../login_admin.php?alert=1';
  			</script>";
  			exit;
		}
	}
}
?>
