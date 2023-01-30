<?php
session_start();
require 'connectionn.php';

if(!isset($_SESSION['id']) && !isset ($_SESSION['privilleged'])){
header("location:home.php");
}




if(isset($_POST['addV'])){
    $_SESSION['V']++;
    unset($_POST['addV']);}
    if(isset($_POST['addT'])){
        $_SESSION['T']++;
        unset($_POST['addT']);}
        if(isset($_POST['addGa'])){
            $_SESSION['Ga']++;
            unset($_POST['addGa']);}
          
            
                    
if(isset($_POST['check'])){

$insert="INSERT INTO cart (Creme, Tarte, Gateau,total,customer_id)
VALUES (:Creme, :Tarte, :Gateau, :total, :customer_id)";
$statement=$pdo->prepare($insert);

$statement->bindParam(":Creme",$_SESSION['V'],PDO::PARAM_INT);
$statement->bindParam(":Tarte",$_SESSION['T'],PDO::PARAM_INT);
$statement->bindParam(":Gateau",$_SESSION['Ga'],PDO::PARAM_INT);
$statement->bindParam(":customer_id",$_SESSION['ID'],PDO::PARAM_INT);


$_SESSION['TOTAL']=$_SESSION['TOTAL']+($_SESSION['V']*13.00) + ($_SESSION['T']*13.95) + ($_SESSION['Ga']*12.95);
$statement->bindParam(":total",$_SESSION['TOTAL'],PDO::PARAM_INT);

$statement->execute();
header("location:cart.php");

}





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
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
background-color: rgb(186, 167, 161);
color:#3D220D}
   
    #cafe{
    height: 70px;
    width: 80px;
}
#logo{
    height: 70px;
    width: 80px; 
    
}
button{
    background-color:  white;
   border-radius: 20%;

   height: 20px;
   width: 100px;
   font-size: 7px;
   text-align: center;
   color:black;
   border: 1px solid  rgb(186, 167, 161);
}

       .navbar {
 
  /* width: 100%; */
  background-color: rgba(186, 167, 161, 0.362);
  display: flex;
  flex:1 100%; 
  align-items: center;
  justify-content: space-between;
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  right: 0;
  
    }
.navbar-brand {
    
    border:2px solid #3D220D;
}
.bas_logo{
    border:2px solid #3D220D;
}
audio{
        margin-top: 80px;
    }

/*-------*/
.containar{
    width: 1200px;
    margin: 100px auto;
    
}
.title{
    text-align: center;
    margin-bottom: 60px;
}
 .title h4{
    text-transform: capitalize;
    font-size: 36px;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
 }
 .title h4 span{
    display: block;
    font-size: 18px;
    font-style: italic;
    margin-bottom: -10px;
 }
 .title h4:before{
    position:absolute;
    content: "";
    width: 100px;
    height: 2px;
    background-color:  #32408C; 
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    
 }
 .menu{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
 }
 a{
    color: #6B5852;
    text-decoration: none;
 
}
 .single-menu{
    flex-basis: 580px;
    margin-bottom: 40px;
    padding-bottom: 40px;
    border-bottom: 1px solid #ddd;
 }
 .single-menu:nth-child(5),.single-menu:nth-child(6){
    border-bottom:0 ;
 }
 .single-menu{
    display: flex;
    flex-direction: row;
    align-items: center;

 }
 .single-menu:hover img{
    border-radius: 0;
 }
 .single-menu img{
    max-width: 180px;
    margin-right: 30px;
    border-radius: 50%;
    border: 1px solid #ddd;
    padding: 3px;
    transition: .5s;
 }
 .single-menu h4{
    text-transform: capitalize;
    font-size:22px ;
    border-bottom: 1px dashed #333;
    margin-bottom: 5px;
    padding-bottom: 5px;
 }
 .single-menu h4 span{
    float:right;
    color: #32408C;
    font-style: italic;
 }
 #remy{
    height: 300px;
    
 }
 /*...................................*/
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
    left: 0;
    bottom: 0;
    padding: 0;
    right: 0;
    position: relative;

    
}


/*for phone */
@media screen and (max-width:800px) {

.navbar {
 
  width: 100%;}


.menu{
    flex-direction: column;
    
}
.single-menu{
    flex-basis: 200px;
    
 }
 
 .single-menu h4{
    
    font-size:40px ;
 }
 
 .title h4 span{
    
    font-size: 38px;
   
    margin-bottom: -5px;
 }
 #de{
    font-size: 30px;
 }
 footer{
    position: fixed;
    height: 180px;
    font-size: 25px;

}
.one{
    order: 1;
}
.two{
    order: 2;
}
.three{
    order:4;
}
.four{
    
    order: 3;
}
#remy{
    height: 1000px;
    width: 700px;
    
 }
 button{
    
font-size: 20px;
   height: 50px;
   width: 200px;
 
}
}








</style>
</head>









<body>

    <!--navv-->
    <div class="navbar">
    
      <a class="navbar-brand" href="choose.html"><img id="logo"src="ma_logo.png" alt="logo"></a>

    
    
    <a class="navbar-brand " href="rs_menu.php">
        <img id="cafe"src="rs.png" alt="logo">
    </a>
  
        
          <a class="bas_logo" href="cart.php"><img id="logo"src="bas.png" alt="logo"></a>
          
          
       

    </div>
    <audio src="sound.mp3" controls="controls">
Your browser does not support the audio element.
</audio>

  <!---------------------------------------------------------------------------->
<div class="containar">
<div class="title">
    <h4><span>ratatouille for good food</span>Cafe Menu</h4>
    
</div>
<div class="menu">
<div class="single-menu one">
    <img class="img" src="11c.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Crème Brûlée<span>$13.00</span></h4>
    <p id="de">Vanilla Crème Brûlée</p>
    <form action="" method="post">
        <button type="submit" name="addV">Add To Cart</button>
    </form>

</div>
</div>



<div  class="single-menu two">
    <img class="img"src="1c.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Tarte au chocolat Valrhona, glace à la vanille<span>$13.95</span></h4>
    <p id="de">Chocolate tart, ganache, chocolate mousse, cocoa sauce, vanilla ice cream</p>
    <form action="" method="post">
        <button type="submit" name="addT">Add To Cart</button>
    </form>

</div>
</div>

<div class="remy three">

    <img id= "remy" src="mm_img.png" alt="img">

</div>


<div class="single-menu four">
    <img class="img"src="111c.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Gâteau au agrumes, crème fraise citron vert, fruits rouges tiède<span>$12.95</span></h4>
    <p id="de">Citrus cake, strawberry lime cream, warm berries compote</p>
    <form action="" method="post">
        <button type="submit" name="addGa">Add To Cart</button>
    </form>

</div>
</div>

<form action="cafe_menu.php" method="post">
    <button type="submit" name="check">Check Out</button>
</form>



</div>
</div>

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