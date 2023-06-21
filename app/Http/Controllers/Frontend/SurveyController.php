<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response as Controller;
use App\Models\Opd;
use App\Models\Survey;
use App\Services\SurveyService;

class SurveyController extends Controller
{
    protected $survey;
    public function __construct(Survey $survey)
    {
        $this->survey = new SurveyService($survey);
    }
    public function index()
    {
        if (\request()->ajax()) {
            $opd = Opd::all();
            return $this->sendResponseOk($opd);
        }

        return view('frontend.survey.index');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        DB::beginTransaction();
        try {
            $this->survey->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }
}
