<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActiveUserController extends Controller
{
  public function AllUser()
  {
    $users = User::where('role', 'user')->latest()->get();
    return view('admin.backend.user.user_all', compact('users'));
  }
}
