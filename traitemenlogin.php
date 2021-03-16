<?php
include "connexion.php";
if(isset($_POST['login'])){
    $usernam=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT `name`, `password` FROM `admin` WHERE name='$usernam' AND password='$password'";
    if($row=mysqli_num_rows(mysqli_query($connect,$query))>0){
        $_SESSION['login']=$usernam;
        header('Location:indexAdmin.html');
    }else{
        header('Location:login.php');
        // echo("<SCRIPT LANGUAGE='JavaScript'>
        //             window.alert('Invalid Login or Password');
        //             </SCRIPT>");
                          
    }
}
?>