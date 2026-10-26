<?php session_start();
    if(!isset($_SESSION['loggedin'])) header("Location: session.php");
    if($_SESSION['loggedin']===FALSE) header("Location: session.php");
?>
<!DOCTYPE html>
<html>
<head><title>Admin page</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tabsCSS.css">
    </head>
    <script>
    window.onscroll = function(){myFunction()};

    function myFunction(){
        var winScroll = document.body.scrollTop || 
        document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height)*100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
    function validateForm(){
        let a = document.forms["newRecordForm"]["title"].value;
        let b = document.forms["newRecordForm"]["author"].value;
        let c = document.forms["newRecordForm"]["year"].value;
        let d = document.forms["newRecordForm"]["journal"].value;
        let e = document.forms["newRecordForm"]["doi"].value;
        let f = document.forms["newRecordForm"]["school"].value;
        if(a == "" || b =="" ||c =="" || d=="" ||e=="" || f==""){
            alert("Please fill out all details");
            return false;
        }
        if(c.length != 4){
            alert("Please fill in a valid year");
            return false;
        }
        else{
            alert("Record added!")
        }
    }


    </script>

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
        <form name="newRecordForm" method="POST" action="submit.php" onsubmit="return validateForm()">
          Title:<br>
          <input type="text" name="title" ><br><br>
          Author:<br>
          <input type="text" name="author"><br><br>
          Year:<br>
          <input type="number" name="year"><br><br>
          Journal:<br>
          <input type="text" name="journal"><br><br>
          DOI:<br>
          <input type="text" name="doi"><br><br>
          School:<br>
          <input type="text" name="school"><br><br>


          <input type="submit" value="Submit">
        </form>

</div>
</body>
</html>