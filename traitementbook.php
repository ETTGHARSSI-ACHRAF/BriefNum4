<?php
include "connexion.php";
if(isset($_POST['add'])){
    $title=$_POST['title'];
    $image=$_FILES['img']['name'];
    $prix=$_POST['prix'];
    $date=$_POST['date'];
    $upp="imageupload/".$image;
    move_uploaded_file($_FILES['img']['tmp_name'],$upp);
    $query1="INSERT INTO `livre`(`nomlivre`, `prix`, `datepub`, `image`) VALUES ('$title','$prix','$date','$image')";
    $result=mysqli_query($connect,$query1);
    
    $query2="SELECT idlivre FROM `livre` ORDER BY idlivre DESC LIMIT 1";
    $result=mysqli_query($connect,$query2);
    $row=$result->fetch_assoc();
    $idauthor=$_POST['authors'];
    $idlivre=$row['idlivre'];
    // echo $idauthor."</br>";
    // echo $idlivre;
    // print_r($row);
    // echo $row['idlivre'];
    $query3="INSERT INTO `livre_auteur`( `cin`, `idlivre`) VALUES ('$idauthor',$idlivre)";
    $result=mysqli_query($connect,$query3);
    // echo $query3;
     header('location:books.php'); 
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM `livre` WHERE idlivre=$id";
    $result=mysqli_query($connect,$query);
     header('location:books.php');
}
?>