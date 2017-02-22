<?php
include 'user.php';
include 'fun.php';
?>

<!doctype>
<html lang="en">
<head>
<style type="text/css">
</style>
</head>
<body>
<?php
echo 'logged in by :  ' .getname($_SESSION['user_id']);
?>
<form action="" method="post" ">
<textarea name="comment" cols="40" rows="6" placeholder="write comment here"></textarea><br>
<input type="submit" value="comment" style="background:#3b5998;padding:4px; color:white;">
</form>
<?php
if(isset($_POST['comment']) === true) {
	$comment = $_POST['comment'];
	if(empty($comment) === true) {
		echo 'your comment box is empty';
	}else{
		
		comment_entry($_SESSION['user_id'],$comment);
		
		
	}
}
$all_comment = show_comment();

if(mysql_num_rows($all_comment) >= 1){
 
 while($comment_rows = mysql_fetch_assoc($all_comment)){
	$ref = $comment_rows['ref_id'];
	 echo '<strong>'. getname($ref) . ' :</strong> ' ;
 echo '<em>'.$comment_rows['this_comment'].'</em><br>';
 }
}




?>
</body>
</html>
