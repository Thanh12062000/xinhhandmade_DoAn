@extends('admin')
@section('titleadmin')
<title>Quản trị_Thống kê</title>
@endsection

@section('contentadmin')
        

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">Thống kê 
                            <small>Ngày</small>
                        </h1>
                    </div>
                        
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Trạng thái</th>
                                <th>Id Người dùng</th>
                                <th>Tên người dùng</th>
                                <th>Email người dùng</th>
                                <th>SDT người dùng</th>
                                <th>Tổng tiền</th>
                                <th>Hình thức thanh toán</th>
                                <th>Ngày thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($giaodich as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->id}}</td>
                                <td>{{$s->trangthai}}</td>
                                <td>{{$s->iduser}}</td>
                                <td>{{$s->username}}</td>
                                <td>{{$s->usermail}}</td>
                                <td>{{$s->userphone}}</td>
                                <td>{{$s->tongtien}}</td>
                                <td>{{$s->payment}}</td>
                                <td>{{$s->created_at}}</td>
                            </tr>
                            @endforeach
                            <div class="col-lg-12">
                                 <h1 class="page-header">Tổng tiền trong ngày {{$m}} / {{$d}} / {{$y}}
                            <small>{{$tong}} $</small>
                        </h1>
                    </div>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection