@extends('header')
@section('active_desktop')
<li class="active-menu">
		<a href="{{URL::asset('home')}}">Trang chủ</a>
</li>

<li>
	<a href="{{URL::asset('product')}}">Sản phẩm</a>
</li>

<li class="label1" data-label1="hot">
	<a href="shoping-cart.html">Giỏ hàng</a>
</li>

<li>
	<a href="{{URL::asset('blog')}}">Blog</a>
</li>

<li>
	<a href="loginAdmin.html">Quản trị</a>
</li>
@endsection
@extends('master')
@section('headerlink')
<title>Trang chủ ahihi</title>
@endsection

@section('content')


<!-- Slider -->
	<section class="section-slide" style="margin-bottom: 100px;">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				@foreach($slide as $sl)
				
				<div class="item-slick1" style="background-image: url(
					'http://localhost/xinhhandmade/public/{{$sl->SlideLink}}');">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Sản phẩm handmade
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									
									{{$sl->tenslide}}
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Ghé ngay
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>


	



	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Sản phẩm của chúng tôi {{count($sp)}} sản phẩm
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Vòng tay</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">  Thiệp</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Len</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Dụng cụ handmade</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
							@foreach($vt as $s)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{$s->ImageLink}}.jpg" alt="IMG-PRODUCT">
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="chitietsp/{{$s->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													{{$s->tensp}}
												</a>

												<span class="stext-105 cl3">
													{{$s->giakm}}
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">	
							<div class="slick2">
							@foreach($th as $t)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{$t->ImageLink}}.jpg" alt="IMG-PRODUCT">
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="chitietsp/{{$t->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
												{{$t->tensp}}
												</a>

												<span class="stext-105 cl3">
												{{$t->giakm}}
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
							@foreach ($len as $l)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{$l->ImageLink}}.jpg" alt="IMG-PRODUCT">
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="chitietsp/{{$l->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													{{$l->tensp}}
												</a>

												<span class="stext-105 cl3">
													{{$l->giakm}}
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
								
							</div>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="top-rate" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
							@foreach($dc as $d)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{$d->ImageLink}}.jpg" alt="IMG-PRODUCT">
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="chitietsp/{{$d->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													{{$d->tensp}}
												</a>

												<span class="stext-105 cl3">
													{{$d->giakm}}
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Blogs
				</h3>
			</div>

			<div class="row">
				@foreach($blog as $b)
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="chitietblog/{{$b->id}}">
								<img src="{{$b->ImageLink}}" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										Viết bởi
									</span>

									<span class="cl5">
										{{$b->tacgia}}
									</span>
								</span>

								<span>
									<span class="cl4">
										Vào
									</span>

									<span class="cl5">
										{{$b->ngay}}  {{$b->thang}}
									</span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="chitietblog/{{$b->id}}" class="mtext-101 cl2 hov-cl1 trans-04">
									{{$b->tieude}}
								</a>
							</h4>

							<p class="stext-108 cl6">
								{{$b->noidung}}
							</p>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			

			</div>
		</div>
	</section>
@endsection
