<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'read',
            'write',
            'create',
        ];

        $permissions_by_role = [
            'super_admin' => [
                'user management',
                'group management',
                'album management',
                'media management',
            ],
            'group_admin' => [
                'group management',
                'album management',
                'media management',
            ],
            'subsciber' => [
                'media management',
            ],
        ];

        foreach ($permissions_by_role['super_admin'] as $permission) {
            foreach ($abilities as $ability) {
                Permission::create(['name' => $ability . ' ' . $permission]);
            }
        }

        foreach ($permissions_by_role as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($abilities as $ability) {
                foreach ($permissions as $permission) {
                    $full_permissions_list[] = $ability . ' ' . $permission;
                }
            }
            Role::create(['name' => $role])->syncPermissions($full_permissions_list);
        }

        User::find(1)->assignRole('super_admin');
        User::find(2)->assignRole('subsciber');
    }
}
