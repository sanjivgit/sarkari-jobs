<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SarkariJobs;
use Exception;
use Illuminate\Http\Request;

class SarkariJobsController extends Controller
{
    private $_sarkariJob;

    public function __construct()
    {
        $this->_sarkariJob = new SarkariJobs();
    }

    ///// Getting All Notification typesss
    public function getNotificationType(Request $req)
    {
        try {
            $data = $this->_sarkariJob->getNotificationTypes();
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Notification Types Found Successfully", $data, 0103, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting All leatest Jobs
    public function getLeatestJobs(Request $req)
    {
        try {
            $data = $this->_sarkariJob->getLeatestJobs();
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Leatest Jobs Found Successfully", $data, 0103, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }
}
