<?php

namespace Modules\Master\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;

class Z001Controller extends Controller
{
    public function index(Request $request)
    {
        $data = $this->getAllCate($request);
        return view('master::z001.index')->with('data',$data);
    }
    public function getAllCate(Request $request)
    {
        $data = Category::all();
        if($request->ajax()){
            return view('master::z001.listcontent')
            ->with('data',$data);
        }
        return $data;     
    }
    public function save(Request $request){
        $params = $request->all();
        $category = new Category;
        $category->content = $params['content'];
        $category->save();
        $result = array(
            'status' => '200',
            'data' => $params,
        );
        return response()->json($result);
    }
    
    public function delete(Request $request){
        $params = $request->all();
        $category = Category::where('id',$params['id'])->delete();

        $result = array(
            'status' => '200',
            'data' => $params,
        );
        return  response()->json($result);
    }

}
