<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
          'cpf'          => '06063056962',
          'name'         => 'Alladio',
          'phone'        => '41998578539',
          'birth'        => '1988-10-1',
          'gender'       => 'M',
          'notes'        => '',
          'email'        => 'alladio_bonesso@hotmail.comm',
          'password'      =>   env('PASSWORD_HASH') ? bcrypt('123456') : '123456'

        ]);
    }
}
