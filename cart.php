<!DOCTYPE html>
<meta charset="utf-8"> 
<html lang="en">
<?php 
      include 'header.php';
     include 'function.php';
     $tmpp= new for_user;
     session_start();
     if(isset($_POST['keys'])) {
      array_splice($_SESSION['cart'],$_POST['keys'],1);

    }
    if(isset($_POST['payment'])) {
      if(isset($_SESSION['userid'])){
        $tmpp->add_tour_user();
      }else{
        echo '<script>alert("you need to login first")</script>';
        header("Location:login.php");
      }
      
      

    }
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shoping List</title>
  <link rel="stylesheet" href="MP2.css">

  <style>
    body {
	background: #fff;
	font-family: 'Roboto', sans-serif;
}
    .tourdetails{
    display:grid;
    grid-template-columns: 2fr 4fr 0.4fr 1.8fr 1.8fr ;
    grid-auto-rows: minmax(200px,auto);
    color: #004897;}
    
  .totalamount{
    padding: 1em;
    background: #5293da;
    font-size: larger;
    color: #ffffff;
    border-radius: 10px;
    text-align: center;

}
  .button1 {
  border: none;
  background-color:white;
  text-decoration: none;
  display: inline-block;
}

    .tourdetails{
    display:grid;
    grid-template-columns: 2fr 4fr 0.4fr 1.8fr 1.8fr ;
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
.part1 {
    display: grid;
    grid-template-columns:6fr 1.9fr 1.5fr;
    padding: 1em;
    background: #5293da;
    font-size: larger;
    color: #fff;
    border-radius: 10px;
}

.menu{
    padding:0;
    border:0;
    background-color: transparent;
}


.signin #item {
    display: block;
    height: 100%;
    width: 50px;
    background-color: #5293da;
    text-decoration: none;
    align-items: center;
    border-radius: 10px;
    padding: 10px;
}



</style>

  </style>
</head>

<body >
    <header>
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

    </header>
    
    
    
    <main>
      <div class="part1">
        <a >
          Tours
        </a>
        <a>
          Quantity
        </a>
        <a>
          Subtotal
        </a>               
      </div>
      
      <div class="tourdetails" >
        <?php
        if (isset($_SESSION['cart'])){
          $num=0;
          $totaltickiets=0;
        foreach($_SESSION['cart']as $key => $tmpvalue){
          $row=$tmpp->fetch_data_tour($tmpvalue['TourID']);?>
          
          <a><img  src="images/<?php echo $row['tour_images']?>" width="200px" height="200px"></a>
          <a><?php echo "<h2>".$row["tour_name"]."</h2>"; $tmpp->print_tours_details($tmpvalue['TourID']);?> 
             
          </a>      
          <a> <form method="post">
              <input type="hidden" name="keys" value="<?php echo $key?>">
              <input type="image" src="images/delete.png"  alt="Submit" width="20px" height="20px">
              </form>
            <a ><h3><form method="post">
              <?php $q="quantity";$p=(string)$key; $quantity2=$q.$p;?>
              <input type="number" id="quantity" name="<?php echo $quantity2;?>" min="1" max="<?php echo $row["tour_capacity"] ?>" value="<?php 

                if (isset($_POST[$quantity2])){
                echo $_POST[$quantity2];}
                else{
                  echo $tmpvalue['Quantity'];
                }
              
              ?>">
              
            </form></h3></a>

            <a><h3><?php 
              if (isset($_POST[$quantity2])){
                echo "<script>console.log(".$tmpvalue["Quantity"]."".$tmpvalue["TourID"]." );</script>";
                
                $tmpvalue['Quantity']=$_POST[$quantity2];
                $subprice[$key]=$row['tour_price']*$tmpvalue['Quantity'];        
                unset($_POST[$quantity2]) ;
                $_SESSION['cart'][$key]=array_replace($_SESSION['cart'][$key],$tmpvalue);
              }else{
                $subprice[$key]=$row['tour_price']*$tmpvalue['Quantity'];
              }
            $totaltickiets+=$tmpvalue['Quantity']; 
            echo "CAD $".$subprice[$key]. "  ";
            ?>
            </h3></a><?php
        }
        }
        ?>
        <a></a>
        <a></a>
        <a></a>
        <a class="totalamount">
          Subtotal: 
          <br><br>Tax:
          <br><br>Total:
        </a>
        <a class="totalamount">
          <?php 
          if (isset($_SESSION['cart'])){
            if (empty($_SESSION['cart'])){
              echo "$ 0<br><br>";
              echo "$ 0<br><br>";
              echo "$ 0<br><br>";
            }else{
              $subtotal=array_sum($subprice); echo "$ ".$subtotal; ?>
              <br><br><?php $tax=$subtotal*0.05; echo "$ ".$tax?>
              <br><br><?php $total=$subtotal+$tax; echo "$ ".$total?>
              <br><br><form method="post">
              <!--<input type="hidden" name="totalretun" value="<?php echo $total?>">-->
              <input type="hidden" name="totaltickiets" value="<?php echo $totaltickiets?>">
              <input type="submit"  name="payment" value="Click to pay">
              </form><?php 
            }
          }else{
            echo "$ 0<br><br>";
            echo "$ 0<br><br>";
            echo "$ 0<br><br>";

          }?>
          
        </a>


      </div>  


                          






    </main>
    <footer>

    </footer>
</body>

</html>