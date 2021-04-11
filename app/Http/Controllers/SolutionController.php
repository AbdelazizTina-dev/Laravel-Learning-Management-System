<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $task)
    {
        return view('students.submit',[
            'task' => $task
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Task $task)
    {
        $validated_data = $request->validate([
            'answer' => "required"
        ]);
        $validated_data['student_name'] = Auth::user()->name;
        $validated_data['student_email'] = Auth::user()->email;
        $validated_data['evaluated'] = false;
        $task->solutions()->create($validated_data);
        return view('students.show',['subject'=>$task->subject]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        return view('solutions.edit',['solution'=>$solution]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        $validated_data = $request->validate([
            'earned_points' => "required|numeric|between:0,10"
        ]);
        $solution->earned_points = $validated_data['earned_points'];
        $solution->save();
        return redirect()->route('tasks.show',['task'=>$solution->task]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
