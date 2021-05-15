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
    </style>

</head>

<body>
<header style="background-color: black">

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
<br>
<div class="box">
    <p style="color: white; font-size: 30px; text-align: center">Ask for Submission</p><br>
    <form method="post" action="registerSub.php" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <div class="select">Select Type: <br><br></div>
        <input type="checkbox" name="type" value="Car">
        <label for="car"> Car</label>
        <input type="checkbox" name="type" value="Boat">
        <label for="boat"> Boat</label>
        <input type="checkbox" name="type" value="Moto">
        <label for="moto"> Moto</label><br><br>
        <input type="submit" class="button" value="Send">
    </form>
</div>

</body>

</html>

<?php