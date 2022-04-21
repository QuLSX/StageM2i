@extends('layouts.base')

<h1>Accueil</h1>
<h1 style="text-align: center">Salon de tatouage situé à Laon</h1>

<p style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, corporis molestias! Nemo at voluptates impedit, mollitia ducimus illo deleniti perspiciatis molestiae dolores aliquid, illum voluptatem natus aperiam quod reprehenderit neque.</p>

<div class="carousel1">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/tattoo1.jpg" class="d-block w-100" alt="tt1" size="50px">
        </div>
        <div class="carousel-item">
            <img src="/img/tattoo2.jpeg" class="d-block w-100" alt="tt2" size="50px">
        </div>
        <div class="carousel-item">
            <img src="/img/tattoo3.jpg" class="d-block w-100" alt="tt3" size="50px">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précèdent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>