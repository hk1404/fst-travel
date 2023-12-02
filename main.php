
<!--Name: Harshil Patel and Tirth Patel-->
<!--Assignment2-->
<!--Id: 144403-->  
<!--class: IT310 --> 
<?php 
    include 'header.php';
     include 'function.php';
     $tmpp= new for_user;
     session_start();
    ?>

<!DOCTYPE html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Travel</title>
    <link rel="stylesheet" href="MP.css">
    <style>
body {
	background: #fff;
	font-family: 'Roboto', sans-serif;
    margin:1;
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

.signin #item{
    display:block;height:100%;width:50px;
    background-color:#5293da;
    text-decoration: none;
    align-items:center;
    border-radius: 10px;
    padding: 10px;

}
.signin button{
    background-color:#5293da;
    align-items:center;
    border:none;
    text-decoration:none;
    color:white;
    
}

.TypesPart{
    display: grid;
    background-color: rgba(27, 244, 27, 0.82);
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap:1em;
    grid-auto-rows: minmax(60px,auto);
    padding: 1em;
}
.TypesPart > a{
    text-align: center;
    font-size: larger;
    background:rgb(250, 112, 7);
    padding-top: 1em;
    padding-bottom: 1em;
    padding-left: 4em;
    padding-right: 4em;
}
.TypesPart > a::before::after{
    background-color: rgb(245, 215, 170);
}
.box1{
    text-decoration: none;
    color: black;
    grid-row: 2;
    grid-column: 1/3;
    justify-self:center;
    padding-right: 1em;
}
.box2{
    text-decoration: none;
    color: black;
    grid-row:2 ;
    grid-column: 2/4;
    justify-self: center;
}
.box3{

    text-decoration: none;
    color: black;
    justify-self: center;
}
.box4{
    text-decoration: none;   
    color: black;
    justify-self: center;
}
.box5{
    text-decoration: none;
    color: black;
    justify-self: center;
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
.ImageSlider{
    width: 100%;
    height: 500px;
    border-radius: 10px;
    overflow: hidden;
}
.ImageSlides{
    width:500%;
    height: 500px;
    display: flex;
}

.ImageSlides > input{
    display: none;
}

.slide{
    width: 20%; 
    transition: 2s;
}
.slide img{
    width: 100%;
    height: 500px;
}

.NavigationManual{
    position: absolute;
    width: 100%;
    margin-top: -40px;
    display: flex;
    justify-content: center;
}
.ManualBtn{
    border:2px solid;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}

.ManualBtn:not(:last-child){
    margin-right: 40px;
}
.ManualBtn:hover{
    background: #40D3DC;
}

#rd1:checked ~ .first{
    margin-left: 0;
}
#rd2:checked ~ .first{
    margin-left: -20%;
}
#rd3:checked ~ .first{
    margin-left: -40%;
}
#rd4:checked ~ .first{
    margin-left: -60%;
}

.NavigationAuto{
    position: absolute;
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: 460px;
}
.NavigationAuto div{
    border: 2px solid;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
}

.NavigationAuto div:not(:last-child){
    margin-right: 40px;
}

#rd1:checked ~ .NavigationAuto .AutoBtn1{
    background: #40D3DC;
}
#rd2:checked ~ .NavigationAuto .AutoBtn2{
    background: #40D3DC;
}
#rd3:checked ~ .NavigationAuto .AutoBtn3{
    background: #40D3DC;
}
#rd4:checked ~ .NavigationAuto .AutoBtn4{
    background: #40D3DC;
}


.menu{
    border-color: white;

}


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#5293da;
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


  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

</style>
</head>

<body>
    <header>    

    </header>

   

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
                <?php
                    if(isset($_SESSION["userid"]) && $_SESSION["userid"]!=6){
                        ?><div class="dropdown">
                        <button class="dropbtn"><a class="item">welcome <?php echo $_SESSION["userfirstname"] ?></a></button>
                        <div class="dropdown-content">
                          <a href="profile.php">Dashboard</a>
                          <a href="history.php">History</a>
                          <a href="newmain.php">Logout</a>
                          
                        </div>
                      </div><?php
                    }
                    
                    else{
                        ?><a id="item" href="Login.php">Sign in</a><?php
                    }
                ?>

                
            </ul>
        </div>
        
    </nav>
    <main>

        <div class="ImageSlider">
            <div class="ImageSlides">
                <input type="radio" name="radiobtn" id="rd1">
                <input type="radio" name="radiobtn" id="rd2">
                <input type="radio" name="radiobtn" id="rd3">
                <input type="radio" name="radiobtn" id="rd4">
            

                <div class="slide first">
                    <img src="images/image1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/image2.jfif" alt="">
                </div>
                <div class="slide">
                    <img src="images/image3.jfif" alt="">
                </div>
                <div class="slide">
                    <img src="images/image4.jfif" alt="">
                </div>


                <div class="NavigationAuto">
                    <div class="AutoBtn1"></div>
                    <div class="AutoBtn2"></div>
                    <div class="AutoBtn3"></div>
                    <div class="AutoBtn4"></div>
                </div>

  
            </div>
                
            <div class="NavigationManual">
                <label for="rd1" class="ManualBtn"></label>
                <label for="rd2" class="ManualBtn"></label>
                <label for="rd3" class="ManualBtn"></label>
                <label for="rd4" class="ManualBtn"></label>
            </div>
        </div>
            <script type="text/javascript">
                var counter=1;
                setInterval(
                    function(){
                        document.getElementById('rd'+counter).checked=true;
                        counter++;
                        if (counter>4){
                            counter=1;
                        }
                    },5000
                );
            </script>







        <div class="PackagesTitle">
            <div class="SingleLine">
                <a class="TitleOfMainPage">Popular Tours</a>
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
                            <?php $cap=$tmpp->print_tours_details($row["tour_id"]); ?> 
                            <form action="add_cart.php" method="post">
                            <lable for="tickiets">number of tickiets:</lable>
                            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $cap ?>"><br>
                            <input type="submit" name="add_carts" value="add to cart">
                            <input type="hidden" name="tourID" value="<?php echo $row["tour_id"] ?>">   
                            <input type="hidden" name="price" value="<?php echo $row["tour_price"] ?>">
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
    </main>
</body>
</html>