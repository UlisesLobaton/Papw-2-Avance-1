@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

    <div class="user-images">
        <img id="cover" src="/images/{{$trainer->cover}}" class="mx-auto d-block" alt="">
        <img id= "avatar" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
    </div>

    <div class="user-info text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
        <form method="POST" action="/trainers/{{$trainer->slug}}" class="form-group" enctype="multipart/form-data">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

    <add-pokemon-component></add-pokemon-component>
    <create-pokemon-component></create-pokemon-component>

    <add-video-component></add-video-component>
    <post-video-component></post-video-component>

    <follow-trainer-component></follow-trainer-component>

    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">POKEINFO</h3>
            </div>
            <div class="row">

            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
                    <li data-filter=".filter-poketeam">POKETEAM</li>
                    <li data-filter=".filter-pokebattle">POKEBATTLES</li>
                    <li data-filter=".filter-pokefriend">POKEFRIENDS</li>
                </ul>
            </div>
        </div>

        <pokemon-list-component></pokemon-list-component>
        <video-list-component></video-list-component>
        <follower-List-component></follower-List-component>

    </section>

@endsection
