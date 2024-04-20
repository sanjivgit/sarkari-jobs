<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResultController extends Controller
{
    private $_results;

    public function __construct()
    {
        $this->_results = new Results();
    }

    ////// Creating Result
    public function CreateResult(Request $req)
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'state_id' => 'required',
            'content' => 'required'
        ]);

        if ($validated->fails())
            return validationError($validated);

        try {
            $data = $this->_results->CreateResult($req);

            return responseMsgs(true, "Created Successfully", $data, 0501, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting All Results
    public function getResults(Request $req)
    {
        try {
            $data = $this->_results->getResults();
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Result Found Successfully", $data, 0502, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting Result By Id
    public function getResultById(Request $req)
    {
        try {
            $data = $this->_results->getResultById($req->route('id'));
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Result Found Successfully", $data, 0503, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Creating Result And Update Content
    public function createResultAndUpdateContent(Request $req)
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'state_id' => 'required',
            'content' => 'required'
        ]);

        if ($validated->fails())
            return validationError($validated);

        try {
            $data = $this->_results->createResultAndUpdateContent($req);

            return responseMsgs(true, "Created Successfully", $data, 0504, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Update Result And Update Content
    public function updateResult(Request $req)
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'state_id' => 'required',
            'content' => 'required'
        ]);

        if ($validated->fails())
            return validationError($validated);

        try {
            $data = $this->_results->updateResult($req);

            return responseMsgs(true, "Updated Successfully", $data, 0505, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }
}
