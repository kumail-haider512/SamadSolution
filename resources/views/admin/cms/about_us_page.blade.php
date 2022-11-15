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
                        <h5 class="card-title">About Us</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_banner_heading">About Banner Heading Text</label>
                                    <input type="text" name="about_banner_heading" id="about_banner_heading" class="form-control" value="{{$setting['about_banner_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_banner_image">Banner Image</label>
                                    <input type="file" name="about_banner_image" id="about_banner_image" class="dropify" data-default-file="
                                    {{ asset($setting['about_banner_image'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="about_heading_1">About Heading # 1</label>
                                    <input type="text" name="about_heading_1" id="about_heading_1" class="form-control" value="{{$setting['about_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="about_heading_2">About Heading # 2</label>
                                    <input type="text" name="about_heading_2" id="about_heading_2" class="form-control" value="{{$setting['about_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_image">About Image</label>
                                    <input type="file" name="about_image" id="about_image" class="dropify" data-default-file=" {{ asset($setting['about_image'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_content_1">About Content Para # 1</label>
                                    <textarea name="about_content_1" id="about_content_1" rows="10" class="form-control" autocomplete="off">{{$setting['about_content_1']}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_content_2">About Content Para # 2</label>
                                    <textarea name="about_content_2" id="about_content_2" rows="10" class="form-control " autocomplete="off">{{$setting['about_content_2']}}</textarea>
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
                        <h5 class="card-title">Who we are</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="who_we_are_heading">Heading</label>
                                    <input type="text" name="who_we_are_heading" id="who_we_are_heading" class="form-control" value="{{$setting['who_we_are_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="who_we_are_text_1">Para # 1</label>
                                    <textarea name="who_we_are_text_1" id="who_we_are_text_2" class="form-control" rows="10">{{$setting['who_we_are_text_1']}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="who_we_are_text_2">Para # 2</label>
                                    <textarea name="who_we_are_text_2" id="who_we_are_text_2" class="form-control" rows="10">{{$setting['who_we_are_text_2']}}</textarea>
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
@section('js')
    <script>
        CKEDITOR.replace( 'about' );
    </script>
@endsection
