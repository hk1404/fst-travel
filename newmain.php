<html>
<body>
    
<?php
    session_start();
    $a=$_SESSION['userid'];
    session_destroy();
    if($a==4){
        header("Location:login.php");
    }else{
    header("Location:main.php");}
?>


</body>
</html>