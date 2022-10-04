<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;
class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
                'title'=>'Gila Belajar',
                'slug'=>'gila-belajar',
                'price'=> 280,
                'created_at'=>date('Y-m-d H:i', time()),
                'updated_at'=>date('Y-m-d H:i', time()),
            ],
            [
                'title'=>'Baru Mulai',
                'slug'=>'baru-mulai',
                'price'=> 140,
                'created_at'=>date('Y-m-d H:i', time()),
                'updated_at'=>date('Y-m-d H:i', time()),
            ],
            ];
            // 1st method
            // foreach ($camp as $key => $camp) {
                // Camp::create($camp);
            // }

            // 2nd method
            Camp::insert($camp);
    }
}
