<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
  public function UpdateBlogCategory(Request $request)
  {
    $cat_id = $request->cat_id;
    BlogCategory::find($cat_id)->update([
      'category_name' => $request->category_name,
      'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
    ]);
    $notification = array(
      'message' => 'BlogCategory Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function DeleteBlogCategory($id)
  {
    BlogCategory::find($id)->delete();
    $notification = array(
      'message' => 'BlogCategory Deleted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }
  public function BlogPost()
  {
    $post = BlogPost::latest()->get();
    return view('admin.backend.post.all_post', compact('post'));
  }
  public function AddBlogPost()
  {
    $blogcat = BlogCategory::latest()->get();
    return view('admin.backend.post.add_post', compact('blogcat'));
  }
  public function StoreBlogPost(Request $request)
  {
    $image = $request->file('post_image');
    $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
    Image::make($image)->resize(370, 247)->save('upload/post/' . $image_gen);
    $save_url = 'upload/post/' . $image_gen;
    BlogPost::insert([
      'blogcat_id' => $request->blogcat_id,
      'post_title' => $request->post_title,
      'post_slug' => strtolower(str_replace(' ', '-', $request->post_title)),
      'post_image' => $request->$save_url,
      'long_descp' => $request->long_descp,
      'post_tags' => $request->post_tags,
      'post_image' => $save_url,
      'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Blog Post Inserted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('blog.post')->with($notification);
  }
  public function EditBlogPost($id)
  {
    $blogcat = BlogCategory::latest()->get();
    $post = BlogPost::find($id);
    return view('admin.backend.post.edit_post', compact('post', 'blogcat'));
  }
  public function UpdateBlogPost(Request $request)
  {
    $post_id = $request->id;
    if ($request->file('post_image')) {
      $image = $request->post_image;
      $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(370, 247)->save('upload/post/' . $image_gen);
      $save_url = 'upload/post/' . $image_gen;
      BlogPost::find($post_id)->update([
        'blogcat_id' => $request->blogcat_id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ', '-', $request->post_title)),
        'post_image' => $request->$save_url,
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'post_image' => $save_url,
        'created_at' => Carbon::now(),
      ]);
      $notification = array(
        'message' => 'Blog Post Updated Successfully',
        'alert-type' => 'success'
      );
      return redirect()->route('blog.post')->with($notification);
    } else {
      BlogPost::find($post_id)->update([
        'blogcat_id' => $request->blogcat_id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ', '-', $request->post_title)),
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'created_at' => Carbon::now(),

      ]);

      $notification = array(
        'message' => 'Blog Post Updated Successfully',
        'alert-type' => 'success'
      );
      return redirect()->route('blog.post')->with($notification);
    }
  }
}
