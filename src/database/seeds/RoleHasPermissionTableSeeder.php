<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ownerロールのパーミッション設定
        $permissions = [
            'read users',  // 社員情報を読める
            'write users', // 社員情報を変更できる
            'read scores',  // 社員の評価を読める
            'write scores', // 社員の評価を変更できる
        ];
        $role = Role::findByName('owner');
        $role->givePermissionTo($permissions);

        // managerロールのパーミッション設定
        $permissions = [
            'read users',  // 社員情報を読める
            'write users', // 社員情報を変更できる
            'read scores',  // 社員の評価を読める
        ];
        $role = Role::findByName('manager');
        $role->givePermissionTo($permissions);

        // staffロールのパーミッション設定
        $permissions = [
            'read users',  // 社員情報を読める
        ];
        $role = Role::findByName('staff');
        $role->givePermissionTo($permissions);
    }

}
