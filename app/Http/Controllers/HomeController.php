<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $data = product::all();
        return view('home.index',compact('data'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $data = Product::where('title', 'like', '%' . $search . '%')->get();
        return view('home.product', compact('data'));
    }


    public function details($id)
{
    try {
        $product = Product::findOrFail($id);
        return view('home.show', compact('product'));
    } catch (\Exception $e) {
        // Handle case when product is not found
        return abort(404);
    }
}


    public function services()
    {
        return view('home.services');
    }

    public function about()
    {
        return view('home.about');
    }

}
