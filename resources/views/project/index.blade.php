@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        <title>Danh sách Dự Án</title>
        <div class="content-header">
            <div class="container-fluid">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dự Án</li>
                    </ol>
            </div>
        </div>
    </br>
    </br>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                  <div class="row">
                                        <div class="col-md-6">
                                            <h3>Danh Sách Dự Án</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('project.create')}}" class="btn btn-primary float-right" >Thêm mới</a>
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
                                                <th>Tên Dự Án</th>
                                                <th>Ngày Bắt Đầu</th>
                                                <th>Ngày Kết Thúc</th>
                                                <th>Trạng thái</th>
                                                <th>Phân Công</th>
                                                <th>Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($project as $pr)
                                               <tr>
                                                   <td>{{++$i}}</td>
                                                   <td>{{$pr->id}}</td>
                                                   <td>{{$pr->name_project}}</td>
                                                   <td>{{$pr->created_project}}</td>
                                                   <td>{{$pr->end_project}}</td>
                                                   <td>{{$pr->status}}</td>
                                                   <td>{{$pr->assignment}}</td>
                                                   <td>
                                                       <form action="{{route('project.destroy', $pr->id)}}" method="POST">
                                                           <a href="{{route('project.edit', $pr->id)}}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></a>
                                                           @csrf
                                                           @method('DELETE')
                                                           <button type="submit" onclick="return confirm('Bạn có muốn xóa dự án')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
