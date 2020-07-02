<?php
header('Content-Type: application/json');
$db = mysqli_connect('localhost','root','','dash');
if(mysqli_connect_errno($db))
{
	echo "Failed to connect";
}
else {
	$data_points = array();
	$result = mysqli_query($db,"SELECT work,progress from allottask");
	while($row=mysqli_fetch_array($result))
	{
		$point = array("label"=>$row['work'],"y"=>$row['progress']);
		array_push($dataPoints,$point);
	}

	echo json_encode($data_points,JSON_NUMERIC_CHECK);
}
mysqli_close($db);
?>
