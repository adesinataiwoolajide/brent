<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Branch;
use App\User;
use App\Order;
use App\Inventory;
use Validator;
use DB;
class BranchController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->paginate(10),
            'success' => "The List of Saved Branch"
        ];
        return view('administrator.branch.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.generalmanager.branch.index');
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
            'bname' =>'required|min:5|max:255|unique:tblbranch',
            'bcode' =>'required|min:1|max:10|unique:tblbranch',
        ]);
        $branch = new Branch;
        $branch->bname = $request->input('bname');
        $branch->bcode = $request->input('bcode');
        $message = $branch->save() ? "You Have Added The Branch Name Successfully" : "error";
        return redirect()->back()->with("success", $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branching = Branch::find($id);
        return view('administrator.branch.edit')->with($branching);
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
            'bname' =>'required|min:5|max:255|unique:tblbranch',
            'bcode' =>'required|min:2|max:10|unique:tblbranch',
        ]);
        $branch = Branch::where('id', $request->input('id'))->first();
        $branch->bname = $request->input('bname');
        $branch->bcode = $request->input('bcode');
        $message = $branch->save() ? "You Have Updated The Branch Details Successfully" : "error";
        return redirect()->route('admin.branches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        $message = $branch->delete() ? "You Have Deleted The Branch Details Successfully" : "error";
        return redirect()->back()->with("success", $message);
    }


    public function branchInventory()
    {
        //$branch = Inventory::with('inventory')->get();
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->paginate(10),
            'branching' => Inventory::with('productbranch'),
            'success' => "The List of Saved Branch"
        ];
        return view('administrator.inventory.branchinventory')->with($data);
    }

    public function displayInventory($bcode)
    {
       $data =[ 
            //'$'project = Project::with('category')->get();
            'displayinventory' => Inventory::where("bcode", $bcode)->paginate(10),
            'branch' => Branch::where("bcode", $bcode)->first()
            // 'displayinventory' => Inventory::find($bcode),
        ];
        //dd(Inventory::where("bcode", $bcode)->get());
        return view('administrator.inventory.displayinventory')->with($data);
    }

    public function displayBranchInventory($bcode)
    {
        
        $data =[ 
            'displayinventory' => Inventory::where("bcode", $bcode)->paginate(10),
            'branch' => Branch::where("bcode", $bcode)->first()
        ];
        return view('branchmanager.inventory.inventories')->with($data);
    }

    public function displayBranchOrder($bcode)
    {
       $data =[ 
            'displayorder' => Order::where("bcode", $bcode)->paginate(10),
            'branch' => Branch::where("bcode", $bcode)->first()
        ]; 
        return view('branchmanager.orders.order')->with($data);
    }

    public function displayBranchOrderDetails($bcode)
    {
       $data =[ 
            'displayorder' => Order::where("bcode", $bcode)->first(),
            'branch' => Branch::where("bcode", $bcode)->first()
        ]; 
        return view('branchmanager.orders.orderdetails')->with($data);
    }

    public function displayBranchAdminOrderDetails($ProductCode)
    {
       $data =[ 
            'displayorder' => Order::where("ProductCode", $ProductCode)->first(),
        ]; 
        return view('administrator.order.orderdetails')->with($data);
    }

    public function displayBranchStaffDetails($bcode)
    {
       $data =[ 
            'displaystaff' => User::where("branch", $bcode)->paginate(10),
            'branch' => Branch::where("bcode", $bcode)->first()
        ]; 
        return view('branchmanager.staff.branchstaff')->with($data);
    }

}
