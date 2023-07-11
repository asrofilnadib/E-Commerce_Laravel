@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
  <div class="card" style="margin: 120px 0 70px">
    <div class="card-header">
      Purchase Completed
    </div>
    <div class="card-body">
      <div class="alert alert-success" role="alert">
        Conratulations, Purchased Completed. Order number is <strong>#{{$viewData['order']->getId()}}</strong>
      </div>
    </div>
  </div>
@endsection
