<?php
$id=0;
require_once("../connection.php");
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$query = "UPDATE `users` SET `admin`=1 WHERE `id`= $id";
if (mysqli_query($conn, $query)) {
    header("Location: users.php?status=adminDone");
    exit;
} else {
    // echo$query;
    echo mysqli_error($conn);
}
// Close the connection
mysqli_close($conn);

echo $id;
?>