<?php 
require_once 'db.php';

$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];

$sqlQuery = "
insert into users (name, email, password)
values (:name, :email, :password);
";

$stmt = $conn->prepare($sqlQuery);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', md5($password));
$stmt->execute();

header('Location: index.php');


 ?>