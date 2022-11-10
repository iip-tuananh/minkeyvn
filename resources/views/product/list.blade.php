@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
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
   <div id="collection" class="collection-page">
      <section class="section-parallax bg-top" style="background-image: url({{url('frontend/images/collection-banner.jpg')}})">
         <div class="overlay-main"></div>
         <div class="banner-title-outer">
            <div class="container">
               <div class="banner-title-name">
                  <h1 class="text-white">{{$title}}</h1>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                     <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('allProduct')}}" target="_self"  itemprop="item">
                           <span itemprop="name">Sản phẩm</span>
                           </a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item" ><span itemprop="name">{{$title}}</span></span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="collection-body" class="">
         <section class="flat-row image-box">
            <div class="container">
               <div class="cbr-gallery row wrapper-project-1">
                  @foreach ($list as $product)
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
                  @endforeach
                  {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-quan-size-xxl" title="Kitin Natural tã quần size XXL" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xxl_83a1f52b59344011987f018037d0156c_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xxl_83a1f52b59344011987f018037d0156c_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xxl_83a1f52b59344011987f018037d0156c_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/quan_xxl_83a1f52b59344011987f018037d0156c_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã quần size XXL "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-quan-size-xxl" title="Kitin Natural tã quần size XXL">Kitin Natural tã quần size XXL</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-quan-size-xxl">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937674" id="modal_buy_now_1035937674" class="btn_buy_now" data-overlay="overlay-1035937674" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937674" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937674").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-quan-size-xl" title="Kitin Natural tã quần size XL" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xl_01a241ca969f4c7bafa4f830a5ed87d8_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xl_01a241ca969f4c7bafa4f830a5ed87d8_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/quan_xl_01a241ca969f4c7bafa4f830a5ed87d8_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/quan_xl_01a241ca969f4c7bafa4f830a5ed87d8_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã quần size XL "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-quan-size-xl" title="Kitin Natural tã quần size XL">Kitin Natural tã quần size XL</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-quan-size-xl">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937662" id="modal_buy_now_1035937662" class="btn_buy_now" data-overlay="overlay-1035937662" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937662" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937662").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-quan-size-l" title="Kitin Natural tã quần size L" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/quan_l_c9a64efcb56948f99abc939c49951ea5_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/quan_l_c9a64efcb56948f99abc939c49951ea5_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/quan_l_c9a64efcb56948f99abc939c49951ea5_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/quan_l_c9a64efcb56948f99abc939c49951ea5_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã quần size L "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-quan-size-l" title="Kitin Natural tã quần size L">Kitin Natural tã quần size L</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-quan-size-l">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937638" id="modal_buy_now_1035937638" class="btn_buy_now" data-overlay="overlay-1035937638" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937638" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937638").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-quan-size-m" title="Kitin Natural tã quần size M" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/quan_m_5965a6d5ee214e68aa9350fdbf211b6d_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/quan_m_5965a6d5ee214e68aa9350fdbf211b6d_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/quan_m_5965a6d5ee214e68aa9350fdbf211b6d_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/quan_m_5965a6d5ee214e68aa9350fdbf211b6d_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã quần size M "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-quan-size-m" title="Kitin Natural tã quần size M">Kitin Natural tã quần size M</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-quan-size-m">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937635" id="modal_buy_now_1035937635" class="btn_buy_now" data-overlay="overlay-1035937635" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937635" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937635").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-dan-size-l" title="Kitin Natural tã dán size L" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/dan_l_592697cce2b54cc5a156a39073ba10a4_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/dan_l_592697cce2b54cc5a156a39073ba10a4_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/dan_l_592697cce2b54cc5a156a39073ba10a4_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/dan_l_592697cce2b54cc5a156a39073ba10a4_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã dán size L "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-dan-size-l" title="Kitin Natural tã dán size L">Kitin Natural tã dán size L</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-dan-size-l">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937628" id="modal_buy_now_1035937628" class="btn_buy_now" data-overlay="overlay-1035937628" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937628" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937628").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-dan-size-m" title="Kitin Natural tã dán size M" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/dan_m_16ddf11412ec4f9d8aad519f8dec2a7a_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/dan_m_16ddf11412ec4f9d8aad519f8dec2a7a_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/dan_m_16ddf11412ec4f9d8aad519f8dec2a7a_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/dan_m_16ddf11412ec4f9d8aad519f8dec2a7a_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã dán size M "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-dan-size-m" title="Kitin Natural tã dán size M">Kitin Natural tã dán size M</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-dan-size-m">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937625" id="modal_buy_now_1035937625" class="btn_buy_now" data-overlay="overlay-1035937625" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937625" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937625").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-ta-dan-size-s" title="Kitin Natural tã dán size S" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/dan_s_358d86cf2a3c41668a6a58215985450b_medium.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/dan_s_358d86cf2a3c41668a6a58215985450b_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/dan_s_358d86cf2a3c41668a6a58215985450b_large.png"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/dan_s_358d86cf2a3c41668a6a58215985450b_large.png"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã dán size S "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-ta-dan-size-s" title="Kitin Natural tã dán size S">Kitin Natural tã dán size S</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-ta-dan-size-s">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035937568" id="modal_buy_now_1035937568" class="btn_buy_now" data-overlay="overlay-1035937568" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035937568" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035937568").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                     <div class="gallery-box fade-box product-resize">
                        <div class="overlay">
                           <a href="/products/kitin-natural-newborn" title="Kitin Natural tã dán Newborn" class="image-resize">
                              <picture>
                                 <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000408525/product/dan_nb_4818e1a095de49c1b949f917b79dd1bf_medium.jpg"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000408525/product/dan_nb_4818e1a095de49c1b949f917b79dd1bf_large.jpg"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000408525/product/dan_nb_4818e1a095de49c1b949f917b79dd1bf_large.jpg"
                                    srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
                                 <img data-src="//product.hstatic.net/200000408525/product/dan_nb_4818e1a095de49c1b949f917b79dd1bf_large.jpg"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    class="lazyload" alt=" Kitin Natural tã dán Newborn "/>
                              </picture>
                           </a>
                           <div class="hover-effect"></div>
                           <div class="text-wrap-title">
                              <h3 class="pro-title"><a href="/products/kitin-natural-newborn" title="Kitin Natural tã dán Newborn">Kitin Natural tã dán Newborn</a></h3>
                              <div class="text-wrap-price">
                                 <p class="pro-price">
                                    <span>165,000₫</span>
                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                    225,000₫
                                    </del>
                                    </span>
                                 </p>
                              </div>
                              <!--div class="text-wrap-link">
                                 <a class="site-button black" href="/products/kitin-natural-newborn">
                                 <span>Xem chi tiết</span><em></em>
                                 </a>
                                 </div-->
                              <!-- Button trigger modal -->
                              <div data-toggle="modal" data-target="#modal-buy-1035826193" id="modal_buy_now_1035826193" class="btn_buy_now" data-overlay="overlay-1035826193" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                                 <span>Mua ngay</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal-overlay overlay-product.id"></div>
                     <div class="modal fade modal-buy" id="modal-buy-1035826193" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <ul>
                                 </ul>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary close" data-dismiss="modal">Đóng</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--modal buy now-->
                     <script>
                        $(function(){
                           $("#modal_buy_now_1035826193").click(function(){
                              var target = $(this).data("target");
                              var overlay = $(this).data("overlay");
                              var fb = $(this).data("channel1");
                              var link_fb = $(this).data("link1");
                              var shopee = $(this).data("channel2");
                              var link_shopee = $(this).data("link2");
                              var tiki = $(this).data("channel3");
                              var link_tiki = $(this).data("link3");
                              var lazada = $(this).data("channel4");
                              var link_lazada = $(this).data("link4");
                              var adayroi = $(this).data("channel5");
                              var link_adayroi = $(this).data("link5");
                              var sendo = $(this).data("channel6");
                              var link_sendo = $(this).data("link6");
                              
                              //alert(target);
                              
                              if(fb != '' && fb != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_fb+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/facebook.png?v=136"></a></li>');
                              }
                              if(shopee != '' && shopee != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_shopee+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/shopee.png?v=136"></a></li>');
                              }
                              if(tiki != '' && tiki != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_tiki+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/tiki.png?v=136"></a></li>');
                              }
                              if(lazada != '' && lazada != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_lazada+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/lazada.png?v=136"></a></li>');
                              }
                              if(adayroi != '' && adayroi != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_adayroi+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/adayroi.png?v=136"></a></li>');
                              }
                              if(sendo != '' && sendo != undefined){
                                 $(target+" .modal-body ul").append('<li><a href="'+link_sendo+'" class="" target="_blank" rel="noopener"><img src="//theme.hstatic.net/200000408525/1000897806/14/sendo.png?v=136"></a></li>');
                              }
                              //debugger;
                              $("."+overlay).attr("style","display: block;");
                              $(target +" .close").click(function(){
                                 $("."+overlay).attr("style","display: none;");
                                 $(target+" .modal-body ul").html('');
                              })
                           })
                           
                           
                        })
                     </script>
                  </div> --}}
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                     <div class="row sortpagibar pagi text-center">
                        {{$list->links()}}
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</main>
@endsection