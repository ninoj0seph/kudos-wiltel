<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WilTelCom</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <script src="javascript/indexScript.js"></script>
</head>
<body>
<?php require_once '../requires/navbar.php'?>
<div class="slider">
    <ul class="slides">
        <li>
            <img src="images/iphone7.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Iphone</h3>
                <h5 class="light grey-text text-lighten-3">This is 7.</h5>
            </div>
        </li>
        <li>
            <img src="images/s8.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Samsung Galaxy S8 & S8 Plus</h3>
                <h5 class="light grey-text text-lighten-3">Infinitely amazing</h5>
            </div>
        </li>
        <li>
            <img src="images/experiaHero.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h5>Make the ordinary extraordinary.<br>
                    Xperia® XZ Premium</h5>
                <p class="light grey-text text-lighten-3">Awarded best new Smartphone at MWC 2017.</p>
            </div>
        </li>
        <li>
            <img src="images/htcu11.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>htc u11</h3>
                <h5 class="light grey-text text-lighten-3">Squeeze Brilliant U</h5>
            </div>
        </li>
    </ul>
</div>
<div>
    <div class="container">
        <div class="row picsContainer">
            <div class="col s4">
                <img src="images/rim.png">
            </div>
            <div class="col s4">
                <img src="images/apple.png">
            </div>
            <div class="col s4">
                <img src="images/samsung.png">
            </div>
        </div>
        <div class="row picsContainer">
            <div class="col s4">
                <img src="images/lg.png">
            </div>
            <div class="col s4">
                <img src="images/htc.png">
            </div>
            <div class="col s4">
                <img src="images/cherry.png">
            </div>
        </div>
        <div class="row picsContainer">
            <div class="col s4">
                <img src="images/myphone.png">
            </div>
            <div class="col s4">
                <img src="images/sony.png">
            </div>
            <div class="col s4">
                <img src="images/nokia.png">
            </div>
        </div>
    </div>
</div>
<?php require_once '../requires/footer.php'?>
</body>
</html>