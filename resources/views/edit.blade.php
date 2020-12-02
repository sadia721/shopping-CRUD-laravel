
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HUB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Record</h2>
  <form method="put" action="{{url('Admin/'.$r->id)}}">
        @csrf
        @method('PUT')
    <div class="form-group">
      <label for="name">Name of Brand</label>
      <input type="text" class="form-control" placeholder="enter Name" name="name" value="{{old('name',$r->name)}}"><br>
        @error('name')
        <span> {{$errors->first('name')}}</span><br>
        @enderror
    </div>
    <div class="form-group">
      <label for="size">Size:</label>
      <input type="text" class="form-control" placeholder="enter size" name=size value="{{old('size',$r->size)}}"><br>
        @error('size')
        <span> {{$errors->first('size')}}</span><br>
        @enderror
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" placeholder="enter price" name="price" value="{{old('price',$r->price)}}"><br>
        @error('price')
        <span> {{$errors->first('price')}}</span><br>
        @enderror
    </div>
    <div class="form-group">
      <label for="price">quantity:</label>
      <input type="text" class="form-control" placeholder="enter quantity" name="quantity" value="{{old('quantity',$r->quantity)}}"><br>
        @error('quantity')
        <span> {{$errors->first('quantity')}}</span><br>
        @enderror
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
