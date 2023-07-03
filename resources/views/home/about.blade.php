@extends('layouts.app')

@section('title', $viewData['title'])
@section('title', $viewData['subtitle'])
@section('content')
  <div class="row">
    <div class="col-lg-4 ms-lg-auto text-center">
      <p class="lead">{{ $viewData['description'] }}</p>
    </div>
    <div class="col-lg-4 me-lg-auto text-center">
      <p class="lead">{{ $viewData['author'] }}</p>
    </div>
  </div>
@endsection
