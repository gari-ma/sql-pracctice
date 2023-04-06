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
 $sql="UPDATE COMMENTS SET  user='Sulav Parajuli',comment_text='heeeeeeeeeee' WHERE id=5";
 
 $result=$connection->query($sql);
 if($result===TRUE){
     echo "SUccessfully added a result";
 }
 else{
    echo "no not added";
}
 $connection-> close();
?>