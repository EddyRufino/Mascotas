<?php

use App\Mascota;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mascotas')->insert([
            'nombre' => 'Macho',
        ]);

        DB::table('mascotas')->insert([
            'nombre' => 'Hembra',
        ]);

        factory(User::class, 3)->create();
        factory(Mascota::class, 8)->create();
        // $this->call(UsersTableSeeder::class);

    }
}
