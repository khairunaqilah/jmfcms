<?php

namespace App\Http\Controllers;
use App\FeeTracker;
use Illuminate\Http\Request;

class FeeTrackerController extends Controller
{
    public function index()
    {
        $feetracker = FeeTracker::all();
  
        return view('feetrackers.index',compact('feetracker'));
    }

    public function create()
    {
        return view('feetrackers.create');        
    }

    public function store(Request $request)
    {
        $input = $request->all();

        request()->validate([
            'fee_month'=> 'nullable',
            'payment_deadline'=>'nullable',
            'receipt' => 'nullable|receipt|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'payment_status'=>'nullable',

        ]);

        $feetrackerName = time().'.'.request()->image->getClientOriginalExtension();
        $input['receipt'] = $feetrackerName ;
        request()->image->move(public_path('receipts'), $feetrackerName );

        FeeTracker::create($request->all());
        return back()
                ->with('success','Image Upload Successfully');

    }
     /**
     * Display the specified resource.
     *
     * @param  \App\FeeTracker  $feetrackers
     * @return \Illuminate\Http\Response
     */
    public function show(FeeTracker $feetracker)
    {
        return view('feetrackers.show',compact('feetracker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeeTracker  $feetrackers
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeTracker  $feetrackers)
    {
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeTracker  $feetracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'payment_status'=>'nullable',
        ]);
  
        $feetracker->update($request->all());
  
        return redirect()->route('feetrackers.index')
                        ->with('success','Fee Tracker  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeeTracker $feetracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeTracker $feetracker)
    {
        $feetracker->delete();

       return redirect()->route('feetrackers.index')
       ->with('success','Fee Tracker deleted successfully');
    }
}

