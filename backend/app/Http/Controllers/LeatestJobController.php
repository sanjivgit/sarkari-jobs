<?php

namespace App\Http\Controllers;

use App\Models\LeatestJobs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeatestJobController extends Controller
{
    private $_leatestJob;

    public function __construct()
    {
        $this->_leatestJob = new LeatestJobs();
    }

    ////// Creating leatest Job
    public function createLeatestJob(Request $req)
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
            $data = $this->_leatestJob->createLeatestJob($req);

            return responseMsgs(true, "Created Successfully", $data, 0301, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting All leatest Jobs
    public function getLeatestJobs(Request $req)
    {
        try {
            $data = $this->_leatestJob->getLeatestJobs();
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Leatest Jobs Found Successfully", $data, 0302, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting leatest Job By Id
    public function getLeatestJobById(Request $req)
    {
        try {
            $data = $this->_leatestJob->getLeatestJobById($req->route('id'));
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Leatest Jobs Found Successfully", $data, 0303, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Creating leatest Job And Update Content
    public function createLeatestJobAndUpdateContent(Request $req)
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
            $data = $this->_leatestJob->createLeatestJobAndUpdateContent($req);

            return responseMsgs(true, "Created Successfully", $data, 0304, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Update leatest Job And Update Content
    public function updateLeatestJob(Request $req)
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
            $data = $this->_leatestJob->updateLeatestJob($req);

            return responseMsgs(true, "Updated Successfully", $data, 0305, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }
}
