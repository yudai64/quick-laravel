<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO reviews (book_id, name, body) VALUES (1, "山田太郎", "環境を作るのに手間がかかったが、本の通りにゲームを作ることができて、楽しかった。")');
    }
}
