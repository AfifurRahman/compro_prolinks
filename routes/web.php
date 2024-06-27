<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    return view('layouts.app_frontend');
});

Route::group(['middleware' => 'auth', 'prefix' => 'backend'], function () {
	Route::get('/profile', 'App\Http\Controllers\Backend\UsersController@profile')->name('profile');
	Route::post('/save-profile', 'App\Http\Controllers\Backend\UsersController@save_profile')->name('save-profile');
	Route::post('/change-password', 'App\Http\Controllers\Backend\UsersController@change_password')->name('change-password');
	
	Route::get('/homepage', 'App\Http\Controllers\Backend\InformationController@homepage')->name('homepage');
	Route::post('/save-homepage{type}', 'App\Http\Controllers\Backend\InformationController@save_homepage')->name('save-homepage');

	Route::get('/about', 'App\Http\Controllers\Backend\InformationController@about_us')->name('about');
	Route::post('/save-about-us', 'App\Http\Controllers\Backend\InformationController@save_about_us')->name('save-about-us');

	Route::get('/vision-mission', 'App\Http\Controllers\Backend\InformationController@vision_mission')->name('vision-mission');
	Route::post('/save-vision', 'App\Http\Controllers\Backend\InformationController@save_vision')->name('save-vision');
	Route::post('/save-mission', 'App\Http\Controllers\Backend\InformationController@save_mission')->name('save-mission');

	Route::get('/team', 'App\Http\Controllers\Backend\InformationController@team')->name('team');
	Route::get('/create-team', 'App\Http\Controllers\Backend\InformationController@create_team')->name('create-team');
	Route::get('/edit-team/{id}', 'App\Http\Controllers\Backend\InformationController@create_team')->name('edit-team');
	Route::get('/delete-team/{id}', 'App\Http\Controllers\Backend\InformationController@delete_team')->name('delete-team');
	Route::post('/save-team', 'App\Http\Controllers\Backend\InformationController@save_team')->name('save-team');

	Route::get('/contact', 'App\Http\Controllers\Backend\InformationController@contact')->name('contact');
	Route::post('/save-contact', 'App\Http\Controllers\Backend\InformationController@save_contact')->name('save-contact');

	Route::get('/social-media', 'App\Http\Controllers\Backend\InformationController@social_media')->name('social-media');
	Route::get('/create-social-media', 'App\Http\Controllers\Backend\InformationController@create_social_media')->name('create-social-media');
	Route::get('/edit-social-media/{id}', 'App\Http\Controllers\Backend\InformationController@create_social_media')->name('edit-social-media');
	Route::get('/delete-social-media/{id}', 'App\Http\Controllers\Backend\InformationController@delete_social_media')->name('delete-social-media');
	Route::post('/save-social-media', 'App\Http\Controllers\Backend\InformationController@save_social_media')->name('save-social-media');

	Route::get('/privacy-police', 'App\Http\Controllers\Backend\InformationController@privacy_police')->name('privacy-police');
	Route::post('/save-privacy-police', 'App\Http\Controllers\Backend\InformationController@save_privacy_police')->name('save-privacy-police');

	Route::get('/term-of-us', 'App\Http\Controllers\Backend\InformationController@term_of_us')->name('term-of-us');
	Route::post('/save-term-of-us', 'App\Http\Controllers\Backend\InformationController@save_term_of_us')->name('save-term-of-us');

	Route::get('/slider', 'App\Http\Controllers\Backend\ContentController@slider')->name('slider');
	Route::get('/create-slider', 'App\Http\Controllers\Backend\ContentController@create_slider')->name('create-slider');
	Route::get('/edit-slider/{id}', 'App\Http\Controllers\Backend\ContentController@create_slider')->name('edit-slider');
	Route::get('/delete-slider/{id}', 'App\Http\Controllers\Backend\ContentController@delete_slider')->name('delete-slider');
	Route::post('/save-slider', 'App\Http\Controllers\Backend\ContentController@save_slider')->name('save-slider');

	Route::get('/home-banner', 'App\Http\Controllers\Backend\ContentController@home_banner')->name('home-banner');
	Route::post('/save-home-banner', 'App\Http\Controllers\Backend\ContentController@save_home_banner')->name('save-home-banner');

	Route::get('/top-banner', 'App\Http\Controllers\Backend\ContentController@top_banner')->name('top-banner');
	Route::post('/save-top-banner', 'App\Http\Controllers\Backend\ContentController@save_top_banner')->name('save-top-banner');

	Route::get('/why-choose-us', 'App\Http\Controllers\Backend\ContentController@why_choose_us')->name('why-choose-us');
	Route::get('/create-why-choose-us', 'App\Http\Controllers\Backend\ContentController@create_why_choose_us')->name('create-why-choose-us');
	Route::get('/edit-why-choose-us/{id}', 'App\Http\Controllers\Backend\ContentController@create_why_choose_us')->name('edit-why-choose-us');
	Route::get('/delete-why-choose-us/{id}', 'App\Http\Controllers\Backend\ContentController@delete_why_choose_us')->name('delete-why-choose-us');
	Route::post('/save-why-choose-us', 'App\Http\Controllers\Backend\ContentController@save_why_choose_us')->name('save-why-choose-us');

	Route::get('/what-makes-us-uniq', 'App\Http\Controllers\Backend\ContentController@what_makes_us_uniq')->name('what-makes-us-uniq');
	Route::get('/create-what-makes-us-uniq', 'App\Http\Controllers\Backend\ContentController@create_what_makes_us_uniq')->name('create-what-makes-us-uniq');
	Route::get('/edit-what-makes-us-uniq/{id}', 'App\Http\Controllers\Backend\ContentController@create_what_makes_us_uniq')->name('edit-what-makes-us-uniq');
	Route::get('/delete-what-makes-us-uniq/{id}', 'App\Http\Controllers\Backend\ContentController@delete_what_makes_us_uniq')->name('delete-what-makes-us-uniq');
	Route::post('/save-what-makes-us-uniq', 'App\Http\Controllers\Backend\ContentController@save_what_makes_us_uniq')->name('save-what-makes-us-uniq');

	Route::get('/artikel', 'App\Http\Controllers\Backend\ContentController@artikel')->name('artikel');
	Route::get('/create-artikel', 'App\Http\Controllers\Backend\ContentController@create_artikel')->name('create-artikel');
	Route::get('/edit-artikel/{id}', 'App\Http\Controllers\Backend\ContentController@create_artikel')->name('edit-artikel');
	Route::get('/delete-artikel/{id}', 'App\Http\Controllers\Backend\ContentController@delete_artikel')->name('delete-artikel');
	Route::post('/save-artikel', 'App\Http\Controllers\Backend\ContentController@save_artikel')->name('save-artikel');

	Route::get('/industries', 'App\Http\Controllers\Backend\IndustriesController@industries')->name('industries');
	Route::get('/create-industries', 'App\Http\Controllers\Backend\IndustriesController@create_industries')->name('create-industries');
	Route::get('/edit-industries/{id}', 'App\Http\Controllers\Backend\IndustriesController@create_industries')->name('edit-industries');
	Route::get('/delete-industries/{id}', 'App\Http\Controllers\Backend\IndustriesController@delete_industries')->name('delete-industries');
	Route::post('/save-industries', 'App\Http\Controllers\Backend\IndustriesController@save_industries')->name('save-industries');

	Route::get('/kategori-artikel', 'App\Http\Controllers\Backend\ContentController@kategori_artikel')->name('kategori-artikel');
	Route::get('/create-kategori-artikel', 'App\Http\Controllers\Backend\ContentController@create_kategori_artikel')->name('create-kategori-artikel');
	Route::get('/edit-kategori-artikel/{id}', 'App\Http\Controllers\Backend\ContentController@create_kategori_artikel')->name('edit-kategori-artikel');
	Route::get('/delete-kategori-artikel/{id}', 'App\Http\Controllers\Backend\ContentController@delete_kategori_artikel')->name('delete-kategori-artikel');
	Route::post('/save-kategori-artikel', 'App\Http\Controllers\Backend\ContentController@save_kategori_artikel')->name('save-kategori-artikel');

	Route::get('/accounting-services', 'App\Http\Controllers\Backend\ServicesController@accounting_services')->name('accounting-services');
	Route::get('/create-accounting-services', 'App\Http\Controllers\Backend\ServicesController@create_accounting_services')->name('create-accounting-services');
	Route::get('/edit-accounting-services/{id}', 'App\Http\Controllers\Backend\ServicesController@create_accounting_services')->name('edit-accounting-services');
	Route::get('/delete-accounting-services/{id}', 'App\Http\Controllers\Backend\ServicesController@delete_accounting_services')->name('delete-accounting-services');
	Route::post('/save-accounting-services', 'App\Http\Controllers\Backend\ServicesController@save_accounting_services')->name('save-accounting-services');

	Route::get('/tax-services', 'App\Http\Controllers\Backend\ServicesController@tax_services')->name('tax-services');
	Route::get('/create-tax-services', 'App\Http\Controllers\Backend\ServicesController@create_tax_services')->name('create-tax-services');
	Route::get('/edit-tax-services/{id}', 'App\Http\Controllers\Backend\ServicesController@create_tax_services')->name('edit-tax-services');
	Route::get('/delete-tax-services/{id}', 'App\Http\Controllers\Backend\ServicesController@delete_tax_services')->name('delete-tax-services');
	Route::post('/save-tax-services', 'App\Http\Controllers\Backend\ServicesController@save_tax_services')->name('save-tax-services');

	Route::get('/finance-services', 'App\Http\Controllers\Backend\ServicesController@finance_services')->name('finance-services');
	Route::get('/create-finance-services', 'App\Http\Controllers\Backend\ServicesController@create_finance_services')->name('create-finance-services');
	Route::get('/edit-finance-services/{id}', 'App\Http\Controllers\Backend\ServicesController@create_finance_services')->name('edit-finance-services');
	Route::get('/delete-finance-services/{id}', 'App\Http\Controllers\Backend\ServicesController@delete_finance_services')->name('delete-finance-services');
	Route::post('/save-finance-services', 'App\Http\Controllers\Backend\ServicesController@save_finance_services')->name('save-finance-services');

	Route::get('/badan-usaha', 'App\Http\Controllers\Backend\ServicesController@badan_usaha')->name('badan-usaha');
	Route::get('/create-badan-usaha', 'App\Http\Controllers\Backend\ServicesController@create_badan_usaha')->name('create-badan-usaha');
	Route::get('/edit-badan-usaha/{id}', 'App\Http\Controllers\Backend\ServicesController@create_badan_usaha')->name('edit-badan-usaha');
	Route::get('/delete-badan-usaha/{id}', 'App\Http\Controllers\Backend\ServicesController@delete_badan_usaha')->name('delete-badan-usaha');
	Route::post('/save-badan-usaha', 'App\Http\Controllers\Backend\ServicesController@save_badan_usaha')->name('save-badan-usaha');

	Route::get('/questions', 'App\Http\Controllers\Backend\QuestionsController@questions')->name('questions');
	Route::get('/detail-questions/{id}', 'App\Http\Controllers\Backend\QuestionsController@detail_questions')->name('detail-questions');

	Route::get('/testimonial', 'App\Http\Controllers\Backend\TestimonialController@testimonial')->name('testimonial');
	Route::get('/create-testimonial', 'App\Http\Controllers\Backend\TestimonialController@create_testimonial')->name('create-testimonial');
	Route::get('/edit-testimonial/{id}', 'App\Http\Controllers\Backend\TestimonialController@create_testimonial')->name('edit-testimonial');
	Route::get('/delete-testimonial/{id}', 'App\Http\Controllers\Backend\TestimonialController@delete_testimonial')->name('delete-testimonial');
	Route::post('/save-testimonial', 'App\Http\Controllers\Backend\TestimonialController@save_testimonial')->name('save-testimonial');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@home')->name('home-frontend');
Route::get('/advance', 'App\Http\Controllers\Frontend\FrontendController@advance_vdr')->name('home-advance');
Route::get('/ai-insight', 'App\Http\Controllers\Frontend\FrontendController@ai_insight')->name('home-insight');

Route::get('/run-migrations', function () {
    return Artisan::call('migrate', ["--path" => "database/migrations", "--force" => true ]);
});
Route::get('/clear-view-cache', 'App\Http\Controllers\Frontend\FrontendController@clear_view_cache')->name('clear-view-cache');