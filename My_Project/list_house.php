<body>
<div class="container">
<br>
    <div class="button-container"><a href="dashboard.php">Back To Dashboard</a>
<br><br>
<?php
include 'config.php';
$result = $conn->query("SELECT * FROM boarding_houses");
while ($row = $result->fetch_assoc()) {
    echo "<hr><br><h4>".$row['house_name']."</h4>";
    echo "<p>Location: ".$row['location']." | Price: P".$row['price']."</p>";
    echo "<p>".$row['description']."</p><br>";
    echo "<a href='edit_house.php?id=".$row['house_id']."'>Edit</a> | <a href='delete_house.php?id=".$row['house_id']."'>Delete</a><br><br>";
}
?>
</body>
<link rel="stylesheet" href="style.css">