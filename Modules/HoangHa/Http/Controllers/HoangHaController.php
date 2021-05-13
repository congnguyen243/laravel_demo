<?php

namespace Modules\HoangHa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
class HoangHaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = Product::all(); 
        return view('hoangha::index')->with('data',$data);
    }

    
    public function detail(Request $request)
    {
        // return view('hoangha::detailProduct');
        $data = Product::where('id',$request['id'])->first();
        $result = array(
            'status' => '200',
            'data' => $data,
        );
        return view('hoangha::detailProduct')->with('data',$data);
    }
    
}
