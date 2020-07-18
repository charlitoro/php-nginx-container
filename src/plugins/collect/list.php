<?php 
  include_once "../db/queries.php";
  session_start();

  $userId = $_SESSION['userId'];
  $name = $_POST['name'];

  $result = MutationCreateList( $name, $userId );
  header('location: ../../platform/collect.php');
?>
