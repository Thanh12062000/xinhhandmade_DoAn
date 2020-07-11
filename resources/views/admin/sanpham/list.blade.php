@extends('admin')
@section('titleadmin')
<title>Quản trị_Sản Phẩm</title>
@endsection

@section('contentadmin')
        

     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>List</small>
                        </h1>
                    </div>
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>  
                        @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Giá gốc</th>
                                <th>Giá khuyến mãi</th>
                                <th>LinkImage</th>
                                <th>ID_danh mục</th>
                                <th>TG khởi tạo</th>
                                <th>Lượt View</th>
                                <th>Màu sắc</th>
                                <th>Mô tả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->id}}</td>
                                <td>{{$s->tensp}}</td>
                                <td>{{$s->giagoc}}</td>
                                <td>{{$s->giakm}}</td>
                                <td>{{$s->ImageLink}}</td>
                                <td>{{$s->iddanhmuc}}</td>
                                <td>{{$s->TgianKtao}}</td>
                                <td>{{$s->luotview}}</td>
                                <td>{{$s->mausac}}</td>
                                <td>{{$s->mota}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/delete/{{$s->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/edit/{{$s->id}}">Edit</a></td>
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