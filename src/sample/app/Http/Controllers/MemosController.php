<?php

namespace App\Http\Controllers;

use App\Models\memos;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = memos::all();  # tinkerで試したように、これで抜きだせる
        return view('index', ['message' => $data]); # 連想配列で値を渡す
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->filled('text')) {
            $text = $request->input('text');
            $memo = new memos(); // 新規メモのインスタンスを生成
            $memo->text = $text; // メモ内容をセットして
            $memo->save();  // 保存すればレコードとして記録
        }
        // メモの一覧に移動させる(ルーティング上で指定する)
        return redirect(route('memo.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, memos $memos)
    {
        $memo = memos::find($id);
        return view('show', ['memo' => $memo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function edit(memos $memos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, memos $memos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function destroy(memos $memos)
    {
        //
    }
}
