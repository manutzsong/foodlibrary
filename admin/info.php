<?php
@include 'db.php';




/*ADD*/
$id = $_POST['what_id_bro'];

$input_name1 = $_POST['input_name'];
$input_name = htmlspecialchars($input_name1, ENT_QUOTES);

$info_input1 = $_POST['info_input'];
$info_input = htmlspecialchars($info_input1, ENT_QUOTES);



$tel = $_POST['tel'];
/*day_list
food_style_list*/
$food_style_list = implode(",",$_POST["food_style_list"]);
$day_list = implode(",",$_POST["day_list"]);
$opentime = $_POST['open_select'];
$closetime = $_POST['close_select'];
$pricing = $_POST['pricing'];
$lat = $_POST['latitude'];
$long = $_POST['longtitude'];

/*UPDATE `shop` SET `name` = 'aa', `info` = 'b', `tel` = '083', `open_time` = '1', `close_time` = '13', `day` = '1000', `food_style` = 'as', `pricing` = '5', `latitude` = '465.21', `longtitude` = '2156.98' WHERE `shop`.`id` = 2;

*/
$update_info = "UPDATE `shop` SET `name` = '$input_name', `info` = '$info_input', `tel` = '$tel', `open_time` = '$opentime', `close_time` = '$closetime', `day` = '$day_list', `food_style` = '$food_style_list', `pricing` = '$pricing', `latitude` = '$lat', `longtitude` = '$long' WHERE `shop`.`id` = $id;";



$addproduct_add = mysqli_query($con,$update_info);




print_r($food_style_list);






header('Location: admin2.php?edit_id='.$id);


?>