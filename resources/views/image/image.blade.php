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
    <title>Image Upload</title>
  </head>
  <body>
    <a href="" class="btn btn-info my-5" data-bs-toggle="modal" data-bs-target="#addModal">Add New Image</a>
     <h1>Images Upload with Ajax</h1>

  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($image as $images)
 
    <tr>
      <td scope="row">{{$images->id}}</td>
      <td><img src="{{asset('images/'.$images->image)}}" alt="" width="120" height="120" class="src"></td>
      
      <td>
        <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
        <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>

      </td>
    </tr>
    @endforeach
 
    
  </tbody>
</table>

  @include('image.imageUpload')

  @include('image.imageJs')
      
    
  </body>
</html>