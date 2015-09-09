<!-- Button trigger modal -->
<button class="btn btn-primary fldr" data-toggle="modal" data-target="#folder">Folder
<i class="fa fa-upload"></i></button>
<!-- Modal -->
<div class="modal fade" id="folder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <!--header-->
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">
          &times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Upload Folder</h4>
          </div>
          <!--body-->
          <div class="modal-body">
              <form enctype="multipart/form-data" method="post" action="dashboard.php">
                <input type="text" class="form-control log" placeholder="folder name" name="fldr">
                <input type="file"  class="btn" name="files[]" directory="" webkitdirectory="" mozdirectory
                ="" multiple />
                <input class="btn" type="submit" name="submit" value="upload">
              </form>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>