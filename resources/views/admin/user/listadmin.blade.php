@extends('admin')
@section('titleadmin')
<title>Quản trị_user</title>
@endsection

@section('contentadmin')
        

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">Admin
                            <small>list</small>
                        </h1>
                    </div>
                        
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Ngày đăng kí</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ad as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->id}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->email}}</td>
                                <td>{{$s->password}}</td>
                                <td>{{$s->created_at}}</td>
                            </tr>
                            @endforeach
                            
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