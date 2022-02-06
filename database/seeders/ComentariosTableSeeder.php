<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
		->table('comentarios')
		->insert([
			'resposta'=>'Resposta 1',
			'post_id'=>'1'
		]);
		
		app('db')
		->table('comentarios')
		->insert([
			'resposta'=>'Resposta 2',
			'post_id'=>'1'
		]);
		
		app('db')
		->table('comentarios')
		->insert([
			'resposta'=>'Resposta 3',
			'post_id'=>'2'
		]);
		
		app('db')
		->table('comentarios')
		->insert([
			'resposta'=>'Resposta 4',
			'post_id'=>'3'
		]);
    }
}
