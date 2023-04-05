@extends('layouts.app')

@section('title', $viewData['title']);
@section('subtitle', $viewData['subtitle']);
@section('content')
  <div class="card mb-3" style="max-width: 1020px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('/img/items/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
            {{ $viewData['product']->getName() }} (Rp{{ $viewData['product']->getPrice() }}.000.000)
          </h5>
          <p class="card-text">{{ $viewData['product']['description'] }}</p>
          <p class="card-text"><small class="text-muted">Add to chart</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection
