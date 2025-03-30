<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function AllBlogCategory()
  {
    $category = BlogCategory::latest()->get();
    return view('admin.backend.blogcategory.blog_category', compact('category'));
  }
  public function StoreBlogCategory(Request $request)
  {
    BlogCategory::insert([
      'category_name' => $request->category_name,
      'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
    ]);
    $notification = array(
      'message' => 'BlogCategory Inserted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function EditBlogCategory($id)
  {
    $categories = BlogCategory::find($id);
    return response()->json($categories);
  }
}
