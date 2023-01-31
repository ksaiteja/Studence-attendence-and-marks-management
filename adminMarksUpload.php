<html>

<head>
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

        display: inline-flex;

        color: aliceblue;
        padding: 8px;
        margin-left: 8px;
    }

    #container {
        background-color: rgb(249, 251, 253, .5);
        position: static;
        align-self: center;
        width: 82%;
        margin-left: 5%;
        height: max-content;
        border-radius: 8px;
        box-shadow: 2px 2px rgb(97, 86, 86);
        padding: 4%;
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

    #input_box {
        padding: 5px;
        height: 30px;
        width: 300px;
        border-radius: 5px;

    }

    #table {

        border-collapse: collapse;
    }

    th {
        padding: 5px;
        border: 1px solid black;
    }

    td {
        padding: 5px;
        border: 1px solid black;
    }

    #uploadBut {
        margin: auto;
        width: 30%;
        background-color: rgb(4, 4, 251);
        color: aliceblue;
        padding: 12px 20px;
        border-radius: 4px;
        border: 1px solid blue;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #uploadBut:hover {
        background-color: rgb(4, 4, 218);

    }

    #mbox {
        padding: 4px;
    }

    .msg {

        background: greenyellow;
        text-align: center;
        color: grey;

        padding: 10px;

        width: 15%;

        border-radius: 5px;

        margin: 5px auto;

    }

    .error {

        background: #F2DEDE;
        text-align: center;
        color: #0c0101;

        padding: 10px;

        width: 15%;

        border-radius: 5px;

        margin: 5px auto;

    }
    </style>

<body>
    <div class="right_nav">
        <h1 id="header">vardhaman college of engineering</h1><br>
        <h1 id="header">STUDENT INTERNAL MARKS</h1>

        <div class="nav_div">
            <a href="logout.php">
                <p id="navr">Logout</p>
            </a>

        </div>
    </div>

    <div id="container">
        <?php if (isset($_GET['msg'])) { ?>
        <p class="msg"><?php echo $_GET['msg']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="uploadMarks.php" method="get">
            Enter Roll No : <input type="text" id="input_box" placeholder="Enter roll no" name="roll"><br><br>
            Select Subject Name:
            <select name="subject" id="sub_name">
                <option value="NULL">Select subject</option>
                <option value="WT">WT</option>
                <option value="SE">SE</option>
                <option value="PE-1">PE-1</option>
                <option value="ML">ML</option>
                <option value="EITK">EITK</option>
                <option value="DAA">DAA</option>
                <option value="Internship-1">Internship-1</option>
                <option value="PAT">PAT</option>
                <option value="CDC">CDC</option>
            </select><br><br>
            <table id="table">
                <tr>
                    <th>CAT-I</th>
                    <th>CAT-II</th>
                    <th>AAT</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter CAT-I marks" name="c1" id="mbox"></td>
                    <td><input type="text" placeholder="Enter CAT-II marks" name="c2" id="mbox"></td>
                    <td><input type="text" placeholder="Enter AAT marks" name="c3" id="mbox"></td>
                </tr>
            </table><br><br>
            <button type="submit" id="uploadBut">upload</button>
        </form>
    </div>
</body>
</head>

</html>