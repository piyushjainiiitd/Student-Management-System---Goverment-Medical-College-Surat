<html>
<?php
	if(isset($_POST["down1"]))
	{
	$file="demo.xls";
	$test="<table border='1'><tr>";
	$conn = new mysqli('localhost', 'root', ''); 
	mysqli_select_db($conn, 'test'); 
	$sql = "";
	$columnHeader = ''; 
	for($i=1;$i<73;$i++)
	{
		if(isset($_POST[$i]))
		{
			$columnHeader = $columnHeader.$_POST[$i]."\t";
			if($sql=="")
			{
				$sql=$_POST[$i];
			}
			else
			{
				$sql=$sql.",".$_POST[$i];
			}
			$test=$test."<th>".$_POST[$i]."</th>";
		}
	}
	$test=$test."</tr>";
	$sql="select ".$sql." from student";
	$setRec = mysqli_query($conn, $sql); 
	$setData = ''; 
	//echo $sql;
	while($rec = mysqli_fetch_row($setRec)) 
	{ 
		$rowData ='<tr>'; 
		foreach ($rec as $value) 
		{ 
			$value = '<td>' . $value . '</td>'; 
			$rowData .= $value; 
		} 
		$setData =$rowData.'</tr>';
		$test=$test.$setData;
	}
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=$file");
	echo $test;
}
?>
</html>