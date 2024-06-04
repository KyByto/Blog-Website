<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index() {
        
        $blogs = Blog::with('user')->get();
        return view('blogs.index' , ['blogs' => $blogs]);
    }
    public function show($blog_id) {
        
        $blog = Blog::with('user')->find($blog_id);
        return view('blogs.show' , ['blog' => $blog]);
    }
    public function create()  {
        return view('blogs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = auth()->id();
        if ($imagePath) {
            $blog->image_path = $imagePath;
        }
    
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function edit($blog_id) {
        $blog = Blog::find($blog_id);
        return view('blogs.edit' , ['blog' => $blog]);
    }
    
    public function update(Request $request ) {
 $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $blog = Blog::find($request->blog_id);
        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
    
            if ($blog->image_path) {
                Storage::disk('public')->delete($blog->image_path);
            }
    
            $blog->image_path = $imagePath;
        }
 
        $blog->save();
        return redirect()->route('blog.index');
    }
    public function destroy($blog_id)  {
        Blog::destroy($blog_id);
        return redirect()->route('blog.index');
    }
}
