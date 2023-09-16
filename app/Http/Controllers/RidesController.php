<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class RidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        if ($user->isAdmin === 1) {
            $rides = Ride::get();
            return view('dashboard', [
                'rides' => $rides
            ]);
        }
        else {
            $rides = Ride::where('user_id', $user->id)->get();
            return view('dashboard', [
                'rides' => $rides
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function rider()
    {
        return view('rider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->isAdmin === 0){
        $rides = New Ride;
        $rides->user_id = Auth::user()->id;
        $rides->from = $request->from;
        $rides->to = $request->to;
        $rides->amount = $request->amount;
        $rides->remarks = $request->remarks;

        $rides->save();

        Alert::success('Added Successfully');
        return redirect('/dashboard')->with('success', 'Added Successfully');
        }
        else {
            Alert::info('Inappropriate For Admin To Add Transaction!');
            return redirect('/dashboard');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if (is_int($request->amount)){
            $data = Ride::findOrfail($id);

            $data->from = $request->from;
            $data->to = $request->to;
            $data->amount = $request->amount;
            $data->remarks = $request->remarks;

            $data->save();
            
            Alert::success('Transaction Updated Successfully');
            return redirect('/dashboard');
        }
        else {
            Alert::warning('Please Enter Actual Number in Amount');
            return redirect('/dashboard');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ride::destroy($id);
        Alert::success('Transaction Deleted Successfully');

        return redirect('/dashboard')->with('success', 'Deleted Successfully');
        
    }
}