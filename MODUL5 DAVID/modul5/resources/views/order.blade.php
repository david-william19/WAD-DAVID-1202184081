@extends('layouts.app')

@section('title', 'order')

@section('content')
@if ($product)
<div class="d-flex">
@foreach ($product as $pd)

<div class="card mx-3" style="width: 18rem;">
<img class="card-img-top" src="{{ asset('public/'.$pd->img_path) }}" alt="img">
     <div class="card-body">
          <h3 class="card-title">{{$pd->name}}</h3>
          <p>{{$pd->description}}</p>
          <h2>$ {{$pd->price}}</h2>
          <a href="{{route('orderCreate',$pd->id)}}" class="btn btn-success">Order Now</a>
     </div>
</div>
@endforeach
</div>
</table>
@else
<div class="text-center">
     <p class="text-muted">there is no data...</p>
     <a href="{{route('tambah')}}" class="btn btn-light">Add Data</a>
</div>
@endif


@endsection