<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>LaFrancoise221</title>
</head>
<body>

    <header>
        <div class="logo">
            La françoise
        </div>

        <div class="navbar">

            <div class="hamburger" id="hamburger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            <ul id="item">
                <li>
                    <a href="">Accueil</a>
                </li>
                <li>
                    <a href="">Nouveautés</a>
                </li>
                @foreach ($categories as $categorie)

                <li>
                    <a href="">
                        {{ $categorie->libelle }}
                    </a>
                </li>

                @endforeach
                <li>
                    <a href="">A propos</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="barre">
        <div class="recherche">
            <form action="">
                <input type="text" name="" id="">
                <input type="submit" name="rechercher" id="" value="rechercher">
            </form>
        </div>
        <div class="panier">
            <a href="{{ route('panier') }}" style="color: black; font-size: 20px;">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>(5)
            </a>
        </div>
    </div>

    <div class="banniere">

    </div>


    <section class="categories">

        @foreach ($categories as $categorie)

            <div class="categorie">
                <h2>{{ $categorie->libelle }}</h2>
            </div>

        @endforeach

    </section>

    <div class="latest">
        <div class="latest-title">Nouveautés</div>

        <div class="new-produits box">


            @foreach ($souscategories as $souscategorie)

                @foreach ($souscategorie->articles as $article)

                    <div class="new-produit">
                        <img src="{{ $article->url_img_article }}" alt="">
                        <div class="text">
                            <h3>{{ $article->nom_article }}</h3>
                            <h6>{{ $article->description }}</h6>
                            <div class="prix">{{ strval($article->prix_article) }} Fcfa</div>
                        </div>

                    </div>

                @endforeach

            @endforeach
        </div>

    </div>




    <div class="commentaires">
        <h1>Avis clients</h1>
        <div class="line"></div>


            @foreach ($commentaires as $commentaire)
                <div class="comment">

                </div>
                {{ $commentaire->commentaire }}

            @endforeach

    </div>

    <h1 class="sous-title">Voir plus</h1>

    <div class="souscategories">


        @foreach ($souscategories as $souscategorie)

            <div class="souscategorie">
                <p>{{ $souscategorie->libelle }}</p>
            </div>


        @endforeach
    </div>

@include('menus.footer')


