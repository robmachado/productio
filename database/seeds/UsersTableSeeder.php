<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'linux.rlm@gmail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('2222');
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
        $user->name = 'Rui';
        $user->email = 'rui@plastfoam.com.br';
        $user->email_verified_at = now();
        $user->password = bcrypt('1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
        $user->name = 'Bruna';
        $user->email = 'pcp@plastfoam.com.br';
        $user->email_verified_at = now();
        $user->password = bcrypt('1234');
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
