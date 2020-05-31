<?php
// $conn = mysqli_connect("localhost","root","","netwellth");
include("connection.php");
 
$email = $_POST['email'];

if (empty($email))
  {
    echo " Email is Required";
  }
  else
  {
    $q = "INSERT INTO newsletter (email) VALUES ('".$email."')";
    if (mysqli_query($conexion, $q))
    {
    echo json_encode(["success"=>true]);
  }
  else
  {
    echo json_encode(["success"=>false]);
}
}


 ?>