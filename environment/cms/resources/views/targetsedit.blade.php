@extends('layouts.app')
@section('content')
<div class="row container">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('targets/update') }}" method="POST">

        <!-- item_name -->
        <div class="form-group">
           <label for="item_name">対象者</label>
           <input type="text" name="item_name" class="form-control" value="{{$target->item_name}}">
        </div>
        <!--/ item_name -->
        
        <!-- item_number -->
        <div class="form-group">
           <label for="item_number">数量</label>
        <input type="text" name="item_number" class="form-control" value="{{$target->item_number}}">
        </div>
        <!--/ item_number -->

        <!-- lent_or_borrowed -->
        <!--
        <div class="form-group">
        <label for="lent_or_borrowed">貸したか借りたか</label>
        <input type="text" name="lent_or_borrowed" class="form-control border border-danger" placeholder="再度選択してください" readonly>
        <input type="radio" name="lent_or_borrowed" value="貸した">
        貸した
        <input type="radio" name="lent_or_borrowed" value="借りた">
        借りた
        </div>
        
    -->
        <!--/ lent_or_borrowed -->
        
        <div class="form-group">
        <label for="lent_or_borrowed">貸したか借りたか</label>
        <input type="text" name="lent_or_borrowed" class="form-control" value="{{$target->lent_or_borrowed}}" placeholder="[貸した]か[借りた]のどちらかのみ">
        </div>
        
        <!-- target_person -->
        <div class="form-group">
           <label for="target_person">対象者</label>
            <input type="text" name="target_person" class="form-control" value="{{$target->target_person}}"/>
        </div>
        <!--/ target_person -->
        
        <!-- target_mail -->
        <div class="form-group">
           <label for="target_mail">対象者メールアドレス</label>
            <input type="text" name="target_mail" class="form-control" value="{{$target->target_mail}}"/>
        </div>
        <!--/ target_mail -->
        
        <!-- execution_date -->
        <div class="form-group">
           <label for="execution_date">実行日</label>
            <input type="date" name="execution_date" class="form-control" value="{{$target->execution_date}}"/>
        </div>
        <!--/ execution_date -->
        
        <!-- deadline -->
        <div class="form-group">
           <label for="deadline">期日</label>
            <input type="date" name="deadline" class="form-control" value="{{$target->deadline}}"/>
        </div>
        <!--/ deadline -->
        
        <!-- 保存ボタン/戻るkボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">保存</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                戻る
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$target->id}}">
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         @csrf
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection