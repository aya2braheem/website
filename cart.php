<?php
session_start();
require 'connectionn.php';

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
  <nav>
    <div class="navbar" >
        <a class="navbar-brand" href="choose.php"><img id="logo"src="ma_logo.png" alt="logo"></a>

        <a class="navbar-brand " href="rs_menu.php">
        <img id="cafe"src="rs.png" alt="logo">
    </a>
        <a class="navbar-brand " href="cafe_menu.php">
        <img id="cafe"src="logo.png" alt="logo">
        </a>

    
    
    </div>
</nav>
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
<td> Total </td>
<td> delete </td>
<td> edit </td>
</tr>";

foreach($row as $data){
    echo "<tr>
    <td style='padding:10px'>". $data['Brochette'] ."</td>
    <td>". $data['Filet']."</td>
    <td>". $data['Ratatouille']."</td>
    <td>". $data['Gratin']."</td>
    <td>". $data['Poulet']."</td>
    <td>". $data['Boeuf']."</td>
    <td>". $data['Creme']."</td>
    <td>". $data['Tarte']."</td>
    <td>". $data['Gateau']."</td>
    <td>". $data['total']."</td>

     <td> <a class='buttons' href=delete_order.php?cart_id=".$data['cart_id'].">delete</a></td>
     <td> <a class='buttons' href=edit.php?cart_id=".$data['cart_id'].">edit</a></td>
    </tr>";
}
echo "</table>";
?>
<a href="delete.php"><button >Check Out</button></a>
     
      <img src="cart.gif" alt="logo">
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