<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Student Management System/Login</title>
        <link rel="shortcut icon" type="image/x-icon" href="image/logo.ico" />
        <!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo"> -->
        <!-- <link rel="stylesheet" type="text/css" href="css/search.css"> -->
    </head>
    <body >

<?php

    // echo "PHP Starts<br>";
    
    $eno = $_POST['enrollment'];
    $name = $_POST['mothername'];
    $lname = $_POST['mothername'];
    $mother = $_POST['mothername'];
    $adhar = $_POST['adharcard'];
    $dob = $_POST['dob'];
    $operation = $_POST['operation'];
    
    // echo $operation;

    $flag = 0;
    $count = 1;

    if($eno == null && $name == null && $lname == null && $mother == null && $adhar == null && $dob == null)
    {
        $sql = "select * from student";
    }
    else
    {
        $sql = "select * from student where ";

        if($eno != null)
        {
            $sql=$sql."EnrollmentId = '".$eno."'";
            $flag = 1;
        }
        if($name != null)
        {
            if($flag == 1)
            {
                $sql = $sql." and ";
            }
            else
            {
                $flag = 1;
            }
            $sql=$sql."firstname = '".$name."'";
        }
        if($lname != null)
        {
            if($flag == 1)
            {
                $sql = $sql." and ";
            }
            else
            {
                $flag = 1;
            }
            $sql=$sql."Surname = '".$lname."'";
        }
        if($mother != null)
        {
            if($flag == 1)
            {
                $sql = $sql." and ";
            }
            else
            {
                $flag = 1;
            }
            $sql=$sql."mothername = '".$mother."'";
        }
        if($adhar != null)
        {
            if($flag == 1)
            {
                $sql = $sql." and ";
            }
            else
            {
                $flag = 1;
            }
            $sql=$sql."AdharNumber = '".$adhar."'";
        }
        if($dob != null)
        {
            if($flag == 1)
            {
                $sql = $sql." and ";
            }
            else
            {
                $flag = 1;
            }
            $sql=$sql."dob = ".$dob;
        }
    }

    // echo $sql."<br>"; 
    
    $con = mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_select_db($con,"test1");
        // mysqli_select_db($con,"test");
        // $query = mysqli_query($con,"select * from student where religion = 'Muslim'");
        $query = mysqli_query($con,$sql);
        // echo "No. Of Data : ".mysqli_num_rows($query);
        echo "<table border = '1' cellpadding='10px' rules = 'all'>";
        echo "<tr>";
        while($row = mysqli_fetch_field($query))
        {  
            if($row -> name == 'request' || $row -> name == 'approved')
            {}
            else
            {
                echo "<th>".$row -> name."</th>";
            }
            // echo $row -> name."<br>";
        }
        echo "<th>Action</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($query))
        {
            echo "<tr>";
            $count = 0;
            while($count < 72)
            {
                echo "<td>".$row[$count]."</td>";
                $count++;
            }
            if($row[73] == '1')
            {
                echo "<td><input type='submit' value='Update'><br>
                            <input type='submit' value='Delete'>
                      </td>";
            }
            else if($row[73] == '0')
            {
                echo "<td><input type='submit' value='Request'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        die("Some Database Error!");
    }

?>

</body>
</html>