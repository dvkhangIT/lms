<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\Payment;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function AddToCart(Request $request, $id)
  {
    $course = Course::find($id);
    if (Session::has('coupon')) {
      Session::forget('coupon');
    }
    // check if the course is already in the cart
    $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
      return $cartItem->id === $id;
    });
    if ($cartItem->isNotEmpty()) {
      return response()->json(['error' => 'Course is already in your cart']);
    }
    if ($course->discount_price == null) {
      Cart::add([
        'id' => $id,
        'name' => $request->course_name,
        'qty' => 1,
        'price' => $course->selling_price,
        'weight' => 1,
        'options' => [
          'image' => $course->course_image,
          'slug' => $course->course_name_slug,
          'instructor' => $request->instructor
        ]
      ]);
    } else {
      Cart::add([
        'id' => $id,
        'name' => $request->course_name,
        'qty' => 1,
        'price' => $course->discount_price,
        'weight' => 1,
        'options' => [
          'image' => $course->course_image,
          'slug' => $course->course_name_slug,
          'instructor' => $request->instructor
        ]
      ]);
    }
    return response()->json(['success' => 'Successfully Added on Your Cart']);
  }
  public function CartData()
  {
    $cart = Cart::content();
    $cartTotal = Cart::total();
    $cartQty = Cart::count();
    return response()->json(array(
      'carts' => $cart,
      'cartTotal' => $cartTotal,
      'cartQty' => $cartQty
    ));
  }
  public function AddMiniCart()
  {
    $cart = Cart::content();
    $cartTotal = Cart::total();
    $cartQty = Cart::count();
    return response()->json(array(
      'carts' => $cart,
      'cartTotal' => $cartTotal,
      'cartQty' => $cartQty
    ));
  }
  public function RemoveMiniCart($rowId)
  {
    Cart::remove($rowId);
    return response()->json(['success' => 'Course Remove From Cart']);
  }
  public function Mycart()
  {
    return view('frontend.mycart.view_mycart');
  }
  public function GetCartCourse()
  {
    $cart = Cart::content();
    $cartTotal = Cart::total();
    $cartQty = Cart::count();
    return response()->json(array(
      'carts' => $cart,
      'cartTotal' => $cartTotal,
      'cartQty' => $cartQty
    ));
  }
  public function CartRemove($rowId)
  {
    Cart::remove($rowId);
    if (Session::has('coupon')) {
      $coupon_name = Session::get('coupon')['coupon_name'];
      $coupon = Coupon::where('coupon_name', $coupon_name)->first();
      Session::put("coupon", [
        'coupon_name' => $coupon->coupon_name,
        'coupon_discount' => $coupon->coupon_discount,
        'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
        'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100)
      ]);
    }
    return response()->json(['success' => 'Coures Remove From Cart']);
  }
  public function CouponApply(Request $request)
  {
    $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))->first();
    if ($coupon) {
      Session::put("coupon", [
        'coupon_name' => $coupon->coupon_name,
        'coupon_discount' => $coupon->coupon_discount,
        'discount_amount' => round(Cart::total() * $coupon->coupon_discount / 100),
        'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount / 100)
      ]);
      return response()->json(array(
        'validity' => true,
        'success' => 'Coupon Applited Successfully'
      ));
    } else {
      return response()->json(['error' => 'Invaild Coupon']);
    }
  }
  public function CouponCalculation()
  {
    if (session::has('coupon')) {
      return response()->json(array(
        'subtotal' => Cart::total(),
        'coupon_name' => session()->get('coupon')['coupon_name'],
        'coupon_discount' => session()->get('coupon')['coupon_discount'],
        'discount_amount' => session()->get('coupon')['discount_amount'],
        'total_amount' => session()->get('coupon')['total_amount']
      ));
    } else {
      return response()->json(array(
        'total' => Cart::total()
      ));
    }
  }
  public function CouponRemove()
  {
    Session::forget('coupon');
    return response()->json(['success' => 'Coupon Remove Successfully']);
  }
  public function CheckoutCreate()
  {
    if (Auth::check()) {
      if (Cart::total() > 0) {
        $carts = Cart::content();
        $cartTotal = Cart::total();
        $cartQty = Cart::count();
        return view('frontend.checkout.checkout_view', compact('carts', 'cartTotal', 'cartQty'));
      } else {
        $notification = array(
          'message' => 'Add At list One Course.',
          'alert-type' => 'error'
        );
        return redirect()->to('/')->with($notification);
      }
    } else {
      $notification = array(
        'message' => 'You Need to Login First.',
        'alert-type' => 'error'
      );
      return redirect()->route('login')->with($notification);
    }
  }
  public function Payment(Request $request)
  {
    if (Session::has('coupon')) {
      $total_amount = Session::get('coupon')['total_amount'];
    } else {
      $total_amount = round(Cart::total());
    }
    $data = new Payment();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
    $data->cash_delivery = $request->cash_delivery;
    $data->total_amount = $total_amount;
    $data->payment_type = 'Direct Payment';
    $data->invoice_no = 'EOS' . mt_rand(10000000, 99999999);
    $data->order_date = Carbon::now()->format('d F Y');
    $data->order_month = Carbon::now()->format('F');
    $data->order_year = Carbon::now()->format('Y');
    $data->status = 'pending';
    $data->created_at = Carbon::now();
    $data->save();
  }
}
