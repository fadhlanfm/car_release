<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
{ 

} else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
  header ('Location: ../../page_403.php');
  exit;
} else if (isset($_SESSION['role']) && $_SESSION['role'] == -1) {
  header ('Location: ../../page_403.php');
  exit;
}
else
{
  header ('Location: ../../page_403.php');
  exit;

}
?>