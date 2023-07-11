@extends('layouts.app')

@section('title', $viewData['title'])
@section('content')
  <!-- slider -->
  <div class="slider">

    <ul class="slides">
      <li>
        <img src="img/croffle.jpg" alt="">
        <div class="caption slider-content center-align ">
          <div class="container">
            <h2>Welcome to Akala</h2>
            <h4>Croissants and Waffles</h4>
            <a href="/products/1" class="button-default">Get Now</a>
          </div>
        </div>
      </li>
      <li>
        <img src="img/kue-blackpink.webp" alt="">
        <div class="caption slider-content center-align">
          <div class="container">
            <h2>Choose Your Favorit Food</h2>
            <h4>Special Edition Blackpink Cake</h4>
            <a href="products/3" class="button-default">Get Now</a>
          </div>
        </div>
      </li>
      <li>
        <img src="img/kue-LV.jpg" alt="">
        <div class="caption slider-content center-align">
          <div class="container">
            <h2>Sweat & Delicious Cake</h2>
            <h4>LV Cake</h4>
            <a href="products/6" class="button-default">Get Now</a>
          </div>
        </div>
      </li>
    </ul>

  </div>
  <!-- end slider -->

  <!-- new Product -->
  <div class="section product bg-second">
    <div class="container">
      <div class="section-head">
        <h4>Best Sellers</h4>
        <div class="underline"></div>
      </div>
      <div class="row">
        <div class="col s4">
          <div class="content">
            <span class="price">$45</span>
            <img class="img-thumbnail rounded" src="img/kue-drakor.jpg" alt="">
            <div class="sub-content">
              <a class="text-decoration-none text-dark"  href="products/5"><h5>Korean Cake</h5></a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="content">
            <span class="price">$59</span>
            <img class="img-thumbnail rounded" src="img/kue-mafia.jpg" alt="">
            <div class="sub-content">
              <a class="text-decoration-none text-dark" href="products/9"><h5>Dollar Cake</h5></a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="content">
            <span class="price">$24</span>
            <img class="img-thumbnail rounded" src="img/kue-pandora.jpg" alt="">
            <div class="sub-content">
              <a class="text-decoration-none text-dark" href="products/7"><h5>Pandora Cake</h5></a>
            </div>
          </div>
        </div>
  </div>
  <!-- end new Product -->

  <!-- who we are -->
  <div class="section who-we-are">
    <div class="container">
      <div class="head">
        <h4>Who we are Akala</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus a mollitia, numquam similique porro nam autem rem repudiandae ullam alias.</p>
      </div>
      <div class="row">
        <div class="col s6">
          <div class="content">
            <i class="fa fa-wifi"></i>
            <h5>Free Wifi</h5>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <i class="fa fa-edit"></i>
            <h5>Easty Customize</h5>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
      </div>
      <div class="row mb">
        <div class="col s6">
          <div class="content">
            <i class="fa fa-building-o"></i>
            <h5>Spot Clean</h5>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <i class="fa fa-cogs"></i>
            <h5>Free Support</h5>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end who we are -->

  <!-- most view -->
  <div class="section product bg-second">
    <div class="container">
      <div class="section-head">
        <h4>Our Menu</h4>
        <div class="underline"></div>
      </div>
      <div class="row">
        <div class="col s6">
          <div class="content">
            <span class="price">$31</span>
            <img src="img/product5.jpg" alt="">
            <div class="sub-content">
              <a href=""><h5>Pizza Hot Delicious</h5></a>
              <button class="button-default">ADD TO CART</button>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <span class="price">$42</span>
            <img src="img/product6.jpg" alt="">
            <div class="sub-content">
              <a href=""><h5>Instant Nodle Tasty</h5></a>
              <button class="button-default">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <div class="content">
            <span class="price">$18</span>
            <img src="img/product1.jpg" alt="">
            <div class="sub-content">
              <a href=""><h5>Grilled Chicken Sweet</h5></a>
              <button class="button-default">ADD TO CART</button>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="content">
            <span class="price">$20</span>
            <img src="img/product2.jpg" alt="">
            <div class="sub-content">
              <a href=""><h5>Hamburger Sweet Tasty</h5></a>
              <button class="button-default">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end moss views -->

  <!-- loader -->
  <div id="fakeLoader"></div>
  <!-- end loader -->

@endsection
