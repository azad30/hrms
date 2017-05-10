<?php

namespace App\Http\Controllers\House;

use App\House;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Flat;
use Illuminate\Support\Facades\Auth;

class MyFlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flat = Flat::orderBy('id', 'desc')->get();
        return view('house.my_flat.index', compact('flat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $houses = House::where('owner_id', '=', Auth::user()->id)->pluck('name', 'id');
        return view('house.my_flat.create', compact('houses'));
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
            'name' => 'required|max:100',
            'description' => 'max:500',
            'house_id' => 'required',
            'user_id' => 'required'
        ]);
        Flat::create($request->all());
        Session::flash('flash_success_msg', 'Flat Added!');
        return redirect('house/my_flat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flat = Flat::findOrFail($id);

        return view('house.my_flat.show', compact('flat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flat = Flat::findOrFail($id);
        $houses = House::where('owner_id', '=', Auth::user()->id)->pluck('name', 'id');
        return view('house.my_flat.edit', compact('flat', 'houses'));
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
        $flat = Flat::findOrFail($id);
        $flat->update($request->all());

        Session::flash('flash_success_msg', 'Flat Updated!');

        return redirect('house/my_flat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flat::destroy($id);;
        Session::flash('flash_success_msg', 'Flat Deleted!');
        return redirect('house/my_flat');
    }
}
