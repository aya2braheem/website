<?php
session_start();
require 'connectionn.php';

if(isset($_POST['edit'])){
    $edit="UPDATE cart SET Brochette=:Brochette, Filet=:Filet,Ratatouille=:Ratatouille,
    Gratin=:Gratin,Poulet=:Poulet,Boeuf=:Boeuf, Creme=:Creme, Tarte=:Tarte, Gateau=:Gateau, total=:total WHERE cart_id=:cart_id";
    $statement=$pdo->prepare($edit);

  $a=$_post['a']=0;
  $b=$_post['b']=0;
  $c=$_post['c']=0;
  $d=$_post['d']=0;
  $e=$_post['e']=0;
  $f=$_post['f']=0;
  $g=$_post['g']=0;
  $h=$_post['h']=0;
  $i=$_post['i']=0;
  


    $statement->bindParam(":Brochette",$a,PDO::PARAM_INT);
    $statement->bindParam(":Filet",$b,PDO::PARAM_INT);
    $statement->bindParam(":Ratatouille",$c,PDO::PARAM_INT);
    $statement->bindParam(":Gratin",$d,PDO::PARAM_INT);
    $statement->bindParam(":Poulet",$e,PDO::PARAM_INT);
    $statement->bindParam(":Boeuf",$f,PDO::PARAM_INT);
    $statement->bindParam(":Creme",$g,PDO::PARAM_INT);
    $statement->bindParam(":Gateau",$h,PDO::PARAM_INT);
    $statement->bindParam(":Tarte",$i,PDO::PARAM_INT);
    $statement->bindParam(":cart_id",$_GET['cart_id'],PDO::PARAM_INT);

  
    $_SESSION['TOTAL']=0;
    $_SESSION['TOTAL']=$_SESSION['TOTAL']+($a*13.00) + ($b*13.95) + ($c*12.95)+($d*32.00) + ($e*34.95) + ($f*25.99)+($g*24.95)+($h*31.90)+($i*33.95);
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
      body{
        background-color: rgb(186, 167, 161);

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
   a{
    color: #6B5852;
    text-decoration: none;
 
}


        .cart-page {
  width: 80%;
  margin: 0 auto;
}

table {
  width: 100%;
  margin-top: 150px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

button {
  background-color: white;
  color: rgb(186, 167, 161);
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  float: right;
}
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
    position: fixed;
  left: 0;
  bottom: 0;
    padding: 0;
    
    
}

    </style>
</head>





<body>
  

    
    
 
<?php
require 'connectionn.php';
$show="SELECT * FROM cart where customer_id=:customer_id";
$statement=$pdo->prepare($show);
$statement->bindParam(":customer_id",$_SESSION['ID'],PDO::PARAM_INT);
$statement->execute();
$row=$statement->fetchAll();
echo "<table class='showtable'>
<caption style=color:#c1121f;>Cart</caption>
    
    <tr>
<td> Brochette  </td>
<td> Filet</td>
<td> Ratatouille </td>
<td>  Gratin </td>
<td> Poulet </td>
<td> Boeuf </td>
<td> Crème</td>
<td> Tarte </td>
<td> Gâteau </td>

</tr>";




foreach($row as $data){
  echo "<tr>
  <form action='' method='post'>
  <td style='padding:10px'><input type='number' name='a' value=". $data['Brochette']."></td>
  <td><input type='number' name='b' value=". $data['Filet']."></td>
  <td><input type='number' name='c' value=". $data['Ratatouille']."></td>
  <td><input type='number' name='d' value=". $data['Gratin']."></td>
  <td><input type='number' name='e' value=". $data['Poulet']."></td>
  <td><input type='number' name='f' value=". $data['Boeuf']."></td>
  <td><input type='number' name='g' value=". $data['Creme']."></td>
  <td><input type='number' name='i' value=". $data['Tarte']."></td>
  <td><input type='number' name='h' value=". $data['Gateau']."></td>
  </tr>

  <button class='sub' type='submit' name='edit'>EDIT</button>
  </form>
  ";
}
echo "</table>";
?>



     
      
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