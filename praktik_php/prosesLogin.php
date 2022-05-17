<?php
    include "myconnection.php";

    $username=$_POST["username"];
    $pasword=md5($_POST["pasword"]);

    $query = "SELECT * FROM user WHERE username='$username' && pasword='$pasword'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0){
        header("Location:homeCRUD.php");
    }
    else{
        header("Location:loginForm.php?error=gagal");
    }
?>