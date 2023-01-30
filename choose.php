
<?php
session_start();
Require("connectionn.php");

if(!isset($_SESSION['id']) && !isset ($_SESSION['privilleged'])){
    header("location:home.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <title>Document</title>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
  background-image: url('2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}

.choose{
    color: aliceblue;
    font-size: 40px;
    display: grid;
    grid-template-columns: repeat(5 ,1fr);
    font-family: "Amatic SC", sans-serif;
    
}
.choose>*{
    grid-column: 3;
    width: 800px;
    padding-left: 60px;
}



.ch_containar{
    display: grid;
    grid-template-rows: repeat(3, 1fr);
   
}




#rs{
    height: 120px;
    width: 120px;
    transform: rotate(4deg);
    
}

.r_logo{
    grid-row: 1;
   padding-top: 60px;
    padding-left: 155px;
}
a{
    color: #eee7e5;
    text-decoration: none;
 
}
footer>*{
    color: #eee7e5;
    margin: 5px;
    text-align: center;
    
}
footer{
    background-color: rgba(186, 167, 161, 0.362);
    border:2px solid #3D220D;
    width: 100%;
    height: 80px;
    font-size: 10px;
    position: fixed;
  left: 0;
  bottom: 0;
    padding: 0;
    
    
}

    

#logoc{
    height: 200px;
    width: 180px; 
}
.c_logo{
    padding-left: 850px;
    padding-top: 13px;
    grid-row: 2;
}



@media screen and (max-width:800px) {

body{
   background-image: url('mp.png');
 }
 #logoc{
    height: 400px;
    width: 380px; 
 }
 .c_logo{
    padding-left: 130px;
    padding-top: 120px;
    grid-row: 2;
}
#rs{
    height: 300px;
    width: 280px; 
    transform: rotate(4deg);
    
}

.r_logo{
    grid-row: 1;
   padding-top: 170px;
    padding-left: 210px;
}
}





</style>
















</head>










<body>
    <div class="choose">
        <p>Click on the restaurant or cafe logo to go to the menu</p>
        
    </div>
    
    <div class="ch_containar">
     

     
     <section class="r_logo">

        <a class="resturant" href="rs_menu.php" >
            <img id="rs"src="rs.png" alt="logo">
        </a>
     </section>
     <section class="c_logo">
        <a href="cafe_menu.php" class="logoc">
            <img id="logoc"src="logo.png" alt="logo">
        </a>
     </section>
    

    </div>
    <footer>
        
   
              <p class="contact-list">
                <a href="location.html"><p>Address:</p></a>
                
                <p>798 South Park Avenue, New York, USA</p>
              </p>
   <p class="copyright">Aya2braheem © 2023</p>
     </footer>

</body>
</html>