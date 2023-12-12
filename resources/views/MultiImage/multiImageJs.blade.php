<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
 
    <script>
        $(document).ready(function(){

            //multiple image preview

            $(function(){

                var ShowMultipleImagePreview =function(input, imgPreviewPlaceholder){
                    if (input.files){
                        var filesAmount =input.files.length;
                        for (i = 0; i < filesAmount; i++){
                            var reader = new FileReader();
                            reader.onload =  function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);

                            }
                            reader.readAsDataURL(input.files[i]);

                        }

                    }
                };

                $('#images').on('change', function(){
                    ShowMultipleImagePreview(this, 'div.show-multiple-image-preview');

                });


                //insert multiple


                $(document).on('submit','#multiple-image-preview-ajax',function(e) {

             e.preventDefault();

         var formData = new FormData(this);

     let TotalImages = $('#images')[0].files.length; //Total Images
      let images = $('#images')[0];
 for (let i = 0; i < TotalImages; i++) {
     formData.append('image' + i, images.files[i]);
 }
 formData.append('TotalImages', TotalImages);

$.ajax({
   
   url: "{{ route('upload-multiple-image')}}",
   method:'post',
   data: formData,
   cache:false,
   contentType: false,
   processData: false,
   success: (data) => {
    $('.error_success_msg_container').html('');
    if(data.status=='success'){
                        $('l#addModa').modal('hide');
                        //$('.table').load(location.href+' .table');
                        $('.error_success_msg_container').html('<p class="text-success">Image Successfully Uploaded</p>');
                    }
      
   },
   error: function(data){
      console.log(data);
    }
  });
});




            })

           

  


 


            //alert('hello ');

        })

        
    </script>
    