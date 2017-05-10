<?php

namespace App\Http\Controllers\MasterData;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddressType;

class AddressTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = AddressType::orderBy('id', 'desc')->get();
        return view('master_data.address_type.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_data.address_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_id' => Auth::user()->id]);
        $this->validate($request, [
            'name' => 'required|max:255',
            'user_id' => 'required'
        ]);

        AddressType::create($request->all());
        Session::flash('flash_success_msg', 'Address Type Added!');
        return redirect('master_data/address_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = AddressType::findOrFail($id);

        return view('master_data.address_type.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = AddressType::findOrFail($id);
        return view('master_data.address_type.edit', compact('address'));
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
        $request->request->add(['user_id' => Auth::user()->id]);
        $this->validate($request, [
            'name' => 'required|max:255',
            'user_id' => 'required'
        ]);
        $address = AddressType::findOrFail($id);
        $address->update($request->all());

        Session::flash('flash_success_msg', 'Address Type Updated!');

        return redirect('master_data/address_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddressType::destroy($id);;
        Session::flash('flash_success_msg', 'Address Type Deleted!');
        return redirect('master_data/address_type');
    }
}
