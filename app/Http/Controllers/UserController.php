<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function index()
  {
    return view('frontend.index');
  }
  public function UserProfile()
  {
    $id = Auth::user()->id;
    $profileData = User::find($id);
    return view('frontend.dashboard.edit_profile', compact('profileData'));
  }
  public function UserProfileUpdate(Request $request)
  {
    $id = Auth::user()->id;
    $data = User::find($id);
    $data->name = $request->name;
    $data->username = $request->username;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
    if ($request->file('photo')) {
      $file = $request->file('photo');
      @unlink(public_path('upload/user_images/' . $data->photo));
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->move(public_path('upload/user_images'), $filename);
      $data['photo'] = $filename;
    }
    $data->save();
    $notification = array(
      'message' => 'User Profile Updated Successfully.',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function UserLogout(Request $request)
  {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    $notification = array(
      'message' => 'Logout Successfully.',
      'alert-type' => 'info'
    );
    return redirect('/login')->with($notification);
  }
  public function UserChangePassword()
  {
    return view('frontend.dashboard.change_password');
  }
  public function UserPasswordUpdate(Request $request)
  {
    $request->validate([
      'old_password' => 'required',
      'new_password' => 'required|confirmed',
    ]);
    /// Validation
    if (!Hash::check($request->old_password, auth::user()->password)) {
      $notification = array(
        'message' => 'Old Password Does Not Match!',
        'alert-type' => 'error'
      );
      return redirect()->back()->with($notification);
    }
    /// Update the new password
    User::whereId(auth()->user()->id)->update([
      'password' => Hash::make($request->new_password)
    ]);
    $notification = array(
      'message' => 'Password change successfully.',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
}
