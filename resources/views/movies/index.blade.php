@extends('layouts.website')

@section('content')
<div id="movies-list"></div>

<script>

let listadoDePeliculas = document.getElementById('movies-list')

function movieInfo(movie) {
    return `
        <div class="card">
            <p>${movie.title}</p>
            <p>Duracion: ${movie.length}</p>
        </div>
    `
}

fetch('http://localhost:8000/api/movies')
    .then(function (response) {
        return response.json()
    })
    .then(function (movies) {
        // cada pelicula del array pasa a la funcion callback
        movies.data.map(function (movie) {
            // la funcion genera el html de cada pelicula
            listadoDePeliculas.innerHTML += movieInfo(movie) 
        })
    })
</script>

@endsection