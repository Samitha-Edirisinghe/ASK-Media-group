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


  <style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			/* min-height: 100vh; */
			min-height: 70vh;
		}
		.alb {
			width: 300px;
			height: 200px;
			padding: 15px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
			padding-left: 10px;
		}
		.card{
			
			margin: 0px;
			border-radius:0px 0px 15px 15px;
			background-color: black;
			margin-top:10px;
		}
		h5{
			text-align: center;
			padding:5px 0px 5px 0px;
			color:white;
		}
	</style>
</head>
<body>
     <!-- <a href="index.php">&#8592;</a> -->
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
             $text=$images['text'];
			 $image25= $images['image_url'];
			 ?>
             <div class="alb ">
				<div class="card">
             	<img src="uploads/<?=$image25?>">
				 <h5><?php echo $text; ?></h5>
                </div>
			 </div>
          		
    <?php } }?>

	

</body>
</html>
