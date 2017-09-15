<?php

namespace App\Http\Controllers\Rent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Rent::orderBy('id', 'desc')->get();
        return view('rent.my_renting.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rent.my_renting.create');
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
            'renter_id' => 'required|max:100',
            'renter_name' => 'max:100',
            'user_id' => 'required'
        ]);
        Rent::create($request->all());
        Session::flash('flash_success_msg', 'Renter Added!');
        return redirect('rent/my_renting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rent = Rent::findOrFail($id);

        return view('rent.my_renting.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rent = Rent::findOrFail($id);
        return view('rent.my_renting.edit', compact('rent'));
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
            'renter_id' => 'required|max:100',
            'renter_name' => 'max:100',
            'user_id' => 'required'
        ]);
        $address = Rent::findOrFail($id);
        $address->update($request->all());

        Session::flash('flash_success_msg', 'Renter Updated!');

        return redirect('rent/my_renting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rent::destroy($id);;
        Session::flash('flash_success_msg', 'Renter Deleted!');
        return redirect('rent/my_renting');
    }
}
