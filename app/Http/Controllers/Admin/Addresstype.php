<?php

namespace App\Http\Controllers\Admin;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Address_type;

class Addresstype extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address_type::orderBy('id', 'desc')->get();
        return view('admin.master_data.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master_data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Address_type::create($request->all());
        Session::flash('flash_success_msg', 'Name Added!');
        return redirect('admin/master_data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address_type::findOrFail($id);

        return view('admin.master_data.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address_type::findOrFail($id);
        return view('admin.master_data.edit', compact('address'));
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
        $address = Address_type::findOrFail($id);
        $address->update($request->all());

        Session::flash('flash_success_msg', 'Name Updated!');

        return redirect('admin/master_data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address_type::destroy($id);;
        Session::flash('flash_success_msg', 'Name Deleted!');
        return redirect('admin/master_data');
    }
}
