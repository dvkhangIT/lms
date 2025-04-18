<?php

namespace App\Http\Controllers;

use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
  public function EditPermission($id)
  {
    $permission = Permission::find($id);
    return view('admin.backend.pages.permission.edit_permission', compact('permission'));
  }
  public function UpdatePermission(Request $request)
  {
    $per_id = $request->id;
    Permission::find($per_id)->update([
      'name' => $request->name,
      'group_name' => $request->group_name,
    ]);
    $notification = array(
      'message' => 'Permission Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('all.permission')->with($notification);
  }
  public function DeletePermission($id)
  {
    Permission::find($id)->delete();

    $notification = array(
      'message' => 'Permission Deleted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function ImportPermission()
  {
    return view('admin.backend.pages.permission.import_permission');
  }
  public function Export()
  {
    return Excel::download(new PermissionExport, 'permission.xlsx');
  }
  public function Import(Request $request)
  {
    Excel::import(new PermissionImport, $request->file('import_file'));
    $notification = array(
      'message' => 'Permission Imported Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function AllRoles()
  {
    $roles = Role::all();
    return view('admin.backend.pages.roles.all_roles', compact('roles'));
  }
  public function AddRoles()
  {
    return view('admin.backend.pages.roles.add_roles');
  }
  public function StoreRoles(Request $request)
  {
    Role::create([
      'name' => $request->name,
    ]);
    $notification = array(
      'message' => 'Role Created Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('all.roles')->with($notification);
  }
  public function EditRoles($id)
  {
    $roles = Role::find($id);
    return view('admin.backend.pages.roles.edit_roles', compact('roles'));
  }
  public function UpdateRoles(Request $request)
  {
    $role_id = $request->id;
    Role::find($role_id)->update([
      'name' => $request->name
    ]);
    $notification = array(
      'message' => 'Role Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('all.roles')->with($notification);
  }
  public function DeleteRoles($id)
  {
    Role::find($id)->delete();
    $notification = array(
      'message' => 'Role Deleted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function AddRolesPermission()
  {
    $roles = Role::all();
    $permission_groups = User::getpermissionGroups();
    $permissions = Permission::all();
    return view('admin.backend.pages.rolesetup.add_roles_permission', compact('roles', 'permission_groups', 'permissions'));
  }
}
