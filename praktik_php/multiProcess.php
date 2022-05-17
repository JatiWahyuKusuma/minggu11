<?php
    include "myconnection.php";

    $username=$_POST["username"];
    $pasword=md5($_POST["pasword"]);

    $query = "SELECT * FROM user WHERE username='$username' && pasword='$pasword'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level']== "1"){
        header("Location:homeCRUD.php");
    }
    else if($row['level']== "2"){

        header("Location:homeGuest.html");
    }
    else{
        header("Location:multiLogin.php?error=gagal");
    }
?>