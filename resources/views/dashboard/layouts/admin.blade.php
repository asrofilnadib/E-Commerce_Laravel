<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{--Bootstrap CDN--}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  {{--CSS Asset--}}
  <link rel="stylesheet" href="{{  asset('/css/admin.css') }}">

  {{--Feather CDN--}}
  <script src="https://unpkg.com/feather-icons"></script>

  <title>@yield('title', 'Online Store')</title>
</head>
<body>
<div class="row g-0">
 {{-- <!-- sidebar -->--}}
  @include('dashboard.layouts.sidebar')
{{--  <!-- sidebar -->--}}
  <div class="col content-grey">
    <nav class="p-3 shadow text-end">
      <span class="profile-font">Admin</span>
      <img class="img-profile rounded-circle" src="{{ asset('/img/items/undraw_profile.svg') }}">
    </nav>
    <div class="g-0 m-5">
      @yield('content')
    </div>
  </div>
</div>

<!-- footer -->
@include('layouts.copyright')
<!-- footer -->

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
  import feather from "feather-icons";

  feather.replace()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
