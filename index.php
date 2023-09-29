<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>

<form action="process.php" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php

require_once 'database.php';

$db = new Database();
$pdo = $db->connect();



$db = new Database();
$pdo = $db->connect();

// Get the user information from the database
$query = 'SELECT * FROM users';
$stmt = $pdo->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll();

// Display the user information
foreach ($users as $user) {
    echo $user['name'] . ' - ' . $user['email'] . '<br>';
}
?>