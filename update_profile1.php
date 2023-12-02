<?php 
  include 'function.php';
  $x = new for_user;
  $con=$x -> con_db();
  session_start();
 
  if(isset($_POST['savechanges'])){
      if(empty($_POST['myfname'])){
      }
      else{
          $sql = " UPDATE users SET user_firstname='".$_POST['myfname']."' WHERE user_id = '".$_SESSION['userid']."'";
          mysqli_query($con,$sql);
      }
      if(empty($_POST['mylname'])){
      }
      else{
          $sql = " UPDATE users SET user_lastname='".$_POST['mylname']."' WHERE user_id = '".$_SESSION['userid']."'";
          mysqli_query($con,$sql);
      }
      if(empty($_POST['mydob'])){
      }
      else{
          $sql = " UPDATE users SET user_dob='".$_POST['mydob']."' WHERE user_id = '".$_SESSION['userid']."'";
          mysqli_query($con,$sql);
      }
      if(empty($_POST['myphno'])){
      }
      else{
          $sql = " UPDATE users SET user_phno='".$_POST['myphno']."' WHERE user_id = '".$_SESSION['userid']."'";
          mysqli_query($con,$sql);
      }
      if(empty($_POST['mynewemail'])){
      }
      else{
          $email1=$_POST['mynewemail'];
          $sql="SELECT * from users where user_email='$email1'";
          $result=mysqli_query($con,$sql);
          if(mysqli_num_rows($result)==1){
              echo "Email is already used! Please try onthor one.";
          }
          else{
              $sql = " UPDATE users SET user_email='".$_POST['mynewemail']."' WHERE user_id = '".$_SESSION['userid']."'";
              mysqli_query($con,$sql);
          }
          
      }
      if(empty($_POST['myrepwd'])){
      }
      else{
          if($_POST['mynewpwd'] != $_POST['mynewrepwd']){
              echo "Your passwords doen't match";
              exit();
          }
          else{
              $con=$this->con_db();
              if($_POST['mynewrepwd']){
                  $password3=$_POST['mynewrepwd'];
                  $sql="SELECT * from users where user_pwd='".$password3."'limit 1";
                  $result=mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)==1){
                      echo "Password is already used! Please try onthor one.";
                  }
                  else{
                      $sql = " UPDATE users SET user_pwd='".$_POST['mynewrepwd']."' WHERE user_id = '".$_SESSION['user_id']."'";
                      mysqli_query($con,$sql);
                  }
              }
          }
      }
      header("Location:main.php");
  }
  else{
    header("Location:main.php");
  }
  ?>