<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show($id)
    {
        return Question::with(['comments', 'best_answer', 'comments.author'])->find($id);
        // return view('welcome', ['question' => $question]);
    }
}
