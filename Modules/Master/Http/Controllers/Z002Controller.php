<?php

namespace Modules\Master\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
class Z002Controller extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        $data = Product::all(); 
        return view('master::z002.index')->with('data',$data);  
    }

    public function create(Request $request){
        $params = $request->all();
        $this->productRepo->create([
                    'name'=>$params['name'],
                    'price'=>$params['price'],
                    'memory'=>$params['memory'],
                    'path'=>$params['path'],
                    'stock'=>$params['stock'],
                    'content'=>$params['content']]);
        $result = array(
            'status' => '200',
            'data' => $params,
        );
        return response()->json($result);
    }   
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Request $request)
    {
        // $result = $request->all();
        // $data = Product::where('id', $request['id']);
        $data = Product::where('id',$request['id'])->first();
        $result = array(
            'status' => '200',
            'data' => $data,
        );
        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('master::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {
        $data = Product::where('id',$request['id'])->delete();
        $result = array(
            'status' => '200',
            'data' => $data,
        );
        return response()->json($result);
    }
    public function getAll(Request $request)
    {
        $data = Product::all();
        if($request->ajax()){
            return view('master::z002.datacontent')
            ->with('data',$data);
        }
        return $data;     
    }
}
