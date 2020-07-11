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
                            <small>Add</small>
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
                        <form action="admin/sanpham/create" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá gốc</label>
                                <input class="form-control" name="giagoc" placeholder="Nhập giá gốc sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="giakm" placeholder="Nhập giá khuyến mãi" />
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="loai">
                                    @foreach($loaisp as $loai)
                                    <option value="{{$loai->id}}">{{$loai->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lượt view</label>
                                <input class="form-control" name="view" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Màu sắc</label>
                                <input class="form-control" name="mau" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="linkimage">
                            </div>
                            
                            <button type="submit" class="btn btn-default"  style="background:#d9b38c; margin-right:20px" >Create</button>
                            <button type="reset" class="btn btn-default" style="background:#d9b38c; ">Cancel</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection