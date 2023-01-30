<?php
require("connectionn.php");

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $sql="INSERT INTO signup (name,number,email,password) values (:name,:number,:email,:password)";
    $statement=$pdo->prepare($sql);
    

    $statement->bindParam(":name",$name,PDO::PARAM_STR);
    $statement->bindParam(":number",$number,PDO::PARAM_STR);
    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    header("location:home.php");
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
body{
    background-image: url("ss.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  
       
}
a{
   text-decoration: none;
   color: aliceblue;
}



.log{
       display: grid;
        grid-template-rows: repeat(1, 1fr);
        
       
        
        
        
      
    }
    .fill{
        margin-left: 130px;
        color: aliceblue;
    }
    
    .information{
        background-color: #3F2F2F;
        opacity: 0.9;
        grid-row: 1;
        margin-left: 30%;
        margin-top: 60px;
        height: 550px;
        width: 320px;
        border-radius: 20px;
     
    
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

 #box>*{
      padding: 12px;
      margin: 10px;
      height: 15px;
      font-size: 13px;
      color: #BAB1B6;
      
 }

 h1{
    text-align: center;
    color:#BAB1B6;
 }

 b{
    color: #BAB1B6;
    font-size: 10px;
    text-align: center;

 }
 .register{
    background-color: #3F2F2F;
   border-radius: 40%;
   margin-left: 200px;
   height: 30px;
   width: 100px;
   font-size: 15px;
   text-align: center;
   color:#BAB1B6;
   border: 1px solid #BAB1B6;
 }
 .login{
    margin-left: 180px; 
 }


 @media screen and (min-width:800px) {

body{
   background-image: url('sss.jpg');
 }



 .information{
    margin-left: 30%;
      height: 600px;
      width: 520px;
      border-radius: 20px;
    
 }
 .register{
    
   margin-left: 100px;
  
 }
 .login{
    margin-left: 180px; 
 }
 .register{
    
   margin-left: 202px;
  
 }
 }








</style>












<body>
    <div class="log">
    <form  class="information" action="" method="post">
        <br><br>
       <form  >
        <h1>Sign Up</h1>
        <br>
        <p class="fill">Please fill in this form to create an account.</p>
        <br>
        <br>
        <div id="box">
            <label for ='fname'>First Name</label>

            
        <input type="text" name="name" class="fname" placeholder="Enter Your First Name:">
        <br>
        <label for ='email'>Your Email</label>

        <input type="text" name="email" class="email" placeholder="Enter Your Email:">
        <br>
        <label for ='pass'>Your Password</label>

        <input type="password"name="password" class="pass" placeholder="Enter Your Password:">
        <br>
        <label for ='pNumber'>Phone Number</label>

        <input type="text" name="number" class="pNumber" placeholder="Enter Your Phone Number:">
        <br><br>
        
        
        
        </div>

        <br>
        
        <div class="submit">
        <button class="register" type="submit" value="logain" name="logain">Register</button>
            
                         </div>
        
        <br>
       <b class="login">Already have an account?
       <a href="home.php">Login</a></b>
      
</form>
    </form>
    </div>
    
    
</body>
</html>