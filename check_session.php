<?php
    session_start();
    //connect database
    include('/process/connect_db.php');
    if(isset($_SESSION['role']) && $_SESSION['role'] = -1){
            header("Location:production/index.php");
            exit;
        }
    
    if (isset($_SESSION['role']) && $_SESSION['role'] = 1){
            header("Location:production/user/index.php");
            exit;
        }
        else{
            
        }
?>