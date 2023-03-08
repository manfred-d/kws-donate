<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MPESAController;
use App\Http\Controllers\payments\mpesa\MPESAResponsesController;

Route::post('validate', function(Request $request){
    \Log::info($request->getContent());
});
Route::post('confirm', function(Request $request){
    \Log::info($request->getContent());
});
//create password
Route::get('/mpesa/password','MpesaController@lipaNaMpesaPassword');

//post response for access token
Route::post('/mpesa/token','MpesaController@newAccessToken');
//cybersource/backendcallback
//stk push
Route::post('/mpesa/stk','MpesaController@stkPush')->name('lipa');
Route::post('/cybersource/backendcallback','VisaController@getPaymentGatewayResponseHNB')->name('visa');
Route::post('/Payments/CyberSourceReceipt','VisaController@reciept')->name('visar');
// callback url
Route::post('/stk/callback','MpesaController@MpesaResponse');
Route::post('validation', [MPESAResponsesController::class, 'validation']);
Route::post('confirmation', [MPESAResponsesController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponsesController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MPESAResponsesController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MPESAResponsesController::class, 'transactionReversal']);

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    
Route::post('validation', [MPESAResponsesController::class, 'validation']);
Route::post('confirmation', [MPESAResponsesController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponsesController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MPESAResponsesController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MPESAResponsesController::class, 'transactionReversal']);


// Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Crm Status
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crm Customer
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crm Note
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crm Document
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    // Content Category
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Content Tag
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Content Page
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Contact Company
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Campaign
    Route::post('campaigns/media', 'CampaignApiController@storeMedia')->name('campaigns.storeMedia');
    Route::apiResource('campaigns', 'CampaignApiController');

    // Donations
    Route::apiResource('donations', 'DonationsApiController');

    // Transactions
    Route::apiResource('transactions', 'TransactionsApiController');

    // Product Category
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tag
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Product
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Faq Category
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faq Question
    Route::apiResource('faq-questions', 'FaqQuestionApiController');

    // Adoptions
    Route::apiResource('adoptions', 'AdoptionsApiController');
});
