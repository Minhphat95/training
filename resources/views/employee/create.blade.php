@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <title>Thêm Nhân Viên</title>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Nhân Viên</a></li>
                <li class="breadcrumb-item active">Thêm nhân viên</li>
            </ol>
        </div>
    </div>
    </br>
    </br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm Nhân Viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('employee.index')}}" class="btn btn-primary float-right">Danh Sách Nhân
                            Viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã Nhân Viên</strong>
                                <input type="text" name="id" class="form-control" placeholder="Nhập mã nhân viên">
                                <span class="text-danger">
                                    @error('id')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <strong>Họ Tên</strong>
                                <input type="text" name="full_name" class="form-control" placeholder="Nhập họ tên">
                                <span class="text-danger">
                                    @error('full_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <p><b>Giới Tính</b></p>
                                    <input type="radio" id="html" name="gender" value="Nam">
                                    <label for="html">Nam</label><br>
                                    <input type="radio" id="css" name="gender" value="Nữ">
                                    <label for="css">Nữ</label><br>
                                <span class="text-danger">
                                @error('gender')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Ngày Sinh</strong>
                                <input type="text" name="birthday" class="form-control" id="birthday" placeholder="Select Date..">
                                <span class="text-danger">
                                    @error('birthday')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                                <span class="text-danger">
                                    @error('address')
                                    {{$message}}
                                    @enderror
                                <span class="text-danger">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                                <span class="text-danger">
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control" placeholder="Nhập email">
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <p><b>Chức Vụ</b></p>
                                <input type="radio" id="html" name="position" value="Developer">
                                <label for="html">Developer</label><br>
                                <input type="radio" id="css" name="position" value="Tester">
                                <label for="css">Tester</label><br>
                                <input type="radio" id="css" name="position" value="PM">
                                <label for="css">PM</label><br>
                                <span class="text-danger">
                                @error('position')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push("scripts")
    <script>
        flatpickr("#birthday", {
            dateFormat: "Y/m/d",
            "locale": "ja",
        });
    </script>

@endpush
@endsection

