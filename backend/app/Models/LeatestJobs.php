<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeatestJobs extends Model
{
    use HasFactory;

    private $_mContent;

    public function __construct(){
        $this->_mContent = new Contents();
    }

    ////// Create leatest Jobs
    public function createLeatestJob($req)
    {
        $mLeatestJob = new LeatestJobs();

        $content_id = $this->_mContent->storeContent($req->content);

        $mLeatestJob->title = $req->title;
        $mLeatestJob->start_date = $req->start_date;
        $mLeatestJob->end_date = $req->end_date;
        $mLeatestJob->state_id = $req->state_id;
        $mLeatestJob->content_id = $content_id;


        return $mLeatestJob->save();
    }

    ////// Getting All leatest Jobs
    public function getLeatestJobs()
    {
        return DB::table('leatest_jobs')->select('id', 'content_id', 'title', 'start_date', 'end_date', 'state_id')->get();
    }

    ////// Getting leatest Job By Id
    public function getLeatestJobById($id)
    {
        return DB::table('leatest_jobs as ljobs')->select('ljobs.id', 'ljobs.content_id', 'contents.content', 'ljobs.title', 'ljobs.start_date', 'ljobs.end_date', 'ljobs.state_id')->leftJoin('contents', 'ljobs.content_id', '=', 'contents.id')->where('ljobs.id', '=', $id)->get();
    }

    ////// Create leatest Jobs And Update Content
    public function createLeatestJobAndUpdateContent($req)
    {
        $mLeatestJob = new LeatestJobs();

        $content_id = $this->_mContent->updateContent($req->content);

        $mLeatestJob->title = $req->title;
        $mLeatestJob->start_date = $req->start_date;
        $mLeatestJob->end_date = $req->end_date;
        $mLeatestJob->state_id = $req->state_id;
        $mLeatestJob->content_id = $content_id;


        return $mLeatestJob->save();
    }

    ////// Update leatest Jobs And Update Content
    public function updateLeatestJob($req)
    {
        $mLeatestJob = new LeatestJobs();

        $content_id = $this->_mContent->updateContent($req->content);

        $data = $mLeatestJob::where('id', $req->route('id'))->first();
        $data->title = $req->title;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->state_id = $req->state_id;
        $data->content_id = $content_id;


        return $data->save();
    }
}
