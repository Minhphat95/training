@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <title>Thêm Dự Án</title>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('project.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('project.index')}}">Dự Án</a></li>
                    <li class="breadcrumb-item active">Thêm dự án</li>
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
                            <h3>Thêm Dự Án</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('project.index')}}" class="btn btn-primary float-right">Danh Sách Dự án</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('project.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã Dự Án</strong>
                                    <input type="text" name="id" class="form-control" placeholder="Nhập mã dự án">
                                    <span class="text-danger">
                                        @error('id')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <strong>Tên Dự Án</strong>
                                    <input type="text" name="name_project" class="form-control" placeholder="Nhập tên dự án">
                                    <span class="text-danger">
                                        @error('name_project')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <strong>Ngày Bắt Đầu</strong>
                                    <input type="date" name="start_project" class="form-control" id="start_project" placeholder="Nhập ngày bắt đầu dự án">
                                    <span class="text-danger">
                                        @error('start_project')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Ngày Kết Thúc</strong>
                                    <input type="date" name="end_project" class="form-control" id="end_project" placeholder="Nhập ngày kết thúc dự án">
                                    <span class="text-danger">
                                        @error('end_project')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <p><b>Trạng Thái</b></p>
                                    <input type="radio" id="html" name="status" value="Start">
                                    <label for="html">Start</label><br>
                                    <input type="radio" id="css" name="status" value="Pending">
                                    <label for="css">Pending</label><br>
                                    <input type="radio" id="css" name="status" value="End">
                                    <label for="css">End</label><br>
                                    <span class="text-danger">
{{--                                    <strong>Trạng Thái</strong>--}}
{{--                                    <select name="status" class="form-control">--}}
{{--                                        <option selected>Chọn trạng thái</option>--}}
{{--                                        <option value="Start">Start</option>--}}
{{--                                        <option value="Pending">Pending</option>--}}
{{--                                        <option value="End">End</option>--}}
{{--                                    </select>--}}
{{--                                    <span class="text-danger">--}}
                                        @error('status')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <strong>Phân Công</strong>
                                    <input type="text" name="assignment" class="form-control" placeholder="Nhập phân công dự án">
                                    <span class="text-danger">
                                        @error('assignment')
                                            {{$message}}
                                        @enderror
                                    </span>
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
            flatpickr("#start_project", {
                dateFormat: "Y/m/d",
                "locale": "ja",
            });

            flatpickr("#end_project", {
                dateFormat: "Y/m/d",
                "locale": "ja",
            });
        </script>
    @endpush
@endsection
