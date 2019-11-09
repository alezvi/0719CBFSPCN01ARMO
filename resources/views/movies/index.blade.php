
<form action="">
    <div>
        <input type="text" name="q" placeholder="Buscar..." value="{{ request('q') }}">
    </div>
    <div>
        <button>Buscar</button>
    </div>
</form>

<a href="/movies">Limpiar busqueda</a>

<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
</ul>

{{ $movies->links() }}