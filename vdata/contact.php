<?php 


if(isset($_POST['submit']))
    {
        $message = $_POST['message'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        echo "$name";
       
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_db";

       
        $con = mysqli_connect($host, $username, $password, $dbname);
        
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
      
        $sql = "INSERT INTO contact (id,message, name , email) VALUES ('0', '$message','$name', '$email')";
     
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);


        // $sql ="SELECT * FROM users ORDER BY id DESC";

        // $result = mysqli_query($con ,$sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
<style>
    
    .container{
        top: 100px;
        left: 100px;
        margin: 200px;
        
    }


</style>
</head>
<body>
<form action="contact.php" method="post">
<div class="container">
<input type="message" value="name" name="message"><br><br>
<input type="text" value="name" name="name"><br><br>
<input type="email" value="email" name="email"><br><br>
<input type="submit" value="submit" name="submit">

</div>




</form>
</body>
</html>