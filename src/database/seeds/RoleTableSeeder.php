<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'owner',   // 社長
            'manager', // 店長
            'staff',   // 店員
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
