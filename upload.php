<?php 
session_start();
require 'modal/conn.php';
require 'modal/function.php';
//logged in after filling sign in form
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
//upload files
if(!empty($_FILES)){
	$name=$_FILES['file']['name'];
	$tmp_name =$_FILES['file']['tmp_name'];
	$dest='uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR.$name;
	move_uploaded_file($tmp_name, $dest);
	//$query=Query("insert into `files` values('','".$_SESSION['id']."','".$dest."')",$conn);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
            move_uploaded_file($_FILES['files']['tmp_name'][$i],'uploads/'
            .$_SESSION['id'].DIRECTORY_SEPARATOR.$name);
            }
    
}
// // open this directory 
// $myDirectory = opendir('uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR);

// // get each entry
// while($entryName = readdir($myDirectory)) {
// 	$dirArray[] = $entryName;
// }

// // close directory
// closedir($myDirectory);

// //	count elements in array
// $indexCount	= count($dirArray);



// // print 'em
// print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
// print("<TR><TH>Filename</TH><th>Filetype</th><th>Filesize</th></TR>\n");
// // loop through the array of files and print them all
// for($index=0; $index < $indexCount; $index++) {
//         if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
// 		print("<TR><TD><a href='$dirArray[$index]'>$dirArray[$index]</a></td>");
// 		print("<td>");
// 		print(filetype('uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR.$dirArray[$index]));
// 		print("</td>");
// 		print("<td>");
// 		print(filesize('uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR.$dirArray[$index]));
// 		print("</td>");
// 		print("</TR>\n");
// 	}
// }
// print("</TABLE>\n");
// $image= new Imagick('uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR.$dirArray[13]);
// $image->thumbnailImage(100, 0);
// $des='uploads/'.$_SESSION['id'].DIRECTORY_SEPARATOR.'thumb_'.$dirArray[13];
// $image->writeImage($des);
 path('upload.view.php');
?>
<!-- <img src="<?php //echo $des ?>" alt=""> -->