
<footer>
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-md-4">
                    <h6 class="white mt-4">{{$setting['footer_heading']}}</h6>
                    <ul class="list-unstyled quick-links">
                        <li><p class="white light">{{$setting['footer_para']}} </p></li>
                        <li><h5><i class="fas fa-map-marker-alt mr-2"></i>{{$setting['footer_address']}}</h5></li>
                        <li><h5><i class="fas fa-phone-square mr-2"></i>{{$setting['footer_phone']}}</h5></li>
                        <li><h5><i class="fas fa-envelope mr-2"></i>{{$setting['footer_email']}}</h5></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img class="svgcenter mt-4 logo-light" src="{{ asset($setting['Footer_logo'])}}" alt="" >
                    <ul class="list-unstyled list-inline mt-3 social text-center">
                        <li class="list-inline-item"><a href="{{$setting['facebook']}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting['twiter']}}"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{$setting['instagram']}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul class="list-unstyled text-center quick-links mt-3">
                        <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="{{route('courses')}}"><i class="fa fa-angle-double-right"></i>See our Courses</a></li>
                        <li><a href="{{route('about')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                        <li><a href="{{route('contact')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                        <li><a href="{{route('terms')}}"><i class="fa fa-angle-double-right"></i>Terms & Conditions</a></li>
                    </ul>
                </div>
                <div  id="instafeed" class="col-md-4 grid mx-auto">
                    <h6 class="white mt-4 mb-3">{{$setting['footer_heading_2']}}</h6>
                    <div class="grid-item">
                        <div class="row">
                            <img src="{{ asset($setting['insta_img_1']) ?? ''}}">
                            <img src="{{ asset($setting['insta_img_2']) ?? ''}}">
                            <img src="{{ asset($setting['insta_img_3']) ?? ''}}">
                            <img src="{{ asset($setting['insta_img_4']) ?? ''}}">
                            <img src="{{ asset($setting['insta_img_5']) ?? ''}}">
                            <img src="{{ asset($setting['insta_img_6']) ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-2">
                    <p style="color:white">Copyright 2022 © <b>Samad Solutions</b> . All Rights Reserved</p>
                </div>
            </div>
            <div class="scale-up">
                <a  class="smooth-scroll  rectangle-right" href="#" >
                    <div class="go-up px-1">
                        <i class="fas mb-2 fa-arrow-up"></i><br>
                        <h6 class="text-center letters-up">GO<br>UP</h6> 
                    </div>
                </a>  
            </div>             
        </div>
    </section>
</footer>