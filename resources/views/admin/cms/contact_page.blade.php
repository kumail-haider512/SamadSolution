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
                        <h5 class="card-title">Contact Us Banner</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_banner_heading">Contact us banner Heading</label>
                                    <input type="text" name="contact_banner_heading" id="contact_banner_heading" class="form-control" value="{{$setting['contact_banner_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_banner_image">Banner Image</label>
                                    <input type="file" name="contact_banner_image" id="course_banner_image" class="dropify" data-default-file="{{ asset($setting['contact_banner_image'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
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
                        <h5 class="card-title">Contact Us</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_us_heading_1">Contact us Heading # 1</label>
                                    <input type="text" name="contact_us_heading_1" id="contact_us_heading_1" class="form-control" value="{{$setting['contact_us_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_us_heading_2">Contact us Heading # 2</label>
                                    <input type="text" name="contact_us_heading_2" id="contact_us_heading_2" class="form-control" value="{{$setting['contact_us_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_us_time_text">Time Text</label>
                                    <input type="text" name="contact_us_time_text" id="contact_us_time_text" class="form-control" value="{{$setting['contact_us_time_text']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_us_Text">Text</label>
                                    <textarea name="contact_us_Text" id="contact_us_Text" class="form-control" rows="5">{{$setting['contact_us_Text']}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{$setting['facebook']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="twiter">Twiter</label>
                                    <input type="text" name="twiter" id="twiter" class="form-control" value="{{$setting['twiter']}}" autocomplete="off">
                                </div>
                            </div><div class="col-md-12">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{$setting['instagram']}}" autocomplete="off">
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
                        <h5 class="card-title">Map Location</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="location">Goal Location</label>
                                    <input type="text" id="location" name="location" class="form-control">
                                    <div id="region-map" style="height: 420px;width: 100%;margin-top: 10px;"></div>
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>

    function initService()
          {
            var map = new google.maps.Map(document.getElementById('region-map'), {
              zoom: 5, center: new google.maps.LatLng(40.7128, -74.0060),disableDefaultUI: true,
              zoomControl:true,
              fullscreenControl: true,
            });

            var options = {
              types: ['address']
            };

            var input_field = document.getElementById('location');
            var autocomplete = new google.maps.places.Autocomplete(input_field, options);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                var lat = place.geometry.location.lat();
                var lon = place.geometry.location.lng();
                $('#latitude').val(lat);$('#longitude').val(lon);
                
                var latlon = new google.maps.LatLng(lat,lon);
                printMarker(map, latlon);
                fitMap(map, latlon);
            });
          }
          function printMarker(map, latlon)
          {
            new google.maps.Marker({
              position: latlon,
              map: map
            });
          }
          function fitMap(map, latlon)
          {
            var latlngbounds = new google.maps.LatLngBounds();
            latlngbounds.extend(latlon);
            map.fitBounds(latlngbounds);
            var listener = google.maps.event.addListener(map, "idle", function() { 
              if (map.getZoom() > 10) map.setZoom(10); 
              google.maps.event.removeListener(listener); 
            });
          }
          $(document).ready(function(){
            google.load("maps", "3.exp", {callback: initService, other_params:'key=AIzaSyDQxDtoDoP_al1kFRr5txQZz4pL9fIacqw&libraries=places'});
          });
</script>
@endsection
