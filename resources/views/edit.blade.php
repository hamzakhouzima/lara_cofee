

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
        
    <form method='post'  action='{{ route('update.route',$drinks->id) }}' class="form-inline py-3">
        @csrf
        {{-- --}}
        @method('PUT')
        <label for="category">Category:</label>
        <input type="text" id="category" class="form-control" name='ucategory'/>
        
        <label for="drink">Drink:</label>
        <input type="text" id="drink" class="form-control" name='udrink'/>
        
        <label for="size">Size:</label>
        <input type="text" id="size" class="form-control" name='usize'/>
        
        <label for="price">Price:</label>
        <input type="text" id="price" class="form-control" name='uprice'/>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" />
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap5.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap5.min.css">
        
</body>



</html>

