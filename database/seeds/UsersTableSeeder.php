<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name'          => 'Joel',
            'last_name'     => 'Sosa',
            'cel_telephone' => '1151408787',
            'user'          => 'juampa',
            'dni'           => '27654876',
            'email'         => 'juanpablososa@gmail.com',
            'password'      => 'pepepepe'
        ]);
    }
}
