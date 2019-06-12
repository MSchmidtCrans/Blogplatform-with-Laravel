<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

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

        blog::create(request(['titel' ,'blogtext']));

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
        //
    }
}
