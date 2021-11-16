@extends('layouts.app')
@section('content')
<div class="row container">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('targets/update') }}" method="POST">

        <!-- item_name -->
        <div class="form-group">
           <label for="item_name">Title</label>
           <input type="text" name="item_name" class="form-control" value="{{$target->item_name}}">
        </div>
        <!--/ item_name -->
        
        <!-- item_number -->
        <div class="form-group">
           <label for="item_number">Number</label>
        <input type="text" name="item_number" class="form-control" value="{{$target->item_number}}">
        </div>
        <!--/ item_number -->

        <!-- item_amount -->
        <div class="form-group">
           <label for="item_amount">Amount</label>
        <input type="text" name="item_amount" class="form-control" value="{{$target->item_amount}}">
        </div>
        <!--/ item_amount -->
        
        <!-- target_person -->
        <div class="form-group">
           <label for="target_person">target_person</label>
            <input type="text" name="target_person" class="form-control" value="{{$target->target_person}}"/>
        </div>
        <!--/ target_person -->
        
        <!-- lent_or_borrowed -->
        <div class="form-group">
           <label for="lent_or_borrowed">lent_or_borrowed</label>
            <input type="text" name="lent_or_borrowed" class="form-control" value="{{$target->lent_or_borrowed}}"/>
        </div>
        <!--/ lent_or_borrowed -->
        
        <!-- execution_date -->
        <div class="form-group">
           <label for="execution_date">execution_date</label>
            <input type="datatime" name="execution_date" class="form-control" value="{{$target->execution_date}}"/>
        </div>
        <!--/ execution_date -->
        
        <!-- deadline -->
        <div class="form-group">
           <label for="deadline">deadline</label>
            <input type="datatime" name="deadline" class="form-control" value="{{$target->deadline}}"/>
        </div>
        <!--/ deadline -->
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                Back
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