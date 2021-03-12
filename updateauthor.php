<?php
include('connexion.php');
if(isset($_GET['cn'])){
    $cin=$_GET["cn"];
    

}
if(isset($cin)){
    $query="SELECT * FROM auteur WHERE cin='$cin'";
    $result=mysqli_query($connect,$query);
    while($row=$result->fetch_assoc()){
        $fname= $row['nom'];
        $lname=$row['prenom'];
        $image=$row['image'];
        $date=$row['date_naissance'];
    }
}



if(isset($_POST["update"])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cin=$_POST['cin'];
    $date=$_POST['datebirth'];
    $image=$_FILES['img']['name'];
    if(isset($image)){
        $query="UPDATE `auteur` SET `nom`='$fname',`prenom`='$lname',`date_naissance`='$date' WHERE `cin`='$cin'";
  
        $test=mysqli_query($connect,$query);
         if($test){
             echo "hhh";
         }else{
             echo "non";
         }
    }else{
        $upp="imageupload/".$image;
    move_uploaded_file($_FILES['img']['tmp_name'],$upp);
    $query="UPDATE `auteur` SET `nom`='$fname',`prenom`='$lname',`date_naissance`='$date',`image`='$image' WHERE `cin`='$cin'";
  
    $test=mysqli_query($connect,$query);
     if($test){
         echo "hhh";
     }else{
         echo "non";
     }
    }
    
//    header("location:author.php");
}
?>