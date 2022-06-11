<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hotel;
use DB;
class HotelsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $hotelRecords = [
        //     ['id'=>1,'name'=>'Family','image'=>'','typeroom'=>'double','number'=>4,'area'=>60,'price'=>'2500000'],
        //        ['id'=>2,'name'=>'Luxury','image'=>'','typeroom'=>'single','number'=>1,'area'=>30,'price'=>'1000000'],
        //           ['id'=>3,'name'=>'Family Triple','image'=>'','typeroom'=>'triple','number'=>6,'area'=>80,'price'=>'3500000'],

        // ];
        //           Hotel::insert($hotelRecords);

        DB::table('hotel')->insert([
                  ['id'=>1,'name'=>'Family','image'=>'','typeroom'=>'double','number'=>4,'area'=>60,'price'=>'2500000'],
               ['id'=>2,'name'=>'Luxury','image'=>'','typeroom'=>'single','number'=>1,'area'=>30,'price'=>'1000000'],
                  ['id'=>3,'name'=>'Family Triple','image'=>'','typeroom'=>'triple','number'=>6,'area'=>80,'price'=>'3500000'],

        
        ]);
    }
}
