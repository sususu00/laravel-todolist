<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;//モデルクラス「TodoList」を使うため

class TodoListController extends Controller
{
    public function index(Request $request)
  {
    $todo_lists = TodoList::all();
    
    //データベースからテーブル「todo_lists」にある全レコードを変数に代入　
    //※このモデルクラス「TodoList」を使うためには、スクリプトの先頭でuse文によりTodoListを読み込まないといけない点に注意してくだいさい。
 
    return view('todo_list.index', ['todo_lists' => $todo_lists]);
    //               このフォルダ。このファイル　　　　このテーブルに＝＞データベースの値
    //viewメソッドの第一引数には、「どのビューファイルか」を指定します。
    //書き方は、view(‘フォルダ名.ファイル名’)となります。
    //また、ビューに値を渡すときは、このように変数名と値がペアになった連想配列を第2引数に設定します。
    //viewファイルのディレクトリをtodo_list.index　の階層に合わせて作る

  }
}
