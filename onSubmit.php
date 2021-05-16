<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moz-Art</title>

    <style>
        p{
            text-align: center;
            font-size: 25px;
            color: white;
        }

        html {
            min-height:100%;
            background:url(backCar.jpg);
            background-size:cover;
            box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7);
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
        <img style="width: 30%" src="logo.jpg" class="logo">
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


$dbhost = '127.0.0.1:3307';
$dbuser = 'root';
$dbpass = '';
$db = 'test';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
    die("Could not connect: <br>");
}
echo "<p>Connected Successfully</p>";


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
