<?php

session_start();
include "db_conn.php";
$roll = $_SESSION['UNAME'];
?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: rgba(24, 146, 89, 0.8);
        background-repeat: repeat-y;
    }

    #header {
        margin-left: 30px;
        margin-top: 20px;
        color: aliceblue;

    }

    #container {
        background-color: rgb(249, 251, 253, .5);
        margin-top: 10px;
        align-self: center;
        width: 82%;
        margin-left: 5%;
        height: max-content;
        border-radius: 8px;
        box-shadow: 2px 2px rgb(97, 86, 86);
        padding: 4%;
    }

    #student {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #student td,
    #student th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }


    #student tr:nth-child(even) {
        background-color: #ddd;
    }



    #student th {
        padding-top: 12px;
        padding-bottom: 12px;

        background-color: #04AA6D;
        color: white;
    }

    #student1 {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;



    }

    #student1 td,
    #student1 th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }


    #student1 tr:nth-child(even) {
        background-color: #ddd;
    }



    #student1 th {
        padding-top: 12px;
        padding-bottom: 12px;

        background-color: #04AA6D;
        color: white;
    }

    img {
        height: 160px;
        width: 160px;
    }

    #navr {
        font-size: x-large;
        margin-bottom: 30px;
        color: #f2f2f2;
        text-decoration: underline;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        float: right;
        padding: 8px;
    }

    .nav_div {
        overflow: hidden;

        width: fit-content;
        float: right;
        margin-top: -30px;
        margin-right: 80px;
        left: 800px;

    }

    #marksButt {
        color: whitesmoke;
        text-decoration: none;
    }

    #marksButt:hover {
        color: whitesmoke;
        text-decoration: underline;

    }

    #button {
        height: 100px;
        width: 30%;
        background-color: gray;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }

    #attButt {
        color: whitesmoke;
        text-decoration: none;

    }

    #attButt:hover {
        color: whitesmoke;
        text-decoration: underline;


    }

    #student1 {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;



    }

    #student1 td,
    #student1 th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }


    #student1 tr:nth-child(even) {
        background-color: #ddd;
    }



    #student1 th {
        padding-top: 12px;
        padding-bottom: 12px;

        background-color: #04AA6D;
        color: white;
    }
    </style>


</head>

<body>

    <h1 id="header">Hello, <?php echo str_replace('_', " ", $_SESSION['NAME']); ?></h1>

    <div class="nav_div">
        <a href="logout.php">
            <p id="navr">Logout</p>
        </a>
    </div>
    <div id="container">
        <center>
            <?php
            $namex = str_replace('_', " ", $_SESSION['NAME']);
            $img_path = 'http://results.vardhaman.org/images/cse/' . $roll . '.jpg';
            echo "<table border='1' id='student1'>\n";

            echo "<tr>\n";
            echo "<td rowspan='4'><img src=" . $img_path . "></th>\n";
            echo "<td>" . $namex . "</th>\n";
            echo "</tr>\n";
            echo "<tr>\n";
            echo "<td>" . $roll . "</th>\n";
            echo "</tr>\n";
            echo "<tr>\n";
            echo "<td>" . 'computer science and engineering' . "</th>\n";
            echo "</tr>\n";
            echo "<tr>\n";
            echo "<td>" . '2020' . "</th>\n";
            echo "</tr>\n";
            echo "</table>\n";
            ?>
        </center>
        <br><br>
        <?php

        $select_stmt = "select * from internalmarks where rollno='$roll'";

        $stid = oci_parse($conn, $select_stmt);
        oci_execute($stid);

        echo "<table border='1' id='student1'>\n";

        echo "<tr>\n";

        echo "<th>" . 'SUBJECT' . "</th>\n";
        echo "<th>" . 'CAT-I' . "</th>\n";
        echo "<th>" . 'CAT-II' . "</th>\n";
        echo "<th>" . 'AAT' . "</th>\n";
        echo "</tr>\n";

        while ($row = oci_fetch_assoc($stid)) {
            echo "<tr>\n";

            echo "<td>" . $row["SUBJECT"] . "</td>\n";
            echo "<td>" . $row["CAT1"] . "</td>\n";
            echo "<td>" . $row["CAT2"] . "</td>\n";
            echo "<td>" . $row["AAT"] . "</td>\n";
            echo "</tr>\n";
        }

        echo "</table>\n";

        ?><br><br>


    </div>

</body>

</html>