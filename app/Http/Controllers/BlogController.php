<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $blogs = Blog ::all();

        return view("backend.index",compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => "required",
            'description' => "required",
            'image' => "required|mimes:jpg,jpeg,png,gif|max:2048",
        ]);
    
        // Create a new Blog instance
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }
    
        // Save the blog post to the database
        $blog->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('message', 'Data stored successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);

        return view('backend.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
    
        // Create a new Blog instance
        $blog = Blog ::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }
    
        // Save the blog post to the database
        $blog->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('message','data deleted');
        

    }
}
