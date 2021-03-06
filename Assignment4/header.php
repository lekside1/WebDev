<!DOCTYPE html>
<html lang= "en"> 
<head>
	<title> <?php echo $page_title; ?></title>
    <meta charset="UTF-8"/>
    <link href="Exercise4.css" rel="stylesheet" type="text/css" /> 
</head>
<body onload="showCurrentTime()">

<!-- Login button -->
<div class="topcorner">
    <form action="login.php"><input type="submit" value="Login"/></form>
</div>

<!-- Photo + clock -->
<table>
        <tr>
            <td><a href="Exercise4.php">  
                    <img alt="chalet" src="images/chalet.jpg" width="200" height="120" /></a>
            </td>  
            
            <td><h1>Chalet Search Form</h1></td>
            <td> <p id="clock" class="clock"> </p></td> 
        </tr>

    <script> 
        showCurrentTime(); // call the function

        // displays the curent time
        function showCurrentTime() {
            var clock = new Date(); 
            // hours
            var clockHour = clock.getHours();
            if (clockHour < 10) {
                clockHour += "0";
            }
            // minutes 
            var clockMin = clock.getMinutes();
            if (clockMin < 10) {
                clockMin += "0";
            }
            // seconds
            var clockSeconds = clock.getSeconds();
            if (clockSeconds < 10) {
                clockSeconds += "0";
            }
            // time
            var clockTime = clock.getDate() + "/" + (clock.getMonth()+1) + "/" + (clock.getYear()+1900) + " - " + (clockHour-12) + ":" + clockMin + ":" + clockSeconds; 
            
            document.getElementById("clock").innerHTML = clockTime;
            refreshTime(); 
        }
        //  refresh time every second 
        function refreshTime() {
            var timeout = 1000;
            var time = setTimeout("showCurrentTime()", timeout);
        }
    </script>
</table>

<?php
    session_start();
