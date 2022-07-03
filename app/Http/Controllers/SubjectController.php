<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectFormRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Subject::class, 'subject');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subjects.index',[
            'subjects' => Auth::user()->teacher_subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectFormRequest $request)
    {
        $validated_data = $request->validated();
        $validated_data['user_id'] = Auth::id();
        $s = Subject::create($validated_data);
        $s->save();
        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        dd($subject);
        return view('subjects.show',[
            'subject' => $subject
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit',[
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectFormRequest $request, Subject $subject)
    {
        $validated_data = $request->validated();
        $s = $subject;
        $s->update($validated_data);
        $s->save();
        return redirect()->route('subjects.show',[
            'subject' => $subject
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $s = $subject;
        $s->delete();
        $s->save();
        return redirect()->route('subjects.index');
    }
}
