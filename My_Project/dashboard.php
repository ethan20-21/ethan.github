<body>
<div class="container">
<?php
include 'config.php';
if (!isset($_SESSION['user'])) header("Location: login.html");
echo "<h1>Welcome!<br> " . $_SESSION['user']['name'] . "</h1><br>";
echo "<a href='add_house.html'>Add Boarding House</a>
<a href='list_house.php'>View Listings</a>
<a href='logout.php'>Logout</a><br><br>";
?>
<link rel="stylesheet" href="style.css">