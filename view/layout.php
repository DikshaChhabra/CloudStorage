<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="view/assets/css/design.css">
	<link rel="stylesheet" href="view/assets/css/dropzone.css">
	<link rel="stylesheet" type="text/css" href="view/assets/font-awesome-4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="view/assets/css/style.css">
</head>
<body>
    <?php include ($path); ?>

	<script type="text/javascript" src="view/assets/js/jquery.js"></script>
	<script type="text/javascript" src='view/assets/js/design.js'></script>
	<script type="text/javascript" src='view/assets/js/dropzone.js'></script>
	<script type="text/javascript">
	$(".file-preview").click(function() {
		var id= $(this).attr('id');
		var user =$(".user").attr('data-user');
		$.get( "grabfile.php",{ id: id , username: user}, function( data) {
		  $(".data-modal").html(data);
		  $('#preview').modal('toggle');
		});
    });
    </script>
</body>
</html>