<?php

    $data="StudentData.xlsx";
    $dir = "excel";
    $dirHandle = opendir($dir);
    while ($file = readdir($dirHandle)) 
    {
        if($file==$data) 
        {
            unlink($dir.'/'.$file);
        }
    }
    require_once 'Classes/PHPExcel.php';
    $excel = new PHPExcel();
    
    $DB_Server = "localhost";
    $DB_Username = "root";
    $DB_Password = "";
    $DB_DBName = "test";
    $DB_TBLName = "student";
    $filename = "StudentData";

    //create MySQL connection   
    $sql = "Select * from student";
    $Connect = @mysqli_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>");

    //select database   
    $Db = @mysqli_select_db($Connect,$DB_DBName) or die("Couldn't select database:<br>");   

    //execute query 
    $result = @mysqli_query($Connect,$sql) or die("Couldn't execute query:<br>"); 
    $row = 3;

    $excel -> setActiveSheetIndex(0);
    while($data = mysqli_fetch_object($result))
    {
        $excel -> getActiveSheet()
        -> setCellValue("A".$row, $data ->EnrollmentId)
        -> setCellValue("B".$row, $data ->Surname)
        -> setCellValue("C".$row, $data ->firstname)
        -> setCellValue("D".$row, $data ->secondname)
        -> setCellValue("E".$row, $data ->mothername)
        -> setCellValue("F".$row, $data ->AadhaarNumber)
        -> setCellValue("G".$row, $data ->permanentAddress)
        -> setCellValue("H".$row, $data ->permanentCity)
        -> setCellValue("I".$row, $data ->permanentPincode)
        -> setCellValue("J".$row, $data ->permanentPhone)
        -> setCellValue("K".$row, $data ->permanentMobile)
        -> setCellValue("L".$row, $data ->correspondanceAddress)
        -> setCellValue("M".$row, $data ->correspondanceCity)
        -> setCellValue("N".$row, $data ->correspondancePincode)
        -> setCellValue("O".$row, $data ->correspondancePhone)
        -> setCellValue("P".$row, $data ->correspondanceMobile)
        -> setCellValue("Q".$row, $data ->dob)
        -> setCellValue("R".$row, $data ->gender)
        -> setCellValue("S".$row, $data ->ph)
        -> setCellValue("T".$row, $data ->nationality)
        -> setCellValue("U".$row, $data ->caste)
        -> setCellValue("V".$row, $data ->subCaste)
        -> setCellValue("W".$row, $data ->minority)
        -> setCellValue("X".$row, $data ->religion)
        -> setCellValue("Y".$row, $data ->boardName)
        -> setCellValue("Z".$row, $data ->seatNumber)
        -> setCellValue("AA".$row, $data ->examCenter)
        -> setCellValue("AB".$row, $data ->yearOfPassing)
        -> setCellValue("AC".$row, $data ->schoolName)
        -> setCellValue("AD".$row, $data ->marksInfo)
        -> setCellValue("AE".$row, $data ->obtainedMarks)
        -> setCellValue("AF".$row, $data ->totalMarks)
        -> setCellValue("AG".$row, $data ->gseb)
        -> setCellValue("AH".$row, $data ->pecNumber)
        -> setCellValue("AI".$row, $data ->pecDate)
        -> setCellValue("AJ".$row, $data ->fecNumber)
        -> setCellValue("AK".$row, $data ->fecDate)
        -> setCellValue("AL".$row, $data ->collegeName)
        -> setCellValue("AM".$row, $data ->collegeCode)
        -> setCellValue("AN".$row, $data ->admissionYear)
        -> setCellValue("AO".$row, $data ->courseName)
        -> setCellValue("AP".$row, $data ->courseYear)
        -> setCellValue("AQ".$row, $data ->courseCode)
        -> setCellValue("AR".$row, $data ->faculty)
        -> setCellValue("AS".$row, $data ->facultyCode)
        -> setCellValue("AT".$row, $data ->searchKey)
        -> setCellValue("AU".$row, $data ->FormNumber)
        -> setCellValue("AV".$row, $data ->EmailId)
        -> setCellValue("AW".$row, $data ->SurityAddress)
        -> setCellValue("AX".$row, $data ->SurityPhone)
        -> setCellValue("AY".$row, $data ->Surityemailid)
        -> setCellValue("AZ".$row, $data ->ClinicalBatchNo)
        // -> setCellValue("BA".$row, $data ->FristYear(Result))
        // -> setCellValue("BB".$row, $data ->SecondYear(Result))
        // -> setCellValue("BC".$row, $data ->ThirdYearPart1(Result))
        // -> setCellValue("BD".$row, $data ->ThirdYearPart2(Result))
        -> setCellValue("BE".$row, $data ->InternshipOrderNo);
        
        $row++;
    }

    $excel -> getActiveSheet() -> getColumnDimension('A') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('B') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('C') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('D') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('E') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('F') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('G') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('H') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('I') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('J') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('K') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('L') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('M') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('N') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('O') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('P') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('Q') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('R') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('S') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('T') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('U') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('V') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('W') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('X') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('Y') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('Z') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AA') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AB') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AC') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AD') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AE') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AF') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AG') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AH') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AI') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AJ') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AK') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AL') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AM') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AN') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AO') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AP') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AQ') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AR') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AS') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AT') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AU') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AV') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AW') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AX') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AY') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('AZ') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('BA') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('BB') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('BC') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('BD') -> setWidth(30);
    $excel -> getActiveSheet() -> getColumnDimension('BE') -> setWidth(30);

    
    $excel -> getActiveSheet()
    ->setCellValue('A1','Student Data')
    ->setCellValue('A2','Enrollment ID')
    ->setCellValue('B2','Surname')
    ->setCellValue('C2','First Name')
    ->setCellValue('D2','Second Name')
    ->setCellValue('E2','Mother Name')
    ->setCellValue('F2','Aadhar Number')
    ->setCellValue('G2','Permanent Address')
    ->setCellValue('H2','Permanent City')
    ->setCellValue('I2','Permanent Pincode')
    ->setCellValue('J2','Permanent Phone')
    ->setCellValue('K2','Permanent Mobile')
    ->setCellValue('L2','Correspondance Address')
    ->setCellValue('M2','Correspondance City')
    ->setCellValue('N2','Correspondance Pincode')
    ->setCellValue('O2','Correspondance Phone')
    ->setCellValue('P2','Correspondance Mobile')
    ->setCellValue('Q2','DOB')
    ->setCellValue('R2','Gender')
    ->setCellValue('S2','PH')
    ->setCellValue('T2','Nationality')
    ->setCellValue('U2','Caste')
    ->setCellValue('V2','SubCaste')
    ->setCellValue('W2','Minority')
    ->setCellValue('X2','Religion')
    ->setCellValue('Y2','Board Name')
    ->setCellValue('Z2','Seat Number')
    ->setCellValue('AA2','Exam Center')
    ->setCellValue('AB2','Year Of Passing')
    ->setCellValue('AC2','School Name')
    ->setCellValue('AD2','Marks Info')
    ->setCellValue('AE2','Obtained Marks')
    ->setCellValue('AF2','Total Marks')
    ->setCellValue('AG2','GSEB')
    ->setCellValue('AH2','Pec Number')
    ->setCellValue('AI2','Pec Date')
    ->setCellValue('AJ2','Fec Number')
    ->setCellValue('AK2','Fec Date')
    ->setCellValue('AL2','College Name')
    ->setCellValue('AM2','College Code')
    ->setCellValue('AN2','Admission Year')
    ->setCellValue('AO2','Course Name')
    ->setCellValue('AP2','Course Year')
    ->setCellValue('AQ2','Course Code')
    ->setCellValue('AR2','Faculty')
    ->setCellValue('AS2','Faculty Code')
    ->setCellValue('AT2','Search Key')
    ->setCellValue('AU2','Form Number')
    ->setCellValue('AV2','Email ID')
    ->setCellValue('AW2','Surity Address')
    ->setCellValue('AX2','Surity Phone')
    ->setCellValue('AY2','Surity EmailID')
    ->setCellValue('AZ2','Clinical Batch NO.')
    ->setCellValue('BA2','First Year(Result)')
    ->setCellValue('BB2','Second Year(Result)')
    ->setCellValue('BC2','Third Year Part-1(Result)')
    ->setCellValue('BD2','Third Year Part-2(Result)')
    ->setCellValue('BE2','Internship Order No.');
    
    $excel -> getActiveSheet() -> mergeCells('A1:BE1');
    $excel -> getActiveSheet() -> getStyle('A1') -> getAlignment() -> setHorizontal('center');
    $excel -> getActiveSheet() -> getStyle('A1') -> applyFromArray(
        array(
            'font' => array(
                'size' => 24,
                'name' => 'Times New Roman',
            )
        )
    );
    $excel -> getActiveSheet() -> getStyle('A2:BE2') -> applyFromArray(
        array(
            'font' => array(
                'bold' => true,
                'name' => 'Times New Roman',
            )
        )
    );


    // header('Content-Type : application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    // header('Content-Disposition : attachment; filename = "StudentData.xlsx"');
    // header('Cache-Control : max-age=0');

    $file = PHPExcel_IOFactory::createWriter($excel,'Excel2007');
    // $file -> save('php://output'); 
    $file -> save('excel/StudentData.xlsx'); 

    //Download File
    $file = "excel/StudentData.xlsx";
    if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");
    $type = filetype($file);
    // Get a date and timestamp
    $today = date("F j, Y, g:i a");
    $time = time();
    // Send file headers
    header("Content-type: $type");
    header("Content-Disposition: attachment;filename=StudentData.xlsx");
    header("Content-Transfer-Encoding: binary"); 
    header('Pragma: no-cache'); 
    header('Expires: 0');
    // Send the file contents.
    set_time_limit(0); 
    readfile($file);

?>