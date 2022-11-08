@extends('layouts.main.master')
@section('title')
{{$helpCus->title}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main-content-theme">
    <div class="pageAbout-us page-layout">
    <section class="section-parallax section-parallax-breadcrumb bg-top">
        <div class="overlay-main"></div>
        <div class="banner-title-outer">
            <div class="container">
                <div class="banner-title-name">
                <span class="text-white">{{$helpCus->title}}</span>
                </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="item"><span itemprop="name">{{$helpCus->title}}</span></span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-content-page">
        <div class="container">
            <div class="row wrapper-row pd-page">
                <div class="col-md-9 col-sm-12 col-xs-12 col-md-push-3">
                <div class="page-wrapper">
                    <div class="heading-page">
                        <h1>{{$helpCus->title}}</h1>
                    </div>
                    <div class="wrapbox-content-page">
                        <div class="content-page ">
                            {!!$helpCus->content!!}
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 col-md-pull-9">
                <div class="sidebar-page">
                    <div class="group-menu">
                        <div class="page_menu_title title_block">
                            <h2>Danh mục trang<span class="fa fa-angle-down"></span></h2>
                        </div>
                        <div class="layered layered-category">
                            <div class="layered-content">
                            <ul class="tree-menu">
                                <li class="">
                                    <a href="{{route('home')}}" title="Trang chủ" target="_self">
                                    Trang chủ
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{route('aboutUs')}}" title="Giới thiệu" target="_self">
                                    Giới thiệu
                                    </a>
                                </li>
                                <li class=" has-child level0 lv ">
                                    <a class="tree-menu-link icon-subnav" href="{{route('allProduct')}}" title="Sản phẩm" target="_self">
                                    <span class="">Sản phẩm</span>
                                    <span class="icon-control icon-plus-submenu"></span>
                                    </a>
                                    <ul class="tree-menu-sub">
                                        @foreach ($categoryhome as $cate)
                                        <li>
                                        <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                
                                <li class=" has-child level0 lv ">
                                    <a class="tree-menu-link icon-subnav" href="{{route('allListBlog')}}" title="Cẩm nang " target="_self">
                                    <span class="">Cẩm nang </span>
                                    <span class="icon-control icon-plus-submenu"></span>
                                    </a>
                                    <ul class="tree-menu-sub">
                                        @foreach ($blogCate as $cate)
                                        <li>
                                        <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('lienHe')}}" title="Liên hệ" target="_self">
                                    Liên hệ
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    @if (count($bannerAds) > 0)
                    @foreach ($bannerAds as $item)
                    <div class="box_image visible-lg visible-md">
                        <div class="banner">
                            <a href="" class="banner-hover-effect" aria-label="">
                            <img src="{{$item->image}}" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>
@endsection