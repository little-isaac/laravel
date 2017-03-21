<?php

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admin_users')->insert([
            'email' => 'admin@admin.com',
            'password' => bcrypt('test@123')
        ]);
    }
}
