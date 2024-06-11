<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       body{
        background-image:url('https://burst.shopifycdn.com/photos/flatlay-iron-skillet-with-meat-and-other-food.jpg?width=1000&format=pjpg&exif=0&iptc=0');
        
       }
    table{
      border: 2px solid black;
    }
  tr,td{
       font-size: 30px;
       border: 1px solid black;
       background-color: rgb(21,255,0);
      }
    td{
     text-align: center;
    }
     
    img{
      height: 120px;
     }
    div.a{
      height: 2000px;
     } 
 .button {
  background-color: #006400;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight:bold;
}
.reset {
  background-color: red;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight:bold;
}
</style>
</head>

<body>
<div style="font-size:40px; background-color:#32CD32; color:black; font-weight:bold; border: 4px solid  white" align="center" >
 <?php
      echo"Welcome to                 ";
      $restu=$_POST["restu"];
      $r=$_POST["r"];
      $s=$_POST["s"];
      echo $restu."<br>";
    //   $conn=new mysqli("localhost","root","","project2_yr");
    //  $result =$conn->query("INSERT INTO food_tbl VALUES ('".$restu."','".$r."','".$s."')");
    ?>  
</div>
<!-- table work start -->
<div align="center">
<table  >
  <h1 style=" background-color:black; font-weight:bold;  font-size: 50px; color:white; border:5px solid white" align="center">Your  Cart</h1>
  <tr> <td style="font-size: 40px; font-weight:bold; " >Food Name</td>
  <td   style="font-size: 40px; font-weight:bold;" >Food Price</td>
  <td   style="font-size: 40px; font-weight:bold;" >Food Quantity      </td>
</tr>
  <tr >
    <td style=" background-color:orange; font-weight:bold;"> <?php   $f1_name=$_POST["f1_name"]; echo $f1_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f1_price=$_POST["f1_price"]; echo $f1_price?></td> 
    <td   style=" background-color:orange;  font-weight:bold;">  <?php   $f1_qt=$_POST["f1_qt"]; echo $f1_qt?></td>
</tr>
 <tr  >
    <td style=" background-color:orange;  font-weight:bold;"> <?php   $f2_name=$_POST["f2_name"]; echo $f2_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f2_price=$_POST["f2_price"]; echo $f2_price?></td> 
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f2_qt=$_POST["f2_qt"]; echo $f2_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange;  font-weight:bold;"> <?php   $f3_name=$_POST["f3_name"]; echo $f3_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f3_price=$_POST["f3_price"]; echo $f3_price?></td> 
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f3_qt=$_POST["f3_qt"]; echo $f3_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange;  font-weight:bold;"> <?php   $f4_name=$_POST["f4_name"]; echo $f4_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f4_price=$_POST["f4_price"]; echo $f4_price?></td> 
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f4_qt=$_POST["f4_qt"]; echo $f4_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange;  font-weight:bold;"> <?php   $f5_name=$_POST["f5_name"]; echo $f5_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f5_price=$_POST["f5_price"]; echo $f5_price?></td> 
    <td  style=" background-color:orange;   font-weight:bold;">  <?php   $f5_qt=$_POST["f5_qt"]; echo $f5_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange;   font-weight:bold;"> <?php   $f6_name=$_POST["f6_name"]; echo $f6_name?></td>
    <td  style=" background-color:orange;   font-weight:bold;">  <?php   $f6_price=$_POST["f6_price"]; echo $f6_price?></td> 
    <td  style=" background-color:orange ;   font-weight:bold;">  <?php   $f6_qt=$_POST["f6_qt"]; echo $f6_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange ; font-weight:bold;"> <?php   $f7_name=$_POST["f7_name"]; echo $f7_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f7_price=$_POST["f7_price"]; echo $f7_price?></td> 
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f7_qt=$_POST["f7_qt"]; echo $f7_qt?></td>
</tr>
<tr>
    <td  style=" background-color:orange; font-weight:bold;"> <?php   $f8_name=$_POST["f8_name"]; echo $f8_name?></td>
    <td  style=" background-color:orange;  font-weight:bold;">  <?php   $f8_price=$_POST["f8_price"]; echo $f8_price?></td> 
    <td  style=" background-color:orange;   font-weight:bold;">  <?php   $f8_qt=$_POST["f8_qt"]; echo $f8_qt?></td>
</tr>

<tr>
   <td colspan="2" style=" background-color:aqua;  font-weight:bold;">Total</td>
   <td colspan="2" style=" background-color:yellow;  font-weight:bold; " > <?php 
     $f1_price=$_POST["f1_price"];$f1_qt=$_POST["f1_qt"];
     $f2_price=$_POST["f2_price"];$f2_qt=$_POST["f2_qt"];
     $f3_price=$_POST["f3_price"];$f3_qt=$_POST["f3_qt"];
     $f4_price=$_POST["f4_price"];$f4_qt=$_POST["f4_qt"];
     $f5_price=$_POST["f5_price"];$f5_qt=$_POST["f5_qt"];
     $f6_price=$_POST["f6_price"];$f6_qt=$_POST["f6_qt"];
     $f7_price=$_POST["f7_price"];$f7_qt=$_POST["f7_qt"];
     $f8_price=$_POST["f8_price"];$f8_qt=$_POST["f8_qt"];
     
     (int)$total=($f1_price*$f1_qt)+($f2_price*$f2_qt)+($f3_price*$f3_qt)+($f4_price*$f4_qt)+($f5_price*$f5_qt)+($f6_price*$f6_qt)+($f7_price*$f7_qt)+($f8_price*$f8_qt)  ."<br>";
     echo $total;
    ?></td >
</tr>

</table>
</div>

    <br>
    <br>
    
    
    <h1 align="center" style="color:white; background-color:black ; font-size:50px; border:5px solid white" ">Payment now</h1>
          <diV align="center">
           <table>
            <form action="https://formsubmit.co/subhayankapas@gmail.com"method="POST" >
              <!-- <input type="hidden" name="_cc" value="subhayankapas@gmail.com,"> -->
              <!-- <input type="hidden" name="_autoresponse" value="your custom message"> -->
               <tr>
                 <td style="font-weight:bold;">
                   Name:
                 </td>

                      <td style="font-weight:bold;">
                        <input type="text" name="name" placeholder="enter your name....................." required>
                        </td>   
                        </tr>
                                     <hr><br>
      <tr>
            <td style="font-weight:bold;"> Address:</td>
            <td><input type="text" name="address" placeholder="enter your village,post,state..." required></td>
      </tr> <br>
      
      <tr>
            <td style="font-weight:bold;">   Ph No.:</td> 
            <td style="font-size: xx-large;"><input type="text" name="Ph No." placeholder="enter your Ph no." required></td>
      </tr>
        <tr>
         <td style="font-weight:bold;">   Pin:</td> 
         <td style="font-size: xx-large;"><input type="text" name="Pin" placeholder="enter your pin no." required></td>
        </tr>
                                     
             <tr>
      <td style="font-weight:bold;">Select payment mathod:</td>
      <td>
       <label for="101">
        <input type="radio" value="Cash of Delivery" name="payment" id="101" style="font-weight:bold;">Cash of Delivery
       </label>

   <label for="102">
        <input type="radio" value="By QR Code" name="payment" id="102" style="font-weight:bold;">By QR Code
   </label> 

   </td>                                           
            </tr>  <br>                                      
      <tr>
           <td style="font-weight:bold;">UPI ID(as reference):</td> 
           <td style="font-size: xx-large;"><input type="email" name="UPI ID" placeholder="enter your UPI ID." required></td>
          </tr>

          <tr>
           <td style="font-weight:bold;">Grand Total :</td> 
           <td ><input type="text" name="total amount" value="<?php
        
          (int)$a=40;  
          $subtotal = (int)$total+ (int)$a ;
          echo $subtotal;
          ?>"style="visibility: hidden; display: none;"  >

          <?php
      
          (int)$a=40;  
          $subtotal = (int)$total+ (int)$a ;
          echo "₹";
          echo  $subtotal;
          echo "( with ₹40 Delivary charge )";
          ?>

          </td>
               
          </tr>
   
       

<!-- for food items start -->
<tr> 
            <td style="background-color:black;visibility: hidden; display: none;"><input type="text" name="1" value="<?php  echo $f1_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black;visibility: hidden; display: none;">
            <input type="text" name="1Qty" value="<?php   echo $f1_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
    <tr> 
            <td style="background-color:black; visibility: hidden; display: none;"><input type="text" name="2" value="<?php  echo $f2_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black; visibility: hidden; display: none;">
            <input type="text" name="2Qty" value="<?php   echo $f2_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:black; visibility: hidden; display: none;"><input type="text" name="3" value="<?php   echo $f3_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black; visibility: hidden; display: none;">
            <input type="text" name="3Qty" value="<?php   echo $f3_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:black; visibility: hidden; display: none;"><input type="text" name="4" value="<?php   echo $f4_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black; visibility: hidden; display: none;">
            <input type="text" name="4Qty" value="<?php   echo $f4_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:black;visibility: hidden; display: none;"><input type="text" name="5" value="<?php   echo $f5_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black;visibility: hidden; display: none;">
            <input type="text" name="5Qty" value="<?php   echo $f5_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:black;visibility: hidden; display: none;"><input type="text" name="6" value="<?php  echo $f6_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black;visibility: hidden; display: none;">
            <input type="text" name="6Qty" value="<?php   echo $f6_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:black;visibility: hidden; display: none;"><input type="text" name="7" value="<?php   echo $f7_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:black;visibility: hidden; display: none;">
            <input type="text" name="7Qty" value="<?php   echo $f7_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>
     <tr> 
            <td style="background-color:white;visibility: hidden; display: none;"><input type="text" name="8" value="<?php   echo $f8_name; ?>"
             style="visibility: hidden; display: none;" >
            </td>
            <td style="background-color:white;visibility: hidden; display: none;">
            <input type="text" name="8Qty" value="<?php   echo $f8_qt; ?>"
            style="visibility: hidden; display: none;"  >
            </td>         
     </tr>



<!-- for food items end-->

<tr>
            <td style="font-weight:bold;">Let's payment with QR :</td>
            <td align="center"><img src="images/QR code.jpg" ></td>
      </tr> 


      
          
                                                       
               <tr  align="center">
               <td style="font-size: 30px;"><input type="reset" class="reset" value ="Clear Details"></td>
                     <td style="font-size: 30px; font-weight:bold;"><input type="submit" class="button" value="Place Order"></td>                                         
                        </tr>                       
                 </form>          
          </table>
         
         
</body>
</html>