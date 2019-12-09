<?php

use App\Process;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProcessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Process::truncate();
        Schema::enableForeignKeyConstraints();
        $d = Carbon::now()->format('Y-m-d');
        $data = [
            [ 'name' => 'Extrusão', 'created_at' => $d],
            [ 'name' => 'Colaminação', 'created_at' => $d],
            [ 'name' => 'Corte/Solda', 'created_at' => $d],
            [ 'name' => 'Impressão', 'created_at' => $d],
            [ 'name' => 'Rebobinamento', 'created_at' => $d],
            [ 'name' => 'Formação de Bolha', 'created_at' => $d],
            [ 'name' => 'Dobra', 'created_at' => $d],
            [ 'name' => 'Perfuração manual', 'created_at' => $d],
            [ 'name' => 'Embalagem', 'created_at' => $d],
        ];

        Process::insert($data);

    }
}
