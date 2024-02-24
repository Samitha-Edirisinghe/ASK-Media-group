<?php include_once "db_conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap </title>
  <!-- <link rel="stylesheet" href="css/style.css">  -->
  <!-- <link rel="stylesheet" href="css/card.css">  -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->


  
</head>
<body>
     <!-- <a href="index.php">&#8592;</a> -->
     <?php 
          $sql = "SELECT * FROM vedio_url ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
      ?>
      

          <div class=" col-sm-12 col-md-12">
          <div class="alert alert-dark" role="alert" style="text-align:center;">
                Vedio Details
          </div>
<table class="table table-success table-striped table-hover  ">

  <tr>
  <!-- <div class="alert alert-info" role="alert"></div> -->
    <th>Id</th>
    <th>url 1</th>
    <th>url 2</th>
    <th>url 3</th>
    <th>url 4</th>
    <th>url 5</th>
    <th>name</th>
    
    <!-- <th>Action</th> -->
 
  </tr>

            <?php
          if (mysqli_num_rows($res) > 0) {
          	while ($vedio = mysqli_fetch_assoc($res)) { 
                $id=$vedio['id'];
                $url1=$vedio['url1'];
                $url2=$vedio['url2'];
                $url3=$vedio['url3'];
                $url4=$vedio['url4'];
                $url5=$vedio['url5'];
                $name=$vedio['name'];
			    
			 ?>
            
  <tr>
 
    <td><?php echo $id ?></td>
    <td><?php echo $url1 ?></td>
    <td><?php echo $url2 ?></td>
    <td><?php echo $url3 ?></td>
    <td><?php echo $url4 ?></td>
    <td><?php echo $url5 ?></td>
    <td><?php echo $name ?></td>
    
    <!-- <td><div class="row"><div class="col-md-6"><a href="#"><button type="button" class="btn btn-warning">Update</button></a></div>  <div class="col-md-6"><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></div>  </div></td> -->
    <!-- <td><?php echo ""; ?></td> -->
  
  </tr>


          		
    <?php } }?>
    </table>
    </div>  

	

</body>
</html>
