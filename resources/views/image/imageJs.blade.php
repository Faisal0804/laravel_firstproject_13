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

       //update image

       $(document).on('change','#image', function() {
        if (this.files && this.files[0]){
            let img =document.querySelector('.image_preview');
            img.onload = () =>{
                URL.revokeObjectURL(img.src);
            }
            img.src = URL.createObjectURL(this.files[0]);
            document.querySelector(".image_preview").files = this.files;
        }

       });


       $(document).on('submit','#upload_image_form',function(e){
        e.preventDefault();
        let form_data = new FormData(this);
        $.ajax({

            url:"{{ route('image.store') }}",
            method:'post',
            data:form_data,
            cache:false,
            contentType: false,
            processData: false,

            success:function(res){
                $('.error_success_msg_container').html('');
                if(res.status=='success'){
                        $('#addModal').modal('hide');
                        $('.table').load(location.href+' .table');
                        $('.error_success_msg_container').html('<p class="text-success">Image Successfully Uploaded</p>');
                    }
            }
        });



       });


        
            //alert('hello ');

        })

        
    </script>
    