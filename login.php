<?php
    session_start();
    //connect database
    include('/process/connect_db.php');
    if(isset($_SESSION['role']) && $_SESSION['role'] == -1){
            header("Location:production/index.php");
            exit;
        }else if (isset($_SESSION['role']) && $_SESSION['role'] == 1){
            header("Location:production/user/index.php");
            exit;
        }
        else{
        }
?>

<html>
<head>
	<title>Login Admin</title>
	<link rel="icon" href="assets/gi.ico" />
	<link rel="stylesheet" type="text/css" href="assets/css_login.css">
	<script type="text/javascript">
		$('.message a').click(function(){
  	 		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</head>
<body>
	<div class="login-page">	
  	<div class="form">
    	<form class="login-form" action="acc_login.php" method="POST">
    		<h1>Login CAR</h1>
    		<?php if (isset($_GET['alert']) && $_GET['alert']==1) {
				echo "<h5><mark>Username atau Password salah</mark></h5>";
			} ?>
			<input type="text" placeholder="Username" name="id">
			<input type="password" placeholder="Password" name="password">
			<button type="submit">Masuk</button>
		</form>
  	</div>
	</div>
</body>
</html>
