<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private $blogs;
    private $categories;

    public function index()
    {

        $this->categories = Category::all();
        return view('admin.blog.add', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        return $request->all();
    }

    public function manage()
    {
        return view('admin.blog.manage');
    }

    public function edit($id)
    {
        return view('admin.blog.edit');
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
