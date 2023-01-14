<?php

namespace App\Http\Controllers;

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

            $questions = question::all()->take(10);

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
}
