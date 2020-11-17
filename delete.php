<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaselabitf.mysql.database.azure.com', 'filmzz@databaselabitf', 'film8844@', 'filmDATAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

echo $id;
$id=$_REQUEST['ID'];
$query = "DELETE FROM guestbook WHERE ID=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: show.php"); 
?>
