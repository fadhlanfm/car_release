<?php include('check_session.php'); ?>
<html>
<head>
	<title>Culture Acceleration Report</title>
    <link rel="icon" href="assets/gi.ico" />
	<link rel="stylesheet" type="text/css" href="assets/css_login.css">
	<script type="text/javascript" src="assets/admin.js"></script>
	<script type="text/javascript">
		$('.message a').click(function(){
  	 		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</head>
<body>
	<div class="login-page">
  	<div class="form" id="form">
    	<h1><a href="login_responden.php">Login Responden</a></h1>
    	<hr>
    	<h1><a href="login_admin.php">Login Admin</a></h1>
  	</div>
	</div>
</body>
</html>
