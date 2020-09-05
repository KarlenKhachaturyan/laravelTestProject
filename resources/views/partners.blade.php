@extends('layouts.app')

<title>{{$title ?? ''}}</title>

@section('nav')
    @parent
@endsection

@section('content')
<h2>{{__('lang.partners')}}</h2>
    <div class="partners" style='display:flex; flex-direction:row; justify-content:space-between; padding-top:20px; text-align:center;'>
        @isset($data)
            @for ($i = 0; $i < count($data); $i++)
                <div>
                    <div>
                      <img src="{{$data[$i]['logo']}}" alt="Logo" style='width:150px; height:80px'>
                    </div>
                    {{$data[$i]['name']}}
                </div>
            @endfor
        @endisset
        @empty($data)
        <h3>{{__('lang.nothing')}}</h3>
        @endempty
    </div>
@endsection

@section('footer')
    @parent
@endsection
