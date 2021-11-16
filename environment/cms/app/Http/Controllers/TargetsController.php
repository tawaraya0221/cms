<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


//使うClassを宣言:自分で追加
use App\Target;   //Targetモデルを使えるようにする
use Validator;  //バリデーションを使えるようにする
use Auth;       //認証モデルを使用する

class TargetsController extends Controller
{
    //ダッシュボード表示
    public function index() {
        $targets = Target::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->paginate(3);
        return view('targets', [
            'targets' => $targets
        ]);
    }
    
    //更新画面
    public function edit($target_id){
        $targets = Target::where('user_id',Auth::user()->id)->find($target_id);
        return view('targetsedit', [
        'target' => $targets
    ]);
}
    
    //更新
    public function update(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'item_name' => 'required',
            'item_number' => 'required',
            'item_amount' => 'required',
            'target_person' => 'required',
            'lent_or_borrowed' => 'required',
            'execution_date' => 'required',
            'deadline' => 'required',
        ]); 
        //バリデーション：エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // データ更新
        $targets = Target::where('user_id',Auth::user()->id)->find($request->id);
        $targets->item_name   = $request->item_name;
        $targets->item_number = $request->item_number;
        $targets->item_amount = $request->item_amount;
        $targets->target_person = $request->target_person;
        $targets->lent_or_borrowed = $request->lent_or_borrowed;
        $targets->execution_date = $request->execution_date;
        $targets->deadline = $request->deadline;
        $targets->save();
        return redirect('/');
    }
    //登録
    public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_name' => 'required',
                'item_number' => 'required',
                'item_amount' => 'required',
                'target_person' => 'required',
                'lent_or_borrowed' => 'required',
                'execution_date' => 'required',
                'deadline' => 'required',
        ]);
        //バリデーション：エラー
        if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        
        $file = $request->file('item_img'); //file取得
        if( !empty($file) ){                //fileが空かチェック
            $filename = $file->getClientOriginalName();   //ファイル名を取得
             $move = $file->move('./upload/',$filename);  //ファイルを移動：パスが“./upload/”の場合もあるCloud9
        }else{
            $filename = "";
        }
        
        // Eloquentモデル（登録処理）
        $targets = new Target;
        $targets->user_id  = Auth::user()->id;
        $targets->item_name = $request->item_name;
        $targets->item_number = $request->item_number;
        $targets->item_amount = $request->item_amount;
        $targets->item_img = $filename;
        $targets->target_person = $request->target_person;
        $targets->lent_or_borrowed = $request->lent_or_borrowed;
        $targets->execution_date = $request->execution_date;
        $targets->deadline = $request->deadline;
        $targets->save();
        return redirect('/');
    }
    //削除処理
    public function destroy(Target $target) {
        $target->delete();
        return redirect('/')->with('message', '削除が完了しました');
    }
    //コンストラクタ （このクラスが呼ばれたら最初に処理をする）
    public function __construct()
    {
        $this->middleware('auth');
    }
}