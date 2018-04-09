<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Stage 1</title>
</head>
<body>
    <h1> <span>HNG</span>Internship 4.0 </h1>

    <div id="clock">
        <div class="clock-body" id="clock-time">
            <?php 
                date_default_timezone_set('Africa/Lagos');
                 echo "<h2>". date('h:i') ."</h2>";
            ?>
        </div>
        <div class="clock-body" id="clock-date">
        <?php 
                echo "<h5>". date('l\, F jS Y') ."</h5>";
            ?>
        </div>
    </div>
</body>
</html>