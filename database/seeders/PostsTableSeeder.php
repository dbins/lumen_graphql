<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 1',
			'conteudo'=>'Conteudo 1',
			'user_id'=>'1'
		]);
		
		app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 2',
			'conteudo'=>'Conteudo 2',
			'user_id'=>'1'
		]);
		
		app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 3',
			'conteudo'=>'Conteudo 3',
			'user_id'=>'2'
		]);
		
		app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 4',
			'conteudo'=>'Conteudo 4',
			'user_id'=>'2'
		]);
		
		app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 5',
			'conteudo'=>'Conteudo 5',
			'user_id'=>'3'
		]);
		
		app('db')
		->table('posts')
		->insert([
			'titulo'=>'Post 6',
			'conteudo'=>'Conteudo 6',
			'user_id'=>'3'
		]);
    }
}
