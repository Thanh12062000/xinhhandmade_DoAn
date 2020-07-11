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
                                <th>Ngày</th>
                                <th>Số đơn hàng</th>
                                <th>Tổng tiền trong ngày</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($giaodich1 as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->ngay}}</td>
                                <td>{{$s->sodonhang}}</td>
                                <td>{{$s->tong}}</td>

                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection