@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
      @forelse($viewData['orders'] as $order)
        <div class="card mb-4">
          <div class="card-header">
            Order #{{ $order->getId()  }}
          </div>
          <div class="card-body">
            <strong>Date: </strong> {{ $order->getCreatedAt() }}
            <strong>Total: </strong> {{ $order->getTotal() }}
            <table class="table table-bordered table-striped text-center mt-3">
              <thead>
              <tr>
                <th scope="col">ID Product</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
              </tr>
              </thead>
              <tbody>
                @foreach( $order->getItems() as $items)
                  <td>{{ $items->getId() }}</td>
                  <td>
                    <a class="link-success" href="{{ route('products.show', [$items->getProduct()->getId()]) }}">
                      {{ $items->getProduct()->getName()  }}
                    </a>
                  </td>
                  <td>${{ $items->getPrice() }}</td>
                  <td>{{ $items->getQuantity() }}</td>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      @empty
        <div class="alert alert-danger" role="alert" style="margin: 220px 0 180px">
          Seems to be that you have not purchased anything in our store ☹️
        </div>
      @endforelse
@endsection
