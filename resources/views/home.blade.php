@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<main class="main-content-theme main-index	">
   <section class="section section-slider">
      <div id="home-slider">
            <div class="slider-owl owl-carousel owl-theme owl-carousel-customer">
               @foreach ($banners as $banner)
               <div class="item fade-box">
                  <a href="{{$banner->link}}" title="">
                     <picture>
                           <source srcset="{{$banner->image}}" media="(max-width: 767px)" />
                           <source srcset="{{$banner->image}}" media="(min-width: 768px)"/>
                           <img src="{{$banner->image}}" alt=""/>
                     </picture>
                  </a>
                  <div class="item-cap lazyload " >
                     <div class="item-cap-content" data-animation-in="slideInUp" data-animation-out="animate-out">
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
      </div>
   </section>
   {{-- <section class="section section-intro bg-gray">
      <div class="container">
            <div class="wrapper-home-intro">
            <div class="row-flex">
               <div class="col-md-4 col-sm-5 col-sm-12">
                  <div class="s-title">
                        <span>Giới thiệu</span>						
                        <h2>
                        Kitin Natural - Sức mạnh bảo vệ từ thiên nhiên 
                        </h2>
                  </div>
               </div>
               <div class="col-md-8 col-sm-7 col-sm-12">
                  <div class="s-content">
                        <p style="text-align: justify;"><span style="color:#000000;">Người tiêu dùng Việt ngày càng&nbsp;có xu hướng lựa chọn và sử dụng các sản phẩm mang thương hiệu Việt Nam. Từ ưu tiên đến tự hào, ngày nay&nbsp;người tiêu dùng có nhiều hơn sự tin tưởng ở chất lượng cũng như nguồn gốc của sản phẩm nội địa.&nbsp;</span></p>
                        <p style="text-align: justify;"><span style="color:#000000;">Thấu hiểu nhu cầu thị trường cùng với khao khát đem đến sản phẩm phù hợp với trẻ em Việt Nam, Công ty Cổ phần Thương mại &amp; Đầu tư Babies với&nbsp;đội ngũ chuyên gia nghiên cứu với nhiều năm kinh nghiệm trong ngành hàng mẹ và bé đã đặt tay nghiên cứu và cho ra mắt thị trường dòng tã bỉm thiên nhiên thương hiệu Việt - Kitin Natural.</span></p>
                        <p style="text-align: justify;"><span style="color:#000000;">“Kitin” bắt nguồn từ tiếng Hy Lạp, mang ý nghĩa là sự bảo vệ, bao bọc. “Kitin” cũng chính là lớp áo giáp bảo vệ không thể thiếu của người Hy Lạp cổ xưa. Xuất phát từ cảm hứng chủ đạo đó, “Kitin Natural” ra đời mang ý nghĩa cho sức mạnh bảo vệ từ thiên nhiên, cho làn da trẻ nhỏ được bảo vệ một cách thân thiện và êm dịu nhất.<br><br>Với thông điệp “Sức mạnh bảo vệ từ thiên nhiên”, Kitin Natural muốn gửi gắm lời cam kết về một thương hiệu tã bỉm thiên nhiên an toàn, lành tính cho làn da trẻ nhỏ, bảo vệ con từ những năm tháng đầu đời.<br><br>Kitin Natural - Tã bỉm thiên nhiên bảo vệ con từ lúc lọt lòng</span></p>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section> --}}
   <section class="section section-about bg-gray">
      <div class="container">
            <div class="wrapper-home-about">
            <div class="row-flex">
               <div class="col-xs-12 col-sm-5 col-md-4 col-left">
                  <div class="s-banner fade-box">
                        <img class="lazyload" data-src="{{$aboutUs->image}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="{{$setting->company}}">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-7 col-md-8 col-right">
                  <div class="s-title">
                     <span>Giới thiệu</span>						
                     <h2>
                     {{$setting->company}} 
                     </h2>
                  </div>
                  <div class="s-content">
                        {!!$aboutUs->description!!}
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <a class="site-button black" href="{{route('aboutUs')}}">
                        <span>Xem chi tiết</span><em></em>
                        </a>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
   <section class="section section-service">
      <div class="container">
            <div class="wrapper-home-service">
            <div class="s-title">
               <h2>Minky có gì nổi bật?</h2>
            </div>
            <div class="row s-content list-service-home">
               <div class="col-md-3 col-sm-3 col-xs-12 item--service">
                  <div class="box-service zoom-slow">
                        <div class="img-service fade-box">
                        <a href="" aria-label="Siêu kháng khuẩn" class="banner-hover-effect">
                        <img class="lazyload" data-src="{{url('frontend/images/h-service_item_1.jpg')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Siêu kháng khuẩn"/>
                        </a>
                        </div>
                        <div class="desc-service">
                        <h3><a href="">Siêu kháng khuẩn</a></h3>
                        <p></p>
                        </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12 item--service">
                  <div class="box-service zoom-slow">
                        <div class="img-service fade-box">
                        <a href="" aria-label="Siêu thấm hút" class="banner-hover-effect">
                        <img class="lazyload" data-src="{{url('frontend/images/h-service_item_2.jpg')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Siêu thấm hút"/>
                        </a>
                        </div>
                        <div class="desc-service">
                        <h3><a href="">Siêu thấm hút</a></h3>
                        <p></p>
                        </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12 item--service">
                  <div class="box-service zoom-slow">
                        <div class="img-service fade-box">
                        <a href="" aria-label="Siêu thông thoáng" class="banner-hover-effect">
                        <img class="lazyload" data-src="{{url('frontend/images/h-service_item_3.jpg')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Siêu thông thoáng"/>
                        </a>
                        </div>
                        <div class="desc-service">
                        <h3><a href="">Siêu thông thoáng</a></h3>
                        <p></p>
                        </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12 item--service">
                  <div class="box-service zoom-slow">
                        <div class="img-service fade-box">
                        <a href="" aria-label="Vạch báo đầy thông minh" class="banner-hover-effect">
                        <img class="lazyload" data-src="{{url('frontend/images/h-service_item_4.jpg')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Vạch báo đầy thông minh"/>
                        </a>
                        </div>
                        <div class="desc-service">
                        <h3><a href="">Vạch báo đầy thông minh</a></h3>
                        <p></p>
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
   
   <section class="section section-parallax prl-one lazyload">
      <div class="container">
            <div class="row-flex">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 some-facts-counter ">
               <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="icon-box-wraper p-a10 text-white m-b30">
                        <span class="counter" data-counter="5000">0</span>						
                        <div class="ic-separator"></div>
                        <span class="text">Khách hàng hài lòng</span>					
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="icon-box-wraper p-a10 text-white m-b30">
                        <span class="counter" data-counter="50">0</span>						
                        <div class="ic-separator"></div>
                        <span class="text">NPP trên toàn quốc</span>					
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="icon-box-wraper p-a10 text-white m-b30">
                        <span class="counter" data-counter="500">0</span>						
                        <div class="ic-separator"></div>
                        <span class="text">Điểm bán</span>					
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="some-facts">
                  <div class="s-title text-white">
                        <span>Điểm qua</span>
                        <h2 class="text-white">Những con số ấn tượng về Minky</h2>
                        <p>Chính thức ra mắt thị trường vào tháng 10/2021, tính đến nay Minky đã có hơn 5000 khách hàng trải nghiệm sản phẩm, mở rộng hệ thống kinh doanh với hơn 50 Nhà phân phối và hơn 500 điểm bán trên toàn quốc. </p>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
   <section class="section section-project">
      <div class="container">
            <div class="s-title">
            <h2>
               <a href="{{route('allProduct')}}">
               Sản phẩm nổi bật
               </a>
            </h2>
            </div>
            <div class="s-content">
            <div class="cbr-gallery row wrapper-project-1">
               @foreach ($homeProduct as $product)
               <div class="col-md-20 col-sm-6 col-xs-6 pd-0 col-pj">
                  @include('layouts.product.item', ['product'=>$product])
               </div>
               @endforeach
            </div>
            </div>
      </div>
   </section>
   <section class="section section-blog lazyload">
      <div class="container">
            <div class="s-title">
            <h2 class="hTitle">
               <a href="{{route('allListBlog')}}">
               Bài viết mới nhất
               </a>
            </h2>
            </div>
            <div class="s-content">
            <div class="row">
               @foreach ($homeBlog as $blog)
               <div class="col-md-6 col-sm-6 col-xs-6 col-blog">
                  <div class="overlay-wraper latest-blog-dark-outer">
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="fade-box">
                        <picture>
                           <source data-srcset="{{$blog->image}}" media="(max-width: 480px)" />
                           <source data-srcset="{{$blog->image}}" media="(min-width: 481px) and (max-width: 767px)" />
                           <source data-srcset="{{$blog->image}}" media="(min-width: 768px)"/>
                           <img data-src="{{$blog->image}}" class="lazyload" alt="{{languageName($blog->title)}}"/>
                        </picture>
                        </a>
                        <div class="latest-blog-dark">
                        <h3><a href="/blogs/hieu-hon-ve-kitin-natural/bim-kitin-natural-mong-den-co-nao">{{languageName($blog->title)}}</a></h3>
                        <div class="v-date text-white"><span>{{date('d/m/Y', strtotime($blog->created_at))}}</span></div>
                        </div>
                  </div>
               </div>
               @endforeach
            </div>
            </div>
      </div>
   </section>
   {{-- <section class="section section-video bg-gray">
      <div class="container">
            <div class="row-flex">
            <div class="col-md-5 col-sm-5 col-xs-12">
               <div class="fancybox-video fade-box">
                  <a data-fancybox="" href="https://www.youtube.com/watch?v=UjoJcY5hVSg">
                        <img class="lazyload" data-src="//theme.hstatic.net/200000408525/1000897806/14/h-video_banner.jpg?v=136" alt="">
                        <div class="video-btn">
                        <svg height="108" width="108" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke-opacity="0.1" fill="#FFFFFF" stroke-width="5" cx="54" cy="54" r="48" class="circleanim-svg__circle-back"></circle>
                           <circle stroke-width="5" fill="#FFFFFF" cx="54" cy="54" r="48" class="circleanim-svg__circle-front" transform="rotate(50 54 54) "></circle>
                           <path d="M62.1556183,56.1947505 L52,62.859375 C50.6192881,63.7654672 49.5,63.1544098 49.5,61.491212 L49.5,46.508788 C49.5,44.8470803 50.6250889,44.2383396 52,45.140625 L62.1556183,51.8052495 C64.0026693,53.0173767 63.9947588,54.9878145 62.1556183,56.1947505 Z" fill="#FFFFFF"></path>
                        </svg>
                        </div>
                  </a>
               </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 col-right">
               <div class="s-title">
                  <h2>
                        Tiết kiệm, tiện lợi và an toàn 
                  </h2>
               </div>
               <div class="s-content">
               </div>
            </div>
            </div>
      </div>
   </section> --}}
   <section class="section section-parallax prl-two lazyload">
      <div class="container">
            <div class="s-title text-center">
            <h2 class="text-white">Hãy liên hệ với Minky để nhận tư vấn miễn phí nhé! </h2>
            </div>
      </div>
   </section>
   <section class="section section-policy">
      <div class="container">
            <div class="flexMargin">
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="box-policy text-center">
                  <div class="icon-policy fade-box">
                        <img data-src="{{url('frontend/images/h-policy_1.png')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="lazyload" alt="Hỗ trợ ">
                  </div>
                  <div class="desc-policy">
                        <h3>Hỗ trợ </h3>
                        <p>Minky luôn sẵn sàng hỗ trợ trực tuyến 24/7. Ba mẹ hãy liên hệ nếu cần giải đáp thắc mắc nha! </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="box-policy text-center">
                  <div class="icon-policy fade-box">
                        <img data-src="{{url('frontend/images/h-policy_2.png')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="lazyload" alt="Tư vấn mua hàng ">
                  </div>
                  <div class="desc-policy">
                        <h3>Tư vấn mua hàng </h3>
                        <p>Liên hệ hotline {{$setting->phone1}} nếu ba mẹ muốn mua hoặc cần tư vấn về sản phẩm </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="box-policy text-center">
                  <div class="icon-policy fade-box">
                        <img data-src="{{url('frontend/images/h-policy_3.png')}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="lazyload" alt="Tư vấn Kinh doanh">
                  </div>
                  <div class="desc-policy">
                        <h3>Tư vấn Kinh doanh</h3>
                        <p>Liên hệ hotline {{$setting->phone1}} nếu bạn muốn trở thành đối tác kinh doanh - NPP độc quyền </p>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
</main>
@endsection