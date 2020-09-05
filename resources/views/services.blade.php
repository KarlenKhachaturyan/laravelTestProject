@extends('layouts.app')

<title>{{$title ?? 'Services'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-md-6" style='padding-top:10px;'>
            @isset($url_data)
                <div class="embed-responsive embed-responsive-16by9 mb-4">
                <iframe class="embed-responsive-item" width="1013" height="570" src="{{$url_data}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endisset
            @empty($url_data)
                {{__('lang.nothing')}}
            @endempty
        </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
