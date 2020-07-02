<?php
session_start();
header('Content-Type: application/json');

$con = mysqli_connect("localhost","root","","dash");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    $name = $_SESSION["name"];
    $result = mysqli_query($con, "SELECT work,progress FROM allottask where name='$name'");

    while($row = mysqli_fetch_array($result))
    {

        $point = array("label" => $row['work'] , "y" => $row['progress']);

        array_push($data_points, $point);
    }

    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>
