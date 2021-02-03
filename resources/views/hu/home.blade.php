@extends('layout', ['title'=>'Zelenyák tizenhármas'])

@section('banner')
    <div class="hero" data-parallax="scroll" data-image-src="/img/hero-back.hu.jpg">
        <div class="container">
            <div class="hero__inner">
                <h1 class="hero__title">@lang('Zelenyákova trinástka')</h1>
                <div class="hero__text">Üdvözöljük a Zelenyák tizenhármas nemzetközi futóverseny oldalán.</div>
                <div class="hero__text">A rendezvényünk az Alsó-Garam menti térség egyik legrégibb futóversenye. Különleges sportélményt szeretne átélni? Ha igen, akkor Önre várunk októberben Lekéren. A gyönyörú természet és a kiváló sportolók ötvezete a Zelenyák tizenhármas nemzetközi futóverseny.</div>
                <div class="text-center my-12">
                    <a href="{{ route('front.register') }}" class="bg-orange-600 text-white hover:bg-orange-500 font-bold px-8 py-4 uppercase rounded">Regisztráció</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

<section class="clearfix">
    <h2 class="text-3xl font-bold mb-8 text-center uppercase">A futóverseny története</h2>

    <p class="mb-4 text-indent text-justify">1995-ben, ha ránéztünk volna szűkebb régiónk futóversenynaptárára, bizony nagyon sivár képet kaptunk volna. Zselízen 1989-ben volt az utolsó évfolyama egy jó futóversenynek. Környékünkön egy sem volt. Legközelebb Tolmácson (Tlmače) és Komáromban (Komárno) voltak versenyek. A történethez hozzátartozik, hogy 1994-ben pár év kihagyás után újból elkezdtem futni. Amikor másodszor is megválasztottak polgármesternek, úgy gondoltam, hogy megpróbálkozhatnánk Lekéren is létrehozni egy futóversenyt.</p>

    <p class="mb-4 text-indent text-justify">Az ötletet 1995 októberében sikerült megvalósítani. Szerény körülmények között egy régiós jelentőségű versenyben gondolkodtam, és főleg a fiatalokra akartam hatni, hogy a rendszeres testmozgás, sportolás életük fontos részévé váljon.</p>

    <p class="mb-4 text-indent text-justify">Mivel az ötlet a helyi önkormányzatnál és szűkebb ismerőseim körében pozitív visszhangra talált, rövid idő alatt kijelöltük a pályát, mely a IX. évfolyamtól meg lett változtatva. Az új pálya szebb és biztonságosabb. Utána hozzáláttam a verseny előkészítéséhez.</p>


    <p class="mb-4 text-indent text-justify">A verseny megnevezése tőlem származik, ugyanis amikor a pálya kijelölése közben rátértem Lekér főútjára, először az utcanév táblára néztem, melyen Zelenyák János neve volt, így a futóverseny neve is Zelenyák tizenhármas lett. A 13-as szám a verseny hosszát jelöli (13 000 m). Dr. Zelenyák János életével, tevékenységeivel külön fejezet foglalkozik.</p>

    <p class="mb-4 text-indent text-justify">Falunkban semmilyen háttere nem volt egy ilyen verseny megrendezésének. Talán ketten kocogtunk rendszeresen. Mint a falu polgármestere a szervezésbe és a megrendezésre bevontam a községháza dolgozóit, a helyi pedagógusokat és a közmunkásokat. Egy évtizede már annak, hogy a helyi Dudich Ferenc polgári társulás Juhász Gábor vezetésével beleszállt a verseny szervezésébe és megrendezésébe.</p>

    <div class="my-8">
        <div id="gallery" class="grid grid-columns-1 sm:grid-columns-2 lg:grid-columns-2 grid-gap-8 mb-2">
            @for ($i = 1; $i < 5; $i++)
                <a class="block" href="/img/photos/{{ sprintf('%05d.jpg', $i) }}">
                    <img class="w-full border shadow" src="/img/photos/{{ sprintf('%05d-th.jpg', $i) }}" alt="">
                </a>
            @endfor
        </div>
        <a href="{{ route('front.gallery') }}">További fotók a Képgalériában tekinthetők meg &raquo;</a>
    </div>


    <p class="mb-4 text-indent text-justify">Annak ellenére, hogy 2007-től már nem vagyok a község polgármestere és az önkormányzat is kicserélődött, nagy örömömre a futóverseny tovább él. A verseny fő támogatója Nyitra Megye Önkormányzata.</p>

    <p class="mb-4 text-indent text-justify">Futóversenyünknek jó híre van a futók között. A versenyzőket minden évben gazdag, eredeti tombola várja, ugyanis burgonya és hagyma is a díjak közé került. Ez a szokás fokozatosan alakult ki a helyi vállalkozóknak köszönhetően. Adakozásban élen jár a helyi Kovacs Agro, k.f.t., melyért köszönet jár Kovács Róbert mérnök úrnak, a k.f.t. ügyvezető igazgatójának.</p>

    <p class="mb-4 text-indent text-justify">Mint már említettem, egy régiós jelentőségű versenyt szerettünk volna létrehozni. Annak ellenére, hogy a résztvevők száma nem túl magas, mégis ha megnézzük a győztesek és a résztvevők névsorát, nagyon sok és távoli helyről jöttek versenyzők. Magyarországról is rendszeres résztvevői vannak versenyünknek.</p>

    <p class="mb-4 text-indent text-justify">Az elmúlt évek alatt sok jó fiatal és idősebb versenyzőt üdvözölhettünk Lekéren. Itt van pl. Ján Križák, aki a mai napig csúcstartó. 41,06 perces eredménye még sokáig nem lesz javítva. Megemlíteném még Monika Kuriačkovát Léváról, aki kitűnő triatlon versenyző volt, ma pedig a szlovák triatlon válogatott sikeres edzője. Lánya, Irena is részt vett versenyünkön, aki azóta már világbajnoki címmel is büszkélkedhet. Megemlítem Magyar Imrét, aki sokszoros szlovák futóbajnok. Miroslav Jurát Léváról, aki fiatal korábban Csehszlovákiában élvonalbeli futó volt. Itt volt Ján Tuška is Komáromból, aki az óta sajnos elhunyt.  Ez az elnyűhetetlen kis ember korosztályos Európa-bajnok lett maratoni futásban, és mint hivatásos katona nagyon sok versenyt nyert. Örülök, hogy találkozhattam vele, és ismerőseim közé tartozott. Rendszeres résztvevője versenyünknek Eva Seidlová Tolmácsról, aki már több mint 320  maratont futott le. Továbbá Peter Pavuk Léváról, aki 2014-ben teljesítette a 200. maratonját és Kele Géza barátom Dunamocsról, aki ez idáig több mint 140 maratont futott le. Továbbá Dana Janečková  és Eva Budinská kitűnő futónők és Michaela Kúdelová Tolmácsról, aki ismert hokibíró.</p>

    <p class="mb-4 text-indent text-justify">Húsz év után megállapítottam, hogy kissé öregszik a mezőny. Ezért iktattam be utólag a 60 év feletti korosztályokat. Ezen kívül létrehoztunk még egy 4 000 méteres távot, amelyen a kezdő és kevésbé edzett futók versenyezhetnek. A cél az, hogy az emberek minél többet és rendszeresebben mozogjanak. --Béres Lajos</p>
</section>


<section class="clearfix">
    <h1 class="text-3xl font-bold mb-8 text-center">Ki is volt ThDr. Zelenyák János?</h1>

    <img class="float-left m-4 mt-0" src="/img/zelenyak.png" alt="">
    <p class="mb-4 text-indent text-justify">1860. június 16-án született Szepesalmáson (ma Jablonov – lőcsei járás). Bécsben a Pazmaneumban tanult, majd Barsbesén működött mint káplán, aztán Szepesváralján (Spišské Podhradie) volt teológiai tanár. Előbb valamelyik dél magyarországi választókerületnek, majd 1908-ban az újbányai kerületnek volt országgyűlési képviselője. Hét nyelven beszélt. Lekérre 1903 októberében érkezett, ahol a helyi római katolikus gyülekezet esperesplébánosa volt. Működése mellett egész életét a szenvedő emberiség gyógyítására és ilyen tárgyú könyvek írására fordította.</p>

    <p class="mb-4 text-indent text-justify">Az I. világháborúban mint katonai tábori lelkész vett részt; utána írta meg élete főmunkáját, a „Természetes gyógymód“ című hatalmas munkát, melynek még az Amerikában élő magyarság közt is oly sikere volt, hogy Dr. Zelenyáknak – ott tartott előadó körútja alkalmából – „kábelen“ kellett pótszállítmányt kérnie. Utolsó éveiben szentszéki tanácsossá nevezték ki. 1929. november 23-án az ausztriai Gallspachban halt meg, hová előrehaladott véredény-elmeszesedésének gyógyítása céljából utazott. Ott is temették el a papi kriptában.</p>

    <p class="mb-4 text-indent text-justify">Lekéri működése idején – mivel ő csaknem mindig betegekhez utazott s rendszerint csak vasárnap volt itthon – majdnem mindig két káplánja volt, de nagyon gyakran hosszú ideig tartózkodtak nála gyöngélkedő papok is, kiket gyógyított. Több választási cikluson át a lekéri önkormányzat képviselője, ill. a helyi iskolaszék elnöke volt.</p>
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