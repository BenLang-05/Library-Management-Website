<?php session_start();
    if(!isset($_SESSION['loggedin'])) header("Location: session.php");
    if($_SESSION['loggedin']===FALSE) header("Location: session.php");
?>
<!DOCTYPE html>
<head><title>Admin page</title>
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
        <li style="float: right;"><a href = "newRecord.php">NEW RECORD</a></li>

    </ul>
    </div>
    <div id="style" class="box">
    
    <h1>Welcome Admin</h1>
    <?php
    // PHP code here to retrieve messages for this user ...
    ?>
    <h3>Click here to add a new record: </h3>
    <h2>
    <a href = "newRecord.php"> NEW</a>
    </h2><br>

    <form action="logout.php" method="POST">
        <input type="submit" name="logout" value="Log out">
    </form>
    <p>&copy; KL Industries LTD</p>
</div>
</body></html>