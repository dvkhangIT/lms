<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Coupon Inserted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.all.coupon')->with($notification);
  }
  public function AdminEditCoupon($id)
  {
    $coupon = Coupon::find($id);
    return view('admin.backend.coupon.coupon_edit', compact('coupon'));
  }
  public function AdminUpdateCoupon(Request $request)
  {
    $coupon_id = $request->id;
    Coupon::find($coupon_id)->update([
      'coupon_name' => strtoupper($request->coupon_name),
      'coupon_discount' => $request->coupon_discount,
      'coupon_validity' => $request->coupon_validity,
      'updated_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Coupon Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.all.coupon')->with($notification);
  }
  public function AdminDeleteCoupon($id)
  {
    Coupon::find($id)->delete();
    $notification = array(
      'message' => 'Coupon Deleted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  // instructor coupon
  public function InstructorAllCoupon()
  {
    $id = Auth::user()->id;
    $coupon = Coupon::where('instructor_id', $id)->latest()->get();
    return view('instructor.coupon.coupon_all', compact('coupon'));
  }
  public function InstructorAddCoupon()
  {
    $id = Auth::user()->id;
    $courses = Course::where('instructor_id', $id)->get();
    return view('instructor.coupon.coupon_add', compact('courses'));
  }
}
