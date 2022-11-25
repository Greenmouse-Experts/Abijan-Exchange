<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

            'username' => 'Administrator',
            'user_type' => 'Admin',
            'is_admin' => 1,
            'username' => 'Administrator',
            'email' => 'admin@abijanexchange.com',
            'password' => bcrypt('1234567890'),
            'affiliate_id' => Str::random(10)

        ]);



        $role = Role::where('name', 'Admin')->first();



        $permissions = Permission::pluck('id','id')->all();



        $role->syncPermissions($permissions);

        $user->givePermissionTo($role->syncPermissions($permissions));

        $user->assignRole([$role->id]);
    }
}
