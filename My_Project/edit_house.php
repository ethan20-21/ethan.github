<?php
include 'config.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $name = $_POST['house_name']; $location = $_POST['location'];
    $price = $_POST['price']; $desc = $_POST['description'];
    $conn->query("UPDATE boarding_houses SET house_name='$name', location='$location', price='$price', description='$desc' WHERE house_id=$id");
    header("Location: list_house.php");
}
$row = $conn->query("SELECT * FROM boarding_houses WHERE house_id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add House</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Edit House</h2>
<form method="POST">
  <fieldset>
    <legend>Add Property</legend>
    <div>
      <button type="button" onclick="fillAllDetails('Hilltop Haven Boarding House', 'Quezon City, Metro Manila', 2500.00, 'Clean, Secure, and student-friendly. Walking distance to universities and jeepney routes. Free wi-fi, CCTV, and common kitchen.')">Hilltop Haven Boarding House</button><br><br>
      <button type="button" onclick="fillAllDetails('Riverside Lodge', 'Iloilo City, near UP Visayas', 3200.00, 'Cozy rooms with basic amenities.')">Riverside Lodge</button><br><br>
      <button type="button" onclick="fillAllDetails('Metro Sleepspace', 'Tacloban City, Leyte', 1200.00, 'Affordable and conveniently located near the city center.')">Metro Sleepspace</button><br><br>
      <button type="button" onclick="fillAllDetails('Seaside Stay-in', 'Baguio City, near SLU', 2800.00, 'Relaxing environment with a view.')">Seaside Stay-in</button><br><br>
      <button type="button" onclick="fillAllDetails('Greenhill Residency', 'Baguio City, near SLU', 4500.00, 'Modern and spacious units with excellent facilities.')">Greenhill Residency</button><br><br>
    </div>
  </fieldset>
  <br>
  <fieldset>
    <legend>Property Details</legend>
    <label for="house_name">House Name:</label><br>
    <input type="text" name="house_name" id="house_name"><br><br>
    <label for="location">Location:</label><br>
    <input type="text" name="location" id="location"><br><br>
    <label for="price">Price:</label><br>
    <input type="number" step="0.01" name="price" id="price"><br><br>
    <label for="description">Description:</label><br>
    <textarea name="description" id="description"></textarea><br><br>
  </fieldset>
  <br>
    <button type="submit" name="update">Update</button>
       <a href='list_house.php'>Cancel</a>
    <br>
</form>

<script>
function fillAllDetails(houseName, location, price, description) {
  document.getElementById('house_name').value = houseName;
  document.getElementById('location').value = location;
  document.getElementById('price').value = price;
  document.getElementById('description').value = description;
}
</script>
</body>
</html>
