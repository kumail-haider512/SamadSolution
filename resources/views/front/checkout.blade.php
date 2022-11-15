@extends('layouts.master')
@section('title','Detail')
@section('css')
<style>
	.input{
		width: 50% !important;
	}
	.label-2
	{
	    font-weight: 600 !important;
	    font-size: 16.5px !important;
	}
	
</style>
@section('content')
<div class="tour-title not-fixed center-image">
    <img class="w-100 h-100" src="{{asset('images/course-bg.jpg')}}" alt="">
    <h3 class="white text-center front shadow-text center-text">{{$item->name}}</h3>  
</div>
<div class="container">
	<div class="row mb-5">
		<div class="col-md-12 text-center">
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th>Course</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>{{$item->name}}</td>
					<td>£ {{$item->price}}</td>
				</tr>
				<tr>
					<td class="text-right">SubTotal</td>
					<td>£ {{$item->price}}</td>
				</tr>
				<tr>
					<td class="text-right" >Total</td>
					<td>£ {{$item->price}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12 text-center">
			<h4>Additional Information</h4>
		</div>
	</div>
	<div class="row mb-5">
		@if(!Auth::check())
		<div class="col-md-4">
			<div class="form-group">
				<label class="label-2 mb-2">Enter Email</label>
				<input type="email" name="email_old" class="form-control email_old" placeholder="Please enter email.." required>
			</div>
		</div>
		
		@endif
		<div class=" @if(Auth::check()) col-md-12 @else col-md-8 @endif">
			<div class="from-group">
				<label class="label-2 mb-2">Enter Note</label>
				<input type="text" class="form-control notes_old" name="notes_old" placeholder="Note to administrater..">
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-danger" role="alert" style="display:none;">
                As guest need to enter email
            </div>
        </div>
	</div> 

	<div class="row mb-5">
		<div class="col-md-6">
			<img class="img-fluid" src="{{asset('images/for-all-trade-courses.png')}}" alt="">

		</div>
		<div class="col-md-6">
            <div class="form-group">
               	<button type="button" class="btn-primary btn-checkout btn-lg w-100">Checkout</button>
            </div>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12">	
			<h5><b>Leave a Reply</b></h5>
			<p>Your email address will not be published. Required fields are marked *</p>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="from-group">
			<textarea type="comment" class="form-control" name="" placeholder="Comment"></textarea> 
				
			</div>
		</div>
	</div>
</div>

<form action="{{route('paypal.save')}}" method="POST"  enctype="multipart/form-data" id="form">
	@csrf
	<input type="hidden" name="course_name" value="{{$item->name}}">
	<input type="hidden" name="course_price" value="{{$item->price}}" class="amount">
	<input type="hidden" name="email" value="" class="email">
	<input type="hidden" name="notes" value="" class="notes">
	<div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="checkoutLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title head" id="checkoutLabel">Payment Mehtod</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <div class="row mt-3">
	                    <div class="col-md-12">
	                        <label class="shadow label-2">
	                            <img src="{{asset('images/paypal-logo.png')}}" class="img-fluid w-100 h-100">
	                        </label>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label class="label-2">Full Name</label>
	                            <input type="text" name="user_name" class="form-control" value="{{Auth::user()->name ?? ''}}" required>
	                       </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label class="label-2">Phone Number</label>
	                            <input type="number" name="user_phone" class="form-control" value="{{Auth::user()->phone ?? ''}}" required>
	                       </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label class="label-2">Email </label>
	                            <input type="email" name="user_email" class="form-control" value="{{Auth::user()->email ?? ''}}" readonly>
	                       </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label class="label-2">Postal Code </label>
	                            <input type="text" name="user_postal" class="form-control" value="{{Auth::user()->postal ?? ''}}" required>
	                       </div>
	                    </div>
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label class="label-2">Address </label>
	                            <input type="text" name="user_add" class="form-control" value="{{Auth::user()->address ?? ''}}" required>
	                       </div>
	                    </div>
	                    <div class="col-md-12">
	                    	<div class="form-group">
	                    		<input type="checkbox" name="term" class="" required>
	                    		<label class="label-2">Please tick mark to accept our Terms & Conditions <a href="{{route('terms')}}" target="_blank">Terms & Conditions</a></label>
	                    	</div>
	                    </div>
	                    {{--<div class="col-md-12">
	                        <div class="form-group">
	                            <div class="g-recaptcha" data-sitekey="6LeB94UgAAAAAL3c9Q_sEIE6pkGNGYQ0RFBFdlqk"></div>
	                        </div> 
	                    </div>--}}    
	                </div>
	            </div>
	            <div class="modal-footer">
	                <div class="col-md-12">
	                    <button type="submit" class="btn-primary font-weight-bold btn-lg payment-buttons" id="purchase-btn">Confirm Payment</button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</form>
@endsection
@section('js')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	$(document).on('click','.btn-checkout',function(){
	    var loggedIn={!! json_encode(Auth::check()) !!};
	    if(loggedIn)
	    {
	        var email=$('.email_old').val();
    		$('.email').val(email);
    		$('.notes').val(note);
	        $('#checkout').modal('show');
	    }
		var note=$('.notes_old').val();
		if($('.email_old').val().length == 0)
		{
		    $('.alert-danger').css('display','block');
		    return false;
		}
		else
		{
		    $('.alert-danger').css('display','none');
		    var email=$('.email_old').val();
    		$('.email').val(email);
    		$('.notes').val(note);
    		$('input[name="user_email"]').val(email);
    		$('#checkout').modal('show');
		}
	})
	$(document).on('click','#purchase-btn',function(e){
	    // e.preventDefault();
	    var response = grecaptcha.getResponse();
	    if(response.length == 0)
        {
            alert('complete cpatch first');
            return false;
        }
        else{
            $('#form').submit();
        }
	})
</script>
@endsection