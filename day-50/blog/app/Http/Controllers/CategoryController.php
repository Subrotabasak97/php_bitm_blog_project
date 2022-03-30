<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add');
    }

    public function create(Request $request){
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category info create successfully.');
    }

    public function manage(){
        return view('admin.category.manage');
    }

    public function edit($id){
        return view('admin.category.edit');
    }

    public function update(Request $request, $id){
        return $request->all();
    }

    public function delete($id){
        return $id;
    }









}
