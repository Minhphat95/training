@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <title>Sửa Nhân Viên</title>
        <!-- Content Header (Page header) -->
        <div class="content-header">

            <div class="container-fluid">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Nhân Viên</a></li>
                    <li class="breadcrumb-item active">Sửa nhân viên</li>
                </ol>
            </div><!-- /.container-fluid -->
        </div>
        <br/>
        <br/>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Sửa Nhân Viên</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('employee.index')}}" class="btn btn-primary float-right">Danh Sách Nhân Viên</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã Nhân Viên</strong>
                                    <input type="text" name="id" value="{{$employee->id}}" class="form-control" placeholder="Nhập mã nhân viên">
                                </div>
                                <div class="form-group">
                                    <strong>Họ Tên</strong>
                                    <input type="text" name="full_name" value="{{$employee->full_name}}" class="form-control" placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <strong>Giới Tính</strong>
                                    <select name="gender" class="form-radio">
                                        <option hidden value="">Chọn giới tính</option>
                                        <option value="Nam" {{$employee->gender == "Nam" ? 'selected' : ''}}>Nam</option>
                                        <option value="Nữ" {{$employee->gender == "Nữ" ? 'selected' : ''}}>Nữ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Ngày Sinh</strong>
                                    <input type="date" name="birthday" value="{{$employee->birthday}}" class="form-control" id="birthday">
                                </div>
                                <div class="form-group">
                                    <strong>Địa chỉ</strong>
                                    <input type="text" name="address" value="{{$employee->address}}" class="form-control" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="form-group">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="phone" value="{{$employee->phone}}" class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Cập Nhật</button>
                        </div>
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
