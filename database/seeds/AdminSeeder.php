<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array(
                'name' => 'Fandi Ahmad',
                'email' => 'admin@termository.com',
                'password' => \Hash::make('admin123'),
                'status' => 1,
            ),
        ];

        $result = DB::table('admin')->insert($data);
    }
}
