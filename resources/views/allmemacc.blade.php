@extends('layout.menu_layout')
@section('content')
{{--  --}}<div>
<h4>DUYỆT BÀI</h4>
<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
      <input type="text" placeholder="Tìm kiếm..." class="form-control">
      <br>
    </div>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tài Khoản</th>
            <th scope="col">Loại Tài Khoản</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col" colspan="2">Chức Năng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>NganSatThu</td>
            <td>Member</td>
            <td>Đang hoạt động</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>
            <td><button type="button" class="btn btn-danger">Khóa Tài Khoản</button></td>

          </tr>
          <tr>
                <th scope="row">2</th>
                <td>LinkKKK</td>
                <td>Admin</td>
                <td>Đang hoạt động</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>
                <th><button type="button" class="btn btn-danger">Khóa Tài Khoản</button></th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>HuyCaoThu</td>
                <td>Member</td>
                <td>Đang hoạt động</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>
                <th><button type="button" class="btn btn-danger">Khóa Tài Khoản</button></th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>PhucTeo</td>
                <td>Member</td>
                <td>Đang hoạt động</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>
                <th><button type="button" class="btn btn-danger">Khóa Tài Khoản</button></th>
            </tr>

        </tbody>
      </table>
      </div>
    {{--  --}}
@endsection