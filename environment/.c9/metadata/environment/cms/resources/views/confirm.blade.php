{"filter":false,"title":"confirm.blade.php","tooltip":"/cms/resources/views/confirm.blade.php","undoManager":{"mark":11,"position":11,"stack":[[{"start":{"row":0,"column":0},"end":{"row":36,"column":0},"action":"insert","lines":["@extends('layout')","","@section('content')","<form method=\"POST\" action=\"{{ route('contact.send') }}\">","    @csrf","","    <label>メールアドレス</label>","    {{ $inputs['email'] }}","    <input","        name=\"email\"","        value=\"{{ $inputs['email'] }}\"","        type=\"hidden\">","","    <label>タイトル</label>","    {{ $inputs['title'] }}","    <input","        name=\"title\"","        value=\"{{ $inputs['title'] }}\"","        type=\"hidden\">","","","    <label>お問い合わせ内容</label>","    {!! nl2br(e($inputs['body'])) !!}","    <input","        name=\"body\"","        value=\"{{ $inputs['body'] }}\"","        type=\"hidden\">","","    <button type=\"submit\" name=\"action\" value=\"back\">","        入力内容修正","    </button>","    <button type=\"submit\" name=\"action\" value=\"submit\">","        送信する","    </button>","</form>","@endsection",""],"id":2}],[{"start":{"row":3,"column":38},"end":{"row":3,"column":45},"action":"remove","lines":["contact"],"id":3}],[{"start":{"row":3,"column":38},"end":{"row":3,"column":39},"action":"insert","lines":["t"],"id":4},{"start":{"row":3,"column":39},"end":{"row":3,"column":40},"action":"insert","lines":["a"]}],[{"start":{"row":3,"column":41},"end":{"row":3,"column":42},"action":"insert","lines":["/"],"id":5}],[{"start":{"row":3,"column":41},"end":{"row":3,"column":42},"action":"remove","lines":["/"],"id":6}],[{"start":{"row":3,"column":39},"end":{"row":3,"column":40},"action":"remove","lines":["a"],"id":7}],[{"start":{"row":3,"column":39},"end":{"row":3,"column":40},"action":"insert","lines":["a"],"id":8}],[{"start":{"row":3,"column":38},"end":{"row":3,"column":40},"action":"remove","lines":["ta"],"id":9},{"start":{"row":3,"column":38},"end":{"row":3,"column":45},"action":"insert","lines":["targets"]}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":21},"action":"remove","lines":["email"],"id":10},{"start":{"row":7,"column":16},"end":{"row":7,"column":27},"action":"insert","lines":["target_mail"]}],[{"start":{"row":9,"column":14},"end":{"row":9,"column":19},"action":"remove","lines":["email"],"id":11},{"start":{"row":9,"column":14},"end":{"row":9,"column":25},"action":"insert","lines":["target_mail"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":32},"action":"remove","lines":["email"],"id":12},{"start":{"row":10,"column":27},"end":{"row":10,"column":38},"action":"insert","lines":["target_mail"]}],[{"start":{"row":13,"column":0},"end":{"row":30,"column":13},"action":"remove","lines":["    <label>タイトル</label>","    {{ $inputs['title'] }}","    <input","        name=\"title\"","        value=\"{{ $inputs['title'] }}\"","        type=\"hidden\">","","","    <label>お問い合わせ内容</label>","    {!! nl2br(e($inputs['body'])) !!}","    <input","        name=\"body\"","        value=\"{{ $inputs['body'] }}\"","        type=\"hidden\">","","    <button type=\"submit\" name=\"action\" value=\"back\">","        入力内容修正","    </button>"],"id":13},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":13},"end":{"row":15,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1639347856188,"hash":"27c960cbf14fb12b49b9a6fec650908cb85d066a"}