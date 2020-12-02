@extends("layout")

@section("content")
<div class="container">
<form action="{{url('/store')}}" method="post" class="was-validated" accept-charset="utf-8" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="form-group">
    <label for="uname">Name of Shoes:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Size(42/1):</label>
    <input type="text" class="form-control" id="size" placeholder="enter size" name="size" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" id="quantity" placeholder="quantity" name="quantity" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="Price">Price:</label>
    <input type="text" class="form-control" id="price" placeholder="price" name="price" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="color">Color:</label>
    <input type="text" class="form-control" id="color" placeholder="color" name="color" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="color">Image</label>
    <input type="file" class="form-control" id="color" placeholder="image" name="image" accept="image/*" onchange="readURL(this);" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection("content")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</div>
 <script>
   function readURL(input, id) {
     id = id || '#file-image';
     if (input.files &amp;&amp; input.files[0]) {
         var reader = new FileReader();
 
         reader.onload = function (e) {
             $(id).attr('src', e.target.result);
         };
 
         reader.readAsDataURL(input.files[0]);
         $('#file-image').removeClass('hidden');
         $('#start').hide();
     }
  }
 </script> 