@extends('admin')
@section('titleadmin')
<title>Quản trị_Thống kê</title>
@endsection

@section('contentadmin')
        

     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê 
                            <small>Ngày</small>
                        </h1>
                        <div>
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
                    </div>
                    </div>
                    
                    <form action="admin/thongke/ngay" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Ngày</label>
                            <input class="form-control" name="ngay" placeholder="Nhập ngày" />
                        </div>
                        <div class="form-group">
                            <label>Tháng</label>
                            <input class="form-control" name="thang" placeholder="Nhập tháng" />
                        </div>
                        <div class="form-group">
                            <label>Năm</label>
                            <input class="form-control" name="nam" placeholder="Nhập Năm" />
                        </div>
                        <button type="submit" class="btn btn-default"  style="background:#d9b38c; margin-right:20px" >Xem thống kê</button>
                        <button type="reset" class="btn btn-default" style="background:#d9b38c; ">Cancel</button>
                    <form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection