<html>
<body>
    
<?php
    if(isset($_POST['signup'])){
        if($_POST['mypwd'] != $_POST['myre-pwd']){
            echo "Your passwords doen't match";
            exit();
        }
        else{
            $db="fast_tour_db";
            $con=mysqli_connect("localhost","root","mysql");
            mysqli_select_db($con,$db);
            if($_POST['myre-pwd']){
                $password2=$_POST['myre-pwd'];
                $sql="select * from users where user_pwd='".$password2;
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)==1){
                    echo "Password is already used! Please try onthor one.";
                }
                else{
                    $x=$_POST['myfirstname'];
                    $y=$_POST['mylastname'];
                    $z=$_POST['myemail'];
                    $w=$_POST['myre-pwd'];
                    $sql="insert into users (user_firstname,user_lastname,user_email,user_pwd) values ('$x','$y','$z','$w')";
                    mysqli_query($con,$sql);
                    header("Location:Login.php");
                }
            }
        }
    }
?>


</body>
</html>