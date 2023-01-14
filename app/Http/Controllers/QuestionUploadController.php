<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionUploadRequest;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.uploadQuestion.upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionUploadRequest $request)
    {
        $solutionName = null;
        if($request->solution){
            $solImg = $request->solution;
            $fileRandName = md5(rand(1000, 10000));
            $extensn = strtolower($solImg->getClientOriginalExtension());
            $solutionName = $fileRandName.'.'.$extensn;
            $solImg->move(public_path() . '/solutions/', $solutionName);
        }
        $img = $request->question;
        $fileRandomName = md5(rand(1000, 10000));
        $extension = strtolower($img->getClientOriginalExtension());
        $questionName = $fileRandomName.'.'.$extension;
        $img->move(public_path() . '/questions/', $questionName);

        question::create([
            'institution' => $request->institution,
            'course_title' => $request->courseTitle,
            'course_code' => $request->courseCode,
            'exam_name' => $request->examName,
            'question_name' => $questionName,
            'solution_name' => $solutionName
        ]);

        Session::flash('success');
        return redirect()->route('dashboard')->with('massage', 'Successfully Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
