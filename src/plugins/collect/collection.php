<?php 
  include_once "../db/queries.php";
  session_start();

  $userId = $_SESSION['userId'];
  $name = $_POST['name'];
  $description = $_POST['description'];

  $result = MutationCreateCollection( $name, $description, $userId );
  header('location: ../../platform/collect.php');
?>
