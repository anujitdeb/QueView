<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (is_null(User::where('email', 'anujitdeb99@gmail.com')->first())) {
            $user = new User();
            $user->name = "Anujit Deb";
            $user->email = "anujitdeb99@gmail.com";
            $user->password = Hash::make('111111');
            $user->save();
        }
    }
}
