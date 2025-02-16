<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Login;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function home() {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $blog = Blog::all();

        return view('pages.home', compact('blog', 'data'));
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function testimonials() {
        return view('pages.testimonials');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function blog() {
        $blogs = Blog::all();
        return view('pages.blog-pages.blog', compact('blogs'));
    }

    public function blogDetails($id) {
        $blogDetails = Blog::findOrFail($id);

        $recentPost = Blog::all();
        return view('pages.blog-pages.blog-details', compact('blogDetails', 'recentPost'));
    }

    // Dislpay Add Post Page Function
    public function addPost() {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.blog-pages.add-post', compact('data'));
    }

    // Save Post Function
    public function saveAddPost(Request $request) {
        $validateData = $request -> validate([
            'author' => 'required|string',
            'title' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,svg|max:5048',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240', // 10MB max
            'message' => 'required|string',
        ]);

        $blog_id = 'ID' . mt_rand(1000, 9999);

        $post = new Blog();

        $post -> fill([
            'blog_id' => $blog_id,

            'author' => $validateData['author'],
            'title' => $validateData['title'],
            'message' => $validateData['message']
        ]);

        if($file = $request->hasFile('image')) {
         
            $file = $request->file('image');
            $fileName = 'IM_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/blog-images/';
            $file->move($destinationPath,$fileName);
            $post -> image = $fileName;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $fileName = 'VID_' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog-videos/');
            $file->move($destinationPath, $fileName);
            $post->video = 'uploads/blog-videos/' . $fileName; // Save relative path
        }

        $post -> save();
        return redirect('/blogs') -> with('success', 'Post Added Successfully');
    }

    public function dashboard() {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $posted = Blog::all() -> count();

        return view('pages.dashboard', compact('data', 'posted'));
    }

    // Display Posts Page Function
    public function blogs() {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $blogs = Blog::all();

        return view('pages.blogs', compact('data', 'blogs'));
    }

    // Delete Post Function
    public function deletePost($id) {
        $delete = Blog::findOrFail($id);

        $delete -> delete();
        return redirect('/blogs') -> with('success', 'Post Deleted Successfully');
    }

    // Display View Details Page Function
    public function viewDetails($id) {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $detail = Blog::findOrFail($id);

        return view('pages.blog-pages.view-details', compact('data', 'detail'));
    }

    // Display Edit Post Page Function
    public function editPost($id) {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $edit = Blog::findOrFail($id);

        return view('pages.blog-pages.edit-post', compact('edit', 'data'));
    }

    // Save Edit Post Function ( Update Post)
    public function saveEditPost(Request $request, $id) {
        $validateData = $request -> validate([
            'author' => 'required|string',
            'title' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,svg|max:5048',
            'message' => 'required|string',
        ]);

        $edit = Blog::findOrFail($id);

        $edit -> fill([
            'author' => $validateData['author'],
            'title' => $validateData['title'],
            'message' => $validateData['message'],
        ]);

        if($file = $request->hasFile('image')) {
         
            $file = $request->file('image');
            $fileName = 'IM_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/blog-images/';
            $file->move($destinationPath,$fileName);
            $edit -> image = $fileName;
        }

        $edit -> update();
        return redirect('/blogs') -> with('success', 'Post Updated Successfully');
    }

    // Display Customers Page Function
    public function customer() {
        $data = array();
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $customers = Customer::all();

        return view('pages.customers', compact('data', 'customers'));
    }

    public function subscribe(Request $request) {
        $validateData = $request -> validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $customer = new Customer();

        $customer -> fill([
            'name' => $validateData['name'],
            'email' => $validateData['email']
        ]);

        $customer -> save();
        return redirect() -> back();
    }
}
