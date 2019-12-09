<?php

use App\Unit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Unit::truncate();
        Schema::enableForeignKeyConstraints();
        $d = Carbon::now()->format('Y-m-d');
        $data = [
            ['name' => 'um', 'physical_quantity' => 'dimensional', 'created_at' => $d], //1
            ['name' => 'mm', 'physical_quantity' => 'dimensional', 'created_at' => $d], //2
            ['name' => 'cm', 'physical_quantity' => 'dimensional', 'created_at' => $d], //3
            ['name' => 'm', 'physical_quantity' => 'dimensional', 'created_at' => $d], //4
            ['name' => 'm2', 'physical_quantity' => 'área', 'created_at' => $d], //5
            ['name' => 'g', 'physical_quantity' => 'massa', 'created_at' => $d], //6
            ['name' => 'kg', 'physical_quantity' => 'massa', 'created_at' => $d], //7
            ['name' => 'l', 'physical_quantity' => 'volume', 'created_at' => $d], //8
            ['name' => 'unidade', 'physical_quantity' => 'peças', 'created_at' => $d], //9
            ['name' => 'dezena', 'physical_quantity' => 'peças', 'created_at' => $d], //10
            ['name' => 'cento', 'physical_quantity' => 'peças', 'created_at' => $d], //11
            ['name' => 'milhei', 'physical_quantity' => 'peças', 'created_at' => $d], //12
            ['name' => 'g/m2', 'physical_quantity' => 'densidade de área', 'created_at' => $d], //13
            ['name' => 'kg/m2', 'physical_quantity' => 'densidade de área', 'created_at' => $d], //14
            ['name' => 'g/m', 'physical_quantity' => 'densidade de comprimento', 'created_at' => $d], //15
            ['name' => 'kg/m3', 'physical_quantity' => 'densidade', 'created_at' => $d], //16
        ];
        Unit::insert($data);
    }
}
