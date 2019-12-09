<?php

use App\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Property::truncate();
        Schema::enableForeignKeyConstraints();
        $d = Carbon::now()->format('Y-m-d');
        $data = [
            ['name' => 'espessura', 'unit_id' => 1, 'created_at' => $d], //micra
            ['name' => 'largura', 'unit_id' => 2, 'created_at' => $d], //mm
            ['name' => 'comprimento', 'unit_id' => 2, 'created_at' => $d], //mm
            ['name' => 'diâmetro', 'unit_id' => 2, 'created_at' => $d], //mm
            ['name' => 'gramatura', 'unit_id' => 13, 'created_at' => $d], //g/m2
            ['name' => 'gramametro', 'unit_id' => 15, 'created_at' => $d], //g/m
            ['name' => 'peso', 'unit_id' => 7, 'created_at' => $d], //kg

        ];

        Property::insert($data);
    }
}
