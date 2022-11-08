@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main-content-theme">
   <div id="blog">
      <section class="section-parallax section-parallax-breadcrumb bg-top">
         <div class="overlay-main"></div>
         <div class="banner-title-outer">
            <div class="container">
               <div class="banner-title-name">
                  <h1 class="text-white">{{$title_page}}</h1>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                     <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item"><span itemprop="name">{{$title_page}}</span></span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section section-list-blog">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 blog-area">
                  <div class="row news-masonry">
                     <!-- Begin: Nội dung blog -->      
                     @foreach ($blogs as $blog)
                     <div class="masonry-item col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-post blog-grid date-style-1 Leading">
                           <div class="wt-post-media wt-img-effect zoom-slow">
                              <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                              <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" >
                              </a>
                           </div>
                           <div class="wt-post-info p-t30 text-black">
                              <div class="wt-post-title">
                                 <h3 class="post-title">
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                                 </h3>
                              </div>
                              <div class="wt-post-meta ">
                                 <ul>
                                    <li class="post-date">
                                       <strong>{{date('d-m-Y', strtotime($blog->created_at))}}</strong>
                                    </li>
                                 </ul>
                              </div>
                              <div class="wt-post-text desc">
                                 {{languageName($blog->description)}}
                              </div>
                              <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="site-button black"><span>Đọc thêm</span><em></em></a>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <div class="row">
                     <div id="pagination" class="clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           {{$blogs->links()}}
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