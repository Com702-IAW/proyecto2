<?php

use Illuminate\Database\Seeder;

class MousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mice')->delete();
        DB::table('mice')->insert([
          [
            'marca' => 'Genius',
            'precio' => 200,
            'color' => 'Negro',
            'imagen' => 'src/mouse0.png'
          ],
          [
            'marca' => 'Microsoft',
            'precio' => 300,
            'color' => 'Gris',
            'imagen' => 'src/Mouse1.png'
          ]
        ]);
    }
}
