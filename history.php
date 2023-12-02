<?php 
    include 'header.php';
     include 'function.php';
     $tmpp= new for_user;
     session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Purchased History</title>
<style>
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
.menu{
    padding:0;
    border:0;
    background-color: transparent;
}

.signin{
    padding-left:45px;
}

.head_history{
  display: grid;
    grid-template-columns: 6fr 4fr;
    padding: 1em;
    background: #5293da;
    font-size: larger;
    color: #f1f1f1;
    margin: 1em;
    border-radius: 10px;
}
.historydetails{
    display: grid;
    grid-template-columns: 2fr 4fr 4fr;
    padding: 1em;  
    color:#004897;
    background: white ;
    font-size: larger;
    margin:1em;
}

.aab{
    font-size:25px;
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
        <?php
            if(isset($_SESSION["userid"])){
                ?><div class="dropdown">
                <button class="dropbtn"><a class="item">welcome <?php echo $_SESSION["userfirstname"] ?></a></button>
                <div class="dropdown-content">
                  <a href="profile.php">Dashboard</a>
                  <a href="history.php">History</a>
                  <a href="newmain.php">Logout</a>
                  
                </div>
              </div><?php
            }else {
                ?><a class="item" href="Login.php">Sign in</a><?php
            }
        ?>
        </ul>
        </div>
    </nav>
    
    <main>
        <div class="head_history">
            <a> Purchased Tour
            </a>
            <a> Purchased Tickets
            </a>
        </div>
        <?php
            $result=$tmpp->user_tours();
            if($result -> num_rows >0){
                while($row = $result->fetch_assoc())
                { ?>
                    <div class="historydetails" >

                    <a><?php $tmpp->print_tour_images($row["tour_id"]); ?></a>
                    <a><?php $row1=$tmpp->fetch_data_tour($row["tour_id"]); echo $row1["tour_name"]."<br><br>"; $cap=$tmpp->print_tours_details($row["tour_id"]);?></a>
                    <a class="aab"><?php echo $row["tickiets_count"]?></a>
                    </div><?php
                }
            }
        ?>



    </main>
</body>
</html>