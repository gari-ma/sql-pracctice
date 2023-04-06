<?php
$servername="localhost";
$username="root";
$password="";
$database="obnews";

$connection = new mysqli($servername,$username,$password,$database);
if($connection->connect_error){
    die("connection failed");
}
 echo "connection successful";
$sql="DELETE FROM COMMENTS WHERE id IN (12, 8);"; 

 $result=$connection->query($sql);
 if($result===TRUE){
     echo "SUccessfully added a result";
 }
 else{
    echo "no not added";
}
 $connection-> close();
?>