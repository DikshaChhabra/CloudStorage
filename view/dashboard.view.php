<?php 
include 'file.upload.view.php';
include 'folder.upload.view.php';
include 'navbar.view.php';
?>

<!-- body -->
<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.view.php'; ?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Kind</th>
                              <th>Size</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- show all folders in table -->
                            <?php foreach($folder_info as $folder):?>
                            <tr>
                                <td  class="show-files"><a class="shwfl" href="showfiles.php?id=<?=$folder['S_ID']?>&username=<?=$username?>"><i class='fa fa-folder-open fa-lg' ></i> <?= $folder['folder_name']?></a></td>
                                <td><?=filetype($folder['folder_path'])?></td>
                                <td><?=formatSizeUnits(folderSize($folder['folder_path']));?></td>
                                <td> </td>
                            <?php endforeach; ?>
                            </tr>
                        <!-- show all files in table -->
                            <?php foreach($file_info as $file):?>
                            <tr>
                                <td id="<?=$file['F_ID']?>" class="file-preview"><a class="flprw"><i class='fa fa-file fa-lg'></i> <?= $file['file_name']?></a></td>
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
        </div>
    </div>
</div>
