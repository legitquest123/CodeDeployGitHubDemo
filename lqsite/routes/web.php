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


Route::get('/', 'HomeController@index');

Route::get('/judgment', function(){
   return view('pages.judgment');
});

// Route::get('/detail', function(){
//    return view('pages.detail');
// });

Route::get('/coverage', function(){
   return view('pages.coverage');
});

// Route::get('/notes', function(){
//    return view('pages.notes');
// });

Route::get('/bookmark', function(){
   return view('pages.bookmark');
});

Route::get('/contact', function(){
   return view('pages.contact');
});

Route::get('/price', function(){
   return view('pages.price');
});


/*Admin Routes Starts 
  Created By => Namit Singh
  Date Created => 4th-March-2020
*/ 

Route::prefix('admin')->group(function () {
   //Team Routes
Route::get('team','TeamController@showteam')->middleware('test');
Route::post('addteam','TeamController@addteam')->name('addteam');
Route::get('list-team','TeamController@index')->middleware('test');
Route::get('edit/{id}','TeamController@editteam')->middleware('test');
Route::post('updateteam/{id}','TeamController@updateteam')->name('updateteam');
Route::post('deleteteam','TeamController@deleteteam');
Route::post('deactivateteam','TeamController@deactivateteam');
Route::post('activateteam','TeamController@activateteam');


//Career Routes

Route::get('career','CareerController@showcareer')->middleware('test');
Route::post('addcareer','CareerController@addcareer')->name('addcareer');
Route::get('list-career','CareerController@index')->middleware('test');
Route::get('editcareer/{id}','CareerController@editcareer')->middleware('test');
Route::post('updatecareer/{id}','CareerController@updatecareer')->name('updatecareer');
Route::post('deletecareer','CareerController@deletecareer');
Route::post('deactivatecareer','CareerController@deactivatecareer');
Route::post('activatecareer','CareerController@activatecareer');


//Pages Routes

Route::get('page','PagesController@showpage')->middleware('test');
Route::post('addpage','PagesController@addpage')->name('addpage');
Route::get('list-page','PagesController@index')->middleware('test')->middleware('test');
Route::get('editpage/{id}','PagesController@editpage')->middleware('test');
Route::post('updatepage/{id}','PagesController@updatepage')->name('updatepage');
Route::post('deletepage','PagesController@deletepage');


//Gallery Routes

Route::get('gallery','GalleryController@index')->middleware('test');
Route::post('addgallery','GalleryController@addgallery')->name('addgallery');
Route::get('list-gallery','GalleryController@listgallery')->middleware('test');
Route::get('editgallery/{id}','GalleryController@editgallery')->middleware('test');
Route::post('updategallery/{id}','GalleryController@updategallery')->name('updategallery')->middleware('test');
Route::post('deletegallery','GalleryController@deletegallery');
Route::post('deactivategallery','GalleryController@deactivategallery');
Route::post('activategallery','GalleryController@activategallery');

//Users Routes

Route::get('signin','UserController@signin');
Route::post('login','UserController@login')->name('login');
Route::get('logout','UserController@logout');
Route::get('change-password','UserController@changepassword')->middleware('test');
Route::post('updatepassword','UserController@updatepassword')->name('updatepassword');
Route::get('profile','UserController@profile')->middleware('test');
Route::post('updateprofile','UserController@updateprofile')->name('updateprofile');
Route::get('dashboard','UserController@dashboard')->middleware('test');

//Banner Routes
Route::get('banner','BannerController@index')->middleware('test');
Route::post('addbanner','BannerController@addbanner')->name('addbanner');
Route::get('list-banner','BannerController@listbanner')->middleware('test');
Route::get('editbanner/{id}','BannerController@editbanner')->middleware('test');
Route::post('updatebanner/{id}','BannerController@updatebanner')->name('updatebanner');
Route::post('deletebanner','BannerController@deletebanner');


// Faq Routes

Route::get('faq','FaqController@index')->middleware('test');
Route::post('addfaq','FaqController@addfaq')->name('addfaq');
Route::get('list-faq','FaqController@listfaq')->middleware('test');
Route::get('editfaq/{id}','FaqController@editfaq')->middleware('test');
Route::post('updatefaq/{id}','FaqController@updatefaq')->name('updatefaq');
Route::post('deletefaq','FaqController@deletefaq');
Route::post('deactivatestatus','FaqController@deactivate');
Route::post('activatestatus','FaqController@activate');


// SEO Setting Routes

Route::get('seo','SeoController@seo')->middleware('test');
Route::post('updateseo/{id}','SeoController@updateseo')->name('updateseo');

//Site Setting Routes

Route::get('sitesetting','SettingController@index')->middleware('test');
Route::post('updatesetting/{id}','SettingController@updatesetting')->name('updatesetting');
});

/*Admin Routes Ends*/



//FrontEnd Routes

Route::get('career','CareerController@getcareer', function(){
   return view('pages.career');
});
Route::get('team','TeamController@getteam',function(){
   return view('pages.team');
});
Route::get('service','ServicesController@getdata',function(){
   return view('pages.services');
});

Route::post('addservices','ServicesController@addservice')->name('addservices');

Route::get('researchrequest','ServicesController@getdata1',function(){
   return view('pages.researchrequest');
});
Route::post('addresearchrequest','ServicesController@addresearchrequest')->name('researchrequest');

Route::get('gallery','GalleryController@getgallery',function(){
   return view('pages.gallery');
});

Route::get('faq','FaqController@getfaq',function(){
return view('pages.faq');
});

Route::get('terms-condition','ServicesController@termscondition');
Route::get('policy','ServicesController@policy');
Route::get('about','PagesController@findslug');

Route::post('application','JobsController@jobapplication')->name('app');

/*Notes Routes*/

Route::get('notes','NotesController@index');
Route::post('adding-note','NotesController@addingnote')->name('addingnote');
Route::post('add-note','NotesController@addNote')->name('addNote');
Route::post('note-detail','NotesController@getNoteDetail');
Route::post('add-notebook','NotesController@addNoteBook')->name('add-notebook');
Route::get('notebook-note','NotesController@getNoteBookNotes');
Route::get('trash','NotesController@showtrash');
Route::get('delete-trash','NotesController@deletetrash');
Route::get('detail','NotesController@detail');
Route::post('delete-note','NotesController@deletenote');
Route::post('generate-url','NotesController@generateurl');
Route::post('share-note','NotesController@sharenote')->name('sharenote');
Route::post('getemails','NotesController@getemails')->name('getemails');
Route::post('delete-notebook','NotesController@deletenotebook');
Route::post('getnotebookdata','NotesController@getnotebookdata');
Route::post('undotrash','NotesController@undoTrash');
Route::post('empty-trash','NotesController@emptytrash');







