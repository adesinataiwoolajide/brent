<?php

namespace App\Http\Controllers;
use App\User;
use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'staff' => User::with('staffbranch')->get(),
            'staff' => User::orderBy('username', 'asc')->paginate(10),
            'success' => "The List of Saved user"
        ];
        return view('administrator.staff.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'branch' => Branch::orderBy('bname', 'asc')->get(),
        ];
        return view('administrator.staff.create')->with($data);
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
            'username' => 'required|min:5|max:255|unique:administrator',
            'password' => 'required|min:4|max:10',
            'level' => 'required|min:1|max:50',
            'branch' => 'required|min:1|max:10',
        ]);
        $staff = new User;
        $staff->username = $request->input('username');
        $staff->password = Hash::make($request->newPassword);
        
        $staff->level = $request->input('level');
        $staff->branch = $request->input('branch');
        $staff->accessid = str_random(25);
        $message = $staff->save() ? "You Have Added The User Details Successfully" : "error";
        return redirect()->route('admin.staffs');
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
        $data = [
            'branch' => User::with('staffbranch')->get(),
            'branching' => Branch::orderBy('bname', 'asc')->get(),
            'staff' => User::find($id),
            'success' => "The List of Saved user"
        ];
        
        return view('administrator.staff.edit')->with($data);
    }

    public function transferstaff($id)
    {
        $data = [
            'branch' => User::with('staffbranch')->get(),
            'branching' => Branch::orderBy('bname', 'asc')->get(),
            'staff' => User::find($id),
        ];
        return view('administrator.staff.transferstaff')->with($data);
    }

    public function updatestafftransfer(Request $request)
    {
        $this->validate($request, [
            'branch' => 'required|min:1|max:10',
        ]);
        $staff = User::where('id', $request->input('id'))->first();
        $staff->branch = $request->input('branch');
        $message = $staff->save() ? "You Have Transferd The Staff Successfully" : "error";
        return redirect()->route('admin.staffs')->with($message);
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
            'username' => 'required|min:5|max:255|unique:administrator',
            'level' => 'required|min:1|max:50',
            'branch' => 'required|min:1|max:10',
        ]);
        $staff = User::where('id', $request->input('id'))->first();
        $staff->username = $request->input('username');
        $staff->level = $request->input('level');
        $staff->branch = $request->input('branch');
        $staff->accessid = str_random(25);
        $message = $staff->save() ? "You Have Updates The User Details Successfully" : "error";
        return redirect()->route('admin.staffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = User::find($id);
        $message = $staff->delete() ? "You Have Deleted The Staff Details Successfully" : "error";
        return redirect()->back()->with("success", $message);
    }
}
