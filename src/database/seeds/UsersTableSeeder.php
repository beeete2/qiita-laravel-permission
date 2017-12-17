<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 社長（owner）ユーザーを作成する
        $user = User::create([
            'name' => '社長',
            'email' => 'owner@test',
            'password' => Hash::make('owner'),
            'score' => 100,
        ]);
        $user->assignRole('owner');

        // 店長（manager）ユーザーを作成する
        $user = User::create([
            'name' => '店長',
            'email' => 'manager@test',
            'password' => Hash::make('manager'),
            'score' => 80,
        ]);
        $user->assignRole('manager');

        // 店員（staff）ユーザーを作成する
        $user = User::create([
            'name' => '店員',
            'email' => 'staff@test',
            'password' => Hash::make('staff'),
            'score' => 40,
        ]);
        $user->assignRole('staff');
    }
}
