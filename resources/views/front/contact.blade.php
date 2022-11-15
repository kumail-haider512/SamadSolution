@extends('layouts.master')
@section('content')

<div class="tour-title not-fixed center-image">
    <img class="w-100 h-100" src="{{ asset($setting['contact_banner_image'])}}" alt="">
    <h3 class="white text-center front shadow-text center-text">{{$setting['contact_banner_heading']}}</h3>  
    
</div>
<div class="chapter2">
    <img class="curve2 d-none d-xl-block" src="{{asset('svgs/curve.svg')}}" alt="">
</div>
<section id="pagesection" >
    <div class="container">
        <div class="row">
            {{--<div class="col-md-6 col-12 order-md-first order-last">
                <form id="contact-form" method="post" action="{{route('contact.save')}}" role="form">
                    @csrf
                    <div class="messages">
                        
                    </div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-center">
                                    <label for="form_name">First name *</label>
                                    <input id="form_name" type="text" name="f_name" class="form-control" placeholder="Please enter your first name *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors tiny mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-center">
                                    <label for="form_lastname">Last name *</label>
                                    <input id="form_lastname" type="text" name="l_name" class="form-control" placeholder="Please enter your last name *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors tiny mt-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-center">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors tiny mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-center">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                    <div class="help-block with-errors tiny mt-2"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="what course are you interested in? *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors tiny mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
    	                        <div class="form-group">
    	                            <div class="g-recaptcha" data-sitekey="6LeB94UgAAAAAL3c9Q_sEIE6pkGNGYQ0RFBFdlqk"></div>
    	                        </div> 
    	                    </div> 
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary px-4 btn-send" value="Send message">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>--}}
            <div class="col-md-12 col-12 mb-5 text-left">
                <h3 class="black bold front mb-2 mt-2 ">{{$setting['contact_us_heading_1']}}  {{$setting['contact_us_heading_2']}}</h3>
                <h5 class="primary-color section-title mb-3">{{$setting['contact_us_time_text']}}</h5>
                <ul class="list-unstyled quick-links">
                        <li><p class="black bold">{{$setting['footer_para']}} </p></li>
                        <li><h5><i class="fas fa-map-marker-alt mr-2"></i>{{$setting['footer_address']}}</h5></li>
                        <li><h5><i class="fas fa-phone-square mr-2"></i>{{$setting['footer_phone']}}</h5></li>
                        <li><h5><i class="fas fa-envelope mr-2"></i>{{$setting['footer_email']}}</h5></li>
                    </ul>
                <div class="separator"></div>     
                <p class=" text-block">{{$setting['contact_us_Text']}}</p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center  col-10 offset-1 mt-5">
                <div  class="text-center white-popup">
                    <a href="{{$setting['facebook']}}">
                        <i class="fab fa-facebook-f"></i></a> &nbsp;

                    <a href="{{$setting['twiter']}}">
                        <i class="fab fa-twitter"></i></a>&nbsp;

                    <a href="{{$setting['instagram']}}">
                        <i class="fab fa-instagram"></i>&nbsp;
                    </a>
                </div>  
            </div>    
        </div>     
    </div>
</section>

<section class="map-fullwidth"> 
    <div id="map-small"></div>
</section>
            
   
@endsection
@section('js')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQxDtoDoP_al1kFRr5txQZz4pL9fIacqw&callback=initMap"
            async defer></script>
<script>
    $(document).on('click','.btn-send',function(e){
        e.preventDefault();
        var response = grecaptcha.getResponse();
            
        if(response.length == 0)
        {
            alert('complete cpatch first');
            return false;
        }
        else
        {
            $('#contact-form').submit();
        }
        
    })
        var map;

        function initMap() {
            var latitude = {{$setting['latitude']}}; // YOUR LATITUDE VALUE
            var longitude = {{$setting['longitude']}}; // YOUR LONGITUDE VALUE

            var myLatLng = {lat: latitude, lng: longitude};

            map = new google.maps.Map(document.getElementById('map-small'), {
                center: myLatLng,
                zoom: 14
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: latitude + ', ' + longitude
            });
        }
    </script>

@endsection
