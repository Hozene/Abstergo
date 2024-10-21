<?php
    session_start();
    if ((!isset($_POST['username'])) || (!isset($_POST['password']))){
    	header('Location: index.php');
    	exit();
    }
    require_once "config.php";
    $connection= @new mysqli($host, $db_user, $db_password, $db_name);

if($connection->connect_errno!=0){
    echo "ERROR: ".$connection->connect_errno;
}else{
    $login=$_POST['username'];
    $password=$_POST['password'];
    $login=htmlentities($login, ENT_QUOTES, "UTF-8");

    if($result=@$connection->query(
    sprintf("SELECT * FROM users WHERE username='%s'",
    mysqli_real_escape_string($connection,$login)))){
        $how_many_users=$result->num_rows;
        if($how_many_users>0){
            $verse=$result->fetch_assoc();
        if(password_verify($password, $verse['pass'])){
            $_SESSION['LoggedIn']=true;
            $_SESSION['email']=$verse['email'];
            $_SESSION['user_level']=$verse['user_level'];
            if($_SESSION['user_level']=="1"){
                header("Location: admin.php");
                exit();
            }
            unset($_SESSION['Error']);
            $result->free_result();
            header('Location: support.php');

        }else{
            $_SESSION['Error'] = '<span style="color:red">Incorrect login or password</span>';
            header('Location: index.php');
        }}else{
            $_SESSION['Error'] = '<span style="color:red">Incorrect login or password</span>';
            header('Location: index.php');
        }
    }
    $connection->close();
}
