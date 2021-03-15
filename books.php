<?php
include "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="books.css">
    <script defer src="nav.js"></script>
    <script src="https://kit.fontawesome.com/bc3854343b.js" crossorigin="anonymous"></script>
    <title>Books</title>
</head>
<body>
<nav>
        <img src="image/white_logo.png" alt="logo" class="logo">
        <i class="fas fa-bars" id="navicone" onclick="nav()"></i>
        <ul id="navcontenu" class=" " vue="">
            <li><a  href="index.html" > <i class="fas fa-home"></i>Home</a></li>
            <li><a href="gallery.php" ><i class="fas fa-images"></i>Gallery</a></li>
            <li><a href="contact.html"><i class="fas fa-file-signature"></i>Contact</a></li>
            <li><a href="books.php" class="active"><i class="fas fa-book"></i>Books</a></li>
            <li><a href="author.php"><i class="fas fa-address-card"></i>Author</a></li>
        </ul>
    </nav>
<h1>Books</h1>
<div class="plusButton">
    <a href="#popup2"><i class="fas fa-plus-square"></i></a>
</div>
<main>
    <table class="tableau">
        <tr class="content">
            <th>Image</th>
            <th>Name</th>
            <th>Author</th>
            <th>Price</th>
            <th>Publication Date</th>
            <th>Management</th>
        </tr>
        <?php
        $query="SELECT livre.idlivre,livre.image,livre.nomlivre,auteur.nom,livre.prix,livre.datepub FROM auteur,livre,livre_auteur WHERE auteur.cin=livre_auteur.cin AND livre_auteur.idlivre=livre.idlivre";
        $result=mysqli_query($connect,$query);
        while($row=$result->fetch_assoc()){
         echo '<tr class="content"><td><img src="imageupload/'.$row["image"].'" class="imagebooks" alt="" /></td><td>'.$row["nomlivre"].'</td><td>'.$row["nom"].'</td><td>'.$row["prix"].'</td><td>'.$row["datepub"].'</td><td><a href=""><i class="fas fa-edit"></i></a> <a name="delet" href="traitementbook.php?id='.$row['idlivre'].'"><i class="fas fa-trash"></i></a></td></tr>';
        }
        ?>  

        
    </table>
    <div id="popup2" class="overlay">
        <div class="popup">
            <h2>Add a Book</h2>
            <a class="close" href="books.php">&times;</a>
            <form class="content" method="post" action="traitementbook.php" enctype="multipart/form-data">
            <div class="custom-file">
            <label class="contentupload" for="upload">Choose file</label>
            <span class="buttonupload">Uploud file</span>
            <input type="file" class="upload" name="img" multiple />
          </div>
            
                <div class="popupInput">
                    <input type="text" class="inputs" name="title" placeholder="Book Tittle"/>
                    <select name="authors" class="inputs" id="select" onchange="trieparauthor()">
                        <option disabled selected hidden>Authors</option>
                        <option   ></option>
                        <?php
                        $query="SELECT * FROM `auteur`";
                        $result=mysqli_query($connect,$query);
                        while($row=$result->fetch_assoc()){
                            echo "<option value='".$row['cin']."'>$row[nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="popupInput">
                    <input type="number" class="inputs" name="prix" placeholder="Price"/>
                    <input type="text" class="inputs" name="date" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Publication Date"/>
                </div>
                <div class="buttonpopup">
                    <button class="popbutton" name="add">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- update forme -->

</main>
    <!-- <footer>
        <h4>copyright © 2021 waterfull.com. all rights reserved</h4>
    </footer> -->
</body>
</html>