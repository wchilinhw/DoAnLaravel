@extends('layout.menu_layout')
@section('content')
{{--  --}}<div>
<h4>DUYỆT BÀI</h4>
<div class="row">
  <div class="col-8"></div>
  <div class="col-4">
    <input type="text" placeholder="Tìm Kiếm,..." class="form-control">
    <br>
  </div>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Chủ Đề</th>
            <th scope="col">Chức Năng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Thời sự</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Thể Thao</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Văn Hóa</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Du lịch</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Xã Hội</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Khoa học</td>
            <td><button type="button" class="btn btn-success">Chỉnh Sửa</button></td>

        </tr>
        </tbody>
      </table>
      </div>
    {{--  --}}
@endsection