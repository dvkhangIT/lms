<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
  public function AllPermission()
  {
    $permissions = Permission::all();
    return view('admin.backend.pages.permission.all_permission', compact('permissions'));
  }
  public function AddPermission()
  {
    return view('admin.backend.pages.permission.add_permission');
  }
  public function StorePermission(Request $request)
  {
    Permission::create([
      'name' => $request->name,
      'group_name' => $request->group_name,
    ]);
    $notification = array(
      'message' => 'Permission Created Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('all.permission')->with($notification);
  }
}
