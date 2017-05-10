<?php

namespace App\Http\Controllers\House;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\House;

class MyHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = House::orderBy('id', 'desc')->get();
        return view('house.my_house.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('house.my_house.create');
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
        $request->request->add(['owner_id' => Auth::user()->id]);
        $this->validate($request, [
            'house_no' => 'required|max:100',
            'name' => 'max:100',
            'description' => 'max:500',
            'user_id' => 'required'
        ]);
        House::create($request->all());
        Session::flash('flash_success_msg', 'House Added!');
        return redirect('house/my_house');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::findOrFail($id);

        return view('house.my_house.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house = House::findOrFail($id);
        return view('house.my_house.edit', compact('house'));
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
        $request->request->add(['owner_id' => Auth::user()->id]);
        $this->validate($request, [
            'house_no' => 'required|max:100',
            'name' => 'max:100',
            'description' => 'max:500',
            'user_id' => 'required'
        ]);
        $address = House::findOrFail($id);
        $address->update($request->all());

        Session::flash('flash_success_msg', 'House Updated!');

        return redirect('house/my_house');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        House::destroy($id);;
        Session::flash('flash_success_msg', 'House Deleted!');
        return redirect('house/my_house');
    }
}
