
<?php
include 'config.php';
if (isset($_POST['add'])) {
    $user_id = $_SESSION['user']['user_id'];
    $house_name = $_POST['house_name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $conn->query("INSERT INTO boarding_houses (user_id, house_name, location, price, description)
                  VALUES ('$user_id', '$house_name', '$location', '$price', '$desc')");
    header("Location: dashboard.php");
}
?>
