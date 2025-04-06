<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission as ModelsPermission;

class RoleController extends Controller
{
  public function AllPermission()
  {
    $permissions = ModelsPermission::all();
    return view('admin.backend.pages.permission.all_permission', compact('permissions'));
  }
}
