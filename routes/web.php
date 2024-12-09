<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;//追記
use App\Http\Controllers\TaskController;//追記

// Route::get('/tasks', function () {
//     return view('tasks.index');
// });



Route::resource('tasks', TaskController::class)->except(['create', 'show']); 
//ルーティングは以下のような形式で書きます。
//Route::get( アドレス , [コントローラーの名前::class , メソッド名] );
//POST送信した場合に何か処理を行う時は、Route::post
// Route::resouceはCRUDのルーティングを一度に行える

// MVC完成したので　 php artisan serve　実行して/list にアクセス　データの表示確認
//本当にデータベースとリンクしているか確認するためにTodolistSeeder.phpの内容を変更して確認する
//php artisan migrate:fresh --seed  このコマンドは、データベースからすべてのテーブルを削除したあと、マイグレーションを行い、さらにシーディングによりデータ登録を行うコマンドです。

//まとめると
//アドレス名を決めているのは '/list' の部分で、/listというパスが指定されています。
//このルートにGETリクエストが送信された場合、TodoListControllerのindexメソッドが実行されます。
//例
//ブラウザで「http://yourdomain.com/list」にアクセスすると、TodoListControllerのindexメソッドが実行され、Todoリストの表示ページがユーザーに返される仕組みです。

