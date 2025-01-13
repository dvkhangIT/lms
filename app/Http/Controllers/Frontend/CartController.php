<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function AddToCart(Request $request, $id)
  {
    $course = Course::find($id);
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
}
