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
                        <h5 class="card-title">Stripe Key Setting</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="stripe_key">STRIPE_KEY</label>
                                    <input type="text" name="stripe_key" id="stripe_key" class="form-control" value="{{$setting['stripe_key'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="stripe_secret">STRIPE_SECRET</label>
                                    <input type="text" name="stripe_secret" id="stripe_secret" class="form-control" value="{{$setting['stripe_secret'] ?? ''}}" autocomplete="off">
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
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Logos</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    			<div class="form-group">
                    				<label for="favicon">Favicon</label>
                    				<input type="file" name="favicon" id="favicon" class="dropify" data-default-file="{{ asset($setting['favicon'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                    			</div>
                    		</div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    			<div class="form-group">
                    				<label for="logo_light"> Header Logo</label>
                    				<input type="file" name="logo_light" id="logo_light" class="dropify" data-default-file="{{ asset($setting['logo_light'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                    			</div>
                    		</div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Footer_logo"> Footer Logo</label>
                                    <input type="file" name="Footer_logo" id="Footer_logo" class="dropify" data-default-file="{{ asset($setting['Footer_logo'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                    	</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_heading">Footer Heading # 1</label>
                                    <input type="text" name="footer_heading" id="footer_heading" class="form-control" value="{{$setting['footer_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_heading_2">Footer Heading # 2</label>
                                    <input type="text" name="footer_heading_2" id="footer_heading_2" class="form-control" value="{{$setting['footer_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_address">Footer Adderss</label>
                                    <input type="text" name="footer_address" id="footer_address" class="form-control" value="{{$setting['footer_address']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_phone">Footer Phone no</label>
                                    <input type="text" name="footer_phone" id="footer_phone" class="form-control" value="{{$setting['footer_phone']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_email">Footer Email</label>
                                    <input type="text" name="footer_email" id="footer_email" class="form-control" value="{{$setting['footer_email']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="footer_para">Footer Description</label>
                                    <textarea name="footer_para" id="footer_para" rows="10" class="form-control " autocomplete="off">{{$setting['footer_para']}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_1">Instagram Gallery img 1</label>
                                    <input type="file" name="insta_img_1" id="insta_img_1" class="dropify" data-default-file="{{ asset($setting['insta_img_1']) ?? ''}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_2">Instagram Gallery img 2</label>
                                    <input type="file" name="insta_img_2" id="insta_img_2" class="dropify" data-default-file="{{ asset($setting['insta_img_2']) ?? '' }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_3">Instagram Gallery img 3</label>
                                    <input type="file" name="insta_img_3" id="insta_img_3" class="dropify" data-default-file="{{ asset($setting['insta_img_3']) ?? ''}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_4">Instagram Gallery img 4</label>
                                    <input type="file" name="insta_img_4" id="insta_img_4" class="dropify" data-default-file="{{ asset($setting['insta_img_4']) ?? ''}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_5">Instagram Gallery img 5</label>
                                    <input type="file" name="insta_img_5" id="insta_img_5" class="dropify" data-default-file="{{ asset($setting['insta_img_5']) ?? ''}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="insta_img_6">Instagram Gallery img 6</label>
                                    <input type="file" name="insta_img_6" id="insta_img_6" class="dropify" data-default-file="{{ asset($setting['insta_img_6']) ?? ''}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subCourse_subject">SubCourse Subject</label>
                                    <input type="text" name="subCourse_subject" id="subCourse_subject" class="form-control" value="{{$setting['subCourse_subject'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subscribe">Subscribe</label>
                                    <input type="text" name="subscribe" id="subscribe" class="form-control" value="{{$setting['subscribe'] ?? ''}}" autocomplete="off">
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
