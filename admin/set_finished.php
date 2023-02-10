<?php
$id=0;
require_once("../connection.php");
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$query = "UPDATE `trips` SET `trip_status`='Finished' WHERE `id`= $id";
if (mysqli_query($conn, $query)) {
    header("Location: all_trips.php?status=Fin");
    exit;
} else {
    // echo$query;
    echo mysqli_error($conn);
}
// Close the connection
mysqli_close($conn);

echo $id;
?>