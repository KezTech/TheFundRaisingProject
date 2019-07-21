<?php 
IF(ISSET($_GET['destroy'])){
 session_start();
 session_destroy($username);
 header('Location:login.php');
}
?>