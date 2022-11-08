<footer class="main-footer">
   <div class="main-footer--top bg-gray">
      <div class="container">
            <div class="row">
            <div class="col-md-8 col-xs-12 col-sm-12">
               <div class="news-letter">
                  <div class="news-letter-title">
                        <h4>Đăng ký nhận tin</h4>
                  </div>
                  <div class="news-letter-form-customer">
                        <form accept-charset='UTF-8' action='{{route('postcontact')}}' class='contact-form' method='post'>
                           @csrf
                        <div class="input-group">
                           <input type="hidden" id="newsletter-tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin">     
                           <input required type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="newsletter-email" value="" placeholder="Nhập email của bạn" name="email" aria-label="Email Address">
                           <button type="submit" class="site-button black">Đăng ký</button>
                        </div>
                        </form>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12">
               <div class="phone-contact-footer">
                  <p class="phone-contact-number">
                        <i class="fa fa-phone "></i><span>Bạn cần hỗ trợ:</span>
                        <a href="tel:{{$setting->phone1}}" aria-label="Hotline">{{$setting->phone1}}</a>
                  </p>
               </div>
            </div>
            </div>
      </div>
   </div>
   <div class="main-footer--bottom">
      <div class="container scroltop-to-bottom">
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
               <div class="footer-col footer-block">
                  <h4 class="footer-title">
                        Giới thiệu
                  </h4>
                  <div class="footer-content">
                        <p>{{$setting->webname}}</p>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
               <div class="footer-col footer-block">
                  <h4 class="footer-title">
                        Thông tin liên hệ
                  </h4>
                  <div class="footer-content toggle-footer">
                        <ul>
                        <li><span>Địa chỉ:</span> {{$setting->address1}}</li>
                        <li><span>Mã số thuế:</span> {{$setting->fax}}</li>
                        <li><span>Điện thoại:</span> {{$setting->phone1}}</li>
                        <li><span>Email:</span> {{$setting->email}}</li>
                        </ul>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
               <div class="footer-col footer-link">
                  <h4 class="footer-title">
                        Thông tin sản phẩm
                  </h4>
                  <div class="footer-content toggle-footer">
                        <ul>
                           @foreach ($categoryhome as $cate)
                           <li class="item">
                              <a href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                           </li>
                           @endforeach
                        </ul>
                  </div>
                  <h4 class="footer-title">
                        Xem thêm
                  </h4>
                  <div class="footer-content toggle-footer">
                        <ul>
                           @foreach ($helpCustomer as $item)
                           <li class="item">
                              <a href="{{route('helpCus', ['slug'=>$item->slug])}}" title="{{$item->title
                              }}">{{$item->title
                              }}</a>
                           </li>
                           @endforeach
                        </ul>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
               <div class="footer-col footer-link">
                  <h4 class="footer-title">
                        Fanpage
                  </h4>
                  <div class="footer-content toggle-footer">
                        <div class="fb-page" data-href="{{$setting->facebook}}"  data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">	</div>
                  </div>
               </div>
            </div>
            </div>
            <button class="scroltop" aria-label="icon scroll top">
            <span class="fa fa-angle-up" id="btn-vibrate"></span>
            </button>
      </div>
   </div>
   <div class="main-footer--copyright">
      <div class="container">
            <div class="main-footer--border">
            <p>Copyright © 2022 <a href="{{route('home')}}"> Bỉm Sửa Minkey</a>. <a target="_blank" rel="noreferrer" href="https://sbtsoftware.vn/">Designed by SBT</a></p>
            </div>
      </div>
   </div>
</footer>