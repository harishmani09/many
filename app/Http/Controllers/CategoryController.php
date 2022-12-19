<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $products = $category->products()->orderBy('created_at', 'desc')->paginate(1);
        // dd($category);
        return view('category.show', compact('category', 'products'));
    }
}
