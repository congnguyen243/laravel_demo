<?php

namespace Modules\Master\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;

class Z003Controller extends Controller
{
    protected $productRepo;
    protected $orderRepo;

    public function __construct(ProductRepositoryInterface  $productRepo, OrderRepositoryInterface $orderRepo)
    {
        $this->productRepo = $productRepo;
        $this->orderRepo = $orderRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $product = $this->productRepo->getProduct();
        return view('master::z003.index')->with('data',$product);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {
        $params = $request->all();
        $validator = Validator::make($params, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'date' => 'required',
            'email' => 'required|email',
        ]);
    
        if ($validator->fails()) {
            $result = array(
                'status' => '123',
                'data' => $params,
            );
            return response()->json($result);
        }
        else{
            $order= $this->orderRepo->create([
                'name'=>$params['name'],
                'phone'=>$params['phone'],
                'avatar'=>$params['avatar'],
                'address'=>$params['address'],
                'email'=>$params['email'],
                'date'=>$params['date'],
                'quantity'=>$params['quantity'],
                'total'=>$params['total'],
                'note'=>$params['note']
            ]);
            $result = array(
                'status' => '200',
                'data' => $order,
            );
            return response()->json($result);
        }
        
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
    public function show($id)
    {
        return view('master::show');
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
    public function destroy($id)
    {
        //
    }
}
