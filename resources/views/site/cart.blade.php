@extends('layouts.site')
@section('title')
    <title>Ogani | Carts</title>
@endsection
@section('nav')
    <li><a href="{{ route('home.index') }}">Trang Chủ</a></li>
    <li><a href="{{ route('home.shop') }}">Cửa Hàng</a></li>
@endsection
@section('nav-search')
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="#">
                        <input type="text" placeholder="Bạn cần gì?">
                        {{-- <button type="submit" class="site-btn">Tìm</button> --}}
                    </form>
                </div>

            </div>
            <div class="search-result col-lg-9 pr-5">
            </div>
        </div>
    </div>
@endsection
@section('main')
    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="{{url('site')}}/img/breadcrumb.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Giỏ hàng</h2>
                     <div class="breadcrumb__option">
                        <a href="{{route('home.index')}}">Trang chủ</a>
                        <span>Giỏ hàng</span>
                     </div>
                  </div>
            </div>
         </div>
      </div>
</section> --}}
    <!-- Breadcrumb Section End -->
    <!-- Shoping Cart Section Begin -->
    <div class="container" style="background: rgb(237, 28, 36)">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('home.index') }}">Trang chủ</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart_wrapper">
        @include('components.cart')
    </div>

    <!-- Shoping Cart Section End -->
@endsection
