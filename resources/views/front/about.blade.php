@extends('layouts.master')
@section('content')

<div class="tour-title not-fixed center-image">
    <img class="w-100 h-100" src="{{ asset($setting['about_banner_image'])}}" alt="">
    <h3 class="white text-center front shadow-text center-text">{{$setting['about_banner_heading']}}</h3>  
</div>
<div class="chapter2">
    <img class="curve2 d-none d-xl-block" src="{{asset('svgs/curve.svg')}}" alt="">
</div>
         <!-- End section 1-->

    

          <!-- Section 2 about us-->

        <section id="section-newsletter">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 order-md-first order-last">
                        <img src="{{ asset($setting['about_image'])}}" class="img-fluid mr-md-3 mr-0 img-border" alt="">
                    </div>
                    <div class="col-md-5 col-12 text-left my-auto">
                        <h3 class="black bold front mb-2 mt-2 ">{{$setting['about_heading_1']}}</h3>
                        <div class="separator "></div>     
                        <h5 class="primary-color section-titlemb-3">{{$setting['about_heading_2']}}</h5>
                        <p class=" text-block  mb-md-0 mb-4">
                            {{$setting['about_content_1']}}
                        </p>
                        <p class=" text-block  mb-md-0 mb-4">
                            {{$setting['about_content_2']}}
                        </p>
                    </div>
                </div>
            </div>
           
        </section>

        <section id="aboutsection">
        <img class="curve3" src="{{asset('svgs/curve2.svg')}}" alt="">


            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center  col-12">
                        <h3 class="text-center pb-1 black bold">{{$setting['who_we_are_heading']}}</h3>  
                        <div class="separator text-center svgcenter"></div> 
                        <p class="text-block text-justify px-lg-5 px-1 mb-4 mb-md-5 black">
                            {{$setting['who_we_are_text_1']}}    
                        </p>
                        <p>
                            {{$setting['who_we_are_text_2']}}
                        </p>
                        <img src="{{asset('images/newdestinations.jpg')}}" class="img-fluid img-border" alt="">

                    </div>
                </div>
            </div>
           
        </section>
@endsection