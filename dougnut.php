<?php
// session_start();
// $username=$_SESSION['username'];
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
	echo "Connected";
}
$sql="select count(distinct fromdate) as statusnum from leaves where status='no'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Email Categories",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			// absent

			{ y: <?php echo $row["statusnum"]; ?>, label: "No" },
			// present
      
			// { y: 28, label: "Yes" }
      // ,


			// { y: 10, label: "Labels" },
			// { y: 7, label: "Drafts"},
			// { y: 15, label: "Trash"},
			// { y: 6, label: "Spam"}
		]
	}]
});

chart.render();

}
<?php }
}
?>
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

<script type="text/javascript" src="jquery.canvas.min.js"></script>
<script src="canvasjs.min.js"></script>
</body>
</html>
