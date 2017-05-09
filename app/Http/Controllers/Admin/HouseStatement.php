<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\HouseModel;

class HouseStatement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = HouseModel::orderBy('id', 'desc')->get();
        return view('admin.house_statement.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.house_statement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HouseModel::create($request->all());
        Session::flash('flash_success_msg', 'House Name Added!');
        return redirect('admin/house_statement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = HouseModel::findOrFail($id);

        return view('admin.house_statement.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = HouseModel::findOrFail($id);
        return view('admin.house_statement.edit', compact('address'));
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
        $address = HouseModel::findOrFail($id);
        $address->update($request->all());

        Session::flash('flash_success_msg', 'House Name Updated!');

        return redirect('admin/house_statement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HouseModel::destroy($id);;
        Session::flash('flash_success_msg', 'House Name Deleted!');
        return redirect('admin/house_statement');
    }
}
