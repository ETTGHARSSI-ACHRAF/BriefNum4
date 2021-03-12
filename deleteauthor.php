<?php
include('connexion.php');
if(isset($_GET['cn'])){
    $deletwithcin=$_GET['cn'];
    $query="DELETE FROM `auteur` WHERE cin='$deletwithcin'";
    mysqli_query($connect,$query);
    header("location:author.php");
     
    // echo $query;
// echo "hhh";
}
?>