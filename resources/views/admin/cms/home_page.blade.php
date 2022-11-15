@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Carousel Image</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-md-4">
                    			<div class="form-group">
                    				<label for="image_1">Image 1</label>
                    				<input type="file" name="image_1" id="image_1" class="dropify" data-default-file="{{ asset($setting['image_1'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
                    			</div>
                    		</div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image_2">Image 2</label>
                                    <input type="file" name="image_2" id="image_2" class="dropify" data-default-file="{{ asset($setting['image_2'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image_3">Image 3</label>
                                    <input type="file" name="image_3" id="image_3" class="dropify" data-default-file="{{ asset($setting['image_3'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="search_heading_text">Search Heading Text</label>
                    				<input type="text" name="search_heading_text" id="search_heading_text" class="form-control" value="{{$setting['search_heading_text']}}" autocomplete="off">
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

        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Popular Course Section</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="service_section_heading_text">Heading Text</label>
                    				<input type="text" name="service_section_heading_text" id="service_section_heading_text" class="form-control" value="{{$setting['service_section_heading_text']}}" autocomplete="off">
                    			</div>
                    		</div>
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="service_section_text">Text</label>
                    				<textarea name="service_section_text" id="service_section_text" class="form-control" rows="5">{{$setting['service_section_text']}}</textarea>
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
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Why Choose us</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="choose_heading_text">Choose us Heading</label>
                                    <input type="text" name="choose_heading_text" id="choose_heading_text" class="form-control" value="{{$setting['choose_heading_text']}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_image_1">Image 1</label>
                                    <input type="file" name="choose_us_image_1" id="choose_us_image_1" class="dropify" data-default-file="{{ asset($setting['choose_us_image_1'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_heading_1">Heading 1</label>
                                    <input type="text" name="choose_us_heading_1" id="choose_us_heading_1" class="form-control" value="{{$setting['choose_us_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_1">Text 1</label>
                                    <textarea rows="10" name="choose_us_text_1" id="choose_us_text_1" class="form-control">{{$setting['choose_us_text_1']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_image_2">Image 2</label>
                                    <input type="file" name="choose_us_image_2" id="choose_us_image_2" class="dropify" data-default-file="{{ asset($setting['choose_us_image_2'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_heading_2">Heading 2</label>
                                    <input type="text" name="choose_us_heading_2" id="choose_us_heading_2" class="form-control" value="{{$setting['choose_us_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_2">Text 2</label>
                                    <textarea rows="10" name="choose_us_text_2" id="choose_us_text_2" class="form-control">{{$setting['choose_us_text_2']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_image_3">Image 3</label>
                                    <input type="file" name="choose_us_image_3" id="choose_us_image_3" class="dropify" data-default-file="{{ asset($setting['choose_us_image_3'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="choose_us_heading_3">Heading 3</label>
                                    <input type="text" name="choose_us_heading_3" id="choose_us_heading_3" class="form-control" value="{{$setting['choose_us_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_3">Text 3</label>
                                    <textarea rows="10" name="choose_us_text_3" id="choose_us_text_3" class="form-control"> {{$setting['choose_us_text_3']}}</textarea>
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
