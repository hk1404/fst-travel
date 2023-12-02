
<!DOCTYPE html>
<meta charset="utf-8"> 
<html lang="en">
<?php 
    include 'header.php';
    include 'function.php';
    $x = new for_user;
    $con=$x->con_db(); 
    session_start();
    ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="stylesheet" href="MP2.css">

  <style>
    body {
	background: #fff;
	font-family: 'Roboto', sans-serif;
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
  .info{
    width: 450px;
	  margin: 0 auto;
	  padding: 30px 0;
  	font-size: 15px;
    color: #999;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #5293da;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius:20px;
  }
  .info h1 {
	color:#000;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
  text-decoration:underline; 
}

.info div{
  align:center;
  color:#000;
  padding: 8px;
  font-size: 25px;
  text-align:center;
}

.info .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}

.info .row div:first-child {
	padding-right: 10px;
}
.info .row div:last-child {
	padding-left: 10px;
}    	
.info a {
	color: rgb(255, 255, 255);
	text-decoration: none;
}
.info a:hover {
	text-decoration: none;
}
.menu{
    padding:0;
    border:0;
    background-color: transparent;
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

<body >
    <header>
      <div>
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
      </div>
    </header>
    
    <main>

    
   

<div class="info">
    <h1>Profile Information</h1>
      <div>

          <?php
          
          $sql = "SELECT * FROM users WHERE user_id ='".$_SESSION['userid']."'";
          $result = mysqli_query($con, $sql);
            
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "Name: " . $row["user_firstname"]. " " . $row["user_lastname"]." <br>";
              }
            }
              ?>
      </div>
      <div>

          <?php 
          $sql = "SELECT * FROM users WHERE user_id ='".$_SESSION['userid']."'";
          $result = mysqli_query($con, $sql);
            
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "Email: " . $row["user_email"]. " <br>";
              }
            }
              ?>
      </div>
      <div>

          <?php

          $sql = "SELECT * FROM users WHERE user_id ='".$_SESSION['userid']."'";
          $result = mysqli_query($con, $sql);
            
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "Phone No: " . $row["user_phno"]. "  <br>";
              }
            }
              ?>
      </div>
      <div>

          <?php

          $sql = "SELECT * FROM users WHERE user_id='".$_SESSION['userid']."'";
          $result = mysqli_query($con, $sql);
            
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "Date of birth: " . $row["user_dob"]. " <br>";
              }
            }
              ?>
      </div>

      <div class="text-center"><a href="update_profile.php">Update Information</a></div>
  </div>    
      </main>
    <footer>

    </footer>
</body>

</html>
