<?php
session_start();
if(isset($_SESSION['login'])){
  header('Location: dashboard_in.php');
}else{
  header('Location: dashboard.php');
}
?>