<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeatestJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leatest_jobs')->insert([
            [
                'content_id' => 1,
                'title' => 'leatest job 1 title',
                'start_date' => '2024-02-01',
                'end_date' => '2024-03-01',
                'state_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'content_id' => 2,
                'title' => 'leatest job 2 title',
                'start_date' => '2024-03-05',
                'end_date' => '2024-04-05',
                'state_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
