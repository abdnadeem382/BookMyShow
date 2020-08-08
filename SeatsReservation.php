<?php

$q = intval($_GET['id']);

$con = mysqli_connect('localhost','root','','BookMyShow');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"BookMyShow");

$sql="SELECT * FROM Movies WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
  $seats = unserialize($row['seats']);
}

mysqli_close($con);
?>
<html>
	<head>
        <link rel="stylesheet" href="SeatsReservation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="main">
    	<a href="Home.html"><img class="logo" src = "Logo.png" alt="main"></a>
    	<div class="titlebar">
    		<a class="nav" href="Home.html"><i class="fa fa-home"></i><textsize> Home</textsize></a>
        	<a class="nav" href="#"><i class="fa fa-star"></i><textsize> About Us</textsize></a>
        	<a class="nav" href="#"><i class="fa fa-phone"></i><textsize> Contact Us</textsize></a>
        </div>
    </div>
    <div class="image">
        <div class="heading">
            Seats Reservation
            <?php echo $seats['A1']?>
        </div>
    	<div class="content">
            <div class="tags">
                <div class="box" style="background-color: white"></div>
                <div class="text">Empty Seat</div>
                <div class="box" style="background-color: green"></div>
                <div class="text">Selected Seat</div>
                <div class="box" style="background-color: red"></div>
                <div class="text">Reserved Seat</div>

            </div>
            <div class="hall"><div class="left">
                <div class="container">
                    <button class="seats">A1</button>
                    <button class="seats">A2</button>
                    <button class="seats">A3</button>
                    <button class="seats">A4</button>
                    <button class="seats">A5</button>
                </div>
                <div class="container">
                    <button class="seats">B1</button>
                    <button class="seats">B2</button>
                    <button class="seats">B3</button>
                    <button class="seats">B4</button>
                    <button class="seats">B5</button>
                </div>
                <div class="container">
                    <button class="seats">C1</button>
                    <button class="seats">C2</button>
                    <button class="seats">C3</button>
                    <button class="seats">C4</button>
                    <button class="seats">C5</button>
                </div>
                <div class="container">
                    <button class="seats">D1</button>
                    <button class="seats">D2</button>
                    <button class="seats">D3</button>
                    <button class="seats">D4</button>
                    <button class="seats">D5</button>
                </div>
                <div class="container">
                    <button class="seats">E1</button>
                    <button class="seats">E2</button>
                    <button class="seats">E3</button>
                    <button class="seats">E4</button>
                    <button class="seats">E5</button>
                </div>
                <div class="container">
                    <button class="seats">F1</button>
                    <button class="seats">F2</button>
                    <button class="seats">F3</button>
                    <button class="seats">F4</button>
                    <button class="seats">F5</button>
                </div>
            </div>
            <div class="right">
                <div class="container">
                    <button class="seats">A6</button>
                    <button class="seats">A7</button>
                    <button class="seats">A8</button>
                    <button class="seats">A9</button>
                    <button class="seats">A10</button>
                </div>
                <div class="container">
                    <button class="seats">B6</button>
                    <button class="seats">B7</button>
                    <button class="seats">B8</button>
                    <button class="seats">B9</button>
                    <button class="seats">B10</button>
                </div>
                <div class="container">
                    <button class="seats">C6</button>
                    <button class="seats">C7</button>
                    <button class="seats">C8</button>
                    <button class="seats">C9</button>
                    <button class="seats">C10</button>
                </div>
                <div class="container">
                    <button class="seats">D6</button>
                    <button class="seats">D7</button>
                    <button class="seats">D8</button>
                    <button class="seats">D9</button>
                    <button class="seats">D10</button>
                </div>
                <div class="container">
                    <button class="seats">E6</button>
                    <button class="seats">E7</button>
                    <button class="seats">E8</button>
                    <button class="seats">E9</button>
                    <button class="seats">E10</button>
                </div>
                <div class="container">
                    <button class="seats">F6</button>
                    <button class="seats">F7</button>
                    <button class="seats">F8</button>
                    <button class="seats">F9</button>
                    <button class="seats">F10</button>
                </div>
            </div>
            </div>
    	</div> 
        <div class="buttoncontainer">
            <button class="next">Next</button>
        </div>
    </div>
</html>