<?php include_once "config.php"; ?>

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
          $sql = "SELECT * FROM form ORDER BY id DESC";
          $res = mysqli_query($link,  $sql);
      ?>
      

          <div class="container">
          <div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
          </div>
<table class="table table-success table-striped table-hover ">

  <tr>
  <!-- <div class="alert alert-info" role="alert"></div> -->
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
 
  </tr>

            <?php
          if (mysqli_num_rows($res) > 0) {
          	while ($form = mysqli_fetch_assoc($res)) { 
                $id=$form['id'];
                $name=$form['name'];
			          $email= $form['email'];
			 ?>
            
  <tr>
 
    <td><?php echo $id ?></td>
    <td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><div class="row"><div class="col-3"><a href="#"><button type="button" class="btn btn-warning">Update</button></a></div>  <div class="col-3"><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></div>  </div></td>
    <!-- <td><?php echo ""; ?></td> -->
  
  </tr>


          		
    <?php } }?>
    </table>
    </div>  

	

</body>
</html>
