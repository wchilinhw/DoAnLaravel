@extends('layout.menu_layout')
@section('content')
<form>
    <h3>THÊM BÀI MỚI</h3>
    <div class="form-group">
      <label for="formGroupExampleInput">Tiêu Đề</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tiêu Đề...">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Thể Loại</label>
      <div class="input-group mb-3">
        <select class="custom-select" id="inputGroupSelect01">
          <option value="1">Văn Học</option>
          <option value="2">Khoa Học</option>
          <option value="3">Nghệ Thuật</option>
        </select>
      </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Nội Dung</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nội Dung..."></textarea>
      </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Tác Giả</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tác Giả...">
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><button type="submit" class="btn btn-success">Success</button></div>
        <div class="col-4"></div>
    </div>
  </form>
@endsection