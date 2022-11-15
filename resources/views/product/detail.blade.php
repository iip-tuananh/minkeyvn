@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$imgColor = json_decode($product->size);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
$discount = $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
@endsection
@section('js')
<script src='{{asset('frontend/js/slick-slide.min.js')}}' type='text/javascript'></script>
@endsection
@section('content')
<main class="main-content-theme">
   <div id="product" class="productDetail-page">
      <section class="section-parallax section-parallax-breadcrumb bg-top">
         <div class="overlay-main"></div>
         <div class="banner-title-outer">
            <div class="container">
               <div class="banner-title-name">
                  <span class="text-white">Sản phẩm</span>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                     <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a href="{{route('allProduct')}}" target="_self" itemprop="item">
                           <span itemprop="name">Tất cả sản phẩm</span>
                           </a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item" >
                           <span itemprop="name">{{languageName($product->name)}}</span>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="product-detail-wrapper">
         <div class="container">
            <div class="row product-detail-main productDetail_style_03">
               <div class="col-md-6 col-sm-12 col-xs-12 pull-right sticky-product-detail">
                  <div class="product-gallery">
                     <div class="productGallery_thumbs hidden-xs">
                        <div id="slidePrductThumb" class="slide_thumb_product">
                           @foreach ($imgs as $img)
                           <div class="product-gallery_thumb product_thumb">
                              <a href="javascript:void(0);" class="product_thumb_placeholder">
                              <img alt=" {{languageName($product->name)}}" 
                                 src="{{$img}}" >
                              </a>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="productGallery_image product-image-detail box__product-gallery">
                        <div id="sliderproduct3" class="site-box-content slide_product">
                           @foreach ($imgs as $img)
                           <div class="product-gallery-item gallery-item text-center" data-image="{{$img}}">
                              <a data-fancybox="gallery" href="{{$img}}">
                                 <picture>
                                    <source media="(max-width: 480px)" srcset="{{$img}}">
                                    <img class="product-image-feature" src="{{$img}}" alt=" {{languageName($product->name)}} ">
                                 </picture>
                              </a>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
                  <div class="product-title">
                     <h1>{{languageName($product->name)}}</h1>
                     <span class="pro-soldold"></span>
                  </div>
                  <div class="product-options">
                     <div class="product-price" id="price-preview">
                        @if ($product->price > 0 && $product->discount > 0)
                        <span class="pro-sale">-{{$product->discount}}% </span>
                        <span class="pro-price">{{number_format($priceDiscount)}}₫</span>
                        <del>{{number_format($product->price)}}₫</del>
                        @elseif($product->price > 0 && $product->discount == 0 )
                        <span class="pro-price">{{number_format($product->price)}}₫</span>
                        @else
                        <span class="pro-price">Liên Hệ</span>
                        @endif
                     </div>
                  </div>
                  <!-- Button trigger modal -->
                  <div data-toggle="modal" data-target="#modal-buy-1035937680" id="modal_buy_now_1035937680" class="btn_buy_now_pro" data-overlay="overlay-1035937680" data-channel1="facebook" data-link1="https://www.facebook.com/tabimkitin" data-channel2="shopee" data-link2="https://shp.ee/unrpznt"    >
                     <span>Mua ngay</span>
                  </div>
                  <div class="product-description">
                     <h2> Mô tả sản phẩm</h2>
                     <div class="description-content expandable-toggle opened">
                        <div class="description-productdetail">
                           {!!languageName($product->content)!!}
                        </div>
                        <button class="expandable-content_toggle js_expandable_content btn-viewmore">
                        <span class="expandable-content_toggle-icon"></span>
                        <span class="expandable-content_toggle-text">Xem thêm nội dung</span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            @if (count($productlq) > 1)
            <div class="related-projects">
               <div class="s-title">
                  <h2>Sản phẩm liên quan</h2>
               </div>
               <div class="s-content wrapper-project-1 row cbr-gallery">
                  @foreach ($productlq as $pro)
                     @if ($product->id != $pro->id)
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-12 col-pj">
                        @include('layouts.product.item', ['product'=>$pro])
                     </div>
                     @endif
                  @endforeach
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
   <div id="modal-contact" class="modal fade modal-contactform-pr" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="btn close" data-dismiss="modal">×</button>
               <h4 class="modal-title">Contact Info</h4>
            </div>
            <div class="modal-body content_product_form content_product_form-contact">
               <div class="contact_form_pr">
                  <form accept-charset='UTF-8' action='/contact' class='contact-form' method='post'>
                     <input name='form_type' type='hidden' value='contact'>
                     <input name='utf8' type='hidden' value='✓'>
                     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                           <div class="input-group">
                              <label>Name <span class="required">*</span></label>
                              <input required="required" type="text" name="contact[name]" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                           </div>
                           <div class="input-group">
                              <label>Email <span class="required">*</span></label>
                              <input required="required" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="contact[email]" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                           </div>
                           <div class="input-group">
                              <label>Phone <span class="required">*</span></label>
                              <input pattern="[0-9]{10,12}" required="required" type="text" name="contact[phone]" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
                           </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                           <div class="input-group">
                              <label>Body</label>
                              <textarea class="product-body-val" rows="4" cols="50" name="content" placeholder="Nội dung" value=""></textarea>
                              <input class="detailPr" name="contact[body]" type="hidden" value="Tên dự án: Kitin Natural tã quần size XXXL">
                           </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 text-center">
                           <div class="alert alert-success success-form-pr-contact hidden">
                              <p>Thank you for contacting us!!</p>
                           </div>
                           <button type="submit" class="site-button black btn-submit-contact-pr">Send</button>
                        </div>
                     </div>
                     <input id='73f30ee233ac4858a3cd13163f0fd1b8' name='g-recaptcha-response' type='hidden'>
                     <noscript src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript>
                     <noscript>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('73f30ee233ac4858a3cd13163f0fd1b8').value = token;});});</noscript>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="modal-contact-checkout" class="modal fade modal-contactform-pr" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="btn close" data-dismiss="modal">×</button>
               <h4 class="modal-title">Contact Info</h4>
            </div>
            <div class="modal-body content_product_form">
               <div id="form-contact" class="contact_form_pr">
                  <form class="contact--form" id="form_product">
                     <input type="hidden" name="id" value="1078891134" />
                     <input type="hidden" name="quantity" value="1" />
                     <div class="pr-contact-form">
                        <div class="row">
                           <div class="col-sm-6 col-xs-12">
                              <div class="input-group">
                                 <label>Name <span class="required">*</span></label>
                                 <input required id="pr_contact_name" required="required" type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                              </div>
                              <div class="input-group">
                                 <label>Email <span class="required">*</span></label>
                                 <input required id="pr_contact_email" required="required" type="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                              </div>
                              <div class="input-group">
                                 <label>Phone <span class="required">*</span></label>
                                 <input required id="pr_contact_phone" pattern="[0-9]{10,15}" required="required" type="text" name="phone" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
                              </div>
                           </div>
                           <div class="col-sm-6 col-xs-12">
                              <div class="input-group">
                                 <label>Note</label>
                                 <textarea id="pr_contact_note" rows="4" cols="50" name="note" placeholder="Note" value=""></textarea>
                              </div>
                           </div>
                           <div class="col-sm-12 col-xs-12 text-center"><button type="submit" class="site-button black contact_now">Send</button></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      var template_style = "style-03";
      jQuery(document).ready(function(){
         $(document).on('click','#price-preview .pro-contact', function(){
            $('.js-show-modal-contact').trigger('click');
         });
         /* show modal contact*/
         $(document).on('click','.js-show-modal-contact', function(e){
            e.preventDefault();
            $('#modal-contact').modal('show');
         }); 
         $('#modal-contact form.contact-form').submit(function(e){
            e.preventDefault();
            var self = $(this);
            var vlTextbody = 'Nội dung: '+$('textarea.product-body-val').val();
            var handlePr = window.location.href;
            var vlTextPr = $('input.detailPr').val() + '\n' + 'Link dự án: '+handlePr;		
            var swatchSize = parseInt($('#contact-item-checkout .select-swatch').children().size());
            if(swatchSize == 1){
               var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html();				
            }
            else if(swatchSize == 2){
               var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html()+' | '+
                     $('.select-swatch .swatch').next().find('label.sd span').html();
            }
            else if(swatchSize == 3){
               var vlVariant = 'Biến thể: '+$('.select-swatch .swatch').find('label.sd span').html()+' | '+
                     $('.select-swatch .swatch').next().find('label.sd span').html()+' | '+
                     $('.select-swatch .swatch').next().next().find('label.sd span').html();				
            }
            else{
               var vlVariant = '';
            }
            grecaptcha.ready(function() {
               grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
                  self.find('input[name="g-recaptcha-response"]').val(token);
                  $('input.detailPr').val(vlTextPr+'\n'+vlVariant+'\n'+vlTextbody);
                  $.ajax({
                     type: 'POST',
                     url:'/contact',
                     data: $('#modal-contact form.contact-form').serialize(),			 
                     success:function(data){		
                        $('.success-form-pr-contact').removeClass('hidden');
                        setTimeout(function(){
                           $('#modal-contact').modal('hide');
                           location.reload();
                        },2500)
                     }			
                  })
               });
            });
         });
         /* show modal contact checkout */
         $(document).on('click','.js-show-modal', function(e){
            e.preventDefault();
            $('#modal-contact-checkout').modal('show');
         }); 
         $('#modal-contact-checkout form#form_product').submit(function(e){
            e.preventDefault();
            if($('form#form_product')[0].checkValidity()){
               var productData = {
                  "name": $('input#pr_contact_name').val(),
                  "email": $('input#pr_contact_email').val(),
                  "phone": $('input#pr_contact_phone').val(),
      
               };
               var productId = {
                  "id": $('#product-select').val(),
                  "quantity": $('input[name="quantity"]').val(),
                  "properties":{
                     "Note": $('textarea#pr_contact_note').val()
                  }
      
               };
               var getCart = null;
               $.ajax({
                  url: '/cart/add.js',
                  type: 'POST',
                  data: productId,
                  success: function(data){
                     window.location = "/checkout?full_name=" + productData.name + "&email=" + productData.email + "&phone=" + productData.phone;
                  },
                  error: function(XMLHttpRequest, textStatus) {
                     alert('Dự án bạn vừa mua đã vượt quá tồn kho');
                  }
               });
            }
         });
         /* show desc product short*/
         var expandable_content_height = $('.expandable-toggle .description-productdetail').height();
         if(expandable_content_height > 130){
            $('.expandable-toggle .description-productdetail').css({
               "height": "130px",
               "overflow": "hidden"
            });
         }else{
            $('.expandable-content_toggle').addClass('hidden');
         }
         $('body').on('click', '.js_expandable_content', function (e) {
            if (!$('.expandable-toggle').hasClass('opened')) {		
               $('.expandable-content_toggle').removeClass('btn-closemore').addClass('btn-viewmore').find('.expandable-content_toggle-text').html('Xem thêm nội dung');
               var curHeight = $('.expandable-toggle .description-productdetail').height();
               expandable_content_height = 130;
               $('.expandable-toggle .description-productdetail').height(curHeight).animate({
                  height: expandable_content_height
               }, 300,  function () {
                  $(this).parent().addClass('opened');
               });
               if ($(window).width() < 992) {
                  $('html, body').animate({
                     scrollTop: $(".product-content-desc").offset().top - 45
                  }, 300);
               }
            } 
            else {
               $('.expandable-toggle .description-productdetail').css('height', 'auto');
               $('.expandable-toggle').removeClass('opened');
               $('.expandable-content_toggle').removeClass('btn-viewmore').addClass('btn-closemore').find('.expandable-content_toggle-text').html('Rút gọn nội dung');
            }
         }); 
         if($(window).width() > 991){
            $('.product-gallery [data-fancybox="gallery"]').fancybox({
               hash : false,
               infobar : false,
            });
         }
         else{
            var ttALt = $('.product-gallery [data-fancybox="gallery"]').find('img').attr('alt')
            $('.product-gallery [data-fancybox="gallery"]').removeAttr("data-fancybox").removeAttr("href").attr('title',ttALt );
         }
         if (jQuery(window).width() < 992) {
            jQuery('#sliderproduct').owlCarousel({
               loop:false,
               autoplay:false,
               autoplayTimeout:3000,
               margin:0,
               nav:false,
               touchDrag: true,
               items:1,
               dots:true,
            });
         }
         if (template_style == 'style-03'){
            $('#sliderproduct3').slick({
               slidesToShow: 1,
               slidesToScroll: 1,
               fade: false,
               infinite: false,
               speed: 500,
               adaptiveHeight: false,
               asNavFor: '#slidePrductThumb',
               dots: true,
               arrows: true,
               lazyLoad: 'ondemand',
               responsive: [
                  {
                     breakpoint: 768,
                     settings: {
                        arrows: false
                     }
                  },
               ]
            });
            $('#sliderproduct3').on('setPosition', function () {
               $(this).find('.slick-slide').height('auto');
               var slickTrackHeight = $(this).find('.slick-track').height();
               $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
            });
            $('#slidePrductThumb').slick({
               infinite: false,
               vertical:true,
               verticalSwiping:true,
               slidesToShow: 6,
               slidesToScroll: 6,
               asNavFor: '#sliderproduct3',
               focusOnSelect: true,
               prevArrow: false, 
               nextArrow: false,
               dots: false,
               responsive: [
                  {
                     breakpoint: 1200,
                     settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                     }
                  },
               ]
            });
         }
      });
   </script>
   <script>
      var swatch_size = parseInt($('#contact-item-checkout .select-swatch').children().size());
      jQuery(document).on('click','#contact-item-checkout .swatch input', function(e) {  
         e.preventDefault();
         var $this = $(this);
         var _available = '';
         $this.parent().siblings().find('label').removeClass('sd');
         $this.next().addClass('sd');
         var name = $this.attr('name');
         var value = $this.val();
         $('#contact-item-checkout select[data-option='+name+']').val(value).trigger('change');
         if(swatch_size == 2){
            if(name.indexOf('1') != -1){
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
               $('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
               $('#contact-item-checkout #variant-swatch-1 .swatch-element label').removeClass('sd');
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').removeClass('soldout');
               $('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).find('option').each(function(){
                  var _tam = $(this).val();
                  $(this).parent().val(_tam).trigger('change');
                  if(check_variant){
                     if(_available == '' ){
                        _available = _tam;
                     }
                  }
                  else{
                     $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                     $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                  }
               })
               $('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
               $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
            }
         }
         else if (swatch_size == 3){
            var _count_op2 = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
            var _count_op3 = $('#contact-item-checkout #variant-swatch-2 .swatch-element').size();
            if(name.indexOf('1') != -1){
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
               $('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
               $('#contact-item-checkout #variant-swatch-1 .swatch-element label').removeClass('sd');
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').removeClass('soldout');
               $('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
               $('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
               var _avi_op1 = '';
               var _avi_op2 = '';
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(ind,value){
                  var _key = $(this).data('value');
                  var _unavi = 0;
                  $('#contact-item-checkout .single-option-selector').eq(1).val(_key).change();
                  $('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
                  $('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
                  $('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                  $('#contact-item-checkout #variant-swatch-2 .swatch-element').each(function(i,v){
                     var _val = $(this).data('value');
                     $('#contact-item-checkout .single-option-selector').eq(2).val(_val).change();
                     if(check_variant == true){
                        if(_avi_op1 == ''){
                           _avi_op1 = _key;
                        }
                        if(_avi_op2 == ''){
                           _avi_op2 = _val;
                        }
                        //console.log(_avi_op1 + ' -- ' + _avi_op2)
                     }else{
                        _unavi += 1;
                     }
                  })
                  if(_unavi == _count_op3){
                     $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                     setTimeout(function(){
                        $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');
                     })
                  }
               })
               $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();
            }
            else if(name.indexOf('2') != -1){
               $('#contact-item-checkout #variant-swatch-2 .swatch-element label').removeClass('sd');
               $('#contact-item-checkout #variant-swatch-2 .swatch-element').removeClass('soldout');
               $('#contact-item-checkout #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
               $('#contact-item-checkout .selector-wrapper .single-option-selector').eq(2).find('option').each(function(){
                  var _tam = $(this).val();
                  $(this).parent().val(_tam).trigger('change');
                  if(check_variant){
                     if(_available == '' ){
                        _available = _tam;
                     }
                  }else{
                     $('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                     $('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                  }
               })
               $('#contact-item-checkout .selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
               $('#contact-item-checkout #variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
            }
         }
         if (template_style == 'style-01'){
            if(checkImgVariant != '' && $(window).width() > 991 && fIndex == true){
               var indexVariant = $(".slide_product .gallery-item[data-image='"+checkImgVariant+"']").index();
               $('html, body').animate({
                  scrollTop: $('.product-gallery-item:eq('+ indexVariant +')').offset().top - 20
               }, 800);	
            }
         }
      })
      jQuery(document).ready(function(){
         var _chage = '';
         $('#contact-item-checkout .swatch-element[data-value="'+$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
         $('#contact-item-checkout .swatch-element[data-value="'+$('#contact-item-checkout .selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();
         if(swatch_size == 2){
            var _avi_op1 = '';
            var _avi_op2 = '';
            var _count = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
            $('#contact-item-checkout #variant-swatch-0 .swatch-element').each(function(ind,value){
               var _key = $(this).data('value');
               var _unavi = 0;
               $('#contact-item-checkout .single-option-selector').eq(0).val(_key).change();
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(i,v){
                  var _val = $(this).data('value');
                  $('#contact-item-checkout .single-option-selector').eq(1).val(_val).change();
                  if(check_variant == true){
                     if(_avi_op1 == ''){
                        _avi_op1 = _key;
                     }
                     if(_avi_op2 == ''){
                        _avi_op2 = _val;
                     }
                  }else{
                     _unavi += 1;
                  }
               })
               if(_unavi == _count){
                  $('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                  //$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');
               }
            })
            $('#contact-item-checkout #variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();
            $('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
         }
         else if(swatch_size == 3){
            var _avi_op1 = '';
            var _avi_op2 = '';
            var _avi_op3 = '';
            var _size_op2 = $('#contact-item-checkout #variant-swatch-1 .swatch-element').size();
            var _size_op3 = $('#contact-item-checkout #variant-swatch-2 .swatch-element').size();
      
            $('#contact-item-checkout #variant-swatch-0 .swatch-element').each(function(ind,value){
               var _key_va1 = $(this).data('value');
               var _count_unavi = 0;
               $('#contact-item-checkout .single-option-selector').eq(0).val(_key_va1).change();
               $('#contact-item-checkout #variant-swatch-1 .swatch-element').each(function(i,v){
                  var _key_va2 = $(this).data('value');
                  var _unavi_2 = 0;
                  $('#contact-item-checkout .single-option-selector').eq(1).val(_key_va2).change();
                  $('#contact-item-checkout #variant-swatch-2 .swatch-element').each(function(j,z){
                     var _key_va3 = $(this).data('value');
                     $('#contact-item-checkout .single-option-selector').eq(2).val(_key_va3).change();
                     if(check_variant == true){
                        if(_avi_op1 == ''){
                           _avi_op1 = _key_va1;
                        }
                        if(_avi_op2 == ''){
                           _avi_op2 = _key_va2;
                        }
                        if(_avi_op3 == ''){
                           _avi_op3 = _key_va3;
                        }
                     }else{
                        _unavi_2 += 1;
                     }
                  })
                  if(_unavi_2 == _size_op3){
                     _count_unavi += 1;
                  }
               })
               if(_size_op2 == _count_unavi){
                  $('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
                  //	$('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');
               }
            })
            $('#contact-item-checkout #variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
         }
         if (template_style == 'style-01'){
            fIndex = true;
            if(checkImgVariant != '' && $(window).width() > 991){
               var indexVariant = $(".slide_product .gallery-item[data-image='"+checkImgVariant+"']").index();
               if($(window).scrollTop() > $('.product-detail-wrapper').offset().top){
                  $('html, body').animate({
                     scrollTop: $('.product-gallery-item:eq('+ indexVariant +')').offset().top - 20
                  }, 800);	
               }
            }
         }
         /* hover header-text-swatch */
         var vl = $('#contact-item-checkout .swatch .color input').val();
         $('#contact-item-checkout .swatch .color input').parents(".swatch").find(".header-swatch span").html(vl);
         $("#contact-item-checkout .select-swap .color" ).hover(function() { 
            var value = $( this ).data("value");
            $(this).parents(".swatch").find(".header-swatch span").html( value );
         },function(){
            var value = $("#contact-item-checkout .select-swap .color label.sd span").html();
            $(this).parents(".swatch").find(".header-swatch span").html( value );
         });
      });
   </script>
   <!-- Modal -->
   <div class="modal-overlay overlay-1035937680"></div>
   <div class="modal fade modal-buy" id="modal-buy-1035937680" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
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
         $("#modal_buy_now_1035937680").click(function(){
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
</main>
@endsection