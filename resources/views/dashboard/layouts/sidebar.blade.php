<div class="p-3 col fixed text-white bg-dark">
  <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
    <span class="fs-4">Admin Panel</span>
  </a>
  <hr />
  <ul class="nav flex-column">
    <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
    <li><a href="{{ route('admin.products.index') }}" class="nav-link text-white">- Admin - Products</a></li>
    <li>
      <a href="{{ route('home.index') }}" class="mt-2 btn text-white" style="background-color: #1B2430">Go back to the home page</a>
    </li>
  </ul>
</div>
