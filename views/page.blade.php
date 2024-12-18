@extends('app')

@section('content')
    <div class="prose">

        <div class="text-red bg-yellow"></div>
        {!! get_the_content() !!}
    </div>
@endsection
