@extends('layouts.app')

<title>{{$title ?? 'Our Staff'}}</title>

@section('nav')
    @parent
@endsection

@section('content')
    <table class='table table-bordered table-dark'>
        <tr>
            <th>{{__('lang.table_name')}}</th>
            <th>{{__('lang.table_surname')}}</th>
            <th>{{__('lang.table_age')}}</th>
            <th>{{__('lang.table_position')}}</th>
        </tr>
        @isset($data)
            @for ($i = 0; $i < count($data); $i++)
                <tr>
                <td>{{$data[$i]['name']}}</td>
                <td>{{$data[$i]['surname']}}</td>
                <td>{{$data[$i]['age']}}</td>
                <td>{{$data[$i]['position']}}</td>
                </tr>
            @endfor
        @endisset
        @empty($data)
            <h3>{{__('lang.nothing')}}</h3>
        @endempty
    </table>
@endsection

@section('footer')
    @parent
@endsection
