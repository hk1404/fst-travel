<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Log-in</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php 
include 'function.php';
$tmpp= new for_user;
session_start();
if(isset($_SESSION["userid"]) && $_SESSION['userid']==6){
  if(isset($_POST['save_edited_changes'])) {
    $tmpp->edit_tour();
  }
}else{
  header("location:main.php");
}
?>
<style>
body {
	color: #000;
	background: #fff;
	font-family: 'Roboto', sans-serif;
  
}
button, input {
    overflow: visible;
    border-radius: 50px;
    padding-bottom:5px;
}
.form-control {
	height: 40px;
	box-shadow: none;
  width: 10%;
}
.form-control1{
  height: 40px;
	box-shadow: none;
  width:150%;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.container {
  font-size: 15px;
  text-align: center;
  justify-content: center;
  align-items: center;
}
.container h2 {
	color: #000000;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.container h2:before, .container h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.container h2:before {
	left: 0;
}
.container h2:after {
	right: 0;
}
.container .hint-text {
	color: rgb(0, 0, 0);
	margin-bottom: 30px;
	text-align: center;
}
.container form {
	border-radius: 3px;
	margin-bottom: 15px;
	background: rgb(255,165,0);
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
	border-radius: 10px;
}
.container .form-group {
  display:grid;
  grid-template-columns: 1fr 2fr;
  align-items: center;
  text-decoration:none;
}
.container input[type="checkbox"] {
	margin-top: 3px;
}
.container .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.container .row{
  display: block;
  text-align: center;
}
.container .row div:first-child {
	padding-right: 5px;
  padding-left: 5px;
  max-width: max-content;
}
.container .row div:last-child {
	padding-left: 10px;
}    	
.container a {
	color: rgb(0, 0, 0);
  margin-top: 8px;
}
.container a:hover {
	text-decoration: none;
}
.container form a {
	color: #000000;
	text-decoration: none;
}	
.container form a:hover {
	text-decoration: underline;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: 	rgb(255,165,0);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000000;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  .positiondown{
    margin-bottom: auto;
    padding-top: 95%;
  }
  .col-md-9{
    margin: auto;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

  nav{
    display:grid;
    grid-template-columns: 1fr 3fr 4fr 0.5fr 0.6fr;
    margin-left: auto;
    align-items: center;
    padding-bottom: 5px;
}

#nav a{
    align-items: left;
    padding-right: 0cm;
    padding-left: 1ch;
}
#nav h1{
    text-align: center;
    padding-right: 1.5cm;
    padding-left:0cm;
    margin-top: 0ch;
    margin-bottom: 0ch;
}
#nav input{
    align-items: center;
    padding-right: 2cm;
    padding-left: 2cm;
}
nav div{
    align-items: center;
    padding-right: 2ch;
    padding-left: 2ch;
    display: inline-flex;
    vertical-align: middle;
    
}

.dropbtn {
    background-color: #5293da;
  color: white;
  padding: 3px;
  border: none;
  border-radius: 10px;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding:0px;
}

.dropdown-content {
    display:none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    z-index: 1;
    padding: 1px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #5293da;}


#nav ul{
    display: inline-flex;
    align-items: right;
    padding-inline-start: 0%;
}
.menu{
    padding:0;
    border:0;
    background-color: transparent;
}

.signin{
    padding-left:45px;
}


.PackagesTitle{
    padding-top: 1em;
}

.TitleOfMainPage{
    padding-top: 0.5em;
    font-size: 25px;
}
.ToursPart{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    border-color: black;
    grid-gap:1em;
    grid-auto-rows: minmax(200px,auto);
    padding: 1em;
    background:white;
}
.ToursPart > a{
    text-align: center;
    font-size: larger;
    background:#b1cae754;
    display: grid;
    grid-template-rows: 2fr;
    border-color: black;
    padding-top: 1em;
    padding-bottom: 1em;
    padding-left: 1em;
    padding-right: 1em;
    border-radius:20px;
}
.seemore{
    padding-right: 3em;
    align-self: center;
    justify-self: end;
    color: black;
    text-decoration: none;
}
.SingleLine{
    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: #5293da;
    padding-left:10px;
    padding-bottom: 8px;
    border-radius:10px;
}
#show{
    padding-bottom:5px;
    display:grid;
    grid-template-columns: 1fr 1fr;
}   
</style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="main.php">Home</a>
    <a href="#">Types</a>
    <a class="positiondown" href="#">Contact Us</a>
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>

    <nav id="nav">
        <div>
            <button class="menu"  onclick="openNav()">
                <img src="images/menu.png" width="35" height="35">
            </button>
        </div>
        <div>
        <a href="main.php"><img src="images/logo.png" width="70" height="70"></a>&nbsp;&nbsp;
        <h1>Fast travel</h1>
        </div>

        <div>
        </div>

        <div><ul>
            <a href="cart.php">
            <img  src="images/cart.png" width="30" height="30">
            </a>
        </ul>
        </div>
        <div class="signin">
        <ul>
            <div class="dropdown">
                <button class="dropbtn"><a class="item">welcome <?php echo $_SESSION["userfirstname"] ?></a></button>
                <div class="dropdown-content">
                <a href="admin.php">Add Tour</a>
                <a href="update_tour.php">Edit Tour</a>
                <a href="newmain.php">Logout</a>
                </div>
            </div>
        </ul>
        </div>
    </nav>
    <div class="PackagesTitle">
            <div class="SingleLine">
                <a class="TitleOfMainPage">Popular Tours</a>
                <a class="seemore" href="">See More</a>
            </div>
            <div class="ToursPart">
                <?php       
                $result=$tmpp->fetch_data_by_tour_type(5);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?>
                
            </div>
            <div class="SingleLine">
                <a class="TitleOfMainPage">Highly Rated Tours</a>
                <a class="seemore" href="">See More</a>
            </div>
            <div class="ToursPart">
            <?php       
                $result=$tmpp->fetch_data_by_tour_type(6);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?>
            </div>
            <div class="SingleLine">
                <a class="TitleOfMainPage">Heritage Sites</a>
                <a class="seemore" href="">See More</a>
            </div>
            <div class="ToursPart">
            <?php       
                $result=$tmpp->fetch_data_by_tour_type(1);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?>

            </div>
            <div class="SingleLine">
                <a class="TitleOfMainPage">International</a>
                <a class="seemore" href="">See More</a>
            </div>
            <div class="ToursPart">
            <?php       
                $result=$tmpp->fetch_data_by_tour_type(2);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?> 
              
            </div>
            <div class="SingleLine">
                <a class="TitleOfMainPage">Vacation Tours</a>
                <a class="seemore" href="">See More</a>
            </div>

            <div class="ToursPart">
            <?php       
                $result=$tmpp->fetch_data_by_tour_type(3);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?> 
               
            </div>
            <div class="SingleLine">
                <a class="TitleOfMainPage">Pilgrimage</a>
                <a class="seemore" href="">See More</a>
            </div>

            <div class="ToursPart">
            <?php       
                $result=$tmpp->fetch_data_by_tour_type(4);
                if($result -> num_rows >0){
                    while($row = $result->fetch_assoc())
                    { $today=date("Y-m-d");
                        if($row["tour_startdate"]>$today){ ?><a>
                        <?php echo $row["tour_name"]."<br>";?>
                        <div style="padding-bottom:1em;"><?php $tmpp->print_tour_images($row["tour_id"]); ?> </div> 
                        <div>
                             
                            <form method="post">
                            <lable for="Price">Price: <?php echo $row['tour_price']?> </lable><br>
                            <div id="show">
                            <lable name="capacity">Capacity:</lable>
                            <input type="number" class="small12" name="etcapacity" min="1" placeholder="<?php echo $row['tour_capacity'] ?> ">
                            </div>
                            <div id="show">
                            <lable name="startdate">Start date:</lable>
                            <input type="text"  name="etsdate" placeholder="<?php echo $row['tour_startdate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <lable name="enddate">end date:</lable>
                            <input type="text"  name="etedate" placeholder="<?php echo $row['tour_enddate'] ?>" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div id="show">
                            <div></div>
                            <input type="hidden" name="etidd" value="<?php echo $row["tour_id"] ?>">
                            <input type="submit" name="save_edited_changes"  value="Save Changes">
                            </div>    
                        </form>
                        </div> 
                        </a> <?php
                        }
                    }
                }else{
                    echo "0 result";
                }?>
                
            </div>
        </div>
</body>