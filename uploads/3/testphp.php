<?php
 $conn=new PDO('mysql:host=localhost;dbname=info','root','designer');

if(isset($_POST['submit'])){
$name=$_FILES['image']['name'];
$tmp_name =$_FILES["image"]["tmp_name"];
$location="/uploads/images";
mkdir($_SERVER['DOCUMENT_ROOT'].$location,0777,true);
$dest='uploads/images/'.$name;
move_uploaded_file($tmp_name, $dest);
$query=$conn->query("insert into pic values('','".$dest."')");
opendir($location.DIRECTORY_SEPARATOR);
// $query1=$conn->query("select `photo` from `pic` where id='9'");
// $query2=$query1->fetchObject();
// $query3=$query2->photo;
// print_r($query2);
}
phpinfo();

?>
<?= file_get_contents($file['file_path'], true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <form action="testphp.php" method="post" enctype='multipart/form-data' >
	<input type="file" name="image" webkitdirectory mozdirectory multiple>
	<input type="submit" name="submit" value="upload">

	</form>
	<!--<img src="<?php //echo $query3 ?>" >-->

</body>
</html>
