<?php

$q = intval($_GET['id']);

$con = mysqli_connect('localhost','root','','BookMyShow');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"BookMyShow");

$sql="SELECT seats FROM Movies WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
$seats = Array();
while($row = mysqli_fetch_array($result)){
  $seats = unserialize($row['seats']);
}
$key = Array();
foreach($seats as $x => $x_value) {
    $key[] = $x ;
    if($x_value==='TRUE'){
        echo "yes";
    }
}

mysqli_close($con);
?>
<html>
	<head>
        <link rel="stylesheet" href="SeatsReservation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="main">
    	<a href="Home.php"><img class="logo" src = "Logo.png" alt="main"></a>
    	<div class="titlebar">
    		<a class="nav" href="Home.php"><i class="fa fa-home"></i><textsize> Home</textsize></a>
        	<a class="nav" href="#"><i class="fa fa-star"></i><textsize> About Us</textsize></a>
        	<a class="nav" href="#"><i class="fa fa-phone"></i><textsize> Contact Us</textsize></a>
        </div>
    </div>
    <div class="image">
        <div class="heading">
            Seats Reservation
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
                    <button id="b1" class="seats"><?php echo $key[0]?></button>
                    <button id="b2" class="seats"><?php echo $key[1]?></button>
                    <button id="b3" class="seats"><?php echo $key[2]?></button>
                    <button id="b4" class="seats"><?php echo $key[3]?></button>
                    <button id="b5" class="seats"><?php echo $key[4]?></button>
                </div>
                <div class="container">
                    <button id="b6" class="seats"><?php echo $key[10]?></button>
                    <button id="b7" class="seats"><?php echo $key[11]?></button>
                    <button id="b8" class="seats"><?php echo $key[12]?></button>
                    <button id="b9" class="seats"><?php echo $key[13]?></button>
                    <button id="b10" class="seats"><?php echo $key[14]?></button>
                </div>
                <div class="container">
                    <button id="b11" class="seats"><?php echo $key[20]?></button>
                    <button id="b12" class="seats"><?php echo $key[21]?></button>
                    <button id="b13" class="seats"><?php echo $key[22]?></button>
                    <button id="b14" class="seats"><?php echo $key[23]?></button>
                    <button id="b15" class="seats"><?php echo $key[24]?></button>
                </div>
                <div class="container">
                    <button id="b16" class="seats"><?php echo $key[30]?></button>
                    <button id="b17" class="seats"><?php echo $key[31]?></button>
                    <button id="b18" class="seats"><?php echo $key[32]?></button>
                    <button id="b19" class="seats"><?php echo $key[33]?></button>
                    <button id="b20" class="seats"><?php echo $key[34]?></button>
                </div>
                <div class="container">
                    <button id="b21" class="seats"><?php echo $key[40]?></button>
                    <button id="b22" class="seats"><?php echo $key[41]?></button>
                    <button id="b23" class="seats"><?php echo $key[42]?></button>
                    <button id="b24" class="seats"><?php echo $key[43]?></button>
                    <button id="b25" class="seats"><?php echo $key[44]?></button>
                </div>
                <div class="container">
                    <button id="b26" class="seats"><?php echo $key[50]?></button>
                    <button id="b27" class="seats"><?php echo $key[51]?></button>
                    <button id="b28" class="seats"><?php echo $key[52]?></button>
                    <button id="b29" class="seats"><?php echo $key[53]?></button>
                    <button id="b30" class="seats"><?php echo $key[54]?></button>
                </div>
            </div>
            <div class="right">
                <div class="container">
                    <button id="b31" class="seats"><?php echo $key[5]?></button>
                    <button id="b32" class="seats"><?php echo $key[6]?></button>
                    <button id="b33" class="seats"><?php echo $key[7]?></button>
                    <button id="b34" class="seats"><?php echo $key[8]?></button>
                    <button id="b35" class="seats"><?php echo $key[9]?></button>
                </div>
                <div class="container">
                    <button id="b36" class="seats"><?php echo $key[15]?></button>
                    <button id="b37" class="seats"><?php echo $key[16]?></button>
                    <button id="b38" class="seats"><?php echo $key[17]?></button>
                    <button id="b39" class="seats"><?php echo $key[18]?></button>
                    <button id="b40" class="seats"><?php echo $key[19]?></button>
                </div>
                <div class="container">
                    <button id="b41" class="seats"><?php echo $key[25]?></button>
                    <button id="b42" class="seats"><?php echo $key[26]?></button>
                    <button id="b43" class="seats"><?php echo $key[27]?></button>
                    <button id="b44" class="seats"><?php echo $key[28]?></button>
                    <button id="b45" class="seats"><?php echo $key[29]?></button>
                </div>
                <div class="container">
                    <button id="b46" class="seats"><?php echo $key[35]?></button>
                    <button id="b47" class="seats"><?php echo $key[36]?></button>
                    <button id="b48" class="seats"><?php echo $key[37]?></button>
                    <button id="b49" class="seats"><?php echo $key[38]?></button>
                    <button id="b50" class="seats"><?php echo $key[39]?></button>
                </div>
                <div class="container">
                    <button id="b51" class="seats"><?php echo $key[45]?></button>
                    <button id="b52" class="seats"><?php echo $key[46]?></button>
                    <button id="b53" class="seats"><?php echo $key[47]?></button>
                    <button id="b54" class="seats"><?php echo $key[48]?></button>
                    <button id="b55" class="seats"><?php echo $key[49]?></button>
                </div>
                <div class="container">
                    <button id="b56" class="seats"><?php echo $key[55]?></button>
                    <button id="b57" class="seats"><?php echo $key[56]?></button>
                    <button id="b58" class="seats"><?php echo $key[57]?></button>
                    <button id="b59" class="seats"><?php echo $key[58]?></button>
                    <button id="b60" class="seats"><?php echo $key[59]?></button>
                </div>
            </div>
            </div>
    	</div> 
        <div class="buttoncontainer">
            <button onclick="Save()" class="next">Next</button>
        </div>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#b1").click(function(){
                $("#b1").toggleClass("selected");
            });
            $("#b2").click(function(){
                $("#b2").toggleClass("selected");
            });
            $("#b3").click(function(){
                $("#b3").toggleClass("selected");
            });
            $("#b4").click(function(){
                $("#b4").toggleClass("selected");
            });
            $("#b5").click(function(){
                $("#b5").toggleClass("selected");
            });
            $("#b6").click(function(){
                $("#b6").toggleClass("selected");
            });
            $("#b7").click(function(){
                $("#b7").toggleClass("selected");
            });
            $("#b8").click(function(){
                $("#b8").toggleClass("selected");
            });
            $("#b9").click(function(){
                $("#b9").toggleClass("selected");
            });
            $("#b10").click(function(){
                $("#b10").toggleClass("selected");
            });
            $("#b11").click(function(){
                $("#b11").toggleClass("selected");
            });
            $("#b12").click(function(){
                $("#b12").toggleClass("selected");
            });
            $("#b13").click(function(){
                $("#b13").toggleClass("selected");
            });
            $("#b14").click(function(){
                $("#b14").toggleClass("selected");
            });
            $("#b15").click(function(){
                $("#b15").toggleClass("selected");
            });
            $("#b16").click(function(){
                $("#b16").toggleClass("selected");
            });
            $("#b17").click(function(){
                $("#b17").toggleClass("selected");
            });
            $("#b18").click(function(){
                $("#b18").toggleClass("selected");
            });
            $("#b19").click(function(){
                $("#b19").toggleClass("selected");
            });
            $("#b20").click(function(){
                $("#b20").toggleClass("selected");
            });
            $("#b21").click(function(){
                $("#b21").toggleClass("selected");
            });
            $("#b22").click(function(){
                $("#b22").toggleClass("selected");
            });
            $("#b23").click(function(){
                $("#b23").toggleClass("selected");
            });
            $("#b24").click(function(){
                $("#b24").toggleClass("selected");
            });
            $("#b25").click(function(){
                $("#b25").toggleClass("selected");
            });
            $("#b26").click(function(){
                $("#b26").toggleClass("selected");
            });
            $("#b27").click(function(){
                $("#b27").toggleClass("selected");
            });
            $("#b28").click(function(){
                $("#b28").toggleClass("selected");
            });
            $("#b29").click(function(){
                $("#b29").toggleClass("selected");
            });
            $("#b30").click(function(){
                $("#b30").toggleClass("selected");
            });
            $("#b31").click(function(){
                $("#b31").toggleClass("selected");
            });
            $("#b32").click(function(){
                $("#b32").toggleClass("selected");
            });
            $("#b33").click(function(){
                $("#b33").toggleClass("selected");
            });
            $("#b34").click(function(){
                $("#b34").toggleClass("selected");
            });
            $("#b35").click(function(){
                $("#b35").toggleClass("selected");
            });
            $("#b36").click(function(){
                $("#b36").toggleClass("selected");
            });
            $("#b37").click(function(){
                $("#b37").toggleClass("selected");
            });
            $("#b38").click(function(){
                $("#b38").toggleClass("selected");
            });
            $("#b39").click(function(){
                $("#b39").toggleClass("selected");
            });
            $("#b40").click(function(){
                $("#b40").toggleClass("selected");
            });
            $("#b41").click(function(){
                $("#b41").toggleClass("selected");
            });
            $("#b42").click(function(){
                $("#b42").toggleClass("selected");
            });
            $("#b43").click(function(){
                $("#b43").toggleClass("selected");
            });
            $("#b44").click(function(){
                $("#b44").toggleClass("selected");
            });
            $("#b45").click(function(){
                $("#b45").toggleClass("selected");
            });
            $("#b46").click(function(){
                $("#b46").toggleClass("selected");
            });
            $("#b47").click(function(){
                $("#b47").toggleClass("selected");
            });
            $("#b48").click(function(){
                $("#b48").toggleClass("selected");
            });
            $("#b49").click(function(){
                $("#b49").toggleClass("selected");
            });
            $("#b50").click(function(){
                $("#b50").toggleClass("selected");
            });
            $("#b51").click(function(){
                $("#b51").toggleClass("selected");
            });
            $("#b52").click(function(){
                $("#b52").toggleClass("selected");
            });
            $("#b53").click(function(){
                $("#b53").toggleClass("selected");
            });
            $("#b54").click(function(){
                $("#b54").toggleClass("selected");
            });
            $("#b55").click(function(){
                $("#b55").toggleClass("selected");
            });
            $("#b56").click(function(){
                $("#b56").toggleClass("selected");
            });
            $("#b57").click(function(){
                $("#b57").toggleClass("selected");
            });
            $("#b58").click(function(){
                $("#b58").toggleClass("selected");
            });
            $("#b59").click(function(){
                $("#b59").toggleClass("selected");
            });
            $("#b60").click(function(){
                $("#b60").toggleClass("selected");
            });
        });
        function e(){
            $(document).ready(function(){
                $( ".seats" ).addClass("disabled");
            });
        }
        function Save(){
            $(document).ready(function(){
                $( ".selected" ).addClass("disabled");
                $( ".selected" ).removeClass("selected");
            });
        }
    </script>
</html>