<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdmitCards extends Model
{
    use HasFactory;
    private $_mContent;

    public function __construct(){
        $this->_mContent = new Contents();
    }

    ////// Create Admit Card
    public function createAdmitCard($req)
    {
        $mAdmitCard = new AdmitCards();

        $content_id = $this->_mContent->storeContent($req->content);

        $mAdmitCard->title = $req->title;
        $mAdmitCard->start_date = $req->start_date;
        $mAdmitCard->end_date = $req->end_date;
        $mAdmitCard->state_id = $req->state_id;
        $mAdmitCard->content_id = $content_id;


        return $mAdmitCard->save();
    }

    ////// Getting All Admit Card
    public function getAdmitCards()
    {
        return DB::table('admit_cards')->select('id', 'content_id', 'title', 'start_date', 'end_date', 'state_id')->get();
    }

    ////// Getting Admit Card By Id
    public function getAdmitCardById($id)
    {
        return DB::table('admit_cards as acards')->select('acards.id', 'acards.content_id', 'contents.content', 'acards.title', 'acards.start_date', 'acards.end_date', 'acards.state_id')->leftJoin('contents', 'acards.content_id', '=', 'contents.id')->where('acards.id', '=', $id)->get();
    }

    ////// Create Admit card And Update Content
    public function createAdmitCardAndUpdateContent($req)
    {
        $mAdmitCard = new AdmitCards();

        $content_id = $this->_mContent->updateContent($req->content);

        $mAdmitCard->title = $req->title;
        $mAdmitCard->start_date = $req->start_date;
        $mAdmitCard->end_date = $req->end_date;
        $mAdmitCard->state_id = $req->state_id;
        $mAdmitCard->content_id = $content_id;


        return $mAdmitCard->save();
    }

    ////// Update Admit Card And Update Content
    public function updateAdmitCard($req)
    {
        $mAdmitCard = new AdmitCards();

        $content_id = $this->_mContent->updateContent($req->content);

        $data = $mAdmitCard::where('id', $req->route('id'))->first();
        $data->title = $req->title;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->state_id = $req->state_id;
        $data->content_id = $content_id;


        return $data->save();
    }
}
