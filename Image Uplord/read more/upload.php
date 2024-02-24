

<?php 
include_once "db_conn.php";

if (isset($_POST['submit'])) {
	$text = $_POST['text'];
	$name = $_POST['name'];

	echo $text;

	echo'<div class="alert alert-danger" role="alert">';
	echo $text;
  echo '</div>';



	if($text){
		echo "success";
	}

}

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	// echo "<pre>";
	// print_r($_FILES['my_image']);
	// echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO readmore(image_url,text,name) 
				        VALUES('$new_img_name','$text','$name')";
				mysqli_query($conn, $sql);
				header("Location: index.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}