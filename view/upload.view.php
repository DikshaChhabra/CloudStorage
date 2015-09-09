<div id="dropzone">
    <form action="upload.php" class="dropzone dz-clickable" id="demo-upload">
        <div class="dz-default dz-message">
        <span>Drop files here to upload</span>
        </div>
    </form>
</div>
<!-- <form action="upload.php" method="post" >
	<input type="file" name="image" webkitdirectory directory multiple>
	<input type="submit" name="submit" value="upload">
</form> -->
<form enctype="multipart/form-data" method="post">
<input type="file"  name="files[]" directory="" webkitdirectory="" mozdirectory="" multiple />
<input class="button" type="submit" name="submit" value="upload">
</form>
<a href="#"><img src="view/assets/images/Folder-icon.png" height="100px" width="100px" alt=""></a>

	<a href="logout.php">Log Out</a>