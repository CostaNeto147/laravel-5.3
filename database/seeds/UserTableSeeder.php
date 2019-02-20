<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' =>'Carlos',
            'email'=>'carlos@hotmail.com',
            'password'=>bcrypt('123456')
            ]);


            //factory(User::class,1)->create();
        //inserir usuario automaticamente

    }
}
