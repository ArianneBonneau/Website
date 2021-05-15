<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Moz-Art</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>

        body {
            min-height:100%;
            background:url(backCar.jpg);
            background-size:cover;
            box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.3);
        }
        p {
            float: right;
            margin-right: 575px;
            text-align: center;
            font-size: larger;
        }
        #trapezoid {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            border: 80px solid rgba(0,0,0,0);
            border-top: 0 solid;
            border-bottom: 100px solid rgba(1, 1, 1, .4);
            -webkit-border-radius: 20px 20px 0 0;
            border-radius: 20px 20px 0 0;
            font: normal 100%/normal Arial, Helvetica, sans-serif;
            color: rgba(0,0,0,0.2);
            -o-text-overflow: clip;
            text-overflow: clip;
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            margin-top:-53px;
            width: 700px;
            position: relative;
            transition: all 0.7s ease;
            padding-left:7%;
        }
        .navbar {
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
        p{
            text-align: center;
            font-size: 25px;
            color: white;
        }
    </style>

</head>

<body>
<header style="background-color: black; color: white">

    <div style="text-align: center" class="row1">
        <img style="width: 30%" src="logo.jpg" class="logo">
    </div>
    <nav class="navbar">
        <div id="trapezoid">
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="submissions.php">Submissions</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </nav>

</header>
<?php


$dbhost = '127.0.0.1:3307';
$dbuser = 'root';
$dbpass = '';
$db = 'test';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
    die("Could not connect: <br>");
}
echo "<p>Connected Successfully</p><br>";


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$type = $_POST["type"];


$sqlQuery = "INSERT INTO submission (name, email, phone, type) VALUES ('$name', '$email', '$phone', '$type');";
$result = $conn->query($sqlQuery);

if ($conn->query($sqlQuery) === TRUE) {
    echo "<p>Submission created!</p>";
}


mysqli_close($conn);
?>

</body>
</html>




