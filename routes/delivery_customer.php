<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DeliveryCustomerController;


Route::post('delivery_customer/register', [DeliveryCustomerController::class, 'register']);
Route::post('delivery_customer/login', [DeliveryCustomerController::class, 'login']);


Route::group([
    'namespace' => 'RiderCustomer',
    'prefix' => 'delivery_customer',
    'middleware' => 'auth:api'
], function () {
    Route::post('update-profile', [DeliveryCustomerController::class, 'updateProfile']);
    Route::post('update-password', [DeliveryCustomerController::class, 'updatePassword']);
    Route::post('request-delivery', [DeliveryCustomerController::class, 'requestDelivery']);

    // Route::post('get-delivery-requests', [DeliveryCustomerController::class, 'getDeliveryRequests']);
    // Route::post('cancel-delivery', [DeliveryCustomerController::class, 'cancelDelivery']);

    Route::post('rateDriver', [DeliveryCustomerController::class, 'rateDriver']);
});
