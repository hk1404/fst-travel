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
session_start();
?>
<style>
body {
	color: #000;
	background: #fff;
	font-family: 'Roboto', sans-serif;
  
}
.form-control {
	height: 40px;
	box-shadow: none;
  width: auto;
}

.form-control1{
  height: 40px;
	box-shadow: none;
  width:150%;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn, .savechanges {        
	border-radius: 5px;
}
.container {
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
	background: #5293da;
  box-shadow: 0px 2px 2px rgb(0 0 0 / 30%);
  padding: 15px;
  border-radius: 20px;
}
.container .form-group {
  display:grid;
  grid-template-columns: 0.7fr 1fr;
  align-items: center;
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


.menu{
    padding:0;
    border:0;
    background-color: transparent;
}

.signin{
    padding-left:45px;
}
#twobtn{
  display: inline-flex;
}
.col-md-9{
  margin-left: auto;
  margin-right: auto;
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

    
   

    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
      
      <div class="col-md-9">
        
        <h3>Personal info</h3>
        
        <form action="update_profile1.php" method="post">
          <div class="form-group">
            <a>  First name:</a>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="myfname" placeholder="First name">
            </div>
          </div>
          <div class="form-group">
            <a>Last name:</a>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="mylname" placeholder="Last name">
            </div>
          </div>
          <div class="form-group">
            <a>Date of birth:</a>
            <div class="col-lg-8">
              <input class="form-control" type="date" name="mydob" placeholder="Date of birth">
            </div>
          </div>
          <div class="form-group">
            <a>Phone Number:</a>
            <div class="col-lg-8">
              <input class="form-control" type="number" name="myphno" placeholder="Phone number">
            </div>
          </div>
          <div class="form-group">
            <a>Email:</a>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="mynewemail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <a>Password:</a>
            <div class="col-md-8">
              <input class="form-control" type="password" name="mynewpwd" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <a>Confirm password:</a>
            <div class="col-md-8">
              <input class="form-control" type="password" name="mynewrepwd" placeholder="Confirm Password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8" id="twobtn">
              <input type="submit" class="btn btn-primary" name="savechanges"  value="Save Changes">
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>   
      </main>
    <footer>

    </footer>
</body>

</html>


