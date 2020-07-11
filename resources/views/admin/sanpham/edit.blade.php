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
                        <h1 class="page-header">Product
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
                    <form action="admin/sanpham/edit/{{$sp->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" value="{{$sp->tensp}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá gốc</label>
                                <input class="form-control" name="giagoc" value="{{$sp->giagoc}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="giakm" value="{{$sp->giakm}}"/>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="loai">
                                    <option value="1">Vòng tay</option>
                                    <option value="2">Thiệp</option>
                                    <option value="3">Len</option>
                                    <option value="4">Dụng cụ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lượt view</label>
                                <input class="form-control" name="view" value="{{$sp->luotview}}"/>
                            </div>
                            <div class="form-group">
                                <label>Màu sắc</label>
                                <input class="form-control" name="mau" value="{{$sp->mausac}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="mota" value="{{$sp->mota}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="linkimage" value="{{$sp->ImageLink}}">
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