<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__profile">
                            <div class="left__image"><img src="images/slide2.jpg" alt=""></div>
                        <a href="{{URL::to('login')}}" >
                            <p class="left__name">Admin</p>
                        </a>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="{{URL::to('index')}}" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Bảng Điều Khiển</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-tag.svg" alt="">Bài Viết<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('allpost')}}">Tất Cả Bài Viết</a>
                                    <a class="left__link" href="{{URL::to('addpost')}}">Thêm Bài Viết</a>
                                <a class="left__link" href="{{URL::to('editpost')}}">Chỉnh Sửa Bài Viết</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-edit.svg" alt="">Chủ Đề<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('alltag')}}">Tất Cả Chủ Đề</a>
                                    <a class="left__link" href="{{URL::to('addtag')}}">Thêm Chủ Đề</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Tài Khoản<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('allmemacc')}}">Tài Khoản Khách</a>
                                    <a class="left__link" href="view_category.html"></a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_category.html">Tất cả tài khoản</a>
                                    <a class="left__link" href="view_category.html"></a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="" class="left__title"><img src="assets/icon-logout.svg" alt="">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="right">
                    <div class="right__content">
                @section('content')
                    @show
                </div>
            </div>
               {{--  --}}
            </div>
        </div>
    </div>

    <script src="js/menu.js"></script>
</body>
</html>