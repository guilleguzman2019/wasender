 <header>
   <!-- tp-header-area-start -->
   <div class="tp-header__top-area theme-bg tp-header__space-3 d-none d-sm-block">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-6 col-6">
               <div class="tp-header__top-left">
                  <a href="tel:{{ get_option('primary_data',true)->contact_phone ?? '' }}">
                     
                     <span>{{ __('Help Desk') }} : <b class="frist-child">+{{ get_option('primary_data',true)->contact_phone ?? '' }}</b></span>
                  </a>
                  @isset(get_option('header_footer',true,true)->header)
                   @if(!empty(get_option('header_footer',true,true)->header->announcement_title ?? ''))
                     <a class="last-child" href="{{ get_option('header_footer',true,true)->header->announcement_link ?? '' }}">
                        
                        <span><b>{{ get_option('header_footer',true,true)->header->announcement_type ?? '' }}: </b>{{ get_option('header_footer',true,true)->header->announcement_title ?? '' }}</span>
                     </a>
                   @endif
                  @endif
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-6">
               <div class="tp-header__top-right text-end">
                  @if(!empty(get_option('primary_data',true)->socials->twitter))
                  <a href="{{ get_option('primary_data',true)->socials->twitter }}"><i class="fab fa-twitter"></i></a>
                  @endif
                  @if(!empty(get_option('primary_data',true)->socials->instagram))
                  <a href="{{ get_option('primary_data',true)->socials->instagram }}"><i class="fab fa-instagram"></i></a>
                  @endif
                  @if(!empty(get_option('primary_data',true)->socials->facebook))
                  <a href="{{ get_option('primary_data',true)->socials->facebook }}"><i class="fab fa-facebook-square"></i></a>
                  @endif
                  @if(!empty(get_option('primary_data',true)->socials->linkedin))
                  <a href="{{ get_option('primary_data',true)->socials->linkedin }}"><i class="fab fa-linkedin"></i></a>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="header-sticky"
   class="tp-header__area tp-header__space-3 tp-header__transparent z-index-5 tp-header__bottom p-relative">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-xl-2 col-lg-2 col-md-6 col-7">
            <div class="tp-header__logo">
               <a href="{{ url('/') }}">
                  <img src="{{ asset(get_option('primary_data',true)->logo ?? '') }}" alt="">
               </a>
            </div>
         </div>
         <div class="col-xl-7 col-lg-7 d-none d-lg-block">
            <div class="tp-header__main-menu tp-header__black-menu tp-header__menu-3">
               <nav id="mobile-menu">
                  <ul>
                    {{ PrintMenu('main-menu') }}
                 </ul>
              </nav>
           </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-5">
         <div class="tp-header__right-two d-flex align-items-center justify-content-end">
            <a class="tp-btn-blue-square d-none d-md-block" href="{{ !Auth::check() ? url('/pricing') : url('/login') }}"><span>{{ !Auth::check() ? __('Get Started') : __('Dashboard') }}</span></a>
            <a class="tp-header__bars tp-menu-bar d-lg-none" href="#"><i class="far fa-bars"></i></a>
         </div>
      </div>
   </div>
</div>
</div>

<!-- tp-header-area-end -->
</header>

<!-- tp-offcanvus-area-start -->
<div class="tp-offcanvas-area">
   <div class="tpoffcanvas">
      <div class="tpoffcanvas__close-btn">
         <button class="close-btn"><i class="fal fa-times"></i></button>
      </div>
      <div class="tpoffcanvas__logo">
         <a href="{{ url('/') }}">
            <img src="{{ asset(get_option('primary_data',true)->logo ?? '') }}" alt="">
         </a>
      </div>
      <div class="tpoffcanvas__text"></div>
      <div class="mobile-menu"></div>
      <div class="tpoffcanvas__info">
         <h3 class="offcanva-title">{{ __('Get In Touch') }}</h3>
         <div class="tp-info-wrapper mb-20 d-flex align-items-center">
            <div class="tpoffcanvas__info-icon">
               <a href="#"><i class="fal fa-envelope"></i></a>
            </div>
            <div class="tpoffcanvas__info-address">
               <span>{{ __('Email') }}</span>
               <a href="maito:{{ get_option('primary_data',true)->contact_email ?? '' }}">{{ get_option('primary_data',true)->contact_email ?? '' }}</a>
            </div>
         </div>
         <div class="tp-info-wrapper mb-20 d-flex align-items-center">
            <div class="tpoffcanvas__info-icon">
               <a href="#"><i class="fal fa-phone-alt"></i></a>
            </div>
            <div class="tpoffcanvas__info-address">
               <span>{{ __('Phone') }}</span>
               <a href="tel:+{{ get_option('primary_data',true)->contact_phone ?? '' }}">{{ get_option('primary_data',true)->contact_phone ?? '' }}</a>
            </div>
         </div>
         <div class="tp-info-wrapper mb-20 d-flex align-items-center">
            <div class="tpoffcanvas__info-icon">
               <a href="#"><i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="tpoffcanvas__info-address">
               <span>{{ __('Location') }}</span>
               <a href="#">{{ get_option('primary_data',true)->address ?? '' }}</a>
            </div>
         </div>
      </div>
      <div class="tpoffcanvas__social">
         <div class="social-icon">
            @if(!empty(get_option('primary_data',true)->socials->twitter))
            <a href="{{ get_option('primary_data',true)->socials->twitter }}"><i class="fab fa-twitter"></i></a>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->instagram))
            <a href="{{ get_option('primary_data',true)->socials->instagram }}"><i class="fab fa-instagram"></i></a>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->facebook))
            <a href="{{ get_option('primary_data',true)->socials->facebook }}"><i class="fab fa-facebook-square"></i></a>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->linkedin))
            <a href="{{ get_option('primary_data',true)->socials->linkedin }}"><i class="fab fa-linkedin"></i></a>
            @endif
         </div>
      </div>
   </div>
</div>
<div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->