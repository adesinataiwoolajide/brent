<?php

namespace App\Http\Controllers;
use App\User;
use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $usertype = Auth::user()->level;
            if($usertype == 1){
                return redirect()->route('admin.dashboard');
            }elseif($usertype == 2){
                return redirect()->route('manager.dashboard');
            }elseif($usertype == 3){
                return redirect()->route('salesgirl.dashboard');
            }else{
                return redirect()->back()->with("error", "Invlid User");
            }
        }else{
            return redirect()->back()->with("error", "Invalid User Name or Password");
        }
    }  

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return view('index'); // redirect the user to the login screen
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("administrator.index");
    }

    public function managerindex()
    {
        $bcode = Auth::user()->branch;
        $data = [
            'inventjory' => Inventory::with('branch')->first(),
            'inventory' => Inventory::find($bcode),
        ];
       // $staff = Inventory::where('bcode', $bcode)->first();
        return view("branchmanager.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }  
}
