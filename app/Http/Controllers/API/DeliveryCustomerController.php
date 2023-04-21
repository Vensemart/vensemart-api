<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeliveryRequests;
use App\Models\DeliveryRequestStatus;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DeliveryCustomerController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'device_name' => 'required|string',
            'device_token' => 'required|string',
            'device_type' => 'required|string',
            'device_id' => 'required|string',
            'mobile' => 'required|string|unique:users'
        ]);

        $users = User::where(function ($query) use ($request) {
            $query->where('email', $request->email);
            $query->orwhere('mobile', $request->mobile);
        })
            ->first();

        if ($users) {
            return $this->sendError(null, 'User already exists.');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'device_name' => $request->device_name,
            'device_token' => $request->device_token,
            'device_type' => $request->device_type,
            'device_id' => $request->device_id,
            'type' => 5
        ]);

        $token = $user->createToken($request->device_name)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return $this->sendResponse('User registered successfully.', $response);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'device_name' => 'required|string',
            'device_token' => 'required|string',
            'device_type' => 'required|string',
            'device_id' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendError(null, 'The provided credentials are incorrect.');
        }

        $user->device_name = $request->device_name;
        $user->device_token = $request->device_token;
        $user->device_type = $request->device_type;
        $user->device_id = $request->device_id;
        $user->save();

        $token = $user->createToken($request->device_name)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return $this->sendResponse('User logged in successfully.', $response);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'string|max:255',
            'gender' => 'string',
            'address' => 'string',
        ]);

        $user = auth()->user();

        $user = User::where('id', $user->id)->first();

        if (!$user) {
            return $this->sendError(null, 'User not found.');
        }

        // update when data is not empty
        $user->name = $request->input('name') ?? $user->name;
        $user->gender = $request->input('gender') ?? $user->gender;
        $user->address = $request->input('address') ?? $user->address;

        $user->save();

        return $this->sendResponse('User updated successfully.', $user);
    }

    public function rateDriver(Request $request)
    {
        $request->validate([
            'order_id' => 'required|integer',
            'driver_id' => 'required|integer',
            'rating' => 'required|integer',
            'comment' => 'string'
        ]);

        $user = auth()->user();

        if (!$user) {
            return $this->sendError(null, 'User not found.');
        }

        $driver = User::where('id', $request->driver_id)->first();

        if (!$driver) {
            return $this->sendError(null, 'Driver not found.');
        }

        $order = Orders::where('id', $request->order_id)->first();

        if (!$order) {
            return $this->sendError(null, 'Order not found.');
        }

        $delivery = DeliveryRequestStatus::where('order_id', $request->order_id)->first();

        if (!$delivery) {
            return $this->sendError(null, 'Delivery not found.');
        }

        $delivery->rating = $request->rating;
        $delivery->comment = $request->comment;

        $delivery->save();

        return $this->sendResponse('Rating submitted successfully.', $delivery);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        $user = auth()->user();

        $user = User::where('id', $user->id)->first();

        if (!$user) {
            return $this->sendError(null, 'User not found.');
        }

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return $this->sendError(null, 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->input('new_password'));

        $user->save();

        return $this->sendResponse(null, 'Password updated successfully.');
    }

    public function requestDelivery(Request $request)
    {
        $request->validate([
            'from_lat',
            'to_lat',
            'from_lng',
            'to_lng'
        ]);

        // Find the distance from from cords to to cords

        $distance = $this->getDistance($request->from_lat, $request->from_lng, $request->to_lat, $request->to_lng);

        $deliveryChargePerKm = 300;


        $deliveryfee = $distance * $deliveryChargePerKm;

        $this->sendResponse(
            'Delivery Fee',
            $deliveryfee
        );
    }
}
