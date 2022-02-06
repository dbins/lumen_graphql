<?php

namespace Database\Seeders;

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
         // create 10 users using the user factory
        //\App\Models\User::factory()->count(10)->create();
		 app('db')
		->table('users')
		->insert([
			'nome'=>'User 1',
			'email'=>'teste1@teste.com.br'
		]);
		
		app('db')
		->table('users')
		->insert([
			'nome'=>'User 2',
			'email'=>'teste2@teste.com.br'
		]);
		
		app('db')
		->table('users')
		->insert([
			'nome'=>'User 3',
			'email'=>'teste3@teste.com.br'
		]);
		
		app('db')
		->table('users')
		->insert([
			'nome'=>'User 4',
			'email'=>'teste4@teste.com.br'
		]);
    }
}
