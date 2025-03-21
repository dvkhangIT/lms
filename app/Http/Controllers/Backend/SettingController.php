<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SmtpSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
  public function SmtpSetting()
  {
    $smtp = SmtpSetting::find(1);
    return view('admin.backend.setting.smtp_update', compact('smtp'));
  }
  public function SmtpUpdate(Request $request)
  {
    $smtp_id = $request->id;
    SmtpSetting::find($smtp_id)->update([
      'mailer' => $request->mailer,
      'host' => $request->host,
      'port' => $request->port,
      'username' => $request->username,
      'password' => $request->password,
      'enscryption' => $request->enscryption,
      'from_address' => $request->from_address,
    ]);
    $notification = array(
      'message' => 'Smtp Setting Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
}
