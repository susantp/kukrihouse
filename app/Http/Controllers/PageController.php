<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $categories = \App\Models\Category::with('products')->get();
//        return $categories[0]->products;
        return view('index')->with('categories', $categories);
    }

    public function product($slug = null)
    {
        if ($slug == null) {
            return redirect()->route('index');
        }
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Category::find($product->category->id)->products->take(4);
        $categories = \App\Models\Category::all();
        return view('product', compact('product', 'categories', 'relatedProducts'));
    }

    public function category($slug = null)
    {
        if ($slug == null) {
            return redirect()->route('index');
        }
        $categoriesBySlug =  Category::where('slug', $slug)->first();
        $product = $categoriesBySlug->products->random();
        $relatedProducts = Category::find($product->category->id)->products->take(4);
        $categories = \App\Models\Category::all();
        return view('product', compact('product', 'categories', 'relatedProducts'));

    }

    public function page($slug = null){
        if($slug == null){
            return redirect()->route('index');
        }
        $page = Page::where('slug', $slug)->first();
        $categories = \App\Models\Category::all();
        return view('page', compact('categories', 'page'));
    }

    public function order(OrderRequest $request){
        $validated = $request->validated();
        $order = collect($validated)->only('name', 'street','city','state','country','phone','hidden_item_name','hidden_item_quantity')->toArray();
        if(Order::create($order)){
            return redirect('/ordered')->with('orderSuccess', 'Order Placed');
        };
        return redirect('/');
    }

    public function ordered(){
        $categories = \App\Models\Category::all();
        return view('ordered', compact('categories'));
    }
}
