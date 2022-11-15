@extends('layouts.master')
@section('title','Detail')
@section('css')
<style>
	.clr{
        background-color: #54aed2 !important;
    }
</style>
@section('content')
<?php
include
error_reporting(0);
?>
	<div class="tour-title not-fixed center-image">
	    <img class="w-100 h-100" src="{{asset('images/course-bg.jpg')}}" alt="">
	    <h3 class="white text-center front shadow-text center-text">{{$item->name}}</h3>  
	</div>
	<section id="section3" class="tour-list-sidebar">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-8 single-tour">
                        <div class="mr-lg-5">    
                            <div class="tour-schedule">
                                <h6 class="black bold mt-5 mb-3">{{$item->name}}</h6>

                                <p>{{$setting['subCourse_subject'] ?? ''}}</p>
                                <div class="row">    
                                    <div class="col-md-4">
                                        <label>Categories</label>
                                        <div class="value">
                                            <span class="cat-links"><a href="#" rel="tag">{{$item->course->name}}</a></span>        
                                        </div>
                                    </div>
                                </div>

                                    <div class=" row ">
                                        <div class="col-md-3 text-left">
                                            <p>Code :{{$item->code}}</p>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <h4 >£ {{$item->price}}</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="btn col-sm-12 my-2 btn-primary clr"  href="{{route('checkout',$item->id)}}" role="button">Buy Now</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="btn col-sm-12 my-2 btn-primary"  href="tel:+4403330116266" role="button">Call for Price</a>
                                        </div>
                                    </div> 
                                <img class="img-fluid" src="{{ asset($item->image) }}" alt="">    

                                <p>{!!$item->description!!}</p>

                            </div>    
                        </div>    
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-container py-3">
                            <h4 class="black bold mt-3 px-4 pb-2 text-center">Search your Course</h4>
                            <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4">
                                <div class="form-group row">
                                	<div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName32" name="course_id">
                                                <option selected disabled value="">Select Course..</option>
                                                @foreach($list as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>                                                   
                                            <div class="input-group-append">
                                                <div class="input-group-text"> 
                                                 	<i class="fas fa-calendar"></i>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control" id="inlineFormInputName1" name="subcourse_id">
                                                <option selected>Select Course</option>
                                            </select>
                                                <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div> 

                                <div class="form-group row">
                                	<div class="col-sm-12">
                                        <button type="submit" class="btn col-sm-12 my-2 btn-primary">Search</button>

                                    </div>
                                </div>
                            </form>
                            </div>

                            <div class="more-info mx-auto my-4">
                                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                                <div class="pb-2">                      
                                    <a href="tel:+133331111"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>{{$setting['footer_phone']}}</h5></a>  
                                    <a href="mailto:hello@ourcompany.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>{{$setting['footer_email']}}</h5></a>                        
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
@endsection