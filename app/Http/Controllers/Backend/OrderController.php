<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function AdminPendingOrder()
  {
    $payment = Payment::where('status', 'pending')->orderBy('id', 'DESC')->get();
    return view('admin.backend.orders.pending_orders', compact('payment'));
  }
}
