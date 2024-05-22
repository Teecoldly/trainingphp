<?php
include 'cons.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
</head>
<body>
    <h1>View User</h1>
    <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
    <p><strong>Created At:</strong> <?php echo $row['created_at']; ?></p>
    <a href="index.php">Back to User List</a>
</body>
</html>