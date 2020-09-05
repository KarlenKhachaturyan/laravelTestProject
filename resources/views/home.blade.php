@extends('layouts.app')

<title>{{$title ?? 'TCO'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
    <h2>{{__('lang.welcome_msg')}}</h2> <br>
    <h4>{{__('lang.par')}}</h4>
@endsection

@section('footer')
    @parent
@endsection
