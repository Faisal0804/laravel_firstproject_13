<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    </script>

    <script>
        $(document).ready(function(){
            

            $(documnet).on('click','.add_product',function(event){
                event.preventDefault();
                 let pname=$('#pname').val();
                // let cat_id=$('#cat_id').val();
                // let subcat_id=$('#subcat_id').val();
                // let tags=$('#tags').val();
                // let exchange=$('#exchange').val();
                // let refund=$('#refund').val();
                //var formData = new FormData(this);
                alert(pname);

                let TotalImages = $('#images')[0].files.length; //Total Images
                let images = $('#images')[0];
                for (let i = 0; i < TotalImages; i++) {
                formData.append('pimage' + i, images.files[i]);
                }
                formData.append('TotalImages', TotalImages);

                $.ajax({

                    url:"{{route('add.productdata')}}",
                    method:'post',
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    

                    success: (data) => {
                
                    },
                    error: function(data){
                    console.log(data);
                    }

                })





            })





        })





    </script>
