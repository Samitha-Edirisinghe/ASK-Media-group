<?php

if(isset($_POST['submit']))
    {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $uname = $_POST['Uname'];
        
        
       
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_db";

       
        $con = mysqli_connect($host, $username, $password, $dbname);
        
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
      
        $sql = "INSERT INTO editor_url   (id, name , email,username) VALUES ('0', '$name', '$email','$uname')";
     
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            header("location: ");
        }
      //connection closed.
        mysqli_close($con);


      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graphic_Designers Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 14px sans-serif; 
            
            justify-content: center;
            display: flex;
            background: rgb(149,55,212);
            background: linear-gradient(90deg, rgba(149,55,212,1) 0%, rgba(114,233,137,1) 90%, rgba(134,204,157,1) 100%); 
        
         
        }
        .wrapper{ 
            width: 500px;
            padding: 30px; 
            border: 1px solid;
            border-radius: 10px;
            background-color: rgb(36, 36, 92);
            color:white;
            height:auto;
                   }
/* 
       @media(width:600px){
           .wrapper{
               width:100%;
           }
       } */
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Graphic Designers Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="editor_setup1.php" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control ">
              
                
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="Uname" class="form-control ">
               
                
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control ">
               
                
            </div>


            <div class="form-group">

            <?php 
            include "config.php";
            
          $sql = "SELECT * FROM editor_url   ORDER BY id DESC";
          $result = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($result) > 0) {
          	while ($row = mysqli_fetch_assoc($result)) { 

                   $url=$row['url'];
			 
			 ?>
           
           	
            <?php } }?>
            <label>Uplord Sample and etc</label>
            <a href="<?php echo $url; ?>"> <button type="button" class="btn btn-outline-success">uplord Files </button></a>
                
            </div>



           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"  name="submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset"> 
                
            </div>
            
           
        </form>

    </div>    
</body>
</html>

