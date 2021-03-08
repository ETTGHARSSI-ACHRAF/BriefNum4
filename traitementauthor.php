<?php
include('connexion.php');
     if(isset($_POST['fname'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $cin=$_POST['cin'];
    $datebirth=$_POST['datebirth'];
    $image=$_FILES['img']['name'];
 }
$erreurfname="";
$erreurlname="";
$erreurcin="";
$erreurdate="";
if(isset($_POST['add'])){
    if(empty($firstname)){
        $erreurfname="impotant first name";
    }
    if(empty($lastname)){
        $erreurlname="impotant last name";
    }
    if(empty($cin)){
        $erreurcin="impotant cin";
    }
    if(empty($datebirth)){
        $erreurdate="impotant date birth";
    }
    if($cin!=""&&$lastname!=""&&$firstname!=""&&$datebirth!=""&&$image!=""){
        $upp="imageupload/".$image;
        move_uploaded_file($_FILES['img']['tmp_name'],$upp);
        $query="INSERT INTO `auteur`(`cin`,`nom`, `prenom`, `date_naissance`, `image`) VALUES ('$cin','$lastname','$firstname','$datebirth','$image')";
        mysqli_query($connect,$query);
    }
    
    // echo $query;
}

if(isset($_POST['delet'])){
    $deletwithcin=$_GET['cn'];
    $query="DELETE FROM `auteur` WHERE cin='$deletwithcin'";
    mysqli_query($connect,$query);
    // echo $query;
}

?>