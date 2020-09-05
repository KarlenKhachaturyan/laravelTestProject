@extends('layouts.app')

<title>{{$title ?? 'Movies'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
                @isset($data)

                    @for ($i = 0; $i < count($data->toArray()); $i++)
                        <div class="container" style="margin-top: 15px;">
                            <h2>Movie Name: {{$data[$i]->movie_name}}</h2>
                            <h3>Genre:
                            @foreach ($data[$i]['genre'] as $item)
                                     {{$item['genre_name']}}, 
                            @endforeach
                            </h3>
                            <p>Year: {{$data[$i]->year}}</p>

                            <div style="display: flex; flex-direction: row;">
                                <div style="padding-bottom:10px;">
                                    <a class="btn btn-warning" href="{{route('editRecord', ['id'=> $data[$i]->id])}}" role="button">Edit</a>
                                </div>
                                <div class="form-group">
                                    <a href="{{route('showRecord', ['id' => $data[$i]->id])}}" class="btn btn-info" role="button">Show</a>
                                </div>
                            </div>
                        </div><hr>
                    @endfor
                @endisset
                @empty($data)
                    <h3>{{__('lang.noping')}}</h3>
                @endempty
            </table>
            <a href="{{route('createRecord')}}" class="btn btn-lg btn-success" >Add New</a>
            {{-- <div style="float:right">
                {{$data->links()}}
            </div> --}}

@endsection

@section('footer')
    @parent
@endsection
