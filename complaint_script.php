<?php
   include("config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
    
      $name = $_GET['name'];
      $f_name = $_GET['f_name'];
      $m_name = $_GET['m_name'];
      $w_name = $_GET['w_name'];
      $address = $_GET['address'];
      $gender = $_GET['gender'];
      $phone = $_GET['phone'];
      $t_area = $_GET['complaint'];
    
      		$sql = "INSERT INTO complaint(name,f_name,m_name,w_name,address,gender,description,phone) values('".$name."','".$f_name."','".$m_name."','".$w_name."','".$address."','".$gender."','".$t_area."','".$phone."')";
      $result = mysqli_query($db,$sql);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
//if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
//} else {
   
//}
   }
   mysqli_close($conn);
?>