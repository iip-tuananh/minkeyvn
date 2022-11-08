@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main-content-theme">
	<div id="article">
	<section class="section-parallax section-parallax-breadcrumb bg-top">
		<div class="overlay-main"></div>
		<div class="banner-title-outer">
			<div class="container">
				<div class="banner-title-name">
				<span class="text-white">{{languageName($blog_detail->cate->name)}}</span>
				</div>
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5 blog-breadcrumb ">
					<ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a href="/blogs/su-kien-noi-bat" itemprop="item">
							<span itemprop="name">{{languageName($blog_detail->cate->name)}}</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
						<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<span itemprop="item"><span itemprop="name">{{languageName($blog_detail->title)}}</span></span>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-content-article">
		<div class="container">
			<div class="row wrapper-row pd-page">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 article-area">
				<div class="content-page">
					<div class="article-content">
						<div class="box-article-heading clearfix">
							{{-- <div class="background-img">
							<img src="//file.hstatic.net/200000408525/article/z3686378002338_d81f5d78a4bf3900459c0cbf4751e8e9_f56885b8e1b4467d965a79b7570c3f1d_1024x1024.jpg" alt="Kitin Natural chính thức gia nhập gian hàng Shopee Mall" >
							</div> --}}
							<h1 class="sb-title-article">{{languageName($blog_detail->title)}}</h1>
							<ul class="article-info-more">
							<li> Người viết: Minkey lúc <time pubdate >{{date('d-m-Y', strtotime($blog_detail->created_at))}}</time></li>
							<li><i class="fa fa-file-text-o"></i><a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}"> {{languageName($blog_detail->cate->name)}}</a> </li>
							</ul>
						</div>
						<div class="article-pages">
							{!!languageName($blog_detail->content)!!}
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-area">
					<div class="sidebar-blog">
					<div class="news-latest clearfix">
						<div class="sidebarblog-title title_block">
							<h2>
								Bài viết mới nhất
								<span class="fa fa-angle-down"></span>
							</h2>
						</div>
						<div class="list-news-latest layered">
							@foreach ($news as $item)
							<div class="item-article clearfix">
								<div class="number"></div>
								<div class="post-content">
								<span class="cate-blog"><a href="{{route('listCateBlog', ['slug'=>$item->category])}}">{{languageName($item->cate->name)}}</a></span>
								<h3><a href="{{route('detailBlog', ['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="menu-blog">
						<div class="group-menu">
							<div class="sidebarblog-title title_block">
								<h2>Hỗ trợ khách hàng<span class="fa fa-angle-down"></span></h2>
							</div>
							<div class="layered layered-category">
								<div class="layered-content">
								<ul class="tree-menu">
									@foreach ($helpCustomer as $item)
									<li class="">
										<a href="{{route('helpCus', ['slug'=>$item->slug])}}" title="{{$item->title}}" target="_self">
										{{$item->title}}
										</a>
									</li>
									@endforeach
								</ul>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</main>
@endsection