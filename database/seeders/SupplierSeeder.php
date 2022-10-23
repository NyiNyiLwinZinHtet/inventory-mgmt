<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name'=>'user_one',
            'phone'=>'2555555555',
            'address'=>'yangon'
        ]);

        Supplier::create([
            'name'=>'user_two',
            'phone'=>'266666666666',
            'address'=>'Mandalay'
        ]);

    }
}
