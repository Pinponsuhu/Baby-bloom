<?php
session_start();
if(isset($_POST['login'])){
    include('./includes/config.php');
    $loginID = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE LoginID = '$loginID' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['is_admin'] = $row['is_admin'];
    $id = $_SESSION['id'];
    header('location: index.php');
    }else{
        header('location: login.php');
    }
    }
?>