<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asset management";

$conn = new mysqli($servername,$username,$password,$dbname );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
echo "Connected successfully";

if(isset($_POST['signup'])){
     $email = $_POST['email'];
     $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
     $name = $_POST['name'];

     $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
       $user_id = 
       $sql1 = "INSERT INTO businesses (business, user_id) VALUES ($business , $user_id)";
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }$conn->close();  
}
?>