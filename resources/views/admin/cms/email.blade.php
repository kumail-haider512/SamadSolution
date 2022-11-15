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
                        <h5 class="card-title">Payment Email</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pay_email_title">Title</label>
                                    <input type="text" name="pay_email_title" id="pay_email_title" class="form-control" value="{{$setting['pay_email_title'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pay_email_head">Heading</label>
                                    <input type="text" name="pay_email_head" id="pay_email_head" class="form-control" value="{{$setting['pay_email_head'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pay_email_desc">Description</label>
                                    <textarea rows="3" name="pay_email_desc" id="pay_email_desc" class="form-control" autocomplete="off">{{$setting['pay_email_desc'] ?? ''}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pay_email_note">Footer Note</label>
                                    <input type="text" name="pay_email_note" id="pay_email_note" class="form-control" value="{{$setting['pay_email_note'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                    			<div class="form-group">
                    				<label for="pay_email_footer">Footer Image</label>
                    				<input type="file" name="pay_email_footer" id="pay_email_footer" class="dropify" data-default-file="{{ asset($setting['pay_email_footer']?? '')}}" accept=".png, .jpg, .jpeg, .gif, .svg">
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
                        <h5 class="card-title">Contact Email</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_email_title">Title</label>
                                    <input type="text" name="contact_email_title" id="contact_email_title" class="form-control" value="{{$setting['contact_email_title'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_email_head">Heading</label>
                                    <input type="text" name="contact_email_head" id="contact_email_head" class="form-control" value="{{$setting['contact_email_head'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_email_note">Footer Note</label>
                                    <input type="text" name="contact_email_note" id="contact_email_note" class="form-control" value="{{$setting['contact_email_note'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                    			<div class="form-group">
                    				<label for="contact_email_footer">Footer Image</label>
                    				<input type="file" name="contact_email_footer" id="contact_email_footer" class="dropify" data-default-file="{{ asset($setting['contact_email_footer']?? '')}}" accept=".png, .jpg, .jpeg, .gif, .svg">
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
