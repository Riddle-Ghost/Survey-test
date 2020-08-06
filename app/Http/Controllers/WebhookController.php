<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class WebhookController extends Controller
{
    public function input(Request $request)
    {
        $answerId = $request->input('answer-id');

        $answer = Answer::find($answerId);

        if ($answer->next_question_id === NULL) {

            return response()->json([
                'status' => 'null',
            ], 200);
        }

        $question = Question::with('answers')->find($answer->next_question_id);

        return response()->json([
            'status' => 'ok',
            'question' => $question,
        ], 200);
    }
}
