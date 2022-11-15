@extends('layouts.master')
@section('content')

<!-- Aler Start -->
<div class="" id="alertDiv">
</div>
<!-- Aler End -->
<section class="wskill-main-slider">
    <ul class="vector-bg-icons mb-0 w-100 p-0 m-0">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <h1 class="font35 playfair font-weight-black py-220 text-white mb-0 text-center" data-aos="zoom-in">CSCS</h1>
    </div>
</section>
<style>
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 25%;
        bottom: auto;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 50px;
        height: 50px;
        text-align: center;
        /*padding: 6px 0;*/
        font-size: 18px;
        line-height: 40px;
        border-radius: 50%;
        background-color: #ccc;
        border:none;
    }
    .btn-circle.btn-primary{background-color: #fa5b0f;color: #fff;}
    .wskill_form_wizard .get-input-fields{color:#fefefe; }
    .wskill_form_wizard .nextBtn,.wskill_form_wizard .nextBtn1{border-radius: 25px;padding: 12px 50px;display: inline-block;font-size: 14px;background-color: #fa5b0f;border:0px;}
    .wskill_form_wizard .nextBtn:hover,.wskill_form_wizard .nextBtn1:hover{background-color: #333842;
        -webkit-box-shadow: 1px 6px 11px 1px rgba(0,0,0,0.2);
        -moz-box-shadow: 1px 6px 11px 1px rgba(0,0,0,0.2);
        box-shadow: 1px 6px 11px 1px rgba(0,0,0,0.2);}
    .custom-checkbox{
        width: 16px;
        height: 16px;
        display: inline-block;
        position: relative;
        z-index: 1;
        top: 3px;

    }

    .custom-checkbox input[type="checkbox"]{
        margin: 0;
        position: absolute;
        z-index: 2;
        cursor: pointer;
        outline: none;
        opacity: 0;
    }
    .custom_style_checkbox  i{vertical-align: middle;
        height: 102px;
        width: 102px;
        border-radius: 50%;
        color: #fefefe;
        margin: 0 auto 20px;
        border: 3px solid #fefefe;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        justify-content: center;
        align-items: center;
        background: transparent;position: relative;}
    .custom_style_checkbox  i:before{position: absolute;
        left: 50%;
        transform: translate(-50%,-50%);
        top: 50%;}
    .custom-checkbox.selected .custom_style_checkbox i{background-color: #fff;color: #fa5b0f;}
    label.select_style_chnage i{background-color: #fa5b0f;border-color: #fa5b0f;}
    .custom_style_checkbox label:before{font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f067";position: absolute;
        top: 50%;
        transform: translateY(-50%);right: 0px;color:#fff;}
    /*.custom_style_checkbox label:last-child{padding-right: 30px;}*/
    .custom_style_checkbox label.remove_plus:before{content: unset;}
    .checkbox_content .select-expiry option{color: #000;}
    @media  only screen and (max-width:767px){
        .custom_style_checkbox label::before {
            top: 88%;
            transform: translate(-80%,-50%);
            right: auto;
            left: 52%;
        }
        .custom_style_checkbox h6{margin-bottom: 50px;}
        .stepwizard-row::before {top: 20%;  }
        .stepwizard-step .font18{font-size: 16px;}
    }
</style>
<section class="about_us our_course_page wskill_form_wizard py-60">
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="orange btn btn-primary btn-circle">1</a>
                    <p class="text-white rubik font18">Personal Details</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="orange btn btn-default btn-circle" disabled="disabled">2</a>
                    <p class="text-white rubik font18">Product Details</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="orange btn btn-default btn-circle" disabled="disabled">3</a>
                    <p class="text-white rubik font18">Order Summary</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="orange btn btn-default btn-circle" disabled="disabled" id="lastStep">4</a>
                    <p class="text-white rubik font18">Finish</p>
                </div>
            </div>
        </div>
        <form name="basicForm" id="basicForm" method="post" action="return true">
            <input type="hidden" name="_token" value="Y0is6eTgqT7AWUGoeOgJ3BChqEHluDODHIwuoDsM">
            <div class="setup-content pt-5" id="step-1">
                <h3 class="text-white rubik mb-5">Let's start with the basic information</h3>
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <input name="firstName" id="firstName" type="text" class="form-control get-input-fields rounded-0" placeholder="First Name"  required/>
                    </div>
                    <div class="form-group col-md-6">
                        <input name="lastName" id="lastName" type="text"  class="form-control get-input-fields rounded-0" placeholder="Last Name" required/>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <input name="phone" id="phone" type="text" class="form-control get-input-fields rounded-0" placeholder="Phone Number"  required/>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="userEmail" id="userEmail" class="form-control get-input-fields rounded-0" placeholder="Email Id" required/>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="#" class="orange font16 font-weight-medium rubik border-bottom-color pb-2" data-target="#helpModal" data-toggle="modal">Need Help?</a>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg ml-auto" type="button" >Next</button>
                </div>
            </div>
            <div class=" setup-content pt-5" id="step-2">
                <h3 class="text-white rubik mb-5 ">What are you looking for?</h3>
                <div class="custom_style_checkbox">
                   <div class="row">
                        <label class="col-12 col-md-4 text-center">
                            <input type="checkbox" name="cscs[]" value="Test">
                            <i class="fa fa-desktop font35"></i>
                            <h6 class="text-new pt-2 text-white pl-3">Test</h6>
                        </label>
                        <label class="col-12 col-md-4 text-center">
                            <input type="checkbox" name="cscs[]" value="Card">
                            <i class="fa fa-id-card font35"></i>
                            <h6 class="text-new pt-2 text-white pl-3">Card</h6>
                        </label>
                        <label class="col-12 col-md-4 text-center remove_plus">
                            <input type="checkbox" name="cscs[]" value="Course">
                            <i class="fa fa-graduation-cap font35"></i>
                            <h6 class="text-new pt-2 text-white pl-3">Course</h6>
                        </label>
                    </div>
                </div>
                <div id="err_checkbox">
                	
                </div>
                <div class="checkbox_content mt-3">
                    <div class="form-group d-none" id="Course">
                        <h4 class="text-white rubik mb-3 font18">Course</h4>
                        <select class="form-control select-expiry get-input-fields rounded-0" id="courseInfo" name="courseInfo">
                            <option value="0">Select Course</option>
                            <option value="95" data-price="150">Health &amp; Safety Online Course For Green Card</option>
							<option value="96" data-price="120">One Day Health &amp; Safety Classroom Course For Green Card (London Only)</option>
                		</select>
					</div>
                    <div id="Card" class="d-none">
                        <div class="form-group">
                            <h4 class="text-white rubik mb-3 font18">Card</h4>
                            <select class="form-control select-expiry get-input-fields rounded-0" id="cardInfo" name="cardInfo">
                                <option value="0">Select Card</option>
                                <option value="2" data-new-price="49" data-renew-price="49" data-replace-price="49">Red (Apprentice)</option>
                                <option value="3" data-new-price="49" data-renew-price="49" data-replace-price="49">Red (Experienced Worker)</option>
                                <option value="4" data-new-price="49" data-renew-price="49" data-replace-price="49">Red (Experienced Technician, Supervisor or Manager)</option>
                                <option value="5" data-new-price="49" data-renew-price="49" data-replace-price="49">Red (Provisional)</option>
                                <option value="6" data-new-price="49" data-renew-price="49" data-replace-price="49">Red (Trainee)</option>
                                <option value="7" data-new-price="49" data-renew-price="49" data-replace-price="49">Gold (Advanced Craft)</option>
                                <option value="8" data-new-price="49" data-renew-price="49" data-replace-price="49">Black (Manager)</option>
                                <option value="9" data-new-price="49" data-renew-price="49" data-replace-price="49">White (Professionally Qualified Person)</option>
                                <option value="10" data-new-price="49" data-renew-price="49" data-replace-price="49">White (Academically Qualified Person)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h4 class="text-white rubik mb-3 font18">Card Type</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card_type" id="new_card1" value="new" checked>
                                <label class="form-check-label text-white" for="new_card1">New</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card_type" id="new_card2" value="renew">
                                <label class="form-check-label text-white" for="new_card2">Renew</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card_type" id="new_card3" value="replace">
                                <label class="form-check-label text-white" for="new_card3">Replace</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-none" id="Test">
                        <h4 class="text-white rubik mb-3 font18">Test Type</h4>
                        <select class="form-control select-expiry get-input-fields rounded-0" id="testType" name="testType">
                            <option value="0">Select Test Card</option>
                            <option value="1" data-price="42">Operative Test</option>
                            <option value="2" data-price="42">Supervisors Test</option>
                            <option value="3" data-price="42">Managers &amp; Professionals</option>
                            <option value="4" data-price="42">Plumbing or Gas Test</option>
                            <option value="5" data-price="42">Highway works test</option>
                            <option value="6" data-price="42">HVACR Test (Pipefitting and Welding)</option>
                            <option value="7" data-price="35">HVACR Test (Ductwork)</option>
                            <option value="8" data-price="35">Demolition Test</option>
                            <option value="9" data-price="35">Lifts and Escalators Test</option>
                            <option value="10" data-price="35">Working at Height Test</option>
                            <option value="11" data-price="35">HVACR Test (Refrigeration and Air Conditioning)</option>
                            <option value="12" data-price="35">Tunnelling Test</option>
                            <option value="13" data-price="35">HVACR Test (Services and Facilities)</option>
                            <option value="14" data-price="35">HVACR Test (Heating and Plumbing)</option>
                            <option value="15" data-price="35">Operative Test for Labourers with L1 Award</option>
                            <option value="16" data-price="35">Triple bar nuclear new build sites</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg mt-5 previousBtn nextBtn1">Previous</button>
                <button class="btn btn-primary nextBtn btn-lg float-right mt-5" type="button" onclick="checkOrder()">Next</button>
            </div>
            <div class="row setup-content pt-5 checkoutForm" id="step-3">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="checkout-left-side">
                        <h2 class="rubik font-weight-medium font22 colorf7f7f7 pb-4 mb-5 all_title text-white">Card Details</h2>
                        <div class="row mx-0 w-100">
                            <div class="form-group col-12 pl-0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="radio" name="pay_with" id="pay_with1" value="1" onchange="paymentwith()" checked>
                                    <label class="form-check-label font18 text-white rubik font-weight-medium" for="pay_with1">Pay with credit/debit card</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay_with" id="pay_with2" value="2" onchange="paymentwith()">
                                    <label class="form-check-label font18 text-white rubik font-weight-medium" for="pay_with2">Pay with bank transfer</label>
                                </div>
                            </div>
                            <div class="col-12 p-0 col-md-12 mt-1" id="stripe_form">
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="Credit Card Number" name="card_number" id="card_number">
                                </div>
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="Card Holder's Name" name="card_name" id="card_name">
                                </div>
                                <div class="row m-0">
                                    <div class="form-group col-12 col-md-6 pl-0">
                                        <select class="form-control select-expiry get-input-fields rounded-0 text-white" id="expiry_month" name="expiry_month">
                                            <option value="">Expiry Month</option>
                                            <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                                
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-6 pl-0">
                                        <select class="form-control select-expiry get-input-fields rounded-0 text-white" id="expiry_year" name="expiry_year">
                                            <option value="">Expiry Year</option>
                                            <option value='2021'>2021</option><option value='2022'>2022</option><option value='2023'>2023</option><option value='2024'>2024</option><option value='2025'>2025</option><option value='2026'>2026</option><option value='2027'>2027</option><option value='2028'>2028</option><option value='2029'>2029</option><option value='2030'>2030</option><option value='2031'>2031</option><option value='2032'>2032</option><option value='2033'>2033</option><option value='2034'>2034</option><option value='2035'>2035</option><option value='2036'>2036</option><option value='2037'>2037</option><option value='2038'>2038</option><option value='2039'>2039</option><option value='2040'>2040</option><option value='2041'>2041</option><option value='2042'>2042</option><option value='2043'>2043</option><option value='2044'>2044</option><option value='2045'>2045</option><option value='2046'>2046</option><option value='2047'>2047</option><option value='2048'>2048</option><option value='2049'>2049</option><option value='2050'>2050</option><option value='2051'>2051</option>     
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="CVV / Security Number" name="cvv" id="cvv">
                                </div>
                            </div>
                            <div class="d-none col-12 p-0" id="bank_transfer">
                                <div class="form-group col-12 pl-0">
                                    <p class="form-check-label font15 colorf7f7f7 rubik font-weight-normal">Please deposit the amount in following Account:</p>
                                    <p class="form-check-label font15 colorf7f7f7 rubik font-weight-normal">Bank Name: HSBC</p>
                                    <p class="form-check-label font15 colorf7f7f7 rubik font-weight-normal">Account Number: 63838544</p>
                                    <p class="form-check-label font15 colorf7f7f7 rubik font-weight-normal">Name: Workskills Training Ltd</p>
                                    <p class="form-check-label font15 colorf7f7f7 rubik font-weight-normal">Sort Code: 40-06-30</p>
                                </div>
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="Account Holder Name" name="account_name" id="account_name">
                                </div>
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="Transaction ID" name="transaction_id" id="transaction_id">
                                </div>
                                <div class="form-group col-12 pl-0">
                                    <input type="text" class="form-control font15 rubik font-weight-normal colorccc rounded-0 get-input-fields" placeholder="Note" name="note" id="note">
                                </div>
                                
                            </div>
                            <div class="col-12 p-0">
                                <div class="form-group col-12 pl-0">
                                    <div class="d-flex">
                                        <input type="checkbox" class="font15 rubik font-weight-normal colorccc rounded-0" name="term_condition" id="term_condition"> <span class="pl-2 orange font-weight-bold">I have read and agree to the <a href="#" target="_blank" class="orange">terms and conditions</a> and <a href="#" target="_blank" class="orange">privacy policy</a> statement.</span>
                                    </div>
                                    <div id="errmsg1">
                                    	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="checkout-right-side">
                        <h2 class="rubik font-weight-medium font22 colorf7f7f7 pb-4 mb-5 all_title">Order Summary</h2>
                        <div class="checkout-total">
                            <div class="d-flex">
                                <p class="font18 colorf7f7f7 rubik font-weight-medium w-50">Order details :</p>
                                <p class="font18 colorf7f7f7 rubik font-weight-normal ml-auto text-right w-50" id="orderDetails">Health &amp; Safety Online Course For Green Card</p>
                            </div>
                            
                            <div class="d-flex">
                                <p class="font18 colorf7f7f7 rubik font-weight-medium">Pay ammount :</p>
                                <p class="font18 colorf7f7f7 rubik font-weight-normal ml-auto" id="pay_amount">£150</p>
                            </div>
                            <input type="hidden" name="course_price" id="course_price" value="0">
                            <input type="hidden" name="orderType" id="orderType" value="0">
                            <button type="submit" class="process_checkout nextBtn1  text-center w-100 border-0 mt-5 text-uppercase text-white">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary nextBtn1 btn-lg mt-5 previousBtn">Previous</button>
                </div>
        	</div>
            <div class="row setup-content pt-5" id="step-4">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center tankyou-title rubik font-weight-medium font60 text-white pb-4">THANK YOU</h1>
                    <h3 class="rubik font16 text-white text-center font-weight-normal"></h3>
                </div>
            </div>
    	</form>
    </div>
</section>
<div class="modal fade wskill_sign_in_popup" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-5 px-3 px-md-4 px-lg-4">
            <div class="modal-header border-bottom-0 py-3">
                <img src="img/pop-up-logo.png" class="img-fluid mx-auto">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <div class="sign_in_form">
                    <div id="help_message"></div>
                    <form id="help_form" name="help_form" method="post" action="#">
                        <input type="hidden" name="_token" value="Y0is6eTgqT7AWUGoeOgJ3BChqEHluDODHIwuoDsM">
                        <div class="form-group mb-4">
                            <input type="text" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="firstName" name="firstName" placeholder="First Name*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="lastName" name="lastName" placeholder="Last Name*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="userEmail" name="userEmail" placeholder="Email*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="phone" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group mb-4">
                            <textarea name="message" id="message" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" placeholder="Message*"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary sign_in_btn bgorange py-3 text-center text-uppercase rubik font-weight-medium font16 w-100 border-0 mt-2">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer end -->
<!---- modal start ---->
<div class="modal fade wskill_sign_in_popup" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-5 px-3 px-md-4 px-lg-5">
            <div class="modal-header border-bottom-0 py-3">
                <img src="img/pop-up-logo.png" class="img-fluid mx-auto">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <div class="sign_in_form">
                    <div id="login_messages"></div>
                    <form id="signin_form" name="signin_form" method="post" action="#">
                        <input type="hidden" name="_token" value="IisSaA4lQFKfPhjii2neceHR9lT2pI73HPv1vyMy">
                        <div class="form-group mb-4">
                            <input type="email" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="userEmail" name="userEmail" placeholder="E-mail">
                        </div>
                        <div class="form-group mb-4" >
                            <input type="password" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="pass" name="pass" placeholder="Password">
                        </div>
                        <input type="hidden" name="recaptchaLogin" id="recaptchaLogin">
                        <button type="submit" class="btn btn-primary sign_in_btn bgorange py-3 text-center text-uppercase rubik font-weight-medium font16 w-100 border-0 mt-2">sign in</button>
                        <a href="#" class="btn btn-primary google_pluse_btn bgorange py-3 text-center  rubik font-weight-normal font14 w-100 border-0 mt-4"><img src="img/wskill-google-pluse-icon.png" class="mr-3">Sign in with google</a>
                        <div class="forgot-password mt-3 d-flex">
                            <a href="javascript:void(0)" class="color8d8e8e rubik font-weight-normal font14 my-auto" onclick="showModal('forgot')">Forgot password?</a>
                            <a href="javascript:void(0)" class="orange font16 font-weight-medium rubik  float-right border-bottom-color pb-2 ml-auto" onclick="showModal('signup')" data-toggle="modal">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade wskill_sign_in_popup" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-5 px-3 px-md-4 px-lg-5">
            <div class="modal-header border-bottom-0 py-3">
                <img src="img/pop-up-logo.png" class="img-fluid mx-auto">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <div class="sign_in_form">
                    <div id="signup_message"></div>
                    <form id="signup_form" name="signup_form" method="post" action="#">
                        <input type="hidden" name="_token" value="IisSaA4lQFKfPhjii2neceHR9lT2pI73HPv1vyMy">
                        <div class="form-group mb-4">
                            <input type="text" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="firstName" name="firstName" placeholder="First name*">
                        </div>
                        <div class="form-group mb-4" >
                            <input type="text" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="lastName" name="lastName" placeholder="Last name*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="userEmail" name="userEmail" placeholder="Email*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="userPass" name="userPass"  placeholder="Password*">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="cnfPass" name="cnfPass" placeholder="Confirm password*">
                        </div>
                        <div class="form-group mb-4">
                            <label for="term_checkbox" class="text-left color666666 rubik font-weight-normal font14 mt-3"><input type="checkbox" name="term_checkbox" id="term_checkbox"> I have read and agree to the <a class="orange font-weight-medium" href="#" target="_blank">terms and conditions</a> and <a class="orange font-weight-medium" href="#" target="_blank">privacy statement</a>.</label>
                            <div id="err_chk"></div>
                        </div>
                        <input type="hidden" name="recaptchaSignup" id="recaptchaSignup">
                        <button type="submit" class="btn btn-primary sign_in_btn bgorange py-3 text-center text-uppercase rubik font-weight-medium font16 w-100 border-0 mt-2 signinbtn">sign up</button>
                        <a href="#" class="btn btn-primary google_pluse_btn bgorange py-3 text-center  rubik font-weight-normal font14 w-100 border-0 mt-4"><img src="img/wskill-google-pluse-icon.png" class="mr-3">Sign up with google</a>
                        <p class="text-center color666666 rubik font-weight-normal font14 mt-3">Already have an account? <a href="javascript:void(0)" class="orange font-weight-medium" onclick="showModal('signin')" data-toggle="modal"> Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade wskill_sign_in_popup" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-5 px-3 px-md-4 px-lg-5">
            <div class="modal-header border-bottom-0 py-3">
                <img src="img/pop-up-logo.png" class="img-fluid mx-auto">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <div class="sign_in_form">
                    <div id="forgot_message"></div>
                    <form id="forgot_form" name="forgot_form" method="post" action="#">
                        <input type="hidden" name="_token" value="IisSaA4lQFKfPhjii2neceHR9lT2pI73HPv1vyMy">
                        <div class="form-group mb-4">
                            <input type="email" class="form-control sign_in_form_field w-100 rounded-0 h-auto font15 rubik font-weight-normal" id="userEmail" name="userEmail" placeholder="Email*">
                        </div>
                        <button type="submit" class="btn btn-primary sign_in_btn bgorange py-3 text-center text-uppercase rubik font-weight-medium font16 w-100 border-0 mt-2">send</button>
                        <p class="text-center color666666 rubik font-weight-normal font14 mt-3">Already have an account? <a href="javascript:void(0)" class="orange font-weight-medium" onclick="showModal('signin')" data-toggle="modal"> Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---- modal end ---->

<!-- sticky-header script -->

    <script>
        function openTermsPage(){
            window.open('#', '_blank');
            window.open('#', '_blank');
        }
        $(document).ready(function () {
            jQuery.validator.addMethod('selectcheck', function (value) {
                return (value != '0');
            }, "");
            $.validator.addMethod ("exp_month_Call", function(value, element) {
                value = parseInt(value, 10);
                var year         = $("#exp_year option:selected" ).val(),
                    currentMonth = new Date().getMonth() + 1,
                    currentYear  = new Date().getFullYear();
                if (value < 0 || value > 12) {
                    return false;
                }
                if (year == '') {
                    return true;
                }
                year = parseInt(year, 10);
                if (year > currentYear || (year == currentYear && value > currentMonth)) {
                    //element.updateStatus('exp_year', 'VALID');
                    return true;
                } else {
                    return false;
                }
            },'The expiration month is Expired');
            $.validator.addMethod ("exp_year_Call", function(value, element) {
                value = parseInt(value, 10);
                var month        = $("#exp_month option:selected" ).val(),
                    currentMonth = new Date().getMonth() + 1,
                    currentYear  = new Date().getFullYear();
                if (value < currentYear || value > currentYear + 100) {
                    return false;
                }
                if (month == '') {
                    return false;
                }
                month = parseInt(month, 10);
                if (value > currentYear || (value == currentYear && month > currentMonth)) {
                    //validator.updateStatus('exp_month', 'VALID');
                    return true;
                } else {
                    return false;
                }
            },'The expiration year is Expired');
            $.validator.addMethod ("cvv_Call", function(value, element) {
                return this.optional( element ) || /^[0-9]{3,4}$/.test( value );
            },'The expiration year is Expired');
            $("#basicForm").validate({
                rules:{
                    firstName:{required:true},
                    lastName:{required:true},
                    phone:{required:true},
                    userEmail:{required:true},
                    courseInfo:{selectcheck:true},
                    testType:{selectcheck:true},
                    cardInfo:{selectcheck:true},
                    'cscs[]':{required:true},
                    card_number: {required: true, creditcard:true},
                    card_name:{required: true},
                    expiry_month:{required: true},
                    expiry_year:{required: true},
                    cvv:{required: true,cvv_Call: true},
                    account_name:{required:true},
                    transaction_id:{required:true},
                    term_condition:{required: true},
                },
                messages:{
                    firstName:{required:"This field is required"},
                    lastName:{required:"This field is required"},
                    phone:{required:"This field is required"},
                    userEmail:{required:"This field is required"},
                    courseInfo:{selectcheck:"This field is required"},
                    testType:{selectcheck:"This field is required"},
                    cardInfo:{selectcheck:"This field is required"},
                    'cscs[]':{required:"Please select at least one option"},
                    card_number: {required: "The credit card number is required and can&#039;t be empty", creditcard:'The credit card number is invalid'},
                    card_name:{required: "The card holder name is required and can&#039;t be empty"},
                    expiry_month:{required: "The expiration month is required"},
                    expiry_year:{required: "The expiration year is required"},
                    cvv:{required: "The security code is required",cvv_Call: 'Invalid security code'},
                    account_name:{required:"Account holder name is required"},
                    transaction_id:{required:"Transaction ID is required"},
                    term_condition:{required: "Please tick the check box"},
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "cscs[]") {
                        $('#err_checkbox').html(error);
                    }
                    else if (element.attr("name") == "term_condition"){
                        error.appendTo("#errmsg1");
                        //error.appendTo("#errmsg2");
                    }
                    else{
                        error.insertAfter(element);
                    }
                },
                submitHandler: function (form) {
                    if($('#basicForm').valid()){
                        $('#basicForm').on('submit', function (e) {
                            e.preventDefault();
                            var orderType = $('#orderType').val();
                            resp = ajaxCall("#",{'data':$("#basicForm").serialize(),'_token': 'Y0is6eTgqT7AWUGoeOgJ3BChqEHluDODHIwuoDsM' });
                            if(resp.RES.cls == 'success'){
                                //showNotification(resp.RES);
                                $('#step-4 h3').text(resp.RES.msg);
                                $('#lastStep').trigger('click');
                                $(this).closest('form').find('input[type=text],input[type=email], textarea').val('');
                            }
                            else{
                                showNotification(resp.RES);
                            }
                        });
                    }
                }
            });
            paymentwith();

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPerivousBtn = $('.previousBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    if($('#basicForm').valid()){
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                }
            });

            allPerivousBtn.click(function(){
                console.log("Asdsad");
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
                    //curInputs = curStep.find("input[type='text'],input[type='email']"),
                    //isValid = true;
                console.log(curStepBtn);
                console.log(nextStepWizard);

                //$(".form-group").removeClass("has-error");
                /*for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = true;
                        //$(curInputs[i])/!*.closest(".form-group")*!/.addClass("error");
                    }
                }*/

                //if ($('#basicForm').valid())
                    nextStepWizard.trigger('click');
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='email']"),
                    isValid = true;
                console.log(curStepBtn);
                console.log(nextStepWizard);

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i])/*.closest(".form-group")*/.addClass("error");
                    }
                }

                if ($('#basicForm').valid())
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');
            $("#help_form").validate({
                rules:{
                    firstName:{required: true},
                    lastName:{required: true},
                    userEmail:{
                        required: true,
                        email: true
                    },
                    message:{
                        required:true
                    }
                },
                messages: {
                    firstName: {required: "Your First Name is required"},
                    lastName: {required: "Your Last Name is required"},
                    userEmail: {
                        required: "Your Email is required",
                        email: "Enter valid email"
                    },
                    message:{
                        required:"Message is required"
                    }
                },
                errorPlacement: function(error, element){
                    if(element.attr('name') == 'term_checkbox'){
                        error.appendTo('#err_chk');
                    }
                    else{
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    $( '#help_form button[type="submit"]' ).prop( "disabled", true );
                    startLoaderAjax();
                    $("#help_form").ajaxSubmit({
                        dataType: "json",
                        success: function(responseText, statusText, xhr, $form){
                            $('#help_form')[0].reset();
                            stopLoaderAjax();
                            showNotification(responseText.RES);
                            if(responseText.status=='success'){
                                $( '#help_form button[type="submit"]' ).prop( "disabled", false );
                                /*if(responseText.redirect=='yes' && responseText.redirectUrl!=""){
                                    window.location.href=responseText.redirectUrl;
                                }*/
                            }
                        },
                        error:function () {
                            $('#help_form')[0].reset();
                            stopLoaderAjax();
                        }
                    });
                }
            });
        });
        function paymentwith() {
            var payment_with = $('input[name="pay_with"]:checked').val();
            if(payment_with == 1){
                $('#stripe_form').removeClass('d-none');
                $('#bank_transfer').addClass('d-none');
            }
            else if(payment_with == 2){
                $('#bank_transfer').removeClass('d-none');
                $('#stripe_form').addClass('d-none');
            }
        }
        function customCheckbox(checkboxName){
            var checkBox = $('input[name="'+ checkboxName +'"]');
            $(checkBox).each(function(){
                var val = $(this).val();
                $(this).wrap( "<span class='custom-checkbox'></span>" );
                if($(this).is(':checked')){
                    $(this).parent().addClass("selected");
                }
            });
            $(checkBox).click(function(){
                $(this).parent().toggleClass("selected");
                $(this).closest('label').toggleClass('select_style_chnage');
                /*var $checkbox = $(this).find(':checkbox');
                console.log($checkbox);
                console.log($checkbox.prop("checked"));*/
                //var checkBoxes = $("input[type='checkbox']");
                var chkVal = $(this).val();
                $('#'+chkVal).toggleClass("d-none");
                if($(this).is(':checked') == true)
                    $(this).attr("checked",true);
                else
                    $(this).attr("checked",false);
            });
        }
        $(document).ready(function (){
            customCheckbox("cscs[]");
        });
        function checkOrder() {
            if($('#basicForm').valid()){
                var checkedBox = [];
                var order = [];
                var price = [];
                var cardType = '';
                $.each($("input[name='cscs[]']:checked"), function(){
                    checkedBox.push($(this).val());
                });
                var checkedBoxStr = checkedBox.join(" + ");
                $('#orderDetails').text(checkedBoxStr);
                $('#orderType').val(checkedBox);
                $.each(checkedBox,function (i,val) {
                    order.push($('#'+val+' option:selected').val());
                    if(val == 'Card'){
                        cardType = $('input[name="card_type"]:checked').val();
                        price.push($('#'+val+' option:selected').attr('data-'+cardType+'-price'));
                    }
                    else{
                        price.push($('#'+val+' option:selected').attr('data-price'));
                    }
                });
                var total = 0;
                for (var i = 0; i < price.length; i++) {
                    total += price[i] << 0;
                }
                $('#course_price').val(total);
                $('#pay_amount').html('£'+total);
            }
        }
    </script>

<script>
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 550) {
            $("#header-sticky").removeClass("sticky-menu");
        } else {
            $("#header-sticky").addClass("sticky-menu");
        }
    });
</script>

<script src="js/aos.js"></script>
<script>
    AOS.init();
    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({
        // Global settings
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

        // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
</script>
<!-- GetButton.io widget -->

<!-- /GetButton.io widget -->
<script async data-id="58603" src="js/script.min.js"></script>
<style>
    .branded #okewa-floating_popup > a{display: none !important;}
    .okewa-style_3 #okewa-floating_cta,.okewa-pulse_3{bottom: 80px !important;}
    .okewa-right #okewa-floating_cta, .okewa-right .okewa-pulse_3{ right: 7px !important;}
    .okewa-style_3 #okewa-floating_popup { bottom: 150px;}
</style>
<script>
    $(document).ready(function() {
        // show/hide the mobile menu based on class added to container
        $('.menu-icon').click(function() {
            $(this).parent().toggleClass('is-tapped');
            $('#hamburger').toggleClass('open');
        });

        // handle touch device events on drop down, first tap adds class, second navigates
        $('.touch .sitenavigation li.nav-dropdown > a').on('touchend',
            function(e) {
                if ($('.menu-icon').is(':hidden')) {
                    var parent = $(this).parent();
                    $(this).find('.clicked').removeClass('clicked');
                    if (parent.hasClass('clicked')) {
                        window.location.href = $(this).attr('href');
                    } else {
                        $(this).addClass('linkclicked');

                        // close other open menus at this level
                        $(this).parent().parent().find('.clicked').removeClass('clicked');

                        parent.addClass('clicked');
                        e.preventDefault();
                    }
                }
            });

        // handle the expansion of mobile menu drop down nesting
        $('.sitenavigation li.nav-dropdown').click(
            function(event) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else {
                    event.cancelBubble = true;
                }

                if ($('.menu-icon').is(':visible')) {
                    $(this).find('> ul').toggle();
                    $(this).toggleClass('expanded');
                }
            }
        );

        // prevent links for propagating click/tap events that may trigger hiding/unhiding
        $('.sitenavigation a.nav-dropdown, .sitenavigation li.nav-dropdown a').click(
            function(event) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else {
                    event.cancelBubble = true;
                }
            }
        );
        // javascript fade in and out of dropdown menu
        $('.no-touch .sitenavigation li').hover(
            function() {
                if (!$('.menu-icon').is(':visible')) {
                    $(this).find('> ul').fadeIn(100);
                }
            },
            function() {
                if (!$('.menu-icon').is(':visible')) {
                    $(this).find('> ul').fadeOut(100);
                }
            }
        );
        $.validator.addMethod("PASSWORD",function(value,element){
            return this.optional(element) || /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]/.test(value);
        },"Passwords are minimum 5 characters with uppercase letters, lowercase letters and at least one number.");
        $("#signin_form").validate({
            rules:{
                userEmail:{required: true},
                pass:{required: true}
            },
            messages:{
                userEmail: {required: 'Your Email is required'},
                pass:{required: "Password is required"}
            },
            submitHandler: function(form) {
                $("#signin_form").ajaxSubmit({
                    dataType: "json",
                    success: function(responseText, statusText, xhr, $form){
                        showNotification(responseText);
                        $("#signin").animate({ scrollTop: 0 }, 'slow');
                        if(responseText.status=='success'){
                            $('#signin_form')[0].reset();
                            if(responseText.redirect=='yes' && responseText.redirectUrl!=""){
                                window.location.href=responseText.redirectUrl;
                            }
                        }
                    }
                });
            }
        });
        $("#signup_form").validate({
            rules:{
                firstName:{required: true},
                lastName:{required: true},
                userEmail:{
                    required: true,
                    email: true,
                    remote: {url: "#",type: "post",data:{'_token': 'Y0is6eTgqT7AWUGoeOgJ3BChqEHluDODHIwuoDsM' }}
                },
                userPass:{required: true},
                cnfPass:{required: true, equalTo:"#userPass"},
                term_checkbox:{required: true}
            },
            messages: {
                firstName: {required: "Your First Name is required"},
                lastName: {required: "Your Last Name is required"},
                userEmail: {
                    required: "Your Email is required",
                    email: "Enter valid email",
                    remote: "This Email Is already Registered Please Login using This Link"
                },
                userPass: {required: "Password is required"},
                cnfPass: {
                    required: "Confirm password is required",
                    equalTo: "Password and confirm password should be same"
                },
                term_checkbox:{required: "Please check terms &amp; privacy checkbox"}
            },
            errorPlacement: function(error, element){
                if(element.attr('name') == 'term_checkbox'){
                    error.appendTo('#err_chk');
                }
                else{
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                $( '#signup_form button[type="submit"]' ).prop( "disabled", true );
                startLoaderAjax();
                $("#signup_form").ajaxSubmit({
                    dataType: "json",
                    success: function(responseText, statusText, xhr, $form){
                        $('#signup_form')[0].reset();
                        stopLoaderAjax();
                        showNotification(responseText);
                        $("#signup").animate({ scrollTop: 0 }, 'slow');
                        if(responseText.status=='success'){
                            $( '#signup_form button[type="submit"]' ).prop( "disabled", false );
                            if(responseText.redirect=='yes' && responseText.redirectUrl!=""){
                                window.location.href=responseText.redirectUrl;
                            }
                        }
                    },
                    error:function () {
                        $('#signup_form')[0].reset();
                        stopLoaderAjax();
                    }
                });
            }
        });
        $("#forgot_form").validate({
           rules:{
               userEmail:{
                   required: true,
                   email: true
               },
           },
            messages:{
                userEmail:{
                    required: "Your Email is required",
                    email: "Enter valid email",
                }
            },
            submitHandler: function(form) {
                $( '#forgot_form button[type="submit"]' ).prop( "disabled", true );
                startLoaderAjax();
                $("#forgot_form").ajaxSubmit({
                    dataType: "json",
                    success: function(responseText, statusText, xhr, $form){
                        $('#forgot_form')[0].reset();
                        stopLoaderAjax();
                        showNotification(responseText);
                        $("#forgot").animate({ scrollTop: 0 }, 'slow');
                        if(responseText.status=='success'){
                            $( '#forgot_form button[type="submit"]' ).prop( "disabled", false );
                            /*if(responseText.redirect=='yes' && responseText.redirectUrl!=""){
                                window.location.href=responseText.redirectUrl;
                            }*/
                        }
                    },
                    error:function () {
                        $('#forgot_form')[0].reset();
                        stopLoaderAjax();
                    }
                });
            }
        });
        $('#signin,#signup,#forgot').on('shown.bs.modal', function (e) {
            $('body').addClass('modal-open');
        });
        /*$('button[type=submit]').click(function() {
            if($('#signup_form').valid()){
                $(this).attr('disabled', 'disabled');
                $(this).parents('form').submit();
            }
        });*/
    });
    function showModal(caller) {
        if(caller == 'signin'){
            $("#signup").modal('hide');
            $("#forgot").modal('hide');
            $("#signin").modal('toggle');
            callerLoginRigister('signin');
        }
        else if(caller == 'signup'){
            $("#signin").modal('hide');
            $("#forgot").modal('hide');
            $("#signup").modal('toggle');
            callerLoginRigister('signup');
        }
        else if(caller == 'forgot'){
            $("#signin").modal('hide');
            $("#signup").modal('hide');
            $("#forgot").modal('toggle');
            callerLoginRigister('forgot');
        }
    }
    function callerLoginRigister(caller,action){
        var url = '#';
        var param = {'caller':caller,'_token':'Y0is6eTgqT7AWUGoeOgJ3BChqEHluDODHIwuoDsM'};
        var Res = ajaxCall(url,param);
        //console.log(Res);
    }
</script>

@endsection