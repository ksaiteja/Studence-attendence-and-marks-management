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
        position: relative;
        align-self: center;
        width: 82%;
        margin-left: 5%;
        height: 100px;
        border-radius: 8px;
        box-shadow: 2px 2px rgb(97, 86, 86);
        padding: 4%;
        display: flex;
        justify-content: center;
        align-items: center;
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

    #button1 {
        height: 100px;
        width: 30%;
        background-color: gray;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;

        margin: 10px;
    }

    #button2 {
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
    </style>

<body>
    <div class="right_nav">
        <h1 id="header">vardhaman college of engineering</h1><br>
        <h1 id="header">HELLO, ADMIN</h1>

        <div class="nav_div">
            <a href="logout.php">
                <p id="navr">Logout</p>
            </a>

        </div>
    </div>

    <div id="container">
        <div id="button1">
            <p><a id="marksButt" href="adminMarksUpload.php">UPLOAD INTERNAL MARKS</a></p>
        </div>
        <div id="button2">
            <p><a id="attButt" href="admin.php">UPLOAD ATTENDENCE</a></p>
        </div>
    </div>
</body>
</head>

</html>