<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SarkariJobs extends Model
{
    use HasFactory;

    ////// Getting All notification types
    public function getNotificationTypes(){
        return DB::table('notification_types')->get()->select('id', 'name');
    }

    ////// Getting All leatest Jobs
    public function getLeatestJobs(){
        return DB::table('leatest_jobs')->select('id', 'content_id', 'contents.title', 'notification_type_id')->join('contents', 'leatest_jobs.content_id', '=', 'contents.id')->get();
    }
}
