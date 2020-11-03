@extends('layout.menu_layout')
@section('content')
{{--  --}}<div>
<h4>DUYỆT BÀI</h4>
<div class="row">
  <div class="col-8"></div>
  <div class="col-4">
    <input type="text" placeholder="Tiêu đề, tác giả,..." class="form-control">
    <br>
  </div>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Tác Giả</th>
            <th scope="col" colspan="2">Duyệt Bài</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Khu vực từ Nghệ An đến Khánh Hòa chủ động ứng phó với bão số 10</td>
            <td>Ngày 2/11, Ban Chỉ đạo Trung ương về phòng chống thiên tai và Ủy ban quốc gia Ứng phó sự cố thiên tai và Tìm kiếm cứu nạn ban hành Công điện số 35 /CĐ-TW gửi Ban Chỉ huy Phòng chống thiên tai và Tìm kiếm cứu nạn các tỉnh, thành phố từ Nghệ An đến Khánh Hòa; Ban Chỉ huy Phòng chống thiên tai và Tìm kiếm cứu nạn các Bộ: Tài nguyên và Môi trường, Nông nghiệp và Phát triển nông thôn, Công Thương, Quốc phòng, Công an, Xây Dựng, Thông tin và Truyền thông, Giao thông Vận tải, Ngoại giao, Y tế; Thông tấn xã Việt Nam, Đài Truyền hình Việt Nam, Đài Tiếng nói Việt Nam và các cơ quan báo chí.</td>
            <td>Chí Linh</td>
            <td><button type="button" class="btn btn-success">Duyệt</button></td>
            <th><button type="button" class="btn btn-danger">Không duyệt</button></th>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Khu vực từ Nghệ An đến Khánh Hòa chủ động ứng phó với bão số 10</td>
            <td>Ngày 2/11, Ban Chỉ đạo Trung ương về phòng chống thiên tai và Ủy ban quốc gia Ứng phó sự cố thiên tai và Tìm kiếm cứu nạn ban hành Công điện số 35 /CĐ-TW gửi Ban Chỉ huy Phòng chống thiên tai và Tìm kiếm cứu nạn các tỉnh, thành phố từ Nghệ An đến Khánh Hòa; Ban Chỉ huy Phòng chống thiên tai và Tìm kiếm cứu nạn các Bộ: Tài nguyên và Môi trường, Nông nghiệp và Phát triển nông thôn, Công Thương, Quốc phòng, Công an, Xây Dựng, Thông tin và Truyền thông, Giao thông Vận tải, Ngoại giao, Y tế; Thông tấn xã Việt Nam, Đài Truyền hình Việt Nam, Đài Tiếng nói Việt Nam và các cơ quan báo chí.</td>
            <td>Chí Linh</td>
            <td><button type="button" class="btn btn-success">Duyệt</button></td>
            <th><button type="button" class="btn btn-danger">Không duyệt</button></th>
          </tr>
        </tbody>
      </table>
      </div>
    {{--  --}}
@endsection