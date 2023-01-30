<?php
session_start();
require 'connectionn.php';
if(!isset($_SESSION['id']) && !isset ($_SESSION['privilleged'])){
    header("location:login_page.php");
    }
if(isset($_POST['addB'])){
    $_SESSION['B']++;
    unset($_POST['addB']);}
    if(isset($_POST['addF'])){
        $_SESSION['F']++;
        unset($_POST['addF']);}
        if(isset($_POST['addR'])){
            $_SESSION['R']++;
            unset($_POST['addR']);}
               if(isset($_POST['addG'])){
                    $_SESSION['G']++;
                     unset($_POST['addG']);}
                        if(isset($_POST['addP'])){
                            $_SESSION['P']++;
                             unset($_POST['addP']);}
                                 if(isset($_POST['addBb'])){
                                       $_SESSION['Bb']++;
                                        unset($_POST['addBb']);}
            
                    
if(isset($_POST['check'])){

$insert="INSERT INTO cart ( Brochette, Filet, Ratatouille, Gratin, Poulet, Boeuf,total,customer_id)
VALUES (:Brochette, :Filet, :Ratatouille, :Gratin, :Poulet, :Boeuf, :total, :customer_id)";
$statement=$pdo->prepare($insert);

$statement->bindParam(":Brochette",$_SESSION['B'],PDO::PARAM_INT);
$statement->bindParam(":Filet",$_SESSION['F'],PDO::PARAM_INT);
$statement->bindParam(":Ratatouille",$_SESSION['R'],PDO::PARAM_INT);
$statement->bindParam(":Gratin",$_SESSION['G'],PDO::PARAM_INT);
$statement->bindParam(":Poulet",$_SESSION['P'],PDO::PARAM_INT);
$statement->bindParam(":Boeuf",$_SESSION['Bb'],PDO::PARAM_INT);
$statement->bindParam(":customer_id",$_SESSION['ID'],PDO::PARAM_INT);


$_SESSION['TOTAL']=$_SESSION['TOTAL']+($_SESSION['B']*32.00) + ($_SESSION['F']*34.95) + ($_SESSION['R']*25.99)+($_SESSION['G']*24.95)+($_SESSION['P']*31.90)+($_SESSION['Bb']*33.95);
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
/* background-color: rgb(186, 167, 161);
color:#3D220D} */
/* background-image: url('menu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%; */
  background-color:white;

}
a{
    color: #6B5852;
    text-decoration: none;
 
}
   
    #cafe{
    height: 70px;
    width: 80px;
}
#logo{
    height: 70px;
    width: 80px; 
    
}

    .navbar {
 
  /* width: 100%; */
  background-color: rgb(186, 167, 161);
  display: flex;
  flex:1 100%; 
  align-items: center;
  justify-content: space-between;
  position:fixed;
    width: 100%;
  left: 0;
  top: 0;
  right: 0;
  border: .5px solid #3d220d8d;
  
 
    }
    audio{
        margin-top: 80px;
    }



/*-------*/
.containar{
    width: 1200px;
    margin: 100px auto;
    
}
button{
    background-color:  rgb(186, 167, 161);
   border-radius: 20%;

   height: 20px;
   width: 100px;
   font-size: 7px;
   text-align: center;
   color:black;
   border: 1px solid  rgb(186, 167, 161);
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
    background-color:  #BF1E2E; 
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    
 }
 .menu{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
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
    color: #BF1E2E;
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
    background-color: rgba(186, 167, 161, 0.362);
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
    
    width: 100%;
    height: 180px;
    font-size: 25px;
    position: fixed;

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
    <nav>
        <div class="navbar" >
            <a class="navbar-brand" href="choose.html"><img id="logo"src="ma_logo.png" alt="logo"></a>

      
            <a class="navbar-brand " href="cafe_menu.php">
            <img id="cafe"src="logo.png" alt="logo">
            </a>
    
            <a class="bas_logo" href="cart.php">
            <img id="logo"src="bas.png" alt="logo"></a>
        
        
        </div>
    </nav>
       
    <audio src="sound.mp3" controls="controls">
Your browser does not support the audio element.
</audio>

  <!---------------------------------------------------------------------------->
<div class="containar">
<div class="title">
    <h4><span>ratatouille for good food</span>Restaurant Menu</h4>
    
</div>
<div class="menu">
<div class="single-menu">
    <img class="img" src="1r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Brochette de crevettes à la Basque, sauce Aurore<span>$32.00</span></h4>
    <p id="de">Large shrimps marinated in tomato and garlic, griddled, and served on corn, mushrooms, and shallots with cauliflower and tomato velouté sauce
    </p>
    <form action="" method="post">
        <button type="submit" name="addB">Add To Cart</button>
    </form>

</div>
</div>



<div class="single-menu">
    <img class="img"src="2r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Filet de saumon mariné au vin blanc et citron, riz, sauce champagne<span>$34.95</span></h4>
    <p id="de">White wine and Lemon marinated sustainable Salmon, broiled and served with rice, sweet peas & carrots, champagne sauce</p>
    <form action="" method="post">
        <button type="submit" name="addF">Add To Cart</button>
    </form>
</div>
</div>

<div class="single-menu">
    <img class="img"src="3r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Ratatouille sur quinoa<span>$25.99</span></h4>
    <p id="de">Ratatouille served on quinoa with kale (Plant-based)</p>
    <form action="" method="post">
        <button type="submit" name="addR">Add To Cart</button>
    </form>

</div>
</div>


<div class="single-menu">
    <img class="img"src="4r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Gratin de macaroni
        <span>$24.95</span></h4>
    <p id="de">Macaroni baked with cream and Gruyère cheese</p>
    <form action="" method="post">
        <button type="submit" name="addG">Add To Cart</button>
    </form>

</div>
</div>

<div class="single-menu">
    <img class="img"src="5r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Poulet Fermier rôti à la Lyonnaise, purée de pommes de terre<span>$31.90</span></h4>
    <p id="de">Half all natural rotisserie chicken, mashed potatoes, tomato vinegar sauce</p>
    <form action="" method="post">
        <button type="submit" name="addP">Add To Cart</button>
    </form>

</div>
</div>

<div class="single-menu">
    <img class="img"src="6r.jpg" alt="Crème">
<div class="menu-contan">
    <h4>Boeuf Bourguignon, linguine<span>$33.95</span></h4>
    <p id="de">Braised beef in Cabernet, baby onions, carrots, pasta</p>
    <form action="" method="post">
        <button type="submit" name="addBb">Add To Cart</button>
    </form>

</div>
</div>

<form action="rs_menu.php" method="post">
    <button type="submit" name="check">Check Out</button>
</form>


</div>
</div>

</div>
<footer>
        
    <a class="story" href="video.html">OUR STORY    </a>
   
               <p class="contact-list">
               <a href="location.html"><p>Address:</p></a>
                 <p>798 South Park Avenue, New York, USA</p>
               </p>
    <p class="copyright">Aya2braheem © 2023</p>
      </footer>


</body>

</html>