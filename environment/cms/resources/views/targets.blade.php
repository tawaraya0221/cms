<!-- resources/views/targets.blade.php -->
@extends('layouts.app')
@section('content')
<!-- Bootstrapの定形コード… -->
<div class="card-body">

    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->

    <!-- 対象物のタイトル -->
    <form enctype="multipart/form-data" action="{{ url('targets') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="target" class="col-sm-3 control-label">対象物</label>
                <input type="text" name="item_name" class="form-control" placeholder="例)ボールペン">
            </div>
            　　　　　　　　
            　　　　　　　　
            <div class="form-group col-md-6">
                <label for="number" class="col-sm-3 control-label">数量</label>
                <input type="text" name="item_number" class="form-control" placeholder="数字のみを入力してください(最低1)">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lent_or_borrowed" class="col-sm-3 control-label">貸したか借りたか</label>
                <input type="text" name="lent_or_borrowed" class="form-control" placeholder="どちらか選択してください" readonly>

                <input type="radio" name="lent_or_borrowed" value="貸した">
                貸した
                <input type="radio" name="lent_or_borrowed" value="借りた">
                借りた

            </div>

            <div class="form-group col-md-6">
                <label for="target_person" class="col-sm-3 control-label">対象者</label>
                <input type="text" name="target_person" class="form-control" placeholder="例)○○さん">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="target_mail" class="col-sm-3 control-label">対象者メールアドレス</label>
                <input type="email" name="target_mail" class="form-control" placeholder="例)xxx@example.com">
            </div>

            <div class="form-group col-md-6">
                <label for="execution_date" class="col-sm-3 control-label">実行日</label>
                <input type="date" name="execution_date" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="deadline" class="col-sm-3 control-label">期日</label>
                <input type="date" name="deadline" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label class="col-sm-3 control-label">画像(2mb未満)</label>
                <input type="file" name="item_img" class="form-control">
            </div>
        </div>


        <!-- 登録ボタン -->
        <div class="form-row">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">
                    保存
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
            <thead class="thead-dark">
            <th>一覧</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>

            </thead>
            <!-- テーブル本体 -->
            <tbody>
            @foreach ($targets as $target)
            <tr>
                <!-- タイトル -->

                <td class="table-text">
                    <div><img src="upload/{{$target->item_img}}" width="160" height="130"></div>
                </td>

                <td>
                    <p style="text-align:center" class="bg-dark text-white rounded p-2">
                        
                @if($target->lent_or_borrowed ==='貸した')
                        {{ $target->target_person }}に{{ $target->item_name }}を{{ $target->lent_or_borrowed }}(個数:{{ $target->item_number }})
                @else
                        {{ $target->target_person }}から{{ $target->item_name }}を{{ $target->lent_or_borrowed }}(個数:{{ $target->item_number }})
                @endif
                    </p>
                </td>

                <td>
                    <p style="text-align:center" class="bg-danger text-white rounded p-2">期限：{{ $target->deadline }}</p>
                </td>

                <!-- 更新ボタン -->
                <td align="center">
                    <form action="{{ url('targetsedit/'.$target->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning">
                            　　更新　　
                        </button>
                    </form>
                </td>

                <!-- 催促ボタン -->
                @if($target->lent_or_borrowed ==='貸した')
                <td align="center">
                    
                    <form action="sendMail" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info">
                    催促
                    </button>
                    </form>
                </td>
                @else
                                <td align="center">
                    
                    <form action="sendMail" method="POST">
                    @csrf
                    </form>
                </td>
                @endif


                <!-- 削除ボタン -->
                <td align="center">
                    <form action="{{ url('target/'.$target->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-success">
                            　完了(削除)　
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
    <div class="col-md-5 offset-md-5">
        {{ $targets->links()}}
    </div>
</div>
@endif

<!--@yield('footer')-->

    <form action="formPost" method="POST" align="center">
      @csrf
      <input type="submit" name="kiyaku" value="利用規約" class="btn btn-secondary">
    </form>

@endsection
