<?php 
include "db_conn.php";



if(isset($_POST['submit'])){
   
    $url1 = $_POST['url1'];
    $url2 = $_POST['url2'];
    $url3 = $_POST['url3'];
    $url4 = $_POST['url4'];
    $url5 = $_POST['url5'];
    $name = $_POST['name'];
   
    

    if(!$url){
        echo "faild";
    }


    $sql = "INSERT INTO vedio_url (id,url1,url2,url3,url4,url5,name) VALUES('0','$url1','$url2','$url3','$url4','$url5','$name')";	
$result=mysqli_query($conn, $sql);

if($result){
    header("Location:dashbord.php");
}else{
    echo "faild";
    }

}








?>