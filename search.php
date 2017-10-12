<?php
@include 'db.php';


$searchbox = $_POST['searchbox'];
$search_query = "SELECT * FROM `shop` WHERE `name` LIKE '%$searchbox%'";

$run_query = mysqli_query($mysqli,$search_query);

$row_count = mysqli_num_rows($run_query);
						$i = 0;
						while ($i<$row_count){
							$loop_result = mysqli_fetch_array($run_query); /*Init pull from DB */
							$id = $loop_result['id']; /*Show ID*/
							$shop_name = $loop_result['name']; /*Show Product name*/
							
							echo $id;
							$i++;
							
						}


//header('Location: admin2.php?edit_id='.$id); 


?>