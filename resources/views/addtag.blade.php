@extends('layout.menu_layout')
@section('content')
<form>
    <h3>THÊM THỂ LOẠI MỚI</h3>
    <div class="form-group">
      <label for="formGroupExampleInput">Thể Loại</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Thể Loại...">
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><button type="submit" class="btn btn-success">Success</button></div>
        <div class="col-4"></div>
    </div>
        
  </form>
@endsection