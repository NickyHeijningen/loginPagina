<?php 
 
$host="localhost";
$user="root";
$password="";
$db="testproject";
 
$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn, $db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $stmt = $conn->prepare ("select * from login where username='".$uname."'AND password='".$password."' limit 1");
    
    $stmt->execute();
    
    $result=$stmt->get_result();
    
    while($row = $result->fetch_assoc()){
       header("Location: index.html"); exit;
    }
    
    echo " You Have Entered Incorrect Password";
    exit();
 
 }
?>