

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
<style>

h1{
  text-align: center;
  
}

h1:hover{
  font-weight: bold;
  font-size: 25px;
}

label{
  padding-bottom: 20px;
}

</style>
</head>
<body>




<!-- <button type="submit" class="btn btn-primary mb-2" name="submit" value="Upload" >Confirm Update</button> -->



<form action="vedio_uplord.php"
           method="post"
           enctype="multipart/form-data">
  <div class="form-group">
	  <div><h1>Vedio Uplord</h1></div>

	  <div class="alert alert-dark" role="alert">
 
    <label for="exampleFormControlFile1"> Type a 1 URL or Embeded Code : <br> </label>
    <input type="text" class="form-control-file" id="exampleFormControlFile1" name="url1" placeholder="Type a URL or Embeded Code ">
  </div>

  <div class="alert alert-dark" role="alert">
 
 <label for="exampleFormControlFile1"> Type a 2 URL or Embeded Code : <br> </label>
 <input type="text" class="form-control-file" id="exampleFormControlFile1" name="url2" placeholder="Type a URL or Embeded Code ">
</div>

<div class="alert alert-dark" role="alert">
 
 <label for="exampleFormControlFile1"> Type a 3 URL or Embeded Code : <br> </label>
 <input type="text" class="form-control-file" id="exampleFormControlFile1" name="url3" placeholder="Type a URL or Embeded Code ">
</div>

<div class="alert alert-dark" role="alert">
 
 <label for="exampleFormControlFile1"> Type a 4 URL or Embeded Code : <br> </label>
 <input type="text" class="form-control-file" id="exampleFormControlFile1" name="url4" placeholder="Type a URL or Embeded Code ">
</div>

<div class="alert alert-dark" role="alert">
 
 <label for="exampleFormControlFile1"> Type a 5 URL or Embeded Code : <br> </label>
 <input type="text" class="form-control-file" id="exampleFormControlFile1" name="url5" placeholder="Type a URL or Embeded Code ">
</div>


  <div>
  </div>
  <div class="alert alert-dark" role="alert">
  <label for=""> Type a NameText <br> </label>
  <input type="text" name="name" placeholder="Type a Vedio Name ">

 </div>


  <button type="submit" class="btn btn-primary mb-2" name="submit"
       value="Upload" >Confirm Update</button>
  </div>
</form>

</body>
</html>