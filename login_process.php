<?php
session_start();


$valid_username = "amanda";
$valid_password = "123";


$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: index.php"); 
} else {
    echo "<script>alert('Username atau password salah'); window.location.href='index.php';</script>";
}
?>
