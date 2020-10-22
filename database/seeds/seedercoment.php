<?php

use Illuminate\Database\Seeder;

class seedercoment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comentarios")->insert([
            [
               'comentario'=>'primer comentario',
               'post_id' => '1'
             ],
            [
                'comentario'=>'segundo comentario',
                'post_id' => '3'
             ]
         ]);
    }
}
