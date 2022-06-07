<?php

namespace App\Http\Controllers;
use App\FeeTracker;
use App\User;
use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response,File,Auth;

class FeeTrackerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $feetracker = FeeTracker::all();
  
        return view('feetrackers.index',compact('feetracker'));
    }

    public function create()
    {
       $guardians = DB::select('select* from users where role ="guardian"');
        return view('feetrackers.create',['guardians'=>$guardians]);        
    }

    public function store(Request $request)
    {

        request()->validate([
            'fee_month'=> 'nullable',
            'payment_deadline'=>'nullable',
            'file' => 'nullable',
            'payment_status'=>'nullable',

        ]);
            
         foreach($request->userid as $value => $task)
            {
                $data = DB::table('fee_trackers')->insert([
                    'fee_month'=>$request->fee_month,
                    'payment_deadline'=>$request->payment_deadline,
                    'guardian_id'=>$request->userid[$value],
                    'payment_status'=>$request->payment_status,
                ]);
            }

           
        
        
        
        

        //FeeTracker::create($request->all());
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
    public function edit(FeeTracker  $feetracker)
    {
        return view('feetrackers.edit',compact('feetracker'));
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
        request()->validate([
            'fee_month'=> 'nullable',
            'payment_deadline'=>'nullable',
            'file' => 'nullable',
            'payment_status'=>'nullable',

        ]);
            if($request->hasFile('receipt'))
            {
            $file = $request->file('receipt');
            $fileName =$file ->getClientOriginalName();
            $destinationPath = public_path().'/receipts';
            $file->move($destinationPath,$fileName);

            

            $data = DB::table('fee_trackers')->update([
                'fee_month'=>$request->fee_month,
                'payment_deadline'=>$request->payment_deadline,
                'receipt'=>$fileName,
                'payment_status'=>$request->payment_status,
            ]);
        
        
        
        }

        //FeeTracker::create($request->all());
        return back()
                ->with('success','Image Upload Successfully');
       /* $request->validate([
            'payment_status'=>'nullable',
        ]);
  
        $feetracker->update($request->all());*/
  
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

