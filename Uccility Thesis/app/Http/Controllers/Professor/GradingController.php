<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Response;

use App\Student;
use App\GradingCriteria;
use App\CriteriaItem;
use App\GradingSheet;

class GradingController extends Controller
{
	public function criteria()
	{
		$terms = GradingCriteria::distinct()->get(['term']);
		$criterias = GradingCriteria::all();
		return view('professor.criteria', compact('criterias', 'terms'));
	}

	public function newCriteria(Request $request)
	{
		$criteria =  GradingCriteria::create(request(['professor_id', 'criteria', 'percentage']));
		// return redirect()->back();
		return response()->json($request->all());
	}

	public function newCriteriaItem(Request $request)
	{
		$dataSet = [];
		$i = 0;
		$criterion = GradingCriteria::find($request->description);
		foreach($request->criteria_item as $criteria)
		{
			$i++;
			$dataSet[] = [
				'grading_criteria_id' => $request->description,
				'description' => $criterion->criteria." ".$i,
				'total' => $criteria
			];
		}
		DB::table('criteria_items')->insert($dataSet);
		return redirect()->back();
		// return $dataSet;
	}

	public function grades()
	{
		$terms = GradingCriteria::distinct()->get(['term']);
		$students = Student::all();
		$criterias = GradingCriteria::all();
		$grades = GradingSheet::all();
		return view('professor.grading-sheet', compact('students', 'criterias', 'terms'));
	}

	public function midterm_grades()
	{
		$students = Student::all();
		$criterias = GradingCriteria::where('term', 'Midterm')->get();
		$grades = GradingSheet::all();
		return view('professor.grades', compact('students', 'criterias'));
	}

	public function finalterm_grades()
	{
		$students = Student::all();
		$criterias = GradingCriteria::where('term', 'Finalterm')->get();
		$grades = GradingSheet::all();
		return view('professor.grades', compact('students', 'criterias'));
	}

	public function saveGrades(Request $request)
	{
		$curr = GradingSheet::where([
			['user_id', $request->user_id],
			['criteria_item_id', $request->criteria_item_id],
		])->get();

		$result = 'false';

		if(count($curr) > 0)
		{
			$grades = GradingSheet::where([
					['user_id', $request->user_id],
					['criteria_item_id', $request->criteria_item_id],
				])
				->update(['total' => $request->total]);
				$response = "updated";
		}
		else {
			$grades = GradingSheet::create(request(['user_id', 'criteria_item_id', 'total']));
			$response = "created";
		}

		// if($curr)
		// {
		// 	$curr = DB::table('grading_sheets')
				// ->where([
				// 	['user_id', $request->user_id],
				// 	['criteria_item_id', $request->criteria_item_id],
				// ])
				// ->update(['total' => $request->total]);
				// $response = "updated";
		// }
		// else
		// {
			
		// }
		return response()->json($response);
		// return $data;
	}
}