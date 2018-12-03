<?php

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
        $data = [
            array(
                'first_name' => 'Fandi',
                'last_name' => 'Ahmad',
                'email' => 'fndiamd@gmail.com',
                'password' => \Hash::make('fndiamd'),
                'gender' => 1,
                'phone' => '8612994819',
                'hint' => '83831687475',
                'used_storage' => 0,
                'status' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            )
        ];

        $result = DB::table('users')->insert($data);
    }
}
