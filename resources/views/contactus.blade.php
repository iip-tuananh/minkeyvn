@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main-content-theme">
	<div  class="layout-pageContact">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
				<span class="text-white">Liên hệ</span>
				</div>
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
					<ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<span itemprop="item"><span itemprop="name">Liên hệ</span></span>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-content-page-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 box-heading-contact">
				<div class="box-map">
					{!!$setting->iframe_map!!}
				</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
				<div class="header-page-contact clearfix">
					<h1>Liên hệ</h1>
				</div>
				<div class="box-info-contact">
					<ul class="list-info">
						<li>
							<p>Địa chỉ chúng tôi</p>
							<p><strong>{{$setting->address1}}</strong></p>
						</li>
						<li>
							<p>Email chúng tôi</p>
							<p><strong>{{$setting->email}}</strong></p>
						</li>
						<li>
							<p>Điện thoại</p>
							<p><strong>{{$setting->phone1}}</strong></p>
						</li>
						<li>
							<p>Thời gian làm việc</p>
							<p><strong>Thứ 2 đến Thứ 6 từ 8h đến 17h30; Thứ 7 từ 8h - 12h00 </strong></p>
						</li>
					</ul>
				</div>
				<div class="box-send-contact">
					<h2>Gửi thắc mắc cho chúng tôi</h2>
					<div id="col-left contactFormWrapper">
						<form accept-charset='UTF-8' action='{{route('postcontact')}}' class='contact-form' method='post'>
							@csrf
							<div class="contact-form">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="input-group">
										<input required type="text" name="name" class="form-control" placeholder="Tên của bạn" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="input-group">
										<input required type="text" name="email" class="form-control" placeholder="Email của bạn" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="input-group">
										<input pattern="[0-9]{10,12}" required type="text" name="phone" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="input-group">
										<textarea name="mess" placeholder="Nội dung"></textarea>
									</div>
								</div>
								<div class="col-xs-12">
									<button class="site-button black" type="submit"><span>Gửi cho chúng tôi</span><em></em></button>
								</div>
							</div>
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</main>
@endsection