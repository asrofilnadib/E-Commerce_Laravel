<!-- navbar top -->
<div class="navbar-top">
  <div class="side-nav-panel-left">
    <!-- navbar top -->
    <div class="navbar-top">
      <div class="side-nav-panel-left">
        <a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a>
      </div>
      <!-- site brand	 -->
      <div class="site-brand">
        <a href="{{ route('home.index') }}" class="text-decoration-none"><h1>Akala</h1></a>
      </div>
      <!-- end site brand	 -->
      <div class="side-nav-panel-right mx-4">
        <a href="{{ route('cart.index') }}" class="side-nav-right"><i class="fa fa-shopping-basket"></i></a>
      </div>
    </div>
    <!-- end navbar top -->
  </div>
</div>
<!-- end navbar top -->

<!-- side nav left-->
<div class="side-nav-panel-left">
  <ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
    <li class="profil">
      <h2></h2>
      <h6></h6>
    </li>
    <li class="li-top">
    <li><a href="{{ route('home.index') }}" class="text-decoration-none nav-link active"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('products.index') }}" class="text-decoration-none nav-link active"><i class="fa fa-th-list"></i>Product List</a></li>
    <li><a href="/about" class="text-decoration-none nav-link active"><i class="fa fa-user"></i>About Us</a></li>
    <li><a href="#" class="text-decoration-none nav-link active"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
    @guest
      <li class="mt-4"><a href="{{ route('login') }}" class="text-decoration-none nav-link active"><i class="fa fa-sign-in"></i>Login</a></li>
      <li><a href="{{ route('register') }}" class="text-decoration-none nav-link active"><i class="fa fa-user-plus"></i>Register</a></li>
    @else
      <li><a class="nav-link active text-white mt-4" href="{{ route('myaccount.orders') }}"><i class="fa fa-shopping-bag"></i>My Orders</a></li>
      <li><form action="{{ route('logout') }}" id="logout" method="POST">
        <a role="button" class="nav-link active text-white" onclick="document.getElementById('logout').submit();"><i class="fa fa-sign-out h4"></i>Logout</a>
        @csrf
        </form></li>
    @endguest
  </ul>
</div>
<!-- end side nav left-->

{{--<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home.index') }}">Online Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link active" href="/about">About</a>
        <a class="nav-link active" href="/products">Product</a>
        <a class="nav-link active" href="{{ route('cart.index') }}"><img src="{{ asset('/img/items/shopping-cart.svg') }}" alt=""></a>
        <div class="vr bg-white d-none d-lg-block mx-2"></div>
        @guest
          <a class="nav-link active" href="{{ route('login') }}">Login</a>
          <a class="nav-link active" href="{{ route('register') }}">Register</a>
        @else
          <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a>
          <form action="{{ route('logout') }}" id="logout" method="POST">
            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
            @csrf
          </form>
        @endguest
      </div>
    </div>
  </div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">
  <div class="container d-flex align-items-center flex-column">
    <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
  </div>
</header>--}}
<!-- header -->
