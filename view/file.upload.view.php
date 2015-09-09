<!-- Button trigger modal -->
<button class="btn btn-primary fyl" data-toggle="modal" data-target="#file">File 
<i class="fa fa-upload"></i></button>
<!-- Modal -->
<div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <!--header-->
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Upload files</h4>
          </div>
          <!--body-->
          <div class="modal-body">
              <div id="dropzone">
                  <form action="dashboard.php" class="dropzone dz-clickable" id="demo-upload">
                    <div class="dz-default dz-message">
                    <span>Drop files here to upload</span>
                    </div>
                  </form>
              </div>
          </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>