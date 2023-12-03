

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">

  

   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="error">

         </div>

         <form method="post" action="{{route('image.store')}}" enctype="multipart/form-data" id="upload_image_form" >
         @csrf
         
         <div class="row">
                <div class="col-md-12 mb-2">
                    <img  src=""
                    class="image_preview"  alt="preview image" style="max-height: 150px;">
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        
                    </div>
                </div>

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary " type="submit">Save product</button>
      </div>
                
            </div>
        </form>

      </div>
    
    </div>
  </div>
   </form>
</div>