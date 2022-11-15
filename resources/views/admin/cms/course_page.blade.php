@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Course</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="course_banner_heading">Course banner Heading</label>
                                    <input type="text" name="course_banner_heading" id="course_banner_heading" class="form-control" value="{{$setting['course_banner_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="course_banner_image">Banner Image</label>
                                    <input type="file" name="course_banner_image" id="course_banner_image" class="dropify" data-default-file=" {{ asset($setting['course_banner_image'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                    		<div class="col-md-12">
                                <div class="form-group">
                                    <label for="course_search_heading">Search Heading Text</label>
                                    <input type="text" name="course_search_heading" id="course_search_heading" class="form-control" value=" {{$setting['course_search_heading']}}" autocomplete="off">
                                </div>
                            </div>
                    	</div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

