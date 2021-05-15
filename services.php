<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Moz-Art</title>

    <style>
        html {
            min-height:100%;
            background:url(backCar.jpg);
            background-size:cover;
            box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7);
        }
        #trapezoid {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            border: 40px solid rgba(0,0,0,0);
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


<div style="margin-left: 400px; margin-right: 700px; background-image: url(bugatiDiv.jpg); box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7)">
<p style="font-size: 25px; color: white; margin-left: 10px">Car</p>
    <ul style="color: white">
        <li>Exterior Polishing</li>
        <li>Interior Cleaning</li>
        <li>Leather Treatment</li>
        <li>Window Treatment</li>
        <li>Nano Ceramic</li>
    </ul>
</div>

<div style="margin-left: 400px; margin-right: 700px; background-color: #7abaff; background-image: url(boat.jpg); box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7)">
<p style="font-size: 25px; color: white"">Boat</p>
<ul style="color: white">
    <li>Exterior Polishing</li>
    <li>Interior Cleaning</li>
    <li>Sealer</li>
    <li>Window Treatment</li>
    <li>Nano Ceramic</li>
</ul>
</div>

<div style="float: right; margin-top: -326px; margin-right: 400px; margin-left: 700px; background-color: #7abaff; height: 142px; width: 250px; background-image: url(motorcycle.jpg); box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7)">
<p style="font-size: 25px; color: white; margin-top: 0px">Motorcycle</p>
<ul style="color: white">
    <li>Polishing</li>
    <li>Nano Ceramic</li>
</ul>
</div>

<div style="float: right; margin-top: -160px; margin-right: 400px; margin-left: 700px; background-color: #7abaff; height: 142px; width: 250px; background-image: url(seadoo.jpg); box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.7)">
<p style="font-size: 25px; color: white; margin-top: 0px">Skidoo & Seadoo</p>
<ul style="color: white">
    <li>Polishing</li>
    <li>Nano Ceramic</li>
</ul>
</div>

</body>

</html>


<?php