<?php

    $con = mysqli_connect("localhost","root","") or die("die");
    mysqli_select_db($con,"test1");
    $sql = "select * from student where request = 1 and permanentCity = 'SURAT'";
    $result = mysqli_query($con,$sql);

    echo "<form>";
    echo "<table border = '1' cellpadding='10px' rules = 'all'>";
        echo "<tr>";
        while($row = mysqli_fetch_field($result))
        {  
            echo "<th>".$row -> name."</th>";
            // echo $row -> name."<br>";
        }
        echo "<th>Check</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            $count = 0;
            while($count < 74)
            {
                echo "<td>".$row[$count]."</td>";
                $count++;
            }
            echo "<td><input type='checkbox' id=".$row[0]." name=".$row[0]." value=".$row[0]."></td>";
            echo "</tr>";
        }
        echo "</table><input type='Button' value='SelectAll'>
            <input type='submit' value='Approve'></form>";

?>