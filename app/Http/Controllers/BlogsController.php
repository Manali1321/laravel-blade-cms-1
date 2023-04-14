<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function list()
    {
        return view('blogs.list', [
            'blogs' => Blog::all()
        ]);
    }

    public function addForm()
    {
        return view('blogs.add', [
            'blogs' => Blog::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'blog' => 'required',
            'link' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $attributes['title'];
        $blog->blog = $attributes['blog'];
        $blog->link = $attributes['link'];
        $blog->save();

        return redirect('/console/blogs/list')
            ->with('message', 'Blog has been added!');
    }

    public function editForm(Blog $blog)
    {
        return view('blogs.edit', [
            'blogs' => $blog,
        ]);
    }

    public function edit(Blog $blog)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'blog' => 'required',
            'link' => 'required',
        ]);

        $blog->title = $attributes['title'];
        $blog->blog = $attributes['blog'];
        $blog->link = $attributes['link'];
        $blog->save();

        return redirect('/console/blogs/list')
            ->with('message', 'blog has been edited!');
    }

    public function delete(Blog $blog)
    {



        $blog->delete();

        return redirect('/console/blogs/list')
            ->with('message', 'blog has been deleted!');
    }
    public function imageForm(Blog $blog)
    {
        return view('blogs.image', [
            'blog' => $blog,
        ]);
    }

    public function image(Blog $blog)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if ($blog->image) {
            Storage::delete($blog->image);
        }

        $path = request()->file('image')->store('blogs');

        $blog->image = $path;
        $blog->save();

        return redirect('/console/blogs/list')
            ->with('message', 'blog image has been edited!');
    }


}