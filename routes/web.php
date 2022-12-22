<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminPropertyController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlaneController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\QuestinController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ClientPanelController;
use App\Http\Controllers\Client\LeaseController;
use App\Http\Controllers\Client\PDFController;
use App\Http\Controllers\Client\PropertyController;
use App\Http\Controllers\Client\RentalController;
use App\Http\Controllers\Customization\CustomizationController;
use App\Http\Controllers\frontend\HomController;
use App\Http\Controllers\User\UserController;
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
Route::group(['middleware' => ['admin-guard'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {

        return view('admin.layouts.master');
    });
    Route::get('/dashboard', [AuthenticationController::class, 'Dashboard']);
    Route::get('/sign-out', [AuthenticationController::class, 'logout']);
    Route::post('/change-password', [AdminController::class, 'changePassword']);
    Route::view('/new-password', 'CustomAuthentication.new_password');
    Route::post('/update-password', [AuthenticationController::class, 'NewPassword']);
    Route::get('/admin-profile', [AdminController::class, 'editProfile']);
    Route::post('/update-admin-profile/{id}', [AdminController::class, 'updateAdminProfile']);
    Route::view('/change-password', 'admin.CustomAuthentication.change_password');

    //  Admin Frontend routes
    Route::view('/add-user', 'admin.User.add_user');
    Route::get('/home-page-customization', [CustomizationController::class, 'homeCustomization']);
    //  Users Backend routes
    Route::get('/users-list', [UserController::class, 'create']);
    Route::get('/edit-user/{id}', [UserController::class, 'edit']);
    Route::post('/save-user', [UserController::class, 'store']);
    Route::post('/update-user/{id}', [UserController::class, 'update']);
    Route::post('/delete-user/{id}', [UserController::class, 'destroy']);
    Route::resource('plan', PlaneController::class);
    Route::resource('termsConditions', TermConditionController::class);
    Route::resource('privacy', PrivacyController::class);
    Route::get('/section/completely-free', [HomeContentController::class, 'completely_free']);
    Route::get('/section/free-system', [HomeContentController::class, 'free_system']);
    Route::get('/section/try-system', [HomeContentController::class, 'try_system']);
    Route::get('/section/occupancy-protocol', [HomeContentController::class, 'occupancy_protocol']);
    Route::get('/section/lease', [HomeContentController::class, 'lease']);
    Route::get('/section/rent', [HomeContentController::class, 'rent']);
    Route::get('/section/rent-guarantee', [HomeContentController::class, 'rent_guarantee']);
    Route::get('/section/all-features', [HomeContentController::class, 'all_features']);
    Route::get('/section/logo', [HomeController::class, 'index']);
    Route::get('/section/change-logo/{id}', [HomeController::class, 'chnage_logo']);
    Route::post('/section/update-logo/{id}', [HomeController::class, 'update_logo']);
    Route::resource('section', HomeContentController::class);
    Route::resource('question', QuestinController::class);
    Route::get('/admin-property/block{id}', [AdminPropertyController::class, 'block']);
    Route::get('/admin-property/unblock{id}', [AdminPropertyController::class, 'unblock']);
    Route::resource('admin-property', AdminPropertyController::class);

});
Route::post('/register', [AuthenticationController::class, 'signUp']);
Route::view('/sign-up', 'admin.CustomAuthentication.sign_up');
Route::post('/sign-in', [AuthenticationController::class, 'SigningIn']);
Route::view('/login', 'admin.CustomAuthentication.login')->name('login');
Route::view('/forgot-password', 'admin.CustomAuthentication.password_reset');
Route::post('/reset-password', [AuthenticationController::class, 'ResetPassword']);
Route::get('/check-reset-token/{id}', [AuthenticationController::class, 'CheckResetPasswordToken']);

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
 */
//Route::view('/', 'frontend.index');

Route::get('/', [\App\Http\Controllers\frontend\HomController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\frontend\HomController::class, 'index'])->name('home');
Route::view('client/contact-us', 'frontend.contact_us');
Route::post('contact-us', [HomeController::class, 'contact_us']);
Route::group(['prefix' => 'client'], function () {
    Route::get('/login', [ClientController::class, 'index']);
    Route::view('/sign-up', 'frontend.auth.sign_up');
    Route::view('/forgot-password', 'frontend.auth.forgot_password');
    Route::post('/sign-in', [ClientController::class, 'clientSignIn']);
    Route::view('/prices', 'frontend.price');
    Route::view('/all-features', 'frontend.all-features');
    Route::namespace ('\App\Http\Controllers\frontend')->group(function () {
        Route::get('/management-system', 'HomController@management');
        Route::get('/deposit-account', 'HomController@deposit_account');
        Route::get('/occupancy-protocol', 'HomController@occupancy_protocol');
        // Route::get('/occupancy-protocol','HomController@occupancy_protocol');
        Route::get('/precise-rent-contract', 'HomController@precise_rent_contract');
        Route::get('/digital-lease', 'HomController@digital_lease');
        Route::get('/rent-collection', 'HomController@rent_collection');
        Route::get('/rent-guarantee', 'HomController@rent_guarantee');
        Route::get('/privacy', 'HomController@privacy_policy');
        Route::get('/terms-conditions', 'HomController@term_condition');
        Route::get('/all-features', 'HomController@features');
    });

    Route::post('/send-new-password', [ClientController::class, 'ResetPassword']);
    Route::get('/check-reset-token/{id}', [ClientController::class, 'CheckResetPasswordToken']);
    Route::get('/check-email-token/{id}', [ClientController::class, 'CheckEmailToken']);
    Route::post('/verify-phone-token/{token}', [ClientController::class, 'VerifyPhoneNumber']);
    Route::post('/change-password', [ClientController::class, 'NewPassword']);
    Route::post('/register', [ClientController::class, 'registerUser']);

    Route::group(['middleware' => 'client-auth'], function () {
        Route::get('/dashboard', [App\Http\Controllers\frontend\HomController::class, 'Front_index']);
        Route::view('/leases/open-lease', 'frontend.front_panel_files.leases.open_lease');
        Route::view('/properties/create-property', 'frontend.front_panel_files.property.create_property');
        Route::get('/leases/all-leases', [LeaseController::class, 'all_leases']);
        Route::view('/leases', 'frontend.front_panel_files.leases.leases');
        Route::get('/properties/all-rental-properties', [RentalController::class, 'allRental'])->name('allRental');
        Route::get('/properties/info-rental-property/{id}', [RentalController::class, 'edit']);
        Route::post('/properties/rental-update', [RentalController::class, 'update']);
        Route::get('/properties/all-properties', [PropertyController::class, 'index'])->name('allProperties');
        Route::post('/store-property', [PropertyController::class, 'store']);
        Route::get('/properties/info-property/{id}', [PropertyController::class, 'edit']);
        Route::post('property-update', [PropertyController::class, 'update']);
        Route::get('/properties/create-rental-object', [RentalController::class, 'index']);
        Route::post('/rental-object-store', [RentalController::class, 'store']);
        Route::get('/administration', [ClientPanelController::class, 'administrative']);
        Route::post('/profile-settings', [ClientPanelController::class, 'profileSetting']);
        Route::post('/update-profile', [ClientPanelController::class, 'updateProfile']);
        Route::get('/logout', [ClientController::class, 'logout']);
        Route::get('leases/create-lease', [LeaseController::class, 'index']);
        Route::get('leases/open-lease/{id}', [LeaseController::class, 'open_lease']);
        Route::get('leases/cancel-tenant-invitation/{id}', [LeaseController::class, 'cancel_invitation']);
        Route::get('/get-property', [LeaseController::class, 'get_property']);
        Route::get('/get-property-rental-object', [LeaseController::class, 'get_rental_object']);
        Route::post('/lease-step1', [LeaseController::class, 'lease_step1']);
        Route::post('/edit-lease-step1', [LeaseController::class, 'edit_lease_steps']);
        Route::get('/lease-edit/{id}', [LeaseController::class, 'edit']);
        Route::post('lease/update-account', [LeaseController::class, 'update_account']);
        Route::post('lease/update-duedate', [LeaseController::class, 'update_duedate']);
        Route::get('/lease-delete/{id}', [LeaseController::class, 'delete']);
        Route::get('/leases/lease-delete/{id}', [LeaseController::class, 'delete']);
        Route::post('/edit-rentalObject', [LeaseController::class, 'edit_rentalObject']);
        Route::post('/lease-store', [LeaseController::class, 'lease_store']);
        Route::post('/lease-edit', [LeaseController::class, 'lease_edit']);
        Route::post('/account-save', [ClientController::class, 'account_save']);
        Route::post('/save-message', [ChatController::class, 'saveMessage']);
        Route::get('/messages', [ChatController::class, 'getChats']);
        Route::get('/get-messages/{id}', [ChatController::class, 'getMessages']);
        Route::get('/delete-chated-user/{id}', [ChatController::class, 'deleteChatedUser']);
        Route::get('/delete-message/{id}', [ChatController::class, 'deleteMessage']);
        Route::get('/get-users', [ChatController::class, 'getUsers']);

    });

});
/** pdf report and digital signaterd routes */
Route::get('view/pdf/{id}', [PDFController::class, 'index'])->name('view.pdf');
Route::get('open/pdf/{id}', [PDFController::class, 'openPdf'])->name('open.pdf');
Route::post('signature/save/{id}', [PDFController::class, 'signatured'])->name('signature.save');

Route::group(['middleware' => 'tenant', 'prefix' => 'tenant'], function () {
    Route::get('/create-lease', [LeaseController::class, 'tenant_leases']);
    Route::get('/dashboard', [HomController::class, 'tenant_index']);
    Route::post('/tenant-lease-complete/{id}', [LeaseController::class, 'tenant_leases_complete']);
    Route::get('/open-lease/{id}', [LeaseController::class, 'open_leases']);
    Route::get('/administration', [ClientPanelController::class, 'administrative']);
    Route::post('/profile-settings', [ClientPanelController::class, 'profileSetting']);
    Route::post('/update-profile', [ClientPanelController::class, 'updateProfile']);
    Route::get('/logout', [ClientController::class, 'logout']);
    Route::get('/chat/{id}', [ChatController::class, 'chat']);
    Route::post('/save-message', [ChatController::class, 'saveMessage']);
    Route::get('/messages', [ChatController::class, 'getChats'])->name('messages');
    Route::get('/get-messages/{id}', [ChatController::class, 'getMessages']);
    Route::get('/delete-chated-user/{id}', [ChatController::class, 'deleteChatedUser']);
    Route::get('/delete-message/{id}', [ChatController::class, 'deleteMessage']);
    Route::get('/get-users', [ChatController::class, 'getUsers']);

});
Route::get('/leases-detail/{id}', [LeaseController::class, 'lease_detail']);
