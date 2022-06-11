<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BillsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $faker = Faker::create('App\Bills');
        
        for($i = 1 ; $i <= 10 ; $i++){
        	DB::table('articles')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->sentence(),
            'addreass' => $faker->address,
            'status' => ['done' ,'waiting', 'cancel'][rand(0,2)],
            'total_qty' => rand(1000,2000),
            'total_price' => rand(1000,2000),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
        }
    }
}
// $table->increments('id');
// 			$table->string('name',60);
// 			$table->string('email',100);
// 			$table->string('phone',60);
// 			$table->string('addreass',60);
// 			$table->integer('status');
// 			$table->integer('total_qty');
// 			$table->integer('total_price');
// 			$table->timestamps();