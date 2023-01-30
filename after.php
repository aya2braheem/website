<?php
// if(!isset($_SESSION['id']) && !isset ($_SESSION['privilleged'])){
//     header("location:home.php");
//     }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
      padding: 0px;
      margin: 0px;
      box-sizing: border-box;
      font-family: "Amatic SC", sans-serif
   }
body {
  background-image: url('after.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
 .log{
    height: 200px;
    width: 200px;
    padding-left:1400px;
}
.thanx{
    display: grid;
    grid-template-columns: repeat(2 1fr);
    background-color: #321e1e00;
    margin-top: 510px;
    margin-left: 620px;
    width: 600px;
    height: 100px;
    border-radius: 10px;
    border: 2px solid #321e1e;
    

}
a{
    color: #6B5852;
    text-decoration: none;
 
}
.thanx>*{
 grid-column: 2;
 color: #6B5852;
text-align: center;
margin: 5px; 
margin-top: 15px;
 

}
footer>*{
    color: #6B5852;
    margin: 5px;
    text-align: center;
    
}
footer{
    background-color: rgba(186, 167, 161, 0.753);
    border:2px solid #3D220D;
    width: 100%;
    height: 80px;
    font-size: 10px;
    position: fixed;
  left: 0;
  bottom: 0;
    padding: 0;
    
    
}
#logo{
    height: 50px;
    width: 50px; 
    
}
.a{
    color: rgba(186, 167, 161, 0.753);
}
/*for phone */
@media screen and (max-width:800px) {
    .thanx{
    
    
    margin-top: 1800px;
    margin-left: 480px;
    width: 700px;
    height: 200px;
    
    

    

}
.thanx>*{
 grid-column: 2;
 color: #6B5852;
text-align: center;
margin: 5px; 
margin-top: 15px;
font-size: 40px;
 

}

 footer{
    
    width: 100%;
    height: 180px;
    font-size: 25px;

}
#logo{
    height: 100px;
    width: 100px; 
    
}
}



    </style>
</head>
















<body>
    <a href="choose.php" class="logo">
        <img id="logo"src="ma_logo.png" alt="logo">
    </a>
    <a href="logout.php" class="log">
        <img id="logo"src="log.png" alt="logo">
    </a>
   

    
    <div class="thanx">
        <p> thank you!Your food is being prepared Make the time pass by watching our <a class="a" href="video.html"> movie</a> while the chef is preparing your food </p>
        
    </div>
    <footer>
        
        
        <h5>Contacts</h5>
                   <p class="contact-list">
                    <a href="location.html"><p>Address:</p></a>
                     <p>798 South Park Avenue, New York, USA</p>
                   </p>
        <p class="copyright">Aya2braheem © 2023</p>
          </footer>
</body>
</html>