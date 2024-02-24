<?php 
include_once "config.php";
if (isset($_POST['submit'])){

    $url = $_POST['url'];


$sql = "INSERT INTO editor_url_uplord  (id,url) VALUES ('0', '$url')";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo "faild";
}else{
    header("location:");
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<form action="step3.php" method="post">

            <div class="form-group">
                <label>File uplord</label>
                <input type="url" name="url" class="form-control " placeholder="set google or other form link">
               
                
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"  name="submit">
                
                
            </div>           

</form>
</body>
</html>