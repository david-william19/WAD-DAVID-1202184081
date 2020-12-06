@extends('layouts.app')

@section('title', 'product')

@section('content')
@if ($product)
<a href="{{route('tambah')}}" class="btn btn-dark my-3 text-left">Add Data</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach ($product as $pd)
    <tbody>
        <tr>
            <th scope="row">{{$pd->id}}</th>
            <td>{{$pd->name}}</td>
            <td>{{$pd->price}}</td>
            <td>
                <form action="{{route('delete',$pd->id)}}" method="post">
                    <a href="{{route('update', $pd->id)}}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@else
<div class="text-center">
    <p class="text-muted">there is no data...</p>
    <a href="{{route('tambah')}}" class="btn btn-light">Add Data</a>
</div>
@endif


@endsection