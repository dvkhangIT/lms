<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
  public function AdminAllCoupon()
  {
    $coupon = Coupon::latest()->get();
    return view('admin.backend.coupon.coupon_all', compact('coupon'));
  }
  public function AdminAddCoupon()
  {
    return view('admin.backend.coupon.coupon_add');
  }
  public function AdminStoreCoupon(Request $request)
  {
    Coupon::insert([
      'coupon_name' => strtoupper($request->coupon_name),
      'coupon_discount' => $request->coupon_discount,
      'coupon_validity' => $request->coupon_validity,
      'created_at' => $request->created_at,
    ]);
    $notification = array(
      'message' => 'Coupon Inserted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.all.coupon')->with($notification);
  }
}
