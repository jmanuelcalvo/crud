<?php
session_start();

$conn = mysqli_connect(
  'mariadb',
  'user1',
  'password',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
