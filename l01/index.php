<?php 
require_once 'db.php';

$sqlQuery = 'select * from users';
$stmt = $conn->prepare($sqlQuery);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<pre>";
print_r($result);
 ?>