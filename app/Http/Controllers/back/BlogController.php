<?php

namespace App\Http\Controllers\back;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('back.blog.index',compact('blogs'));
    }

    public function create()
    {
        return view('back.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->titlefa  = $request->textfa;
        $blog->titleen  = $request->texten;
        $blog->titletur  = $request->texttur;
        $blog->textfa  = $request->fades;
        $blog->texten  = $request->endes;
        $blog->texttur  = $request->turdes;
        $blog->status  = $request->status;
        $blog->save();

        $photo = $request->input('photo_id')[0];
        $photo = Photo::find($photo);
        if (isset($photo)) {
            $photo->blog_id = $blog->id;
            $photo->save();
        }

        return redirect()->route('blog.index')->with('success','مقاله جدید با موفقیت ایجاد شد.');
    }

    public function show(blog $blog)
    {
        //
    }

    public function edit(blog $blog)
    {
        return view('back.blog.edit',compact('blog'));
    }

    public function update(Request $request, blog $blog)
    {
        $blog->titlefa  = $request->textfa;
        $blog->titleen  = $request->texten;
        $blog->titletur  = $request->texttur;
        $blog->textfa  = $request->fades;
        $blog->texten  = $request->endes;
        $blog->texttur  = $request->turdes;
        $blog->status  = $request->status;
        $blog->save();

        $photo = $request->input('photo_id')[0];
        $photo = Photo::find($photo);
        if (isset($photo)) {
            $photo->blog_id = $blog->id;
            $photo->save();
        }

        return redirect()->route('blog.index')->with('success','تغییرات با موفقیت ثبت شد.');
    }

    public function destroy(blog $blog)
    {
        $photo = Photo::where('blog_id',$blog->id)->first();
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        $blog->delete();

        return back()->with('danger','مقاله با موفقیت حذف شد.');
    }
}
