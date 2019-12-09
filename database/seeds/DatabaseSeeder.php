<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProcessesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(MachinesTableSeeder::class);
        $this->call(RawMaterialsTableSeeder::class);
    }
}
