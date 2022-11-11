@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main-content-theme">
   <div id="aboutus-page" class="page page-aboutus">
      <section class="section-parallax section-parallax-breadcrumb bg-top">
         <div class="overlay-main"></div>
         <div class="banner-title-outer">
            <div class="container">
               <div class="banner-title-name">
                  <h1 class="text-white">Giới thiệu về chúng tôi</h1>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                     <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item"><span itemprop="name">Giới thiệu </span></span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section section-about-us bg-gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="m-about">
                     <div class="owl-carousel about-us-carousel owl-carousel-customer">
                        <div class="item">
                           <div class="ow-img wt-img-effect zoom-slow">
                              <div class="banner-hover-effect">
                                 <img src="{{$pageContent->image}}" alt="Giới thiệu">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="m-about-containt">
                     <div class="s-title">
                        <span>Giới thiệu</span>
                        <h2>Sức mạnh bảo vệ từ thiên nhiên</h2>
                     </div>
                     <div class="s-content">
                        {!!$pageContent->content!!}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      {{-- <section class="section section-experts">
         <div class="container">
            <div class="section-content">
               <div class="row ">
                  <div class="col-lg-12">
                     <div class="s-title">
                        <h2>Những ưu điểm nổi bật</h2>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="row-flex">
                        <div class="col-md-6 col-sm-6 col-xs-12 bg-repeat">
                           <div class="wt-left-part m-experts">
                              <div class="wt-team-six large-pic">
                                 <div class="wt-team-media wt-thum-bx">
                                    <img src="//theme.hstatic.net/200000408525/1000897806/14/p-about-experts_1.jpg?v=136" alt="Sức mạnh bảo vệ từ thiên nhiên">
                                 </div>
                                 <div class="wt-team-info text-center">
                                    <h5 class="wt-team-title">Sức mạnh bảo vệ từ thiên nhiên</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                           <div class="wt-right-part team-outer">
                              <div class="row">
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="wt-team-six">
                                       <div class="wt-team-media">
                                          <img src="//theme.hstatic.net/200000408525/1000897806/14/p-about-experts_2.jpg?v=136" alt="Tinh chất trà xanh kháng khuẩn">
                                          <div class="overlay-bx"></div>
                                       </div>
                                       <div class="wt-team-info text-center">
                                          <h5 class="wt-team-title">Tinh chất trà xanh kháng khuẩn</h5>
                                          <p>Kháng khuẩn lên tới 99,9%</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="wt-team-six">
                                       <div class="wt-team-media">
                                          <img src="//theme.hstatic.net/200000408525/1000897806/14/p-about-experts_3.jpg?v=136" alt="Siêu mỏng thoáng">
                                          <div class="overlay-bx"></div>
                                       </div>
                                       <div class="wt-team-info text-center">
                                          <h5 class="wt-team-title">Siêu mỏng thoáng</h5>
                                          <p>Độ mỏng ấn tượng chỉ 1,8mm</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="wt-team-six">
                                       <div class="wt-team-media">
                                          <img src="//theme.hstatic.net/200000408525/1000897806/14/p-about-experts_4.jpg?v=136" alt="Miếng cuộn bỉm tiện lợi">
                                          <div class="overlay-bx"></div>
                                       </div>
                                       <div class="wt-team-info text-center">
                                          <h5 class="wt-team-title">Miếng cuộn bỉm tiện lợi</h5>
                                          <p>Giúp mẹ dễ dàng xử lý tã sau khi dùng</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="wt-team-six">
                                       <div class="wt-team-media">
                                          <img src="//theme.hstatic.net/200000408525/1000897806/14/p-about-experts_5.jpg?v=136" alt="Vạch báo đầy thông minh">
                                          <div class="overlay-bx"></div>
                                       </div>
                                       <div class="wt-team-info text-center">
                                          <h5 class="wt-team-title">Vạch báo đầy thông minh</h5>
                                          <p>Báo hiệu thời điểm thay bỉm cho bé</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <section class="section section-stories our-story">
         <div class="container">
            <div class="s-title">
               <h2>Mẹ tin tưởng lựa chọn Minkey</h2>
            </div>
            <div class="s-content">
               <div class="section-content">
                  @foreach ($reviewCus as $item)
                  <div class="row-flex our-story-row">
                     <div class="col-md-6 col-sm-6 col-xs-12 col-l">
                        <div class="owl-carousel">
                           <div class="wt-media our-story-pic">
                              <img src="{{$item->avatar}}" alt="{{languageName($item->name)}}">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-12 col-r">
                        <div class="wt-box our-story-detail">
                           <span></span>
                           <h3>{{languageName($item->name)}} ({{languageName($item->position)}})</h3>
                           {!!languageName($item->content)!!}
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
@endsection