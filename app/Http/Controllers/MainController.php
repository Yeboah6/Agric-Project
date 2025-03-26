<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Login;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    // Display Home Page Function
    public function home() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.home', compact('data'));
    }

    // Display About Page Function
    public function about() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.about', compact('data'));
    }

    // Display Services Page Function
    public function services() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.services', compact('data'));
    }

    // Display Testimonials Page Function
    public function testimonials() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.testimonials', compact('data'));
    }

    // Display Contact Page Function
    public function contact() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('pages.contact', compact('data'));
    }

    // Send Message From Contact Function
    public function postContact(Request $request) {
        $validateData = $request -> validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|max:500'
        ]);

        try {
            Mail::to($validateData['email'])->send(new ContactMail($validateData));
            return response() -> json(['success' => true, 'message' => 'Message sent successfully!']);
        } catch (\Exception $e) {
            return response() -> json(['success' => false, 'message' => 'Failed to send message. Please try again.']);
        }
    }

    // Display Blog Page Function
    public function blog() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $blogs = Blog::all();
        return view('pages.blog-pages.blog', compact('blogs', 'data'));
    }

    // Display Blog Details Page Function
    public function blogDetails($id) {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }
    
        $blogDetails = Blog::findOrFail($id);
    
        // Get only the comments that belong to this blog post
        $comments = Comments::where('post_id', $blogDetails -> id) -> get();
        $commentcount = Comments::where('post_id', $blogDetails -> id) -> count();
    
        $recentPost = Blog::latest() -> limit(5) -> get(); // Get the latest 5 posts
    
        return view('pages.blog-pages.blog-details', compact('blogDetails', 'recentPost', 'data', 'comments', 'commentcount'));
    }    

    // Dislpay Add Post Page Function
    public function addPost() {
        $data = [];
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
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:40240', // 40MB max
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
            $fileName = 'VID_' . time() . '.' . $file -> getClientOriginalExtension();
            $destinationPath = public_path().'/uploads/blog-videos/';
            $file->move($destinationPath, $fileName);
            $post->video = $fileName; // Save relative path
        }

        $post -> save();
        return redirect('/blogs') -> with('success', 'Post Added Successfully');
    }

    // Display Dashboard Page Function
    public function dashboard() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $posted = Blog::all() -> count();
        $customers = Customer::all() -> count();
        $comments = Comments::all() -> count();
        $recentPost = Blog::latest() -> limit(5) -> get(); // Get the latest 5 posts

        return view('pages.dashboard', compact('data', 'posted', 'customers', 'comments', 'recentPost'));
    }

    // Display Posts Page Function
    public function blogs() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        // Fetch paginated blog posts (10 per page)
        $blogs = Blog::paginate(10);

        return view('pages.blogs', compact('data', 'blogs'));
    }

    // Delete Post Function
    public function deletePost($id) {
        $delete = Blog::findOrFail($id);

        $delete -> delete();
        return redirect('/blogs') -> with('success', 'Post Deleted Successfully');
    }

    // Delete Customer Function
    public function deleteCustomer($id) {
        $delete = Customer::findOrFail($id);

        $delete -> delete();
        return redirect('/customers') -> with('success', 'Post Deleted Successfully');
    }

    // Display View Details Page Function
    public function viewDetails($id) {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $detail = Blog::findOrFail($id);

        return view('pages.blog-pages.view-details', compact('data', 'detail'));
    }

    // Display Edit Post Page Function
    public function editPost($id) {
        $data = [];
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
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:40240', // 40MB max
            'message' => 'required|string',
        ]);

        $edit = Blog::findOrFail($id);

        $edit -> fill([
            'author' => $validateData['author'],
            'title' => $validateData['title'],
            'message' => $validateData['message'],
        ]);

        if($file = $request -> hasFile('image')) {
         
            $file = $request->file('image');
            $fileName = 'IM_'.$file -> getClientOriginalName();
            $destinationPath = public_path().'/uploads/blog-images/';
            $file -> move($destinationPath,$fileName);
            $edit -> image = $fileName;
        }

        if ($request -> hasFile('video')) {
            $file = $request -> file('video');
            $fileName = 'VID_' . time() . '.' . $file -> getClientOriginalExtension();
            $destinationPath = public_path().'/uploads/blog-videos/';
            $file -> move($destinationPath, $fileName);
            $edit -> video = $fileName; // Save relative path
        }

        $edit -> update();
        return redirect('/blogs') -> with('success', 'Post Updated Successfully');
    }

    // Display Edit Customers Page Function
    public function editCustomer(Request $request, $id) {
        $validateData = $request -> validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $updateCustomer = Customer::findOrFail($id);

        $updateCustomer -> fill([
            'name' => $validateData['name'],
            'email' => $validateData['email']
        ]);

        $updateCustomer -> update();
        return redirect('/customers') -> with('success', 'Customer Updated Successfully');
    }

    // Display Customers Page Function
    public function customer() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        $customers = Customer::all();

        return view('pages.customers', compact('data', 'customers'));
    }

    // Subscribing to Newsletter Page Function
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

    // Send Newsletter To all Customers Function
    public function sendEmailNotification() {
        $customers = Customer::pluck('email')->toArray();
        // $blog = Blog::all();
        $latestBlog = Blog::latest()->first();

         // Ensure there is a blog post to send
        if (!$latestBlog) {
            return "No blog post available.";
        }

        // Ensure the `$details` array contains required keys
        $blog = [
            'title'   => $latestBlog -> title ?? 'Untitled',
            'image'   => !empty($latestBlog -> image) ? asset($latestBlog->image) : null, // Ensure image is included
            'author'  => $latestBlog -> author ?? 'Unknown Author',
            'message'  => $latestBlog -> message ?? 'No Message',
        ];

        foreach ($customers as $customer) {
            Mail::to($customer)
            -> send(new Newsletter($blog));
        }

        return redirect('/customers') -> with('success', 'Email has Successfully been sent');
    
    }

    // Posting Comment Function
    public function comment(Request $request) {
        $validateData = $request->validate([
            'post_id' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string'
        ]);
    
        $comment = new Comments();

        $comment->fill([
            'post_id' => $validateData['post_id'],
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'comment' => $validateData['comment'],
        ]);
    
        $comment->save();
    
        // Return JSON response instead of redirecting
        return response()->json([
            'success' => true,
            'message' => 'Comment posted successfully!',
            'comment' => $comment
        ]);
    }

}
