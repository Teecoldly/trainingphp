<?php
include 'cons.php';

$id = $_GET['id'];

if ( isset($_POST["update"])&&$_POST["update"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
}

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="update.php?id=<?php echo $id; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="submit" name="update" value="Update">
    </form>
    <a href="index.php">Back to User List</a>
</body>
</html>