@extends('web.frontend.layouts.layout')

@section('title', 'Notre histoire')

@section('main')

<h1 class="title-page">Notre histoire</h1>
<div class="img-fullwidth">
    <picture>
        <source media="(max-width: 640px)" srcset="{{asset('img/assets/garage2_small.jpg')}}">
        <source media="(min-width: 641px)" srcset="{{asset('img/assets/garage2.jpg')}}">
        <img src="" alt="{{asset('img/assets/garage1.jpg')}}"" alt="La devanture du garage Jeantet, une 208 électrique est garée devant l'entrée.">
    </picture>
</div>
<article class="container-fullwidth">
    <div class="bloc bloc-left">
        {{-- <img class="bloc-img" src="{{asset('../img/assets/atelier1_square.jpg')}}" alt="">  --}}
        <div class="bloc-content">
            <h2 class="bloc-header">1963</h2>
            <div class="bloc-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
            </div>
        </div>
    </div>
</article>
<article  class="container-fullwith hotrod">
<div class="bloc bloc-left">
    {{-- <img class="bloc-img" src="{{asset('../img/assets/mechanic_600.png')}}" alt="">  --}}
    <div class="bloc-content">
        <h2 class="bloc-header">1972</h2>
        <div class="bloc-body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sint nam animi aut dignissimos dolores nisi modi ratione 
                aliquam consequuntur, architecto laudantium repellat suscipit
                veniam nemo, ipsum, laboriosam quia reiciendis sequi!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sint nam animi aut dignissimos dolores nisi modi ratione 
                aliquam consequuntur, architecto laudantium repellat suscipit
                veniam nemo, ipsum, laboriosam quia reiciendis sequi!
            </p>
        </div>
    </div>
</div>
</article>
<article class="container-fullwidth">
    <div class="bloc bloc-left">
        {{-- <img class="bloc-img" src="{{asset('../img/assets/atelier1_square.jpg')}}" alt="">  --}}
        <div class="bloc-content">
            <h2 class="bloc-header">1985</h2>
            <div class="bloc-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
            </div>
        </div>
    </div>
</article>
<article  class="container-fullwith hotrod">
    <div class="bloc bloc-left">
        {{-- <img class="bloc-img" src="{{asset('../img/assets/mechanic_600.png')}}" alt="">  --}}
        <div class="bloc-content">
            <h2 class="bloc-header">2012</h2>
            <div class="bloc-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sint nam animi aut dignissimos dolores nisi modi ratione 
                    aliquam consequuntur, architecto laudantium repellat suscipit
                    veniam nemo, ipsum, laboriosam quia reiciendis sequi!
                </p>
            </div>
        </div>
    </div>
</article>
@endsection