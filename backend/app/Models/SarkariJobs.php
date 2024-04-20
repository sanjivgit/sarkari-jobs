<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SarkariJobs extends Model
{
    use HasFactory;

    private $_mContent;

    public function __construct()
    {
        $this->_mContent = new Contents();
    }

    ////// Getting All notification types
    public function getNotificationTypes()
    {
        return DB::table('notification_types')->get()->select('id', 'name');
    }

    ////// Getting All States
    public function getstates()
    {
        return DB::table('states')->get()->select('id', 'name');
    }
}
