@include('menus.header')


<div class="banniere">

</div>

<section class="categories">

@foreach ($categories as $categorie)

    <p>{{ $categorie->libelle }}</p>

@endforeach

</section>

@include('menus.footer')
