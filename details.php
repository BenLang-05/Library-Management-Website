<!DOCTYPE html>
<html>
    <head><title>Record Details</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tabsCSS.css">
    </head>
    <script src="dailyweatherdata.js"></script>

    <div class="scroll">
        <div class="progress">
            <div class="bar" id="myBar"></div>
        </div>
    </div>

    <body style="  background-color: #25d3bc;">
    <img src="logo.png" alt="logo" class="center2">

    <div id="nav">
    <ul>
        <li><a href = "CV.html">CURRICULUM VITAE</a></li>
        <div class="subnav">
            <button class="subButton">WEATHER<i class=" fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <li><a href="Weather.html">TEMPERATURE</a></li>
                    <li><a href = "humidity.html">HUMIDITY</a></li>
                </div>
        </div>
        <li><a href = "viewRecords.php"> VIEW RECORDS</a></li>
        <li style="float:right;"><a href = "homePage.html">CLOSE</a></li>
        <li style="float: right;"><a href = "session.php">LOG IN</a></li>


    </ul>
    </div>
<div id="style" class="box" class="recordText">

<?php

    $requested = $_GET['title'];
    $handle = fopen("records.csv", "r");
    while(($buffer = fgets($handle, 4096)) !==false){
        $details=explode(',',$buffer);
        if($details[0] ==$requested){
?>
            <h1>Title: <?=$details[0]?></h1>
            <strong>Author: </strong><?=$details[1]?><br>
            <strong>Year: </strong><?=$details[2]?><br>
            <strong>Journal: </strong><?=$details[3]?><br>
            <strong>DOI: </strong><?=$details[4]?><br>
            <strong>School: </strong><?=$details[5]?>
<?php   
        }
    }
    fclose($handle);

?>
</div>
    </body>
</html>