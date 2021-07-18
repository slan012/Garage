<!-- Errors-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Success -->
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<!-- Failed -->
@if (session('failed'))
    <div class="alert alert-danger">
        {{session('failed')}}
    </div>
@endif