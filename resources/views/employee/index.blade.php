@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <title>Danh sách Nhân Viên</title>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Nhân Viên</li>
                </ol>
            </div><!-- /.container-fluid -->
        </div>
        <br>
        <br>

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
                                        <h3>Danh Sách Nhân Viên</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('employee.create')}}" class="btn btn-primary float-right" >Thêm mới</a>
                                    </div>
                              </div>
                                <div class="cart-body">
                                    @if(Session::has('thongbao'))
                                        <div class="alert alert-success">
                                            {{Session::get('thongbao')}}
                                        </div>
                                    @endif
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>ID</th>
                                                <th>Họ Tên</th>
                                                <th style="width: 110px">Ngày Sinh</th>
                                                <th>Giới Tính</th>
                                                <th>Địa Chỉ</th>
                                                <th>Sỗ Điện Thoại</th>
                                                <th>Email</th>
                                                <th>Chức Vụ</th>
                                                <th style="width: 110px">Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employee as $em)
                                               <tr>
                                                   <td>{{++$i}}</td>
                                                   <td>{{$em->id}}</td>
                                                   <td style="width: 130px">{{$em->full_name}}</td>
                                                   <td>{{$em->birthday}}</td>
                                                   <td>{{$em->gender}}</td>
                                                   <td>{{$em->address}}</td>
                                                   <td>{{$em->phone}}</td>
                                                   <td>{{$em->email}}</td>
                                                   <td>{{$em->position}}</td>
                                                   <td>
                                                       <form action="{{route('employee.destroy', $em->id)}}" method="POST">
                                                           <a href="{{route('employee.edit', $em->id)}}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></a>
                                                           @csrf
                                                           @method('DELETE')
                                                              <button type="submit" onclick="return confirm('Bạn có muốn xóa nhân viên')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                       </form>
                                                   </td>
                                               </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
