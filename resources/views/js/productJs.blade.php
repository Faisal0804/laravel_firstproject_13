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
            $(document).on('click','.add_product',function(event){
                event.preventDefault();
                 let pname= $('#pname').val();
                 let price= $('#price').val();
                // alert(JSON.stringify(pname+price));

                $.ajax(
                    {
                        url:"{{route('add.product')}}",
                        method:"post",
                        data:{
                            pname:pname,
                            price:price,
                        },
                        success:function(response){

                           // $('#successMes').append('<span class="text-success">Data insert success</span>');

                          if(response.status="success"){
                            $('#addModal').modal('hide');
                            $('#addproduct')[0].reset();
                            $('.table').load(location.href+' .table');

                          }

                        },
                        error:function(error){
                            $("#ErroMsg").find("ul").html('');
                            $.each(error.responseJSON.errors, function(key, value ) {
                            $('#ErroMsg').find("ul").append('<li class="text-danger" >'+value+'</li>');
                    });


                        }

                   }

                );



            }



            );


            //select for update

            $(document).on('click','.update_input_product',function(event){

                let id= $(this).data('id');
                let pname= $(this).data('pname');
                let price= $(this).data('price');

                $('#up_id').val(id)
                $('#up_pname').val(pname)
                $('#up_price').val(price)

            }
            
            
            
            );



           

      //update data

      $(document).on('click','.update_product',function(event){
                event.preventDefault();
                 let up_id= $('#up_id').val();
                 let up_pname= $('#up_pname').val();
                 let up_price= $('#up_price').val();
                // alert(JSON.stringify(pname+price));

                $.ajax(
                    {
                        url:"{{route('update.product')}}",
                        method:"post",
                        data:{
                            up_id:up_id,
                            up_pname:up_pname,
                            up_price:up_price,
                        },
                        success:function(response){

                           // $('#successMes').append('<span class="text-success">Data insert success</span>');

                          if(response.status="success"){
                            $('#updateModal').modal('hide');
                            $('#updateproduct')[0].reset();
                            $('.table').load(location.href+' .table');

                          }

                        },
                        error:function(error){
                            $("#ErroMsg").find("ul").html('');
                            $.each(error.responseJSON.errors, function(key, value ) {
                            $('#ErroMsg').find("ul").append('<li class="text-danger" >'+value+'</li>');
                    });


                        }

                   }

                );



            }



            );

            //delete


            
            $(document).on('click','.delete_product',function(event){
                event.preventDefault();
                var productURL = $(this).data('url');
                //var trObj = $(this);

                  if(confirm("Are you sure you want to remove this user?") == true){
                    $.ajax({
                     url: productURL,
                     type: 'DELETE',
                     dataType: 'json',
                    
                    success:function(response){ 

                            if(response.status="success"){
                          
                            $('.table').load(location.href+' .table');

                            }

                            }
                    });
                 }
  
              });







           
    })
    </script>