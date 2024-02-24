

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="css/form.css">
</head>
<body>


<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
  <div class="form-group">
	  <div><h1>Image Uplord</h1></div>

	  <div class="alert alert-dark" role="alert">
 


    <label for="exampleFormControlFile1"> Image size 314 x 218 , 2048 x 1152 <br> </label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="my_image">
  </div>
  <div>
  </div>
  <div class="alert alert-dark" role="alert">
  <label for=""> Type a Text <br> </label>
  <input type="text" name="text" placeholder="type Channel Text">

 </div>

 <div class="alert alert-dark" role="alert">
 <label for=""> This is not necessary<br> </label>
  <input type="text" name="name" placeholder="Channel Name">

 </div>

  <button type="submit" class="btn btn-primary mb-2" name="submit"
       value="Upload" >Confirm Update</button>
  </div>
</form>


</body>
</html>