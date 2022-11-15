<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
    
// });

require __DIR__.'/auth.php';

Route::get('/login','HomeController@login')->name('login');

Route::get('/','HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/cscs','HomeController@cscs')->name('cscs');
Route::get('/contact','HomeController@contact')->name('contact');
Route::post('/contact/save','HomeController@contactSave')->name('contact.save');
Route::get('/courses','HomeController@courses')->name('courses');
Route::get('/terms','HomeController@terms')->name('terms');
Route::get('/courses/subcourse/{id?}','HomeController@subcourse')->name('subcourse');
Route::get('/getsubcourse/{id?}','HomeController@getSubcourse')->name('getSubcourse');
Route::post('search','HomeController@Search')->name('search');
Route::get('search/course/{id?}','HomeController@searchCourse')->name('search.course');

Route::post('/paypal/save','PaypalController@store')->name('paypal.save');
Route::get('/paypal/success','PaypalController@success')->name('payment.success');
Route::get('payment/paypal/cancel', 'PaypalController@cancel')->name('payment.cancel');

Route::any('/course/detail/{id?}','HomeController@detail')->name('detail');
Route::get('/checkout/{id?}','HomeController@checkout')->name('checkout');
Route::post('/intent','StripPaymentController@intent')->name('intent');
Route::post('/checkout/save','HomeController@saveCheckout')->name('checkout.save');
Route::post('/email/save','HomeController@saveEmail')->name('email.save');

Route::get('/redirect', 'SocialliteController@redirectToProvider')->name('google.login');
Route::get('/googleredirect', 'SocialliteController@handleProviderCallback')->name('google.register');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::middleware(['admin'])->group(function () {
	Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
		Route::get('dashboard','AdminController@dashboard')->name('dashboard');	
		Route::get('profile', 'AdminController@profile')->name('profile');
	    Route::post('general-update', 'AdminController@generalupdate')->name('general.update');
	    Route::post('pass-update', 'AdminController@passupdate')->name('pass.update');
			Route::name('course.')->prefix('course')->group(function () {
	        Route::get('list', 'CourseController@list')->name('list');
	        Route::get('add', 'CourseController@add')->name('add');
	        Route::post('save/{id?}', 'CourseController@save')->name('save');
	        Route::get('edit/{id?}', 'CourseController@edit')->name('edit');
	        Route::get('delete/{id?}', 'CourseController@delete')->name('delete');
	        });

			Route::name('subcourse.')->prefix('subcourse')->group(function () {
		        Route::get('add', 'SubcourseController@add')->name('add');
		        Route::get('list', 'SubcourseController@list')->name('list');
		        Route::post('save/{id?}', 'SubcourseController@save')->name('save');
		        Route::get('edit/{id?}', 'SubcourseController@edit')->name('edit');
	        	Route::get('delete/{id?}', 'SubcourseController@delete')->name('delete');

	    	});
			Route::name('cms.')->prefix('cms')->group(function () {
		        Route::get('general', 'SettingController@general')->name('general');
		        Route::get('aboutus', 'SettingController@aboutus')->name('aboutus');
		        Route::post('save', 'SettingController@save')->name('save');
		        Route::get('home', 'SettingController@home')->name('home');
		        Route::get('course', 'SettingController@course')->name('course');
		        Route::get('email', 'SettingController@email')->name('email');
		        Route::get('contactus', 'SettingController@contactus')->name('contactus');
		        Route::get('terms&conditions', 'SettingController@terms')->name('terms');

	    	});
	    	Route::name('user.')->prefix('user')->group(function () {
		        Route::get('list', 'UserController@list')->name('list');
		        Route::post('save', 'UserController@save')->name('save');
		        Route::get('edit/{id?}', 'UserController@edit')->name('edit');
	        	Route::get('delete/{id?}', 'UserController@delete')->name('delete');
	        	Route::post('store{id?}','UserController@store')->name('store');
			

	    	});
	    	Route::name('order.')->prefix('order')->group(function () {
		        Route::get('list', 'AdminController@orderList')->name('orderList');
	    	});
	    	Route::name('newsletter.')->prefix('newsletter')->group(function () {
		        Route::get('list', 'AdminController@newsletter')->name('list');
		        Route::get('delete/{id?}', 'AdminController@newsDelete')->name('delete');

	    	});
	    	Route::name('contact.')->prefix('contact')->group(function () {
		        Route::get('list', 'AdminController@contact')->name('list');
		        Route::get('delete/{id?}', 'AdminController@contactDelete')->name('delete');
	    	});
	    	Route::name('page.')->prefix('page')->group(function(){
		        Route::get('list', 'PageController@index')->name('list');
		        Route::get('add', 'PageController@add')->name('add');
		        Route::get('edit/{id}', 'PageController@edit')->name('edit');
		        Route::get('delete/{id}', 'PageController@delete')->name('delete');
		        Route::post('save', 'PageController@save')->name('save');
		    });
	});
});

Route::middleware(['user'])->group(function () {
	Route::prefix('user')->name('user.')->namespace('User')->group(function() {
		Route::get('dashboard','UserController@dashboard')->name('dashboard');	
		Route::get('profile', 'UserController@profile')->name('profile');
	    Route::post('general-update', 'UserController@generalupdate')->name('general.update');
	    Route::post('pass-update', 'UserController@passupdate')->name('pass.update');
			Route::name('order.')->prefix('order')->group(function () {
		        Route::get('list', 'UserController@orderList')->name('orderList');
	    	});
	    });
});


Route::get('{uid}/{slug}', 'HomeController@pages')->name('pages');