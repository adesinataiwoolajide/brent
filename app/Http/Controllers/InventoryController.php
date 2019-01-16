<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Branch;
use Validator;
use DB;
class InventoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'inventory' => Inventory::orderBy('ProductId', 'desc')->paginate(20),
            'success' => "The List of Saved Products"
        ];
        return view('administrator.inventory.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->get()
        ];
        return view('administrator.inventory.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'ProductName' => 'required|min:3|max:255',
            'ProductUnitPrice' => 'required|min:2|max:255',
            'ProductRemainingQuantity' => 'required|min:1|max:255',
            'ProductUnitPrice_Wac' => 'required|min:2|max:255',
            'ProductUnitPrice_Real' => 'required|min:2|max:255',
            'ProductDept' => 'required|min:3|max:255',
            'productCategory' => 'required|min:3|max:255',
            'productShelf' => 'required|min:1|max:255',
            'ProductWholesalePrice' => 'required|min:2|max:255',
            'bcode' => 'required|min:1|max:255',
        ]);
        $inventory = new Inventory;
        $inventory->ProductCode = "BTS".rand(0001, 9999);
        $inventory->ProductName = $request->input('ProductName');
        $inventory->ProductUnitPrice = $request->input('ProductUnitPrice');
        $inventory->ProductRemainingQuantity = $request->input('ProductRemainingQuantity');
        $inventory->ProductUnitPrice_Wac = $request->input('ProductUnitPrice_Wac');
        $inventory->ProductUnitPrice_Real = $request->input('ProductUnitPrice_Real');
        $inventory->ProductDept = $request->input('ProductDept');
        $inventory->productCategory = $request->input('productCategory');
        $inventory->productShelf = $request->input('productShelf');
        $inventory->ProductWholesalePrice = $request->input('ProductWholesalePrice');
        $inventory->bcode = $request->input('bcode');

        $message = $inventory->save() ? "You Have Added The Product Details Successfully" : "error";
        return redirect()->route('admin.inventories')->with($message);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'inventory' => Inventory::find($id),
            'success' => "The List of Saved Products"
        ];
        return view('administrator.inventory.index')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ProductId)
    {
        $data = [
            'inventjory' => Inventory::with('branch')->first(),
            'branch' => Branch::orderBy('bname', 'asc')->get(),
            'inventory' => Inventory::find($ProductId),
        ];
        return view('administrator.inventory.edit')->with($data);
    }

    public function seeinventory($ProductId)
    {
        $data = [
            'inventjory' => Inventory::with('branch')->first(),
            'branch' => Branch::orderBy('bname', 'asc')->get(),
            'inventory' => Inventory::find($ProductId),
        ];
        return view('administrator.inventory.inventorydetails')->with($data);
    }

    public function seebranchinventory($ProductId)
    {
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->get(),
            'inventory' => Inventory::find($ProductId),
        ];
        return view('branchmanager.inventory.inventorydetails')->with($data);
    }

    public function seebranchOrder($ProductCode)
    {
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->get(),
            'order' => Order::find($ProductCode),
        ];
        return view('branchmanager.orders.orderdetails')->with($data);
    }

    public function managerindex($bcode)
    {
        $data = [
            'inventjory' => Inventory::with('branch')->first(),
            'inventory' => Inventory::find($bcode),
        ];
        return view('branchmanager.index')->with($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'ProductName' => 'required|min:3|max:255',
            'ProductUnitPrice' => 'required|min:2|max:255',
            'ProductRemainingQuantity' => 'required|min:1|max:255',
            'ProductUnitPrice_Wac' => 'required|min:2|max:255',
            'ProductUnitPrice_Real' => 'required|min:2|max:255',
            'ProductDept' => 'required|min:3|max:255',
            'productCategory' => 'required|min:3|max:255',
            'productShelf' => 'required|min:1|max:255',
            'ProductWholesalePrice' => 'required|min:2|max:255',
            'bcode' => 'required|min:1|max:255',
        ]);
        $inventory = Inventory::where('ProductId', $request->input('ProductId'))->first();
        $inventory->ProductName = $request->input('ProductName');
        $inventory->ProductUnitPrice = $request->input('ProductUnitPrice');
        $inventory->ProductRemainingQuantity = $request->input('ProductRemainingQuantity');
        $inventory->ProductUnitPrice_Wac = $request->input('ProductUnitPrice_Wac');
        $inventory->ProductUnitPrice_Real = $request->input('ProductUnitPrice_Real');
        $inventory->ProductDept = $request->input('ProductDept');
        $inventory->productCategory = $request->input('productCategory');
        $inventory->productShelf = $request->input('productShelf');
        $inventory->ProductWholesalePrice = $request->input('ProductWholesalePrice');
        $inventory->bcode = $request->input('bcode');
        $message = $inventory->save() ? "You Have Updated The Product Details Successfully" : "error";
        return redirect()->route('admin.inventories')->with($message);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ProductId)
    {
        $inventory = Inventory::find($ProductId);
        $message = $inventory->delete() ? "You Have Deleted The Product Details Successfully" : "error";
        return redirect()->back()->with("success", $message);
    }

}
