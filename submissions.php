<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moz-Art</title>

    <style>

        label {
            color: #bbbbbb;
        }

        html {
            min-height:100%;
            background:url(backCar.jpg);
            background-size:cover;
            box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7);
        }

        .select {
            color: antiquewhite;
        }

        .box {
            background-color: #141d43;
            width: 300px;
            padding: 25px;
            display: block;
            margin: 0 auto;
        }
        form label{
            color: whitesmoke;
        }
        form input {
            background-color: #f2f9fa;
            font-size: 150%;

        }

        .button {
            background-color: #dbdbde;
            /* Green */
            border: none;
            color: #141d43;
            padding: 15px 32px;
            margin-left: 100px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .navbar {
            font-family: "Baskerville Old Face", serif;
            position: sticky;
            top: 0;
            display:flex;
            overflow:hidden;
            justify-content: center;
            height: 50px;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 4px;
            transition: all 0.5s ease;
        }
        .navbar a:hover {
            background:#dbdbde;
            color: black;
            border-radius:5px;
        }
        body{
            font-family: "Baskerville Old Face", serif;
        }

    </style>

</head>

<body>
<header style="background-color: black">

    <div style="text-align: center" class="row1">
        <img style="width: 30%" src="logo.jpg" class="logo" alt="logo">
    </div>
    <nav class="navbar">
        <div>
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="submissions.php">Submissions</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </nav>

</header>
<?php
$nameError = $emailError = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $type = $_POST['type'];
    $valid = true;

    if(empty($name)){
        $valid=false;
        $nameError = "Name missing";
    }

    if(empty($email)){
        $valid=false;
        $emailError = "Email missing";
    }

    if(empty($phone)){
        $valid=false;
        $emailError = "Phone missing";
    }

    if (!isset($type)){
        $valid=false;
        $emailError = "Vehicle type missing";
    }

    if($valid){
        $dbhost = '127.0.0.1:3307';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'test';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if (!$conn) {
            die("Could not connect: <br>");
        }
        echo "<p>Connected Successfully</p>";

        $sqlQuery = "INSERT INTO submission (name, email, phone, type) VALUES ('$name', '$email', '$phone', '$type');";
        $result = $conn->query($sqlQuery);

        if ($conn->query($sqlQuery) === TRUE) {
            echo "<p>Submission created!</p>";
        }

        mysqli_close($conn);
    }
}

?>
<br>
<div class="box">
    <p style="color: white; font-size: 30px; text-align: center">Ask for Submission</p><br>
    <form name="userInfo" method="post" action="submissions.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" autofocus="autofocus" required><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <div class="select">Select Type:
            <p style="color: red">*Required</p></div>
        <input type="checkbox" name="type" value="isChecked">
        <label for="car"> Car</label>
        <input type="checkbox" name="type" value="isChecked">
        <label for="boat"> Boat</label>
        <input type="checkbox" name="type" value="isChecked">
        <label for="moto"> Moto</label><br><br>
        <input type="submit" class="button" value="Send">

    </form>
</div>

</body>
</html>