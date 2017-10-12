<?php
@include 'db.php';

$folder_name = $_POST["folder_name"];

$valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
$max_file_size = 1024*10000; //100 kb
$it_say_uploads = 'uploads/';
$path = $it_say_uploads.$folder_name."/"; // Upload directory



/*ADD*/
$id = $_POST['what_id_bro'];

$update_folder_name = "UPDATE `shop` SET `folder` = '$folder_name' WHERE `shop`.`id` = $id";
$addproduct_add = mysqli_query($mysqli,$update_folder_name);
echo $id;






$count = 0;
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	if(!is_dir($path)){
		//Directory does not exist, so lets create it.
		mkdir($path, 0755);
		// Loop $_FILES to exeicute all files
			foreach ($_FILES['files']['name'] as $f => $name) {     
				if ($_FILES['files']['error'][$f] == 4) {
					continue; // Skip file if any error found
				}	       
				if ($_FILES['files']['error'][$f] == 0) {	           
					if ($_FILES['files']['size'][$f] > $max_file_size) {
						$message[] = "$name is too large!.";
						continue; // Skip large files
					}
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message[] = "$name is not a valid format";
						continue; // Skip invalid file formats
					}
					else{ // No error found! Move uploaded files 
						if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
						$count++; // Number of successfully uploaded file
					}
				}
			}
	}
	else {

		
		// Loop $_FILES to exeicute all files
			foreach ($_FILES['files']['name'] as $f => $name) {     
				if ($_FILES['files']['error'][$f] == 4) {
					continue; // Skip file if any error found
				}	       
				if ($_FILES['files']['error'][$f] == 0) {	           
					if ($_FILES['files']['size'][$f] > $max_file_size) {
						$message[] = "$name is too large!.";
						continue; // Skip large files
					}
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message[] = "$name is not a valid format";
						continue; // Skip invalid file formats
					}
					else{ // No error found! Move uploaded files 
						if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
						$count++; // Number of successfully uploaded file
					}
				}
			}
	}
	
}
header('Location: admin2.php?edit_id='.$id);


?>