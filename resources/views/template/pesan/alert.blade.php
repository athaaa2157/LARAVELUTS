@if ($errors->any())
    <div class="alert alert-danger">
        <u1>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </u1>
    </div>
@endif
@if (Session::get('success'))
    <div class="alert alert-success alert-success alert-dismissible fade show">
        <u1>
            <li>{{ Session::get('success') }}</li>
        </u1>
    </div>
@endif
