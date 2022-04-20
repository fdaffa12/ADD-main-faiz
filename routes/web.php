<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index')->name('home.route');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/logout', 'HomeController@Logout')->name('admin.logout');


// Route::get('home', [pgnav::class, 'home']);
// Route::get('dash', [dashnav::class, 'dashboard']);
// Route::get('primary', [dashnav::class, 'dashprim']);
// Route::get('secondary', [dashnav::class, 'dashsec']);
Route::view('/primary', 'dashboard/primary');
// Route::view('/secondary', 'dashboard/secondary');
// Route::view('/input', 'dashboard/inputsec');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'is_admin'], function () {
    //add pages
    Route::get('admin/add-pages', 'Admin\PagesController@add')->name('add-pages');
    Route::post('admin/store-pages', 'Admin\PagesController@store')->name('store-pages');
    Route::get('admin/index-pages', 'Admin\PagesController@index')->name('index-pages');
    Route::get('admin/edit-pages/{pages_id}', 'Admin\PagesController@edit');
    Route::post('admin/update-pages', 'Admin\PagesController@update')->name('update-pages');
    Route::get('admin/delete-pages/{pages_id}', 'Admin\PagesController@destroy');
    Route::get('admin/draft-pages/{pages_id}', 'Admin\PagesController@draft');
    Route::get('admin/publish-pages/{pages_id}', 'Admin\PagesController@publish');

    //publikasi
    Route::get('admin/publikasi', 'Admin\PublikasiController@index')->name('publikasi');
    Route::get('admin/add-publikasi', 'Admin\PublikasiController@addpublikasi')->name('add.publikasi');
    Route::post('admin/publikasi-store', 'Admin\PublikasiController@StorePublikasi')->name('publikasi-store');
    Route::get('admin/edit-publikasi/{publikasi_id}', 'Admin\PublikasiController@edit');
    Route::post('admin/update-publikasi', 'Admin\PublikasiController@update')->name('update-publikasi');
    Route::get('admin/delete-publikasi/{publikasi_id}', 'Admin\PublikasiController@destroy');
    Route::get('admin/draft-publikasi/{publikasi_id}', 'Admin\PublikasiController@draft');
    Route::get('admin/publish-publikasi/{publikasi_id}', 'Admin\PublikasiController@publish');
    Route::get('admin/post', 'Admin\PublikasiController@post')->name('post');
    Route::get('admin/add-post', 'Admin\PublikasiController@addPost')->name('add.post');
    Route::post('admin/store-post', 'Admin\PublikasiController@storePost')->name('store.post');
    Route::get('admin/manage-post', 'Admin\PublikasiController@managePost')->name('manage.post');
    Route::get('admin/edit-posts/{post_id}', 'Admin\PublikasiController@editPost');
    Route::post('admin/update-post', 'Admin\PublikasiController@updatePost')->name('update.post');
    Route::get('admin/delete-posts/{post_id}', 'Admin\PublikasiController@destroyPost');
    Route::get('admin/draft-posts/{post_id}', 'Admin\PublikasiController@draftPost');
    Route::get('admin/publish-posts/{post_id}', 'Admin\PublikasiController@publishPost');

    //potensi
    Route::get('admin/potensi', 'Admin\PotensiController@index')->name('potensi');
    Route::get('admin/add-potensi', 'Admin\PotensiController@addPotensi')->name('add.potensi');
    Route::post('admin/potensi-store', 'Admin\PotensiController@storePotensi')->name('store.potensi');
    Route::get('admin/edit-potensi/{potensi_id}', 'Admin\PotensiController@editPotensi');
    Route::post('admin/update-potensi', 'Admin\PotensiController@updatePotensi')->name('update.potensi');
    Route::get('admin/delete-potensi/{potensi_id}', 'Admin\PotensiController@destroyPotensi');
    Route::get('admin/draft-potensi/{potensi_id}', 'Admin\PotensiController@draftPotensi');
    Route::get('admin/publish-potensi/{potensi_id}', 'Admin\PotensiController@publishPotensi');


    //struktur
    Route::get('admin/struktur', 'Admin\StrukturController@index')->name('struktur');
    Route::get('admin/add-struktur', 'Admin\StrukturController@addStruktur')->name('add.struktur');
    Route::post('admin/store-struktur', 'Admin\StrukturController@storeStruktur')->name('store.struktur');
    Route::get('admin/edit-struktur/{struktur_id}', 'Admin\StrukturController@editStruktur');
    Route::post('admin/update-struktur', 'Admin\StrukturController@update')->name('update.struktur');
    Route::get('admin/delete-struktur/{struktur_id}', 'Admin\StrukturController@destroyStruktur');
    Route::get('admin/draft-struktur/{struktur_id}', 'Admin\StrukturController@draftStruktur');
    Route::get('admin/publish-struktur/{struktur_id}', 'Admin\StrukturController@publishStruktur');

    //coba galeri
    Route::get('admin/primary', 'PrimaryController@index')->name('primary.index');
    Route::post('admin/store-primary', 'PrimaryController@store')->name('primary.store');
    Route::post('admin/primary/update', 'PrimaryController@update')->name('primary.update');
    Route::get('admin/add-primary', 'PrimaryController@add')->name('primary.add');
    Route::get('admin/primary/delete/{id}', 'PrimaryController@delete')->name('primary.delete');
    Route::get('admin/primary/getByID/{id}', 'PrimaryController@getByID')->name('primary.getByID');
    Route::get('admin/primary/images/{id}', 'PrimaryItemController@index')->name('primary.images');
    Route::post('admin/primary/image/store', 'PrimaryItemController@store')->name('primary.image.store');
    Route::post('admin/primary/image/update', 'PrimaryItemController@update')->name('primary.image.update');
    Route::get('admin/primary/image/delete/{id}', 'PrimaryItemController@delete')->name('primary.image.delete');
    Route::get('admin/draft-primary/{id}', 'PrimaryController@draft');
    Route::get('admin/publish-primary/{id}', 'PrimaryController@publish');

    //video
    Route::get('admin/video', 'Admin\VideoController@index')->name('video.index');
    Route::get('admin/add-video', 'Admin\VideoController@add')->name('add.video');
    Route::post('admin/store', 'Admin\VideoController@store')->name('store.video');
    Route::get('admin/edit-video/{video_id}', 'Admin\VideoController@edit');
    Route::post('admin/update-video', 'Admin\VideoController@update')->name('update.video');
    Route::get('admin/delete-video/{video_id}', 'Admin\VideoController@destroyVideo');
    Route::get('admin/draft-video/{video_id}', 'Admin\VideoController@draftVideo');
    Route::get('admin/publish-video/{video_id}', 'Admin\VideoController@publishVideo');

    //setting
    Route::get('admin/setting', 'Admin\SettingController@index')->name('setting.index');
    Route::post('admin/store-setting', 'Admin\SettingController@store')->name('setting.store');
    Route::post('admin/update-setting', 'Admin\SettingController@update')->name('update.setting');

    //agenda
    Route::get('admin/agenda', 'Admin\AgendaController@index')->name('agenda.index');
    Route::get('admin/add-agenda', 'Admin\AgendaController@add')->name('add.agenda');
    Route::post('admin/store-agenda', 'Admin\AgendaController@store')->name('store.agenda');
    Route::get('admin/edit-agenda/{agenda_id}', 'Admin\AgendaController@edit');
    Route::post('admin/update-agenda', 'Admin\AgendaController@update')->name('update.agenda');
    Route::get('admin/delete-agenda/{agenda_id}', 'Admin\AgendaController@destroyAgenda');
    Route::get('admin/draft-agenda/{agenda_id}', 'Admin\AgendaController@draftAgenda');
    Route::get('admin/publish-agenda/{agenda_id}', 'Admin\AgendaController@publishAgenda');


    //contact
    Route::get('admin/contact', 'Admin\ContactController@index')->name('message.index');
    Route::get('admin/reply-message/{message_id}', 'Admin\ContactController@replyMessage');
    Route::get('admin/delete-message/{message_id}', 'Admin\ContactController@destroyMessage');
    Route::post('admmin/reply-store', 'Admin\ContactController@storeReply')->name('reply.message');\

    //developer
    Route::get('admin/developer', 'Admin\DeveloperController@index')->name('developer');
    Route::get('admin/add-developer', 'Admin\DeveloperController@addDeveloper')->name('add.dev');
    Route::post('admin/store-dev', 'Admin\DeveloperController@storeDeveloper')->name('store.dev');
    Route::get('admin/edit-dev/{dev_id}', 'Admin\DeveloperController@editdev');
    Route::post('admin/update-dev', 'Admin\DeveloperController@updatedev')->name('update.dev');
    Route::get('admin/delete-dev/{dev_id}', 'Admin\DeveloperController@destroydev');
    Route::get('admin/draft-dev/{dev_id}', 'Admin\DeveloperController@draft');
    Route::get('admin/publish-dev/{dev_id}', 'Admin\DeveloperController@publish');
});

//listing
Route::get('admin/listing', 'Admin\ListingController@index')->name('listing.index');
Route::get('admin/add-listing', 'Admin\ListingController@add')->name('add.listing');
Route::post('admin/store-listing', 'Admin\ListingController@store')->name('store.listing');
Route::get('admin/edit-list/{listing_id}', 'Admin\ListingController@edit');
Route::post('admin/update-list', 'Admin\ListingController@updatelist')->name('update.list');
Route::get('admin/delete-list/{list_id}', 'Admin\ListingController@destroylist');
Route::get('admin/draft-list/{list_id}', 'Admin\ListingController@draft');
Route::get('admin/publish-list/{list_id}', 'Admin\ListingController@publish');

//coba galeri
Route::get('admin/gallery', 'GalleryController@index')->name('gallery.index');
Route::post('admin/store-video', 'GalleryController@store')->name('gallery.store');
Route::post('admin/gallery/update', 'GalleryController@update')->name('gallery.update');
Route::get('admin/add-gallery', 'GalleryController@add')->name('gallery.add');
Route::get('admin/gallery/delete/{id}', 'GalleryController@delete')->name('gallery.delete');
Route::get('admin/gallery/getByID/{id}', 'GalleryController@getByID')->name('gallery.getByID');
Route::get('admin/gallery/images/{id}', 'GalleryItemController@index')->name('gallery.images');
Route::post('admin/gallery/image/store', 'GalleryItemController@store')->name('gallery.image.store');
Route::post('admin/gallery/image/update', 'GalleryItemController@update')->name('gallery.image.update');
Route::get('admin/gallery/image/delete/{id}', 'GalleryItemController@delete')->name('gallery.image.delete');
Route::get('admin/draft-gallery/{gallery_id}', 'GalleryController@draft');
Route::get('admin/publish-gallery/{gallery_id}', 'GalleryController@publish');
//
// Route::view('/primary', 'dashboard/primary');
// Route::view('/secondary', 'dashboard/secondary');
// Route::view('/input', 'dashboard/inputsec');
// Route::view('/media', 'dashboard/mediamgr');

//dashboard
Route::get('search-catalog', 'DashboardController@search');
Route::get('dashboard-dev', 'DashboardController@dashboardev');
Route::get('dashboard-dev/item/{id}', 'DashboardController@devitem');
Route::get('dashboard-dev/detail/{id}', 'DashboardController@detail');
Route::get('dashboard-sec/detail/{id}', 'DashboardController@detailsec');