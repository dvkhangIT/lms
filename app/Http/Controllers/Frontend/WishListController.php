<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
  public function AddToWishList(Request $request, $course_id)
  {
    if (Auth::check()) {
      $exists = Wishlist::where('user_id', Auth::id())->where('course_id', $course_id)->first();
      if (!$exists) {
        Wishlist::insert([
          'user_id' => Auth::id(),
          'course_id' => $course_id,
          'created_at' => Carbon::now()
        ]);
        return response()->json(['success' => 'Successfully Added on Your']);
      } else {
        return response()->json(['error' => 'This Product Has Already on your Wishlist']);
      }
    } else {
      return response()->json(['error' => 'At First Login Your Account']);
    }
  }
  public function AllWishlist()
  {
    return view('frontend.wishlist.all_wishlist');
  }
  public function GetWishlistCourse()
  {
    $wishlist = Wishlist::with('course')->where('user_id', Auth::id())->latest()->get();
    $wishlistQty = count($wishlist);
    return response()->json(['wishlist' => $wishlist, 'wishlistQty' => $wishlistQty]);
  }
  public function RemoveWishlist($id)
  {
    Wishlist::where('user_id', Auth::id())->where('id', $id)->delete();
    return response()->json(['success' => 'Successfully Course Remove']);
  }
}
