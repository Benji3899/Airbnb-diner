<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diner airbnb</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section>
    <div>
        @if (Route::has('login'))
            <div class="nav w-full fixed justify-end flex sm:top-0 sm:left-0 p-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profil</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'enregistrer</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div class="banner flex justify-center items-center"  style=" background-image: url('{{asset('img/repas-famille1.jpg')}}');">
        <h1 class="text-center justify-center p-8 rounded-md">Nouveau concept <br>Airbnb Diner</h1>
    </div>

    <div class="w-3/4 mx-auto my-28">
        <h2 class="text-center">Quelles sont les différences entre <br> Airbnb Classique et Airbnb Diner ?</h2>
        <div class="box-features mx-auto flex justify-between mt-8">
            <div class="w-2/5">
                <h4 class="text-center mb-4">Airbnb Classique</h4>
                <p>C'est Airbnb comme vous le connaissez déjà. En tant qu'hôte, vous hébergez vos invités dans un foyer dont vous êtes propriétaire ou locataire.
                    Vous devez être transparent sur les prestations incluses dans vos offres ("rangement", "repas", "nettoyage" etc). Comme on peut le voir ici,
                    les repas font déjà partie des services que l'on peut inclure dans les offres d'hébergement, alors vous vous demandez en quoi va consister Airbnb diner ?</p>
            </div>
            <div class="w-2/5">
                <h4 class="text-center mb-4">Airbnb Diner</h4>
                <p>L'objectif de ce nouveau concept ne vise pas les mêmes cibles et n'a pas les mêmes objectifs que le concept d'origine.
                    Le but de ce concept est d'accueillir vos invités dans votre foyer, le temps d'un repas. Ce concept répond à la demande de nombreux particuliers
                    qui n'avait pas assez de temps à consacrer pour l'hébergement ou encore pour les passionnés de cuisine qui souhaite partager leurs plats.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="section-counter" class="py-12">
    <div class="container-counter w-3/4 mx-auto rounded-md py-8 flex justify-center items-center flex-col">

        <h2 id="headline" class="mb-6">Lancement de Airbnb Diner dans :</h2>
        <div id="countdown" class="w-4/5 mx-auto">
            <ul class="flex justify-between">
                <li class="py-4 px-10 rounded-md boxes-counter w-auto flex flex-col items-center"><span id="days"></span> Jours</li>
                <li class="py-4 px-10 rounded-md boxes-counter w-auto flex flex-col items-center"><span id="hours"></span> Heures</li>
                <li class="py-4 px-10 rounded-md boxes-counter w-auto flex flex-col items-center"><span id="minutes"></span> Minutes</li>
                <li class="py-4 px-10 rounded-md boxes-counter w-auto flex flex-col items-center"><span id="seconds"></span> Secondes</li>
            </ul>
        </div>
    </div>
</section>

<section id="section-features" class="flex flex-col items-center my-28">
    <h3>Les catégories de Airbnb Diner </h3>
    <div class="box-features w-3/4 mx-auto flex mt-6 gap-10">
        <div class="w-4/12">
            <h4 class="text-center mb-3">Le repas quotidien</h4>
            <p>Partager un de vos plats fait maison avec vos invités. La solution simple et pratique pour passer un moment convivial.</p>
        </div>
        <div class="w-4/12 flex flex-col justify-center items-center">
            <h4 class="text-center mb-3">La cuisine local ou spécialité</h4>
            <p>C'est la catégorie qu'il vous faut si vous voulez faire découvrir la cuisine de votre pays ou une spécialité de votre région.</p>
        </div>
        <div class="w-4/12">
            <h4 class="text-center mb-3">Le chef</h4>
            <p>Vous êtes un passionné de cuisine et de gastronomie ? Alors préparer un plat d'une grande qualité, accompagné avec votre touche de décorative.</p>
        </div>
    </div>
</section>


@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<section id="section-form" class="mb-24">
    <form method="post" action="{{ route('diner-airbnb.store') }}" class="w-2/4 mx-auto mt-6 space-y-6">
        @csrf
        {{--        @method('patch')--}}
        <h4 class="text-center">Contactez-nous</h4>
        <div class="flex justify-between flex-wrap gap-6">
            <div class="w-5/12 flex flex-col gap-6">
                <div class="flex flex-col">
                    <label for="lastname">Nom*</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div class="flex flex-col">
                    <label for="firstname">Prénom*</label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>
            </div>
            <div class="w-5/12 flex flex-col gap-6">
                <div class="flex flex-col">
                    <label for="email">Mail*</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="flex flex-col">
                    <label for="sujet">Sujet</label>
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet du message">
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>
            </div>
        </div>
        <button class="btn rounded-md py-2 px-6 font-bold text-white hover:duration-200" type="submit">Envoyer</button>
    </form>
</section>

</body>
</html>
