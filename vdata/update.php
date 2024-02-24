<?php 


if(isset($_POST['submit']))
    {
        
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
      
        $sql = "INSERT INTO form (id, name , email) VALUES ('0', '$name', '$email')";
     
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





