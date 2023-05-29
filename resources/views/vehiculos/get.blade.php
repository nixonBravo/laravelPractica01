@extends('welcome')
@section('title', 'Vehiculos')
@section('content')
<div class="w-75 mt-2 mx-auto">
    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($vehiculos as $item)
          <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->marca}}</td>
            <td>{{$item->modelo}}</td>
            <td>{{$item->tipo}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection