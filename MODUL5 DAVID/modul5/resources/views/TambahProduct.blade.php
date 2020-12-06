@extends('layouts.app')

@section('title', 'add product')

@section('content')

<h2 class="text-center mt-2 mb-3">Input Product</h2>
<form action="{{route('create')}}" method="post" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
          <label for="exampleInputEmail1">Product name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter product name...">
          @error('name')
          <div class="mt text-danger">{{ $message }}</div>
          @enderror
     </div>
     <div class="form-group">
          <label>Price</label>
          <div class="input-group">
               <div class="input-group-prepend">
                    <div class="input-group-text">EUR</div>
               </div>
               <input type="text" name="price" class="form-control" placeholder="enter price...">
               @error('price')
               <div class="mt text-danger">{{ $message }}</div>
               @enderror
          </div>
     </div>
     <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          @error('description')
          <div class="mt text-danger">{{ $message }}</div>
          @enderror
     </div>
     <div class="form-group">
          <label for="exampleInputEmail1">Stock</label>
          <input type="text" name="stock" class="form-control" placeholder="Enter stock...">
          @error('stock')
          <div class="mt text-danger">{{ $message }}</div>
          @enderror
     </div>
     <div class="form-group">
          <label for="exampleFormControlFile1">image file input</label>
          <input type="file" name="img_path" class="form-control-file" id="exampleFormControlFile1">
          @error('img_path')
          <div class="mt text-danger">{{ $message }}</div>
          @enderror
     </div>
     <button type="submit" class="btn btn-dark px-4">Submit</button>
</form>
@endsection