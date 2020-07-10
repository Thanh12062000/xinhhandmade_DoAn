@extends('header')
@section('active_desktop')
<li >
		<a href="{{URL::asset('/')}}">Trang chủ</a>
</li>

<li>
	<a href="{{URL::asset('product')}}">Sản phẩm</a>
</li>

<li class="label1" data-label1="hot">
	<a href="shoping-cart.html">Giỏ hàng</a>
</li>

<li class="active-menu">
	<a href="blog.html">Blog</a>
</li>

<li>
	<a href="loginAdmin.html">Quản trị</a>
</li>
@endsection
@extends('master')
@section('headerlink')
<title>Blog</title>
@endsection

@section('content')
  
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="blog.html" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$blog->tieude}}
			</span>
		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="{{URL::asset($linkimage)}}" alt="IMG-BLOG">

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									{{$blog->ngay}}
								</span>

								<span class="stext-109 cl3 txt-center">
                                {{$blog->thang}}
								</span>
							</div>
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> {{$blog->tacgia}}
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>
								<span>
                                {{$blog->ngay}} {{$blog->thang}}
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>
							</span>

							<h4 class="ltext-109 cl2 p-b-28">
                            {{$blog->tieude}}
							</h4>

							<p class="stext-117 cl6 p-b-26">
                            {{$blog->noidung}}
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Tìm kiếm">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Thể loại
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Vòng Tay
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Thiệp
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Len
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Dụng cụ
									</a>
								</li>

							</ul>
						</div>

						

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Hoàn thành
							</h4>

							<ul>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											July 2020
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											June 2020
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											May 2020
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											April  2020
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>
							</ul>
						</div>

						
					</div>
				</div>
				<a href="blog.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10" style="float:right;">
					Đọc Thêm Các bài viết khác
					<i class="fa fa-long-arrow-right m-l-9"></i>
				</a>
			</div>

		</div>
	</section>	
@endsection
