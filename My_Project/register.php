<h2>"Register Successfully!"</h2>
<?php
include 'config.php';
if (isset($_POST['register'])) {
    $name = $_POST['name']; $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $conn->query("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')");
    echo '<p style="text-align:center;"><a href="login.html">Login!</a></p>';
}
?>
<link rel="stylesheet" href="style.css">
