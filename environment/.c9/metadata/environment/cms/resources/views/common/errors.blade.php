{"filter":false,"title":"errors.blade.php","tooltip":"/cms/resources/views/common/errors.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["<!-- resources/views/common/errors.blade.php -->","@if (count($errors) > 0)","    <!-- Form Error List -->","    <div class=\"alert alert-danger\">","        <div><strong>入力した文字を修正してください。</strong></div> ","        <div>","            <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","            </ul>","        </div>","    </div>","@endif",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":36},"end":{"row":4,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1633928631273,"hash":"1a6f19e50a1541381ed9a337dcf21aff74b63701"}