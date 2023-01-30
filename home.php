<?php

session_start();
Require("connectionn.php");

if(isset($_POST['login'])){
    $sql="SELECT * from signup where email=:email and password=:password";
    $statement=$pdo->prepare($sql);
    $email=$_POST['email'];
    $password=$_POST['password'];


    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    error_reporting(E_ALL ^ E_WARNING);
      $row = $statement->fetchAll();


  $_SESSION['B']=0;
  $_SESSION['F']=0;
  $_SESSION['R']=0;
  $_SESSION['G']=0;
  $_SESSION['P']=0;
  $_SESSION['Bb']=0;
  $_SESSION['V']=0;
  $_SESSION['T']=0;
  $_SESSION['Ga']=0;
 
  $_SESSION['TOTAL']=0;





  $count = $statement->rowCount();
  if($count==1){

    $_SESSION['privilleged'] = $email;
    header("location:choose.php");

  }
  else{
    echo "<h3 style='color:red'> Invalid username or password </h3>";

  }
  foreach($row as $data){
    $_SESSION['ID'] = $data['id'];

  }
    
    $pdo=null;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <title>Ratatouille</title>
    <meta name="google-site-verification" content="wJrUqvwluFPA9vDH1TcmhR4U2oIr3mSy28x4u2hgWGI" />
    <meta name="description" content="Ratatouille restaurant for French food.">
    <meta name="keywords" content="Ratatouille, restaurant ,French food, movie">
    <meta name="author" content="Aya Ibraheem">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>
<style>
   *{
      padding: 0px;
      margin: 0px;
      box-sizing: border-box;
      font-family: "Amatic SC", sans-serif
   }
body {
  background-image: url('y11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
 
.containar{
   
   display: grid;
   grid-template-rows: repeat(10, 1fr);
   grid-template-columns: repeat(30, 1fr);
}

  

.bar>*{
   color: #BAB1B6;
   padding: 25px;
   text-align: center;
   font-size: 20px;
}


.bar{
   background-color:#3D220D;
   opacity: 0.9;
   grid-row: 1/1;
   grid-column: 1/31;
   height: 30px;
   

}
 a{
   text-decoration: none;
}

.a{
   background-color: #BF8E65;
   border-radius: 40%;

   height: 30px;
   width: 100px;
   font-size: 23px;
   text-align: center;
   color:#BAB1B6;
   border: 1px solid #a67b57;

 
  
   
}
.login{
   grid-row: 11;
   grid-column: 8;
   
}
.sign{
   grid-row: 13;
   grid-column: 8;
   
}


/*for login page*/
    
        .container{
            background-color: #3d220dce;
            width: 300px;
            margin: 50px;
            color:#BAB1B6 ;
        }
        
input {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 20%;
  
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  /* left: 0;
  top: 0; */
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  padding-top: 60px;
}
.bu{
   background-color: #BF8E65;
   border-radius: 20%;

   height: 25px;
   width: 50px;
   font-size: 18px;
   text-align: center;
   color:#BAB1B6;
   border: 1px solid #a67b57;
}

footer{
   background-color: #3D220D;
   width: 100%;
   height: 100px;
   margin-top: 300px;
}
/*for laptop*/







@media screen and (min-width:800px) {

   body{
      background-image: url('ll.jpg');
    }

    .bar>*{
  
   padding: 80px;
   
   font-size: 35px;
}

.bar{
   height: 45px;
   

}

.a{
   height: 50px;
   width: 200px;
   font-size: 25px;
   background-color: #6B5852;
   outline-color: #3D220D;
}


.login{
   grid-row: 8;
   grid-column: 11;
   

   
}
.sign{
   grid-row: 10;
   grid-column: 11;
   
}
.bu {
   background-color: #BF8E65;
   color:#BAB1B6;
   background-color: #6B5852;
   outline-color: #3D220D;
}
.container{
            
            width: 400px;
            margin-left: 500px;
            margin-top: 170px;
        }
}















</style>
</head>












<body>
   
<div  class="containar">
<div class="bar">
   <a class="home" href="#">HOME</a>
   <a class="menu" href="choose.php">MENU</a>
   <a class="contact" href="location.html"> CONTACT     </a>
   <a class="story" >OUR STORY    </a>
</div>



<button class="login a" onclick="document.getElementById('id01').style.display='block'">login</button>
<a  class =" sign a"href="signup.php">Sign Up</a>
<!--for login page -->
<div id="id01" class="modal">
   
  
    <!-- Modal Content -->
    
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="container">


   <span onclick="document.getElementById('id01').style.display='none'"
   class="close" title="Close Modal">&times;</span>
   <br>
   <h2>Login</h2>
   <br>
    <label for="email" ><b>Email</b></label>
    <input type="text" placeholder="Enter Yor Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button class="bu"type="submit" value="login" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>
  </form>
  <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>

    

</div>











</div>


  


</body>







