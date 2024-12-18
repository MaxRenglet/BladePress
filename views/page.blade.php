@extends('app')

@section('content')

<div class="prose">

<h1 class="big-title text-cream">
        {!! get_the_title() !!}</h1>

        {!! get_the_content() !!}
</div>
@endsection
