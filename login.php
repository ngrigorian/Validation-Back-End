<?php
require('header.php');
require('server.php');
if (isset($_SESSION['userID'])) {
  header('Location: blog.php');
}
if (isset($_POST['action']) and $_POST['action'] == 'login') {
  login();
}
?>  

