<?php
include 'config.php';
if (isset($_POST['login'])) {
    $email = $_POST['email']; $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
        } else echo "<h2>Wrong password!</h2>";
    } else echo "<h2>User not found!</h2>";
}
echo "<br><a href='login.html'><h3>Retry!</h3></a>";
?>

