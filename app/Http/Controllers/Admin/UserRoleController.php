<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
 App\Http\Controllers\Controller;
ususee App\Flat;
use App\House;
use Session;
use App\User;
use App\Role;
use App\User_Role;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = User_Role::orderBy('id','desc')->get();
        return view('admin.user_role.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = user::all()->pluck('name', 'id');
        $role = role::all()->pluck('name', 'id');
       return view('admin.user_role.create',compact('user','role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->request->add(['user_id' => Auth::user()->id]);
        $request['user_id'];
        $this->validate($request, [
            'user_id' => 'required',
            'role_id' => 'required'
        ]);
        User_Role::create($request->all());

        Session::flash('flash_success_msg', 'User Role added!');

        return redirect('admin/user_role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = User_Role::findOrFail($id);
        return view('admin.user_role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = User_Role::findOrFail($id);
        return view('admin.user_role.edit',compact('role'));
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
        //$request->request->add(['user_id' => Auth::user()->id]);
        $request['user_id'];
        $this->validate($request, [
            'user_id' => 'required',
            'role_id' => 'required'
        ]);
        $role = User_Role::findOrFail($id);
        $role->update($request->all());

        Session::flash('flash_success_msg', 'User Role Updated!');

        return redirect('admin/user_role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User_Role::destroy($id);

        Session::flash('flash_success_msg', 'User Role Deleted!');

        return redirect('admin/user_role');
    }
}
