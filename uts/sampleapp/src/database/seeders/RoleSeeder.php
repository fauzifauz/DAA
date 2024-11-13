<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat peran (roles)
        $adminRole = Role::create(['name' => 'admin']);
        $customerRole = Role::create(['name' => 'customer']);

        // Buat hak akses (permissions)
        $permissions = [
            'view catalog', // Hak akses untuk melihat katalog produk
            'manage products', // Hak akses untuk mengelola produk (untuk admin)
            'manage orders', // Hak akses untuk mengelola pesanan
            'manage users', // Hak akses untuk mengelola pengguna (admin)
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Berikan semua hak akses ke admin
        $adminRole->givePermissionTo(Permission::all());

        // Berikan hak akses hanya untuk melihat katalog dan membuat pesanan ke customer
        $customerRole->givePermissionTo('view catalog');
        $customerRole->givePermissionTo('manage orders');
    }
}
