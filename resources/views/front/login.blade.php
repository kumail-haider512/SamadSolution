@extends('layouts.master')
@section('content') 
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
@endsection