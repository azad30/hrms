<?php

namespace App\Http\Controllers\House;

use App\Flat;
use App\House;
use App\Rent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Controllers\Controller;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $renters = Rent::
        whereHas('flat', function ($flat) {
            $flat->whereHas('house', function ($house){
                $house->where('owner_id', '=',  Auth::user()->id);
            });
        })
        ->orderBy('id', 'desc')->get();
        return view('house.renter.index', compact('renters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $houses = House::where('owner_id', '=', Auth::user()->id)->pluck('name', 'id');
        $flats = Flat::whereHas('house', function ($house){
            $house->where('owner_id', '=',  Auth::user()->id);
            })
            ->pluck('name', 'id');
        $renters = User::whereNotIn('id', [Auth::user()->id])->pluck('name', 'id');
        return view('house.renter.create', compact('houses', 'flats', 'renters'));
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
        $request->request->add(['owner_approve' => 1]);
        $this->validate($request, [
            'flat_id' => 'required',
            'renter_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'user_id' => 'required'
        ]);
        Rent::create($request->all());
        Session::flash('flash_success_msg', 'Renter information Added!');
        return redirect('house/renter');
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

        return view('house.renter.show', compact('rent'));
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
        $houses = House::where('owner_id', '=', Auth::user()->id)->pluck('name', 'id');
        $flats = Flat::whereHas('house', function ($house){
            $house->where('owner_id', '=',  Auth::user()->id);
        })
            ->pluck('name', 'id');
        $renters = User::whereNotIn('id', [Auth::user()->id])->pluck('name', 'id');

        return view('house.renter.edit', compact('rent', 'houses', 'flats', 'renters'));

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
        $request->request->add(['owner_approve' => 1]);
        $this->validate($request, [
            'flat_id' => 'required',
            'renter_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'date',
            'user_id' => 'required'
        ]);

        $rent = Rent::findOrFail($id);
        $rent->update($request->all());

        Session::flash('flash_success_msg', 'Renter Updated!');

        return redirect('house/renter');
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
        Session::flash('flash_success_msg', 'Renter Information Deleted!');
        return redirect('house/renter');
    }
}
