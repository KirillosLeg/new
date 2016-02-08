<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	
	public function run()
    {
        DB::table('books')->insert([
            'title' => 'Книга 1';
            'author' => 'Первый'
            'year' => 2001,
            'description' => 'Много текста',
            'image' =>'images/1.jpg',
        ]);

        DB::table('books')->insert([
            'title' => 'Книга 2';
            'author' => 'Второй'
            'year' => 2002,
            'description' => 'Много текста',
            'image' =>'images/default.png',
        ]);

        DB::table('books')->insert([
            'title' => 'Книга 3';
            'author' => 'Тритий'
            'year' => 1934,
            'description' => 'Много текста',
            'image' =>'images/3.jpg',
        ]);

        DB::table('books')->insert([
            'title' => 'Книга 4';
            'author' => 'Четвертый'
            'year' => 2004,
            'description' => 'Много текста',
            'image' =>'images/4.png',
        ]);

        DB::table('books')->insert([
            'title' => 'Книга 5';
            'author' => 'Первый'
            'year' => 2005,
            'description' => 'Много текста',
            'image' =>'images/5.png',
        ]);

    }
}