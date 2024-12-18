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

<div class="text-center my-5">
    <h2 class="fw-bold" style="font-size: 2rem; color: black;">Avis Clients</h2>
    <div id="carouselTestimonials" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- Avis 1 -->
            <div class="carousel-item active text-center">
                <img src="{{ asset('images/client1.png') }}" class="rounded-circle mb-3" alt="Client 1" style="width: 100px; height: 100px; object-fit: cover;">
                <blockquote class="blockquote">
                    <p class="mb-3" style="color: #ccc;">This theme made my business what it is today — outstanding, wildly successful, ahead of its time. My products are ...</p>
                </blockquote>
                <footer class="blockquote-footer text-white">Max Payne, <cite title="Source Title">Critic At Billboard Magazine</cite></footer>
            </div>
            <!-- Avis 2 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/client2.png') }}" class="rounded-circle mb-3" alt="Client 2" style="width: 100px; height: 100px; object-fit: cover;">
                <blockquote class="blockquote">
                    <p class="mb-3" style="color: #ccc;">Incredible service and fantastic design! My clients love it, and I can't wait to see what they do next!</p>
                </blockquote>
                <footer class="blockquote-footer text-white">Jane Doe, <cite title="Source Title">CEO, Creative World</cite></footer>
            </div>
            <!-- Avis 3 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/client3.png') }}" class="rounded-circle mb-3" alt="Client 3" style="width: 100px; height: 100px; object-fit: cover;">
                <blockquote class="blockquote">
                    <p class="mb-3" style="color: #ccc;">A wonderful experience from start to finish. This team truly knows what they're doing!</p>
                </blockquote>
                <footer class="blockquote-footer text-white">John Smith, <cite title="Source Title">Founder, Design Hub</cite></footer>
            </div>
        </div>
        <!-- Contrôles de navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>
   .image-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-top: 100%;
    background-color: #f0f0f0;
}

.image-zoom {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
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


#carouselTestimonials {
    background-color: transparent; 
    padding: 50px 20px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}


.carousel-item blockquote {
    font-style: italic;
    font-size: 1.2rem;
}

.carousel-item footer {
    font-size: 0.9rem;
    font-weight: 300;
    margin-top: 10px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(1); /* Icônes en blanc */

}

</style>
@endsection
