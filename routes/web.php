<?php

Route::get('/', 'PublicController@index');
Route::any('/register', 'UsersController@register');
Route::get('/loginpage',array('as'=>'login','uses'=>'UsersController@loginpage'));
Route::post('/login','UsersController@login');

Route::group(['middleware' => ['auth']], function () {
    Route::any('/my-profile', 'UsersController@myprofile');
    Route::any('/change-password', 'UsersController@change_password');
    Route::any('/edit-account', 'UsersController@edit_account');

    Route::any('/forgot-password', 'UsersController@forget_password');
    Route::any('/membership-status', 'UsersController@membership_status');
    //Route::any('/search-user','PublicController@search');
    Route::any('/search-user', 'PublicController@search_user');
    Route::any('/registration', 'UserDetailsController@registration');
    Route::get('/check-email','UsersController@checkEmail');
    Route::get('/review','UsersController@review');
    Route::any('edit-account/{id}', 'UsersController@updateuseraccount');
    Route::get('/view-profile/{id}','UsersController@view_profile');
    Route::delete('/my-profile/{id}', 'UserDetailsController@destroy');
    Route::get('/add-friend/{id}', 'UserDetailsController@addfriend');
    Route::get('/chat/{id}', 'UserDetailsController@chat');
    Route::get('/gift/{id}', 'UserDetailsController@gifts');
    Route::get('/remove-friend/{id}','UserDetailsController@removefriend');
    Route::get('/pending-request','UserDetailsController@pendingRequest');
    Route::get('/myfriends','UserDetailsController@myfriends');

    Route::get('/accept-request/{id}','UserDetailsController@accept');
    Route::match(['get','post'],'/reject-request/{id}','UserDetailsController@reject');

});

Route::get('/logoutuser','UsersController@logout');

Route::any('/contact-us', 'ContactUsController@contact_us');

Route::get('/about-us','PublicController@about');
Route::get('/policy','PublicController@policy');
Route::get('/termsandconditions','PublicController@tnc');

Route::get('/view-events','PublicController@events');
Route::get('/single-event/{id}', 'PublicController@single_events');


Route::get('/view-posts','PublicController@posts');
Route::get('/single-post/{id}', 'PublicController@single_posts');

Route::match(['get', 'post'], '/admin','AdminController@login');
Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');
    Route::get('admin/view_users', 'AdminController@view_user');
    Route::post('/admin/update-user-status','UsersController@updateUserStatus');
    Route::get('/admin/contactuser','AdminController@contactuser');
    Route::delete('/admin/contactuser/{id}','ContactUsController@delete');
    Route::delete('/admin/viewuser/{id}','UsersController@delete');
    Route::patch('/admin/edit_users/{id}','UsersController@edit');
    Route::any('/admin/{id}/edit_users','AdminController@edit');

    Route::get('/admin/view_posts' , 'PostController@index');
    Route::any('/admin/add_posts' , 'PostController@store');
    Route::delete('admin/view_posts/{id}', 'PostController@destroy');

    Route::get('/admin/view-about-serious-dating' , 'AboutSeriousDatingController@index');
    Route::any('/admin/add-about-serious-dating' , 'AboutSeriousDatingController@store');
    Route::delete('admin/view-about-serious-dating/{id}', 'AboutSeriousDatingController@destroy');

    Route::any('/admin/add_events' , 'EventController@store');
    Route::get('/admin/view_events' , 'EventController@index');
    Route::delete('admin/view_events/{id}', 'EventController@destroy');

});
Route::get('/logout','AdminController@logout');
