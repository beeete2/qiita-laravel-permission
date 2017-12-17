<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'read users',  // 社員情報を読める
            'write users', // 社員情報を変更できる
            'read sales',   // 売上情報を読める
            'write sales',  // 売上情報を変更できる
            'read scores',  // 社員の評価を読める
            'write scores', // 社員の評価を変更できる
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
