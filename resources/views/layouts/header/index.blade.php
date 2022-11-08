<div class="mainHeader--height">
   <header class="main-header mainHeader_temp01">
      <div class="top-bar">
            <div class="container">
            <div class="top-bar-content">
               <p>Địa chỉ - <a href="https://www.google.com/maps/place/{{$setting->address1}}" class="view-more">{{$setting->address1}}</a></p>
               <a href="javascript:;" class="close-top-bar js_top_bar_close" title="Ẩn thanh top bar" aria-label="icon close top bar" >
                  <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
                  </svg>
               </a>
            </div>
            </div>
      </div>
      <div class="header-inner">
            <div class="container">
            <div class="flexContainer d-flex">
               <div class="col-xs-12 wrapper-header-hamburger hidden-lg hidden-md">
                  <div class="header-action-icon icon-state">
                        <span class="header-action-toggle hamburger-menu" aria-hidden="true">
                        <svg class="icon-svg icon-action-svg icon-hamburger-menu-mobile" viewBox="0 0 20 16">
                           <path d="M0 14h20v2H0v-2zM0 0h20v2H0V0zm0 7h20v2H0V7z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                        <span class="box-action-icon-close">
                           <svg class="icon-svg svg-close" viewBox="0 0 19 19">
                              <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                           </svg>
                        </span>
                        </span>
                        <div class="header_dropdown_content site_menu_mobile">
                        <span class="box-triangle">
                           <svg viewBox="0 0 20 9">
                              <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                           </svg>
                        </span>
                        <div class="site-nav-container_menu ">
                           <nav id="mp-menu" class="mp-menu mp-cover" >
                              <div class="mp-level" data-level="1">
                                    <div class="mplus-menu">
                                    <ul class="mm-panel vertical-menu-list list-root">
                                       <li class="active">
                                          <a class="parent" href="{{route('home')}}">Trang chủ</a>
                                       </li>
                                       <li class="" >
                                          <a class="parent" href="{{route('aboutUs')}}">Về chúng tôi</a>
                                       </li>
                                       <li class="" data-menu-root="103559668">
                                          <a class="parent" href="{{route('allProduct')}}">Sản phẩm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                       </li>
                                       <li class="" data-menu-root="103457058">
                                          <a class="parent" href="{{route('allListBlog')}}">Cẩm nang<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                       </li>
                                       <li class="">
                                          <a class="parent" href="{{route('lienHe')}}">Liên hệ</a>
                                       </li>
                                       <li class="main_help">
                                          <div class="mobile_menu_section">
                                                <p class="mobile_menu_section-title">Hãy liên hệ với chúng tôi:</p>
                                                <div class="mobile_menu_help">
                                                <svg class="icon icon--bi-phone" viewBox="0 0 24 24">
                                                   <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                      <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#333333"></path>
                                                      <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#333333"></path>
                                                   </g>
                                                </svg>
                                                <a href="tel:{{$setting->phone1}}" rel="nofollow">{{$setting->phone1}} (Phòng CSKH)</a>
                                                </div>
                                                <div class="mobile_menu_help">
                                                <svg class="icon icon--bi-email" viewBox="0 0 22 22">
                                                   <g fill="none" fill-rule="evenodd">
                                                      <path stroke="#333333" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z"></path>
                                                      <path stroke="#333333" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033"></path>
                                                      <path stroke="#333333" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337"></path>
                                                      <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#333333" stroke-width="2" stroke-linecap="square"></path>
                                                   </g>
                                                </svg>
                                                <a href="mailto:{{$setting->email}}" rel="nofollow">{{$setting->email}}</a>
                                                </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <ul class="mm-panel list-child" id="103559668">
                                       <li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i>Sản phẩm</a></li>
                                       <li><a href="{{route('allProduct')}}"><b>Xem "Sản phẩm của chúng tôi"</b></a></li>
                                       @foreach ($categoryhome as $cate)
                                       <li class="">
                                          <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" ><span>-</span>{{languageName($cate->name)}}</a>
                                       </li>
                                       @endforeach
                                    </ul>
                                    <ul class="mm-panel list-child" id="103457058">
                                       <li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i>Cẩm nang</a></li>
                                       <li><a href="{{route('allListBlog')}}"><b>Xem "Cẩm nang làm mẹ"</b></a></li>
                                       @foreach ($blogCate as $cate)
                                       <li class="">
                                          <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" ><span>-</span>{{languageName($cate->name)}}</a>
                                       </li>
                                       @endforeach
                                    </ul>
                                    </div>
                              </div>
                           </nav>
                        </div>
                        </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-4 col-xs-12 wrapper-header-logo">
                  <div class="main-header--logo fade-box" itemscope="" itemtype="http://schema.org/Organization">
                        <a href="{{route('home')}}" itemprop="url" aria-label="logo">
                        <img itemprop="logo" src="{{$setting->logo}}" alt="{{$setting->company}}" class="img-responsive logoimg lazyload"/>
                        <h1 class="hidden">{{$setting->company}}</h1>
                        </a>
                  </div>
               </div>
               <div class="col-md-9 col-sm-8 col-xs-12 wrapper-header-navigation d-flex row-flex-justify-e row-flex-align-center">
                  <div class="wrapper-header-menu menu-desktop hidden-sm hidden-xs">
                        <nav class="desk-menu text-center">
                        <ul>
                           <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                              <a href="{{route('home')}}" title="Trang chủ"> 
                              Trang chủ
                              </a>
                           </li>
                           <li class="{{ Route::currentRouteName() == 'aboutUs' ? 'active' : '' }}">
                              <a href="{{route('aboutUs')}}" title="Về chúng tôi"> 
                              Về chúng tôi
                              </a>
                           </li>
                           <li class="{{ Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'detailProduct' ? 'active' : '' }}">
                              <a href="{{route('allProduct')}}" title="Sản phẩm"> 
                              Sản phẩm
                              <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                              <ul class="sub_menu">
                                 @foreach ($categoryhome as $cate)
                                 <li class="">
                                 <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}"> 
                                 {{languageName($cate->name)}}
                                 </a>
                                 </li>
                                 @endforeach
                              </ul>
                           </li>
                           <li class="{{ Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' || Route::currentRouteName() == 'detailBlog' ? 'active' : '' }}">
                              <a href="{{route('allListBlog')}}" title="Cẩm nang"> 
                              Cẩm nang
                              <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                              <ul class="sub_menu">
                                 @foreach ($blogCate as $cate)
                                 <li class="">
                                 <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}"> 
                                 {{languageName($cate->name)}}
                                 </a>
                                 </li>
                                 @endforeach
                              </ul>
                           </li>
                           <li class="{{ Route::currentRouteName() == 'lienHe' ? 'active' : '' }}">
                              <a href="{{route('lienHe')}}" title="Liên hệ"> 
                              Liên hệ
                              </a>
                           </li>
                        </ul>
                        </nav>
                  </div>
                  <div class="wrapper-header-action d-flex row-flex-justify-e row-flex-align-center">
                        <div class="header-action-search header-action-icon icon-state">
                        <a href="javascript:;" aria-label="Tìm kiếm" title="Tìm kiếm" class="header-action-toggle">
                           <span class="box-action-icon">
                              <svg class="icon-svg icon-action-svg svg-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                    <g>
                                    <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                                    </g>
                              </svg>
                              <span class="box-action-icon-close">
                                    <svg class="icon-svg svg-close" viewBox="0 0 19 19">
                                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                              </span>
                           </span>
                        </a>
                        <div class="header_dropdown_content site_search_dk">
                           <span class="box-triangle">
                              <svg viewBox="0 0 20 9">
                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                              </svg>
                           </span>
                           <div class="site-nav-container">
                              <p class="titlebox-search">Tìm kiếm</p>
                              <div class="search-box wpo-wrapper-search">
                                    <form action="{{route('search_result')}}" method="POST" class="searchform searchform-categoris ultimate-search">
                                       @csrf
                                    <div class="wpo-search-inner">
                                       <input id="inputSearchAuto" name="keyword" maxlength="40" autocomplete="off" class="searchinput input-search search-input" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                                    </div>
                                    <button type="submit" class="btn-search btn" id="search-header-btn">
                                       <svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                          <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                          <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                       </svg>
                                    </button>
                                    </form>
                                    <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                                    <div class="resultsContent"></div>
                                    </div>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="header-action-language hidden-sm hidden-xs">
                        <div class="btn-hotline zoom-in-out-box">
                           <a href="tel:{{$setting->phone1}}">Gọi ngay</a>
                        </div>

                        {{-- <ul>
                           <li><a class="VI" href="javascript:void(0)"><img src="https://file.hstatic.net/200000408525/file/vi_d2ac3e6adf784a928eee72916fa5d9a8.png" alt="vietnam" /></a></li>
                           <li><a class="EN" href="javascript:void(0)"><img src="https://file.hstatic.net/200000408525/file/en_0b315fda6dea4b8f8b8b172ed0112e93.png" alt="eng" /></a></li>
                        </ul> --}}
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </header>
</div>