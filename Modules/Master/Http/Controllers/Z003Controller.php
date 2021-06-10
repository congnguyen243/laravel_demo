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
        $products = $this->productRepo->getAll();
        $orders = $this->orderRepo->getAll();
        return view('master::z003.index')->with('dataProduct', $products)->with('dataOrder', $orders);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {
        $params = $request->all();
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'date' => 'required',
            'email' => 'required|email',
        ]);
        $order= $this->orderRepo->create([
            'name'=>$params['name'],
            'phone'=>$params['phone'],
            'avatar'=>"",
            'address'=>$params['address'],
            'email'=>$params['email'],
            'date'=>$params['date'],
            'quantity'=>1,
            'total'=>1,
            'note'=>$params['note']
        ]);
        $result = array(
            'status' => '200',
            'data' => $order,
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
    public function destroy(Request $request)
    {
        $idOrder = $request['id'];
        $flag = $this->orderRepo->delete($idOrder);
        $result = array(
            'status' => '200',
            'data' => $flag,
        );
        return response()->json($result);
    }
    
    public function getAll(Request $request){
        $data = $this->orderRepo->getAll();

        if($request->ajax()){
            return view('master::z003.listorder')->with('dataOrder',$data);
        }
        return $data;
    }

    //service for spring
    public function getAllSpring(Request $request){
        $data = $this->orderRepo->getAll();
        return $data;
    }

    public function createSpring(Request $request)
    {
        
        $params = $request->all();
        var_dump($params);
        $order= $this->orderRepo->create([
            'name'=>$params['name'],
            'phone'=>$params['phone'],
            'avatar'=>"",
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

    public function deleteSpring(Request $request)
    {
        $idOrder = $request['id'];
        $flag = $this->orderRepo->delete($idOrder);
        $result = array(
            'status' => '200',
            'data' => $flag,
        );
        return response()->json($result);
    }
}
