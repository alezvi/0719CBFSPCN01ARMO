<form action="/products" method="post">
    @csrf

    <div>
        <input type="text" name="title">
        <p>{{ $errors->first('title') }}</p>
    </div>

    <div>
        <button>Guardar</button>
    </div>
</form>