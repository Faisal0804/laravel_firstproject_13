

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <form action="{{ route('upload-multiple-image')}}" method="post" charset="utf-8" enctype="multipart/form-data" id="multiple-image-preview-ajax" >
     @csrf

   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="error_success_msg_container">

         </div>

        <div class="form-group">
          <div class="form-group">
            <input type="file" name="image[]" id="images" placeholder="Choose images" multiple >
          </div>
        </div>
          <div class="col-md-12">
                    <div class="mt-1 text-center">
                        <div class="show-multiple-image-preview"> </div>
                    </div>  
          </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="submit" class="btn btn-primary ">add image</button>
      </div>
    </div>
  </div>
   </form>
</div>