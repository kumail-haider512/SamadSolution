@extends('layouts.master')
@section('content')
<?php
include
error_reporting(0);
?>
<div class="tour-title not-fixed center-image">
    <img class="w-100 h-100" src="{{asset('images/course-bg.jpg')}}" alt="">
    <h3 class="white text-center front shadow-text center-text">{{$course->name}}</h3>
</div>

<section id="section-masonry ">

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        
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


@endsection
