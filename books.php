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
        <tr class="content">
            <td><img src="image/books image/1.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a>  <i class="fas fa-trash"></i></td>
        </tr>
        <tr class="content">
            <td><img src="image/books image/2.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/3.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/4.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/5.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/6.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/7.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/8.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/9.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
        <tr class="content">
            <td><img src="image/books image/10.jpg" class="imagebooks" alt=""></td>
            <td>CAN'T HURT ME</td>
            <td>David Goggins</td>
            <td>$17.83</td>
            <td>15/11/2018</td>
            <td><a href=""><i class="fas fa-edit"></i></a> <i class="fas fa-trash"></i></td>            
        </tr>
    </table>
    <div id="popup2" class="overlay">
        <div class="popup">
            <h2>Add a Book</h2>
            <a class="close" href="#">&times;</a>
            <form class="content">
            <div class="custom-file">
                <label class="contentupload" for="upload">Choose file</label>
                <span class="buttonupload">Uploud file</span>
                <input type="file" id="upload" multiple >
              </div>
            
                <div class="popupInput">
                    <input type="text" class="inputs" placeholder="Book Tittle"/>
                    <select name="authors" class="inputs" id="select" onchange="trieparauthor()">
                        <option disabled selected hidden>Authors</option>
                        <option  name="author" >author1</option>
                        <option  name="author">author2</option>
                        <option  name="author">author3</option>
                    </select>
                </div>
                <div class="popupInput">
                    <input type="number" class="inputs" placeholder="Price"/>
                    <input type="text" class="inputs" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Publication Date"/>
                </div>
                <div class="buttonpopup">
                    <button class="popbutton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
    <footer>
        <h4>copyright © 2021 waterfull.com. all rights reserved</h4>
    </footer>
</body>
</html>