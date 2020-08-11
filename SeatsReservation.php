<?php
session_start();
print_r($_SESSION);
$q = $_SESSION['id'];

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
        //echo "yes";
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
    <script type = "text/javascript" language ="javascript">
        var seats = <?php echo json_encode($seats);?>;
        var selected;
        console.dir(seats);
        console.log(seats);
    </script>
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
            <a id ="link" ><button class="next" >Next</button></a>   
        </div>
    </div>
        
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
       
    </script>
    <script>
        $(document).ready(function(){
            $("#b1").click(function(){
                $("#b1").toggleClass("selected");
                if(seats.A1 === "TRUE"){
                seats.A1 = "FALSE";}
                else if(seats.A1=== "FALSE"){
                    seats.A1 = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b2").click(function(){
                $("#b2").toggleClass("selected");
                if(seats.A2 === "TRUE"){
                seats.A2 = "FALSE";}
                else if(seats["A2"]=== "FALSE"){
                    seats["A2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b3").click(function(){
                $("#b3").toggleClass("selected");
                if(seats.A3 === "TRUE"){
                seats.A3 = "FALSE";}
                else if(seats["A3"]=== "FALSE"){
                    seats["A3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b4").click(function(){
                $("#b4").toggleClass("selected");
                if(seats.A4 === "TRUE"){
                seats.A4 = "FALSE";}
                else if(seats["A4"]=== "FALSE"){
                    seats["A4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b5").click(function(){
                $("#b5").toggleClass("selected");
                if(seats.A5 === "TRUE"){
                seats.A5 = "FALSE";}
                else if(seats["A5"]=== "FALSE"){
                    seats["A5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b6").click(function(){
                $("#b6").toggleClass("selected");
                if(seats.B1 === "TRUE"){
                seats.B1 = "FALSE";}
                else if(seats["B1"]=== "FALSE"){
                    seats["B1"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b7").click(function(){
                $("#b7").toggleClass("selected");
                if(seats.B2 === "TRUE"){
                seats.B2 = "FALSE";}
                else if(seats["B2"]=== "FALSE"){
                    seats["B2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b8").click(function(){
                $("#b8").toggleClass("selected");
                if(seats.B3 === "TRUE"){
                seats.B3 = "FALSE";}
                else if(seats["B3"]=== "FALSE"){
                    seats["B3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b9").click(function(){
                $("#b9").toggleClass("selected");
                if(seats.B4 === "TRUE"){
                seats.B4 = "FALSE";}
                else if(seats["B4"]=== "FALSE"){
                    seats["B4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b10").click(function(){
                $("#b10").toggleClass("selected");
                if(seats.B5 === "TRUE"){
                seats.B5 = "FALSE";}
                else if(seats["B5"]=== "FALSE"){
                    seats["B5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b11").click(function(){
                $("#b11").toggleClass("selected");
                if(seats.C1 === "TRUE"){
                seats.C1 = "FALSE";}
                else if(seats["C1"]=== "FALSE"){
                    seats["C1"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b12").click(function(){
                $("#b12").toggleClass("selected");
                if(seats.C2 === "TRUE"){
                seats.C2 = "FALSE";}
                else if(seats["C2"]=== "FALSE"){
                    seats["C2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b13").click(function(){
                $("#b13").toggleClass("selected");
                if(seats.C3 === "TRUE"){
                seats.C3 = "FALSE";}
                else if(seats["C3"]=== "FALSE"){
                    seats["C3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b14").click(function(){
                $("#b14").toggleClass("selected");
                if(seats.C4 === "TRUE"){
                seats.C4 = "FALSE";}
                else if(seats["C4"]=== "FALSE"){
                    seats["C4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b15").click(function(){
                $("#b15").toggleClass("selected");
                if(seats.C5 === "TRUE"){
                seats.C5 = "FALSE";}
                else if(seats["C5"]=== "FALSE"){
                    seats["C5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b16").click(function(){
                $("#b16").toggleClass("selected");
                if(seats.D1 === "TRUE"){
                seats.D1 = "FALSE";}
                else if(seats["D1"]=== "FALSE"){
                    seats["D1"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b17").click(function(){
                $("#b17").toggleClass("selected");
                if(seats.D2 === "TRUE"){
                seats.D2 = "FALSE";}
                else if(seats["D2"]=== "FALSE"){
                    seats["D2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b18").click(function(){
                $("#b18").toggleClass("selected");
                if(seats.D3 === "TRUE"){
                seats.D3 = "FALSE";}
                else if(seats["D3"]=== "FALSE"){
                    seats["D3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b19").click(function(){
                $("#b19").toggleClass("selected");
                if(seats.D4 === "TRUE"){
                seats.D4 = "FALSE";}
                else if(seats["D4"]=== "FALSE"){
                    seats["D4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b20").click(function(){
                $("#b20").toggleClass("selected");
                if(seats.D5 === "TRUE"){
                seats.D5 = "FALSE";}
                else if(seats["D5"]=== "FALSE"){
                    seats["D5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b21").click(function(){
                $("#b21").toggleClass("selected");
                if(seats.E1 === "TRUE"){
                seats.E1 = "FALSE";}
                else if(seats["E1"]=== "FALSE"){
                    seats["E1"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b22").click(function(){
                $("#b22").toggleClass("selected");
                if(seats.E2 === "TRUE"){
                seats.E2 = "FALSE";}
                else if(seats["E2"]=== "FALSE"){
                    seats["E2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b23").click(function(){
                $("#b23").toggleClass("selected");
                if(seats.E3 === "TRUE"){
                seats.E3 = "FALSE";}
                else if(seats["E3"]=== "FALSE"){
                    seats["E3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b24").click(function(){
                $("#b24").toggleClass("selected");
                if(seats.E4 === "TRUE"){
                seats.E4 = "FALSE";}
                else if(seats["E4"]=== "FALSE"){
                    seats["E4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b25").click(function(){
                $("#b25").toggleClass("selected");
                if(seats.E5 === "TRUE"){
                seats.E5 = "FALSE";}
                else if(seats["E5"]=== "FALSE"){
                    seats["E5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b26").click(function(){
                $("#b26").toggleClass("selected");
                if(seats.F1 === "TRUE"){
                seats.F1 = "FALSE";}
                else if(seats["F1"]=== "FALSE"){
                    seats["F1"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b27").click(function(){
                $("#b27").toggleClass("selected");
                if(seats.F2 === "TRUE"){
                seats.F2 = "FALSE";}
                else if(seats["F2"]=== "FALSE"){
                    seats["F2"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b28").click(function(){
                $("#b28").toggleClass("selected");
                if(seats.F3 === "TRUE"){
                seats.F3 = "FALSE";}
                else if(seats["F3"]=== "FALSE"){
                    seats["F3"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b29").click(function(){
                $("#b29").toggleClass("selected");
                if(seats.F4 === "TRUE"){
                seats.F4 = "FALSE";}
                else if(seats["F4"]=== "FALSE"){
                    seats["F4"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b30").click(function(){
                $("#b30").toggleClass("selected");
                if(seats.F5 === "TRUE"){
                seats.F5 = "FALSE";}
                else if(seats["F5"]=== "FALSE"){
                    seats["F5"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b31").click(function(){
                $("#b31").toggleClass("selected");
                if(seats.A6 === "TRUE"){
                seats.A6 = "FALSE";}
                else if(seats["A6"]=== "FALSE"){
                    seats["A6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b32").click(function(){
                $("#b32").toggleClass("selected");
                if(seats.A7 === "TRUE"){
                seats.A7 = "FALSE";}
                else if(seats["A7"]=== "FALSE"){
                    seats["A7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b33").click(function(){
                $("#b33").toggleClass("selected");
                if(seats.A8 === "TRUE"){
                seats.A8 = "FALSE";}
                else if(seats["A8"]=== "FALSE"){
                    seats["A8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b34").click(function(){
                $("#b34").toggleClass("selected");
                if(seats.A9 === "TRUE"){
                seats.A9 = "FALSE";}
                else if(seats["A9"]=== "FALSE"){
                    seats["A9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b35").click(function(){
                $("#b35").toggleClass("selected");
                if(seats.A10 === "TRUE"){
                seats.A10 = "FALSE";}
                else if(seats["A10"]=== "FALSE"){
                    seats["A10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b36").click(function(){
                $("#b36").toggleClass("selected");
                if(seats.B6 === "TRUE"){
                seats.B6 = "FALSE";}
                else if(seats["B6"]=== "FALSE"){
                    seats["B6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b37").click(function(){
                $("#b37").toggleClass("selected");
                if(seats.B7 === "TRUE"){
                seats.B7 = "FALSE";}
                else if(seats["B7"]=== "FALSE"){
                    seats["B7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b38").click(function(){
                $("#b38").toggleClass("selected");
                if(seats.B8 === "TRUE"){
                seats.B8 = "FALSE";}
                else if(seats["B8"]=== "FALSE"){
                    seats["B8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b39").click(function(){
                $("#b39").toggleClass("selected");
                if(seats.B9 === "TRUE"){
                seats.B9 = "FALSE";}
                else if(seats["B9"]=== "FALSE"){
                    seats["B9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b40").click(function(){
                $("#b40").toggleClass("selected");
                if(seats.B10 === "TRUE"){
                seats.B10 = "FALSE";}
                else if(seats["B10"]=== "FALSE"){
                    seats["B10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b41").click(function(){
                $("#b41").toggleClass("selected");
                if(seats.C6 === "TRUE"){
                seats.C6 = "FALSE";}
                else if(seats["C6"]=== "FALSE"){
                    seats["C6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b42").click(function(){
                $("#b42").toggleClass("selected");
                if(seats.C7 === "TRUE"){
                seats.C7 = "FALSE";}
                else if(seats["C7"]=== "FALSE"){
                    seats["C7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b43").click(function(){
                $("#b43").toggleClass("selected");
                if(seats.C8 === "TRUE"){
                seats.C8 = "FALSE";}
                else if(seats["C8"]=== "FALSE"){
                    seats["C8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b44").click(function(){
                $("#b44").toggleClass("selected");
                if(seats.C9 === "TRUE"){
                seats.C9 = "FALSE";}
                else if(seats["C9"]=== "FALSE"){
                    seats["C9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b45").click(function(){
                $("#b45").toggleClass("selected");
                if(seats.C10 === "TRUE"){
                seats.C10 = "FALSE";}
                else if(seats["C10"]=== "FALSE"){
                    seats["C10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b46").click(function(){
                $("#b46").toggleClass("selected");
                if(seats.D6 === "TRUE"){
                seats.D6 = "FALSE";}
                else if(seats["D6"]=== "FALSE"){
                    seats["D6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b47").click(function(){
                $("#b47").toggleClass("selected");
                if(seats.D7 === "TRUE"){
                seats.D7 = "FALSE";}
                else if(seats["D7"]=== "FALSE"){
                    seats["D7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b48").click(function(){
                $("#b48").toggleClass("selected");
                if(seats.D8 === "TRUE"){
                seats.D8 = "FALSE";}
                else if(seats["D8"]=== "FALSE"){
                    seats["D8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b49").click(function(){
                $("#b49").toggleClass("selected");
                if(seats.D9 === "TRUE"){
                seats.D9 = "FALSE";}
                else if(seats["D9"]=== "FALSE"){
                    seats["D9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b50").click(function(){
                $("#b50").toggleClass("selected");
                if(seats.D10 === "TRUE"){
                seats.D10 = "FALSE";}
                else if(seats["D10"]=== "FALSE"){
                    seats["D10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b51").click(function(){
                $("#b51").toggleClass("selected");
                if(seats.E6 === "TRUE"){
                seats.E6 = "FALSE";}
                else if(seats["E6"]=== "FALSE"){
                    seats["E6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b52").click(function(){
                $("#b52").toggleClass("selected");
                if(seats.E7 === "TRUE"){
                seats.E7 = "FALSE";}
                else if(seats["E7"]=== "FALSE"){
                    seats["E7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b53").click(function(){
                $("#b53").toggleClass("selected");
                if(seats.E8 === "TRUE"){
                seats.E8 = "FALSE";}
                else if(seats["E8"]=== "FALSE"){
                    seats["E8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b54").click(function(){
                $("#b54").toggleClass("selected");
                if(seats.E9 === "TRUE"){
                seats.E9 = "FALSE";}
                else if(seats["E9"]=== "FALSE"){
                    seats["E9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b55").click(function(){
                $("#b55").toggleClass("selected");
                if(seats.E10 === "TRUE"){
                seats.E10 = "FALSE";}
                else if(seats["E10"]=== "FALSE"){
                    seats["E10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b56").click(function(){
                $("#b56").toggleClass("selected");
                if(seats.F6 === "TRUE"){
                seats.F6 = "FALSE";}
                else if(seats["F6"]=== "FALSE"){
                    seats["F6"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b57").click(function(){
                $("#b57").toggleClass("selected");
                if(seats.F7 === "TRUE"){
                seats.F7 = "FALSE";}
                else if(seats["F7"]=== "FALSE"){
                    seats["F7"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b58").click(function(){
                $("#b58").toggleClass("selected");
                if(seats.F8 === "TRUE"){
                seats.F8 = "FALSE";}
                else if(seats["F8"]=== "FALSE"){
                    seats["F8"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b59").click(function(){
                $("#b59").toggleClass("selected");
                if(seats.F9 === "TRUE"){
                seats.F9 = "FALSE";}
                else if(seats["F9"]=== "FALSE"){
                    seats["F9"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $("#b60").click(function(){
                $("#b60").toggleClass("selected");
                if(seats.F10 === "TRUE"){
                seats.F10 = "FALSE";}
                else if(seats["F10"]=== "FALSE"){
                    seats["F10"] = "TRUE";
                }
                console.log(seats);
                selected = JSON.stringify(seats);
                console.log(selected);
            });
            $(".next").click(function(){
                $("#link").attr('href', 'Form.php?id=<?php echo $q;?>&selected='+selected);
            });
        });
        function Save(){
            $(document).ready(function(){
                $( ".selected" ).addClass("disabled");
                $( ".selected" ).removeClass("selected");
            }); 
        }
    </script>
</html>