<?php
include('traitementauthor.php');
include('updateauthor.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="author.css" />
    <script defer src="nav.js"></script>
    <script
      src="https://kit.fontawesome.com/bc3854343b.js"
      crossorigin="anonymous"
    ></script>
    <title>Author</title>
  </head>
  <body>
  <nav>
        <img src="image/white_logo.png" alt="logo" class="logo">
        <i class="fas fa-bars" id="navicone" onclick="nav()"></i>
        <ul id="navcontenu" class=" " vue="">
            <li><a  href="indexAdmin.html" > <i class="fas fa-home"></i>Home</a></li>
            <li><a href="books.php" ><i class="fas fa-book"></i>Books</a></li>
            <li><a href="author.php" class="active"><i class="fas fa-address-card"></i>Author</a></li>
            <li><a href="index.html"><i class="fas fa-sign-in-alt"></i>sign up</a></li>
        </ul>
    </nav>
    <h1>Author</h1>
    <div class="plusButton">
      <a href="#popup1" ><i class="fas fa-plus-square"></i></a>
    </div>
    <main>
      <table class="tableau">
        <tr class="content">
          <th>Image</th>
          <th>CIN</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date of birth</th>
          <th>Management</th>
        </tr>
        <?php
        $query="SELECT * FROM `auteur`";
        $result=mysqli_query($connect,$query);
        while($row=$result->fetch_assoc()){
         echo '<tr class="content"><td><img src="imageupload/'.$row["image"].'" class="imageAuthor" alt="" /></td><td>'.$row["cin"].'</td><td>'.$row["nom"].'</td><td>'.$row["prenom"].'</td><td>'.$row["date_naissance"].'</td><td><a href="author.php?cn='.$row["cin"].'#popup2"><i class="fas fa-edit"></i></a> <a name="delet" href="deleteauthor.php?cn='.$row["cin"].'"><i class="fas fa-trash"></i></a></td></tr>';
        //  $cin=$row['cin'];
        //  $lname=$row['prenom'];
        //  $fname=$row["nom"];
        //  $date=$row["date_naissance"];
        //  $image=$row["image"];
        }
        ?>   
      </table>
      <!-- add -->
      <div id="popup1" class="overlay">
        <div class="popup">
          <h2>Add an Author</h2>
          <a class="close" href="author.php">&times;</a>
          <form class="content" method="POST" action="author.php#popup1" enctype="multipart/form-data">
          <!-- *******Upload photo***** -->
          <div class="custom-file">
            <label class="contentupload" for="upload">Choose file</label>
            <span class="buttonupload">Uploud file</span>
            <input type="file" class="upload" name="img" multiple />
          </div>
          <!-- *******form INput***** -->
          
            <div class="popupInput">
              <input type="text" class="inputs" name="fname" placeholder="First Name" />
              <span><?=$erreurfname?></span>
              <input type="text" class="inputs" name="lname" placeholder="Last Name" />
              <span><?=$erreurlname?></span>
            </div>
            <div class="popupInput">
              <input type="text" class="inputs" name="cin" placeholder="CIN" />
              <span><?=$erreurcin?></span>
              <input type="text" class="inputs" name="datebirth" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Publication Date"/>
              <span><?=$erreurdate?></span>
            </div>
            <div class="buttonpopup">
              <input type="submit" name="add" value="Add"  class="popbutton" id="addbtn">
              
              <!-- <button class="popbutton">Submit</button> -->
            </div>
          </form>
        </div>
      </div>

      <!-- update -->
      
      <div id="popup2" class="overlay">
        <div class="popup">
          <h2>Update an Author</h2>
          <a class="close" href="author.php">&times;</a>
          
          <form class="content" method="POST" action="author.php" enctype="multipart/form-data">
          
          <!-- *******Upload photo***** -->
          <div class="custom-file">
            <label class="contentupload"  for="upload"><?=$image?></label>
            <span class="buttonupload" >Uploud file</span>
            <input type="file" class="upload"  name="img" multiple />
          </div>
          <!-- *******form INput***** -->
          
            <div class="popupInput">
              <input type="text" class="inputs" name="fname" value="<?=$fname?>" placeholder="First Name" />
              <span><?=$erreurfname?></span>
              <input type="text" class="inputs" name="lname" value="<?=$lname?>"  placeholder="Last Name" />
              <span><?=$erreurlname?></span>
            </div>
            <div class="popupInput">
              <input type="text" class="inputs" name="cin" value=<?=$cin?>  placeholder="CIN" />
              <span><?=$erreurcin?></span>
              <input type="text" class="inputs" name="datebirth" onfocus="(this.type='date')" value=<?=$date?> onblur="(this.type='text')" placeholder="Publication Date"/>
              <span><?=$erreurdate?></span>
            </div>
            <div class="buttonpopup">
              <input type="submit" name="update" value="Update"  class="popbutton" id="addbtn">
              
              <!-- <button class="popbutton">Submit</button> -->
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- <footer>
      <h4>copyright © 2021 waterfull.com. all rights reserved</h4>
    </footer> -->
  </body>
</html>
