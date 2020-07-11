@extends('header')
@section('active_desktop')
  <li >
      <a href="{{URL::asset('home')}}">Trang chủ</a>
  </li>
  <li >
    <a href="product">Sản phẩm</a>
  </li>

  <li class="active-menu" class="label1" data-label1="hot">
    <a href="shoping-cart.html">Giỏ hàng</a>
  </li>

  <li>
    <a href="blog.html">Blog</a>
  </li>

  <li>
    <a href="loginAdmin.html">Quản trị</a>
  </li>
@endsection
@extends('master')
@section('headerlink')
<title>Sản phẩm</title>
@endsection

@section('content')
   	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Trang chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Thanh toán:
			</span>
		</div>
	</div>
		
    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Nhập thông tin
						</h4>
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
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
                                <form action="dathang" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input class="form-control" name="name"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Sdt</label>
                                        <input class="form-control" name="sdt" />
                                    </div>
                                    <div class="form-group">
                                        <label>Id(nếu có)</label>
                                        <input class="form-control" name="id"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input class="form-control" name="diachi" />
                                    </div>
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <input class="form-control" name="ghichu"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Hình thức thanh toán</label>
                                        <select class="form-control" name="hinhthuc">
                                            <option value="chuyển khoản">Chuyển khoản</option>
                                            <option value="Tiền mặt">Tiền mặt</option>
                                        </select>
                                    </div>
                                <form>
                         </div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Tổng tiền:
								</span>
							</div>
                            @if(Session::has('cart'))
							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                {{number_format(Session('cart')->totalPrice)}} $
								</span>
                            </div>
                            @endif
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							<div style="color: cornsilk; font-weight: bold; ">Xong</div>
						</button>
					</div>
                </div>
                
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
            
				
			</div>
		</div>
	</form>
		
@endsection