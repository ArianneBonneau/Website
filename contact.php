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
            box-shadow:inset 0 0 0 5000px rgba(0, 0, 0, 0.7);
        }
        p {
            float: right;
            margin-right: 575px;
            text-align: center;
            font-size: larger;
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
        .contact {
            text-decoration: none;
            color: white;
        }

        .contact:hover{
            text-decoration: underline;
            color: #7abaff;
        }
        body{
            font-family: "Baskerville Old Face", serif;
        }
    </style>

</head>

<body>
<header style="background-color: black; color: white">

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

<br><br><br>

<div>
    <div>
        <img style="margin-left: 500px" src="fbIcon.png">
        <p style="margin-right: 590px"><a class="contact" href="https://www.facebook.com/Moz-Art-polissage-102588678167635">Moz-Art Polissage</a></p>
    </div>
    <br>
    <div>
        <img style="margin-left: 500px" src="igIcon.png">
        <p><a class="contact" href="#">@Moz-art_Polissage</a></p>
    </div>
    <br>
    <div>
        <img style="margin-left: 500px" src="emailIcon.png">
        <p style="margin-right: 515px"><a class="contact" href="mailto:mozartpolissage@gmail.com">mozartpolissage@gmail.com</a></p>
    </div>
    <br>
    <div>
        <img style="margin-left: 500px" src="phoneIcon.png">
        <p style="margin-right: 625px"><a class="contact" href="tel:+5147305983">514-730-5983</a></p>
    </div>

</div>


</body>

</html>


