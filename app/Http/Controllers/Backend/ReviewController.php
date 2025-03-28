<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
  public function StoreReview(Request $request)
  {
    $course = $request->course_id;
    $instructor = $request->instructor_id;
    $request->validate([
      'comment' => 'required'
    ]);
    Review::insert([
      'course_id' => $course,
      'user_id' => Auth::id(),
      'comment' => $request->comment,
      'rating' => $request->rate,
      'instructor_id' => $request->instructor_id,
      'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Review Will Approve By Admin',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function AdminPendingRivew()
  {
    $review = Review::where('status', 0)->orderBy('id', 'desc')->get();
    return view('admin.backend.review.pending_review', compact('review'));
  }
  public function UpdateRivewStatus(Request $request)
  {
    $reviewId = $request->input('review_id');
    $isChecked = $request->input('is_checked', 0);
    $review = Review::find($reviewId);
    if ($review) {
      $review->status = $isChecked;
      $review->save();
    }
    return response()->json(['message' => 'Review Status Updated Successfully']);
  }
  public function AdminActiveRivew()
  {
    $review = Review::where('status', 1)->orderBy('id', 'desc')->get();
    return view('admin.backend.review.active_review', compact('review'));
  }
  public function InstructorAllReview()
  {
    $id = Auth::user()->id;
    $review = Review::where('instructor_id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
    return view('instructor.review.active_review', compact('review'));
  }
}
