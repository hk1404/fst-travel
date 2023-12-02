<?php
class for_user{

    public function con_db(){
        $host="localhost";
        $user="root";
        $password="mysql";
        $db="fast_tour_db";
        $con=mysqli_connect($host,$user,$password);
        mysqli_select_db($con,$db);
        return $con;
       
    }
    public function get_user_id($x){
        $con=$this->con_db();
        $sql="SELECT * from users where user_email='$x'";
        $result=mysqli_query($con,$sql);
        if($result -> num_rows==1){
            $row=$result->fetch_assoc();
            return $row;
        }
    }

    public function check_user() {
        echo "<script>console.log('{hel11oo}' );</script>";
       $con=$this->con_db();

        if(isset($_POST['myusername'])){
            $uname=$_POST['myusername'];
            $password=$_POST['mypassword'];

            $sql="select * from users where user_email='".$uname."'AND user_pwd='".$password."'limit 1";

            $result=mysqli_query($con,$sql);
            if(mysqli_num_rows($result)==1){
                    session_start();
                        $row=$this->get_user_id($uname);

                        if(isset($_SESSION['userid'])){
                            if($_SESSION['userid']==$row['user_id']){
                                return "0";
 
                            }else{
                                $_SESSION["userid"]=$row["user_id"];
                        
                                $_SESSION["userfirstname"]=$row["user_firstname"];
                                echo "<script>console.log('{$row["user_firstname"]}' );</script>";
                                if($_SESSION['userid']==6 or $_SESSION["userfirstname"]=='root')
                                {
                                    header("location: admin.php");
                                }
                                else
                                {
                                    header("location: main.php");  
                                }
                            }
                        }else{
                            $_SESSION["userid"]=$row["user_id"];
                        
                                $_SESSION["userfirstname"]=$row["user_firstname"];
                                echo "<script>console.log('{$row["user_firstname"]}' );</script>";
                                if($_SESSION['userid']==6 or $_SESSION["userfirstname"]=='root')
                                {
                                    header("location: admin.php");
                                }
                                else
                                {
                                    header("location: main.php");  
                                }
                        }

                        
                exit();
            }
            else{
                return "1";
                exit();
            }
        }
    }

    public function add_user(){
        if(isset($_POST['signup'])){
            if($_POST['mypwd'] != $_POST['myre-pwd']){
                echo "Your passwords doen't match";
                exit();
            }
            else{
                $con=$this->con_db();

                if($_POST['myre-pwd']){
                    $password2=$_POST['myre-pwd'];
                    $sql="select * from users where user_pwd='".$password2."'limit 1";
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
    }

    public function fetch_tourid(){
        $con=$this->con_db();
        $query="SELECT * from `tours`";
        $result=mysqli_query($con,$query);

        if($result -> num_rows >0){
            return $result;
        }
        else{
            echo "0 result";
        }
    }


    public function fetch_data_tours($x){
        $con=$this->con_db();
        $query="SELECT * from `tours` where `tour_id`=$x";
        $result=mysqli_query($con,$query);

        if($result -> num_rows >0){
            $row=$result->fetch_assoc();
            $name=$row["tour_name"];
            $price=$row["tour_price"];
            $capacity=$row["tour_capacity"];
            $days=$row["tour_days"];
            $nights=$row["tour_nights"];
            $image=$row["tour_images"];

            return [$name,$price,$capacity,$days,$nights,$image,$row];
        }
        else{
            echo "0 result";
        }

    }

    public function fetch_data_tour($x){
        $con=$this->con_db();
        echo "<script>console.log('{hel11oo}' );</script>";
        $query="SELECT * from `tours` where `tour_id`=$x";
        $result=mysqli_query($con,$query);

        if($result -> num_rows >0){
            $row=$result->fetch_assoc();
            return $row;
        }
        else{
            echo "0 result";
        }

    }

    public function print_tour_images($x){
        $output="";
        list($name,$price,$capacity,$days,$nights,$image,$row)=$this->fetch_data_tours($x);
        $output .="<img src='images/".$row["tour_images"]."' style='width:200px; height:200px;'> <br>";
        echo $output;
    }

    public function print_tours_details($X){
        list($name,$price,$capacity,$days,$nights,$image,$row)=$this->fetch_data_tours($X);
        echo "Price: $".$price."<br>Tour Capacity: " .$capacity."<br>Duration: ".$days." days ".$nights." nights <br> Start date: ".$row['tour_startdate']."<br>End Date: ".$row['tour_enddate'];
        return $capacity;

    }

    public function add_tour_user(){
        
        $con=$this->con_db();
        $x=$_SESSION['userid'];

        if (isset($_SESSION['cart'])){
          foreach($_SESSION['cart']as $key => $tmpvalue){
            $y=$tmpvalue["TourID"];
            $z=$tmpvalue["Quantity"];
            $row=$this->fetch_data_tour($y);
            $newcap=$row["tour_capacity"]-$z;
            $sql="insert into user_tours (user_id,tour_id,tickiets_count) values ('$x','$y','$z')";            
            mysqli_query($con,$sql);
            $sql2 = " UPDATE tours SET tour_capacity='".$newcap."' WHERE tour_id = '".$y."'";
            mysqli_query($con,$sql2);

          }
          unset($_SESSION['cart']);
          echo '<script>alert("your tour is added")</script>';
        }


    }
    public function fetch_data_by_tour_type($c){
        $con=$this->con_db();
        echo "<script>console.log('' );</script>";
        $query="SELECT * from `tours` where `tour_type`=$c";
        $result=mysqli_query($con,$query);
        echo "<script>console.log('$c' );</script>";
        return $result;
    }


    public function user_tours(){
        $con=$this->con_db();
        $sql="SELECT * from user_tours where user_id=".$_SESSION['userid']."";
        $result=mysqli_query($con,$sql);
        return $result;

    }

    public function check_con1($p,$q,$r){
            $con=$this->con_db();
            echo $p;
            $query="SELECT * from `tours`";
            $result=mysqli_query($con,$query);
            echo empty($result);
            $a=0;
            if($result -> num_rows > 0){
                while($row3 = $result->fetch_assoc()){
                    if ($row3['tour_name']==$p){
                        if($q!=$row3['tour_startdate'] or $r!=$row3['tour_enddate'] ){

                            $a+=2;
                        }else{
                            $a+=1;
                        }
                    
                    }
                }
                if ($a%2==0){
                    return "true";
                }
                else{
                    return "false";
                }
                
            }else{                    
                return "true";
            }
    }

    public function add_tour(){
        $con=$this->con_db();
        if(empty($_POST['tname']) or empty($_POST['tprice']) or empty($_POST['tcapacity'])  or empty($_POST['tedate']) or empty($_POST['tsdate']) or empty($_FILES['timages']) or empty($_POST['ttype']) ){
            echo '<script>alert("please enter all details.")</script>';
        }else{
            
            $ec=$this->check_con1($_POST['tname'],$_POST['tsdate'],$_POST['tedate']);
            if($ec=="true"){
                $sql2="SELECT * from tours";
                $result=mysqli_query($con,$sql2);


                $today=date("Y-m-d");
                if($_POST["tsdate"]>$today && $_POST["tedate"]>$today && $_POST["tsdate"]<$_POST["tedate"]){
                    while($row = $result->fetch_assoc()){
                        $id=$row['tour_id'];
                    }
                    $id += 1;                        
                    if(isset($_POST['savechanges'])) {
                        $a=$_POST['tname'];
                        $b=$_POST['tprice'];
                        $c=$_POST['tcapacity'];
                        $e= abs((strtotime($_POST['tedate']) - strtotime($_POST['tsdate'])) / 86400) + 1;
                        $f=$e - 1;
                        $g=$_POST['ttype'];
                        $h=$_POST['tsdate'];
                        $i=$_POST['tedate'];
                        $filename = $_FILES['timages']['name'];
                        $filetmpname = $_FILES['timages']['tmp_name'];    
                        $folder = 'images';
                        move_uploaded_file($filetmpname, "$folder/$filename");
                        $sql="INSERT into tours (tour_id,tour_name,tour_price,tour_capacity,tour_images,tour_days,tour_nights,tour_type,tour_startdate,tour_enddate) values ($id,'$a',$b,$c,'$filename',$e,$f,'$g','$h','$i')";
                        mysqli_query($con,$sql);
                    }
                }
                else{
                    echo '<script>alert("please enter valid start date.")</script>';
                }
            }else{
                echo '<script>alert("tour exist with same date")</script>';
            }
        }
    }

    public function all_tours(){
        $con=$this->con_db();
        $sql2="SELECT * from tours";
                $result=mysqli_query($con,$sql2);
                return $result;
        
    }   
    public function edit_tour(){
        $con=$this->con_db();
        $row=$this->fetch_data_tour($_POST['etidd']);
        $a=$row['tour_capacity'];
        $b=$row['tour_startdate'];
        $c=$row['tour_enddate'];
        $po=0;

        if(empty($_POST['etcapacity'])){

        }else{
            $a=$_POST['etcapacity'];
        }
        if(empty($_POST['etsdate'])){}
        else{
            if($b!=$_POST['etsdate']){
            $b=$_POST['etsdate'];}else{
                $po+=1;
            }
        }
        if(empty($_POST['etedate'])){}
        else{
            if($c!=$_POST['etedate']){
                $c=$_POST['etedate'];}else{
                    $po+=1;
                }
        }
        if($po%2==0){
            echo '<script>alert("you had entered same dates as earlier!")</script>';
            
        }else{
            $today=date("Y-m-d");
            if($_POST["etsdate"]>$today && $_POST["etedate"]>$today && $_POST["etsdate"]<$_POST["etedate"]){

                $e= abs((strtotime($c) - strtotime($b)) / 86400) + 1;
                $f=$e - 1;

                $sql2= " UPDATE tours SET tour_enddate='".$c."',tour_startdate='".$b."',tour_capacity='".$a."',tour_days='".$e."',tour_nights='".$f."' WHERE tour_id = '".$_POST['etidd']."'";
                mysqli_query($con,$sql2);

                echo '<script>alert("Data successfully changed.")</script>';
            }
            else{
                echo '<script>alert("Please enter correct date!")</script>';
            }
            
        }
    }

    public function relocate(){
        header("location:main.php");
    }
}
?>

