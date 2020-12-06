@extends('layouts.app')

@section('title', 'tambah order')

@section('content')
<div class="container">

     <div class="row mb-3 border rounded">
          <div class="col pl-0 ">
               <img src="{{ asset('public/'.$product->img_path) }}" alt="img" width="500px" class="ml-0">
          </div>
          <div class="col">
               <h3>{{$product->name}}</h3>
               <p>{{$product->description}}</p>
               <br>
               <h4>stock : {{$product->stock}}</h4>
               <br>
               <h3>$ {{$product->price}}</h3>
          </div>
     </div>

     <div class="row bg-light border rounded">
          <div class="col">
          <form action="{{route('orderPost')}}" method="post">
                    @csrf
                    <h2 class="text-center my-3">Buyer Information</h2>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Name</label>
                         <input type="text" name="buyer_name" class="form-control" placeholder="Enter name...">
                    </div>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Contact</label>
                         <input type="text" name="buyer_contact" class="form-control" placeholder="Enter contact...">
                    </div>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Quantity</label>
                         <input type="number" name="amount" class="form-control" placeholder="Enter quantity...">
                    </div>

                <input type="hidden" name="id" value="{{$product->id}}">

                    <button class="btn btn-success px-3 mb-3">Submit</button>
               </form>
          </div>
     </div>
</div>
@endsection