@extends('layouts.main')
@section('content')

<div class="container">
  <h1>MOVIE</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Titolo Originale</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Data</th>
        <th scope="col">Voto</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($movie as $movies)
      <tr>
        <th scope="row">{{$movies->id}}</th>
        <td>{{$movies->title}}</td>
        <td>{{$movies->original_title}}</td>
        <td>{{$movies->nationality}}</td>
        <td>{{$movies->date}}</td>
        <td>{{$movies->vote}}</td>
      </tr>
      @empty
        <h1>VUOTO</h1>
      @endforelse
      
    </tbody>
  </table>
</div>
  
@endsection