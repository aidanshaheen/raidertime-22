<?php>
 require '/home4/ahsraid1/public_html/database/connect.php';
 require 'slide_2.html';
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";  
 
 
header("Location: https://www.google.com/");
 
 
  $sql = 'SELECT firstName FROM emails';
  $result = mysqli_query($conn, $sql);
  $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   print_r($var);
   
//   print_r($sql);
//   print_r($result);
//   print_r($var);
echo $var[0]['firstName'];
  foreach($var as $name)
  {
    echo $name['firstName'];
    break;
       
  }
   
//  foreach($var as $name){
//      echo $name['First_Name'];
//  }
 
//  print_r($var);
// $names = 'SELECT First_Name FROM emails';
// $result = mysqli_query($conn, $names);
// $row = mysqli_fetch_assoc($result);
// echo $row;
// ?>


