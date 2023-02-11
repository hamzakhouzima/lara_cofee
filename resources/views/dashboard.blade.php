

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-md "> 
   <table class="table">
    <thead>
       
      <tr>
        <th scope="col">Category</th>
        <th scope="col">Drink</th>
        <th scope="col">Size</th>
        <th scope="col">Price</th>
        <th scope="col">create</th>
        <th scope="col">buttons </th>
      </tr>
     
    </thead>
    <tbody>
      <tr>
 @foreach($drinks as $cup)
        <th scope="row">{{$cup->category}}</th>
        <td>{{$cup->drink}}</td>
        <td>{{$cup->size}}</td>
        <td>{{$cup->price}}</td>
        <td>
        <form action="{{route('destroy.route',$cup->id)}}" method="post" >
           @csrf
            @method('DELETE')
            <a class='btn btn-success' href="{{route('edit.route',$cup->id)}}">UPDATE</a>
            <button class='btn btn-danger' type='submit'>DELETE</button>
       
       
    </td>
 </form>
        {{-- <td> <form action='{{route('destroy.route',$cup->id)}}' method='post'>
        @csrf
        @method('DELETE')
        
        </form>
    </td> --}}
      </tr>
     @endforeach
    </tbody>
  </table> 
      <button class='btn btn-success' type='button'><a href="{{route('create.route')}}">+ADD</a></button>

</div>   
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" />
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap5.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap5.min.css">
        
</body>



</html>

