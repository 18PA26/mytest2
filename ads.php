<?php
$f=$_POST['v1'];
$s=$_POST['v2'];
$t=$_POST['v3'];
$s1=$_POST['v4'];
$ar=array($f,$s,$t);
if(isset($_POST["r1"]))
{

	if($_POST["r1"]=='ass')
	{
		echo"<br><br><u><h3>Assending order</h3></u></br>";
		sort($ar);
		
		foreach ($ar as $val) {
			echo"<br>$val<br>";
		}
	}


	if($_POST["r1"]=='des')
	{
		echo"<br><br><u><h3>Descending order</h3></u></br>";
		rsort($ar);
		foreach ($ar as $val) {
			echo "<br>$val<br>";
		}
    }
    if($_POST["r1"]=='searchj')	
		{
			echo"<br><br><u><h3>Searching </h3></u></br>";
if(in_array($s1,$ar)) {

	echo "<br> $s1 The element  is found";
}
	                                      
else{

	echo "<br>  $s1 The element  is not found";
	

}

	}

}

?>


