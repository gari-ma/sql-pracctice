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
 $sql = "INSERT INTO COMMENTS(id,user,comment_text, created_at) VALUES (1,'Garioma','jpt comment',2002);";
 
 $result=$connection->query($sql);
 if($result===TRUE){
     echo "SUccessfully added a result";
 }
 else{
    echo "no not added";
}
 $connection-> close();
?>