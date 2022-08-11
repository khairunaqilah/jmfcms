<?php
namespace App\Http\Controllers;
use App\LessonSchedule;
use App\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LessonScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::User()->role =='teacher'){
        $lessonschedule = LessonSchedule::all()
        ->where('teacher_id', auth()->user()->id)
        ;
    }
        elseif(Auth::User()->role =='guardian'){
            $lessonschedule = LessonSchedule::all();
        }
  
        return view('lessonschedules.index',compact('lessonschedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name', 'id');
       
        return view('lessonschedules.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LessonSchedule::create([
            'activity' => $request->activity,
            'date' => $request->date,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'remarks' => $request->remarks,
            'status' => $request->status,
            'group_id' => $request->group_id,
            'teacher_id' => auth()->user()->id,
        ]);
        return redirect()->route('lessonschedules.index')
                        ->with('success','Lesson Schedule created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LessonSchedule  $lessonSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(LessonSchedule $lessonschedule)
    {
        return view('lessonschedules.show',compact('groups','lessonschedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LessonSchedule  $lessonSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(LessonSchedule $lessonschedule)
    {
        $groups = Group::pluck('name', 'id');

        return view('lessonschedules.edit',compact( 'groups', 'lessonschedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LessonSchedule  $lessonSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LessonSchedule $lessonschedule)
    {
        $lessonschedule->update($request->all());

        return redirect()->route('lessonschedules.index')
                        ->with('success','Lesson Schedule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LessonSchedule  $lessonSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(LessonSchedule $lessonschedule)
    {
        $lessonSchedule->delete();
        return redirect()->route('lessonschedules.index')
        ->with('success','Lesson Schedule deleted successfully');
    }
}
