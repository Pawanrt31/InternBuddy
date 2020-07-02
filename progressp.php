<?php
  $db = mysqli_connect('localhost','root','','dash');
  if(!$db)
  {
    echo "Not connected";
  }
  $sql = "select avg(progress) as Average from allottask where name='Ankit'";
  $result = mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($result))
    {
      echo $row["Average"]." ";
    }

  ?>
