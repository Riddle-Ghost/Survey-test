<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function all()
    {
        $surveys = Survey::all();

        return response()->json([
            'surveys' => $surveys,
        ], 200);
    }

    public function survey(int $id)
    {        
        
        $survey = Survey::with('questions.answers')->find($id);
        
        return response()->json([
            'survey' => $survey,
        ], 200);
    }

}
