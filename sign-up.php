<html>

<head>
    <script>

    </script>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url("image1.jpg");
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

    #login_box {
        background-color: antiquewhite;
        height: 82%;
        width: 28%;
        border-radius: 8px;
        box-shadow: 2px 2px rgb(97, 86, 86);
        margin: auto;
        padding: 2%;
        margin-top: 35px
    }

    #signin_header {
        font-size: x-large;
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-decoration: underline rgb(58, 58, 224);
        padding: 20px 0px;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    #input_box,
    select,
    #dob {

        width: 100%;
        padding: 12px 15px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }

    #submit_but {
        margin: auto;
        width: 50%;
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

    #submit_but:hover {
        background-color: rgb(4, 4, 218);

    }
    </style>
</head>

<body>

    <div id="login_box">
        <h1 id="signin_header">SIGNUP</h1>
        <label for="firstname">Firstname</label>
        <input type="text" placeholder="Enter first name" id="input_box"><br>
        <label for="lastname">Lastname</label>
        <input type="text" placeholder="Enter last name" id="input_box">
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <label for="dob">DOB</label>
        <input type="date" name="dob" id="dob">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter username" id="input_box"><br>
        <label for="password">Password</label>
        <input type="password" placeholder="Enter password" id="input_box">
        <button id="submit_but">SUBMIT</button>
        <h8 style="padding-top: 10px; display:inline-block;">Already a user? <a href="sign-in.html"
                style="text-decoration: none; color:blue;">SIGNIN</a></h8>
        <h8 style="padding-top: 10px; display:inline-block;">THIS IS JUST A PROTOTYPE IT WON'T WORK</h8>
    </div>
</body>

</html>