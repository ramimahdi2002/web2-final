<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function addCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'code' => ['required', 'string', 'max:255', 'unique:coupons'],
            'discount_percentage' => ['required', 'numeric', 'min:0', 'max:100'],
            'expires_at' => ['required', 'date'],
            'number_of_uses' => ['required', 'integer', 'min:0'],
            'store_id' => ['required', 'integer', 'exists:stores,id'],
        ]);

        $coupon = new Coupons([
            'code' => $validatedData['code'],
            'discount_percentage' => $validatedData['discount_percentage'],
            'expires_at' => $validatedData['expires_at'],
            'number_of_uses' => $validatedData['number_of_uses'],
            'store_id' => $validatedData['store_id'],
        ]);

        $coupon->save();
        return redirect()->route('list.coupon');
    }

    public function listCouponIndex($id)
    {

        $coupons = Coupons::where("store_id", $id)->get();
        return view('store/dashboard/Coupons/index')->with('coupons', $coupons);
    }


    // public function listcouponStore($id)
    // {

    //     $obj = Store::find("1");
    //     return $obj;
    //     return "this is the retrive function";
    // }
}
