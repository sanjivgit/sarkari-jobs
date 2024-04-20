<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Results extends Model
{
    use HasFactory;
    private $_mContent;

    public function __construct()
    {
        $this->_mContent = new Contents();
    }

    ////// Create Result
    public function createResult($req)
    {
        $mResult = new Results();

        $content_id = $this->_mContent->storeContent($req->content);

        $mResult->title = $req->title;
        $mResult->start_date = $req->start_date;
        $mResult->end_date = $req->end_date;
        $mResult->state_id = $req->state_id;
        $mResult->content_id = $content_id;


        return $mResult->save();
    }

    ////// Getting All Admit Card
    public function getResults()
    {
        return DB::table('results')->select('id', 'content_id', 'title', 'start_date', 'end_date', 'state_id')->get();
    }

    ////// Getting Admit Card By Id
    public function getResultById($id)
    {
        return DB::table('results')->select('results.id', 'results.content_id', 'contents.content', 'results.title', 'results.start_date', 'results.end_date', 'results.state_id')->leftJoin('contents', 'results.content_id', '=', 'contents.id')->where('results.id', '=', $id)->get();
    }

    ////// Create Result And Update Content
    public function createResultAndUpdateContent($req)
    {
        $mResult = new Results();

        $content_id = $this->_mContent->updateContent($req->content);

        $mResult->title = $req->title;
        $mResult->start_date = $req->start_date;
        $mResult->end_date = $req->end_date;
        $mResult->state_id = $req->state_id;
        $mResult->content_id = $content_id;


        return $mResult->save();
    }

    ////// Update Result And Update Content
    public function updateResult($req)
    {
        $mResult = new Results();

        $content_id = $this->_mContent->updateContent($req->content);

        $data = $mResult::where('id', $req->route('id'))->first();
        $data->title = $req->title;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->state_id = $req->state_id;
        $data->content_id = $content_id;


        return $data->save();
    }
}
