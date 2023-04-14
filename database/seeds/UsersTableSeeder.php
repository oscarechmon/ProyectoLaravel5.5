<?php

use Illuminate\Database\Seeder;
 use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Oscar Arturo',
            'email'=>'oscarechegaraym@gmail.com',
            'password'=>bcrypt('123123')
        ]);
        User::create([
            'name'=>'Liz Echegaray',
            'email'=>'lizechegaraym@gmail.com',
            'password'=>bcrypt('123123')
        ]);
        User::create([
            'name'=>'Jaimito',
            'email'=>'guidojaime@gmail.com',
            'password'=>bcrypt('123123')
        ]);
    }
}
