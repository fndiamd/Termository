<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
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
                'category' => 'Compressed',
                'faicon' => 'fa fa-file-archive',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'category' => 'Documents',
                'faicon' => 'fa fa-file-alt',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'category' => 'Music',
                'faicon' => 'fa fa-music',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'category' => 'Pictures',
                'faicon' => 'fa fa-images',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'category' => 'Programs',
                'faicon' => 'fa fa-globe',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'category' => 'Videos',
                'faicon' => 'fa fa-video',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
        ];
        
        $result = DB::table('category')->insert($data);
    }
}
