@extends('layouts.app')

@section('title', $viewdata['title'])
@section('subtitle', $viewdata['subtitle'])
@section('content')
  <div class="card" style="margin-top: 120px; margin-bottom: 50px">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('/storage/' . $viewdata['product']->getImage()) }}" class="img-fluid rounded-start"
             alt="...">
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
            {{ $viewdata['product']->getName() }}   ${{ $viewdata['product']->getPrice() }}
          </h5>

          <p class="card-text my-4 text-justify">{{ $viewdata['product']['description'] }}</p>

          <p class="card-text">
          <form method="POST" action="{{ route('cart.add', ['id'=> $viewdata['product']->getId()]) }}">
            <div class="row">
              @csrf
              <div class="col-auto">
                <div class="input-group col-auto">
                  <div class="input-group-text">Quantity</div>
                  <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                </div>
              </div>
              <div class="col-auto">
                <button class="btn text-white" type="submit" style="background-color: #FF9EAAFF">Add to cart</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
