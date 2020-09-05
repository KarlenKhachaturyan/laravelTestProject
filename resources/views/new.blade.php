@extends('layouts.app')

<title>{{$title ?? 'Movies'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
<form action="{{route('addNew')}}" method="post">
        @csrf
        <label >Movie Name</label>
        <input id='movie_name' name='movie_name' type="text" placeholder="Movie Name" class="form-control @error('movie_name') is-invalid @enderror">
            @error('movie_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <label >Select Genre</label>
        <select name="genre_ids[]"  style="margin-top: 5px; margin-bottom:5px;" multiple>
            <option  disabled selected>Choose genre</option>
            @isset($genre)
                @foreach ($genre as $item)
                    <option value="{{$item->id}}">{{$item->genre_name}}</option>
                @endforeach
            @endisset
            @empty($genre)
                {{__('lang.nothing')}}
            @endempty
        </select><br>
        <label >Movie Description</label>
        <input id='movie_description' name='movie_description' type="text" placeholder="Movie Description" class="form-control @error('movie_description') is-invalid @enderror">
            @error('movie_description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <label >Year</label>
        <input id='year' name='year' type="text" placeholder="Movie Year" class="form-control @error('year') is-invalid @enderror">
            @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <label >Director</label>
        <input id='director_name' name='director_name' type="text" placeholder="Director's Name" class="form-control @error('director_name') is-invalid @enderror">
            @error('director_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <label >IMDB Link</label>
        <input id='imdb_link' name='imdb_link' type="url" placeholder="IMDB Link" class="form-control @error('imdb_link') is-invalid @enderror">
            @error('imdb_link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <label >IMDB Rating</label>
        <input id='imdb_rating' name='imdb_rating' type="text" placeholder="Rating" class="form-control @error('imdb_rating') is-invalid @enderror">
            @error('imdb_rating')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror <hr>
            <input type="submit" value="Create New Record" class="btn btn-info btn-lg float-left align-content-center">
        </form>
        <a href="{{route('movies')}}" class="btn btn-warning btn-lg float-left align-content-center">Cancel</a>


@endsection

@section('footer')
    @parent
@endsection
