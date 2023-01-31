<?php

session_start();
header("Location: adminMarksUpload.php");
include "db_conn.php";

function validate($data)
{

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
}

$rollno = validate($_GET['roll']);
$subject = $_GET['subject'];
$cat1 = validate($_GET['c1']);
$cat2 = validate($_GET['c2']);
$aat = validate($_GET['c3']);

if ($sub == 'NULL') {
    header("Location: adminMarksUpload.php?error=please select subject name");
    exit(1);
}

$check1 = "select count(*) as NUMBER_OF_ROWS from internalmarks where rollno='$rollno' and subject='$subject'";
$p1 = oci_parse($conn, $check1);
oci_define_by_name($p1, 'NUMBER_OF_ROWS', $number_of_rows1);
oci_execute($p1);
oci_fetch($p1);
if ($number_of_rows1 == 0) {
    $sql4 = "insert into internalmarks (rollno,subject,cat1,cat2,aat) values('$rollno','$subject','$cat1','$cat2','$aat')";
    $res1 = oci_parse($conn, $sql4);
    oci_execute($res1);
} elseif ($number_of_rows1 == 1) {
    $sql5 = "update internalmarks set cat1='$cat1', cat2='$cat2',aat='$aat'  where rollno='$rollno' and subject='$subject'";
    $res1 = oci_parse($conn, $sql5);
    oci_execute($res1);
}
header("Location: adminMarksUpload.php?msg=uploaded successfully");