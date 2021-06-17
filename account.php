<?php
session_start();
include"config.php";

include"config.php";
if($_GET['act'] == 'register'){
    if($_POST['password'] == $_POST['password2']){
        mysqli_query($koneksi,"insert into user(email,password,full_name,access)values('".$_POST['email']."','".md5($_POST['password'])."','".$_POST['full_name']."','admin')");
        header('location:fix-login.php');
    }else{
        header('location:fix-register.php?act=registererror');
    }
}

if($_GET['act'] == 'login'){
    
        $sql = mysqli_query($koneksi,"select * from user where email = '".$_POST['email']."' and password = '".md5($_POST['password'])."'");
        $data = mysqli_fetch_array($sql);
        $jumlah = mysqli_num_rows($sql);
        if($jumlah > 0){
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['access'] = $data['access'];

            header('location:fix-dashboard.php');

        }else{
            header('location:fix-login.php?act=loginerror');
        }
}
?>