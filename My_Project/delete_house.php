<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM boarding_houses WHERE house_id=$id");
header("Location: list_house.php");
?>

