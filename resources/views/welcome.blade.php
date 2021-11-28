@extends('layouts.app')
@section('content')
{{--    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!

                <ul class="list-group mt-3">
                    <li class="list-group-item">Username: {{ Auth::user()->username }}</li>
                    <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                    <li class="list-group-item">Referral link: {{ Auth::user()->referral_link }}</li>
                    <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
                    <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
                </ul>
            </div>
        </div>
    </div>--}}

<div class="w-full h-screen bg-fixed flex flex-col"
  x-data="{navOpen: false, scrolledFromTop: false}"
x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
@scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
:class="{
'overflow-hidden': navOpen,
{{--
'overflow-scroll': !navOpen
--}}
}" style="background-image: url('https://www.prepayinvestimenti.it/prepay-home-background.79bc59f59ba4a2f8c371.jpg')">


    <x-navbar/>

    <div class="container flex items-center h-full mx-auto">
        <div class="flex flex-col mb-4">
            <div class="flex flex-col items-start w-1/3 mb-4">
                <h1 class="mt-10 left-8 text-6xl text-b3 font-black border-l-8 border-y1 ml-10 pl-6">  METTIAMO AL CENTRO LA
                    RISORSA PIÙ IMPORTANTE:
                    L'INVESTITORE!
                </h1>
            </div>
            <div class="ml-8 flex flex-row space-x-2 fill-current mt-4">
                <button class="bg-b3 hover:bg-b2 text-white font-bold py-2 px-4 rounded">
                    Scopri l'Ecosistema PrePay
                </button>
                <button class="border-solid border-4 border-y1 hover:bg-y1 text-white font-bold py-2 px-4 rounded">
                    Vedi tutte le opportunità
                </button>
            </div>


        </div>

    </div>


</div>

<div class="w-full h-screen bg-white">

        <div class="flex flex-wrap items-center place-content-center place-items-center content-center -mx-8 ">

            <div class="my-8 px-8 mx-6  w-full lg:w-1/4 xl:w-1/4 shadow-xl rounded-xl">
                <img class="w-60"src="https://freesvg.org/img/Placeholder.png">
                GC BIS - SISMA ED ECOBONUS 110%
                89831 Gerocarne, Province of Vibo Valentia, Italy
                Adeguamento sismico e riqualificazione energetica di 2 immobili attraverso gli incentivi del Superbonus 110%
                <x-bar/>
                <x-bar/>

            </div>

            <div class="my-8 px-8 mx-6  w-full lg:w-1/4 xl:w-1/4 shadow-xl rounded-xl">
                <img class="w-60"src="https://freesvg.org/img/Placeholder.png">
                GC BIS - SISMA ED ECOBONUS 110%
                89831 Gerocarne, Province of Vibo Valentia, Italy
                Adeguamento sismico e riqualificazione energetica di 2 immobili attraverso gli incentivi del Superbonus 110%
                <x-bar/>
                <x-bar/>

            </div>

            <div class="my-8 mx-6 flex flex-col w-full lg:w-1/4 xl:w-1/4 shadow-xl rounded-xl ">
                <div class="w-full h-60  ">
                    <img class="object-cover object-center h-60 w-full " src="https://freesvg.org/img/Placeholder.png">
                </div>
                <div class="px-4 bg-white text-justify object-cover object-center items-center place-content-center place-items-center content-center ">
                    <div class="p-2 tracking-tighter">
                        <p class="text-b3 tracking-tight text-sm">GC BIS - SISMA ED ECOBONUS 110% </br>89831 Gerocarne, Province of Vibo Valentia, Italy</br>Adeguamento sismico e riqualificazione energetica di 2 immobili attraverso gli incentivi del Superbonus 110%</br> </p>
                    </div>

                    <div class="inline-flex tracking-wider items-center content-center">
                        <div class="border-r-2 pr-4  font-bold py-2 px-4 rounded-l text-left">
                            7% </br>
                            ROI stimato
                        </div>
                        <div class="border-l-2 pl-4 border-b3 h font-bold py-2 px-4 rounded-r text-left">
                            8 mesi </br>
                            durata
                        </div>
                    </div>
                    <div class="flex flex-col py-4 my-4">
                        <x-bar/>
                        <x-bar/>

                    </div>
                </div>


            </div>


        </div>
</div>

<div class="w-full h-screen bg-b3 backdrop-filter backdrop-blur-lg">
    <h1 class="text-white text-center text-6xl p-12 ">I PILASTRI DELL'ECOSISTEMA PREPAY</h1>
    <div class="flex flex-col items-center place-content-center place-items-center content-center -mx-8">

        <div class="flex flex-row mt-1/4 " >
            <div class="rounded-full bg-white p-8 m-8 h-48 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
            <div class="rounded-full bg-white p-8 m-8 h-48 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
            <div class="rounded-full bg-white p-8 m-8 h-48 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
        </div>

        <div class="flex flex-row mt-1/4 pt-10" >
            <div class="rounded-full bg-white h-48 p-8 m-8 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
            <div class="rounded-full bg-white h-48 p-8 m-8 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
            <div class="rounded-full bg-white h-48 p-8 m-8 w-48 filter drop-shadow-lg shadow-2xl flex text-center content-center items-center justify-center...">Circle</div>
        </div>

    </div>
</div>

<div class="w-full h-screen bg-white">
    <div class="flex flex-row">
        <div class="h-2/3 w-1/2 bg-red-500"> PROGRAMMA IL TUO FUTURO FINANZIARIO</br>

            Scegli il tuo obiettivo ed inizia il tuo cammino iscrivendoti gratuitamente</br></br></br>

            SCEGLI IL PRIMO PROGETTO SU CUI VUOI INVESTIRE</br>

            Scegli il progetto in base all'investimento minimo, alla durata ed al guadagno previsto</br></br></br>

            LASCIA CHE IL DENARO LAVORI AL POSTO TUO</br>

            Scegli l'importo che preferisci, investi nel tuo primo progetto ed inizia a far fruttare il tuo capitale</br></br></br>

            INCASSA SUBITO IL TUO GUADAGNO</br>

            Grazie alla formula Prepay l'interesse guadagnato sarà subito disponibile nel tuo wallet</br></br></br>

            PRELEVA IL TUO GUADAGNO</br>

            Preleva subito il tuo guadagno oppure reinvestilo in uno degli altri progetti della piattaforma</br></br></br>

            SEGUI I TUOI INVESTIMENTI</br>

            Segui gli aggiornamenti dell'operazione nella tua area personale e controlla l'andamento dei tuoi investimenti</br></br></br>

            RECUPERA IL TUO CAPITALE</br>

            Concludi l'operazione entro la scadenza predefinita sarà ora caricato sul tuo wallet anche il capitale investito  </div>
        <div class="h-2/3 w-1/2 bg-yellow-500">
            PERCHÉ PREPAY</br></br>

            PERCHÉ METTIAMO AL CENTRO GLI INVESTITORI COME TE</br>

            Abbiamo progettato tutta la nostra piattaforma per prenderci cura di chi investe</br></br></br>

            PERCHÉ CON LA FORMULA PREPAY MASSIMIZZI IL TUO RENDIMENTO</br>

            Ottieni gli interessi in anticipo e puoi investirli in un altro progetto</br></br></br>

            PERCHÉ TI PROPONIAMO SOLO PROGETTI CHE HANNO "I NUMERI GIUSTI"</br>

            Un team di tecnici, avvocati, esperti finanziari e commercialisti, indipendente PrePay, valuta il livello di rischio di ogni progetto e gli assegna un rating</br></br></br>

            PERCHÉ SIAMO AL TUO FIANCO. LETTERALMENTE.</br>

            Ci impegniamo ad investire in ogni progetto</br></br></br>
        </div>
    </div>


</div>

    <section class="py-20 2xl:py-40 bg-b3">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap -mx-4 pb-24 mb-16 border-b border-gray-400">
                <div class="w-full lg:w-2/5 px-4 mb-16 lg:mb-0">
                    <span class="text-lg text-blue-400 font-bold">We&apos;re Zospace</span>
                    <h2 class="max-w-sm mt-8 mb-12 text-5xl text-white font-bold font-heading">Thank you for your time</h2>
                    <p class="mb-16 text-gray-300">The brown fox jumps over the lazy dog.</p>
                    <div><a class="inline-block mb-4 sm:mb-0 sm:mr-4 py-4 px-12 text-white font-bold bg-blue-500 hover:bg-blue-600 rounded-full transition duration-200" href="#">Active demo</a><a class="inline-block px-12 py-4 text-white font-bold border border-gray-200 hover:border-white rounded-full" href="#">Contact</a></div>
                </div>
                <div class="w-full lg:w-3/5 px-4">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-16 lg:mb-0">
                            <ul class="text-lg">
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Hello</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Story</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Pricing</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Applications</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Stats</a></li>
                                <li><a class="text-gray-200 hover:text-gray-100" href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-16 lg:mb-0">
                            <ul class="text-lg">
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Newsletter</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Features</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">How it works</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">FAQ</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Portfolio</a></li>
                                <li><a class="text-gray-200 hover:text-gray-100" href="#">Team</a></li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-1/3 px-4">
                            <ul class="text-lg">
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">New account</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Log in</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Testimonials</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Contact</a></li>
                                <li class="mb-6"><a class="text-gray-200 hover:text-gray-100" href="#">Privacy Policy</a></li>
                                <li><a class="text-gray-200 hover:text-gray-100" href="#">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex justify-between">
                <p class="text-lg text-gray-200 mb-8 md:mb-0">&copy; 2021 Shuffle. All rights reserved.</p>
                <div class="flex items-center">
                    <a class="inline-block mr-2" href="#">
                        <img class="h-12" src="zospace-assets/logos/facebook.svg" alt="">
                    </a>
                    <a class="inline-block mr-2" href="#">
                        <img class="h-12" src="zospace-assets/logos/instagram.svg" alt="">
                    </a>
                    <a class="inline-block" href="#">
                        <img class="h-12" src="zospace-assets/logos/twitter.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
