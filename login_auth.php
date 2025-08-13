<?php
session_start();

$username = trim($_POST['username'] ?? '');
$code     = trim($_POST['code'] ?? '');  

if ($username === '' || $code === '') {
  header('Location: login.php?err=1');
  exit;
}

\\
$_SESSION['user'] = $username;

header('Location: index.php');
exit;
