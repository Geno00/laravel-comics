@extends('layouts.base')

@section('page-content')
    <section>
        <ul>
            @foreach ($movies as $movie)
                    <li class="list">
                        <div class="film">
                            <img src="{{$movie['thumb']}}" alt="">
                            <h3>{{$movie['series']}}</h3>
                        </div>
                    </li>
            @endforeach
        </ul>
    </section>
@endsection