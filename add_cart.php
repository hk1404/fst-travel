<?php
    include 'function.php';
    $tmpp= new for_user;
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["add_carts"])){
            if(isset($_SESSION["cart"])){

                $mytourids=array_column($_SESSION['cart'],'TourID');
                if(in_array($_POST["tourID"],$mytourids)){
                    echo "<script>alert('Item already in cart');window.location.href='main.php';</script>";
                }
                else{
                    $count=count($_SESSION['cart']);
                    $_SESSION["cart"][$count]=array('TourID'=> $_POST["tourID"],'Price'=>$_POST["price"], 'Quantity'=> $_POST["quantity"]);
                    print_r($_SESSION['cart']); 
                    echo "<script>alert('Item in cart');window.location.href='main.php';</script>";
                }
            }else {
                $_SESSION["cart"][0]=array('TourID'=> $_POST["tourID"],'Price'=>$_POST["price"], 'Quantity'=> $_POST["quantity"]);
                print_r($_SESSION['cart']); 
                echo "<script>alert('Item in cart');window.location.href='main.php';</script>";
            }
        }
    }

?>