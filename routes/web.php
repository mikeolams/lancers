<?php

use Illuminate\Http\Request;
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

/**
 * Public Routes
*/
Route::get('/', function () { return view('welcome'); });
Route::get('/pricing', function () { return view('pricing'); });

//Guest Routes 
// Guest Onboarding
Route::get('guest/create_estimate', 'GuestController@step1')->middleware('guest');
Route::post('guest/project/create', 'GuestController@createproject')->middleware('guest');
Route::get('guest/create/estimate', 'GuestController@estimatecreate')->middleware('guest');
Route::post('guest/save/estimate', 'GuestController@estimatesave')->middleware('guest');	

Route::get('/guest/contact', function () { return view('guests/contact_support'); });
Route::post('/guest/process_contact_form',"GuestController@process_contact_form");

// Utility Routes
Route::get('/countries', 'DataController@countries');
Route::get('/states/{id}', 'DataController@states');
Route::get('/currencies', 'DataController@currencies');

// Authentication Routes
Auth::routes(['verify' => true]);
Route::post('/password/create', 'AuthController@create_password')->name('password.create');
// =========================== Not necessary - has been handled by Auth::routes() above
Route::get('/passwordresetconfirmation', function () { return view('passwordresetconfirmation');});
Route::get('/passwordresetmessage', function () { return view('passwordresetmessage'); });
Route::get('/passwordreset', function () { return view('passwordreset'); });
Route::get('/password/changed', function() { return view('passwordchanged'); });
// =========================================

// Generate PDF from Invoice
Route::get('/invoice/pdf', function() {
    $pdf = PDF::loadView('invoice_view_pdf');
    return $pdf->download('lancers_invoice.pdf');
});

// Client create password
Route::get('/email/client', function(Request $request){
    if ($request->query('email')) {
        return view('auth.passwords.create')->withEmail($request->query('email'));
    }
    abort(404);
});

Route::get('/create_estimate', function () {
    return view('create_estimate');
});
Route::get('/set_estimate', function () {
    return view('set_estimate');
});

Route::get('/send_invoice', function(){
    return view('send_invoice');
});

Route::get('/project_page', function(){
    return view('project_page');
});



Route::post('password/create', 'AuthController@create_password')->name('password.create');

Route::get('logout', 'AuthController@logout')->name('logout');


Route::post('/contracts/{project_id}/{template_id}', 'ContractControler@store')->name('create.contract');
Route::put('/contracts/{project_id}/{id}')->name('edit.contract');
Route::delete('/contracts/{project_id}/{id}')->name('delete.contract');

Route::get('/pricing', function () {
    return view('pricing');
});
//web route inside web view
//client
Route::get('/client', function () {
    return view('client');
});
Route::get('/project/status', function () {
    return view('project-status');
});


Route::get('/project/collabrators', function () {
    return view('project-collabrators');
});

Route::get('/invoice', function () {
    return view('invoice_view');
});
Route::get('/client-info', function () {
    return view('client-info');
});



Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/dashboard/profile/settings', 'ProfileController@index')->middleware('auth')->name('dashboard-profile');

Route::get('/pricing', "SubscriptionController@showSubscriptions")->name('subscriptions');

Route::get('users/subscribe/{txref}', "SubscriptionController@subscribeUser");


Route::get('/dashboard/emails/settings', "emailsettingsController@index")->middleware('auth');

Route::put('/users/settings/emails', "emailsettingsController@updateEmailSettings")->middleware('auth')->name('SET-EMAIL');


Route::post('/users/edit/profile/company', "ProfileController@editProfile")->middleware('auth')->name('edit-company');


Route::post('/users/edit/profile/personal', "ProfileController@editProfileUser")->middleware('auth')->name('edit-profile');

Route::post('/dashboard/edit/profile/image', "ProfileController@updateImage")->middleware('auth')->name('Profile-Image');

//Route::get('/users/subscriptions/{planId}', "SubscriptionController@subscribeUser")->middleware('auth');



Route::resource('transactions', 'TransactionsController');

Route::get('countries', 'DataController@countries');

Route::get('states/{id}', 'DataController@states');

Route::get('currencies', 'DataController@currencies');

Route::get('tasks', 'TaskController@getAllTasks');
Route::get('tasks/{id}', 'TaskController@getTask');
Route::post('tasks', 'TaskController@createTask');
Route::put('tasks/{id}', 'TaskController@updateTask');
Route::delete('tasks/{id}', 'TaskController@deleteTask');
Route::put('/tasks/{task}/team', 'TaskController@addTeam');

Route::get('estimates', 'EstimateController@index')->middleware('auth');
Route::get('estimates/{estimate}', 'EstimateController@show')->middleware('auth');
Route::post('estimates', 'EstimateController@store')->middleware('auth');
Route::put('estimates/{estimate}', 'EstimateController@update')->middleware('auth');
Route::delete('estimates/{estimate}', 'EstimateController@destroy')->middleware('auth');


//
Route::get('/invoice_sent', function () {
    return view('invoice_sent');
});

Route::get('/client-doc-view', function () {
    return view('client-doc-view');
});

Route::get('/invoice-view', function () {
    return view('invoice-view');
});


Route::get('guest/create_estimate', 'GuestController@step1')->middleware('guest');

Route::post('guest/project/create', 'GuestController@createproject')->middleware('guest');

Route::get('guest/create/estimate', 'GuestController@estimatecreate')->middleware('guest');
Route::post('guest/save/estimate', 'GuestController@estimatesave')->middleware('guest');





Route::get('/trackproject', function(){
    return view('trackproject');
});


Route::get('/transactions', 'TransactionsController@index');


Route::get('/invoice/pdf', function() {
    //return view('invoice_view_pdf');

    $pdf = PDF::loadView('invoice_view_pdf');
    return $pdf->download('lancers_invoice.pdf');
});


Route::get('test/pdf', function(){
    return view('invoice_view_pdf');
});


Route::get('password/changed', function() {
    return view('passwordchanged');
});

Route::get('add/client', function() {
    return view('addclients');
});

Route::get('invoice/review', function() {
    return view('reviewinvoice');
});

Route::get('guest/eval_estimate', function () {
    return view('eval_estimation');
});


//Invoice routes
Route::get('clients/{client}/invoices/{invoice}', 'InvoiceController@clientInvoice');
Route::get('invoices/{invoice}/getpdf', 'InvoiceController@getPdf');
Route::post('invoices/send', 'InvoiceController@sendinvoice');
Route::resource('invoices', 'InvoiceController');


Route::group(['middleware' => 'auth:web'], function(){
    // Auth
    Route::get('/logout', 'AuthController@logout')->name('logout');
    
    // Dashboard Routes
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/dashboard/profile', 'ProfileController@index')->name('dashboard-profile');
    Route::get('/dashboard/profile/view', 'ProfileController@userProfileDetails')->name('user-profile');
    
    // User Routes
    Route::post('/users/edit/profile', "ProfileController@editProfile")->middleware('auth')->name('edit-profile');
    Route::get('/users/subscriptions', "SubscriptionController@showSubscriptions")->middleware('auth')->name('subscriptions');
    Route::get('/users/subscriptions/{planId}', "SubscriptionController@subscribeUser")->middleware('auth');
    Route::get('users/subscribe/{txref}', "SubscriptionController@subscribeUser");
    Route::get('/users/view/subscriptions', "SubscriptionController@showPlan")->middleware('auth');
    Route::get('/users/settings/emails', "emailsettingsController@index")->middleware('auth');
    Route::put('/users/settings/emails', "emailsettingsController@updateEmailSettings")->middleware('auth')->name('SET-EMAIL');
    Route::post('/users/edit/profile/image', "ProfileController@updateImage")->middleware('auth')->name('Profile-Image');
    Route::get('/user/notifications', 'NotificationsController@notifications');
    Route::put('/user/notifications/read/{$id}', 'NotificationsController@markAsRead');
    Route::put('/user/notifications/read/all', 'NotificationsController@markAllAsRead');

    // Project Routes
    Route::get('/projects', 'ProjectController@list');
    Route::get('/project/status', 'ProjectController@list');
    Route::get('/project/track', function(){ return view('trackproject'); });
    Route::get('/project/collabrators', function () { return view('project-collabrators'); });

    Route::get('/clients', 'ClientController@list');
    Route::get('/client/add', function() { return view('clients.add'); });
    Route::post('/client/add', 'ClientController@store');
    Route::get('/client-info', function () { return view('client-info'); });
    
    //Invoice routes
    Route::get('/invoice-view', function () { return view('invoice-view'); });
    Route::get('/client-doc-view', function () { return view('client-doc-view'); });

    // Estimate Routes
    Route::get('/estimates', 'EstimateController@index')->middleware('auth');
    Route::post('estimates', 'EstimateController@store')->middleware('auth');
    Route::get('/estimate/create', function () { return view('set_estimate'); });
    Route::get('/estimates/{estimate}', 'EstimateController@show')->middleware('auth');
    Route::put('/estimates/{estimate}', 'EstimateController@update')->middleware('auth');
    Route::delete('/estimates/{estimate}', 'EstimateController@destroy')->middleware('auth');

    // Task Routes
    Route::get('/tasks', 'TaskController@getAllTasks');
    Route::get('/tasks/{id}', 'TaskController@getTask');
    Route::post('/tasks', 'TaskController@createTask');
    Route::put('/tasks/{id}', 'TaskController@updateTask');
    Route::delete('/tasks/{id}', 'TaskController@deleteTask');
    Route::put('/tasks/{task}/team', 'TaskController@addTeam');

    // Contract Routes
    Route::post('/contracts/{project_id}/{template_id}', 'ContractControler@store')->name('create.contract');
    Route::put('/contracts/{project_id}/{id}')->name('edit.contract');
    Route::delete('/contracts/{project_id}/{id}')->name('delete.contract');

    // Route::post('/pay', 'RaveController@initialize')->name('pay');
    // Route::get('payment/{type}/{ref?}', 'PaymentContoller@create');
    // Route::post('/rave/callback', 'RaveController@callback')->name('callback');
    Route::resource('transactions', 'TransactionsController');
    Route::get('/transactions', 'TransactionsController@index');
    Route::get('payment/subscription/{type}/{ref?}', 'PaymentContoller@create');
    Route::get('payment/invoice/{ref}', 'PaymentContoller@invoice'); //ref is the timestamp value of the created_at field



    Route::get('/projects', 'ProjectController@list');
    Route::get('/project/status', 'ProjectController@list');
    Route::get('/project/track', function(){ return view('trackproject'); });
    Route::get('/project/collabrators', function () { return view('project-collabrators'); });

    Route::get('/clients', 'ClientController@list');
    Route::get('/client/add', function() { return view('addclients'); });
    Route::get('/client-info', function () { return view('client-info'); });

    //Invoice routes
    Route::resource('invoices', 'InvoiceController');
    // Route::get('/invoices', 'InvoiceController@list');
    Route::get('/invoices/{invoice}/getpdf', 'InvoiceController@getPdf');
    Route::get('/invoice/pay/{txref}', 'InvoiceController@pay');
    Route::get('/invoice/review', function() { return view('reviewinvoice'); });
    Route::get('/invoice', function () { return view('invoice_view'); });
    Route::get('/invoice_sent', function () { return view('invoice_sent'); });
    Route::get('/invoice-view', function () { return view('invoice-view'); });
    Route::get('/client-doc-view', function () { return view('client-doc-view'); });


    Route::get('/notifications', 'NotificationsController@notifications');
    Route::get('user/notifications', 'NotificationsController@notifications');
    Route::put('user/notifications/read/{$id}', 'NotificationsController@markAsRead');

    Route::put('user/notifications/read/all', 'NotificationsController@markAllAsRead');
    

});


Route::get('test/pdf', function(){
    return view('invoice_view_pdf');
});

