<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>crud</title>
  </head>
  <body>

    <h1>crud laravel</h1>
    <a href="" class="btn btn-info mb-4" data-bs-toggle="modal" data-bs-target="#addModal" >add product</a>

  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">produc</th>
      <th scope="col">price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $si=>$product)
    <tr>
   
      <th scope="row">{{$si+1}}</th>
      <td>{{$product->pname}}</td>
      <td>{{$product->price}}</td>
      <td>
       <a href="" class="btn btn-success update_input_product"
         data-bs-toggle="modal"
         data-bs-target="#updateModal"
         data-id="{{$product->id}}"
         data-pname="{{$product->pname}}"
         data-price="{{$product->price}}"    
       >
        <i  class="las la-edit "    
        
        ></i></a>
       <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
        
      </td>
    </tr>
    @endforeach
    
   
   
   
  </tbody>
</table>


    
    @include("js.productJs")
    @include("inc.add_product")
    @include("inc.update_product")
  
   
  </body>
</html>