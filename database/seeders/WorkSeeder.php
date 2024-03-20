<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Works;
use App\Models\workers;
use App\Models\monthDays;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $savedWork= Works::create(['name'=>'work of Afsariyeh 4th','address'=>'Tehran Afsariyeh 4th']);
        $savedWorker=workers::create(["name"=>'Ahmad',"workeraddress"=>"perozi st 4th","workerphone"=>"09923504521","work_id"=>$savedWork->id]);
        monthDays::create(["worker_id"=>$savedWorker->id,"day1"=>1,"day2"=>1,"day3"=>1,"day4"=>1,"day5"=>1,"day6"=>1,"day7"=>1
        ,"day8"=>1,"day9"=>1,"day10"=>0,"day11"=>0,"day12"=>0,"day13"=>0,"day14"=>0
        ,"day15"=>1,"day16"=>1,"day17"=>0,"day18"=>0,"day19"=>0,"day20"=>0
        ,"day21"=>0,"day22"=>0,"day23"=>0,"day24"=>0,"day25"=>0,"day26"=>0
        ,"day27"=>0,"day28"=>1,"day29"=>0,"day30"=>0,"day31"=>0]);
    }
}
