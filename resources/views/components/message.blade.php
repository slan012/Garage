<!-- Errors-->
@if ($errors->any())
    <div class="bg-red-100 text-red-900 border border-red-700 rounded-md p-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Success -->
@if (session('success'))
    <div class="bg-green-100 text-green-900 border border-green-700 rounded-md p-4 ">
        <i class="fas fa-check-circle"></i> {{session('success')}}
    </div>
@endif
<!-- Failed -->
@if (session('failed'))
    <div class="bg-red-100 text-red-900 border border-red-700 rounded-md p-4">
        {{session('failed')}}
    </div>
@endif