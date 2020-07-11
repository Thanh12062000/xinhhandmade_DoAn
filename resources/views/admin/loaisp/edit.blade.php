@extends('admin')
@section('titleadmin')
<title>Quản trị_Danh mục</title>
@endsection

@section('contentadmin')
        

    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh mục Sản phẩm
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>  
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>  
                        @endif
                        <form action="admin/loaisp/edit/{{$loai->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="Name" value="{{$loai->tendanhmuc}}" />
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <input class="form-control" name="danhmuc" value="{{$loai->danhmucsanpham}}"/>
                            </div>
                            <button type="submit" class="btn btn-default"  style="background:#d9b38c; margin-right:20px" >Edit</button>
                            <button type="reset" class="btn btn-default" style="background:#d9b38c; ">Cancel</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection