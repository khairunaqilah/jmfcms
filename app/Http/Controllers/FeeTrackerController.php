<?php

namespace App\Http\Controllers;
use App\FeeTracker;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        if(Auth::User()->role =='guardian'){
        $feetracker = FeeTracker::all()
        ->where('guardian_id', auth()->user()->id);}
        /*->orderBy('day_id', 'asc')
        ->orderBy('time_from', 'asc')
        ->get();*/
        else if(Auth::User()->role =='admin'){
            $feetracker = FeeTracker::all();}
  
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
    public function edit(  $feetracker)
    {
        $feetrackers = DB::table('fee_trackers')
        ->where('id','=',$feetracker)->get();
        
        return view('feetrackers.edit',compact('feetrackers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeTracker  $feetracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $feetracker)
    {
        request()->validate([
            'fee_month'=> 'nullable',
            'file' => 'nullable',
            'payment_status'=>'nullable',

        ]);
            if($request->hasFile('receipt'))
            {
                
            $file = $request->file('receipt');
            $fileName =$file ->getClientOriginalName();
            $destinationPath = public_path().'/receipts';
            $file->move($destinationPath,$fileName);

            

            DB::table('fee_trackers')->where('id',$feetracker)->update([
                
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
    public function destroy( $feetracker)
    {
        
        $f_tracker = FeeTracker::find($feetracker);
        $f_tracker->delete();

       return redirect()->route('fee_trackers.index')
       ->with('success','Fee Tracker deleted successfully');
    }
    public function text()
    {
    	
        $url = Http::post('https://pro.waapify.com/api/send.php?number=60133047981&type=text&message=guardian%20uploaded%20receipt%20in%20fee%20tracker&instance_id=62A220F4E788D&access_token=76bad889dad35fa4fa80acb45f2460a4');
        
        //return Redirect::to('https://www.itsolutionstuff.com/post/how-to-send-email-to-multiple-users-in-laravelexample.html');
        redirect()->to($url)->send();
    	
    }
}

