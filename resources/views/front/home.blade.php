@extends('layouts.master')
@section('title','Home')
@section('css')
<style>
    /*.form-inline  .form-control-inline2 {
        width: 60% !important;
    }*/
</style>
@endsection
@section('content') 

<section id="sectioncarousel">
    <div id="carouselExampleIndicators" class="carousel carousel-home2  slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner " role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ asset($setting['image_1'])}} " alt="First slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset($setting['image_2'])}} " alt="Second slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset($setting['image_3'])}} " alt="Third slide">
               
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>              
</section>

<section id="section3">
    <div class="container formhome2 text-center justify-content-center align-items-center pb-4" >
        <h4 class="black mx-2 mb-3 mt-0 pt-4 text-center bold  d-block">{{$setting['search_heading_text']}}</h4>  
        <form method="GET" action="{{route('detail')}}" class="form-inline text-center justify-content-center align-items-center pb-0">
            <input type="hidden" name="subcourse_id" class="subcourse_id">
            <input type="text" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2 searching" id="inlineFormInputName1" placeholder="Search Courses" autocomplete="off"> 
            <span class="fas fa-search iconform"></span>
                <ul id="search_item">
                    
                </ul>

            <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search</button>

        </form>
    </div>
</section>

<section id="section-masonry">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center"><h3 class="black front bold text-center">{{$setting['service_section_heading_text']}}</h3>
                            <div class="separator text-center svgcenter"></div>     
                            <h5 class="primary-color text-center mb-5 ">{{$setting['service_section_text']}}</h5> 
                        </div>
                        <div class="gal">
                            @foreach($list as $item )
                            <div class="masonry-full mb-4">
                                <div class="masonry-hover">
                                    <div class="masonry-item">
                                        <img class="masonry-image" src="{{ asset($item->image) }}" alt="">
                                        <div class="masonry-info text-center front">
                                            <h6 class="white shadow-text front">{{$item->name}}</h6>
                                            <a class="btn btn-outline-light px-3 front" href="{{route('detail',createSlug($item->name))}}" role="button">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </section><!-- End section 3 tours-->


<section id="section-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12"><h4 class="text-center bold mb-5">{{$setting['choose_heading_text']}}</h4></div>

            <div class="col-lg-4 col-12 order-1 order-lg-1 mx-auto">
                <img class="svgcenter worldclass mb-2" src="{{ asset($setting['choose_us_image_1'])}}" alt="" >
            </div>

            <div class="col-lg-4 col-12 order-3 order-lg-2 mx-auto">
                <img class="svgcenter lovetravel mt-5 mt-lg-0 mb-2" src="{{ asset($setting['choose_us_image_2'])}}" alt="" >
            </div>

            <div class="col-lg-4 col-6 order-5 order-lg-3 mx-auto">
                <img class="svgcenter parisicon mt-5 mt-lg-0 mb-2" src="{{ asset($setting['choose_us_image_3'])}}" alt="" >
            </div>
        
            <div class="col-lg-4 col-12 order-2 order-lg-4">
                <h6 class="mt-3 text-center">{{$setting['choose_us_heading_1']}}</h6>    
                <p class="mb-0 pt-1 px-4  black text-justify">
                    {{$setting['choose_us_text_1']}}
                </p>                        
            </div>
            <div class="col-lg-4 col-12 order-4 order-lg-5">
                <h6 class="mt-3 text-center">{{$setting['choose_us_heading_2']}}</h6>    
                <p class="pt-1 px-4 mb-0 black text-justify">
                 {{$setting['choose_us_text_2']}}
                </p>                        
            </div>

            <div class="col-lg-4 col-12 order-6 order-lg-6">
                <h6 class="mt-3 text-center">
                    {{$setting['choose_us_heading_3']}}</h6>    
                <p class="pt-1 px-4 mb-0 black text-justify">
                
                    {{$setting['choose_us_text_3']}}
                </p>            
            </div>
        </div>
    </div>

</section>

<div class="newsletterhome2 img-fluid w-100  text-center justify-content-center mb-md-0 mb-5 mt-md-0 mt-4 align-items-center" >

<div class="container">
    <div class="row">
        <div class="col-md-4 col-12 offset-md-4 ">
                <h6 class="white mx-2 mb-3 mt-0 pt-5 text-center front d-block">{{$setting['subscribe'] ?? '' }}</h6>  
            <form action="{{route('email.save')}}" method="POST"  enctype="multipart/form-data" id="form">
                @csrf
                <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" id="mail" name="email" placeholder="Your@email.com" class="form-control text-center">
                </div>
                <br/>
                <input type="submit" value="Subscribe Now!" class="btn btn-primary mb-5 px-4" />
            </form>
        </div>
    </div>
</div>  
</div>

@endsection
@section('js')
<script>

</script>
@endsection
