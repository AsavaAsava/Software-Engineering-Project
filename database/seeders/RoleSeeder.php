<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_id'=> '10',
            'role_name' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'role_id'=> '20',
            'role_name' => 'Waiter',
        ]);
        DB::table('roles')->insert([
            'role_id'=> '30',
            'role_name' => 'Inventory',
        ]);
    }
}
