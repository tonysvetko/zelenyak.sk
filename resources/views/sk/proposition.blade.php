@extends('layout', ['title'=>'Propozícia'])

@section('content')
    <h1 class="text-2xl lg:text-3xl font-bold mb-8 leading-none text-center border-b-4 pb-8">{!! nl2br($event->title) !!}</h1>
    <div class="markdown">
        {!! $event->description !!}
    </div>

    <hr class="border-2 my-8">

    <div class="grid grid-gap-8 lg:grid-columns-2">
        <div>
            <div class="font-bold">4 kilometrová trať</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d10835.496028109912!2d18.651916956469222!3d47.99903405424145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m3!3m2!1d48.0073868!2d18.6563752!4m3!3m2!1d47.9912827!2d18.658808399999998!4m3!3m2!1d48.007388899999995!2d18.6563895!5e0!3m2!1sen!2ssk!4v1569500074506!5m2!1sen!2ssk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div>
            <div class="font-bold">13 kilometrová trať</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15319.576808658605!2d18.665655799999985!3d47.9923978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m3!3m2!1d48.0073868!2d18.6563752!4m3!3m2!1d47.975387999999995!2d18.7037209!4m3!3m2!1d48.007388899999995!2d18.6563895!5e0!3m2!1sen!2ssk!4v1569500216368!5m2!1sen!2ssk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
@endsection