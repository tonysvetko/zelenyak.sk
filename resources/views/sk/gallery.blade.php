@extends('layout', ['title'=>'Galéria'])

@section('content')
    <h1 class="text-3xl font-bold mb-2">@lang('Galéria') {{ $year }}</h1>

    <div class="mb-4">
        @foreach ($years as $year)
            <a href="{{ route('front.gallery', $year->year) }}" class="hover:underline">{{ $year->year }}</a>
        @endforeach
    </div>

    <div id="gallery" class="grid grid-columns-1 sm:grid-columns-2 lg:grid-columns-4 grid-gap-4">
        @foreach ($photos as $photo)
            <div class="">
                <a class="block" href="/storage/gallery/large/{{ sprintf('%05d.jpg', $photo->id) }}">
                    <img
                        class="shadow rounded-sm"
                        src="/storage/gallery/thumb/{{ sprintf('%05d.jpg', $photo->id) }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
@endsection

@section('footer.scripts')
    <script>
        $('#gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tCounter: '%curr%/%total%',
            },
        });
    </script>
@endsection