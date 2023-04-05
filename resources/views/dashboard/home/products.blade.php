@extends('dashboard.layouts.admin')

@section('title', $viewData['title'])
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($viewData['products'] as $product)
      <tr>
        <td>{{ $product->getId() }}</td>
        <td>{{ $product->getName }}</td>
        <td>
          <a href="" class="badge
              bg-info"><span data-feather="eye"></span></a>
          <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
