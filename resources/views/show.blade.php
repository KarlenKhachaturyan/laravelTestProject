@extends('layouts.app')

<title>{{$title ?? 'Movies'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
    @isset($data)
        <div>
        <h2>Movie: {{$data->movie_name}}</h2>
        <h3>Director:  {{$data->director_name}}</h3>
        <h3>Year: {{$data->year}},   IMDB Rating: {{$data->imdb_rating}}</h3>
        <p>About: {{$data->movie_description}}</p>
        <p>IMDB URL: {{$data->imdb_link}}</p>
        </div>
    @endisset
    @empty($data)
        {{__('lang.nothing')}}
    @endempty
    <a href="{{route('movies')}}" class="btn btn-warning btn-lg float-right align-content-center">Back</a>


@endsection

@section('footer')
    @parent
@endsection
