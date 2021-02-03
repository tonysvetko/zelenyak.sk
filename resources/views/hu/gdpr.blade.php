@extends('layout', ['title'=>'Adatvédelmi tájékoztató'])

@section('content')
    <div class="markdown">{!! $text !!}</div>
@endsection
