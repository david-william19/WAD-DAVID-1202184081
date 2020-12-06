@extends('layouts.app')

@section('title', 'history')

@section('content')
<h3 class="my-4 text-center">History</h3>
<table class="table">
     <thead class="thead-dark">
          <tr>
               <th scope="col">#</th>
               <th scope="col">Product</th>
               <th scope="col">Buyer Name</th>
               <th scope="col">Contact</th>
               <th scope="col">Amount</th>
          </tr>
     </thead>
     @foreach ($order as $or)
     <tbody>
          <tr>
               <th scope="row">{{$or->id}}</th>
               @foreach ($product as $pd)    
               @if ($pd->id === $or->product_id)
                
                    <td>{{ $pd->name }}</td>

                @endif
                <td>{{$or->buyer_name}}</td>
                <td>{{$or->buyer_contact}}</td>
                <td>$ {{$or->amount * $pd->price}}</td>
                @endforeach
          </tr>
     </tbody>
     @endforeach
</table>
@endsection