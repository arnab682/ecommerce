<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


////

// Route::get('/', function () {
//     return view('bigStore');
//
// });

Route::get('/', 'BigStoreController@index');



Route::resource('/admin', 'AdminController');


//..............................................................


//label
Route::resource('/label', 'LabelController');

//Order
Route::resource('/order', 'OrderController');

//Page
Route::resource('/page', 'PageController');

//Subscriber
Route::resource('/subscriber', 'SubscriberController');

//Tag
Route::resource('/tag', 'TagController');

//Testimonial
Route::resource('/testimonial', 'TestimonialController');

//Contact
Route::resource('/contact', 'ContactController');

//Categories
Route::resource('/category', 'CategoryController');

//cart
Route::resource('/cart', 'CartController');

//Brand
Route::resource('/brand', 'BrandController');

//Banner
Route::resource('/banner', 'BannerController');

//Admin
Route::resource('/admins', 'AdminsController');

//Sponser
Route::resource('/sponser', 'SponserController');

//Product
Route::resource('/product', 'ProductController');

//SliderShow
Route::get('/sliderShow', 'SliderController@display');
Route::resource('slider', 'SliderController');



//........................................................


Route::get('/wishlist', function () {
    return view('theme.wishlist');

});

Route::get('/registation', function () {
    return view('theme.register');

});

Route::get('/siteLogin', function () {
    return view('theme.login');

});

Route::get('/shipping', function () {
    return view('theme.shipping');

});

//Kitchen
Route::get('/kitchen', function () {
    return view('theme.kitchen');

});

//Personal Care
Route::get('/care', function () {
    return view('theme.care');

});

//Household
Route::get('/hole', function () {
    return view('theme.hold');

});

Route::get('/abouts', function () {
    return view('theme.about');

});
Route::get('/contact', function () {
    return view('theme.contact');

});

Route::get('/codes', function () {
    return view('theme.codes');

});

Route::get('/single', function () {
    return view('theme.single');

});

Route::get('/offer', function () {
    return view('theme.offer');

});

Route::get('/faqs', function () {
    return view('theme.faqs');

});



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
});
