<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System/Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.ico" />
    <link rel="stylesheet" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
	<link rel="stylesheet" href="css/Navigation.css" />
</head>

<body > 
<table align="center"  width="100%"  cellspacing="0" cellpadding="0" border="0" style="position:absolute;top:0px;left:0px;border-collapse: collapse;padding: 0;margin: 0">
        <tr>
            <td><img src="image/logo.ico" style="width:10vw"/></td>
            <td><img src="image/hostel.jpeg" style="width:90vw"/></td>
        </tr>

		<tr>
			<td colspan="2">
				<ul class="topnav">
						<li>
								<a  href="home.php?open=edit" id="edit">EDIT</a>
						</li>
						<li>
								<a  href="home.php?open=insert" id="insert">INSERT</a>
						</li>
						<li>
								<a href="DownloadExcel.html" id="download">DOWNLOAD</a>
						</li>
						<li style="float:right">
								<a href="test1.php"  id="logout" >LOG OUT &nbsp;</a>
						</li>
				</ul>
				<br>
			</td>
		</tr>
		<tr>
		<td colspan="2" cellpadding="10px">
			<?php
				if(isset($_GET["open"]))
				{
					$temp = $_GET["open"];
					if($temp == 'edit')
					{
						include 'edit.html'; ?>

						<script>
							document.getElementById("search").classList.add("active");
						</script>

					<?php
					}
					else if($temp == 'insert')
					{
						include 'update.html'; ?>
					
						<script>
							document.getElementById("update").classList.add("active");
						</script>
					
					<?php
					}
					else if($temp == 'download')
					{
						include 'DownloadExcel.html'; ?>
					
						<script>
							document.getElementById("download").classList.add("active");
						</script>
					
					<?php
					}
				}
			?>
		</td>
		</tr>
    </table>

</body>

</html>