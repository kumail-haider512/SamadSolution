@extends('layouts.master')
@section('title','Course')
@section('css')

@endsection
@section('content')

<div class="tour-title not-fixed center-image">
    <img class="w-100 h-100" src="{{ asset($setting['course_banner_image'])}}" alt="">
    <h3 class="white text-center front shadow-text center-text">{{$setting['course_banner_heading']}}</h3>
</div>


<section id="section3">
    <div class="container formhome2 text-center justify-content-center align-items-center pb-4">
        <h4 class="black mx-2 mb-3 mt-0 pt-4 text-center bold  d-block">{{$setting['course_search_heading']}}</h4>  
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
                
                <div class="gal">
                    @foreach($list as $item )
                    <div class="masonry-full mb-4">
                        <div class="masonry-hover">
                            <div class="masonry-item">
                                <img class="masonry-image" src="{{ asset($item->image) }}" alt="">
                                <div class="masonry-info text-center front">
                                    <h6 class="white shadow-text front">{{$item->name}}</h6>
                                    <a class="btn btn-outline-light px-3 front" href="{{route('subcourse',createSlug($item->name))}}" role="button">SEE MORE</a>
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


@endsection
@section('js')
<script>
    
</script>
@endsection
