<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todo_lists', function (Blueprint $table) {
            //テーブルのカラム作成
            $table->id(); 
            $table->string('name',100); //追記箇所
            $table->timestamps();//created_atとupdated_atの2つのカラムを追加する機能を持ちます。
            //データベースのカラム作成のため　コマンド実行　php artisan migrate
        });
    }
     // シーダーファイルを作成するコマンドphp artisan make:seeder TodoListSeeder



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_lists');
    }
};
