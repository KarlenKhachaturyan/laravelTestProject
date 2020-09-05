@extends('layouts.app')

<title>{{$title ?? 'Edit Movie'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
        @isset($data)
        <form action="{{route('updateRecord', ['id'=> $data['id']])}}" method="post">
                @csrf
                @method('PUT')
                <label >Movie Name</label>
                <input id='movie_name' name='movie_name' type="text" value="{{$data['movie_name']}}" class="form-control @error('movie_name') is-invalid @enderror">
                    @error('movie_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label >Select Genre</label>
                    <select name="genre_ids[]" id="genre_name" style="margin-top: 5px; margin-bottom:5px;" class="mdb-select md-form" multiple>
                        <option value="" disabled selected>Choose The Genre</option>
                        @isset($genre)
                            @foreach ($genre as $item)
                                <option value="{{$item->id}}">{{$item->genre_name}}</option>
                            @endforeach
                        @endisset
                        @empty($genre)
                            {{__('lang.nothing')}}
                        @endempty
                      </select>
                <label >Movie Description</label>
                <input id='movie_description' name='movie_description' type="text" value="{{$data['movie_description']}}" class="form-control @error('movie_description') is-invalid @enderror">
                    @error('movie_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label >Year</label>
                <input id='year' name='year' type="text" value="{{$data['year']}}" class="form-control @error('year') is-invalid @enderror">
                    @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label >Director</label>
                <input id='director_name' name='director_name' type="text" value="{{$data['director_name']}}" class="form-control @error('director_name') is-invalid @enderror">
                    @error('director_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label >IMDB Link</label>
                <input id='imdb_link' name='imdb_link' type="url" value="{{$data['imdb_link']}}" class="form-control @error('imdb_link') is-invalid @enderror">
                    @error('imdb_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label >IMDB Rating</label>
                <input id='imdb_rating' name='imdb_rating' type="text" value="{{$data['imdb_rating']}}" class="form-control @error('imdb_rating') is-invalid @enderror">
                    @error('imdb_rating')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror <hr>
                    <input type="submit" value="Update Record" class="btn btn-warning btn-lg float-left align-content-center">
            </form>
            <a href="{{route('deleteRecord', ['id' => $data['id']])}}"
               class="btn btn-danger btn-lg float-left align-content-center delete-user"
               onclick="return confirm('Do you really want to delete?');">Delete</a>
            <a href="{{route('movies')}}" class="btn btn-success btn-lg float-left align-content-center" onclick="return confirm('Are You Sure?');">Cancel</a>
        @endisset
        @empty($data)
            {{__('lang.nothing')}}
        @endempty
@endsection

@section('footer')
    @parent
@endsection


