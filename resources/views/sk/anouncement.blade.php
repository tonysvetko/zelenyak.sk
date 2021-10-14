@extends('layout', ['title'=>'Vyhlásenie účastníka o absolvovaní testovania'])

@section('content')
    <div class="markdown mb-8">
        <h1>VYHLÁSENIE ÚČASTNÍKA O ABSOLVOVANÍ TESTOVANIA</h1>
        <p class="">Na základe vyhlášky č. 208/2021 Úradu verejného zdravotníctva Slovenskej republiky, ktorou sa nariaďujú opatrenia pri ohrození verejného zdravia k obmedzeniam hromadných podujatí, každý bežec čestne vyhlasuje, že disponuje negatívnym výsledkom RT-PCR testu alebo antigénového testu na ochorenie COVID-19 nie starším ako 12 hodín, alebo disponuje potvrdením o nasledovnej výnimke:</p>

        <ul>
            <li>je zaočkovaný druhou dávkou mRNA vakcíny proti ochoreniu COVID-19 a od tejto udalosti uplynulo viac ako 14 dní,</li>
            <li>je zaočkovaný prvou dávkou vektorovej vakcíny proti ochoreniu COVID-19 a od tejto udalosti uplynulo viac ako 4 týždne,</li>
            <li>je viac ako 14 dní po 1. dávke očkovania proti ochoreniu COVID-19 (mRNA alebo vektorovou vakcínou), a prvá dávka očkovania mi bola podaná v intervale do 180 dní od prekonania ochorenia COVID-19,</li>
            <li>prekonal ochorenie COVID-19 v období pred nie viac ako 180 dňami.</li>
        </ul>

        <p class="">Usporiadatelia pravdivosť prehlásenia nekontrolujú.</p>

        <p class="">Dokument čestné prehlásenie si môžete stiahnuť u nás na stránke prostredníctvom tlačidla pod týmto textom a dopredu si ho vyplniť. Pre tých, ktorý tam neurobia, bude dokument pripravený aj na mieste behu pri prezentácii bežcov.</p>

        <p class="">Tieto podmienky sa nevzťahujú na osoby vo veku do 12 rokov.</p>

    </div>
    <a href="{{ url('/storage/prehlasenie-bezcov.pdf') }}" class="px-3 py-2 bg-gray-700 hover:bg-gray-800 text-white inline-flex items-center rounded">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
        Vyhlásenie účastníka o absolvovaní testovania
    </a>
@endsection
