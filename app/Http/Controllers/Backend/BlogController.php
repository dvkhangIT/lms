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
}
