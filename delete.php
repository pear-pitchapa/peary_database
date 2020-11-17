<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaselabitf.mysql.database.azure.com', 'filmzz@databaselabitf', 'film8844@', 'filmDATAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id=$_REQUEST['id'];
echo $id;
$sql = "DELETE FROM guestbook WHERE ID=$id"; 
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
if ($done)
{
    header("show.php");
    exit;
}
?>
