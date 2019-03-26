<!DOCTYPE html>

<?php

    // echo "PHP Starts<br>";
    // $con = mysqli_connect("localhost","root","");
    // if($con)
    // {
    //     mysqli_select_db($con,"test");
    //     $sql = "select * from admin where Admin_ID='{$name}'";
    // }
    // else
    // {
    //     die("Some Database Error!");
    // }
    // $result = mysqli_query($con,$sql);

?> 

<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System/Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.ico" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
	<link rel="stylesheet"  href="css/insert.css" /> 
	<script src="js/form.js"></script>
</head>

<body onload="window.scrollBy(0, 0);"> 
<form id="insertForm" action="a.php">
<div class="tab">
  <table>
        <tr>
            <td>Enrollment ID </td>
            <td><input type="text" name="EnrollmentId" placeholder="Enter Enrollment Number"  required /></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input type="text" name="Surname" placeholder="Enter Surname" required /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" placeholder="Enter Firstname" required /></td>
        </tr>
        <tr>
            <td>Second Name</td>
            <td><input type="text" name="secondname" placeholder="Enter Second Name" required /></td>
        </tr>
        <tr>
            <td>Mother Name</td>
            <td><input type="text" name="mothername" placeholder="Enter Mother Name" required /></td>
        </tr>
        <tr>
            <td>Adhaarcard Number </td>
            <td><input type="text" name="AdharNumber" placeholder="Enter Adhaarcard Number" required /></td>
        </tr>
        <tr>
            <td>Permanent Address</td>
            <td><textarea name="permanentAddress" placeholder="Enter Permanent Address" required ></textarea></td>
        </tr>
        <tr>
            <td>Permanent City</td>
            <td><input type="text" name="permanentCity" placeholder="Enter Permanent City" required /></td>
        </tr>
        <tr>
            <td>Permanent Pincode</td>
            <td><input type="text" name="permanentPincode" placeholder="Enter Permanent Pincode" required /></td>
        </tr>
        <tr>
            <td>Permanent Phone</td>
            <td><input type="text" name="permanentPhone" placeholder="Enter Permanent Phone" required /></td>
        </tr>
        <tr>
            <td>Permanent Mobile</td>
            <td><input type="text" name="permanentMobile" placeholder="Enter Permanent Mobile" required /></td>
        </tr>
    </table>
</div>

<div class="tab">
	<table>
		<tr>
            <td>Correspondance Address</td>
            <td><textarea name="correspondanceAddress" placeholder="Enter Correspondance Address" required ></textarea></td>
        </tr>
        <tr>
            <td>Correspondance City</td>
            <td><input type="text" name="correspondanceCity" placeholder="Enter Correspondance City" required /></td>
        </tr>
        <tr>
            <td>Correspondance Pincode</td>
            <td><input type="text" name="correspondancePincode" placeholder="Enter Correspondance Pincode" required /></td>
        </tr>
        <tr>
            <td>Correspondance Phone</td>
            <td><input type="text" name="correspondancePhone" placeholder="Enter Correspondance Phone" required /></td>
        </tr>
        <tr>
            <td>Correspondance Mobile</td>
            <td><input type="text" name="correspondanceMobile" placeholder="Enter Correspondance Mobile" required /></td>
        </tr>
        <tr>
            <td>Date Of Birth</td>
            <td><input type="date" name="dob" placeholder="Enter Date Of Birth" required /></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><label for="Male1"><input type="radio" id="Male1" name="gender" value="Male"/>Male</label><label for="Female1"><input type="radio" id="Female1" name="gender" value="Female" />Female</label></td>
        </tr>
        <!-- <tr>
            <td>Ph</td>
            <td><input type="text" name="ph" placeholder="Enter Ph" required /></td>
        </tr> -->
        <tr>
            <td>Nationality</td>
            <td><input type="text" name="nationality" placeholder="Enter Nationality" required /></td>
        </tr>
        <!-- <tr>
            <td>Caste</td>
            <td><input type="text" name="caste" placeholder="Enter Caste" required /></td>
        </tr> -->
        <tr>
            <td>Sub Caste</td>
            <td><input type="text" name="subCaste" placeholder="Enter SubCaste" required /></td>
        </tr>
        <tr>
            <td>Minority</td>
            <td><input type="radio" name="minority" value="yes" />YES<input type="radio" name="minority" value="no" />NO</td>
        </tr>
        <tr>
            <td>Religion</td>
            <td><input type="text" name="religion" placeholder="Enter Religion" required /></td>
        </tr>
        <tr>
            <td>Seat No.</td>
            <td><input type="text" name="seatNumber" placeholder="Enter Seat NO." required /></td>
        </tr>
        <tr>
            <td>Exam Center</td>
            <td><input type="text" name="examCenter" placeholder="Enter Exam Center" required /></td>
        </tr>
        <tr>
            <td>Year Of Passing</td>
            <td><input type="number" name="yearofpassing" placeholder="Enter Year OF Passing" required /></td>
        </tr>
        <tr>
            <td>School Name</td>
            <td><input type="text" name="schoolName" placeholder="Enter School Name" required /></td>
        </tr>
        <tr>
            <td>Marksheet Info.</td>
            <td><input type="text" name="marksheetInfo" placeholder="Enter Marksheet Info." required /></td>
        </tr>
        <tr>
            <td>Obtained Marks</td>
            <td><input type="number" name="obtainedMarks" placeholder="Enter Obtained Marks" required /></td>
        </tr>
        <tr>
            <td>Total Marks</td>
            <td><input type="number" name="totalMarks" placeholder="Enter Total Marks" required /></td>
        </tr>
        <!-- <tr>
            <td>GSEB</td>
            <td><input type="text" name="GSEB" placeholder="Enter GSEB" size="25" required /></td>
        </tr> -->
    </table>
</div>

<div class="tab">
  <table>
        <tr>
            <td>PecNumber</td>
            <td><input type="text" name="pecNumber" placeholder="Enter PecNumber" required /></td>
        </tr>
        <tr>
            <td>PecDate</td>
            <td><input type="date" name="pecdate" placeholder="Enter PecDate" required /></td>
        </tr>
        <tr>
            <td>FecNumber</td>
            <td><input type="text" name="fecNumber" placeholder="Enter FecNumber" required /></td>
        </tr>
        <tr>
            <td>FecDate</td>
            <td><input type="date" name="fecdate" placeholder="Enter FecDate" required /></td>
        </tr>
        <tr>
            <td>Faculty</td>
            <td><input type="text" name="faculty" placeholder="Enter Faculty" required /></td>
        </tr>
        <tr>
            <td>Faculty Code</td>
            <td><input type="number" name="facultyCode" placeholder="Enter Faculty Code" required /></td>
        </tr>
        <tr>
            <td>College Name</td>
            <td><input type="text" name="collegeName" placeholder="Enter College Name" required /></td>
        </tr>
        <tr>
            <td>College Code</td>
            <td><input type="number" name="collegeCode" placeholder="Enter College Code" required /></td>
        </tr>
        <tr>
            <td>Admission Year</td>
            <td><input type="text" name="admissionYear" placeholder="Enter Admission Year" required /></td>
        </tr>
        <tr>
            <td>Course Name</td>
            <td><input type="text" name="courseName" placeholder="Enter Course Name" required /></td>
        </tr>
        <tr>
            <td>Course Year</td>
            <td><input type="number" name="courseYear" placeholder="Enter Course Year" required /></td>
        </tr>
        <tr>
            <td>Course Code</td>
            <td><input type="number" name="courseCode" placeholder="Enter Course Code" required /></td>
        </tr>
        <tr>
            <td>Search Key</td>
            <td><input type="text" name="searchKey" placeholder="Enter Search Key" required /></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="email" name="EmailId" placeholder="Enter Email ID" required /></td>
        </tr>
    </table>
</div>

<div class="tab">
  <table>
        <tr>
            <td>Surity Address</td>
            <td><textarea name="SurityAddress" placeholder="Enter Surity Address" required ></textarea></td>
        </tr>
        <tr>
            <td>Surity Phone</td>
            <td><input type="text" name="SurityPhone" placeholder="Enter Surity Phone" required /></td>
        </tr>
        <tr>
            <td>Surity Mobile</td>
            <td><input type="email" name="Surityemailid" placeholder="Enter Surity Email" required /></td>
        </tr>
        <tr>
            <td>First Year Result</td>
            <td><input type="text" name="FirstYear" placeholder="Enter First Year Result" required /></td>
        </tr>
        <tr>
            <td>Second Year Result</td>
            <td><input type="text" name="SecondYear" placeholder="Enter Second Year Result" required /></td>
        </tr>
        <tr>
            <td>Third Year Part-1 Result</td>
            <td><input type="text" name="ThirdYearP1" placeholder="Enter Third Year Part1 Result" required /></td>
        </tr>
        <tr>
            <td>Third Year Part-2 Result</td>
            <td><input type="text" name="ThirdYearP2" placeholder="Enter Third Year Part2 Result" required /></td>
        </tr>
        <tr>
            <td>Clinical Batch No.</td>
            <td><input type="text" name="ClinicalBatchNo" placeholder="Enter Clinical Batch No." required /></td>
        </tr>
        <tr>
            <td>Internship Order No.</td>
            <td><input type="text" name="InternshipOrderNo" placeholder="Enter Internship Order No." required /></td>
        </tr>
    </table>
</div>

<div style="overflow:auto;">
  <div style="float:center;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)" >Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
<script>
var currentTab = 0;
showTab(currentTab); 
</script>
</body>
</html>