<!-- resources/views/targets.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            情報登録フォーム
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 対象物のタイトル -->
        <form enctype="multipart/form-data" action="{{ url('targets') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="target" class="col-sm-3 control-label">名前</label>
                    <input type="text" name="item_name" class="form-control">
                </div>
　　　　　　　　
　　　　　　　　<div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">数</label>
                    <input type="text" name="item_number" class="form-control" placeholder="ない場合は0">
                </div>
            </div>
            <div class="form-row">
                                <div class="form-group col-md-6">
                    <label for="amount" class="col-sm-3 control-label">金額</label>
                    <input type="text" name="item_amount" class="form-control" placeholder="ない場合は0">
                </div>

                  <div class="form-group col-md-6">
                    <label for="target_person" class="col-sm-3 control-label">対象者</label>
                    <input type="text" name="target_person" class="form-control">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lent_or_borrowed" class="col-sm-3 control-label">貸したか借りたか</label>
                    <input type="text" name="lent_or_borrowed" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="execution_date" class="col-sm-3 control-label">借りた日or貸した日</label>
                    <input type="date" name="execution_date" class="form-control">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="deadline" class="col-sm-3 control-label">期限</label>
                    <input type="date" name="deadline" class="form-control">
                </div>
            </div>

            <div class="col-sm-6">
                <label>画像</label>
                <input type="file" name="item_img">
            </div>

            <!-- 登録ボタン -->
            <div class="form-row">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </div>
            </div>
        </form>
    </div>

@if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif
  
    <!-- リスト -->
     <!-- 現在 -->
    @if (count($targets) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($targets as $target)
                            <tr>
                                <!-- タイトル -->
                                <td class="table-text">
                                    <div>{{ $target->item_name }}</div>
                                    <div> <img src="upload/{{$target->item_img}}" width="100"></div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('targetsedit/'.$target->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('target/'.$target->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     <div class="row">
            <div class="col-md-4 offset-md-4">
                {{ $targets->links()}}
            </div>
       </div>
    @endif

@endsection
