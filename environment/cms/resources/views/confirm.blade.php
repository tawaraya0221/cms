@extends('layout')

@section('content')
<form method="POST" action="{{ route('targets.send') }}">
    @csrf

    <label>メールアドレス</label>
    {{ $inputs['target_mail'] }}
    <input
        name="target_mail"
        value="{{ $inputs['target_mail'] }}"
        type="hidden">

    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>
@endsection
