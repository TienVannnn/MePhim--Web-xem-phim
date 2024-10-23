@if ($errors->any())
    <div class="alert alert-danger auto-hide">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('err'))
    <div class="alert alert-danger auto-hide">
        {{ Session::get('err') }}
    </div>
@endif

@if (Session::has('suc'))
    <div class="alert alert-success auto-hide">
        {{ Session::get('suc') }}
    </div>
@endif
