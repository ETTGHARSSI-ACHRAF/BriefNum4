function nav() {
  var nav = document.getElementById("navcontenu");

  if (nav.getAttribute("vue") == "active") {
    document.getElementById("navcontenu").classList.remove("menu");
    nav.setAttribute("vue", "");
  } else {
    nav.setAttribute("vue", "active");
    document.getElementById("navcontenu").classList.add("menu");
  }
}

Array.from(document.querySelectorAll(".upload")).forEach(function (upload) {
  upload.onchange = uploadFile;
  console.log(upload);
});

function uploadFile() {
  var uploadfile = this.value.replace("C:\\fakepath\\", "");
  // console.log(this.value);
  // console.log(this.parentNode);
  this.parentNode.querySelector(".contentupload").innerText = uploadfile;
};

function validform(){
  var nom=document.getElementById("nom");
  var validnom=/^[a-zA-Z]+$/;
  var phone=document.getElementById("phone");
  var validphone=/^[0-9]{10}$/;
  var email=document.getElementById("email");
  const emailValide = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var message=document.getElementById("message");
  var c=0;
  if(nom.value==""|| validnom.test(nom.value)==false){
    alert("le nom est incorect");
    c++;
  }
  if(phone.value==""|| validphone.test(phone.value)==false){
    alert("phone est inccorect");
    c++;
  }
  if(email.value==""|| emailValide.test(email.value)==false){
    alert("email est inccorect");
    c++;
  }
  if(message.value==""|| message.value.length<20){
    alert("message est inccorect");
    c++;
  }
  if(c==0){
    alert("votre contenu est bien traiter");
  }
}

function trieparprix(){
  var prixmin=document.getElementById("prixmin").value;
  var prixmax=document.getElementById("prixmax").value;
  var prixboocks=document.getElementsByName("prix");
  var boock=document.getElementsByName("boock");
  
  for(var i=0;i<prixboocks.length;i++){
    // alert(i);
     //alert(alert(parseInt(prixboocks[i].innerText) >=parseInt(prixmin)  && parseInt(prixboocks[i].innerText) <=parseInt(prixmax)));
    if(parseFloat(prixboocks[i].innerText) >=parseFloat(prixmin)  && parseFloat(prixboocks[i].innerText) <=parseFloat (prixmax)){
      boock[i].style.display="block";
      // console.log(boock[i]);
      // alert(parseInt(prixboocks[i].innerText) >=parseInt(prixmin)  && parseInt(prixboocks[i].innerText) <=parseInt(prixmax));
    }else 
    {
      boock[i].style.display="none";
    }
    // alert("hhh");
  }
}
function trieparauthor(){
  var select=document.getElementById("select");
  // var select=document.getElementsByName("author");
  var author=document.getElementsByName("nom");
  var boock=document.getElementsByName("boock");
  for(var i=0;i<boock.length;i++){
    if(select.value==author[i].innerText){
      boock[i].style.display="block";
      // alert(i);
    }
    else{
      boock[i].style.display="none";
    
     }
    // alert("hhhhh");
  

  // alert(select.value);
}
}

// function update(){
//    document.getElementById("updatebtn").style.display="block";
//    document.getElementById("addbtn").style.display="none";
//   // alert("hhh");
// }
// function add(){
//   document.getElementById("updatebtn").style.display="none";
//    document.getElementById("addbtn").style.display="block";
// }
// echo "<tr class=content'> <td> <img src="imageupload/".$row["image"]." class="imageAuthor" alt="" /></td><td>".$row["cin"]."</td><td>".$row[""]."</td><td>";

