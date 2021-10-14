@extends('layout', ['title'=>'Zelenyákova trinástka'])

@section('banner')
    <div class="hero" data-parallax="scroll" data-image-src="/img/hero-back.sk.jpg">
        <div class="container">
            <div class="hero__inner">
                <h1 class="hero__title">@lang('Zelenyákova trinástka')</h1>
                <div class="hero__text">Vitajte na stránke medzinárodného cestného behu Zelenyákova trinástka. </div>
                <div class="hero__text">Naša bežecká súťaž patrí medzi jedny z najstarších na území Dolného Pohronia. Ak chcete zažiť jedinečný športový zážitok, tak Vás čakáme v októbri v Hronovciach. Kombináciu krásnej prírody a skvelých športovcov nájdete na medzinárodnom cestnom behu Zelenyákova trinástka. </div>
                <div class="text-center my-12">
                    <a href="https://registrace.sportsoft.cz/registration.aspx?e=2142" class="bg-orange-600 text-white hover:bg-orange-500 font-bold px-8 py-4 uppercase rounded">Registrovať</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="text-center mb-8">
        <a href="{{ route('front.anouncement') }}" class="px-3 py-2 bg-gray-700 hover:bg-gray-800 text-white inline-flex items-center rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
            VYHLÁSENIE ÚČASTNÍKA O ABSOLVOVANÍ TESTOVANIA
        </a>
    </div>

{{--
<div class="bg-red-100 text-red-500 border border-red-500 p-8 mb-8 rounded shadow">
    <div class="text-3xl font-bold text-center mb-2">2% Z DANE</div>
    <p class="mb-2">Ako každý rok, tak aj tento rok sa snažíme získať čo najviac financií na fungovanie nášho občianskeho združenie. Počas nášho 10 ročného fungovania bol rok 2020 zatiaľ najťažším rokom, nemali sme skoro žiadne príjmy, všetky výdavky počas roka hradil predseda nášho združenia.</p>

    <p class="mb-2">Touto cestou Vás chceme poprosiť, ak nemáte komu poukázať 2% zo svojej už zaplatenej dane, môžete ich poukázať nášmu združeniu, čím podporíte všetky naše aktivity.</p>

    <p class="mb-2 font-bold">Naše plány na rok 2021:</p>

    <ul class="list-disc pl-4 mb-8">
        <li>organizovanie kultúrno-spoločenských akcií (podľa pandemickej situácie),</li>
        <li>obnova budovy bývalej ZŠ v Domaši na Vlastivedné múzeum.</li>
    </ul>

    <div class="lg:flex justify-center">
        <a class="block px-4 py-2 bg-red-500 hover:bg-red-600 text-white lg:mr-2 rounded flex items-center justify-center mb-2 lg:mb-0"
            href="/storage/vyhlasenie-o-poukazani-dane_dudich.pdf">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>STIAHNUŤ zamestnanec - vyhlásenie</a>

        <a class="block px-4 py-2 bg-red-500 hover:bg-red-600 text-white lg:ml-2 rounded flex items-center justify-center"
            href="/storage/Potvrdenie o zaplateni dane z prijmov zo zavislej cinnosti.pdf">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>STIAHNUŤ zamestnanec - potvrdenie</a>
    </div>
</div>
 --}}

<section class="clearfix">
    <h2 class="text-3xl font-bold mb-8 text-center">HISTÓRIA BEHU</h2>

    <p class="mb-4 text-indent text-justify">Keby sme si v roku 1995 boli pozreli bežecký kalendár v našom užšom regióne, pravdepodobne by sme ťažko hľadali nejaké akcie. V Želiezovciach sa naposledy bežecká súťaž konala v roku 1989. V nasledujúcich rokoch sa v našom okolí nekonali žiadne preteky. Najbližšie súťaže sa konali v Tlmačoch a v Komárne. K tomuto príbehu patrí aj zmienka, že od roku 1994 som po niekoľkoročnej prestávke začal znova behať. Keď ma druhýkrát zvolili za starostu, rozhodol som sa, že skúsime organizovať bežeckú súťaž aj v Hronovciach.</p>

    <p class="mb-4 text-indent text-justify">Tento nápad sa podarilo zrealizovať v októbri roku 1995. Bežeckú súťaž s regionálnym významom a s dôrazom na mladých ľudí som chcel organizovať v skromných podmienkach, aby mladí mali pravidelný pohyb, a aby sa športovanie stalo dôležitou súčasťou ich života.</p>

    <p class="mb-4 text-indent text-justify">Po tom, čo v miestnej samospráve a v užšom kruhu mojich priateľov mala táto myšlienka pozitívnu odozvu, sme v krátkom čase vyznačili bežeckú trať a začali sme pripravovať súťaž. Táto trasa bola od IX. ročníka zmenená, nová je krajšia a bezpečnejšia.</p>


    <p class="mb-4 text-indent text-justify">Pomenovanie súťaže pochádza odo mňa, nakoľko pri vyznačení trate, hneď pri vchádzaní na hlavnú cestu som ako prvú uličnú tabulu videl označenie ulice Dr. Jána Zelenyáka; podľa toho bola bežecká súťaž pomenovaná ako Zelenyákova trinástka. Číslo 13 značí dĺžku trasy (13 000 m).</p>

    <p class="mb-4 text-indent text-justify">V našej dedine nemalo organizovanie takéhoto druhu športu žiadnu tradíciu. Možno dvaja sme chodili rekreačne behať. Ako starosta obce som do prípravy a organizovania súťaže zapojil pracovníkov obecného úradu, miestnych pedagógov a verejno-prospešných pracovníkov. Posledné desaťročie pomáha pri organizácii a usporiadaní súťaže Občianske združenie Ferenca Dudicha pod vedením Gábora Juhásza.</p>

    <div class="my-8">
        <div id="gallery" class="grid grid-columns-1 sm:grid-columns-2 lg:grid-columns-2 grid-gap-8 mb-2">
            @for ($i = 1; $i < 5; $i++)
                <a class="block" href="/img/photos/{{ sprintf('%05d.jpg', $i) }}">
                    <img class="w-full border shadow" src="/img/photos/{{ sprintf('%05d-th.jpg', $i) }}" alt="">
                </a>
            @endfor
        </div>
        <a href="{{ route('front.gallery') }}">Viac fotografií nájdete v galérii &raquo;</a>
    </div>


    <p class="mb-4 text-indent text-justify">Napriek tomu, že od roku 2007 nie som starostom obce a členovia samosprávy sa taktiež vymenili, na moju veľkú radosť bežecká súťaž naďalej existuje. Hlavným sponzorom súťaže je Nitriansky samosprávny kraj.</p>

    <p class="mb-4 text-indent text-justify">Zelenyákova trinástka má medzi bežcami dobré meno. Pretekárov čaká každoročne bohatá a originálna forma tomboly, nakoľko majú medzi cenami balíky zemiakov a cibule. Táto tradícia sa sformovala postupne vďaka miestnym podnikateľom. Medzi najväčšími sponzormi podujatia patrí firma Kovacs Agro s.r.o., za čo ďakujeme pánovi Ing. Róbertovi Kovácsovi.</p>

    <p class="mb-4 text-indent text-justify">Ako som už spomínal, pôvodne sme chceli organizovať bežeckú súťaž s regionálnym významom. Napriek tomu, že počet účastníkov nie je vysoký, predsa pri prečítaní mien víťazov a účastníkov je evidentné, že prichádzajú aj z ďalekých kútov. Na našu súťaž pravidelne prichádzajú bežci aj z Maďarska.</p>

    <p class="mb-4 text-indent text-justify">Počas uplynulých rokov sme mali v Hronovciach česť hostiť mnoho kvalitných mladých a starších bežcov. Mali sme tu napr. Jána Križáka, ktorý do dnešného dňa drží traťový rekord. Jeho výsledok 41:06 minút ešte dlhú dobu nebude prekonaný. Chcel by som spomenúť Moniku Kuriačkovú z Levíc, ktorá bola výbornou triatlonistkou, a v súčasnosti je úspešnou trénerkou Slovenského triatlonistického tímu. Jej dcéra, Irena taktiež sa zúčastnila našej súťaže, ktorá odvtedy získala titul majstra sveta. Chcel by som ešte spomenúť Imricha Magyara, ktorý je viacnásobným majstrom Slovenska v behu; Miroslava Juru z Levíc, ktorý bol za mlada prvotriednym bežcom Československa. Mali sme tu Jána Tušku z Komárna, ktorý pred niekoľkými rokmi zomrel. Tento nezničiteľný malý človek vo svojej vekovej kategórii sa stal majstrom Európy v maratónovom behu, a ako vojak z povolania získal množstvo cien. Som rád, že som sa sním mohol stretnúť a mohol patriť medzi mojich priateľov. Pravidelnou účastníčkou nášho behu je Eva Seidlová z Tlmáč, ktorá si už odbehla vyše 320 maratónov. Taktiež Peter Pavuk z Levíc, ktorý v roku 2014 jubiloval s jeho 200. zdolaním maratónovej trate, a nie v poslednom rade môj priateľ Gejza Kele z Moče, ktorý má už za sebou  vyše 140 maratónov. Ešte by som chcel spomenúť Danu Janečkovú a Evu Budinskú, ktoré sú výbornými bežkyňami, a taktiež Michaelu Kúdelovú z Tlmáč, ktorá je známou hokejovou rozhodkyňou.</p>

    <p class="mb-4 text-indent text-justify">Po dvadsiatichštyroch rokoch môžem konštatovať, že časom náš peletón starne. Preto som dodatočne pridal bežeckú kategóriu s vekom nad 60 rokov. Okrem toho sme vytvorili pre začínajúcich a menej cvičiacich bežcov trať s dĺžkou 4 000 metrov. Našim cieľom je, aby pravidelne športovalo čím viac ľudí. --Ľudovít Béres</p>
</section>


<section class="clearfix">
    <h1 class="text-3xl font-bold mb-8 text-center">Kto bol vlastne ThDr. Ján Zelenyák?</h1>

    <img class="float-left m-8" src="/img/zelenyak.png" alt="">
    <p class="mb-4 text-indent text-justify">Narodil sa 16. júna v roku 1860 v obci Jablonov (okres Levoče). Teológiu študoval na Pázmáneume vo Viedni, po ukončení svojich štúdii fungoval ako kaplán v neďalekej obci Beša. Istý čas bol učiteľom teológie v Spišskej Kapitule. Najskôr bol zástupcom jedného volebného obvodu južného Uhorska  v Uhorskom sneme, potom bol zástupcom za obvod Novej Bane. Ovládal sedem jazykov. Do Čajakova prišiel v októbri roku 1903, kde zastával funkciu rímskokatolíckeho dekana. Popri svojom cirkevnom pôsobení celý jeho život zasvätil liečením chorých ľudí, a písaním kníh zaoberajúcich sa touto tematikou. V I. svetovej vojne pôsobil ako kurát; po tom napísal svoje životné dielo „Természetes gyógymód “ (v preklade „Prírodný spôsob liečenia“), ktorý mal aj v Amerike taký veľký úspech, že Dr. Zelenyák musel – počas jeho prednášateľskej okružnej cesty -  cez „kábel“ doobjednať ďalšie výtlačky. V posledných rokoch jeho života sa stal pápežským prelátom. Zomrel náhle v rakúskej obci Gallspach, do ktorej pôvodne prišiel za účelom liečby svojej aterosklerózy. Tam je aj pochovaný.</p>

    <p class="mb-4 text-indent text-justify">Počas jeho pôsobenia v Čajakove – nakoľko stále navštevoval chorých a doma býval len cez nedele – skoro vždy ho zastupovali naraz dvaja kapláni, ale viackrát sa u neho liečili aj chorí kňazi, ktorých sám liečil. Počas viacerých volebných cyklov bol poslancom obecného zastupiteľstva v Čajakove, a taktiež bol predsedom školskej rady.</p>
</section>

<hr class="border-2 my-8">

<div class="flex flex-wrap justify-center items-center my-12">
    <a href="#"><img class="h-40 xmx-8" src="/img/dudich-oz-logo.png" alt="Dudich OZ logo"></a>
    <a href="https://www.unsk.sk/"><img class="h-32 xmx-8" src="/img/nsk.png" alt="NSK logo"></a>
    <a href="http://beh.sk/"><img class="h-12 xmx-8" src="/img/beh-sk-logo.png" alt=""></a>
</div>


@endsection


@section('footer.scripts')
<script>
    $('#gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled:true,
            tCounter: '%curr%/%total%',
        }
    });
</script>
@endsection