<?php

require_once 'database.php';

$db = new Database();
$pdo = $db->connect();

// Get the user input
$name = $_POST['name'];
$email = $_POST['email'];

// Insert the user information into the database
$query = 'INSERT INTO users (name, email) VALUES (:name, :email)';
$stmt = $pdo->prepare($query);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Redirect the user to the index page
header('Location: index.php');
?>