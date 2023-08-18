<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $total = User::count();
//        if($total > 0){
//            echo "There are {$total} users in database \n";
//            return;
//        }

        $user = new User();
        $user->username = "User01";
        $user->email = "user01@example.com";
        $user->password = Hash::make("password");
        $user->save();

        $user = new User();
        $user->username = "Admin01";
        $user->email = "admin01@example.com";
        $user->password = Hash::make("admin");
        $user->role = "ADMIN";
        $user->save();
    }
}
