@extends('layout', ['title'=>'Registrácia'])

@section('head')
    <script src="https://www.google.com/recaptcha/api.js?hl=sk" async defer></script>
@endsection

@section('content')

    <div class="max-w-2xl mx-auto">
        <h1 class="text-center text-3xl font-bold mb-8">Registrácia</h1>

        @if ($errors->any())
            <ul class="text-red-500 font-bold my-8">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if(flash()->message)
            <div class="{{ flash()->class }}">
                {{ flash()->message }}
            </div>
        @endif

        {{ Form::open(['route'=>'front.post.register']) }}
            <div class="mb-2">
                {{ Form::label('name', 'Meno a priezvisko', ['class'=>'block font-bold mb-2']) }}
                {{ Form::text('name', null, ['class'=>'border px-3 py-2 w-full focus:border-blue-400']) }}
            </div>
            <div class="mb-2">
                {{ Form::label('address', 'Bydlisko (adresa)', ['class'=>'block font-bold mb-2']) }}
                {{ Form::text('address', null, ['class'=>'border px-3 py-2 w-full focus:border-blue-400']) }}
            </div>
            <div class="mb-2">
                {{ Form::label('birth_year', 'Rok narodenia', ['class'=>'block font-bold mb-2']) }}
                {{ Form::text('birth_year', null, ['class'=>'border px-3 py-2 w-full focus:border-blue-400']) }}
            </div>
            <div class="mb-2">
                {{ Form::label('club', 'Športový klub', ['class'=>'block font-bold mb-2']) }}
                {{ Form::text('club', null, ['class'=>'border px-3 py-2 w-full focus:border-blue-400']) }}
            </div>
            <div class="mb-2">
                {{ Form::label('category', 'Kategória behu', ['class'=>'block font-bold mb-2']) }}
                {{ Form::select('category', ['13km'=>'13km','4km'=>'4km'], null,
                    ['class'=>'border px-3 py-2 w-full focus:border-blue-400']) }}
            </div>
            <div class="my-8 g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            <div class="mt-8">
                <button class="bg-blue-500 text-white font-bold rounded-sm px-8 py-2 hover:bg-blue-400">Registrovať</button>
            </div>
        {{ Form::close() }}
    </div>

@endsection