<?php  

include_once "db_conn.php";

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone_number=$_POST['phoneNumber'];

    $data= "$name.<br>.$username.<br>.$password.<br>.$email.<br>.$phone_number";
    


    if(!$data){
      echo "faild";
    }else{
        header("Location: reg_form.php");
    }





    $sql = "INSERT INTO registration_form(name,username,password,email,phone_number) VALUES('$name','$username','$password','$email','$phone_number')";			        
	$result=mysqli_query($conn, $sql);


}

if(isset($_POST['submit'])){

    $name=$_POST['username1'];
    $password=$_POST['password1'];

    $logdata = "$name,$password";

    
    if(! $logdata){
        echo "faild";
      }else{
          header("Location: log.php");
      }
  
      $sql = "INSERT INTO login_form(username,password) VALUES('$name1','$password1')";			        
      $result=mysqli_query($conn, $sql);
  

}


?>