<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'store_id' => 'required',
            'title' => 'required',
            'code' => 'required',
            'discount' => 'required',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $coupon = new Coupon();
        $coupon->store_id = $request->store_id;
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->discount = $request->discount;
        $coupon->description = $request->description;
        $coupon->tracking_link = null; // Set tracking_link to null
        $coupon->start_date = null; // Set start_date to null
        $coupon->end_date = null; // Set end_date to null
        $coupon->status = $request->status ?? null; // Set status to null if not provided
        $coupon->save();

        return "Form submitted successfully.";
        
    }
}
