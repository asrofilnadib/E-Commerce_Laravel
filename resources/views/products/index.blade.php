@php use App\Models\Product; @endphp
@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
  <!-- list-head -->
  <div class="list-head">
    <div class="container">
      <div class="section-head">
        <h4>List Grid</h4>
        <div class="underline"></div>
      </div>
    </div>
  </div>
  <!-- end list-head -->

  <!-- grid -->
  <div class="section product bg-second">
    <div class="container">
      <div class="filter-head">
        <ul>
          <li>
            <select>
              <option value="" selected>Newest</option>
              <option value="1">Price: Hight to Low</option>
              <option value="2">Price: Low to Hight</option>
            </select>
          </li>
        </ul>
      </div>
      <div class="row">
        @foreach($viewData['products'] as $product)
        <div class="col-md-4 col-lg-3 mb-2">
          <div class="content">
            <span class="price">{{ $product->getPrice() }}</span>
            <img src="/storage/{{ $product->getImage() }}" alt="">
            <div class="sub-content">
              <a class="text-decoration-none text-dark font-weight-semibold" href="{{ route('products.show', ['id'=>$product->getId()]) }}"><h5>{{ $product->getName() }}</h5></a>
              <form method="POST" action="{{ route('cart.add', ['id'=>$product->getId()]) }}">
                @csrf
                <button class="button-default">add to cart</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  <!-- end grid -->

  <!-- loader -->
  <div id="fakeLoader"></div>
  <!-- end loader -->

{{--  <div class="row">
    @foreach($viewData['products'] as $products)
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <img src="/storage/{{ $products->getImage() }}" class="card-img-top img-card" style="width: content-box;" alt="">
        <div class="card-body text-center">
          <a href="{{ route('products.show', ['id'=>$products->getId()]) }}"
             class="btn bg-primary text-white">{{ $products->getName() }}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>--}}
@endsection
