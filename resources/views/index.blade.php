@extends('layout.menu_layout')
@section('content')
    

        <div class="right__title">Báo Mới 404</div>
        <p class="right__desc">Bảng điều khiển</p>
        <div class="right__cards">
            <a class="right__card" href="{{URL::to('allpost')}}">
                <div class="right__cardTitle">Tất Cả Bài Viết</div>
                <div class="right__cardNumber">72</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
            </a>
            <a class="right__card" href="{{URL::to('alltag')}}">
                <div class="right__cardTitle">Chủ Đề</div>
                <div class="right__cardNumber">12</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
            </a>
            <a class="right__card" href="{{URL::to('allpost')}}">
                <div class="right__cardTitle">Bình Luận</div>
                <div class="right__cardNumber">4</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
            </a>
            <a class="right__card" href="{{URL::to('allpost')}}">
                <div class="right__cardTitle">Duyệt Bài</div>
                <div class="right__cardNumber">72</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
            </a>
        
</div>
@endsection
