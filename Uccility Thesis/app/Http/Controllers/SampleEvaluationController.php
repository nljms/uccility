<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Topic;
use App\Question;

class SampleEvaluationController extends Controller
{
    public function index()
    {
    	$topics = Topic::all();
        $questions = Question::all();
    	return view('sample.evaluation-form', compact('topics', 'questions'));
    }

    public function results(Request $request)
    {
    	foreach($request->question as $key => $question_id)
    	{
    		DB::table('evaluation_results')->insert([
	    		'student_id' => $request->student_id,
	    		'professor_id' => $request->professor_id,
	    		'question_id' => $key,
	    		'rating' => $question_id
	    	]);
    	}
    	// return $request->question;
    	return redirect('sample-evaluation/results/'.$request->professor_id.'/summary');
    }

    public function summary($id)
    {
    	$results = DB::table('evaluation_results')->where('professor_id', '=', $id)->get();

    	$question_rates = $results->map(function($question) {
    		return ['question_id' => $question->question_id, 'rate' => $question->rating];
    	});

    	$ids = $question_rates->pluck('question_id');
    	$rates = $question_rates->pluck('rate');

    	foreach ($ids as $key => $id)
    	{
			$occurence = 1;
			$correspond = (int) $rates[$key];
			if(isset($ratesPerQuestion[$id][$correspond]))
			{
				$ratesPerQuestion[$id][$correspond] += $occurence;
			}
			else
			{
				$ratesPerQuestion[$id][$correspond] = $occurence;
			}
    	}
		ksort($ratesPerQuestion);	
		return view('sample.evaluation-summary', compact('ratesPerQuestion'));
	}
}
