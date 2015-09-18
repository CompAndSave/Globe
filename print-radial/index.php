<!-- GET DATA -->
<?php
if (!empty($_POST['submit'])) {
	$radialNum = $_POST["radialNum"];
}
else{
	$radialNum = 0;
}
if(!empty($_GET['radialNum'])){
	$radialNum = $_GET['radialNum'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Radial</title>
</head>
<body>
<form action="index.php" method="POST" name="printRadial">
	<label>Number of radial div to print:</label>
	<input type="number" name="radialNum" id="radialNum" />
	<input type="hidden" name="radNum" id="radNum" value="<?php echo $radialNum; ?>"/>
	<input type="submit" value="Submit" name="submit" onclick="reset_all();" />
	<?php
		//Check if the radialNum is divisible by 360
		if ($radialNum !=0){
			if (360%$radialNum == 0){
	   			$rad = $radialNum;
	   		}
	   		else{
	   			echo "<div>
					<p>You won't be able to get a perfect radial.</p>
					<p>
					<a href='#' id='roundup' onclick='roundUp();'>Round Up</a>
					OR
					<a href='#' id='rounddown' onclick='roundDown();'>Round Down</a>
					your number.
					</p>
	   			</div>";
	   		}
	   	}
	?>
</form>
<script>
	function reset_all(){
		var content = document.getElementById("htmlcode").innerHTML;
		if(content != empty){
			document.getElementById("htmlcode").innerHTML = "";
		}
		document.getElementById["radialNum"].reset();
	}
	function roundUp(){
		/* Round up radialNum to the nearest number divisible by 360*/
		var counter = document.getElementById('radNum').value;
		if(counter!=0){
			do{
				counter++;
			}while (360%counter!=0);
			window.location.href = "index.php?radialNum="+ counter;
		}
		
	}
	function roundDown(){
		/* Round down radialNum to the nearest number divisible by 360*/
		var counter = document.getElementById('radNum').value;
		if(counter!=0){
			do{
				counter--;
			}while (360%counter!=0);
			window.location.href = "index.php?radialNum="+ counter;
		}
	}
</script>
<div id="htmlcode">
<!-- to print out the code -->
	<?php
		$i=0;
		if(!empty($rad)){
			echo "<p>Copy paste the html code below to your radial container</p>";
			echo "<div style='background-color:#f4f4f4; width:300px; padding: 30px; '>";
			while ($i<=360){
				$code = "<div class='radial radial-".$i."'></div>";
				echo "<pre>".htmlspecialchars($code)."</pre>";
				$i= $i+ $rad;
			}
			echo "</div>";
		}
	?>
</div>

</body>
</html>
