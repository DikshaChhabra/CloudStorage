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
<?php
session_start();
require 'modal/conn.php';//Connection to Database
require 'modal/function.php';//To Call Path Func
include 'view/navbar.view.php';

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$username= $_GET['username'];
	$query=Query("select * from `cs_file_$username` where S_ID=$id ",$conn);
    }

?>
<div class="container-fluid">
    <div class="row">
        <?php include 'view/sidebar.view.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Kind</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <!-- show all files in table -->
                            <?php foreach($query as $file):?>
                            <tr>
                                <td id="<?=$file['F_ID']?>" class="file-preview" data-user="<?= $username?>"><a class="flprw"><i class='fa fa-file fa-lg'></i> <?= $file['file_name']?></a></td>
                                <td><?=filetype($file['file_path'])?></td>
                                <td><?=formatSizeUnits(filesize($file['file_path']));?></td>
                                 <td><a class="flprw" target="_blank" href="download.php?id=<?=$file['F_ID']?>&user=<?= $username?>">Download</a></td>               
                            </tr>
                            <?php endforeach; ?>
                                            
                        </tbody>
                    </table>
                </div>
                <!-- Modal shows file content-->
                <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <!--header-->
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <!--body-->
                          <div class="modal-body data-modal">
                            
                          </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>
    <script type="text/javascript" src="view/assets/js/jquery.js"></script>
    <script type="text/javascript" src='view/assets/js/design.js'></script>
    <script type="text/javascript">
    $(".file-preview").click(function() {
        var id= $(this).attr('id');
        var user =$(".file-preview").attr('data-user');
        $.get( "grabfile.php",{ id: id , username: user}, function( data) {
          $(".data-modal").html(data);
          $('#preview').modal('toggle');
        });
    });
    </script>
</body>
</html>