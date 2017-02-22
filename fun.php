<?php
function comment_entry( $id,$comment){ 
 $id = (int)$id;


	mysql_query("INSERT INTO `user_comment` (`ref_id` , `this_comment`) VALUES ($id , '$comment')");
}

function show_comment(){
	return mysql_query("SELECT * FROM `user_comment`");
}

function getname($id){
	$id = (int)$id;
	
	return mysql_result(mysql_query("SELECT `name` FROM `user` WHERE `user_id` = $id "),0);
}

?>
