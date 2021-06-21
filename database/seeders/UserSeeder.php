<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Admin';
        $inputan['email'] = 'admin1@admin.com';
        $inputan['password'] = Hash::make('admin1');
        $inputan['phone'] = '085852527575';
        $inputan['alamat'] = 'Malang';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}
