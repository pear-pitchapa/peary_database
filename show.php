<html>

  <head>
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
    <script>
      function dele(param) 
      {
        alert(param)
        <?php
          $conn = mysqli_init();
          mysqli_real_connect($conn, 'databaselabitf.mysql.database.azure.com', 'filmzz@databaselabitf', 'film8844@', 'filmDATAB', 3306);
          if (mysqli_connect_errno($conn))
          {
              die('Failed to connect to MySQL: '.mysqli_connect_error());
          }
          $sql = "DELETE FROM guestbook WHERE ID=param";
          if ($conn->query($sql) === TRUE) {
            echo ('alert(param)');
          } else {
            echo ('alert("Error deleting record: " . $conn->error)');
          }
         ?>
      }
    </script>
  </head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>     

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaselabitf.mysql.database.azure.com', 'filmzz@databaselabitf', 'film8844@', 'filmDATAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="show.php">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="show.php">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Insert</a>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
<div class="container">
<h1 class="display-1">LAB Database Show</h1>
</div>
  
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="bg-success">
      <th width="50"> <div align="center">ID</div></th>
      <th width="50"> <div align="center">Name</div></th>
      <th width="350"> <div align="center">Comment </div></th>
      <th width="150"> <div align="center">Link </div></th>
      <th width="150"> <div align="center">action </div></th>
    </tr>
  </thead>
  
  <tbody>
<?php while($Result = mysqli_fetch_array($res))
{?>
    <tr>
      <td><?php echo $Result['ID'];?></td>
      <td><?php echo $Result['name'];?></td>
      <td><?php echo $Result['comment'];?></td>
      <td><?php echo $Result['link'];?></td>
      <td><?php echo('<button type="button" href="delete.php?id=<?php echo $Result['ID']; ?>" class="btn btn-danger" >Delete</button>'); ?> <button type="button" class="btn btn-warning">Change</button></td>
    </tr>
<?php
}
?>
  </tbody>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
