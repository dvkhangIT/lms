<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseSection;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Question;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function AdminPendingOrder()
  {
    $payment = Payment::where('status', 'pending')->orderBy('id', 'DESC')->get();
    return view('admin.backend.orders.pending_orders', compact('payment'));
  }
  public function AdminOrderDetails($payment_id)
  {
    $payment = Payment::where('id', $payment_id)->first();
    $orderItem = Order::where('payment_id', $payment_id)->orderBy('id', 'DESC')->get();
    return view('admin.backend.orders.admin_order_details', compact(
      'payment',
      'orderItem'
    ));
  }
  public function PendingToConfirm($payment_id)
  {
    Payment::find($payment_id)->update(['status' => 'confirm']);
    $notification = array(
      'message' => 'Order Confirm Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.confirm.order')->with($notification);
  }
  public function AdminConfirmOrder()
  {
    $payment = Payment::where('status', 'confirm')->orderBy('id', 'DESC')->get();
    return view('admin.backend.orders.confirm_orders', compact('payment'));
  }
  public function InstructorAllOrder()
  {
    $id = Auth::user()->id;
    $latestOrderItem = Order::where('instructor_id', $id)->select('payment_id', \DB::raw('MAX(id) as max_id'))->groupBy('payment_id');
    $orderItem = Order::joinSub($latestOrderItem, 'latest_order', function ($join) {
      $join->on('orders.id', '=', 'latest_order.max_id');
    })->orderBy('latest_order.max_id', 'DESC')->get();
    return view('instructor.orders.all_orders', compact('orderItem'));
  }
  public function InstructorOrderDetails($payment_id)
  {
    $payment = Payment::where('id', $payment_id)->first();
    $orderItem = Order::where('payment_id', $payment_id)->orderBy('id', 'DESC')->get();
    return view('instructor.orders.instructor_order_details', compact(
      'payment',
      'orderItem'
    ));
  }
  public function InstructorOrderInvoice($payment_id)
  {
    $payment = Payment::where('id', $payment_id)->first();
    $orderItem = Order::where('payment_id', $payment_id)->orderBy('id', 'DESC')->get();

    $pdf = Pdf::loadView('instructor.orders.order_pdf', compact('payment', 'orderItem'))
      ->setPaper('a4')
      ->setOption([
        'tempDir' => public_path(),
        'chroot' => public_path(),
      ]);
    return $pdf->download('invoice.pdf');
  }
  public function MyCourse()
  {
    $id = Auth::user()->id;
    $latestOrder = Order::where('user_id', $id)->select('course_id', \DB::raw('MAX(id) as max_id'))->groupBy('course_id');

    $mycourses = Order::joinSub($latestOrder, 'latest_order', function ($join) {
      $join->on('orders.id', '=', 'latest_order.max_id');
    })->orderBy('latest_order.max_id', 'DESC')->get();
    return view('frontend.mycourses.my_all_course', compact('mycourses'));
  }
  public function CourseView($course_id)
  {
    $id = Auth::user()->id;
    $course = Order::where('course_id', $course_id)->where('user_id', $id)->first();
    $section = CourseSection::where('course_id', $course_id)->orderBy('id', 'asc')->get();
    $allquestions = Question::latest()->get();
    return view('frontend.mycourses.course_view', compact('course', 'section', 'allquestions'));
  }
}
