@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <title>Sửa Dự Án</title>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('project.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('project.index')}}">Dự Án</a></li>
                    <li class="breadcrumb-item active">Sửa dự án</li>
                </ol>
            </div><!-- /.container-fluid -->
        </div>
        </br>
        </br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Sửa Dự Án</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('project.index')}}" class="btn btn-primary float-right">Danh Sách Dự Án</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('project.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã Dự Án</strong>
                                    <input type="text" name="id" value="{{$project->id}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Tên Dự Án</strong>
                                    <input type="text" name="name_project" value="{{$project->name_project}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Ngày Bắt Đầu</strong>
                                    <input type="date" name="start_project" value="{{$project->start_project}}" class="form-control" id="start_project">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Ngày Kết Thúc</strong>
                                    <input type="date" name="end_project" value="{{$project->end_project}}" class="form-control" id="end_project">
                                </div>
                                <div class="form-group">
                                    <strong>Trạng Thái</strong>
                                    {{-- <input type="text" name="status" value="{{$project->status}}" class="form-control"> --}}
                                    <select name="status" class="form-control">
                                        <option selected>Chọn trạng thái</option>
                                        <option value="Start">Start</option>
                                        <option value="Pending">Pending</option>
                                        <option value="End">End</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Phân Công</strong>
                                    <input type="text" name="assignment" value="{{$project->assignment}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push("scripts")
        <script>
            flatpickr("#created_project", {
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
