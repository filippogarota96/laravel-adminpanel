@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Companies List</h2>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Logo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($companies as $company)
      <tr>
        <td><img src="{{$company->logo}}" alt="{{$company->name}}"></td>
        <td>{{$company->name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->website}}</td>
        <td><a href="{{route('admin.companies.show', ['company' => $company->id])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
        <td><a href="{{route('admin.companies.edit', ['company' => $company->id])}}"><button type="button" class="btn btn-primary">Modifica</button></a></td>
      </tr>   
    @endforeach
  </tbody>
</table>
    </div>
@endsection