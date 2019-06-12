<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Storage;
use File;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::All();

        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.blogcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        request()->validate([
            'titel' => 'required',
            'blogtext' => 'required'
        ]);
       
            $mime = null;
            $filename = null;
            $original_filename = null;

        if ($request->picture != null) {
        //Get picture file and set variables
        $picturefile = $request->file('picture');
        $pictureExtension = $picturefile->getClientOriginalExtension();
        $mime = $picturefile->getClientMimeType();
        $filename = $picturefile->getFilename().'.'.$pictureExtension;
        $original_filename = $picturefile->getClientOriginalName();

        //Store file
        Storage::disk('public')->put($picturefile->getFilename().'.'.$pictureExtension,  File::get($picturefile));
        }

        //Save new values to DB
        $blog = new blog;
        $blog->titel = $request->titel;
        $blog->blogtext = $request->blogtext;
        $blog->mime = $mime;
        $blog->original_filename = $original_filename;
        $blog->filename = $filename;
        $blog->save();

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

  
    public function update(Request $request, blog $blog)
    {
        $blog->update(request(['titel', 'blogtext']));

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();

        return redirect('/blog');
    }
}
