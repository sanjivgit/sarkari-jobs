<?php

namespace App\Http\Controllers;

use App\Models\AdmitCards;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdmitCardController extends Controller
{
    private $_admitCard;

    public function __construct(){
        $this->_admitCard = new AdmitCards();
    }


    ////// Creating Admit Card
    public function CreateAdmitCard(Request $req)
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
            $data = $this->_admitCard->createAdmitCard($req);

            return responseMsgs(true, "Created Successfully", $data, 0401, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting All Admit Cards
    public function getAdmitCards(Request $req)
    {
        try {
            $data = $this->_admitCard->getAdmitCards();
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Admit Card Found Successfully", $data, 0402, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Getting Admit Card By Id
    public function getAdmitCardById(Request $req)
    {
        try {
            $data = $this->_admitCard->getAdmitCardById($req->route('id'));
            if (!$data)
                throw new Exception("Not Found");

            return responseMsgs(true, "Admit Card Found Successfully", $data, 0403, "1.0", responseTime(), "GET");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }


    ////// Creating Admit Card And Update Content
    public function createAdmitCardAndUpdateContent(Request $req)
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
            $data = $this->_admitCard->createAdmitCardAndUpdateContent($req);

            return responseMsgs(true, "Created Successfully", $data, 0404, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    ////// Update AdmitCard And Update Content
    public function updateAdmitCard(Request $req)
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
            $data = $this->_admitCard->updateAdmitCard($req);

            return responseMsgs(true, "Updated Successfully", $data, 0405, "1.0", responseTime(), "POST");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }
}
