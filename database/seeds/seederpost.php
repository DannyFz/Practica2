<?php

use Illuminate\Database\Seeder;

class seederpost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert([
           [
              'post'=>'Esto es un post'
            ],
           [
             'post'=>'Esto tambien es un post'
            ]
        ]);
    }
}
