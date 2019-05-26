@if(Session::has('info'))
    <div class="alert w3-green">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('info')}}
    </div>
@endif