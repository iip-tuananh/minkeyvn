
@php
$img = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="gallery-box fade-box product-resize">
   <div class="overlay">
   <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}" class="image-resize">
      <picture>
         <source media="(max-width: 480px)" data-srcset="{{$img[0]}}"
               srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
         <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="{{$img[0]}}"
               srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
         <source media="(min-width: 768px)" data-srcset="{{$img[0]}}"
               srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="/>
         <img data-src="{{$img[0]}}"
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
               class="lazyload" alt=" {{languageName($product->name)}} "/>
      </picture>
   </a>
   <div class="hover-effect"></div>
   <div class="text-wrap-title">
      <h3 class="pro-title"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
      <div class="text-wrap-price">
         @if ($product->price > 0 && $product->discount > 0)
         <p class="pro-price">
               <span>{{number_format($discountPrice)}}₫</span>
               <span class="pro-price-del">
               <del class="compare-price">
                  {{number_format($product->price)}}₫
               </del>
               </span>
         </p>
         @elseif ($product->price && $product->discount == 0)
         <p class="pro-price">
            <span>{{number_format($product->price)}}₫</span>
         </p>
         @else
         <p class="pro-price">
            <span>Liên hệ</span>
         </p>
         @endif
      </div>
      <!-- Button trigger modal -->
      <div data-toggle="modal" data-target="#modal-buy-{{$product->id}}" id="modal_buy_now_{{$product->id}}" class="btn_buy_now" data-overlay="overlay-{{$product->id}}" data-channel1="facebook" data-link1="{{$setting->facebook}}" data-channel2="shopee" data-link2="{{$setting->google}}"    >
         <span>Mua ngay</span>
      </div>
   </div>
   </div>
</div>
<!-- Modal -->
<div class="modal-overlay overlay-product.id"></div>
<div class="modal fade modal-buy" id="modal-buy-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
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

