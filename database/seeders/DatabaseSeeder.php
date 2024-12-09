<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //TodoListSeederクラスを呼び出すように設定します。
            $this->call([
                TodoListSeeder::class
                        //ここまでできたらターミナルにて　php artisan db:seed --class=TodoListSeeder　実行

        ]);
    }
}
