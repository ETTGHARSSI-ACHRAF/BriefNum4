<?php
include ('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <script src="nav.js"></script>
    <script src="https://kit.fontawesome.com/bc3854343b.js" crossorigin="anonymous"></script>
    <title>Gallery</title>
</head>
<body>
<nav>
        <img src="image/white_logo.png" alt="logo" class="logo">
        <i class="fas fa-bars" id="navicone" onclick="nav()"></i>
        <ul id="navcontenu" class=" " vue="">
            <li><a  href="index.html" > <i class="fas fa-home"></i>Home</a></li>
            <li><a href="gallery.php" class="active"><i class="fas fa-images"></i>Gallery</a></li>
            <li><a href="contact.html"><i class="fas fa-file-signature"></i>Contact</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>sign in</a></li>
        </ul>
    </nav>
        <main>
            <div class="trie">
                <div class="authors">
                    <label for="select">Author</label>
                    <select name="authors" id="select" onchange="trieparauthor()">
                        <option ></option>
                        <?php
                        $query="SELECT nom FROM `auteur`";
                        $result=mysqli_query($connect,$query);
                        while($row=$result->fetch_assoc()){
                            echo "<option>$row[nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="pric">
                    <input type="text" class="prix" id="prixmin" placeholder="Prix Min">
                    <input type="text" class="prix" id="prixmax" placeholder="Prix Max">
                    <input type="button" value="trie"  id="btn" onclick="trieparprix()">
                </div>
                
            </div>
            <div class="boocks">
                <?php
                        $query="SELECT auteur.nom,livre.nomlivre,livre.prix,livre.datepub,livre.image FROM livre,auteur,livre_auteur WHERE livre.idlivre=livre_auteur.idlivre AND auteur.cin=livre_auteur.cin";
                        $result=mysqli_query($connect,$query);
                        while($row=$result->fetch_assoc()){
                        echo '<div class="boock" name="boock"> <img src="imageupload/'.$row["image"].'"><h3>'.$row["nomlivre"].'</h3><h5>date pub :'.$row["datepub"].' </h5><h5>autres : <span name="nom">'.$row["nom"].'</span> </h5><h5>prix :<span name="prix">'.$row["prix"].'</span> </h5><i class="far fa-heart"></i></div>';
                        }
                ?>  

                
            </div>
            
        </main>
    <footer>
        <h4>copyright © 2021 waterfull.com. all rights reserved</h4>
    </footer>
</body>
</html>