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
      DB::table('users')->delete();
      DB::table('users')->insert([
        [
          'name' => 'Constanza Morillo',
          'email' => 'constanzamorillo1@gmail.com',
          'password' => '$2y$10$sZ69LIOh2iP64ERUB/QZqukODkkCBjmbf5cqDIGLJhkyj4ouExmyi',
          'admin' => 1,
        ]
      ]
      );
    }
}
