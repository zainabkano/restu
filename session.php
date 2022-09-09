<?php
session_start();
include "connect.php";
$phonne=$_section['phone'];
$sql="SELECT * FROM valid WHERE phone ='$phone''";
$result = $conn->query($sql);
if(result -> num_row >0){
    while($row=$result->fetch_assos()){
        $name=$result["name"]; 
        $name=$result["email"];
        $name=$result["phone"];  


    }
}
