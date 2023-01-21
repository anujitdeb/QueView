<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\question;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Particular User Bookmarks view
     */
    public function index(){
        $bookmarks = Bookmark::where('user_id', session('user.id'))->get();
        $questions = [];
        foreach ($bookmarks as $bookmark){
            $question = question::find($bookmark->question_id);
            $questions [] = $question;
        }
        return view('backend.pages.dashboard.myBookmarks', compact('questions'));
    }

    /**
     Add to the Bookmark table
     */
    public function addBookmark($question_id){
        $user_id = session('user.id');

        $cnt = Bookmark::where('user_id', $user_id)
            ->where('question_id', $question_id)->count();

        if($cnt){
            $var = Bookmark::where('user_id', $user_id)
                ->where('question_id', $question_id)->get();
            foreach ($var as $item) {
                Bookmark::find($item->id)->delete();
                break;
            }
            return redirect()->back();
        }

        $bookmark = new Bookmark();
        $bookmark->create([
            'user_id' => $user_id,
            'question_id' => $question_id
        ]);
        return redirect()->back();
    }
}
