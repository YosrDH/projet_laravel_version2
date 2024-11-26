@extends('app')
@section('titre', 'Home')
@section('contenu')

<div class="text-center my-5">
    <h1 class="display-4 fw-bold">Bienvenue !</h1>
    <p class="lead mt-4" style="font-size: 1.5rem; color: #000000;font-weight:bold;">
        Découvrez notre univers créatif où chaque image raconte une histoire et chaque instant devient art.
    </p>
    <p class="mt-3" style="font-size: 1.2rem; color: #000000;">
        Explorez, inspirez-vous et laissez la magie opérer. Nous sommes ravis de vous accueillir !
    </p>
    <a href="#explore" class="btn btn-primary btn-lg mt-4" style="background-color: #6f5a32; border: none;">
        Commencez l'exploration
    </a>
</div>
<div class="container my-5">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="image-container">
                <!-- Afficher l'image -->
                <img src="{{ asset('images/' . $category['image']) }}"
                     class="img-fluid image-zoom"
                     alt="{{ $category['title'] }}">
                <div class="image-title">
                    {{ $category['title'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .image-container {
        position: relative;
        overflow: hidden;
    }

    .image-zoom {
        transition: transform 0.3s ease-in-out;
        width: 100%;
        height: auto;
    }

    .image-container:hover .image-zoom {
        transform: scale(1.1);
    }

    .image-title {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        font-size: 22px;
        border-radius: 5px;
        display: none;
    }

    .image-container:hover .image-title {
        display: block;
    }
</style>
@endsection
