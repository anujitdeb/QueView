<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });

    }

    public function index()
    {
        //print_r(gettype($this->user));
        if($this->user == null){
            return view("backend.auth.login");
        }
        else{
            $statData = [];

            $questions = question::where('status', '1')->take(12)->get();

            //return $courses;
            return view('backend.pages.dashboard.index', compact('statData', 'questions'));
        }
        //return view('backend.pages.dashboard.index');
    }

    public function questionView($id){
        $question = question::find($id);

        $pdf = strpos($question->question_name, ".pdf");
        $doc = strpos($question->question_name, ".doc");

        return view('backend/pages/dashboard/questionView', ['question' => $question, 'pdf' => $pdf, 'doc' => $doc]);
    }

    public function solutionView($id){
        $question = question::find($id);

        $pdf = strpos($question->solution_name, ".pdf");
        $doc = strpos($question->solution_name, ".doc");

        return view('backend/pages/dashboard/solutionView', ['question' => $question, 'pdf' => $pdf, 'doc' => $doc]);
    }

    public function search(SearchRequest $request){

        $searchedCourse = $request->search ?? "";

        $questions = question::where('institution', 'LIKE', '%' . $searchedCourse . '%')
            ->orwhere('course_title', 'LIKE', '%' . $searchedCourse . '%')
            ->orwhere('course_code', 'LIKE', '%' . $searchedCourse . '%')
            ->orwhere('exam_name', 'LIKE', '%' . $searchedCourse . '%')->get();

        return view('backend.pages.dashboard.allQuestions', compact('questions'));

    }

    public function allQuestion(){
        $questions = question::all();

        return view('backend.pages.dashboard.allQuestions', compact('questions'));
    }
}
