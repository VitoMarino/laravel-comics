@extends('layouts.app')

@section('main-products')

<div class="my_products">
    <section class="jumbotron">

    </section>

    <div class="button-main">
        <button>Current series</button>

            <article>
                @foreach ( $comics as $comic )
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <h4>
                    {{$comic['series']}}
                </h4>
                <p>
                    {{$comic['price']}}
                </p>
                @endforeach
            </article>
    </div>
</div>

@endsection

