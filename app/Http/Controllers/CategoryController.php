<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function storecategory()
    {
        Category::create([
            'category' => request('categorytitle')
        ]);

        return back();
    }

    public function showCategory(Category $item) {
        $categoryshow = Post::where(['category_id' => $item->id])->get();
        return view('shop.pages.category', compact('categoryshow'));
    }
}
