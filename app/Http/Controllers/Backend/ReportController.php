<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function ReportView()
  {
    return view('admin.backend.report.report_view');
  }
  public function SearchByDate(Request $request)
  {
    $date = new DateTime($request->date);
    $formatDate = $date->format('d F Y');
    $payment = Payment::where('order_date', $formatDate)->latest()->get();
    return view('admin.backend.report.report_by_date', compact('payment', 'formatDate'));
  }
}
