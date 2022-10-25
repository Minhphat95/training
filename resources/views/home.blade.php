@extends('layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Thêm Nhân Viên</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('employee.create')}}" class="btn btn-primary float-end">Danh Sách Nhân Viên</a>
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
                                            </div>
                                            <div class="form-group">
                                                <strong>Họ Tên</strong>
                                                <input type="text" name="full_name" class="form-control" placeholder="Nhập họ tên">
                                            </div>
                                            <div class="form-group">
                                                <strong>Giới Tính</strong>
                                                <select name="gender" class="form-select">
                                                    <option selected>Chọn giới tính</option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Ngày Sinh</strong>
                                                <input type="date" name="birthday" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <strong>Địa chỉ</strong>
                                                <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                                            </div>
                                            <div class="form-group">
                                                <strong>Số điện thoại</strong>
                                                <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                            
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


